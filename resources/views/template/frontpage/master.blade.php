<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Gloss Factory Indonesia</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('front/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('front/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{asset('front/css/landing-page.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  @include('template.frontpage.partials.nav');

  <!-- Masthead -->
  @include('template.frontpage.partials.masthead')

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
        @foreach ($post as $key=>$post)
        
        <div class="row no-gutters">

            <div @if ($key%2==0)
                class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url({{ Voyager::image( $post->image ) }});"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2>{{$post->title}}</h2>
              <p class="lead mb-0">{{$post->excerpt}}</p>
              <p class="lead mb-0">{{$post->body}}</p>
                </div>
            @endif @if ($key%2!=0)
            <div class="col-lg-6 text-white showcase-img" style="background-image: url({{ Voyager::image( $post->image ) }});"></div>
            <div class="col-lg-6 my-auto showcase-text">
              <h2>{{$post->title}}</h2>
          <p class="lead mb-0">{{$post->excerpt}}</p>
          <p class="lead mb-0">{{$post->body}}</p>
        </div>
            @endif
            
              
            </div>
          </div>
        @endforeach
    </div>
  </section>

  <!-- Testimonials -->
  @include('template.frontpage.partials.testi')

  <!-- Call to Action -->
  @include('template.frontpage.partials.call')

  <!-- Footer -->
 @include('template.frontpage.partials.footer');

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
