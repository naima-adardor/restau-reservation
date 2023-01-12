<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
   <div class="flex justify-end m-2 p-2">  
    <a href="{{ route('admin.categories.create') }}"  class="px-4 py-2 bg-indigo-200 hover:bg-indigo-700  rounded-lg text-black">
        New Category
    </a>
   </div>   
   <div class="flex flex-col">
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                   Description
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
                
            @endforeach
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              
                <td class="px-6 py-4">
                   {{ $category->name}}
                </td>
                <td class="px-6 py-4">
                    {{ $category->description}}
                 </td>
                 <td class="px-6 py-4">
                   <img src="{{Storage::url($category->image) }}" class="w-16 h-16 rounded"> 
                 </td>
               
            </tr>
           
        </tbody>
    </table>
</div>
</div>
        </div>
    </div>
</x-app-layout>
