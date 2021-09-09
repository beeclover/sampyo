<form role="search" method="get" class="search-form w-full flex" action="{{ home_url('/') }}" x-data="{focus: false}">
  <div
    class="w-full relative"
    @mouseenter="focus= true"
    @mouseleave="focus= false"
  >
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'sage') }}
    </span>

    <input
      type="search"
      class="w-full text-2xl px-10 py-7 border-none bg-transparent focus:ring-0 placeholder-current placeholder-opacity-50"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
      placeholder="검색어를 입력하세요"
    >

    <div class="absolute inset-y-0 right-0 pr-9 flex items-center z-20 gap-x-10">
      <button
        x-show="focus"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        type="reset"
        class="w-8 h-8 border-none focus:ring-0 outline-none focus:outline-none"
      >
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
          <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
            L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
            c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
            l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
            L284.286,256.002z"
            fill="currentColor"
            />
        </svg>
      </button>
      <button
        type="submit"
        value="{{ esc_attr_x('Search', 'submit button', 'sage') }}"
        class="w-8 h-8 border-none focus:ring-0 outline-none focus:outline-none"
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
