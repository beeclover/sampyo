{{-- 
  # state data (use alpinejs)
  - m_menu: body에서 global state로 사용중
--}}
<header id="global" class="header-global text-xl"
  x-data="{pop_search: false}"
  :class="{'menu-open' : m_menu}"
>
  <div class="header-global-inner">
    <a class="header-global-logo" href="{{ home_url('/') }}">
      <img src="{!! $siteLogo !!}" alt="{{ $siteName }}"/>
    </a>
    @if (has_nav_menu('primary_navigation'))
      <div class="header-global-menu">
        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'header-global-nav hidden lg:flex', 
            'container' => false,
            'echo' => false,
            'depth' => 1
        ]) !!}
        <div class="header-global-subnav-wrap" :class="{'active' : m_menu}">
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'header-global-subnav', 
            'container' => false,
            'echo' => false,
          ]) !!}
        </div>
      </div>
    @endif
    <div class="header-global-search flex items-center">
      <button x-on:click.prevent="pop_search = true" class="focus:outline-none">
          <div class="py-2 px-4 text-center hidden lg:block underline">
            Search
          </div>
          <svg style="width: 25px" viewBox="0 0 56.966 56.966" class="lg:hidden">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z" fill="currentColor" />
          </svg>
      </button>
      <button class="btn__menu lg:hidden focus:outline-none ml-4"
        x-on:click.prevent="m_menu = !m_menu"
        :class="{'active' : m_menu}"
      >
          <svg viewBox="0 0 64 48">
              <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
              <path d="M31,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
              <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
          </svg>
      </button>
      <div x-show="pop_search"
          x-cloak
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 transform"
          x-transition:enter-end="opacity-100 transform"
          x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100 transform"
          x-transition:leave-end="opacity-0 transform"
          class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50 h-screen"
          >
          <div x-on:click.away="pop_search = false"
              class="container max-w-3xl max-h-full bg-white shadow-lg overflow-auto">
              {!! get_search_form(false) !!}
          </div>
      </div>
    </div>
  </div>
</header>
