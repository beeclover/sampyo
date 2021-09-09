@extends('layouts.app')
@section('content')
  <main class="business__page">
    <div class="mb-24"></div>
    <div class="container lg:max-w-screen-lg mx-auto">
      <div class="bg-atmosphere text-white mb-16">
        {!! get_search_form(false) !!}
      </div>
      
      <div class="pb-6 flex gap-x-7 border-blackout items-end" style="border-bottom-width: 3px">
        <span class="text-4xl font-black">‘{{ get_search_query() }}’ 검색결과</span> <span class="text-2xl">총 {{ $allCount }}건</span>
      </div>

      @if (! have_posts())
        <div class="my-12">
          <x-alert type="warning">
            {!! __('Sorry, no results were found.', 'sage') !!}
          </x-alert>
        </div>
      @else
        <article>
          @while(have_posts()) @php(the_post())
            @include('partials.content-search')
          @endwhile
        </article>
      @endif


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
    </div>
  </main>
@endsection
