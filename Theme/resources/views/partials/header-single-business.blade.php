<div class="overflow-hidden">
  <header class="header-archive">
    <div class="container lg:max-w-screen-lg mx-auto">
      <div class="header-archive-imgRow" style="margin-bottom: 75px">
        @if (!empty($thumbnail))
            <img src="{!! $thumbnail !!}" alt="" class="header-archive-img">
        @else
            <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
        @endif
      </div>
      <div class="header-archive-content">
        <h1 class="header-archive-title">{!! $title !!}</h1>
        <span class="header-archive-description">{!! $excerpt !!}</span>
      </div>
      <div class="header-archive-nav" style="transform: translateY(50%); background-color: transparent">
        <ul>
          <li class="items-block-item-2">
            <a href="{!! $outLink !!}" class="disabled:opacity-50" @if(empty($outLink)) disabled @endif>홈페이지 바로가기</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
</div>
<nav class="items-fixed">
  <ul class="items-fixed-wrap">
    @foreach ($fixedMenu as $item)
      <li class="items-fixed-item">
        <div @if ($item->ID === wp_get_post_parent_id(get_the_ID())) class="current" @endif>{{ $item->post_title }}</div>
        @if (count($item->children) > 0)
            <ul class="items-fixed-child">
              @foreach ($item->children as $child)
                <li class="items-fixed-item">
                  <a href="{{ $child->permalink }}" @if ($child->ID === get_the_ID()) class="current" @endif>{{ $child->post_title }}</a>
                </li>
              @endforeach
            </ul>
        @endif
      </li>
    @endforeach
  </ul>
</nav>