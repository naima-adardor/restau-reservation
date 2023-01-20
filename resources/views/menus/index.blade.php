<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
              @foreach ($menus as $menu)
              <form action="{{ url('/addcart',$menu->id) }}" method="post">
         @csrf
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
                         <div class="flex items-center justify-center p-4 ">
                        <input type="number" min="1" value="1" style="width:50px" name="quantity" >
                         <input type="submit" value="Add cart" class="px-4 py-2 text-sm font-semibold text-white bg-blue-200 rounded hover:bg-blue-300">
                        </div> </div>
                
              </form>  
            @endforeach
            
        </div>
    </div>
</x-guest-layout>