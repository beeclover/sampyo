@extends('layouts.app')

@section('content')
<div class="section hero">
  <div class="container mx-auto">
    <div class="swiper-container hero-slide">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero-img-wrap">
            <div class="hero-img-readmore">
              {!! $readmore !!}
            </div>
          </div>
          <div class="hero-content hero-content-wrap">
            <h1 class="hero-content-title-1">
              미래의 새로운 삶을 위한<br />
              기초를 만들다
            </h1>
            <p class="hero-content-title-2">
              삼표그룹은 지금보다 더 나은 미래를 현실로 만들기 위해<br />
              지난 반세기 동안 한결같은 마음으로 노력해오고 있습니다.
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-img-wrap">
            <div class="hero-img-readmore">
              {!! $readmore !!}
            </div>
          </div>
          <div class="hero-content hero-content-wrap">
            <h1 class="hero-content-title-1">
              드라이 모르타르 제조업계 최초<br />
              온라인 몰 오픈
            </h1>
            <p class="hero-content-title-2">
              인테리어 DIY족 겨냥 네이버 스토어 ‘삼표몰탈몰’ 개설<br />
              “유통 플랫폼 다각화 등으로 고객 서비스 차별화 강화”
            </p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-img-wrap">
            <div class="hero-img-readmore">
              {!! $readmore !!}
            </div>
          </div>
          <div class="hero-content hero-content-wrap">
            <h1 class="hero-content-title-1">
              삼표시멘트<br />
              업계 선도 ESG 경영체계 구축
            </h1>
            <p class="hero-content-title-2">
              삼표시멘트, 제30기 정기주주총회서 환경 관련 내용 사업 목적 추가<br />
              환경 개선 설비 등 투자 확대, 자원순환 통해 친환경 기업 거듭날 것
            </p>
          </div>
        </div>
        <div class="hero-slide-wrap">
          <video src="{!! $heroVideo !!}" autoplay muted loop></video>
        </div>
      </div>
      <div class="hero-slide-pagination swiper-pagination"></div>
    </div>
  </div>
</div>
<div class="section home__s1">
  <div class="container xl:max-w-screen-xl mx-auto relative">
    <div class="home__s1-header">
      <div class="home__s1-title text-6xl font-black">사업영역</div>
      <p class="home__s1-header-content">끊임없는 도전과 창조적인 혁신을 통해 Building Materials 분야의 리더로 자리매김합니다.</p>
    </div>
    <div class="flex gap-9">
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-1">
        
        @php($cat = array_shift($business))
        @include('partials.card-flip')
      </div>
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-2">
        @php($cat = array_shift($business))
        @include('partials.card-flip')
        @php($cat = array_shift($business))
        @include('partials.card-flip')
      </div>
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-3">
        @php($cat = array_shift($business))
        @include('partials.card-flip')
        @php($cat = array_shift($business))
        @include('partials.card-flip')
      </div>
    </div>
  </div>
</div>
<div class="section home__s23">
  <div class="section home__s2">
    <div id="swiperBgRoot" class="swiper-root-bg">
      <div class="swiper-wrapper">
        @foreach ($newsroom as $id => $pt)
          <div class="swiper-slide">
            <div id="swiperBgChild" class="card-content-swiper-bg" data-id="{{$id}}">
              <div class="swiper-wrapper">
                @foreach ($pt as $post)
                  <div class="swiper-slide">
                    @if(!empty($post->thumbnail))
                      <img class="card-content-thumbnail" src="{{ $post->thumbnail }}" alt="">
                    @else
                      <img class="card-content-thumbnail" src="https://picsum.photos/1920?random={{$post->ID}}" alt="">
                    @endif
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex py-32">
        <div class="w-2/3 text-white">
          <div id="swiperContentRoot" class="h-full">
            <div class="swiper-wrapper">
              @foreach ($newsroom as $id => $pt)
                <div class="swiper-slide">
                  <div class="card-content">
                    <div id="swiperContentChild" data-id="{{$id}}">
                      <div class="swiper-wrapper">
                        @php($index = 0)
                        @foreach ($pt as $post)
                          <div class="swiper-slide" data-index="{{$index}}">
                            <div data-id="{{ $post->ID }}"class="card-content-body">
                              <div class="card-content-title">
                                {{ $post->post_title }}
                              </div>
                              <div class="card-content-content prose">
                                {{ $post->excerpt }}
                              </div>
                              <div class="card-content-more"> 
                                <a href="{{ $post->permalink }}">더보기</a>
                              </div>
                            </div>
                          </div>
                          @php($index++)
                        @endforeach
                        @php($index = 0)
                      </div>
                    </div>
                    <div class="card-content-footer"> 
                      <a href="javascript:;" class="relative inline-flex items-center py-2 prev">
                          <!-- Heroicon name: solid/chevron-left -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                          </svg>
                          <span>PRE</span>
                        </a>
                        <a href="javascript:;" class="relative inline-flex items-center py-2 next">
                          <span>NEXT</span>
                          <!-- Heroicon name: solid/chevron-right -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                          </svg>
                        </a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="w-1/3 relative">
          <div class="box-content py-16 px-20">
            <div class="box-content-inner">
              <ul id="tab" class="flex tab-wrap">
                <li data-id="blog" class="tab-item active">
                  <a href="javascript:;">블로그</a>
                </li>
                <li data-id="media" class="tab-item">
                  <a href="javascript:;">미디어</a>
                </li>
                <li data-id="notice-board" class="tab-item">
                  <a href="javascript:;">공지사항</a>
                </li>
              </ul>
              <div id="tab-content">
                @foreach ($newsroom as $id => $pt)
                  <ul id="postBox" data-id="{{$id}}" @if ($id === "blog") class="active" @endif>
                    @foreach ($pt as $key=>$post)
                      <li data-id="{{ $post->ID }}" class="li__s1 @if ($key === 0) active @endif">
                        @if (count($post->category) > 0)
                          <ul class="li__s1-cat">
                            @foreach ($post->category as $cat)
                              <li class="li__s1-cat-item">{{ $cat->name }}</li>
                            @endforeach
                          </ul>
                        @endif
                        <div class="li__s1-body">
                          <div class="li__s1-content">
                            {{ $post->post_title }}
                          </div>
                          <div class="li__s1-etc"> 
                            <a href="{{ $post->permalink }}" class="li__s1-btn">
                                <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                                  l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                                  c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                                  c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                                  S1.293,9.212,1.729,9.212z"></path>
                                </svg>
                            </a>
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
  <div class="section home__s3">
    <div class="container xl:max-w-screen-xl mx-auto">
      <div class="home__s3-header">
        <div class="home__s3-title">삼표의 책임경영</div>
        <div class="home__s3-description">
          삼표는 인간과 생명을 중시하는 경영철학을 바탕으로<br/>
          풍요로운 미래를 위한 지속적인 노력을 아끼지 않고 있습니다.
        </div>
      </div>
      <div class="home__s3-body">
        <div class="flex">
          <div class="w-1/3 flex justify-center">
            <div class="card__s1">
              <div data-scroll-animation-item='3' class="card__s1-thumbnail"><img src={{ get_theme_file_uri('resources/images/53.svg') }}"></div>
              <div class="card__s1-body">
                <div class="card__s1-title">지속가능발전</div>
                <div class="card__s1-content">
                  정부의 탄소중립 선언과 그린뉴딜 정책에<br/>
                  발맞춰 ‘친환경 기업’으로 도약해 나가는<br/>
                  삼표의 미래를 위한 이야기
                </div>
                <div class="card__s1-etc">
                  <a href="#" class="card__s1-btn">
                    <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                    l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                    c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                    c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                    S1.293,9.212,1.729,9.212z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-1/3 flex justify-center">
            <div class="card__s1">
              <div data-scroll-animation-item='3' class="card__s1-thumbnail"><img src="{{ get_theme_file_uri('resources/images/56.svg') }}"></div>
              <div class="card__s1-body">
                <div class="card__s1-title">환경안전보건</div>
                <div class="card__s1-content">
                  자원과 에너지의 근원적 제어를 통해<br/>
                  자원·에너지의 효율적 이용과 환경오염물질<br/>
                  배출저감을 위한 노력을
                </div>
                <div class="card__s1-etc">
                  <a href="#" class="card__s1-btn">
                    <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                    l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                    c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                    c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                    S1.293,9.212,1.729,9.212z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="w-1/3 flex justify-center">
            <div class="card__s1">
              <div data-scroll-animation-item='3' class="card__s1-thumbnail"><img src="{{ get_theme_file_uri('resources/images/57.svg') }}"></div>
              <div class="card__s1-body">
                <div class="card__s1-title">사회공헌</div>
                <div class="card__s1-content">
                  ‘기업과 사회가 함께하는 것이<br/>
                  진정한 행복’이라는 믿음 아래 실천중인<br/>
                  삼표의 ‘나눔경영’
                </div>
                <div class="card__s1-etc">
                  <a href="#" class="card__s1-btn">
                    <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                    l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                    c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                    c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                    S1.293,9.212,1.729,9.212z"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section home__s45">
  <div class="section home__s4">
    <div class="container xl:max-w-screen-xl mx-auto">
      <ul class="home__s4-container">
        <li data-scroll-animation-item='4' class="w-1/3">
          <div class="card__s2">
            <div class="card__s2-header">
              <a href="#" class="arrow">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
              </a>
            </div>
            <div class="card__s2-body">
              <div class="card__s2-title">인재상</div>
              <div class="card__s2-content">삼표그룹의 핵심가치를 실천하는 융합형, 전문형, 도전형 인재를 지향합니다.</div>
            </div>
            <div class="card__s2-bg"><img src="https://picsum.photos/500?ramdom=1"></div>
          </div>
        </li>
        <li data-scroll-animation-item='4' class="w-1/3">
          <div class="card__s2">
            <div class="card__s2-header">
              <a href="#" class="arrow">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
              </a>
            </div>
            <div class="card__s2-body">
              <div class="card__s2-title">채용공고</div>
              <div class="card__s2-content">
                삼표는 열정적이고 도전정신을 갖춘 인재를 기다리고 있습니다.
              </div>
            </div>
            <div class="card__s2-bg"><img src="https://picsum.photos/500?ramdom=2"></div>
          </div>
        </li>
        <li data-scroll-animation-item='4' class="w-1/3">
          <div class="card__s2">
            <div class="card__s2-header">
              <a href="#" class="arrow">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
              </a>
            </div>
            <div class="card__s2-body">
              <div class="card__s2-title">채용 FAQ</div>
              <div class="card__s2-content">
                채용에 관한 모든 궁금한 이야기들을 찾아보세요.
              </div>
            </div>
            <div class="card__s2-bg"><img src="https://picsum.photos/500?ramdom=3"></div>
          </div>
        </li>
      </ul>
      <div class="home__s4-content text-white">
        <div class="home__s4-title">인재채용</div>
        <div class="home__s4-description">
          변화를 주도하며 창의적인 사고를 가진 삼표인과 함께<br/>
          더 큰 미래를 향해 성장해나갑니다.
        </div>
      </div>
    </div>
  </div>
  <div class="section home__s5">
    <div class="newsroom__newslater">
      <div class="container mx-auto xl:max-w-screen-xl">
        @include('partials.newsletter')
      </div>
    </div>
    <div class="container xl:max-w-screen-xl mx-auto mt-14">
      <div class="-mx-2 flex">
        <div class="w-1/2 px-2">
          <a href="#">
            <div class="card__s3">
              <div class="card__s3-body">
                <div class="card__s3-title">사업장 정보</div>
                <div class="card__s3-content">삼표삼표그룹 계열사들의 사업장 정보를 조회하실 수 있습니다.</div>
              </div>
              <div class="card__s3-bg"><img src="https://picsum.photos/640?ramdom=1"></div>
            </div>
          </a>
        </div>
        <div class="w-1/2 px-2">
          <a href="#">
            <div class="card__s3">
              <div class="card__s3-body">
                <div class="card__s3-title">SMART 삼표</div>
                <div class="card__s3-content">자체시험성적표/제품 주문 등 다양한 자료와 정보를 제공합니다.</div>
              </div>
              <div class="card__s3-bg"><img src="https://picsum.photos/640?ramdom=2"></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection