@extends('layouts.main')
@section('title', 'Comics')

@section('content')
      <div id="products" class="z-1">
          <div class="jumbotron"></div>
        <div class="container w-75">
            <div class="row">
                <span class="current">CURRENT SERIES</span>

                <div class="col-card py-2 d-flex-j-center">
                        @foreach ($comics as $comic)
                             <div class="prd-card mt-2">
                                <a href="{{url("/comic/$loop->index")}}">                  
                                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                                </a>
                                <h6>{{$comic['title']}}</h6>
                             </div>
                        @endforeach
                </div>
                <div class="col me-auto py-2">
                    <button type="button" id="loadMore" name="loadMore" class="loadMoreBtn">Load More...</button>
                </div>
            </div>
        </div>
    </div>
@endsection