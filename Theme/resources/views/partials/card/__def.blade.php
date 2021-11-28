<div class="card-def grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-none sm:grid-flow-col gap-x-[24px] lg:gap-x-[48px] gap-y-[30px]">
  @if ($thumbnail)
    <div class="sm:col-span-1 lg:col-auto m_sm:aspect-w-16 m_sm:aspect-h-9">
      <div class="card-def-thumbnail lg:min-w-[350px] h-full">
        @if(preg_match("#^[http|https]?://.+#",$thumbnail))
          <img src="{!! $thumbnail !!}" alt="" />
        @else
          {!! $thumbnail !!}
        @endif
      </div>
    </div>
  @endif
  <div class="card-def-main 
  @if ($thumbnail) 
    sm:col-span-2 lg:col-auto
  @else 
    sm:col-span-3 lg:col-auto
  @endif
  ">
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
      @isset($date)
        <div class="card-def-date">{!! $date !!}</div>  
      @endisset
      <div class="card-def-share"></div>
    </div>
  </div>
</div>