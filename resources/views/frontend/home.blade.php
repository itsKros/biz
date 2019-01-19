@extends('layouts.frontend.master')

@section('content')
        <!--Main layout-->
    <main class="pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Biz Work</strong>
                    </h1>
                    <p>
                        <strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit?</strong>
                    </p>
                    <p class="mb-4">
                        <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut saepe repellendus impedit earum libero fugit officiis eligendi quidem magnam consectetur!</strong>
                    </p>
                    <a target="_blank" href="#" class="btn btn-outline-white btn-lg">Contact Us
                        <i class="fas fa-graduation-cap ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <hr class="my-5">

            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                     @if(count($listings))
                        @foreach($listings as $listing)
                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">
                                <!--Card-->
                                <div class="card">
                                    <div class="view overlay" style="display:none;">
                                        <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <h4 class="card-title"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a></h4>
                                        <p class="card-text"><?php echo str_limit($listing->bio, 200); ?></p>
                                        <p class="card-text">
                                        <span class="sauthor float-left">by <strong>{{$listing->user->name}}</strong></span>
                                        <a href="/listings/{{$listing->id}}" class="btn btn-primary btn-sm float-right">Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <!--/.Card-->
                            </div>
                            <!--Grid column-->
                        @endforeach
                        @else
                            <p>No Listings</p>                        
                    @endif
                   

                    
                
                </div>
                <!--Grid row-->
 
                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn" style="display:none !important;">
                    <ul class="pagination pg-blue">

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->
    @endsection
