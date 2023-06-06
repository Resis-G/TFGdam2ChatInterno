

<div class="h-3/4">
    @if ($selectedConversation)
<div class="py-6 px-20 border-b">
    <div class="flex">
        <div class="flex flex-grow">
            <button class="return">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </button>
            
              
            <div class="relative mr-4">
                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{$receiverInstance->name}}" class="rounded-full w-12">
                <div class="absolute bg-red-300 p-1 rounded-full bottom-0 right-0 border-2 border-gray-800"></div>
            </div>
            <div>
                <p class="font-medium">{{$receiverInstance->name}}</p>
                <small class="text-gray-500">Online</small>
            </div>
        </div>
        <div class="flex">
            <svg class="w-6 mr-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <svg class="w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </div>
    </div>
</div>
<div class="py-6 px-20 h-3/4 overflow-auto">
    @foreach ($messages as $message)
    
        @if ($message->receiver_id != auth()->id())
        <div class="flex flex-row-reverse mb-12">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{auth()->user()->name}}" class="self-end rounded-full w-12 ml-4">
            <div class="flex flex-col">
                <div class="bg-blue-500 text-white p-6 rounded-3xl rounded-br-none w-96 mb-2">
                    <p class="font-medium mb-1">{{auth()->user()->name}}</p>
                    <small class="inline-block mb-1">{{$message->body}}.</small>
                </div>
                <small class="text-gray-500 self-end">{{$message->created_at->format('m: i a')}}</small>
            </div>
        </div>
        @else

        <div class="flex mb-12">
            
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{$receiverInstance->name}}" class="self-end rounded-full w-12 mr-4">
            <div class="flex flex-col">
                <div class="bg-white p-6 rounded-3xl rounded-bl-none w-96 shadow-sm mb-2">
                    <p class="font-medium mb-1">{{$receiverInstance->name}}</p>
                    <small class="inline-block text-gray-500 mb-1">{{$message->body}}</small>
                </div>
                <small class="text-gray-500">{{$message->created_at->format('m: i a')}}</small>
            </div>
        </div>
        @endif
        

    
    @endforeach
    
    
</div>
@else

    <p class="text-center text-blue-600 text-3xl p-8">No Conversation Selected</p>
    
@endif

</div>



    
        

