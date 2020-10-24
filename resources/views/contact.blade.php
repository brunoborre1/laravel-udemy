@extends('layout')

@section('title', 'Contact')


@section('content')

    <h1>Contact</h1>

<form method="POST" action="{{ route('contact') }}">
        @csrf
<input type="text" name="name" placeholder="complete su nombre" value="{{ old('name') }}"> <br>
        {!! $errors->first('name', '<small>:message</small><br>') !!} 
        <input type="email" name="email" placeholder="complete su email" value="{{ old('email') }}"> <br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        <input type="text" name="subject" placeholder="complete su asunto" value="{{ old('subject') }}"> <br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        <textarea name="content" id="" cols="30" rows="10" placeholder="complete su mensaje" value="{{ old('contenct') }}"></textarea>
        <button>Enviar</button>

    </form>

@endsection