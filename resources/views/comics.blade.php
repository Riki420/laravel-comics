@extends('layouts.main')
@section('title', 'Comics')

@section('content')
      <div id="products" class="z-1">
          <div class="jumbotron"></div>
        <div class="container">
            <span class="current">CURRENT SERIES</span>
            <div class="row">
                <div class="col-card py-2">
                    <div class="card mt-2">
                        <img :src="" alt="comic.series">
                        <h4>Titolo</h4>
                        <p>Prezzo</p>
                    </div> 
                </div>
                <div class="me-auto py-2">
                    <button type="button" id="loadMore" name="loadMore" class="loadMoreBtn">Load More...</button>
                </div>
            </div>
        </div>
    </div>
@endsection