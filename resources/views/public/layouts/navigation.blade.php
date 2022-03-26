<nav
    class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white sm:bg-transparent shadow sm:shadow-none border-t-4 border-primary">
    <div
        class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
        <a href="{{ route('home') }}" class="no-underline"><img src="{{ asset('storage/images/logo.png') }}"
                alt="Webrefiner Logo" class="h-12 py-1"></a>
        <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();"
            aria-label="Show Menu"><span class="hamburger__top-bun"></span><span
                class="hamburger__bottom-bun"></span></button>
    </div>
    <div id="menu"
        class="w-full sm:w-auto self-end sm:self-center hidden sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0">
        <x-nav-link href="#about">About</x-nav-link>
        <x-nav-link href="#features">Features</x-nav-link>

        <span id="follow"
            class="hidden sm:inline-block text-gray-800 font-bold hover:text-primary text-lg sm:w-auto sm:px-4 sm:py-1 cursor-pointer">Follow</span>

        <x-nav-link-mobile href="https://twitter.com/#" target="_blank" rel="noopener">Twitter</x-nav-link-mobile>
        <x-nav-link-mobile href="https://linkedin.com/company/#" target="_blank" rel="noopener">LinkedIn</x-nav-link-mobile>

        <x-link-ghost href="#register">Register Now</x-link-ghost>
    </div>
</nav>
