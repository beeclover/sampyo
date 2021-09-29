<div class="sm:overflow-hidden header-archive-root2">
  <div class="sm:overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto mx_sm:px-0">
        <div class="header-archive-imgRow">
          @if (!empty($thumbnail))
            {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content mx_sm:px-8 mx_sm:w-full">
          <div x-data="select({label: '{!! $title !!}'})" class="w-full relative mb-px-30">
            <button class="flex items-center justify-between w-full px-3 py-3 text-left border focus:outline-none"
              @click="toggle()"
              @click.away="close()">
              <span x-text="label" class="text-xs"></span>
              <svg width="11.107" height="11.107">
                <path d="M0 .067 7.345 0l-.068 7.345" transform="rotate(135 4.297 4.826)" style="fill:none;stroke:#fff"/>
              </svg>
            </button>
            <ul x-show="dropdown" class="absolute w-full z-50 shadow divide-y bg-white">
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
              <template x-for="(index, item) in Object.keys(options)" :key="index">
                <li @click="selectOption(index, options[index].label)" class="px-4 py-2 cursor-pointer text-gray-600">
                  <a href="/">test</a>
                  <span class="block text-lg" x-text="options[index].label"></span>
                </li>
              </template>
            </ul>
          </div>
          <h1 class="header-archive-title text-px-36 sm:text-px-70 mb-px-5 sm:mb-px-18">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
      </div>
    </header>
  </div>
</div>
<nav class="items-fixed hidden sm:block">
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