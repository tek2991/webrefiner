<div {!! $attributes->merge(['class' => 'w-full sm:w-1/2 flex flex-row flex-no-wrap py-6 sm:py-12', 'id' => '']) !!}>
    <div class="w-1/4">
        {{ $icon }}
    </div>
    <div class="w-3/4">
        <h4 class="tracking-wide font-bold text-xl mb-2">
            {{ $title }}
        </h4>
        <div class="">
            {{ $description }}
        </div>
    </div>
</div>
