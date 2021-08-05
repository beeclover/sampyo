@extends('layouts.app')

@section('content')
  @include('partials.header-archive-newsroom')
  <main>
    <div class="container lg:max-w-screen-lg mx-auto">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif
      <ul class="post-wrap">
        @while (have_posts()) @php(the_post())
          @include('partials.content-newsroom')
        @endwhile
      </ul>
    </div>

    @empty(!$pagination = get_the_posts_pagination( array(
      'mid_size' => 2,
      'prev_text' => __( '이전' ),
      'next_text' => __( '다음' ),
    )))
      <div class="container lg:max-w-screen-lg mx-auto">
        <div class="page-pagination-number">
          {!! $pagination !!}
        </div>
      </div>
    @endempty
  </main>
@endsection