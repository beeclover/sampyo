<main class="page__layout pb-0">
<div class="container xl:max-w-screen-xl mx-auto">
  <section>
    <div class="page__level-title mb-[30px] sm:mb-11">
      삼표의 특수 콘크리트 <span class="text-point">블루콘(BLUECON)</span>
    </div>
    <div class="prose mb-20">
      <p>
        콘크리트는 건물, 도로, 다리 등 건설에 쓰이는 가장 기본적이자 필수인 재료 중 하나입니다. 하지만 건축의 니즈가 세분화되면서, 용도에 따라 특화된 콘크리트가 사용되기 시작했습니다. 삼표는 지난 2007년 고성능 레미콘 브랜드인 블루콘을 소개하면서, 특수 콘크리트 시장을 선도하고 있습니다. 
      </p>
    </div>
    <div id="readyMix" class="overflow-hidden mb-24">
      <div class="swiper-wrapper">
        @foreach (['바닥 콘크리트', '내한 콘크리트', '조강 콘크리트', '자기충전 콘크리트', '20mm 콘크리트'] as $index => $item)
          <div class="swiper-slide">
            @include('partials.card__s4', ['index' => $index])
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <section class="mb-32" id="speed">
    <div class="coverbox-full nonOverWidth bg right py-24 pl-20" style="--bg-image: url('@php echo get_theme_file_uri('resources/images/business-bluecon-1.jpg') @endphp')">
      <div class="h-5 mb-5">
        @include('partials.img', ['ex' => 'png"', 'name' => 'business-bluecon-1-1', 'class' => 'max-h-full'])
      </div>
      <div class="page__level-title">
        조강 콘크리트 <span class="text-point">블루콘 스피드</span>
      </div>
    </div>
    <div class="mb-16 pt-1.5"></div>
    <div class="flex -mx-6 mb-12">
      <div class="w-1/2 px-6 prose">
        <p>
          블루콘 스피드(BLUECON SPEED)는 콘크리트 구조물 제작 시 콘크리트가 굳어 가는 초기의 강도 즉, 조기 압축강도를 높인 콘크리트입니다. 동절기 공사 기간을 기준으로 일반 콘크리트를 이용했을 때 약 8~9일이 걸리지만 블루콘 스피드는 약 7일로 일반 제품 대비 공사 기간을 더 단축할 수 있습니다. 
        </p>
        <p>
          특히 비교적 빠른 시간 안에 굳기 때문에 거푸집 조기 탈형이 가능하고, 일반 콘크리트에서 2일 이상의 급열 양생 기간이 필요한 반면 블루콘 SPEED는 양생 온도 13도 이상, 양생 시간 18시간을 충족할 경우 목표 강도를 확보할 수 있습니다. 이를 통해 골조 공사기간을 획기적으로 단축시킬 수 있습니다. 
        </p>
      </div>
      <div class="w-1/2 px-6 prose">
        <p>
          또한 갈탄, 열풍기 사용에 따른 중독, 질식 등의 위험요소를 줄일 수 있을 뿐만 아니라 급열양생 기간 단축으로 급열 열풍기 렌탈비, 온도유지에 드는 유류비용, 관리하기 위한 주/야간 노무비 등 골조공사비용과 간접비용등 골조공사비를 총액 기준 일반 콘크리트 대비 3% 절감할 수 있습니다.
        </p>
        <p>
          블루콘 SPEED는 주로 동절기 공사 또는 긴급 공사 등과 같이 빠른 시간 내에 공사를 끝내야 하는 경우 효과적인 제품입니다. 일반적으로 동절기에 주로 사용되지만 춘추절기 및 하절기에도 사용할 수 있습니다. 
        </p>
      </div>
    </div>
    @if ($bluecon['g0'])
      @if ($bluecon['g0']['brochure'])
        <a href="{{ $bluecon['g0']['brochure'] }}" class="inline-flex items-center px-7 py-2.5 border border-gray-600 shadow-sm font-bold bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2" target="_blank">
          브로슈어 다운로드
        </a>
        <div class="pb-[30px] sm:pb-20"></div>
      @endif
      @if ($bluecon['g0']['youtube'])
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="{{ $bluecon['g0']['youtube'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      @endif
    @endif
  </section>
  <section class="mb-32" id="winter">
    <div class="coverbox-full nonOverWidth bg right py-24 pl-20" style="--bg-image: url('@php echo get_theme_file_uri('resources/images/business-bluecon-2.jpg') @endphp')">
      <div class="h-5 mb-5">
        @include('partials.img', ['ex' => 'png"', 'name' => 'business-bluecon-2-1', 'class' => 'max-h-full'])
      </div>
      <div class="page__level-title">
        내한 콘크리트 <span class="text-point">블루콘 윈터</span>
      </div>
    </div>
    <div class="mb-16 pt-1.5"></div>
    <div class="flex -mx-6 mb-12">
      <div class="w-1/2 px-6 prose">
        <p>
          블루콘 윈터(BLUECON WINTER)는 높은 내구성과 품질을 자랑하는 동절기 콘크리트입니다. 일 최저 기온 -5℃까지 별도의 가열 양생 없이 최소한의 보양 조치로 초기 동해를 받지 않고 강도발현을 촉진시킬 수 있습니다. 따라서 높은 층고, 넓은 평면, 특수 구조 등 양생이 어려운 구조물에 유용합니다. 최소한의 보온 양생 작업으로 가열 양생에 필요한 장비 및 설치 기간을 줄여 비용을 절감할 수 있습니다.
        </p>
      </div>
      <div class="w-1/2 px-6 prose">
        <p>
          또한 안전 사고를 예방할 수 있다는 장점도 있습니다. 콘크리트 보온 양생 시 갈탄 연료가 사용되는데, 연소 시 일산화탄소가 발생해 이로 인한 질식사고 위험이 있습니다. 블루콘 윈터는 급열양생 및 보양설비의 간소화로 갈탄 안전사고를 방지할 수 있어 겨울에도 안정적으로 현장에서 사용할 수 있습니다.
        </p>
      </div>
    </div>
    @if ($bluecon['g1'])
      @if ($bluecon['g1']['brochure'])
        <a href="{{ $bluecon['g1']['brochure'] }}" class="inline-flex items-center px-7 py-2.5 border border-gray-600 shadow-sm font-bold bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2" target="_blank">
          브로슈어 다운로드
        </a>
        <div class="pb-[30px] sm:pb-20"></div>
      @endif
      @if ($bluecon['g1']['youtube'])
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="{{ $bluecon['g1']['youtube'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      @endif
    @endif
  </section>
  <section class="mb-32" id="floor">
    <div class="coverbox-full nonOverWidth bg right py-24 pl-20" style="--bg-image: url('@php echo get_theme_file_uri('resources/images/business-bluecon-3.jpg') @endphp')">
      <div class="h-5 mb-5">
        @include('partials.img', ['ex' => 'png"', 'name' => 'business-bluecon-3-1', 'class' => 'max-h-full'])
      </div>
      <div class="page__level-title">
        바닥 콘크리트 <span class="text-point">블루콘 플로어</span>
      </div>
    </div>
    <div class="mb-16 pt-1.5"></div>
    <div class="flex -mx-6 mb-12">
      <div class="w-1/2 px-6 prose">
        <p>
          블루콘 플로어(BLUECON FLOOR)는 콘크리트의 수축 및 블리딩 발생을 억제하여 균열, 모서리 들뜸현상(컬링) 및 레이턴스 발생을 방지할 수 있는 프리미엄 바닥 콘크리트 입니다. 일반 콘크리트와 비교했을 때 91일 경과 기준 수축현상이 50% 감소했으며, 시공 후 6시간 후 기준 블리딩이 80%로 현저하게 감소한 실험 결과를 얻을 수 있었습니다. 또 회전수 200회 기준 마모 저항성이 약 4배, 압축 강도는 14% 증가했습니다.
        </p>
      </div>
      <div class="w-1/2 px-6 prose">
        <p>
          블루콘 플로어는 주로 지하주차장 바닥 무근콘크리트, 물류센터, 상업 시설에 사용되고 있는데요. 뛰어난 내구성으로 수축, 블리딩 및 레이턴스 발생 가능성을 낮추고 마모 저항성을 향상해 유지 보수 비용을 절감할 수 있습니다. 또 와이어매쉬, 섬유보강재를 사용하지 않아도 성능을 발휘해 인건비, 자재비를 절감할 수 있습니다.
        </p>
      </div>
    </div>
    @if ($bluecon['g2'])
      @if ($bluecon['g2']['brochure'])
        <a href="{{ $bluecon['g2']['brochure'] }}" class="inline-flex items-center px-7 py-2.5 border border-gray-600 shadow-sm font-bold bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2" target="_blank">
          브로슈어 다운로드
        </a>
        <div class="pb-[30px] sm:pb-20"></div>
      @endif
      @if ($bluecon['g2']['youtube'])
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="{{ $bluecon['g2']['youtube'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      @endif
    @endif
  </section>
  <section class="mb-32" id="self">
    <div class="coverbox-full nonOverWidth bg right py-24 pl-20" style="--bg-image: url('@php echo get_theme_file_uri('resources/images/business-bluecon-4.jpg') @endphp')">
      <div class="h-5 mb-5">
        @include('partials.img', ['ex' => 'png"', 'name' => 'business-bluecon-4-1', 'class' => 'max-h-full'])
      </div>
      <div class="page__level-title">
        자기충전 콘크리트 <span class="text-point">블루콘 셀프</span>
      </div>
    </div>
    <div class="mb-16 pt-1.5"></div>
    <div class="flex -mx-6 mb-12">
      <div class="w-1/2 px-6 prose">
        <p>
          블루콘 셀프(BLUECON SELF)는 재료분리 저항성 및 자기 충전성으로 타설 작업 환경을 획기적으로 개선한 콘크리트입니다. 높은 유동성능을 가진 제품으로 굳지 않은 상태에서 별도의 다짐 작업 없이 자중으로 철근 보강재 주위와 거푸집 내부를 채울 수 있고, 블리딩 또는 재료분리와 같은 결함이 없습니다. 
        </p>
        <p>
          또 높은 유동성으로 수평 및 수직 부재를 움직이지 않아도 신속하고 간편하게 타설할 수 있으며, 바이브레이터를 사용 하지 않아 소음 감소 및 작업환경 개선됩니다. 탁월한 유동성으로 모든 부재에 밀실하게 충전되어 표면을 고르게 시공할 수 있고, 무다짐으로 인한 인건비 절감 및 콘크리트 타설시간 단축해 높은 경제성을 자랑합니다. 
        </p>
      </div>
      <div class="w-1/2 px-6 prose">
        <p>
          현장 작업 속도를 비교했을 때 타설에서 마감까지 일반 콘크리트는 14분이 걸리지만, 이 제품은 7분이 소요돼 작업 속도를 50% 단축시켜줌을 확인할 수 있습니다. 특히 고층 건물이 많아지고 내진 설계 기준이 강화된 요즘 과밀 철근 구조물이 증가할 수 밖에 없는 현장에서 충전성 향상과 타설 시간 단축에 탁월한 제품입니다. 이처럼 BLUECON SELF는 환경 및 정책 변화에 유연하게 대응할 수 있는 콘크리트입니다. 
        </p>
      </div>
    </div>
    @if ($bluecon['g3'])
      @if ($bluecon['g3']['brochure'])
        <a href="{{ $bluecon['g3']['brochure'] }}" class="inline-flex items-center px-7 py-2.5 border border-gray-600 shadow-sm font-bold bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2" target="_blank">
          브로슈어 다운로드
        </a>
        <div class="pb-[30px] sm:pb-20"></div>
      @endif
      @if ($bluecon['g3']['youtube'])
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="{{ $bluecon['g3']['youtube'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      @endif
    @endif
  </section>
  <section class="mb-32" id="easy">
    <div class="coverbox-full nonOverWidth bg right py-24 pl-20" style="--bg-image: url('@php echo get_theme_file_uri('resources/images/business-bluecon-5.jpg') @endphp')">
      <div class="h-5 mb-5">
        @include('partials.img', ['ex' => 'png"', 'name' => 'business-bluecon-5-1', 'class' => 'max-h-full'])
      </div>
      <div class="page__level-title">
        20mm 콘크리트 <span class="text-point">블루콘 이지</span>
      </div>
    </div>
    <div class="mb-16 pt-1.5"></div>
    <div class="flex -mx-6 mb-12">
      <div class="w-1/2 px-6 prose">
        <p>
          블루콘 이지(BLUECON EASY)는 보통 콘크리트에 고품질의 KS 20㎜ 골재를 사용해 작업성 향상을 기반으로 과밀철근 및 특수구조 현장에 특화된 획기적인 콘크리트입니다. 일반적으로 콘크리트에는 25mm의 굵은 골재가 혼합되는데요, 블루콘 이지는 20mm로 입자가 보다 고운 골재를 사용해 일반 구조물은 물론 협소한 곳이라도 철근 사이에 콘크리트를 더 부드럽게 채울 수 있고, 표면도 고르게 굳는다는 장점이 있습니다.
        </p>
      </div>
      <div class="w-1/2 px-6 prose">
        <p>
          기존 제품보다 타설 시간도 단축할 수 있는데요. 일반 콘크리트 시공 시 23대, 2시간 20분 35초(평균 6분 07초)가 걸리는 상황에서 블루콘 이지는 23대, 2시간 3분 25초(평균 5분 22초)로 타설 시간을 약 12% 감축하는 우수한 성능을 보여줍니다. 또 실험 결과 보통 콘크리트보다 유동성능은 약 25%, 통과성능은 약 43% 향상한 것으로 확인되었습니다.
        </p>
      </div>
    </div>
    @if ($bluecon['g4'])
      @if ($bluecon['g4']['brochure'])
        <a href="{{ $bluecon['g4']['brochure'] }}" class="inline-flex items-center px-7 py-2.5 border border-gray-600 shadow-sm font-bold bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2" target="_blank">
          브로슈어 다운로드
        </a>
        <div class="pb-[30px] sm:pb-20"></div>
      @endif
      @if ($bluecon['g4']['youtube'])
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="{{ $bluecon['g4']['youtube'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      @endif
    @endif
  </section>
  <section>
    <div class="coverbox-full left pt-32 pb-52">
      <div class="flex -mx-6">
        <div class="w-1/2 px-6 prose">
          <p>
            이처럼 삼표에서 우수한 품질의 다양한 콘크리트를 만들 수 있는 원동력은 바로 삼표기술연구소에 콘크리트 개발팀이 있기 때문입니다. 콘크리트개발팀은 콘크리트 가장 근본적인 성능에 대해서 연구하는 곳으로 콘크리트의 조기강도 발현, 고유동성, 건조수축 저감, 초고강도 등에 대해서 10여 년 동안 지속적으로 연구하고 제품화시키고 있습니다.콘크리트는 변화가 없다 라는 편견을 깨고 새로운 제품으로 국내 레미콘 품질을 한 단계 더 진보시키기 위해서 노력하고 있습니다.
          </p>
        </div>
        <div class="w-1/2 px-6 prose">
          <p>
            콘크리트개발팀에서는 건축, 토목, 화학, 고분자 등 여러 분야의 전문가들이 레미콘과 PC공장에서 사용되는 특수 콘크리트를 중심으로 기초적 연구부터 제품 개발, 현장 적용까지 한해 평균 10여 개의 여러 연구 과제를 수행합니다. 이러한 노력으로 뛰어난 기술 수준을 갖춰 한해 평균 특허 5~10건, 논문(학술발표) 10여 편을 발표하고 있습니다. 앞으로도 우수한 기술을 연구, 개발하여 건설 환경 변화에 유연하게 대응하고, 경제성과 효율성을 추구하며 안전하고 튼튼한 건설 발전에 기여하도록 노력하겠습니다.
          </p>
        </div>
      </div>
    </div>
  </section>
</div>
</main>