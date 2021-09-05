<li class="post-item">
  <div class="card-def">
    <div class="card-def-thumbnail">
      {!! $thumbnail !!}
    </div>
    <div class="card-def-main">
      @if (!empty($categories))
        <ul class="card-def-cat mb-0">
          @foreach ($categories as $item)
            {{-- @if ($item->slug !== get_queried_object()->slug) --}}
              @php($permerlink = implode("/", explode("_", $category_label)))
              <li class="card-def-cat-item mb-3.5">
                <a href="/{{ $permerlink }}/{{ $item->slug }}">
                  <span>{{ $item->name }}</span>
                </a>
              </li>
            {{-- @endif --}}
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