<footer id="global" class="footer-global sm:px-12 sm:py-14 bg-blackout text-white" x-data="{pop_newsletter: false}" x-intersect:enter="footerShown = true" x-intersect:leave="footerShown = false">
  <div class="flex flex-wrap justify-between sm:mb-6 mb-[30px] gap-y-[14px]">
    <div class="w-full sm:w-auto order-2 px-8 pt-8 sm:p-0 sm:order-1">
      <div class="block sm:hidden mb-[21px]">
        @include('partials.list-sns')
      </div>
      <div class="flex">
        <button @click="cybernotiModal = !cybernotiModal"
            @keydown.escape="cybernotiModal = false"
            class="mr-12 text-white focus:ring-0 outline-none focus:outline-none">
        사이버감사실
      </button>
      {!! wp_nav_menu(['menu' => 'footer', 'menu_class' => 'footer-global-nav flex flex-wrap gap-x-6 sm:gap-x-12 gap-y-4', 'echo' => false]) !!}
      </div>
    </div>
    <div class="w-full sm:w-auto order-1 sm:order-2">
      <div class="grid grid-cols-1 sm:flex gap-px sm:gap-10 h-[60px] sm:h-auto bg-white bg-opacity-20 pb-px sm:pb-0 sm:bg-transparent">
        {{-- <button class="w-full h-full flex items-center justify-center sm:inline bg-blackout whitespace-nowrap focus:outline-none" x-on:click.prevent="pop_newsletter = true">뉴스레터 구독신청</button> --}}
        <div x-show="pop_newsletter"
            x-cloak
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform"
            x-transition:enter-end="opacity-100 transform"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform"
            x-transition:leave-end="opacity-0 transform"
            class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50 h-screen"
            >
            <div x-on:click.away="pop_newsletter = false"
                class="container max-w-3xl max-h-full bg-white shadow-lg overflow-auto px-[30px] sm:px-[52px] text-black relative">
                <button class="absolute right-4 top-4 focus:outline-none" x-on:click.prevent="pop_newsletter = false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                      <defs>
                          <style>
                              .cls-1{fill:#222}
                          </style>
                      </defs>
                      <g id="그룹_5502" data-name="그룹 5502" transform="translate(-260 -30)">
                          <path id="사각형_353" data-name="사각형 353" class="cls-1" transform="rotate(45 94.537 330.658)" d="M0 0h23.334v2.121H0z"/>
                          <path id="사각형_610" data-name="사각형 610" class="cls-1" transform="rotate(135 132.476 73.326)" d="M0 0h23.335v2.121H0z"/>
                      </g>
                  </svg>
                </button>
                <x-Newsletter border="false" title="뉴스레터 구독신청" />
            </div>
        </div>
        <div class="relative sm:inline-block text-left w-full h-full flex items-center justify-center bg-blackout">
          <div>
            <button  @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="true" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
            <button @click="famMenuOpen = !famMenuOpen" type="button" class="inline-flex justify-center w-full font-black items-center" id="menu-button" aria-expanded="true" aria-haspopup="true" style="outline: none !important">
              FAMILY SITE
              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div 
            x-show="famMenuOpen"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="
              z-10
              origin-top-right
              absolute
              right-0
              shadow-lg
              bg-white
              ring-1
              ring-black
              ring-opacity-5
              focus:outline-none
              w-screen
              mt-0
              top-full
              sm:mb-2
              sm:top-auto
              sm:bottom-full
              sm:w-56
              m_sm:max-w-full
            " role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" style="display: none">
            <div @click.away="famMenuOpen = false" class="text-gray-700 block text-sm" role="none">
              {!! wp_nav_menu(['menu' => 'Famaily site', 'container' => null, 'menu_class' => 'footer-global-navFam', 'echo' => false]) !!}
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="flex items-center justify-between flex-wrap gap-y-[14px]">
    <div class="w-full sm:w-auto px-8 pb-8 sm:p-0">
      {!! wp_nav_menu(['menu' => 'footer sub', 'menu_class' => 'footer-global-navSub flex-wrap gap-y-1', 'echo' => false]) !!}
      <div class="footer-global-copylight">
        © 2021 SAMPYO GROUP.  All Rights Reserved.
      </div>
    </div>
    <div class="w-full sm:w-auto hidden sm:block">
      @include('partials.list-sns')
    </div>
  </div>
  
</footer>
<button id="scrollTop" 
  class="
    m_sm:hidden sm:flex
    fixed m_xxl:right-0 xxl:left-1/2
    w-[90px] h-[90px] bg-blackout text-white flex-col items-center justify-center
  "
  :class="{'absolute bottom-72': footerShown, 'bottom-0 xxl:bottom-10': !footerShown, '-z-10': famMenuOpen, 'z-50': !famMenuOpen}"
>
  <svg xmlns="http://www.w3.org/2000/svg" width="15.556" height="15.556" viewBox="0 0 15.556 15.556">
    <path d="M0 10h10V0" transform="rotate(-135 7.11 6.167)" style="fill:none;stroke:#fff;stroke-width:2px"/>
  </svg>
  <span class="text-[20px] font-black">TOP</span>
</button>