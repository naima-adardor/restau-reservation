<x-guest-layout>
    <div class="flex flex-col w-full items-center justify-center p-6 space-y-4 sm:p-10 dark:bg-gray-900 dark:text-gray-100">
        <h2 class="text-xl font-semibold">Your cart</h2>
        <ul class="flex flex-col divide-y divide-gray-700">
            <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                <div class="flex w-full space-x-2 sm:space-x-4">
                    <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-gray-500" src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="Polaroid camera">
                    <div class="flex flex-col justify-between w-full pb-4">
                        <div class="flex justify-between w-full pb-2 space-x-2">
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold leading-snug sm:pr-8">Polaroid camera</h3>
                               
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-semibold">59.99€</p>
                           
                            </div>
                        </div>
                        <div class="flex text-sm items-center  justify-center divide-x">
                            <button type="button" class="flex items-center  justify-center  rounded-md px-2 py-2 border border-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-current">
                                    <path d="M96,472a23.82,23.82,0,0,0,23.579,24H392.421A23.82,23.82,0,0,0,416,472V152H96Zm32-288H384V464H128Z"></path>
                                    <rect width="32" height="200" x="168" y="216"></rect>
                                    <rect width="32" height="200" x="240" y="216"></rect>
                                    <rect width="32" height="200" x="312" y="216"></rect>
                                    <path d="M328,88V40c0-13.458-9.488-24-21.6-24H205.6C193.488,16,184,26.542,184,40V88H64v32H448V88ZM216,48h80V88H216Z"></path>
                                </svg>
                                <span>Remove</span>
                            </button>
                         
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
        <div class="space-y-1 text-right">
            <p>Total amount:
                <span class="font-semibold">357 €</span>
            </p>
            <p class="text-sm text-gray-400">Not including taxes and shipping costs</p>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="button" class="px-6 py-2 border  border-violet-400 rounded-md  hover:border-violet-500">Back
                <span class="sr-only sm:not-sr-only">to shop</span>
            </button>
            <button type="button" class="px-6 py-2 border rounded-md  bg-purple-400 text-white hover:bg-purple-500 dark:bg-violet-400 dark:text-gray-900 dark:border-violet-400">
                <span class="sr-only sm:not-sr-only">Continue to</span>Checkout
            </button>
        </div>
    </div>
</x-guest-layout>