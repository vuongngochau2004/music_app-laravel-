
@extends('client.layouts.main')

@section('title', 'Home')

@section('content-wrapper')
<div class="content-wrapper">
  <section class="hero-area">
    <div class="hero-slides owl-carousel">
      <!-- Single Hero Slide -->
      @foreach ($latestAlbums as $item)
      
      <div class="single-hero-slide d-flex align-items-center justify-content-center">
        <!-- Slide Img -->
        <div class="slide-img bg-img" style="background-image: url({{asset('storage/uploads/image_album/'.$item->image_album)}});"></div><!-- Slide Content -->
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="hero-slides-content text-center">
                <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                <h2 data-animation="fadeInUp" data-delay="300ms">{{$item->title}}<span>{{$item->title}}</span></h2><a data-animation="fadeInUp" data-delay="500ms" href="{{route('albums-store')}}" class="btn oneMusic-btn mt-50">Discover</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
     
    </div>
  </section><!-- ##### Hero Area End ##### -->
  <section class="latest-albums-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading style-2">
            <p>See what’s new</p>
            <h2>Latest Albums</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
          <div class="ablums-text text-center mb-70">
            <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="albums-slideshow owl-carousel">
            <!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a1.jpg')}}" alt="a1">
              <div class="album-info">
                <a href="#">
                <h5>The Cure</h5></a>
                <p>Second Song</p>
              </div>
            </div><!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a2.jpg')}}" alt="a2">
              <div class="album-info">
                <a href="#">
                <h5>Sam Smith</h5></a>
                <p>Underground</p>
              </div>
            </div><!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a3.jpg')}}" alt="a3">
              <div class="album-info">
                <a href="#">
                <h5>Will I am</h5></a>
                <p>First</p>
              </div>
            </div><!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a4.jpg')}}" alt="a4">
              <div class="album-info">
                <a href="#">
                <h5>The Cure</h5></a>
                <p>Second Song</p>
              </div>
            </div><!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a5.jpg')}}" alt="a5">
              <div class="album-info">
                <a href="#">
                <h5>DJ SMITH</h5></a>
                <p>The Album</p>
              </div>
            </div><!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a6.jpg')}}" alt="a6">
              <div class="album-info">
                <a href="#">
                <h5>The Ustopable</h5></a>
                <p>Unplugged</p>
              </div>
            </div><!-- Single Album -->
            <div class="single-album">
              <img src="{{asset ('clients/img/bg-img/a7.jpg')}}" alt="a7">
              <div class="album-info">
                <a href="#">
                <h5>Beyonce</h5></a>
                <p>Songs</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="section-heading style-2">
            <p>See what’s new</p>
            <h2>Buy What’s New</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
            <div class="album-thumb">
              <img src="{{asset ('clients/img/bg-img/b1.jpg')}}" alt="b1"> <!-- Album Price -->
              <div class="album-price">
                <p>$0.90</p>
              </div><!-- Play Icon -->
              <div class="play-icon">
                <a href="#" class="video--play--btn"></a>
              </div>
            </div>
            <div class="album-info">
              <a href="#">
              <h5>Garage Band</h5></a>
              <p>Radio Station</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b2.jpg')}}" alt="b2"></div>
            <div class="album-info">
              <a href="#">
              <h5>Noises</h5></a>
              <p>Buble Gum</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b3.jpg')}}" alt="b3"></div>
            <div class="album-info">
              <a href="#">
              <h5>Jess Parker</h5></a>
              <p>The Album</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b4.jpg')}}" alt="b4"></div>
            <div class="album-info">
              <a href="#">
              <h5>Noises</h5></a>
              <p>Buble Gum</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
            <div class="album-thumb">
              <img src="{{asset ('clients/img/bg-img/b1.jpg')}}" alt="b1"> <!-- Album Price -->
              <div class="album-price">
                <p>$0.90</p>
              </div><!-- Play Icon -->
              <div class="play-icon">
                <a href="#" class="video--play--btn"></a>
              </div>
            </div>
            <div class="album-info">
              <a href="#">
              <h5>Garage Band</h5></a>
              <p>Radio Station</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b2.jpg')}}" alt="b2"></div>
            <div class="album-info">
              <a href="#">
              <h5>Noises</h5></a>
              <p>Buble Gum</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b3.jpg')}}" alt="b3"></div>
            <div class="album-info">
              <a href="#">
              <h5>Jess Parker</h5></a>
              <p>The Album</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b4.jpg')}}" alt="b4"></div>
            <div class="album-info">
              <a href="#">
              <h5>Noises</h5></a>
              <p>Buble Gum</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
            <div class="album-thumb">
              <img src="{{asset ('clients/img/bg-img/b1.jpg')}}" alt="b1"> <!-- Album Price -->
              <div class="album-price">
                <p>$0.90</p>
              </div><!-- Play Icon -->
              <div class="play-icon">
                <a href="#" class="video--play--btn"></a>
              </div>
            </div>
            <div class="album-info">
              <a href="#">
              <h5>Garage Band</h5></a>
              <p>Radio Station</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b2.jpg')}}" alt="b2"></div>
            <div class="album-info">
              <a href="#">
              <h5>Noises</h5></a>
              <p>Buble Gum</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b3.jpg')}}" alt="b3"></div>
            <div class="album-info">
              <a href="#">
              <h5>Jess Parker</h5></a>
              <p>The Album</p>
            </div>
          </div>
        </div><!-- Single Album Area -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
            <div class="album-thumb"><img src="{{asset ('clients/img/bg-img/b4.jpg')}}" alt="b4"></div>
            <div class="album-info">
              <a href="#">
              <h5>Noises</h5></a>
              <p>Buble Gum</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
            <a href="#" class="btn oneMusic-btn">Load More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url({{asset ('clients/img/bg-img/bg-4.jpg')}});">
    <div class="container">
    <div class="row align-items-end">
        <div class="col-12 col-md-5 col-lg-4">
        <div class="featured-artist-thumb"><img src="{{asset ('clients/img/bg-img/fa.jpg')}}" alt="fa"></div>
        </div>
        <div class="col-12 col-md-7 col-lg-8">
        <div class="featured-artist-content">
            <!-- Section Heading -->
            <div class="section-heading white text-left mb-30">
            <p>See what’s new</p>
            <h2>Buy What’s New</h2>
            </div>
            <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
            <div class="song-play-area">
            <div class="song-name">
                <p>01. Main Hit Song</p> 
            </div><audio preload="auto" controls=""><source src="{{asset ('storage/uploads/audio/bvis9Foov56FuhtiGds256s5QPaOA79JvW1vYbbL.mp3')}}"></audio>
            </div>
        </div>
        </div>
    </div>
    </div>
  </section>
  <section class="miscellaneous-area section-padding-100-0">
    <div class="container">
    <div class="row">
        <!-- ***** Weeks Top ***** -->
        <div class="col-12 col-lg-4">
        <div class="weeks-top-area mb-100">
            <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
            <p>See what’s new</p>
            <h2>This week’s top</h2>
            </div><!-- Single Top Item -->
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt1.jpg')}}" alt="wt1"></div>
            <div class="content-">
                <h6>Sam Smith</h6>
                <p>Underground</p>
            </div>
            </div><!-- Single Top Item -->
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="150ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt2.jpg')}}" alt="wt2"></div>
            <div class="content-">
                <h6>Power Play</h6>
                <p>In my mind</p>
            </div>
            </div><!-- Single Top Item -->
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="200ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt3.jpg')}}" alt="wt3"></div>
            <div class="content-">
                <h6>Cristinne Smith</h6>
                <p>My Music</p>
            </div>
            </div><!-- Single Top Item -->
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="250ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt4.jpg')}}" alt="wt4"></div>
            <div class="content-">
                <h6>The Music Band</h6>
                <p>Underground</p>
            </div>
            </div><!-- Single Top Item -->
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="300ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt5.jpg')}}" alt="wt5"></div>
            <div class="content-">
                <h6>Creative Lyrics</h6>
                <p>Songs and stuff</p>
            </div>
            </div><!-- Single Top Item -->
            <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="350ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt6.jpg')}}" alt="wt6"></div>
            <div class="content-">
                <h6>The Culture</h6>
                <p>Pop Songs</p>
            </div>
            </div>
        </div>
        </div><!-- ***** New Hits Songs ***** -->
        <div class="col-12 col-lg-4">
        <div class="new-hits-area mb-100">
            <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
            <p>See what’s new</p>
            <h2>New Hits</h2>
            </div><!-- Single Top Item -->
            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
            <div class="first-part d-flex align-items-center">
                <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt7.jpg')}}" alt="wt7"></div>
                <div class="content-">
                <h6>Sam Smith</h6>
                <p>Underground</p>
                </div>
            </div><audio preload="auto" controls=""><source src="{{asset ('clients/audio/dummy-audio.mp3')}}"></audio>
            </div><!-- Single Top Item -->
            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
            <div class="first-part d-flex align-items-center">
                <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt8.jpg')}}" alt="wt8"></div>
                <div class="content-">
                <h6>Power Play</h6>
                <p>In my mind</p>
                </div>
            </div><audio preload="auto" controls=""><source src="{{asset ('clients/audio/dummy-audio.mp3')}}"></audio>
            </div><!-- Single Top Item -->
            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
            <div class="first-part d-flex align-items-center">
                <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt9.jpg')}}" alt="wt9"></div>
                <div class="content-">
                <h6>Cristinne Smith</h6>
                <p>My Music</p>
                </div>
            </div><audio preload="auto" controls=""><source src="{{asset ('clients/audio/dummy-audio.mp3')}}"></audio>
            </div><!-- Single Top Item -->
            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
            <div class="first-part d-flex align-items-center">
                <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt10.jpg')}}" alt="wt10"></div>
                <div class="content-">
                <h6>The Music Band</h6>
                <p>Underground</p>
                </div>
            </div><audio preload="auto" controls=""><source src="{{asset ('clients/audio/dummy-audio.mp3')}}"></audio>
            </div><!-- Single Top Item -->
            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
            <div class="first-part d-flex align-items-center">
                <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt11.jpg')}}" alt="wt11"></div>
                <div class="content-">
                <h6>Creative Lyrics</h6>
                <p>Songs and stuff</p>
                </div>
            </div><audio preload="auto" controls=""><source src="{{asset ('clients/audio/dummy-audio.mp3')}}"></audio>
            </div><!-- Single Top Item -->
            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
            <div class="first-part d-flex align-items-center">
                <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/wt12.jpg')}}" alt="wt12"></div>
                <div class="content-">
                <h6>The Culture</h6>
                <p>Pop Songs</p>
                </div>
            </div><audio preload="auto" controls=""><source src="{{asset ('clients/audio/dummy-audio.mp3')}}"></audio>
            </div>
        </div>
        </div><!-- ***** Popular Artists ***** -->
        <div class="col-12 col-lg-4">
        <div class="popular-artists-area mb-100">
            <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
            <p>See what’s new</p>
            <h2>Popular Artist</h2>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa1.jpg')}}" alt="pa1"></div>
            <div class="content-">
                <p>Sam Smith</p>
            </div>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="150ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa2.jpg')}}" alt="pa2"></div>
            <div class="content-">
                <p>William Parker</p>
            </div>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa3.jpg')}}" alt="pa3"></div>
            <div class="content-">
                <p>Jessica Walsh</p>
            </div>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="250ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa4.jpg')}}" alt="pa4"></div>
            <div class="content-">
                <p>Tha Stoves</p>
            </div>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa5.jpg')}}" alt="pa5"></div>
            <div class="content-">
                <p>DJ Ajay</p>
            </div>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="350ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa6.jpg')}}" alt="pa6"></div>
            <div class="content-">
                <p>Radio Vibez</p>
            </div>
            </div><!-- Single Artist -->
            <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="400ms">
            <div class="thumbnail"><img src="{{asset ('clients/img/bg-img/pa7.jpg')}}" alt="pa7"></div>
            <div class="content-">
                <p>Music 4u</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
  </section>
</div>
@endsection


