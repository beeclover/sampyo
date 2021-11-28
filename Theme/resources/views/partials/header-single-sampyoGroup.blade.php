<div class="labtop:overflow-x-hidden header-archive-root2">
  <div class="labtop:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto max:labtop:px-0">
        <div class="header-archive-imgRow">
          @if (!empty($thumbnail))
            {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content max:labtop:px-8 max:labtop:w-full">
          <div x-data="select({label: '{!! $title !!}'})" class="w-full relative mb-[30px] labtop:hidden flex">
            <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none"
              @click="toggle()"
              @click.away="close()">
              <span x-text="label" class="text-[16px]"></span>
              <svg width="11.107" height="11.107">
                <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
              </svg>
            </button>
            <ul x-show="dropdown" x-cloak class="absolute w-full z-50 shadow divide-y bg-white">
            @foreach ($fixedMenu as $item)
                <li class="items-fixed-item px-3 py-2 cursor-pointer text-gray-600">
                  <a @if($item->permalink)
                    href="{{ $item->permalink }}"
                  @else
                    @click="selectOption('{!! $item->post_title !!}')"
                  @endif
                  class="block text-lg @if ($item->ID === get_the_ID()) color-point @endif" >
                    {{ $item->post_title }}
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          <h1 class="header-archive-title text-[36px] sm:text-[70px] mb-[5px] sm:mb-[18px]">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
      </div>
    </header>
  </div>
</div>
<nav
  id="fixedMenu"
  class="items-fixed hidden labtop:block"
  :class="{'absolute bottom-72 footerFixed': footerShown}"
>
  <ul class="items-fixed-wrap">
    @foreach ($fixedMenu as $item)
      <li class="items-fixed-item">
        <a href="{{ $item->permalink }}"  @if ($item->ID === get_the_ID()) class="current" @endif >
          {{ $item->post_title }}
        </a>
      </li>
    @endforeach
  </ul>
</nav>