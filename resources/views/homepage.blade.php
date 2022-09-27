@extends('layout.app')
@section('title-page', 'Homepage')

@section('content')
<div>
    <h1>
        DC COMICS
    </h1>

    <p><a href="{{route('card')}}">Scegli il tuo fumetto!</a></p>
</div>
@endsection