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

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card">
                            <div class="view overlay">
                                <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
                                </div>
                            </div>

                            <div class="card-body">
                                <h4 class="card-title">MDB Quick Start</h4>
                                <p class="card-text">Get started with MDBootstrap, the world's most popular Material Design framework for building
                                    responsive, mobile-first sites.</p>
                                <p class="card-text">
                                    <strong>5 minutes, a few clicks and... done. You will be surprised at how easy it is.</strong>
                                </p>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                
                </div>
                <!--Grid row-->

                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
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
