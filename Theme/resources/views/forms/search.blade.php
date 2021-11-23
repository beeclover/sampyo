<form role="search" method="get" class="search-form w-full flex" action="{{ home_url('/') }}">
  <div class="w-full relative" >
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      class="w-full text-20px sm:text-2xl p-20px sm:px-10 sm:py-7 border-none bg-transparent focus:ring-0 placeholder-current placeholder-opacity-50 font-light"
      placeholder="{!! esc_attr_x('뉴스룸 검색', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >

    <div class="absolute inset-y-0 right-0 pr-20px sm:pr-9 flex items-center z-20 gap-x-14px sm:gap-x-10">
      <button
        type="submit"
        value="{{ esc_attr_x('Search', 'submit button', 'sage') }}"
        class="w-18px sm:w-28px h-18px sm:h-28px border-none focus:ring-0 outline-none focus:outline-none"
      >
        <svg version="1.1" id="Capa_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
          <g>
            <g>
              <path d="M225.773,0.616C101.283,0.616,0,101.622,0,225.773s101.284,225.157,225.773,225.157s225.774-101.006,225.774-225.157
                S350.263,0.616,225.773,0.616z M225.773,413.917c-104.084,0-188.761-84.406-188.761-188.145
                c0-103.745,84.677-188.145,188.761-188.145s188.761,84.4,188.761,188.145C414.535,329.511,329.858,413.917,225.773,413.917z"
                fill="currentColor"
                />
            </g>
          </g>
          <g>
            <g>
              <path d="M506.547,479.756L385.024,358.85c-7.248-7.205-18.963-7.174-26.174,0.068c-7.205,7.248-7.174,18.962,0.068,26.174
                l121.523,120.906c3.615,3.59,8.328,5.385,13.053,5.385c4.756,0,9.506-1.82,13.121-5.453
                C513.82,498.681,513.789,486.967,506.547,479.756z"
                fill="currentColor"
                />
            </g>
          </g>
        </svg>
      </button>
    </div>
  </div>
</form>
