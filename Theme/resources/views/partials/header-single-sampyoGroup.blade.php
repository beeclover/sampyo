<div class="overflow-hidden header-archive-root2">
  <div class="overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container xl:max-w-screen-xl mx-auto mx_sm:px-0">
        <div class="header-archive-imgRow">
          @if (!empty($thumbnail))
            {!! $thumbnail !!}
          @else
              <img src="https://picsum.photos/1920?random=10" alt="" class="header-archive-img">
          @endif
        </div>
        <div class="header-archive-content mx_sm:px-4">
          <h1 class="header-archive-title text-px-36 sm:text-px-70">{!! $title !!}</h1>
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