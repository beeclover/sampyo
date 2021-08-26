<footer id="global" class="footer-global">
  <div class="flex justify-between mb-6">
    <div class="w-auto">
      {!! wp_nav_menu(['menu' => 'footer', 'menu_class' => 'footer-global-nav', 'echo' => false]) !!}
    </div>
    <div class="w-auto">
      <div class="flex gap-10">
        <a href="#">뉴스레터 구독신청</a>

        <div x-data="{ isOpen: false }" class="relative inline-block text-left">
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
            class="z-10 origin-top-right absolute right-0 mt-2 w-56 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" style="display: none">
            <div @click.away="isOpen = false" class="text-gray-700 block px-4 py-2 text-sm" role="none">
              {!! wp_nav_menu(['menu' => 'Famaily site', 'container' => null, 'echo' => false]) !!}
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="flex items-center justify-between">
    <div class="w-auto">
      {!! wp_nav_menu(['menu' => 'footer sub', 'menu_class' => 'footer-global-navSub', 'echo' => false]) !!}
      <div class="footer-global-copylight">
        © 2021 SAMPYO GROUP.  All Rights Reserved.
      </div>
    </div>
    <div class="w-auto">
      <ul class="flex gap-6 footer-global-sns">
        <li>
          <a href="#">
            <div class="icon-wrap">
              <div class="icon-insta"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="icon-wrap">
              <div class="icon-youtube"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <div class="icon-wrap">
              <div class="icon-naverBlog"></div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  
</footer>
