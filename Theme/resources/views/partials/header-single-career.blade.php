<div class="overflow-hidden">
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
      @if ($queriedCat)
        <div class="header-archive-nav" style="--atmosphere: var(--bermudagrass)">
          <ul class="items-block">
            @foreach ($queriedCat as $item)
              <li class="items-block-item">
                <a href="{!! $item->guid !!}" @if ($item->ID === get_the_ID()) class="current" @endif>{!! $item->post_title !!}</a>
              </li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
  </header>
</div>