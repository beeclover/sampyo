<div class="overflow-hidden header-archive-root2">
  <div class="overflow-hidden header-archive-root">
    <header class="header-archive">
      <div class="container lg:max-w-screen-lg mx-auto">
        <div class="header-archive-imgRow">
          @if ($thumbnail)
            {!! $thumbnail !!}
          @else
            @include('partials.img', ['ex' => 'jpg', 'name' => 'header-blog', 'class' => 'header-archive-img'])
          @endif
        </div>
        <div class="header-archive-content">
          <h1 class="header-archive-title">{!! $title !!}</h1>
          <span class="header-archive-description">{!! $description !!}</span>
        </div>
      </div>
    </header>
  </div>
</div>