<footer id="global" class="footer-global sm:px-12 sm:py-14 bg-blackout text-white">
  <div class="flex flex-wrap justify-between sm:mb-6 mb-px-30">
    <div class="w-full sm:w-auto order-2 px-8 pt-8 sm:p-0 sm:order-1">
      <div class="block sm:hidden mb-px-21">
        @include('partials.list-sns')
      </div>
      {!! wp_nav_menu(['menu' => 'footer', 'menu_class' => 'footer-global-nav flex flex-wrap gap-x-6 sm:gap-x-12 gap-y-4', 'echo' => false]) !!}
    </div>
    <div class="w-full sm:w-auto order-1 sm:order-2">
      <div class="grid grid-cols-2 sm:flex gap-px sm:gap-10 h-px-60 sm:h-auto bg-white bg-opacity-20 pb-px sm:pb-0 sm:bg-transparent">
        <a class="w-full h-full flex items-center justify-center sm:inline bg-blackout whitespace-nowrap" href="#">뉴스레터 구독신청</a>
        <div x-data="{ isOpen: false }" class="relative sm:inline-block text-left w-full h-full flex items-center justify-center bg-blackout">
          <div>
            <button  @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="true" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
            <button @click="isOpen = !isOpen"  type="button" class="inline-flex justify-center w-full font-black items-center" id="menu-button" aria-expanded="true" aria-haspopup="true" style="outline: none !important">
              FAMILY SITE
              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div 
            x-show="isOpen"
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
              sm:mt-2
              sm:top-auto
              sm:w-56
            " role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" style="display: none">
            <div @click.away="isOpen = false" class="text-gray-700 block px-4 py-2 text-sm" role="none">
              {!! wp_nav_menu(['menu' => 'Famaily site', 'container' => null, 'echo' => false]) !!}
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="flex items-center justify-between flex-wrap">
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
