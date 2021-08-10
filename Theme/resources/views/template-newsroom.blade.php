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
                    <a href="{{ $item->link }}">
                      <span>{{ $item->name }}</span>
                    </a>
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
          <a href="javascript:;" class="btn-arrow prev"></a>
          <a href="javascript:;" class="btn-arrow next"></a>
        </div>
      </div>
      <div class="newsroom__blog-body">
        <div class="swiper-wrapper">
          @foreach ($blog_posts as $post)
          <div class="swiper-slide">
            <div class="card-col">
              @if ($post->thumbnail)
              <div class="card-col-thumbnail">
                <img src="{!! $post->thumbnail !!}" />
              </div>
              @endif
              <div class="card-col-main">
                @if (!empty($post->category))
                  <ul class="card-col-cat">
                    @foreach ($post->category as $item)
                      <li class="card-col-cat-item">
                        <a href="{{ $item->link }}">
                          <span>{{ $item->name }}</span>
                        </a>
                      </li>
                    @endforeach
                  </ul>
                @endif
                <div class="card-col-contentWrap">
                  <a href="{!! $post->permalink !!}" class="card-col-title">{!! $post->post_title !!}</a>
                  <a href="{!! $post->permalink !!}" class="card-col-content">
                    {!! $post->excerpt !!}
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="newsroom__blog-footer">
        <div class="newsroom__blog-link">
          <a href="/blog" class="text-point block py-4">블로그 바로가기</a>
        </div>
        <ul class="flex">
          @foreach ($blog_cat as $term)
            <li>
              <a class="block px-6 py-4" href="{!! $term->link !!}">{!! $term->name !!}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
  <div class="newsroom__section-2">
    <div class="newsroom__press">
      <div class="container mx-auto xl:max-w-screen-xl">
        <div class="newsroom__press-header">
          <div class="newsroom__press-header-title">프레스</div>
          <div class="newsroom__press-header-arrow">
            <a href="javascript:;" class="btn-arrow prev"></a>
            <a href="javascript:;" class="btn-arrow next"></a>
          </div>
        </div>
        <div class="newsroom__press-swiper">
          <div class="swiper-wrapper">
            @foreach ($press_posts as $post)
              <div class="swiper-slide newsroom__press-body flex">
                <div class="w-1/2 p-20 newsroom__press-content flex flex-col justify-between">
                  <div class="card-def-main">
                    @if (!empty($post->category))
                      <ul class="card-def-cat">
                        @foreach ($post->category as $item)
                          <li class="card-def-cat-item">
                            <a href="{{ $item->link }}">
                              <span>{{ $item->name }}</span>
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                    <div class="card-def-contentWrap">
                      <a href="{!! $post->permalink !!}" class="card-def-title">{!! $post->post_title !!}</a>
                      <div class="card-def-content">
                        {!! $post->excerpt !!}
                      </div>
                    </div>
                  </div>
                  <div class="card-def-footer">
                    <div class="card-def-readmore">
                      <a href="{!! $post->permalink !!}" class="btn font-semibold">자세히 보기</a>
                    </div>
                  </div>
                </div>
                <div class="w-1/2 newsroom__press-thumbnail-wrap">
                  <div class="newsroom__press-thumbnail">
                    <img src="{!! $post->thumbnail !!}" alt="">
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="newsroom__newslater">
      <div class="container mx-auto xl:max-w-screen-xl">
        <div class="newsroom__newslater-body">
          <div class="newsroom__newslater-title">뉴스레터</div>
          <form class="newsroom__newslater-form flex gap-2" action="">
            <input class="input" type="text" placeholder="sample@email.com">
            <div class="flex gap-1">
              <button type="submit" class="btn btn-dark">구독 신청하기</button>
              <a href="#" class="btn btn-dark">지난 뉴스레터 보기</a>
            </div>
          </form>
        </div>
        <div class="newsroom__newslater-notice">
          <div class="swiper-wrapper">
            @for ($i = 0; $i < 2; $i++)
              <div class="newsroom__newslater-notice-item swiper-slide">
                <a href="/" class="newsroom__newslater-notice-label">
                  <div class="icon-wrap">
                    <div class="icon-notice"></div>
                    <div class="icon-label">정인철 삼표레일웨이 대표, 국토부 장관 표창 수상</div>
                  </div>
                </a>
                <div class="newsroom__newslater-notice-date">
                  2021.07.19
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
