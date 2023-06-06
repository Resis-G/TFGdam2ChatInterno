@extends('layouts.homeLayout')
@section('contenido')
    <h1>Chat</h1>
    @livewire("chat-form")
    @livewire("chat-list")

@endsection