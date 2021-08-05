<x-HeaderBlog post-type="{{ get_post_type() }}" />
<div class="container mx-auto lg:max-w-screen-lg">
  <article @php(post_class())>
    <header>
      @if (!empty($categories))
        <ul class="card-def-cat">
          @foreach ($categories as $item)
            <li class="card-def-cat-item">
              <a href="/blog/{{ $item->slug }}">{{ $item->name }}</a>
            </li>
          @endforeach
        </ul>
      @endif
      <h1 class="entry-title">
        {!! $title !!}
      </h1>
  
      <div class="card-def-meta">
        <div class="card-def-date">
          @include('partials/entry-meta')
        </div>
        <div class="card-def-like">{!! do_shortcode('[wp_ulike]') !!}</div>
        <div class="card-def-share"></div>
      </div>
    </header>
  
    <div class="entry-content prose">
      @php(the_content())
    </div>
  
    <footer>
        {!! $pagination !!}
    </footer>
  
    @php(comments_template())
  </article>
</div>
