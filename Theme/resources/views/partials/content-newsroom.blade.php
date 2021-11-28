
@php
  $time = get_post_time('c', true);
  $date = get_the_date('Y.m.d');
  $dateEl = <<<DATE
  <time class="updated" datetime="$time">
    $date
  </time>
DATE;
@endphp
<li class="post-item my-[40px] sm:my-[50px] pb-[40px] sm:pb-[50px]">
  @include('partials.card.__def', [
    'thumbnail' => $thumbnail,
    'permalink' => $permalink,
    'title' => $title,
    'excerpt' => $excerpt,
    'categories' => $categories,
    'date' => $dateEl,
  ])
</li>