{{--
  Template Name: 뉴스룸
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header-newsroom')
  <div class="newsroom__pin_blog">
    <div class="container xl:max-w-screen-xl mx-auto flex">
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
    <div class="newsroom__media">
      <div class="container mx-auto xl:max-w-screen-xl">
        <div class="newsroom__media-header">
          <div class="newsroom__media-header-title">프레스</div>
          <div class="newsroom__media-header-arrow">
            <a href="javascript:;" class="btn-arrow prev"></a>
            <a href="javascript:;" class="btn-arrow next"></a>
          </div>
        </div>
        <div class="newsroom__media-swiper">
          <div class="swiper-wrapper">
            @foreach ($media_posts as $post)
              <div class="swiper-slide newsroom__media-body flex">
                <div class="w-1/2 p-20 newsroom__media-content flex flex-col justify-between">
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
                <div class="w-1/2 newsroom__media-thumbnail-wrap">
                  <div class="newsroom__media-thumbnail">
                    <img src="{!! $post->thumbnail !!}" alt="">
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="newsroom__media-row">
          <div class="w-1/2">
            <div class="wrap">
              <div class="newsroom__media-header">
                <div class="newsroom__media-header-title">보도자료</div>
                <div class="newsroom__media-header-arrow">
                  <a href="javascript:;" id="media_release_btn" class="btn-arrow prev"></a>
                  <a href="javascript:;" id="media_release_btn" class="btn-arrow next"></a>
                </div>
              </div>
              <div id="media_release" class="newsroom__media-row-body">
                <div class="swiper-wrapper">
                  @foreach ($media_cat_release as $media_cat_release_col)
                    <ul class="swiper-slide">
                      @foreach ($media_cat_release_col as $post)
                        <li class="mb-16">
                          <div class="card-def">
                            <a href="{!! $post->permalink !!}" class="card-def-thumbnail">
                              <img src="{!! $post->thumbnail !!}" />
                            </a>
                            <div class="card-def-main">
                              <div class="card-def-contentWrap">
                                <a href="{!! $post->permalink !!}" class="card-def-title">{!! $post->post_title !!}</a>
                                <div class="card-def-content">
                                  {!! $post->excerpt !!}
                                </div>
                              </div>
                              <div class="card-def-meta">
                                <div class="card-def-date">
                                  {!! $post->date !!}
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
          <div class="w-1/2 flex justify-end">
            <div class="wrap">
              <div class="newsroom__media-header">
                <div class="newsroom__media-header-title">언론소개</div>
                <div class="newsroom__media-header-arrow">
                  <a href="javascript:;" id="media_featured_btn" class="btn-arrow prev"></a>
                  <a href="javascript:;" id="media_featured_btn" class="btn-arrow next"></a>
                </div>
              </div>
              <div id="media_featured" class="newsroom__media-row-body">
                <div class="swiper-wrapper">
                  @foreach ($media_cat_featured as $media_cat_featured_col)
                    <ul class="swiper-slide">
                      @foreach ($media_cat_featured_col as $post)
                        <li class="mb-16">
                          <div class="card-def">
                            <a href="{!! $post->permalink !!}" class="card-def-thumbnail">
                              <img src="{!! $post->thumbnail !!}" />
                            </a>
                            <div class="card-def-main">
                              <div class="card-def-contentWrap">
                                <a href="{!! $post->permalink !!}" class="card-def-title">{!! $post->post_title !!}</a>
                                <div class="card-def-content">
                                  {!! $post->excerpt !!}
                                </div>
                              </div>
                              <div class="card-def-meta">
                                <div class="card-def-date">
                                  {!! $post->date !!}
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      @endforeach
                    </ul>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="newsroom__newslater">
      <div class="container mx-auto xl:max-w-screen-xl">
        @include('partials.newsletter')
        <div class="newsroom__newslater-notice">
          <div class="swiper-wrapper">
            @foreach ($notice_posts as $post)
              <div class="newsroom__newslater-notice-item swiper-slide">
                <a href="{!! $post->guid !!}" class="newsroom__newslater-notice-label">
                  <div class="icon-wrap">
                    <div class="icon-notice"></div>
                    <div class="icon-label">{!! $post->post_title !!}</div>
                  </div>
                </a>
                <div class="newsroom__newslater-notice-date">
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
