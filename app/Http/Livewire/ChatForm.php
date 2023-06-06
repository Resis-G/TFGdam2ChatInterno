<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $nombre,$password;


    public function mount()
    {
        $this->nombre="";
        $this->password="";
    }
    public function render()
    {
        return view('livewire.chat-form');
    }
    public function enviarMensaje()
    {
        print "hola";
        $this->emit("mensajeEnviado");
        $this->emit("mensajeRecibido",$this->mensaje);
    }
}
