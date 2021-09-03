@extends('layouts.app')

@section('content')
  @include('partials.header-single-career')
  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile
@endsection