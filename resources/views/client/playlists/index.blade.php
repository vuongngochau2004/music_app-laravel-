@extends('client.layouts.main')

@section('title', 'Albums-store')

@section('content-wrapper')
<div class="content-wrapper">
     <!-- ##### Breadcumb Area Start ##### -->
     <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset ('clients/img/bg-img/breadcumb3.jpg') }});">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Your Playlists</h2>
        </div>
    </section>
       <!-- ##### Album Catagory Area Start ##### -->
    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*">Browse All</a>
                        <a href="#" data-filter=".a" class="active">A</a>
                        <a href="#" data-filter=".b">B</a>
                        <a href="#" data-filter=".c">C</a>
                        <a href="#" data-filter=".d">D</a>
                        <a href="#" data-filter=".e">E</a>
                        <a href="#" data-filter=".f">F</a>
                        <a href="#" data-filter=".g">G</a>
                        <a href="#" data-filter=".h">H</a>
                        <a href="#" data-filter=".i">I</a>
                        <a href="#" data-filter=".j">J</a>
                        <a href="#" data-filter=".k">K</a>
                        <a href="#" data-filter=".l">L</a>
                        <a href="#" data-filter=".m">M</a>
                        <a href="#" data-filter=".n">N</a>
                        <a href="#" data-filter=".o">O</a>
                        <a href="#" data-filter=".p">P</a>
                        <a href="#" data-filter=".q">Q</a>
                        <a href="#" data-filter=".r">R</a>
                        <a href="#" data-filter=".s">S</a>
                        <a href="#" data-filter=".t">T</a>
                        <a href="#" data-filter=".u">U</a>
                        <a href="#" data-filter=".v">V</a>
                        <a href="#" data-filter=".w">W</a>
                        <a href="#" data-filter=".x">X</a>
                        <a href="#" data-filter=".y">Y</a>
                        <a href="#" data-filter=".z">Z</a>
                        <a href="#" data-filter=".number">0-9</a>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a1.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Second Song</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item s e q">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a2.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Sam Smith</h5>
                            </a>
                            <p>Underground</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item w f r">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a3.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>First</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a4.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Second Song</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d h v">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a5.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t i x">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a6.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Unplugged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item b j y">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a7.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Beyonce</h5>
                            </a>
                            <p>Songs</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item a k z">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a8.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Aam Smith</h5>
                            </a>
                            <p>Underground</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item w l number">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a9.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>First</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d m">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a10.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t n">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a11.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Unplugged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album -->
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item b o">
                    <div class="single-album">
                        <img src="{{asset ('clients/img/bg-img/a12.jpg') }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Beyonce</h5>
                            </a>
                            <p>Songs</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Album Catagory Area End ##### -->

    <!-- ##### Buy Now Area Start ##### -->
    <div class="oneMusic-buy-now-area mb-100">
        <div class="container">
            <div class="row">

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="{{asset ('clients/img/bg-img/b1.jpg') }}" alt="">
                            <!-- Album Price -->
                            <div class="album-price">
                                <p>$0.90</p>
                                
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Garage Band</h5>
                            </a>
                            <p>Radio Station</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="{{ ('clients/img/bg-img/b2.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="{{ ('clients/img/bg-img/b3.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Jess Parker</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                            <img src="{{ ('clients/img/bg-img/b4.jpg') }}" alt="">
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>Noises</h5>
                            </a>
                            <p>Buble Gum</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center">
                        <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Buy Now Area End ##### -->

    
@endsection