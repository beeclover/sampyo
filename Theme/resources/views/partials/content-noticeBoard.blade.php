<li class="flex justify-between py-5 px-3 border-b font-light text-lg m_sm:flex-col gap-y-[10px]">
  <a href="{!! $permalink !!}">{!! $title !!}</a>
  <div class="more flex gap-x-10 items-center m_sm:justify-between">
    <div class="date">{{ get_the_date('Y.m.d') }}</div>

    @if (!empty($attechedFiles))
      <div x-data="{ isOpen: false }" class="relative inline-block text-left">
        <div>
          <button  @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="true" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
          <button @click="isOpen = !isOpen"  type="button" class="inline-flex justify-center w-full items-center gap-4 font-light" id="menu-button" aria-expanded="true" aria-haspopup="true" style="outline: none !important">
            첨부파일
            <img style="width: 26px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDczLjM1Niw3OS42NDRIMzI1LjQ0NWMtNi4yODMsMC0xMS4zNzgsNS4wOTQtMTEuMzc4LDExLjM3OHM1LjA5NCwxMS4zNzgsMTEuMzc4LDExLjM3OEg0NjAuOHYzODYuODQ0SDUxLjJWMTAyLjQNCgkJCWgxMzcuNzExYzYuMjgzLDAsMTEuMzc4LTUuMDk0LDExLjM3OC0xMS4zNzhzLTUuMDk1LTExLjM3OC0xMS4zNzgtMTEuMzc4SDQxYy02LjI4MywwLTEyLjU1Niw0LjMzMi0xMi41NTYsMTAuNjE0djQwOS42DQoJCQlDMjguNDQ0LDUwNi4xNDMsMzQuNzE3LDUxMiw0MSw1MTJoNDMyLjM1NmM2LjI4MywwLDEwLjItNS44NTcsMTAuMi0xMi4xNDJ2LTQwOS42QzQ4My41NTYsODMuOTc2LDQ3OS42MzksNzkuNjQ0LDQ3My4zNTYsNzkuNjQ0eg0KCQkJIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0zNjcuNjE4LDIxOC43NDdjLTQuNDQ0LTQuNDQzLTEyLjIzMi00LjQ0My0xNi42NzYsMGwtODMuNTY0LDgyLjk3OFYwaC0yMi43NTZ2MzAxLjcyNWwtODIuMzg5LTgyLjk3OA0KCQkJYy00LjQ0NC00LjQ0My0xMS4zNS00LjQ0My0xNS43OTUsMGMtNC40NDQsNC40NDQtNC4yOTcsMTEuNjQ1LDAuMTQ3LDE2LjA4OWwxMDIuNDc0LDEwMi40YzIuMjIyLDIuMjI0LDUuMTcxLDMuMzMzLDguMDgsMy4zMzMNCgkJCWMyLjkxMiwwLDUuODQyLTEuMTEsOC4wNjQtMy4zMzNsMTAyLjQxLTEwMi40QzM3Mi4wNTcsMjMwLjM5MiwzNzIuMDYyLDIyMy4xOTIsMzY3LjYxOCwyMTguNzQ3eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" />
          </button>
        </div>
        @if (!empty($attechedFiles))
          <div 
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="z-10 origin-top-right absolute right-0 mt-2 w-56 shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" style="display: none">
            <div @click.away="isOpen = false" class="text-gray-700 block px-4 py-2 text-sm" role="none">
              <ul class="items__archive__atteched">
                @foreach ($attechedFiles as $index => $item)
                  @php($file = $item['file'])
                  <li class="py-3 px-1 items__archive__atteched-item">
                    <a href="{!! $file['url'] !!}" class="items__archive__atteched-link" target="_blank" download>{!! $file['filename'] !!}</a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endif
      </div>
    @endif
  </div>
</li>