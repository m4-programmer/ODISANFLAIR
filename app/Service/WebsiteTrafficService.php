<?php

namespace App\Service;

use App\Models\WebsiteTraffic;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Facades\Agent;

class WebsiteTrafficService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function trackVisitor(Request $request, $domain)
    {
        $page = $request->path(); // Get the current page URL
        $ipAddress = $request->ip();
        $today = Carbon::today();

        $traffic = WebsiteTraffic::where('ip_address', $ipAddress)
            ->whereDate('created_at', $today)
            ->first();
        $deviceType = Agent::isPhone() ? "Phone" : ((Agent::isDesktop()) ? "Desktop" : "Tablet");
        $deviceName = Agent::device();
        if (!$traffic) {
            $traffic = WebsiteTraffic::create([
                "ip_address" => $ipAddress,
                "device_type" => $deviceType,
                "meta_data" => [],
            ]);
        }

        // Update meta-data for the current page
        $metaData = $this->generatePageMetaData($request, $deviceName);

        $trafficMetaData = $traffic?->meta_data;

        if (!isset($trafficMetaData[$page])) {
            $trafficMetaData[$page] = $metaData;
        } else {
            // Update metrics for existing page
            $existingData = $trafficMetaData[$page];
            $existingData['visits']++;
            // Update other metrics as needed
            $trafficMetaData[$page] = $existingData;
        }

        $traffic->meta_data = $trafficMetaData;
        $traffic->save();
    }

    public function generatePageMetaData(Request $request, $deviceName): array
    {
        return [
            'visits' => 1, // Initial visit
            'device'=>$deviceName
        ];
    }

    public function getAllUniqueVisitors(): int
    {
        return WebsiteTraffic::distinct('ip_address')->count();
    }

    public function getTodayUniqueVisitors(): int
    {
        $today = Carbon::today();
        return WebsiteTraffic::whereDate('created_at', $today)
            ->distinct('ip_address')
            ->count();
    }

    public function getMostVisitedPages(): array
    {
        $pages = WebsiteTraffic::get()->pluck('meta_data')->toArray();

        $pageVisits = [];
        $maxVisits = 0;
        foreach ($pages as $page) {
            foreach ($page as $key => $value) {
                if (!isset($pageVisits[$key])) {
                    $pageVisits[$key] = 0;
                }
                $pageVisits[$key] += $value['visits'];
                $maxVisits = max($maxVisits, $pageVisits[$key]);
            }
        }

        // Replace key '/' with 'home'
        if (isset($pageVisits['/'])) {
            $pageVisits['home'] = $pageVisits['/'];
            unset($pageVisits['/']);
        }

        // Sort the array by visit counts
        arsort($pageVisits);

        // Get the top 4 visited pages
        $mostVisitedPages = ['max'=> $maxVisits, 'data'=>array_slice($pageVisits, 0, 4, true)];

        return $mostVisitedPages;
    }

    public function getVisitorByDeviceType()
    {
        return WebsiteTraffic::select('device_type', DB::raw('COUNT(*) as total_visits'))
            ->groupBy('device_type')
            ->get();
    }

    public function getVisitorsSpread(string $interval = 'M')
    {
        // Initialize the visitor spread array
        $visitorSpread = $this->initializeSpread($interval);

        // Determine the grouping interval
        $groupedByInterval = 'W' === $interval ? 'W' : 'Y-m';

        // Get the visitors spread grouped by date
        $data = WebsiteTraffic::orderBy('created_at', 'desc')
            ->get()
            ->groupBy(function ($date) use ($groupedByInterval) {
                return Carbon::parse($date->created_at)->format($groupedByInterval);
            });

        // Update the visitor spread with counts from the data
        foreach ($data as $date => $visits) {
            if (isset($visitorSpread[$date])) {
                $visitorSpread[$date] = $visits->count();
            }
        }

        return $visitorSpread;
    }

    private function initializeSpread(string $interval)
    {
        // Initialize the visitor spread array
        $visitorSpread = [];

        // Generate dates based on the interval
        if ($interval === 'M') {
            $start = Carbon::now()->startOfYear();
            $end = Carbon::now()->endOfYear();
            for ($date = $start; $date->lte($end); $date->addMonth()) {
                $visitorSpread[$date->format('Y-m')] = 0;
            }
        } elseif ($interval === 'W') {
            $start = Carbon::now()->startOfYear();
            $end = Carbon::now()->endOfYear();
            for ($date = $start; $date->lte($end); $date->addWeek()) {
                $weekNumber = $date->weekOfYear;
                $visitorSpread[$weekNumber] = 0;
            }
        }

        return $visitorSpread;
    }
}
