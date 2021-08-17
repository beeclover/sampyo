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
        @include('components.card-flip')
      </div>
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-2">
        @php($cat = $business[1])
        @include('components.card-flip')
        @php($cat = $business[2])
        @include('components.card-flip')
      </div>
      <div class="w-1/3 flex flex-col gap-9 home__s1-imgCol-3">
        @php($cat = $business[3])
        @include('components.card-flip')
        @php($cat = $business[4])
        @include('components.card-flip')
      </div>
    </div>
  </div>
</div>
@endsection