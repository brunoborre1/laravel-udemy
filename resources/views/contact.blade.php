@extends('layout')

@section('title', 'Contact')


@section('content')

    <h1>Contact</h1>

<form method="POST" action="{{ route('contact') }}">
        <input type="text" name="name" placeholder="complete su nombtre"> <br>
        <input type="email" name="email" placeholder="complete su email"> <br>
        <input type="text" name="subject" placeholder="complete su asunto"> <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="complete su mensaje"></textarea>
        <button>Enviar</button>

    </form>



@endsection