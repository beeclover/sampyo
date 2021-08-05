<ul class="items-block">
  @foreach ($terms as $term)
      <li class="items-block-item">
        @php($class = in_array($term->term_id, $current) ? 'current ' : '')
        <a href="{!! $link !!}{{ $term->slug }}" class="{!! $class !!}">{{ $term->name }}</a>
      </li>
  @endforeach
</ul>