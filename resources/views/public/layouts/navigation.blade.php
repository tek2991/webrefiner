<nav
    class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white sm:bg-transparent shadow sm:shadow-none border-t-4 border-pink-600">
    <div
        class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
        <a href="//localhost:1313/" class="no-underline"><img src="{{ asset('storage/images/logo.png') }}" alt="Webrefiner Logo"
                class="h-12 py-1"></a>
        <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();"
            aria-label="Show Menu"><span class="hamburger__top-bun"></span><span
                class="hamburger__bottom-bun"></span></button>
    </div>
    <div id="menu"
        class="w-full sm:w-auto self-end sm:self-center hidden sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0">
        <a class="text-gray-800 font-bold hover:text-pink-600 text-lg text-center w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1"
            href="#about">About</a>
        <a class="text-gray-800 font-bold hover:text-pink-600 text-lg text-center w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1"
            href="#features">Features</a>
        <span id="follow"
            class="hidden sm:inline-block text-gray-800 font-bold hover:text-pink-600 text-lg sm:w-auto sm:px-4 sm:py-1 cursor-pointer">Follow</span>

        <a href="https://twitter.com/#"
            class="text-gray-800 font-bold hover:text-pink-600 text-lg text-center w-full no-underline sm:hidden py-2"
            target="_blank" rel="noopener">Twitter</a>

        <a href="https://linkedin.com/company/#"
            class="text-gray-800 font-bold hover:text-pink-600 text-lg text-center w-full no-underline sm:hidden py-2"
            target="_blank" rel="noopener">LinkedIn</a>

        <a class="text-gray-800 border border-indigo-800 text-lg bg-gray-100 rounded-full w-auto no-underline text-center sm:text-left hover:border-pink-600 hover:text-pink-600 hover:bg-white hover:shadow-md px-6 py-1 my-2 sm:my-0 sm:ml-4"
            href="#register">Register Now</a>
    </div>
</nav>
