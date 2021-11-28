<main class="page__layout">
<div class="container xl:max-w-screen-xl mx-auto">
  <section class="mb-[70px] sm:mb-32">
    <div class="page__level-title mb-[30px] sm:mb-11">
      삼표기술연구소는 업계 최초의 건설기초자재 전문 기술연구소입니다
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-[30px] sm:gap-y-16">
      <div class="prose">
        <p>
          연구개발 전문부서로 시작해 2004년 경기도 광주에 독립건물로 자리를 옮겼으며, 2017년 4월 별동을 신축하여 총 2개 연구동을 운영하고 있습니다. 수십여명의 각 분야 석박사급의 우수한 전문연구원들이 4차 산업혁명 시대 트렌드에 맞춘 건설기초자재 및 친환경적인 기술개발에 앞장서고 있습니다. 
        </p>
      </div>
      <div class="prose">
        <p>
          특히 국내 대기업 및 대학연구소등 공동연구 및 수탁연구를 시행함으로써 제품이 실제 현장에서 적용 가능하도록 많은 노력을 기하고 있으며, 건설 기초자재 기술력 제고 및 신제품 개발에 큰 역할을 해왔습니다.<br/>
          또한 끊임없는 연구를 통하여 국내외 학회 논문 발표회를  참가 하여 왔으며, 선진기술습득 및 기술동향을 파악하는 등 능동적으로 국내외 건설기초자재 기술개발을 선도하고 있습니다.
        </p>
      </div>
      <div class="coverbox-label">
        @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-0'])
        <span class="label text-white">
          연구소 전경
        </span>
      </div>
      <div class="coverbox-label">
        @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-1'])
        <span class="label text-white tracking-tighter">
          UHPC(SUH 120WF)를 활용한 비정형 파고라 및 대형 화분<br/>
          (UHPC 120㎫, 비정형 거푸집 : ABS 3D 프린터 출력)
        </span>
      </div>
    </div>
  </section>
  <section class="mb-[70px] sm:mb-32">
    <div class="page__level-title mb-[30px] sm:mb-11">
      주요 연구성과
    </div>
    <div class="prose">
      <ul>
        <li>블루콘 시리즈 개발</li>
        <li>산업재산권(특허등록_이산화티탄-메타카올린계 백색 안료를 포함하는 백색 칼라콘크리트 조성물 外 88건)</li>
        <li>공동연구 및 수탁연구과제 (BLUECON-노출, 칼라콘크리트 개발 外 162건)</li>
        <li>국내외 논문발표(친환경 저탄소 콘크리트 현장적용_콘크리트학회 外 280여건)</li>
      </ul>
    </div>
  </section>
  <section class="mb-[70px] sm:mb-32">
    <div class="coverbox-full-fixedHeight left m_sm:py-[30px] sm:pt-24 mb-20" style="--h: 658px">
      <div class="page__level-title mb-[30px] sm:mb-11">
        연구분야
      </div>
      <h3 class="text-2xl font-black mb-[30px] sm:mb-12">
        <span class="underline power">
          콘크리트 분야
        </span>
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-10">
        <div class="prose">
          <p>
            콘크리트의 가장 근본적인 성능에 대해서 연구를 진행하고 있습니다. 콘크리트의 조기강도 발현, 고유동성, 건조수축 저감, 초고강도 등에 대해서 지속적으로 연구를 통하여 제품화하고 있습니다. 콘크리트는 변화가 없다 라는 편견을 깨고 새로운 제품으로 국내 레미콘 품질을 한단계 더 진보시키기 위해서 노력하고 있습니다.<br/>
            건축, 토목, 화학, 고분자 분야를 전공한 연구진은 한 해 평균 10여개의 연구과제를 수행하며, 기초적 연구, 제품 개발, 현장 적용까지 두루 수행합니다. 연구 분야는 레미콘과 PC공장, PST공장에서 사용되는 특수 콘크리트입니다. 
          </p>
        </div>
        <div class="prose">
          <p>
            상용화 측면에서 기술 수준은 경쟁사를 많이 앞서고 있습니다. 특히 특수콘크리트 제품의 경우(조강, 수축, 유동성) 우리는 2년전에 상용화에 성공하여 현재 판매중이지만 경쟁사는 아직 연구 단계에 머무르고 있습니다. 한해 평균 특허 5~10건, 논문(학술발표)은 10여편을 발표하고 있습니다.
          </p>
        </div>
        <div class="sm:col-span-2">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-2'])
        </div>
      </div>
    </div>
    <div class="mb-[30px] sm:mb-20">
      <div class="text-2xl mb-[30px] sm:mb-12">
        <span class="pointUnderLine">
          블루콘 시리즈
        </span>
      </div>
      <div id="readyMix" class="overflow-hidden">
        <div class="swiper-wrapper">
          @foreach (['바닥 콘크리트', '내한 콘크리트', '조강 콘크리트', '자기충전 콘크리트', '20mm 콘크리트'] as $index => $item)
            <div class="swiper-slide">
              @include('partials.card__s4', ['index' => $index])
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="mb-[30px] sm:mb-20">
      <div class="text-2xl mb-8">
        <span class="pointUnderLine">
          UHPC(Ultra High Performance Concrete)
        </span>
      </div>
      <div class="prose">
        <p>
          초고강도와 고인성의 특성을 갖고 있어, 콘크리트의 특유의 질감을 살리면서 더 얇고 더 작은 형태로 자유로운 형태의 디자인을 구현할 수 있는 기술입니다. <br/>
          특히 3D 프린터 기술을 접목하여 다양한 Texture, Pattern 표현이 가능하여 혁신적인 조형물, 가구, 외장재의 제작이 가능합니다.  
        </p>
      </div>
    </div>
    <div class="mb-[60px] sm:mb-28">
      <div class="text-[20px] mb-8 font-bold">
        특히, 삼표는 이 분야에서 특허를 다수 보유하고 있습니다.
      </div>
      <div class="prose">
        <ul>
          <li>3D 로봇 조형기술을 활용한 비정형 콘크리트 조형물의 제조방법(10-2161279호)</li>
          <li>3차원 프린팅용 분체 조성물, 바인더 조성물 및 이를 이용한 3차원 프린팅 장치(10-2020-0180557호) 출원 중</li>
          <li>디자인 특허 2건 등록 30-1117222호外</li>
        </ul>
      </div>
    </div>
    <div class="mb-[60px] sm:mb-28">
      <h3 class="text-2xl font-black mb-[30px] sm:mb-12">
        <span class="underline power">
          분체 분야
        </span>
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-[30px] sm:gap-y-16">
        <div class="prose">
          <p>
            분체 연구조직은 시멘트, 고로슬래그 미분말 및 플라이애시와 같은 콘크리트용 결합재 관련 제품을 개발하고, 지속적인 성능향상을 위한 업무를 수행하고 있습니다.<br/>
            또한, ESG 경영의 일환으로 환경부하 저감을 위한 자원 재활용과, 제철소 및 열병합 발전소의 부산물의 활용확대 연구를 진행하고 있습니다. 수화열 저감, 지반개량 등 건설 공사에 적용되는 다양한 공법에 적용할 수 있는 특수 제품들을 개발하였으며 고객의 필요에 따른 맞춤형 제품 개발을 수행합니다.
          </p>
        </div>
        <div class="prose">
          <p>
            분체 연구조직에서는 콘크리트 및 몰탈에서 활용이 가능한 신규 소재발굴과 더불어 기존 산업 부산물 중 불용자원의 재활용 방안 수립과 관련한 연구를 수행하고 있습니다. 저발열 혼합시멘트 납품과 관련하여 매스 콘크리트 수화열 해석을 통한 균열안정성 평가 기술지원을 수행하며, 미지 시료를 분석하고 활용 분야를 발굴하여 새로운 건설기초소재 사업에 기여합니다. 자원재활용과 환경보호를 위한 제품개발에 집중하고 있습니다.
          </p>
        </div>
        <div class="sm:col-span-2">
          <div class="grid grid-cols-1 sm:grid-cols-3">
            <div class="coverbox-label sm:mb-12">
              @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-3'])
              <span class="label text-white">
                보통 포틀랜드 시멘트
              </span>
            </div>
            <div class="coverbox-label sm:mb-12">
              @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-4'])
              <span class="label text-white">
                고로슬래그 미분말
              </span>
            </div>
            <div class="coverbox-label sm:mb-12">
              @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-5'])
              <span class="label text-white">
                플라이애시
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-[60px] sm:mb-28">
      <h3 class="text-2xl font-black underline power mb-12">
        <span class="underline power">
          몰탈 분야
        </span>
      </h3>
      <div class="mb-[30px] sm:mb-16">
        <div class="prose">
          <p>
            몰탈에 대한 기초적인 연구부터 일반적으로 사용되는 제품(미장, 조적)과 기능성 제품(타일용, 그라우트, 보수재)개발 및 고객 니즈를 반영한 제품을 개발하기 위해 노력하고 있습니다. 
            최근에는 건설소재의 독성 및 환경규제 등에 대응하기 위한 친환경 소재 개발 및 다양한 건설분야에서 특수 용도로 사용되는 맞춘 고유동, 고강도, 저수축과 같은 고성능 몰탈 개발에 매진하고 있습니다.
          </p>
        </div>
      </div>
      <div class="coverbox-label sm:mb-16">
        @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-6'])
        <span class="label text-white nonFixed">
          물리 실험실
        </span>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2">
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-7'])
          <span class="label text-white nonFixed">
            실험 준비실
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-8'])
          <span class="label text-white nonFixed">
            화학 분석실
          </span>
        </div>
      </div>
    </div>
  </section>
</div>
</main>