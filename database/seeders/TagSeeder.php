<?php

namespace Database\Seeders;

use App\Enums\TagEnum;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Tag::factory()->count(10)->create();
        foreach ($this->categoryList() as $data) Tag::updateOrCreate(['title'=>$data['title']], $data);
    }

    private function categoryList()
    {
        $data = [];
        $data[] = [
            'user_id' => 1,
            'title' => TagEnum::FOREX_TRADING->value,
            'slug' =>Str::slug(TagEnum::FOREX_TRADING->value)
        ];//forex
        $data[] = [
            'user_id' => 1,
            'title' => TagEnum::CRYPTO_TRADING->value,
            'slug' =>Str::slug(TagEnum::CRYPTO_TRADING->value)
        ];//crypto
        $data[] = [
            'user_id' => 1,
            'title' => TagEnum::STOCKS_TRADING->value,
            'slug' =>Str::slug(TagEnum::STOCKS_TRADING->value)
        ];//stocks
        $data[] = [
            'user_id' => 1,
            'title' => TagEnum::BUSINESS_ACUMEN->value,
            'slug' =>Str::slug(TagEnum::BUSINESS_ACUMEN->value)
        ];//business

        return $data;
    }
}
