<ul class="items-block">
  @foreach ($terms as $term)
      <li class="items-block-item">
        @php($class = $term->term_id === $id ? 'current ' : '')
        <a href="{!! $link !!}{{ $term->slug }}" class="{!! $class !!}">{{ $term->name }}</a>
      </li>
  @endforeach
</ul>