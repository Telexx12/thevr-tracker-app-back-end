<x-layouts.master>
    <div class="w-screen h-screen flex justify-center">
        <div class="flex flex-col h-2/3 justify-center items-center">
            <div class="px-6 pt-12 pb-16 border border-gray-700 rounded-lg bg-gray-800">
                <img src="{{Vite::asset('resources/images/wearethevr.png')}}" alt="wearethevr logo" class="w-80">

                <div class="text-center mb-5">
                    <a href="{{route('google')}}" type="button" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
                        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                            <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
                        </svg>
                        {{__('login.google_login')}}
                    </a>
                </div>

                <div class="text-center">
                    <a href="{{route('twitch')}}" type="button" class="text-white bg-[#9046ff] hover:bg-[#9046ff]/90 focus:ring-4 focus:outline-none focus:ring-[#9046ff]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#9046ff]/55 me-2 mb-2">
                        <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M2.149 0l-1.612 4.119v16.836h5.731v3.045h3.224l3.045-3.045h4.657l6.269-6.269v-14.686h-21.314zm19.164 13.612l-3.582 3.582h-5.731l-3.045 3.045v-3.045h-4.836v-15.045h17.194v11.463zm-3.582-7.343v6.262h-2.149v-6.262h2.149zm-5.731 0v6.262h-2.149v-6.262h2.149z" fill-rule="evenodd" fill="white" clip-rule="evenodd"/>
                        </svg>
                        {{__('login.twitch_login')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>
