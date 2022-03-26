<footer class="w-full flex flex-col sm:flex-row sm:justify-center text-lg tracking-wide px-4 sm:px-0 py-16">
    <div class="text-center pr-0 sm:pr-8 py-4">
        <ul class="list-none">

            <li>
                <x-link-footer href="https://twitter.com/#" target="_blank" rel="_noopener">Twitter</x-link-footer>
            </li>

            <li>
                <x-link-footer href="https://linkedin.com/company/#" target="_blank" rel="_noopener">LinkedIn
                </x-link-footer>
            </li>

        </ul>
    </div>
    <div class="h-px sm:h-auto w-1/2 sm:w-px bg-wr-primary mx-auto sm:mx-0"></div>
    <div class="text-center px-8 py-4">
        <ul class="list-none">
            <li>
                <x-link-footer href="#about" >About</x-link-footer>
            </li>
            <li>
                <x-link-footer href="#features" >Features</x-link-footer>
            </li>
        </ul>
    </div>
    <div class="h-px sm:h-auto w-1/2 sm:w-px bg-wr-primary mx-auto sm:mx-0"></div>
    <div class="text-center pl-0 sm:pl-8 py-4">
        <ul class="list-none">
            <li>
                <x-link-footer href="#" >Privacy</x-link-footer>
            </li>
            <li>
                <x-link-footer href="#" >Imprint</x-link-footer>
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
    <a href="https://github.com/ttntm/hugo-landing-page" target="_blank" rel="noopener" title="Get this theme @ GitHub"
        class="block rounded-full bg-black text-pink-600 hover:bg-white hover:text-black shadow-md p-4">
        <img src="//localhost:1313/img/github.svg" width="30" height="30" class="block" alt="GitHub icon">
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