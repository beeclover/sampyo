<div class="py-10 border-b border-superSilver">
  <div class="card-def">
    @if ($thumbnail)
      <div class="card-def-thumbnail">
        {!! $thumbnail !!}
      </div>
    @endif
    <div class="card-def-main">
      <div class="card-def-contentWrap">
        <a href="{!! $permalink !!}" class="card-def-title text-lg">{!! $title !!}</a>
        <a href="{!! $permalink !!}" class="card-def-content mb-0">
          {!! $excerpt !!}
        </a>
      </div>
    </div>
  </div>
</div>
