<footer class="w-full flex flex-col sm:flex-row sm:justify-center text-lg tracking-wide px-4 sm:px-0 py-16">
    <div class="text-center pr-0 sm:pr-8 py-4">
        <ul class="list-none">

            {{-- <li>
                <x-link-footer href="https://twitter.com/#" target="_blank" rel="_noopener">Twitter</x-link-footer>
            </li>

            <li>
                <x-link-footer href="https://linkedin.com/company/#" target="_blank" rel="_noopener">LinkedIn
                </x-link-footer>
            </li> --}}
            <li>
                <x-link-footer href="{{ route('home') }}">Home</x-link-footer>
            </li>
        </ul>
    </div>
    <div class="h-px sm:h-auto w-1/2 sm:w-px bg-wr-primary mx-auto sm:mx-0"></div>
    <div class="text-center px-8 py-4">
        <ul class="list-none">
            <li>
                <x-link-footer href="{{ route('about') }}">About</x-link-footer>
            </li>
            {{-- <li>
                <x-link-footer href="#features">Features</x-link-footer>
            </li> --}}
        </ul>
    </div>
    <div class="h-px sm:h-auto w-1/2 sm:w-px bg-wr-primary mx-auto sm:mx-0"></div>
    <div class="text-center pl-0 sm:pl-8 py-4">
        <ul class="list-none">
            <li>
                <x-link-footer href="{{ route('privacy') }}">Privacy</x-link-footer>
            </li>
        </ul>
    </div>
</footer>
<div class="w-full">
    <span class="block text-center text-gray-800 text-sm font-light">
        &copy; WEBREFINER 2022
    </span>
</div>
<div class="">
    <a id="btt"
        class="hidden fixed bottom-0 right-0 mb-4 mr-4 text-gray-200 border border-wr-primary hover:bg-gray-200 hover:text-wr-primary hover:border-browngray no-underline px-6 py-1 bg-wr-primary shadow-md"
        href="#top" title="Back to Top">UP</a>
</div>

<div class="fixed bottom-0 left-0 m-6">
    <a href="tel:+918011302957" target="_blank" rel="noopener" title="Call Us"
        class="block rounded-full bg-black text-wr-primary hover:bg-white hover:text-wr-dark shadow-md p-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" class="block"
                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
        </svg>
    </a>
</div>

{{-- Elements below affect nav items --}}

<style>
    .tippy-tooltip {
        background-color: #656D78;
        color: #323A45;
        opacity: 0.85;
    }

    .tippy-tooltip[data-animatefill] {
        background-color: transparent;
    }

    .tippy-tooltip .tippy-backdrop {
        background-color: #656D78;
        opacity: 0.5;
    }

    .tippy-tooltip[x-placement^='bottom'] .tippy-arrow {
        border-bottom-color: #656D78;
    }

</style>
<template id="followTip">

    <a href="https://twitter.com/#"
        class="inline-block text-gray-200 text-sm bg-wr-primary shadow-md hover:bg-gray-200 hover:text-wr-dark no-underline p-1 px-4 mx-2 my-1"
        target="_blank" rel="noopener">Twitter</a>

    <a href="https://linkedin.com/company/#"
        class="inline-block text-gray-200 text-sm bg-wr-primary shadow-md hover:bg-gray-200 hover:text-wr-dark no-underline p-1 px-4 mx-2 my-1"
        target="_blank" rel="noopener">LinkedIn</a>

</template>

</div>
<script>
    function navToggle() {
        let btn = document.getElementById('menuBtn');
        let nav = document.getElementById('menu');

        btn.classList.toggle('open');
        nav.classList.toggle('flex');
        nav.classList.toggle('hidden');
    }

    window.addEventListener('scroll', function() {

        let btt = document.getElementById('btt');

        if (window.scrollY >= 1080) {
            btt.classList.remove('hidden');
            btt.classList.add('block');
        } else {
            btt.classList.add('hidden');
            btt.classList.remove('block');
        }

    });

    console.log('Code/Design: ttntm.me');



    window.addEventListener('DOMContentLoaded', function() {
        const template = document.getElementById('followTip');
        // const container = document.createElement('div');

        // container.appendChild(document.importNode(template.content, true));

        tippy('#follow', {
            content: template.innerHTML,
            allowHTML: true,
            animation: 'scale',
            duration: 250,
            arrow: true,
            placement: 'bottom',
            interactive: true,
            appendTo: 'parent'
        })
    })
</script>
