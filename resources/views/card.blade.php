@extends('layout.app')

@section('content')

<div class="cont_style">
    <div class=" style_jumbo">
        <img src="" alt="">
    </div>
    <a href="{{route('home')}}">Home</a>
    <div class="my_container mystyle">
        @foreach ($comic as $key => $item)
        <div class="card">
            <a href="">
                <img class="img_card" src="{{$item['thumb']}}" alt="{{$item['title']}}">
            </a>
            <div>
                <span>{{$item['title']}}</span>
            </div>
        </div> 
        @endforeach 
    </div>
</div>

@endsection