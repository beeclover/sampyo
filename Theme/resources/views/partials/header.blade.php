<header id="global" class="header-global text-xl">
  <div class="header-global-inner">
    <a class="header-global-logo" href="{{ home_url('/') }}">
      <img src="{!! $siteLogo !!}" alt="{{ $siteName }}"/>
    </a>
    @if (has_nav_menu('primary_navigation'))
      <div class="header-global-menu">
        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'header-global-nav', 
            'container' => false,
            'echo' => false,
            'depth' => 1
        ]) !!}
        <div class="header-global-subnav-wrap">
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation', 
            'menu_class' => 'header-global-subnav', 
            'container' => false,
            'echo' => false,
          ]) !!}
        </div>
      </div>
    @endif
    <div x-data="{open: false}">
      <button x-on:click.prevent="open = true"
          class="header-global-search py-2 px-4 text-center focus:outline-none">
          Search
      </button>
      <div x-show.transition.opacity="open"
          class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50 h-screen">
          <div x-show.transition="open"
              x-on:click.away="open = false"
              class="container max-w-3xl max-h-full bg-white shadow-lg overflow-auto">
              {!! get_search_form(false) !!}
          </div>
      </div>
    </div>
  </div>
</header>
