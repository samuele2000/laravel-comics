@extends('layout.layout')

@section('section-1')
<div class="container">
    <div class="box-h3">
        <h3>CURRENT SERIES</h3>
    </div>
    <div class="box">
        @foreach ($comics as $comic)
        <div>
            <ul>
                <li>
                    <img src="{{$comic['thumb']}}" alt="">
                    <a href="">{{$comic['title']}}</a>
                </li>
            </ul>
        </div>

        @endforeach
    </div>
    <div class="button">
        <a href="">LOAD MORE</a>
    </div>
</div>
@endsection

@section('section-2')
<div class="menuHero">
    <ul>
        @foreach ($menuHero as $item)
        <li>
            <img src="{{asset($item['img'])}}" alt="item menu">
            <a href="">{{$item['name']}}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
