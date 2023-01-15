<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-xl font-extrabold text-blue-900">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
               @foreach ($category->menus as $menu)
                   
               <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                <img class="w-full h-48" src="{{ Storage::url($menu->image) }}" alt="Image" />
                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-blue-600 uppercase">
                        {{ $menu->name }}</h4>
                    <p class="leading-normal text-gray-700">
                        {{ $menu->description }}
                    </p>
                </div>
                <div class="flex items-center justify-between p-4">
                    <span class="text-xl text-blue-600">${{ $menu->price }}</span>
                </div>
            </div>
               @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>