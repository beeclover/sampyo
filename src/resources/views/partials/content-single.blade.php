<main class="page__layout pb-0">
<div class="container xl:max-w-screen-xl mx-auto">
  <article @php(post_class())>
    <header>
      <h1 class="entry-title">
        {!! $title !!}
      </h1>

      @include('partials/entry-meta')
    </header>

    <div class="entry-content">
      @php(the_content())
    </div>

    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('페이지:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>

    @php(comments_template())
  </article>
</div>
</main>
