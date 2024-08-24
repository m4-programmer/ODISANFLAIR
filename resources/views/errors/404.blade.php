<x-layout body="skin-orange">
    <section>
        <div class="container m-5 p-5">
            <p class="m-5">Could not find route { {{request()->server()["REQUEST_URI"]}} }, please check the route and try again. </p>
        </div>
    </section>
</x-layout>
