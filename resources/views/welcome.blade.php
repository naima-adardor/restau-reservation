<x-guest-layout style="margin-top:-120px" >
    <div  class="container max-w-lg px-4 py-32 mx-auto text-left  bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
        style="background-image: url('images/cover.png');margin-top:-120px ">
        <h1
            class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800 md:text-2xl hover:text-blue-400 md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome To MasterFood Restaurant</span>
        </h1>
        <div class="mx-auto mt-2  shadow-black font-bold md:text-center lg:text-lg">
            Master Food Restaurant is a family owned and operated restaurant that has been serving the community for over 20 years.
         We are proud to be a part of the community and look forward to serving you for many years to come.
        </div>
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <a  type="button" href={{ route('reservations.step.one') }}
                    class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-blue-900 bg-blue-200 rounded-full lg:w-full md:w-auto hover:bg-blue-900 hover:text-blue-200 focus:outline-none">
                    Make your Reservation
                </a>
        </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0 bg-center">
                        <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
                        <h3 class="text-xl font-extrabold text-blue-900">OUR STORY
                        </h3>
                        <h2 class="text-4xl text-blue-200">Welcome</h2>
                        <!-- </h1> -->
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                           Our restaurant is a family owned and operated restaurant that has been serving the community for over 20 years.
                            We are proud to be a part of the community and look forward to serving you for many years to come.
                            we make sure that our customers are satisfied with our food and service...
                        
        

                        </p>
                        <div class="relative flex">
                            <a href="{{ route('about') }}"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg bg-bl-600  sm:mb-0  text-blue-900 bg-blue-200 rounded-full  md:w-auto hover:bg-blue-900 hover:text-blue-200 focus:outline-none sm:w-auto">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="text-xl font-extrabold text-blue-900">About Us</h2>
                        <h2
                            class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800 md:text-2xl">
                            WHY CHOOSE US?</h2>

                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
                         
                            We are a family owned and operated restaurant that has been serving the community for over 20 years.
                            We are proud to be a part of the community and look forward to serving you for many years to come.
                            we make sure that our customers are satisfied with our food and service.
                            we have a wide variety of food to choose from.
                            you can choose from our menu or you can order from our daily specials.
                            we also have a wide variety of drinks to choose from.
                            the most important things is the health and safety of our customers and employees.
                        </p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Faster Processing and Delivery</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="font-medium text-gray-500">Easy Payments</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">100% Protection and Security for Your App</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full"
                        src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png"
                        alt="feature image"></div>
            </div>
        </div>
    </section>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-xl font-extrabold text-blue-900">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
                @foreach ($specials->menus as $menu)
                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                    <div class="px-6 py-4">
                        <h4 class="mb-3 text-xl font-semibold tracking-tight text-blue-900 uppercase">
                            {{ $menu->name }}</h4>
                        <p class="leading-normal text-gray-700">{{ $menu->description }}.</p>
                    </div>
                    <div class="flex items-center justify-between p-4">
                        <span class="text-xl text-blue-600">${{ $menu->price }}</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
               Our Team </h2>
            <p class="text-xl text-white">A good team can itself be the secret of success</p>
        </div>
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                        src="/images/chef1.png">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Mohammed</h2>
                    <p class="mt-2 text-gray-600">became known to the general public by participating in the twelfth season of Top chef. Accompanied by chef Hélène Darroze throughout the famous culinary competition of M6, he was able to prove to the various guests, to the jury and even to his comrades, that he had his place. Moreover, he climbed to the final against Sarah Mainguy… and won the edition hands down! And since, it is the consecration. But many years before that, Mohamed Cheikh worked hard in the kitchen. On social networks, he shares Tuesday August 2, 2022 old photos of his beginnings in the middle. And the least we can say is that he is unrecognizable!</p>
                </div>
               
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                        src="images/chef2.png">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Ibrahim</h2>
                    <p class="mt-2 text-gray-600">became known to the general public by participating in the twelfth season of Top chef. Accompanied by chef Hélène Darroze throughout the famous culinary competition of M6, he was able to prove to the various guests, to the jury and even to his comrades, that he had his place. Moreover, he climbed to the final against Sarah Mainguy… and won the edition hands down! And since, it is the consecration. But many years before that, Mohamed Cheikh worked hard in the kitchen. On social networks, he shares Tuesday August 2, 2022 old photos of his beginnings in the middle. And the least we can say is that he is unrecognizable!</p>
                </div>
              
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full"
                        src="/images/chef3.png">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Naima</h2>
                    <p class="mt-2 text-gray-600">She's from Rabat. Later, she left Morocco after her scientific degree to achieve her goal : to learn cooking. Thus, the dream become true. Then, she takes courses at Paul Bocuse Institute and then she’s been to the most prestigious Palaces. From The Magestic in Cannes, to The Crillon at Paris, her success story has begun with famous chefs. In 2002, she came back to Morocco</p>
                </div>
               
            </div>
        </div>
    </section>
</x-guest-layout>