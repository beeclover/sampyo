{{--
  Template Name: 뉴스룸
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header-newsroom')
  <div class="newsroom__pin_blog">
    <div class="container mx-auto flex">
      <div class="grid grid-cols-1 sm:grid-cols-2">
        <div>
          <div class="newsroom__pin_blog-thumbnail max:sm:pt-[40px] max:sm:pb-[30px]">
            <img src="{!! $pin_blog->thumbnail !!}" alt="">
          </div>
        </div>
        <div class="sm:pl-[80px] sm:pt-[80px]">
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
  </div>
  <div class="newsroom__blog overflow-hidden">
    <div class="container mx-auto">
      <div class="newsroom__blog-header">
        <div class="newsroom__blog-header-title">블로그</div>
        <div class="newsroom__blog-header-arrow hidden sm:block">
          <a href="javascript:;" class="btn-arrow prev"></a>
          <a href="javascript:;" class="btn-arrow next"></a>
        </div>
      </div>
      <div class="newsroom__blog-body">
        <div class="swiper-wrapper">
          @foreach ($blog_posts as $key => $post)
            @if ($key === 0)
              @continue
            @endif
            <div class="swiper-slide" data-test="{!! $key !!}">
              <div class="card-col gap-y-[30px] sm:gap-y-10">
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
                    <a href="{!! $post->permalink !!}" class="card-col-title text-[20px] sm:text-2xl">{!! $post->post_title !!}</a>
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
        <div class="grid grid-cols-1 sm:grid-cols-3 w-full">
          <div class="newsroom__blog-link">
            <a href="/blog" class="text-point block py-4 max:sm:pb-[30px]">블로그 바로가기</a>
          </div>
          <ul class="flex flex-wrap gap-x-[30px] sm:gap-x-12 gap-y-[14px] sm:gap-y-8 sm:col-span-2 sm:justify-end">
            @foreach ($blog_cat as $term)
              <li class="self-center">
                <a href="{!! $term->link !!}">{!! $term->name !!}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="newsroom__section-2 max:sm:pb-0">
    <div class="newsroom__media">
      <div class="container mx-auto max:sm:px-0">
        <div class="newsroom__media-header max:sm:px-[32px]">
          <div class="newsroom__media-header-title">미디어</div>
          <div class="newsroom__media-header-arrow @if (count($media_posts) === 1) hidden @endif">
            <a href="javascript:;" class="btn-arrow prev"></a>
            <a href="javascript:;" class="btn-arrow next"></a>
          </div>
        </div>
        <div class="newsroom__media-swiper">
          <div class="swiper-wrapper">
            @foreach ($media_posts as $post)
              <div class="swiper-slide newsroom__media-body grid grid-cols-1 sm:grid-cols-2">
                <div class="p-[30px] sm:p-20 newsroom__media-content flex flex-col justify-between">
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
                <div class="newsroom__media-thumbnail-wrap max:sm:aspect-h-9 max:sm:aspect-w-16 max:sm:order-first">
                  <div class="newsroom__media-thumbnail sm:transform sm:translate-y-[100px]">
                    <img src="{!! $post->thumbnail !!}" alt="">
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="newsroom__media-row grid grid-cols-1 sm:grid-cols-2 max:sm:px-[32px] sm:gap-x-[140px]">
          <div class="@if (empty($media_cat_featured)) sm:col-span-2 @endif">
            <div class="newsroom__media-header">
              <div class="newsroom__media-header-title">보도자료</div>
            </div>
            <div id="media_release" class="newsroom__media-row-body">
              <div class="swiper-wrapper">
                @foreach ($media_cat_release as $media_cat_release_col)
                  <ul class="swiper-slide">
                    @php($index = 1)
                    @foreach ($media_cat_release_col as $key => $post)
                      <li class="mb-[30px] sm:mb-16 list-none @if ($index < count($media_cat_release_col)) max:sm:border-b max:sm:border-orochimaru max:sm:pb-[30px] @endif">
                        @include('partials.card.__def2', [
                          'thumbnail' => $post->thumbnail,
                          'permalink' => $post->permalink,
                          'title' => $post->post_title,
                          'excerpt' => $post->excerpt,
                          'date' => $post->date,
                        ])
                      </li>
                      @php($index++)
                    @endforeach
                  </ul>
                @endforeach
              </div>
            </div>
          </div>
          @if (!empty($media_cat_featured))
          <div class="@if (empty($media_cat_featured)) sm:col-span-2 @endif">
            <div class="newsroom__media-header">
              <div class="newsroom__media-header-title">언론소개</div>
            </div>
            <div id="media_featured" class="newsroom__media-row-body">
              <div class="swiper-wrapper">
                @foreach ($media_cat_featured as $media_cat_featured_col)
                  <ul class="swiper-slide">
                    @php($index = 1)
                    @foreach ($media_cat_featured_col as $post)
                    <li class="mb-[30px] sm:mb-16 list-none @if ($index < count($media_cat_release_col)) max:sm:border-b max:sm:border-orochimaru max:sm:pb-[30px] @endif">
                        @include('partials.card.__def2', [
                          'thumbnail' => $post->thumbnail,
                          'permalink' => $post->permalink,
                          'title' => $post->post_title,
                          'excerpt' => $post->excerpt,
                          'date' => $post->date,
                        ])
                      </li>
                      @php($index++)
                    @endforeach
                  </ul>
                @endforeach
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
    <div class="newsroom__newsletter">
      {{-- <div class="container mx-auto mb-[30px]">
        <x-Newsletter />
      </div> --}}
      <div class="container mx-auto max:sm:px-0">
        <div class="newsroom__newsletter-notice">
          <div class="swiper-wrapper">
            @foreach ($notice_posts as $post)
              <div class="newsroom__newsletter-notice-item swiper-slide max:sm:flex-col max:sm:items-start">
                <a href="{!! get_the_permalink($post->ID) !!}" class="newsroom__newsletter-notice-label">
                  <div class="icon-wrap max:sm:flex-col max:sm:items-start">
                    <div class="icon-notice"></div>
                    <div class="icon-label">{!! $post->post_title !!}</div>
                  </div>
                </a>
                <div class="newsroom__newsletter-notice-date">
                  {!! $post->date !!}
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
