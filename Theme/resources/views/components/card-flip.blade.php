<div class="card-flip" data-scroll-animation>
  <div class="card-flip-front">
    <div class="card-flip-title">{!! $cat->name !!}</div>
    <div class="card-flip-content">
      <p>{!! $cat->description !!}</p>
    </div>
  </div>
  <div class="card-flip-back">
    <ul class="card-flip-cat">
      @foreach($cat->children as $businessCat)
        <li>
          <a href="{!! $businessCat->link !!}">{!! $businessCat->name !!}</a>
        </li>
      @endforeach
    </ul>
  </div>
  <div class="card-flip-bg">
    @if (isset($cat->thumbnail))
        <img src="{!! $cat->thumbnail !!}" alt="">
    @else
        <img src="https://picsum.photos/600?random={!! $cat->term_id !!}" alt="">
    @endif
  </div>
</div>