<div>
    <style>
    .top-100 {top: 100%}
    .bottom-100 {bottom: 100%}
    .max-h-select {
        max-height: 300px;
    }
</style>
    <div class="flex flex-col items-center">
    <div class="w-full flex flex-col items-center h-64">
        <div class="w-full px-4">
            <div class="flex flex-col items-center relative">
                <div class="w-full">
                    <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                        <div class="flex flex-auto flex-wrap"></div>
                        <input placeholder="Search by name"
                        wire:model="search"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                        <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200">
                            <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up w-4 h-4">
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="absolute shadow bg-white top-100 z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
                    <div class="flex flex-col w-full">
                       @foreach ($customers as $customer)
                            <div wire:click='selectCustomer("{{$customer->id}}")' class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100">
                            <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                                <div class="w-6 flex flex-col items-center">
                                    <div class="flex relative w-5 h-5 bg-orange-500 justify-center items-center m-1 mr-2 w-4 h-4 mt-1 rounded-full ">C</div>
                                </div>
                                <div class="w-full items-center flex">
                                    <div class="mx-2 -mt-1  ">{{$customer->name}}
                                        <div class="text-xs truncate w-full normal-case font-normal -mt-1 text-gray-500">{{$customer->phnum1}}&amp; {{$customer->company}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       @endforeach
                       
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
