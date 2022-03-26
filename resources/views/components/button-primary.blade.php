<button {{ $attributes->merge(['class' => 'flex-shrink-0 bg-primary border-primary hover:bg-dark hover:text-light border text-gray-200 py-2 px-4']) }}>
    {{ $slot }}
</button>
