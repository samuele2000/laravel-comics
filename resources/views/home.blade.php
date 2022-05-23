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