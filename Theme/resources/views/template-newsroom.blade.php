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
                        <a href="{{ $item->link }}">
                          <span>{{ $item->name }}</span>
                        </a>
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
            <div class="swiper-slide newsroom__press-body flex">
              <div class="w-1/2 p-20 newsroom__press-content flex flex-col justify-between">
                <div class="card-def-main">
                  <ul class="card-def-cat">
                      <li class="card-def-cat-item">
                        <a href="/">
                          <span>언론소개</span>
                        </a>
                      </li>
                  </ul>
                  <div class="card-def-contentWrap">
                    <a href="/" class="card-def-title">삼표, 드라이 모르타르 ‘제조 업계 최초’ 온라인 몰 오픈</a>
                    <div class="card-def-content">
                      <p>건설기초소재 선두기업 삼표그룹(회장 정도원)이 드라이모르타르 제조 업계 최초로 이커머스(전자 상거래) 채널까지 판매망을 확대했다. 기존 B2B (기업 대상 사업)에 머물렀던 사업 영역을 B2C(소비자 대상 사업)으로 확장해 다양한 고객군의 수요에 대응하겠다는 전략이다.</p>
                    </div>
                  </div>
                </div>
                <div class="card-def-footer">
                  <div class="card-def-readmore">
                    <a href="/" class="btn font-semibold">자세히 보기</a>
                  </div>
                </div>
              </div>
              <div class="w-1/2 newsroom__press-thumbnail-wrap">
                <div class="newsroom__press-thumbnail">
                  <img src="https://picsum.photos/960?random=1" alt="">
                </div>
              </div>
            </div>
            <div class="swiper-slide newsroom__press-body flex">
              <div class="w-1/2 p-20 newsroom__press-content flex flex-col justify-between">
                <div class="card-def-main">
                  <ul class="card-def-cat">
                      <li class="card-def-cat-item">
                        <a href="/">
                          <span>언론소개</span>
                        </a>
                      </li>
                  </ul>
                  <div class="card-def-contentWrap">
                    <a href="/" class="card-def-title">삼표, 드라이 모르타르 ‘제조 업계 최초’ 온라인 몰 오픈</a>
                    <div class="card-def-content">
                      <p>건설기초소재 선두기업 삼표그룹(회장 정도원)이 드라이모르타르 제조 업계 최초로 이커머스(전자 상거래) 채널까지 판매망을 확대했다. 기존 B2B (기업 대상 사업)에 머물렀던 사업 영역을 B2C(소비자 대상 사업)으로 확장해 다양한 고객군의 수요에 대응하겠다는 전략이다.</p>
                    </div>
                  </div>
                </div>
                <div class="card-def-footer">
                  <div class="card-def-readmore">
                    <a href="/" class="btn font-semibold">자세히 보기</a>
                  </div>
                </div>
              </div>
              <div class="w-1/2 newsroom__press-thumbnail-wrap">
                <div class="newsroom__press-thumbnail">
                  <img src="https://picsum.photos/960?random=1" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
