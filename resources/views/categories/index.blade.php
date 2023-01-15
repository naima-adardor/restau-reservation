<x-guest-layout>
    <section class="mt-8 bg-white">
        <div class="mt-4 text-center">
            <h3 class="text-xl font-extrabold text-blue-900">Our Menu</h3>
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-4 gap-y-6">
               @foreach ($categories as $category )
                   
               
                    <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48" src="{{ Storage::url($category->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <a href="{{ route('categories.show', $category->id) }}" class="block mb-2 text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-purple-800 hover:text-blue-400">
                                <h4 class="mb-3 text-xl font-semibold tracking-tight text-blue-900 hover:text-purple-800 uppercase">
                                    {{ $category->name }} </h4> </a>
                            
                          
                        </div>
                       
                    </div>
               @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>