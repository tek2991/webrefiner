<div id="register" class="w-full min-h-screen flex flex-col justify-center items-center bg-gray-800">
    <div class="self-center text-center w-full xl:w-1/3 px-4 sm:px:0">
        <h2 class="font-bold tracking-widest text-gray-200 text-4xl mb-4">Contact Us</h2>
        <div class="font-light text-gray-400 text-xl">
            <p>Please enter your details so we can reach out to you</p>
        </div>
        <form class="w-full max-w-lg my-20 mx-auto" action="{{ route('contact.store') }}" method="post"
            id="registration-form" validate>
            @csrf
            @honeypot
            <div class="flex items-center mb-4">
                <div class="w-full text-left">
                    <label for="name" class="text-gray-200 font-semibold">
                        Name
                    </label>
                    <input
                        class="rounded appearance-none border w-full text-gray-200 focus:outline-none focus:text-gray-800 focus:border-gray-400 py-2 px-3"
                        id="name" type="name" value="" name="name" placeholder="your good name" aria-label="Name"
                        required>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-full text-left">
                    <label for="email" class="text-gray-200 font-semibold">
                        Email
                    </label>
                    <input
                        class="rounded appearance-none border w-full text-gray-200 focus:outline-none focus:text-gray-800 focus:border-gray-400 py-2 px-3"
                        id="email" type="email" value="" name="email" placeholder="john@awesome.com"
                        aria-label="Email Address" required>
                </div>
            </div>
            <div class="flex items-center mb-4">
                <div class="w-full text-left">
                    <label for="phone" class="text-gray-200 font-semibold">
                        Phone
                    </label>
                    <input
                        class="rounded appearance-none border w-full text-gray-200 focus:outline-none focus:text-gray-800 focus:border-gray-400 py-2 px-3"
                        id="phone" type="number" value="" name="phone" placeholder="+91(India)" aria-label="Phone"
                        required>
                </div>
            </div>
            <label class="block text-gray-200 text-left px-2 mt-4" for="gdpr">
                <input class="leading-tight" type="checkbox" id="gdpr" name="gdpr" value="true" required>
                <span class="text-md font-light">
                    I agree with the <a href="{{ route('privacy') }}"
                        class="underline hover:no-underline hover:text-light" title="Privacy Policy">Privacy
                        Policy</a>
                </span>
            </label>
            <div class="text-left mt-4">
                <x-button-primary type="submit" name="subscribe">Submit</x-button-primary>
            </div>
        </form>
    </div>
</div>