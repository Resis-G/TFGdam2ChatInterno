<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Livewire\Component;

class SendMessage extends Component
{

    public $selectedConversation,$receiverInstance,$body;
    protected $listeners=['updateSendMessage'];


    public function updateSendMessage(Conversation $conversation, User $receiver){
        //dd($conversation,$receiver);
        $this->selectedConversation=$conversation;
        $this->receiverInstance=$receiver;
    
    }

    public function sendMessage(){

        if($this->body ==null){
            return null;
        }
        $createdMessage=Message::create([
            'conversation_id'=>$this->selectedConversation->id,
            'sender_id'=>auth()->id(),
            'receiver_id'=>$this->receiverInstance->id,
            'body'=>$this->body
        ]);

        $this->selectedConversation->last_time_message =$createdMessage->created_at;
        //dd($this->body);
    }
    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
