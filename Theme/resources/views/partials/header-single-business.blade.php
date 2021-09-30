<div class="sm:overflow-hidden header-archive-root2">
  <div class="sm:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto max:sm:px-0">
        <div class="header-archive-imgRow" @if(!empty($acf['outlink'])) style="margin-bottom: 75px" @endif>
          @if (!empty($thumbnail))
              {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content max:sm:px-8 max:sm:w-full @if(empty($acf['outlink'])) top-1/2 @endif">
          <h1 class="header-archive-title text-px-36 sm:text-px-70 mb-px-5 sm:mb-px-18">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
        @if(!empty($acf['outlink']))
          <div class="header-archive-nav" style="transform: translateY(50%); background-color: transparent">
            <ul>
              <li class="items-block-item-2">
                <a class="text-white" href="{!! $acf['outlink'] !!}">홈페이지 바로가기</a>
              </li>
            </ul>
          </div>
        @endif
      </div>
    </header>
  </div>
</div>
<nav class="items-fixed hidden sm:block">
  <ul class="items-fixed-wrap" x-data="{
    selected: {!!$selected !!}
  }">
    @foreach ($fixedMenu as $item)
      @if ($item->term_taxonomy_id)
        <li class="items-fixed-item">
          <a href="javascript:;" 
            @click="selected !== {!! $item->term_taxonomy_id !!} ? selected = {!! $item->term_taxonomy_id !!} : selected = null"
            @if ($item->term_taxonomy_id === $selected) class="current" @endif
          >
            {{ $item->name }}
          </a>
          @if (count($item->children) > 0)
              <ul class="items-fixed-child" x-show="selected === {!! $item->term_taxonomy_id !!} || @if ($item->term_taxonomy_id === $selected) true @else false @endif">
                @foreach ($item->children as $child)
                  <li class="items-fixed-item">
                    <a href="{{ $child->permalink }}" @if ($child->ID === get_the_ID()) class="current" @endif>{{ $child->post_title }}</a>
                  </li>
                @endforeach
              </ul>
          @endif
        </li>
      @else
        <li class="items-fixed-item">
          <a href="{!! $item->permalink !!}" @if ($item->ID === get_the_ID()) class="current" @endif>{!! $item->post_title !!}</a>
        </li>
      @endif
    @endforeach
  </ul>
</nav>