<div class="overflow-hidden">
  <header class="header-archive">
    <div class="container lg:max-w-screen-lg mx-auto">
      <div class="header-archive-imgRow">
        <img
          src="@php echo get_theme_file_uri('resources/images/header-blog.jpg') @endphp"
          srcset="
            @php echo get_theme_file_uri('resources/images/header-blog@2x.jpg') @endphp 2x,
            @php echo get_theme_file_uri('resources/images/header-blog@3x.jpg') @endphp 3x"
          alt=""
          class="header-archive-img"
        >
      </div>
      <div class="header-archive-content">
        <h1 class="header-archive-title">{!! $title !!}</h1>
        <span class="header-archive-description">{!! $description !!}</span>
      </div>
      <div class="header-archive-nav">
        <x-Items label="{!! $category_label !!}" type="block" />
      </div>
    </div>
  </header>
  @include('partials.nav-fixed')
</div>