<header class="header-newsroom">
  <div class="header-newsroom-content">
    <h1 class="header-newsroom-title">{!! $title !!}</h1>
    <span class="header-newsroom-description">{!! $excerpt !!}</span>
    <img
      src="@php echo get_theme_file_uri('resources/images/header-newsroom.jpg') @endphp"
      srcset="
        @php echo get_theme_file_uri('resources/images/header-newsroom@2x.jpg') @endphp 2x,
        @php echo get_theme_file_uri('resources/images/header-newsroom@3x.jpg') @endphp 3x"
      alt=""
      class="header-newsroom-img"
    >
  </div>
</header>
