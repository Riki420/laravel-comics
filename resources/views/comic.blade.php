@extends('layouts.main')
@section('title','Comic Detail')


@section('content')
    <div class="jumbotron"></div>
    <div class="bg-dc"></div>
    <div class="container">
            <!--COMIC IMG-->
            <div class="comic-card-img">
                <div class="comic-book">
                    Comic Book
                </div>
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="border-white">
                <div class="view-gallery">
                    View Gallery
                </div>
            </div>
            <div class="row">
                <!--COMIC INFO-->
                <div class="col-8 p-2">
                    <h1 class="dc-text mb-2">{{$comic['title']}}</h1>
                    <div class="wrapper mb-2">
                        <div class="col-8 bg-g br-r wrapper-between p-2">
                            Price detail
                            <div class="text-right">
                                Available
                            </div>
                        </div>
                        <div class="col-2 bg-g p-2 text-white">
                            Check Availability
                        </div>
                    </div>
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>
                <!--COMIC ADV-->
                <div class="col-2 p-2">
                    <div class="adv">
                        <div class="text-right">
                            ADVERTISEMENT
                        </div>
                        <figure>
                            <img src="../../images/adv.jpg" alt="">
                        </figure>
                    </div>
                    
                </div>
            </div>
            <div class="wrapper">
                <div class="col-6">
                    <h3 class="dc-color">Talent</h3>
                    <hr>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-6">
                    <h3 class="dc-color">Specs</h3>
                    <hr>
                    <ul>
                        <li>{{ $comic['series'] }}</li>
                        <li>{{ $comic['price'] }}</li>
                        <li>{{ $comic['sale_date'] }}</li>
                    </ul>
                </div>
            </div>
        
    </div>
@endsection