<x-guest-layout>
    <div class="flex flex-col w-full items-center justify-center p-6 space-y-4 sm:p-10 dark:bg-gray-900 dark:text-gray-100 ">
        <h2 class="text-xl font-semibold">Your cart</h2>
        <table class="flex flex-col divide-y divide-gray-700 ">
            @foreach ($data as $item) 
                
            
            <tr class="flex flex-col py-6 sm:flex-row sm:justify-between">
                <div class="flex w-full space-x-2 sm:space-x-4">
                    <td>
                    <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" src="{{ Storage::url($item->image) }}" alt="Polaroid camera">
                    </td>
                    <td>
                    <div class="flex flex-col justify-between w-full pb-4">
                        <div class="flex justify-between w-full pb-2 space-x-2">
                            
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold leading-snug sm:pr-8">{{ $item->name }}</h3>
                               
                            </div>
                            
                            
                            <div class="text-right">
                                <p class="text-lg font-semibold">{{ $item->price }}</p>
                           
                            </div>
                           
                           
                        </div>
                        <div class="text-center">
                            <p class="text-lg font-semibold text-green-500">({{ $item->quantity }})</p>
                       
                        </div>
                    </div>
                    </td>
                    </div>
                </tr>
                      @endforeach

                           
                              @foreach ($data2 as $data2)
             <tr class="flex flex-col py-6 sm:flex-row sm:justify-between" style="position:relative;top:-500px;right:-360px;height:200px" class="items-end justify-between" >   
           <td >
                        
                            <a type="button"  href="{{url('/remove',$data2->id)}}"class="flex items-center  justify-center  rounded-md px-2 py-2 border border-red-700">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                                <span>Remove</span>
                            </a>
                         
                        
           </td>
             </tr>

                     
                     
                   
          
       
           @endforeach   
                         
              
                </table>
        <div class="text-right" style="position:relative;top:-600px">
            <p>Total amount:
                <span class="font-semibold">357 €</span>
            </p>
            <p class="text-sm text-gray-400">Not including taxes and shipping costs</p>
        </div>
        <div class="flex justify-end space-x-4" style="position:relative;top:-600px;">
            <button type="button" class="px-6 py-2 border  border-violet-400 rounded-md  hover:border-violet-500">Back
                <span class="sr-only sm:not-sr-only">to shop</span>
            </button>
            <button type="button" class="px-6 py-2 border rounded-md  bg-purple-400 text-white hover:bg-purple-500 dark:bg-violet-400 dark:text-gray-900 dark:border-violet-400">
                <span class="sr-only sm:not-sr-only">Continue to</span>Checkout
            </button>
        </div>
    </div>
</x-guest-layout>