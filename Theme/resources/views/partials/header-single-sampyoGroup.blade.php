<div class="overflow-hidden header-archive-root2">
  <div class="overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container lg:max-w-screen-lg mx-auto">
        <div class="header-archive-imgRow">
          @if (!empty($thumbnail))
              <img src="{!! $thumbnail !!}" alt="" class="header-archive-img">
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content">
          <h1 class="header-archive-title">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $excerpt !!}</span>
        </div>
      </div>
    </header>
  </div>
</div>
<nav class="items-fixed">
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