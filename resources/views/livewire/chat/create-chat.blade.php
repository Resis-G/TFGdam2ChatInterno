<div class=" ">
    
    {{-- Care about people's approval and you will be their prisoner. --}}
   <div class="w-3/4  bg-white rounded-lg shadow">
        <ul class="divide-y-2 divide-gray-100">
            @foreach ($users as $user )
            <li class="p-3" wire:click='checkconversation({{$user->id}})'>{{$user->name}}</li>
            @endforeach
            
           
        </ul>
    </div>
</div>
