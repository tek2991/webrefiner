<div {!! $attributes->merge(['class' => 'w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-wr-primary px-4 sm:px-8 py-6 sm:py-12', 'id' => '']) !!}>
    <div class="w-1/3 xl:w-1/4">
        {{ $icon }}
    </div>
    <div class="w-2/3 xl:w-3/4">
        <h3 class="tracking-wide text-gray-200 font-bold text-2xl uppercase mb-2">
            {{ $title }}
        </h3>
        <div class="font-light text-lg text-gray-200">
            {{ $description }}
        </div>
    </div>
</div>
