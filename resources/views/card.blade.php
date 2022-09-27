@extends('/app')

@section('content')

<div class="cont_style">
    <div class=" style_jumbo">
        <img src="" alt="">
    </div>
    <div class="my_container mystyle">
        <div class="">
            @foreach ($comic as $key => $formato)
            <div class="">
                <img class="img_card" src="{{$formato['thumb']}}" :alt="">
                <div>
                    <span>{{$formato['title']}}</span>
                    <span>{{}}</span>
                </div>
            </div> 
            @endforeach 
        </div>
    </div>
</div>

@endsection