<?php 

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class CreateChat extends Component
{
    public $users;
    public $message = 'hello, how are you';

    public function checkconversation($receiverId){
        //dd($receiverId);
        $checkedConversation = Conversation::where('receiver_id',auth()->user()->id)->where('sender_id',$receiverId)->orwhere('receiver_id',$receiverId)->where('sender_id',auth()->user()->id)->get();
        if(count($checkedConversation)==0){
            

            $createdConversation = Conversation::create(['receiver_id'=>$receiverId,'sender_id'=>auth()->user()->id,'last_time_message'=>Carbon::now()]);
            //conversation created
            $createdMessage= Message::create(['conversation_id'=>$createdConversation->id,'sender_id'=>auth()->user()->id,'receiver_id'=>$receiverId,'dody'=>$this->message]);
            
            $createdConversation->last_time_message=$createdMessage->created_at;
            $createdConversation->save();
            
        }else if(count($checkedConversation)>=1){
            dd('conversation exists');
        };
    }
    public function render()
    {

        $this->users=User::where('id','!=',auth()->user()->id)->get();
        return view('livewire.chat.create-chat');
    }
}
