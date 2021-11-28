<div class="labtop:overflow-x-hidden header-archive-root2">
  <div class="labtop:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto m_labtop:px-0 @isset($acf['outlink']) m_sm:mb-[60px] m_labtop:mb-[150px] @endisset">
        <div class="header-archive-imgRow">
          @if (!empty($thumbnail))
              {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content m_labtop:px-8 m_labtop:w-full @if(empty($acf['outlink'])) top-1/2 @endif">
          <div x-data="select({label: '{!! $fixedMenuLabel !!}', selected: {!! $selected !!}})" class="w-full relative mb-[30px] labtop:hidden flex">
            <div class="depth-1 relative flex-1">
              <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none border-r-0"
                @click="toggle()"
                @click.away="close()">
                <span x-text="label"></span>
                <svg width="11.107" height="11.107">
                  <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
                </svg>
              </button>
              <ul x-show="dropdown" x-cloak class="absolute w-full z-50 shadow divide-y bg-white">
                @foreach ($fixedMenu as $item)
                  @if ($item->term_taxonomy_id)
                    <li class="items-fixed-item">
                      <a href="javascript:;" 
                        @click="selectOption('{!! $item->name !!}'); selected = {!! $item->term_taxonomy_id !!}"
                        class="p-3 block text-lg @if ($item->term_taxonomy_id === get_the_ID()) color-point @endif"
                      >
                        {{ $item->name }}
                      </a>
                    </li>
                  @else
                    <li class="items-fixed-item">
                      <a href="{!! $item->permalink !!}" class="block text-lg @if ($item->ID === get_the_ID()) current @endif">{!! $item->post_title !!}</a>
                    </li>
                  @endif
                @endforeach
              </ul>
            </div>
            <div class="depth-2 relative flex-1">
              @foreach ($fixedMenu as $item)
                @if ($item->term_taxonomy_id)
                  <div
                    x-show="selected === {!! $item->term_taxonomy_id !!}"
                    x-cloak
                  > 
                    <div x-data="{
                        @foreach ($item->children as $child)
                          @if ($child->post_title === $title)
                            label2: '{{$child->post_title}}',
                            @break
                          @endif
                        @endforeach
                      placeholder: '{{ current($item->children)->post_title }}',
                      dropdown: false
                    }">
                      <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none"
                        @click="dropdown = !dropdown"
                        @click.away="dropdown = false">
                        <template x-if="label2">
                          <span x-text="label2"></span>
                        </template>
                        <span x-text="placeholder"></span>
                        <svg width="11.107" height="11.107">
                          <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
                        </svg>
                      </button>
                      <ul
                        class="items-fixed-child absolute w-full z-50 shadow divide-y bg-white mt-0 gap-0"
                        x-show="dropdown"
                        x-cloak
                      >
                        @foreach ($item->children as $child)
                          <li class="items-fixed-item">
                            <a href="{{ $child->permalink }}" class="p-3 block text-lg @if ($child->ID === get_the_ID()) current @endif">{{ $child->post_title }}</a>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
          <h1 class="header-archive-title text-[36px] sm:text-[70px] mb-[5px] sm:mb-[18px]">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
        @isset($acf['outlink'])
          @if ($acf['outlink'] !== '')
            <div class="header-archive-nav bg-transparent labtop:translate-y-1/2 m_labtop:top-full m_labtop:bottom-auto">
              <ul>
                <li class="items-block-item-2 m_sm:w-full">
                  <a href="{!! $acf['outlink'] !!}" target="_blank" rel="noopener noreferrer" class="text-white">홈페이지 바로가기</a>
                </li>
              </ul>
            </div>
          @endif
        @endisset
      </div>
    </header>
  </div>
</div>
<nav 
  id="fixedMenu"
  class="items-fixed hidden labtop:block"
  :class="{'absolute bottom-72 footerFixed': footerShown}"
>
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
              <ul class="items-fixed-child" x-show="selected === {!! $item->term_taxonomy_id !!}">
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