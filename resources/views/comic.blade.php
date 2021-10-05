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
                <div class="view-gallery">
                    View Gallery
                </div>
            </div>
            <div class="row">
                <!--COMIC INFO-->
                <div class="col-8 p-2">
                    <h1 class="dc-text mb-2">Superman</h1>
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
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Vero deleniti voluptatibus ipsum reiciendis eum tenetur porro assumenda totam tempore dolorem dolor commodi nulla veritatis,
                        quae exercitationem nam debitis voluptatem consequatur!
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Vero deleniti voluptatibus ipsum reiciendis eum tenetur porro assumenda totam tempore dolorem dolor commodi nulla veritatis,
                        quae exercitationem nam debitis voluptatem consequatur!
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
        
    </div>
@endsection