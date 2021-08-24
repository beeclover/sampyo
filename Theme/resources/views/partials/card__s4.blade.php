<div class="card__s4">
  <div class="card__s4-thumbnail">
    <img
      src="@php echo get_theme_file_uri('resources/images/ready-mix-li-'.$index.'-1.jpg') @endphp"
      srcset="
        @php echo get_theme_file_uri('resources/images/ready-mix-li-'.$index.'-1@2x.jpg') @endphp 2x,
        @php echo get_theme_file_uri('resources/images/ready-mix-li-'.$index.'-1@3x.jpg') @endphp 3x"
      alt=""
    >
  </div>
  <div class="card__s4-body">
    <div class="card__s4-title font-bold">{!! $item !!}</div>
    <div class="card__s4-logo">
      <img
        src="@php echo get_theme_file_uri('resources/images/ready-mix-li-'.$index.'-2.jpg') @endphp"
        srcset="
          @php echo get_theme_file_uri('resources/images/ready-mix-li-'.$index.'-2@2x.jpg') @endphp 2x,
          @php echo get_theme_file_uri('resources/images/ready-mix-li-'.$index.'-2@3x.jpg') @endphp 3x"
        alt=""
      >
    </div>
  </div>
</div>