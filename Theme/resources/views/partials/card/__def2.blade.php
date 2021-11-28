<div>
  <div class="sm:hidden mb-[10px]">
    <a href="{!! $permalink !!}" class="card-def-title">{!! $title !!}</a>
  </div>
  <div class="card-def flex gap-x-[24px] lg:gap-x-[48px] gap-y-[30px]">
    @if ($thumbnail)
      <div class="w-[110px] h-[110px] sm:w-[163px] sm:h-[163px]">
        <div class="card-def-thumbnail h-full w-full">
          @if(preg_match("#(?i)\b((?:https?://|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))#", $thumbnail))
              <img src="{!! $thumbnail !!}" alt="" />
          @else
            {!! $thumbnail !!}
          @endif
        </div>
      </div>
    @endif
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
        <a href="{!! $permalink !!}" class="card-def-title hidden sm:block">{!! $title !!}</a>
        <a href="{!! $permalink !!}" class="card-def-content">
          {!! $excerpt !!}
        </a>
      </div>
      <div class="card-def-meta">
        @isset($date)
          <div class="card-def-date">{!! $date !!}</div>  
        @endisset
        @isset($like)
          <div class="card-def-like">{!! $like !!}</div>
        @endisset
        <div class="card-def-share"></div>
      </div>
    </div>
  </div>
</div>