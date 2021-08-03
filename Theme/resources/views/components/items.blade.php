<ul>
  @foreach ($terms as $term)
    <li class="items-block-item">
      <a href="{!! $link !!}{{ $term->slug }}">{{ $term->name }}</a>
    </li>
  @endforeach
</ul>