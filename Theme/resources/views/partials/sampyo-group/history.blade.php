<main class="sampyoGroup__page page__layout pb-0 max:sm:pt-0">
<div class="container xl:max-w-screen-xl mx-auto">
  <div class="coverbox-full left py-10 sm:py-24 mb-[40px] sm:mb-24">
    <div class="page__level-title mb-[30px] sm:mb-8">
      삼표의 지칠줄 모르는 변화와 도전의 노력은 계속됩니다
    </div>
    <p>
      삼표는 지금보다 더 나은 미래를 현실로 만들기 위해 지난 반세기동안 한결같은 마음으로 노력해오고 있습니다.
    </p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-l1-h-left lg:grid-cols-l2-h-left mb-32 pt-[10px] gap-x-[36px] lg:gap-x-[72px] gap-y-[30px]">
    @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-1', 'class' => 'w-full'])
    <div class="historybox">
      <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
        <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
          2020’s
        </span>
      </div>
      <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
        @foreach ($history['2020'] as $item)
          <div class="font-bold text-lg">{!! $item['date'] !!}</div>
          <p class="col-span-2">
            {!! $item['title'] !!}
          </p>
        @endforeach
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-l1-h-right lg:grid-cols-l2-h-right mb-32 pt-[10px] gap-x-[36px] lg:gap-x-[72px] gap-y-[30px]">
    <div class="historybox order-1">
      <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
        <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
          2010’s
        </span>
      </div>
      <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
        @foreach ($history['2010'] as $item)
          <div class="font-bold text-lg">{!! $item['date'] !!}</div>
          <p class="col-span-2">
            {!! $item['title'] !!}
          </p>
        @endforeach
      </div>
    </div>
    @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-2', 'class' => 'w-full order-0 md:order-2'])
  </div>
  <div class="grid grid-cols-1 md:grid-cols-l1-h-left lg:grid-cols-l2-h-left mb-32 pt-[10px] gap-x-[36px] lg:gap-x-[72px] gap-y-[30px]">
    @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-3', 'class' => 'w-full'])
    <div class="historybox">
      <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
        <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
          2000’s
        </span>
      </div>
      <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
        @foreach ($history['2000'] as $item)
          <div class="font-bold text-lg">{!! $item['date'] !!}</div>
          <p class="col-span-2">
            {!! $item['title'] !!}
          </p>
        @endforeach
      </div>
    </div>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-l1-h-right lg:grid-cols-l2-h-right mb-32 pt-[10px] gap-x-[36px] lg:gap-x-[72px] gap-y-[30px]">
    <div class="historybox order-1">
      <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
        <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
          1990’s
        </span>
      </div>
      <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
        @foreach ($history['1990'] as $item)
          <div class="font-bold text-lg">{!! $item['date'] !!}</div>
          <p class="col-span-2">
            {!! $item['title'] !!}
          </p>
        @endforeach
      </div>
    </div>
    @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-4', 'class' => 'w-full order-0 md:order-2'])
  </div>
  <div class="grid grid-cols-1 md:grid-cols-l1-h-left lg:grid-cols-l2-h-left mb-32 pt-[10px] gap-x-[36px] lg:gap-x-[72px] gap-y-[30px]">
    @include('partials.img', ['ex' => 'jpg', 'name' => 'sampyo-group-history-5'])
    <div>
      <div class="historybox mb-[30px] sm:mb-32">
        <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
          <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
            1980’s
          </span>
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1980'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
      <div class="historybox mb-[30px] sm:mb-32">
        <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
          <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
            1970’s
          </span>
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1970'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
      <div class="historybox mb-[30px] sm:mb-32">
        <div class="historybox__title font-bold text-[40px] sm:text-4xl mb-12">
          <span class="pointUnderLine " style="--bs: var(--RGB-atmosphere); --h: 0.4em">
            1960’s
          </span>
        </div>
        <div class="grid grid-cols-3 gap-x-2 sm:gap-x-7 gap-y-4">
          @foreach ($history['1960'] as $item)
            <div class="font-bold text-lg">{!! $item['date'] !!}</div>
            <p class="col-span-2">
              {!! $item['title'] !!}
            </p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</main>