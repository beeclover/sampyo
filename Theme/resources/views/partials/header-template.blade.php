<div class="labtop:overflow-x-hidden header-archive-root2">
  <div class="labtop:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto m_labtop:px-0">
        <div class="header-archive-imgRow">
          @if (!empty($thumbnail))
            {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content m_labtop:px-8 m_labtop:w-full">
          <h1 class="header-archive-title text-[36px] sm:text-[70px] @if ($excerpt == '') sm:mb-0 leading-tight @else mb-[5px] sm:mb-[18px] @endif">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
      </div>
    </header>
  </div>
</div>