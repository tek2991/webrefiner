<x-site-layout>
    @section('title')
        | Avant School Management System
    @endsection
    @section('styles')
        <style>
            .header {
                background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23f5f7fa' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E"),
                    linear-gradient(135deg, rgba(245, 247, 250, 1) 0%, #fff 20%, #fff 80%, rgba(245, 247, 250, 1) 100%);
            }

            .content__container {
                overflow: hidden;
                height: 40px;
            }

            .content__container__list {
                list-style: none;

                animation-name: change;
                animation-duration: 20s;
                animation-iteration-count: infinite;
            }

            .content__container__list__item {
                margin: 0;
                line-height: 40px;
            }

            @keyframes change {

                0%,
                7.14%,
                100% {
                    transform: translate3d(0, 0, 0);
                }

                14.28% {
                    transform: translate3d(0, -14.28%, 0);
                }

                21.42% {
                    transform: translate3d(0, -28.57%, 0);
                }

                28.57% {
                    transform: translate3d(0, -42.85%, 0);
                }

                35.71% {
                    transform: translate3d(0, -57.14%, 0);
                }

                42.85% {
                    transform: translate3d(0, -71.42%, 0);
                }

                53.5% {
                    transform: translate3d(0, -85.71%, 0);
                }

                64.28% {
                    transform: translate3d(0, -71.42%, 0);
                }

                71.42% {
                    transform: translate3d(0, -57.14%, 0);
                }

                78.54% {
                    transform: translate3d(0, -42.85%, 0);
                }

                85.71% {
                    transform: translate3d(0, -28.57%, 0);
                }

                92.85% {
                    transform: translate3d(0, -14.28%, 0);
                }
            }

        </style>
    @endsection
    @section('hero')
        <div class="flex flex-col justify-center h-full py-12">
            <div class="self-center items-center flex flex-col sm:flex-row w-full md:w-5/6 xl:w-2/3 px-4 sm:px-0">
                <div class="w-full text-center sm:text-left sm:w-1/2 py-12 sm:px-8">
                    <h1 class="tracking-wide text-pink-600 text-2xl mb-6">New Thing: <span
                            class="text-gray-800 font-bold tracking tracking-widest">AWE.SOME</span></h1>
                    <h2 class="font-bold tracking-widest text-4xl">Intro goes here...</h1>
                        <span class="content__container block font-light text-browngray text-2xl my-6">
                            <ul class="content__container__list">
                                <li class="content__container__list__item xl:pl-3">Cool Feature</li>
                                <li class="content__container__list__item xl:pl-3">Another Feature</li>
                                <li class="content__container__list__item xl:pl-3">Something Else</li>
                                <li class="content__container__list__item xl:pl-3">Why Not</li>
                                <li class="content__container__list__item xl:pl-3">Rotating</li>
                                <li class="content__container__list__item xl:pl-3">List</li>
                                <li class="content__container__list__item xl:pl-3">Items Here</li>
                            </ul>
                        </span>
                        <p class="font-bold tracking-widest text-4xl">...think about it!</p>
                </div>
                <div class="w-full sm:w-1/2">
                    <img src="//localhost:1313/img/undraw_Friends_online_re_r7pq.svg" alt="AWE.SOME header">
                </div>
            </div>
        </div>
        <div class="flex flex-row w-full justify-center pb-12">
            <x-link-primary href="#about">More Information</x-link-primary>
        </div>
    @endsection
    <div id="about" class="w-full min-h-screen flex flex-col justify-center items-center py-12">
        <div class="self-center text-center w-full sm:w-2/3 xl:w-1/2 px-4 sm:px:0">
            <h2 class="font-bold tracking-wider text-gray-800 text-4xl mb-4">AWE.SOME Heading</h2>
            <div class="font-light text-black text-xl">
                <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros mi.
                    Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.
                    <!-- raw HTML omitted -->
                    <!-- raw HTML omitted -->
                    <strong>Vivamus vitae erat vel tellus condimentum consectetur.</strong>
                </p>

            </div>
            <img class="my-12 max-w-full mx-auto" src="//localhost:1313/img/undraw_asset_selection_ix3v.svg"
                alt="AWE.SOME">
        </div>
        <div class="flex flex-row w-full justify-center">
            <x-link-primary href="#features">See How it Works</x-link-primary>
        </div>
    </div>




    <div id="features" class="w-full min-h-screen flex flex-col justify-center items-center bg-indigo-800 py-12">
        <div class="self-center text-center w-full sm:w-2/3 xl:w-1/2 px-4 sm:px:0">
            <h2 class="tracking-wide text-pink-600 font-bold text-4xl mb-4">Most AWE.SOME Features</h2>
            <div class="font-light text-gray-200 text-xl mb-6">
                <p>Pellentesque ullamcorper fringilla odio at pretium. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus. Nulla mattis erat dui, ut tempor lectus dictum id.
                    <!-- raw HTML omitted -->
                    <!-- raw HTML omitted -->
                    Cras mattis justo id convallis porta.
                </p>

            </div>
        </div>
        <div class="self-center w-full xl:w-4/5 flex flex-col sm:flex-row flex-wrap px-4 xl:px:0">

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon1.svg" alt="AWE.SOME Feature One"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature
                        One</h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon2.svg" alt="AWE.SOME Feature Two"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature
                        Two</h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon3.svg" alt="AWE.SOME Feature 3"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature 3
                    </h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon4.svg" alt="AWE.SOME Feature 4"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature 4
                    </h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon5.svg" alt="AWE.SOME Feature Five"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature
                        Five</h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon6.svg" alt="AWE.SOME Feature Six"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature
                        Six</h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon7.svg" alt="AWE.SOME Feature 7"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature 7
                    </h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

            <div
                class="w-full sm:w-1/2 flex flex-row flex-no-wrap hover:shadow-lg hover:bg-indigo-600 px-4 sm:px-8 py-6 sm:py-12">
                <div class="w-1/3 xl:w-1/4">
                    <img src="//localhost:1313/img/features/icon8.svg" alt="AWE.SOME Feature 8"
                        class="w-16 block sm:mx-auto">
                </div>
                <div class="w-2/3 xl:w-3/4">
                    <h3 class="tracking-wide text-pink-600 font-bold text-2xl uppercase mb-2">AWE.SOME Feature 8
                    </h3>
                    <div class="font-light text-gray-200 text-lg">
                        <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros
                            mi. Pellentesque ac orci mi. Ut dignissim tincidunt ex id tincidunt.</p>

                    </div>
                </div>
            </div>

        </div>
        <div class="self-center text-center w-full sm:w-1/3 px-4 sm:px:0">
            <h3 class="font-bold tracking-widest text-pink-600 text-2xl my-6">...and so much more!</h3>
        </div>
        <div class="flex flex-row w-full justify-center pt-6">
            <x-link-primary href="#register">Register Now</x-link-primary>
        </div>
    </div>



    <div id="register" class="w-full min-h-screen flex flex-col justify-center items-center bg-gray-800">
        <div class="self-center text-center w-full xl:w-1/3 px-4 sm:px:0">
            <h2 class="font-bold tracking-widest text-gray-200 text-4xl mb-4">Registration</h2>
            <div class="font-light text-gray-400 text-xl">
                <p>Maecenas pulvinar ultricies dolor, vitae sagittis nunc aliquam non. Cras vitae eros mi.</p>

            </div>
            <form class="w-full max-w-lg my-20 mx-auto" action="#" method="post" id="registration-form" target="_blank"
                validate>
                <div class="flex items-center border-b border-primary py-2">
                    <input
                        class="appearance-none bg-transparent border border-transparent w-full text-gray-200 focus:outline-none focus:bg-gray-400 focus:text-gray-800 focus:border-gray-400 mr-3 py-2 px-3"
                        type="email" value="" name="EMAIL" placeholder="sheldon.cooper@liamg.com"
                        aria-label="Email Address" required>
                    <x-button-primary type="submit" name="subscribe">Sign Up</x-button-primary>
                </div>
                <label class="block text-gray-200 text-left px-2 mt-4" for="gdpr_37169">
                    <input class="leading-tight" type="checkbox" id="gdpr_37169" name="gdpr[37169]" value="Y" required>
                    <span class="text-md font-light">
                        I agree with the <a href="//localhost:1313/privacy"
                            class="underline hover:no-underline hover:text-light" title="Privacy Policy"
                            target="_blank">Privacy Policy</a>
                    </span>
                </label>
            </form>
        </div>
    </div>
</x-site-layout>
