@include('partials.header-archive-noticeBoard')
@include('partials.nav-fixed')
<div class="container mx-auto lg:max-w-screen-lg">
  <article @php(post_class())>
    <header>
      <h1 class="entry-title">
        {!! $title !!}
      </h1>
  
      <div class="card-def-meta">
        <div class="card-def-date">
          @include('partials/entry-meta')
        </div>
        <div class="card-def-like"></div>
        <div class="card-def-share"></div>
      </div>
    </header>
  
    <div class="entry-content prose">
      @php(the_content())
    </div>

    @if (!empty($attechedFiles))
      <div class="mt-24"></div>
      <ul class="items__attached">
        @foreach ($attechedFiles as $item)
          @php($file = $item['file'])
          <li class="py-6 px-3 items__attached-item">
            <span class="items__attached-title font-bold">첨부파일</span>
            <a href="{!! $file['url'] !!}" class="items__attached-link" target="_blank" download>{!! $file['filename'] !!}</a>
          </li>
        @endforeach
      </ul>
    @endif

    <footer>
        {!! $pagination !!}
    </footer>
  
    @php(comments_template())
  </article>
</div>
