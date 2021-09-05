<header id="global" class="header-global text-xl">
  <div class="header-global-inner">
    <a class="header-global-logo" href="{{ home_url('/') }}">
      <img src="{!! $siteLogo !!}" alt="{{ $siteName }}"/>
    </a>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header-global-nav', 'echo' => false]) !!}
    @endif
    <div class="header-global-search">
      <a href="javascript:;">Search</a>
    </div>
  </div>
</header>
