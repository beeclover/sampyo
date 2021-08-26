<x-HeaderBlog post-type="{{ get_post_type() }}" />
<div class="container mx-auto lg:max-w-screen-lg">
  <article @php(post_class())>
    <header>
      @if (!empty($categories))
        <ul class="card-def-cat">
          @foreach ($categories as $item)
            <li class="card-def-cat-item">
              <a href="/blog/{{ $item->slug }}">
                <span>{{ $item->name }}</span>
              </a>
            </li>
          @endforeach
        </ul>
      @endif
      <h1 class="entry-title">
        {!! $title !!}
      </h1>
  
      <div class="card-def-meta">
        <div class="card-def-date">
          @include('partials/entry-meta')
        </div>
        <div class="card-def-like">{!! do_shortcode('[wp_ulike]') !!}</div>
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

    @if (!empty($outlink))
      <div class="mt-16"></div>
      <div class="card__quotation mb-5">
        <div class="card__quotation-body">
          <span class="pointUnderLine" style="--bs: var(--RGB-unicorn-silver); --op: 1">삼표그룹 뉴스룸이 직접 제작한 콘텐츠는 미디어에서 사용 가능합니다.</span>
          <span class="pointUnderLine" style="--bs: var(--RGB-unicorn-silver); --op: 1">콘텐츠 사용 시에는 삼표그룹 뉴스룸으로 출처 표기를 부탁드립니다.</span>
        </div>
        <a href="{!! $outlink !!}" class="card__quotation-link block py-6">
          기사원몬 보러가기
        </a>
      </div>
    @endif

    <footer>
        {!! $pagination !!}
    </footer>
  
    @php(comments_template())
  </article>
</div>
