
    {{-- Be like water. --}}
    <h3 class="text-2xl mb-8">Chat en línea</h3>
    <div class="flex overflow-auto w-full mb-8">

        @if ( count($conversations) >0)
        @foreach ( $conversations as $conversation )
        <div class="mr-4 text-center self-center">
            <div class="relative w-12 mb-2">
                <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{$this->getChatUserInstance($conversation,$name='name')}}" class="rounded-full">
                <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0 border-2 border-gray-800"></div>
            </div>
            <small>{{$this->getChatUserInstance($conversation,$name='name')}}</small>
        </div>
        @endforeach
        @else
            You have any chat
        @endif
    </div>
    <div class="overflow-auto h-4/5">



        @if ( count($conversations) >0)
        @foreach ( $conversations as $conversation )

        <div class="flex bg-gray-100 mb-4 p-4 rounded" wire:click="$emit('chatUserSelected',{{$conversation}},{{$this->getChatUserInstance($conversation,$name='id')}})"  wire:key="{{$conversation->id}}">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{$this->getChatUserInstance($conversation,$name='name')}}" class="self-start rounded-full w-12 mr-4">
            <div class="w-full overflow-hidden">
                <div class="flex mb-1">
                    <p class="font-medium flex-grow">{{$this->getChatUserInstance($conversation,$name='name')}}</p>
                    <small class="text-gray-500">{{$conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans()}}</small>
                </div>
                <small class="overflow-ellipsis overflow-hidden block whitespace-nowrap text-gray-500">{{$conversation->messages->last()?->body}}</small>
            </div>
        </div>
        @endforeach
        @else
            You have any chat
        @endif
    </div>

