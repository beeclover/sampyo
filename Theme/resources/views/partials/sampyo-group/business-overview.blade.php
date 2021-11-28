<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://mattstow.com/experiment/responsive-image-maps/jquery.rwdImageMaps.min.js"></script>
<main class="sampyoGroup__page page__layout">
<div class="container xl:max-w-screen-xl mx-auto">
  <div class="page__level-title mb-[30px] sm:mb-16 pb-1.5">
    삼표는 삶을 영위하는 공간 창조에 필요한 <br class="hidden sm:block" />
    기본적인 재료를 공급합니다
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 mb-11 sm:mb-24 gap-y-7">
    <div class="prose">
      <p class="mb-10">
        시멘트, 분체, 골재, 몰탈 등 건설 소재를 모아 레미콘과 PC(프리캐스트 콘크리트) 및 PHC파일을 만듭니다.<br/>
        사업의 근간으로 사회 인프라 건설의 기초를 만듭니다.   
      </p>
      <p>
        이러한 건설 소재를 철도와 선박, 벌크 트레일러, 덤프와 같은 이동수단과 물류 서비스를 통해 고객이 원하는 현장과 공장에 공급합니다.<br/>
        삼표가 철도와 물류 사업을 영위하는 배경입니다.
      </p>
    </div>
    <div class="prose">
      <p class="mb-10">
        마침내 수명을 다한 공간의 구성물은 폐기하지 않고 재활용합니다. 자원의 가치를 계속 창출하고 지속 가능한 세상을 열어갑니다.
        철스크랩을 비롯해 가치를 만들어 내는 모든 순환 자원의 관리와 운영 사업을 확대하는 이유입니다.
      </p>
      <p>
        삼표는 건설 소재 및 순환 자원 관련 생산, 제조, 물류, 유지보수 등 고객에게 최상의 제품과 차별화된 서비스를 제공하는<br/>
        국내 유일의 건설 기초 소재와 환경 산업의 종합 솔루션 공급자입니다.
      </p>
    </div>
  </div>
  <div class="mb-11 sm:mb-36 border-t border-dugong"></div>
  <h2 class="text-point text-lg sm:text-2xl text-center mb-[30px] sm:mb-20">
    자원의 순환을 통해 새로운 가치를 계속 창출함으로써 지속 가능한 세상의 실현을 앞당깁니다
  </h2>
  <img
    class="mx-auto hidden sm:block max-w-full"
    src="{{ get_theme_file_uri('resources/images/sampyo-group-business-1.png') }}"
    alt=""
    usemap="#image-map"ㅁ
  >
  <map name="image-map">
    <area alt="시멘트" title="시멘트" href="{!! get_the_permalink(166) !!}" coords="110,297,171,320" shape="rect">
    <area alt="골재" title="골재" href="{!! get_the_permalink(163) !!}" coords="111,324,165,348" shape="0">
    <area alt="분체" title="분체" href="{!! get_the_permalink(165) !!}" coords="112,357,164,379" shape="0">
    <area alt="몰탈" title="몰탈" href="{!! get_the_permalink(164) !!}" coords="117,385,159,413" shape="0">
    <area alt="레미콘" title="레미콘" href="{!! get_the_permalink(176) !!}" coords="360,293,427,318" shape="0">
    <area alt="프리캐스트" title="프리캐스트" href="{!! get_the_permalink(178) !!}" coords="353,326,444,348" shape="0">
    <area alt="파일" title="파일" href="{!! get_the_permalink(340) !!}" coords="369,355,420,381" shape="0">
    <area alt="철도" title="철도" href="{!! get_the_permalink(181) !!}" coords="633,293,676,319" shape="0">
    <area alt="물류" title="물류" href="{!! get_the_permalink(180) !!}" coords="633,325,674,351" shape="0">
    <area alt="환경자원" title="환경자원" href="{!! get_the_permalink(174) !!}" coords="874,291,957,322" shape="0">
  </map>
  @include('partials.img', ['ex' => 'png', 'name' => 'sampyo-group-business-2', 'class' => 'mx-auto block sm:hidden mb-12'])
</div>
</main>
<script>
  $('img[usemap]').rwdImageMaps()
</script>