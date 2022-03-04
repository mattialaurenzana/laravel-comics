@extends('partials.default')

@section('title','DC COMICS')
    
    
        @section('preHeader')
            <div class="pre-header-content">
                <span>DC POWER VISA®</span>
                <span>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></span>
        </div>
        @endsection
    
    

    @section('jumbo-content')
        <div class="jumbotron">
            
        </div>
    @endsection


        @section('comic-content')
            <div class="comics row">
                @foreach ($data as $comic)
                    <div class="card-comic col-2 mb-5">
                        <div class="img-container">
                            <img src="{{$comic["thumb"]}}" alt="cover">
                        </div>
                        <span>{{$comic["title"]}}</span>
                    </div>            
                @endforeach
            </div>
            <div class="load">
                <span>LOAD MORE</span>
            </div>
        @endsection
    
        
    @section('items-content')
        <div class="items-container">
            <ul>
                <li>
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="digital comics">
                    <span>DIGITAL COMICS</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="dc merchandise">
                    <span>DC MERCHANDISE</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="subscription">
                    <span>SUBSCRIPTION</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="comic shop locator">
                    <span>COMIC SHOP LOCATOR</span>
                </li>
                <li>
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="dc power visa">
                    <span>DC POWER VISA</span>
                </li>
            </ul>
        </div>
    @endsection




