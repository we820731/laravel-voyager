@extends('layouts.site')

@section('seo')
    @isset($keywords)
        <meta name="keywords" content="{{ __('Home Page') }}">
    @endisset
    @isset($description)
        <meta name="description" content="{{ setting('site.description') }}">
    @endisset
@stop

@section('page_title') {{__('Home Page')}} @stop

@section('page_top')
  {{-- @if ($items_slider != null)
      <section id="hero" class="d-flex justify-cntent-center align-items-center"
          style="background-image: url('{{ url($items_slider[0]->getPicUrl()) }}')">
          <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
              @foreach ($items_slider as $item)
                  <div class="carousel-item @if($loop->first) active  @endif" >
                      <div class="carousel-container">
                          <h2 class="animate__animated animate__fadeInDown">{!! $item->title !!}</h2>
                          <p class="animate__animated animate__fadeInUp">
                              {!! $item->subtitle !!}
                          </p>
                          <a href="{{ $item->url }}" class="btn-get-started animate__animated animate__fadeInUp">{{ $item->url_txt }}</a>
                      </div>
                  </div>
              @endforeach

              <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">上一頁</span>
              </a>

              <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">下一頁</span>
              </a>

          </div>
      </section>
  @endif --}}
{{-- <section class="module bg-dark-60 blog-page-header" data-background="assets/images/blog_bg.jpg">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Blog Standard</h2>
        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like
          these sweet mornings of spring which I enjoy with my whole heart.</div>
      </div>
    </div>
  </div>
</section> --}}
@stop

@section('body')
  @isset($articles)
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          @foreach ($articles as $article)
          <div class="post">
            <div class="post-thumbnail"><a href="#"><img src="assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
            <div class="post-header font-alt">
              <h2 class="post-title"><a href="#">{{ $article->title }}</a></h2>
              <div class="post-meta">By&nbsp;
                <a href="#">Mark Stone</a>| 23 November | 3 Comments | 
                <a href="#">Photography, </a>
                <a href="#">Web Design</a>
              </div>
            </div>
            <div class="post-entry">
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</p>
            </div>
            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  @endisset
@stop