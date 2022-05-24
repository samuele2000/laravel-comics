@extends('layout.layout')

@section('section-1')
<div class="bg-blu">
    <div>
        <img src="{{$comicId['thumb']}}" alt="">
    </div>
</div>

<div>
    <div class="box-comic">
        <div class="flex">
            <div class="col">
                <h2>{{$comicId['title']}}</h2>
                <div class="price">
                    <div class="prezzo">
                       <h5>U.S. Price: <span>{{$comicId['price']}}</span></h5>
                        <h5>AVAILABLE</h5> 
                    </div>
                    
                    <div>
                        <select>
                            <option value="">Check Availability</option>
                        </select>  
                    </div>
                    
                </div>
                <div>
                    <p>{{$comicId['description']}}</p>
                </div>
            </div>
            <div class="advertising"></div>
        </div>
    </div>
</div>

<div class="sezione-2">
    <div class="details">
        <div class="talent">
            <h3>Talent</h3>
            <div class="artists">
                <h4>Art by:</h4>
                <div>
                    @foreach( $comicId['artists'] as $artist )
                        <span>{{$artist}}, </span>
                    @endforeach
                </div>
                
            </div>
            <div class="writers">
                <h4>Written by:</h4>
                <div>
                    @foreach( $comicId['writers'] as $writer )
                        <span>{{$writer}}, </span>
                    @endforeach 
                </div>
                
            </div>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="series">
                <h4>Series:</h4>
                <span>{{$comicId['series']}}</span>
            </div>
            <div class="us-price">
                <h4>U.S. PRICE:</h4>
                <span>{{$comicId['price']}}</span>
            </div>
            <div class="date">
                <h4>On Sale Date:</h4>
                <span>{{$comicId['sale_date']}}</span>
            </div>
        </div>
    </div>

    <div class="icon">
        <div>
            <h4>DIGITAL COMICS</h4>
        </div>
        <div>
            <h4>SHOP DC</h4>
        </div>
        <div>
            <h4>COMIC SHOP LOCATOR</h4>
        </div>
        <div>
            <h4>SUBSCRIPTION</h4>
        </div>
    </div>
</div>
@endsection
