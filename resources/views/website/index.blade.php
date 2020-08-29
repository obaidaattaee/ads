@extends("frontend.layout")

@section("content")
 @include("site.header")
    @include("site.service")
      @include("site.ads")
        @include("site.products")
          @include("site.trending")
            @include("site.testimonials")
               @include("site.blog")
                 @include("site.subscribe")
                     @include("site.footer")

@endsection