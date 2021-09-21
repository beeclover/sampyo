<main class="sampyoGroup__page business__page pb-0">
<div class="container lg:max-w-screen-lg mx-auto">
  <div class="business__page-title mb-16 pb-1.5">
    삼표는 삶을 영위하는 공간 창조에 필요한 <br/>
    기본적인 재료를 공급합니다.
  </div>
  <div class="flex -mx-6 mb-24">
    <div class="w-1/2 px-6">
      <p class="mb-10">
        시멘트, 분체, 골재, 몰탈 등 건설 소재를 모아 레미콘과 프리캐스트(Precast) 콘크리트 및 콘크리트 파일(Pile)을 만듭니다.<br/>
        사업의 근간으로 사회 인프라 건설의 기초를 만듭니다.   
      </p>
      <p>
        이러한 건설 소재를 <b>철도와 선박, 벌크 트레일러, 덤프와 같은 이동수단</b>과 물류 서비스를 통해 고객이 원하는 현장과 공장에 공급합니다.<br/>
        삼표가 철도와 물류 사업을 영위하는 배경입니다.
      </p>
    </div>
    <div class="w-1/2 px-6">
      <div class="prose">
        <p class="mb-10">
          마침내 수명을 다한 공간의 구성물은 폐기하지 않고 재활용합니다. 자원의 가치를 계속 창출하고 지속 가능한 세상을 열어갑니다.
          <b>철스크랩을 비롯해 가치를 만들어 내는 모든 순환 자원의 관리와 운영 사업을 확대하는 이유입니다.</b>
        </p>
        <p>
          <b>
            삼표는 건설 소재 및 순환 자원 관련 생산, 제조, 물류, 유지보수 등 고객에게 최상의 제품과 차별화된 서비스를 제공하는<br/>
            국내 유일의 건설 기초 소재와 환경 산업의 종합 솔루션 공급자입니다.
          </b>
        </p>
      </div>
    </div>
  </div>
  <div class="mb-36 border-t border-dugong"></div>
  <h2 class="text-point text-2xl text-center mb-20">
    자원의 순환을 통해 새로운 가치를 계속 창출함으로써 지속 가능한 세상의 실현을 앞당깁니다.
  </h2>
  <img
    src="@php echo get_theme_file_uri('resources/images/sampyo-group-business-1.jpg') @endphp"
    alt=""
    class="mx-auto"
  >
  <div class="mb-36"></div>
  <div class="coverbox-full-fixedHeight bottom left" style="--h: 504px">
    <div class="border-t border-orochimaru grid grid-cols-5 pt-20 pb-52 text-xl">
      @foreach ($businessTable as $post)
        <div class="flex justify-center items-center h-72 border-b border-orochimaru">
          <span class="font-black text-2xl underline power">
            {!!  $post->post_title !!}
          </span>
          @isset($post->name)
            <span class="font-black text-2xl underline power">
              {!!  $post->name !!}
            </span>
          @endisset
        </div>
        @isset($post->children)
          @foreach ($post->children as $c)
            <div class="flex justify-center items-center h-72">
              <a href="{!! $c->permalink !!}" class="card__s4 gap-3">
                <div class="card__s4-thumbnail"><img src="{!! $c->miniThumbnail !!}"></div>
                <div class="card__s4-body">
                  <div class="card__s4-title font-bold">{!! $c->post_title !!}</div>
                </div>
              </a>
            </div>
          @endforeach
          @for ($i = 0; $i < 4 - count($post->children); $i++)
              <div class="flex justify-center items-center h-72"></div>
          @endfor
        @endisset
      @endforeach
    </div>
  </div>
</div>
</main>