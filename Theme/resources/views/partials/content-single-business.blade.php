@include('partials.header-single-business')
<main class="business__page">
  @includeFirst(['partials.business.'. $slug, 'partials.content-single'])
</main>
@if ($acf)
  @include('partials.footer-single-business')
@endif