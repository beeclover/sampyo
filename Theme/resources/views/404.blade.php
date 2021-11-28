@extends('layouts.app')

@section('content')
  <main class="page__layout" style="--absolute-margin-left: 0px">
    <div class="pb-[70px] sm:pb-24"></div>
    <div class="container xl:max-w-screen-xl mx-auto">
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
      </x-alert>

      {!! get_search_form(false) !!}
    @endif
    </div>
  </main>
@endsection
