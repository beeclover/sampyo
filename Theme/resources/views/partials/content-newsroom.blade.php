<li class="post-item">
  <div class="card-def">
    <div class="card-def-thumbnail">
      <img src="{!! $thumbnail !!}" />
    </div>
    <div class="card-def-main">
      @if (!empty($categories))
        <ul class="card-def-cat">
          @foreach ($categories as $item)
            @php($permerlink = implode("/", explode("_", $category_label)))
            <li class="card-def-cat-item">
              <a href="/{{ $permerlink }}/{{ $item->slug }}">{{ $item->name }}</a>
            </li>
          @endforeach
        </ul>
      @endif
      <div class="card-def-contentWrap">
        <a href="{!! $permalink !!}" class="card-def-title">{!! $title !!}</a>
        <a href="{!! $permalink !!}" class="card-def-content">
          {!! $excerpt !!}
        </a>
      </div>
      <div class="card-def-meta">
        <div class="card-def-date">
          @include('partials/entry-meta')
        </div>
        <div class="card-def-like">{!! $like !!}</div>
        <div class="card-def-share"></div>
      </div>
    </div>
  </div>
</li>