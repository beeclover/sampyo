<main class="sampyoGroup__page business__page pb-0">
<div class="container lg:max-w-screen-lg mx-auto">
  <div class="flex -mx-6 mb-24">
    <div class="w-1/2 px-6">
      <p>
        시멘트, 골재, 분체, 몰탈 등 건설 소재가 모여 레미콘이나 프리캐스트(Precast) 콘크리트 및 콘크리트 파일(Pile)을 만들어 공급합니다. 사업의 근간으로서 사회 인프라 건설의 기초가 됩니다.<br/>
        이러한 건설 소재는 철도 인프라와 물류 서비스를 통해 공간과 공간을 연결시킵니다. 삼표가 철도와 물류 사업을 영위하는 배경입니다. 
      </p>
    </div>
    <div class="w-1/2 px-6">
      <div class="prose">
        <p class="mb-8">
          마침내 수명을 다한 공간의 구성물은 단순 폐기하지 않고 재활용함으로써 자원의 가치를 계속 창출함으로써 지속 가능한 세상을 열어갑니다. 철스크랩과 폐플라스틱을 비롯 가치를 만들어내는 모든 폐자원의 관리와 운영사업을 확대하는 이유입니다.
          삼표는 건설 재료의 생산, 제조, 유지보수 및 재활용에 이르는 제품의 모든 생애주기에 걸쳐 고객에게 최상의 제품과 서비스를 제공하는 국내 유일의 건설 재료 종합 솔루션 공급자입니다.  
        </p>
      </div>
    </div>
  </div>
  <div class="border-t border-b text-center py-14 border-dugong">
    <h2 class="font-bold text-3xl text-funnelCloud">
      삼표는 건설 재료의 생산, 제조, 유지보수 및 재활용에 이르는 제품의 모든 생애주기에 걸쳐 고객에게 최상의 제품과 서비스를 제공하는 국내 유일의 건설 재료 종합 솔루션 공급자입니다.  
    </h2>
  </div>
  <div class="mb-36"></div>
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