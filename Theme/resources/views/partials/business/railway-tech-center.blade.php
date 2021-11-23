<main class="page__layout">
<div class="container xl:max-w-screen-xl mx-auto">
  <section class="mb-70px sm:mb-32">
    <div class="page__level-title mb-10">
      종합철도엔지니어링의 전문가들이 새로운 미래를 만들어갑니다
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-20px mb-30px sm:mb-16 sm:pb-1.5">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-0'])
      <div class="prose">
        <p>
          철도기술연구소는 2001년 국내 철도산업발전을 위해 설립되었으며, 궤도분야 전문가로 구성된 연구원들이 철도의 안정성 및 성능 향상을 위해 다양한 연구활동을 수행하고 있습니다.<br/>
          세계 네번째 고속철도 운영국에 걸맞게 고속철도용 궤도용품 개발을 진행하여 고속분기기 생산기술 국산화에 성공하였으며, 한국 철도기술을 선진국 수준으로 끌어 올리기 위해 노력하고 있습니다.
        </p>
        <p>
          주요 연구분야는 고속철도 및 국철용 분기기와 신호제품·체결장치·특수레일 등 철도 궤도의 핵심 부품들이며, 이를 위해 2D, 3D설계, FEM해석, 동적해석(Dynamic Analysis), 실내성능실험, 현장부설 시험과 계측을 수행하고 있습니다.<br/>
          당사만이 보유하고 있는 오랜 기술력과 노하우를 활용해 한국철도기술의 발전을 위해 활발한 연구활동을 수행하고 있습니다.
        </p>
      </div>
    </div>
  </section>
  <section class="mb-70px sm:mb-32">
    <div class="coverbox-full-fixedHeight left mb-60px sm:mb-28 max:sm:py-30px sm:pt-24" style="--h: 550px">
      <div class="page__level-title mb-12">
        연구분야
      </div>
      <h3 class="text-2xl font-black underline power mb-8">분기기 부문</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 mb-30px gap-y-20px sm:mb-16 sm:pb-1.5">
        <div class="prose">
          <p>
            분기기(Turnout, Switch)는 선로전환장치라고도 하며 주행중인 철도차량을 다른 선로로 전환시키는 장치입니다. 궤도에서 가장 중요한 역할을 하는 장치이며, 차량의 안전과 직결되므로 고정밀 설계 제작과 노하우가 가장 많이 필요한 영역입니다. 
          </p>
        </div>
        <div class="prose">
          <p>
            철도 기술연구소는 철도 차량의 안전한 고속 주행을 위한 궤도 인프라 구축에 모든 개발력을 집중하고 있습니다.
          </p>
        </div>
      </div>
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-1'])
    </div>
    <div class="mb-60px sm:mb-28">
      <h3 class="text-2xl font-black underline power mb-8">궤도용품 부문</h3>
      <div class="prose mb-30px sm:mb-16 sm:pb-1.5">
        <p>
          철도용품을 제작하는 전문기업으로서 고객의 요구에 맞는 다양한 철도용품 개발과 창의적이고 획기적인 제품 개발을 위해 해외선진 기업, 국내 산학연과 연구 교류 체계를 구축하고 있습니다.  또한 최신 동역학 구조해석 소프트웨어 및 시험실을 갖추고 글로벌 시장에서 기술경쟁력을 확보하기 위해 핵심기술 개발에 매진하고 있습니다.
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-30px sm:gap-y-12">
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-2'])
          <span class="label text-white">
            접착절연레일
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-3'])
          <span class="label text-white">
            텅레일 마모방지용 가드레일
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-4'])
          <span class="label text-white">
            폭발경화 망간크로싱
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-5'])
          <span class="label text-white">
            광폭침목
          </span>
        </div>
      </div>
    </div>
    <div class="mb-60px sm:mb-28">
      <h3 class="text-2xl font-black underline power mb-8">PSTS 부문</h3>
      <div class="prose mb-30px sm:mb-70px">
        PSTS란 슬래브 궤도 시스템으로 공장에서 사전제작 된 슬래브 패널을 현장으로 이동 후 레일, 체결구 등과 조립하여 바로 사용할 수 있는 궤도 시스템으로써, 현장타설식 궤도 시스템 대비 빠른 시공속도, 균일한 품질 확보 및 유지보수 절감 효과, 정밀시공이 가능한 우수한 궤도 시스템입니다.
      </div>
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-6'])
    </div>
  </section>
  <section class="mb-70px sm:mb-32">
    <div class="coverbox-full-fixedHeight right mb-60px sm:mb-28 max:sm:py-30px" style="--h:628px">
      <div class="page__level-title mb-12">
        연구분야
      </div>
      <h3 class="text-2xl font-black underline power mb-8">
        2D, 3D 설계 및 3D프린팅 기술 
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-20px mb-30px sm:mb-10 sm:pb-1.5">
        <div class="prose">
          <ul>
            <li>국내ᆞ외 고속철도 및 일반 철도용 분기기 설계</li>
            <li>레일 신축이음매장치 설계</li>
            <li>교량용 레일신축장치 설계</li>
            <li>망간크로싱, 크래들 설계</li>
            <li>분기침목 설계</li>
            <li>다양한 레일체결시스템 설계</li>
          </ul>
        </div>
        <div class="prose">
          <ul>
            <li>제품 개량 설계</li>
            <li>성능검증, 형식승인, NET인증, 품질경영시스템 인증(ISO 9001)</li>
            <li>KRS 등 각종 규격 및 시방서 관리</li>
            <li>궤도용품 및 신호전장품 설계</li>
            <li>해외 수출용 분기기 설계</li>
            <li>3D 모델링 및 3D프린터를 활용한 신제품 및 개량품 인터페이스 확인</li>
          </ul>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3">
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-7'])
          <span class="label text-white">
            2D 설계
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-8'])
          <span class="label text-white">
            3D 설계
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-9'])
          <span class="label text-white tracking-tighter">
            3D 프린팅 기술을 활용한 인터페이스 분석
          </span>
        </div>
      </div>
    </div>
    <div class="mb-60px sm:mb-28">
      <h3 class="text-2xl font-black underline power mb-8">구조해석</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-20px mb-30px sm:mb-10 sm:pb-1.5">
        <div class="prose">
          <ul>
            <li>고속철도 및 일반철도용 궤도용품의 정적ᆞ동적 구조해석을 통한 구조 안정성 평가</li>
            <li>분기기 3D 모델링 및 정적 구조해석 수행</li>
          </ul>
        </div>
        <div class="prose">
          <ul>
            <li>3D S/W를 이용한 정교한 모델링</li>
            <li>구조해석 S/W를 통한 정적해석 및 동적해석</li>
            <li>분기침목, 궤도용품 등 구조 안전성 검토 지원 및 구조계산</li>
          </ul>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3">
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-10'])
          <span class="label text-white">
            동적해석
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-11'])
          <span class="label text-white">
            분기기 해석
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-12'])
          <span class="label text-white">
            궤도용품 조립체(레일체결장치) 해석
          </span>
        </div>
      </div>
    </div>
    <div class="mb-60px sm:mb-28">
      <h3 class="text-2xl font-black underline power mb-8">
        실내성능검증 및 현장계측
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-20px mb-30px sm:mb-10 sm:pb-1.5">
        <div class="prose">
          <ul>
            <li>KRS TR 0014 레일체결장치 시험(반복하중시험, 단품 및 조립체 정ᆞ동적 수직강성시험 외)</li>
            <li>각종 국내ᆞ외 규격 준용 시험 수행(KRS, KS, EN 외) </li>
          </ul>
        </div>
        <div class="prose">
          <ul>
            <li>현장 계측 시험 및 모니터링(현차주행계측 시스템)</li>
            <li>궤도검측기(Track Master), 레일마모측정, 궤도선형측정 외</li>
            <li>제품 내구성 평가 시험(파괴 및 비파괴 시험)</li>
          </ul>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3">
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-13'])
          <span class="label text-white nonFixed">
            반복하중시험(조립체)
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-14'])
          <span class="label text-white">
            탄성패드 정ᆞ동적 수직강성
          </span>
        </div>
        <div class="coverbox-label">
          @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-15'])
          <span class="label text-white">
            현장 계측 시험 (현차주행계측시스템)
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="mb-60px sm:mb-28">
    <div class="page__level-title mb-10">
      신기술 및 인증
    </div>
    <div class="py-30px sm:py-28 px-30px sm:px-16 coverbox-bg relative mb-30px sm:mb-16" style="--bg-image: url({{ get_theme_file_uri('resources/images/business-'. get_post()->post_name .'-16@3x.jpg') }})">
      <div class="text-white text-24px sm:text-4xl relative z-10 font-black">
        국내 최초 ‘고속철도 분기기’ 개발 및<br class="hidden sm:block" /> 
        세계일류상품 선정
      </div>
    </div>
    <div class="mb-10 text-xl">
      콘크리트궤도용 열차선로 전환장치(분기기)에 적용되는 2중 탄성체결장치의 강성을 탄성패드의 접촉면적으로 조절하는 기술 (2010)
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-30px mb-30px sm:mb-14">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-17'])
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-18'])
    </div>
    <div class="mb-10 text-xl">
      부시형 조절 톱니 와셔가 구비된 분기기 레일체결장치 시공 기술 (2019)
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-30px mb-30px sm:mb-14">
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-19'])
      @include('partials.img', ['ex' => 'jpg', 'name' => 'business-'. get_post()->post_name .'-20'])
    </div>
  </section>
</div>
</main>