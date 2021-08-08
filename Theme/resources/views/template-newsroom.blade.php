{{--
  Template Name: 뉴스룸
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header-newsroom')
  <div class="newsroom__pin_blog">
    <div class="container lg:max-w-screen-lg mx-auto flex">
      <div class="w-1/2">
        <div class="newsroom__pin_blog-thumbnail">
          <img src="{!! $pin_blog->thumbnail !!}" alt="">
        </div>
      </div>
      <div class="w-1/2 pl-20 pt-20">
        <div class="newsroom__pin_blog-content flex flex-col justify-between h-full">
          <div class="card-def-main">
            @if (!empty($pin_blog->category))
              <ul class="card-def-cat">
                @foreach ($pin_blog->category as $item)
                  <li class="card-def-cat-item">
                    <a href="{{ $item->link }}">{{ $item->name }}</a>
                  </li>
                @endforeach
              </ul>
            @endif
            <div class="card-def-contentWrap">
              <a href="{!! $pin_blog->permalink !!}" class="card-def-title">{!! $pin_blog->post_title !!}</a>
              <div class="card-def-content">
                {!! $pin_blog->excerpt !!}
              </div>
            </div>
          </div>
          <div class="card-def-footer">
            <div class="card-def-readmore">
              <a href="{!! $pin_blog->permalink !!}" class="btn font-semibold">자세히 보기</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="newsroom__blog">
    <div class="container mx-auto xl:max-w-screen-xl">
      <div class="newsroom__blog-header">
        <div class="newsroom__blog-header-title">블로그</div>
        <div class="newsroom__blog-header-arrow">
          <div class="btn-arrow prev"></div>
          <div class="btn-arrow next"></div>
        </div>
      </div>
      <div class="newsroom__blog-body">
        <div class="swiper-wrapper">
          @foreach ($blog_posts as $blog)
          <div class="swiper-slide">
            <div class="card-col">
              @if ($blog->thumbnail)
              <div class="card-col-thumbnail">
                <img src="{!! $blog->thumbnail !!}" />
              </div>
              @endif
              <div class="card-col-main">
                @if (!empty($blog->category))
                  <ul class="card-col-cat">
                    @foreach ($blog->category as $item)
                      <li class="card-col-cat-item">
                        <a href="{{ $item->link }}">{{ $item->name }}</a>
                      </li>
                    @endforeach
                  </ul>
                @endif
                <div class="card-col-contentWrap">
                  <a href="{!! $blog->permalink !!}" class="card-col-title">{!! $blog->post_title !!}</a>
                  <a href="{!! $blog->permalink !!}" class="card-col-content">
                    {!! $blog->excerpt !!}
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
