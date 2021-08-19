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
        @php($cat = $business[0])
        @include('partials.card-flip')
      </div>
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-2">
        @php($cat = $business[1])
        @include('partials.card-flip')
        @php($cat = $business[2])
        @include('partials.card-flip')
      </div>
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-3">
        @php($cat = $business[3])
        @include('partials.card-flip')
        @php($cat = $business[4])
        @include('partials.card-flip')
      </div>
    </div>
  </div>
</div>
<div class="section home__s234">
  <div class="section home__s2">
    <div id="card-content-swiper-bg" class="card-content-swiper-bg">
      <div class="swiper-wrapper">
        @for ($i = 0; $i < 4; $i++)
          <div class="swiper-slide">
            <img class="card-content-thumbnail" src="https://picsum.photos/1920?random={{$i}}" alt="">
          </div>
        @endfor
      </div>
    </div>
    <div class="container mx-auto">
      <div class="flex py-32">
        <div class="w-2/3 text-white">
          <div class="card-content">
            <div id="card-content-swiper">
              <div class="swiper-wrapper">
                @for ($i = 0; $i < 4; $i++)
                  <div class="swiper-slide">
                    <div class="card-content-body"> 
                      <div class="card-content-title">
                        삼표그룹, 해양·항만 분야 특수시멘트 개발 기술제휴{{$i}}
                      </div>
                      <div class="card-content-content prose">
                        <p> 
                          건설기초소재 선두기업 삼표그룹(회장 정도원)이 소파블록에 특화된 조강 시멘트 개발에 나선다. 소파블록은 파도 피해를 줄이기 위해 해안이나 방파제에 설치되는 블록이다.
                        </p>
                        <p> 
                          삼표그룹은 21일 소파블록 공종 특화업체 미래오션테크와 해양·항만 분야 조강형 특수시멘트 기술제휴를 맺었다. 삼표그룹과 미래오션테크는 특수시멘트를 활용한 해양 소파블록을 개발해 공동 특허출원을 할 계획이다.
                        </p>
                      </div>
                      <div class="card-content-more"> 
                        <a href="#">더보기</a>
                      </div>
                    </div>
                  </div>
                @endfor
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
        <div class="w-1/3 relative">
          <div class="box-content py-16 px-20">
            <div class="box-content-inner">
              <ul class="flex tab-wrap">
                <li class="tab-item">블로그</li>
                <li class="tab-item">미디어</li>
                <li class="tab-item">뉴스</li>
              </ul>
              <ul>
                @for ($i = 0; $i < 4; $i++)
                  <li class="li__s1">
                    <ul class="li__s1-cat">
                      <li class="li__s1-cat-item">삼표 스토리</li>
                    </ul>
                    <div class="li__s1-body">
                      <div class="li__s1-content">
                        삼표그룹, 해양·항만 분야 
                        특수시멘트 개발 기술제휴
                      </div>
                      <div class="li__s1-etc"> 
                        <div class="li__s1-btn">
                            <svg class="svg-icon" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M1.729,9.212h14.656l-4.184-4.184c-0.307-0.306-0.307-0.801,0-1.107c0.305-0.306,0.801-0.306,1.106,0
                              l5.481,5.482c0.018,0.014,0.037,0.019,0.053,0.034c0.181,0.181,0.242,0.425,0.209,0.66c-0.004,0.038-0.012,0.071-0.021,0.109
                              c-0.028,0.098-0.075,0.188-0.143,0.271c-0.021,0.026-0.021,0.061-0.045,0.085c-0.015,0.016-0.034,0.02-0.051,0.033l-5.483,5.483
                              c-0.306,0.307-0.802,0.307-1.106,0c-0.307-0.305-0.307-0.801,0-1.105l4.184-4.185H1.729c-0.436,0-0.788-0.353-0.788-0.788
                              S1.293,9.212,1.729,9.212z"></path>
                            </svg>
                        </div>
                      </div>
                    </div>
                  </li>
                @endfor
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection