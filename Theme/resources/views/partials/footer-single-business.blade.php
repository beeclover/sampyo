<footer class="footer__business">
  <div class="container xl:max-w-screen-xl mx-auto sm:py-[120px] m_sm:px-0">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 relative z-10">
      @if (!empty($acf['outlink']))
        <div class="m_sm:px-container-x py-[30px] sm:py-[40px] m_sm:border-b border-white border-opacity-50">
          <div class="footer__business-body mb-[30px] sm:mb-[60px]">
            <div class="footer__business-title m_sm:text-[18px]">
              홈페이지 바로가기
            </div>
            <div class="footer__business-description">
              계열사 홈페이지에서 더 많은 정보를 만나보실 수 있습니다.
            </div>
          </div>
          <div class="footer__business-etc">
            <a href="{!! $acf['outlink'] !!}" target="_blank" rel="noopener noreferrer" class="arrow m_sm:w-[52px]">
              <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
            </a>
          </div>
        </div>
      @endif
      @if(!empty($acf['area']) && !$acf['address'])
        <div class="m_sm:px-container-x py-[30px] sm:py-[40px]">
          <div class="footer__business-body sm:mb-[60px]">
            <div class="footer__business-title m_sm:text-[18px]">
              사업장 정보
            </div>
            <div class="footer__business-description">
              삼표그룹 계열사들의 사업장 정보를 조회하실 수 있습니다.
            </div>
          </div>
          <div class="footer__business-etc">
            <a href="{!! $acf['area'] !!}" class="arrow">
              <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
            </a>
          </div>
        </div>
      @endif
      @if ($acf['address'])
        <div class="@if(!$acf['area'] && !$acf['outlink']) col-span-2 @endif m_sm:px-container-x py-[30px] sm:py-[40px]">
          <div class="footer__business-body">
            <div class="footer__business-title m_sm:text-[18px]">
              연락하기
            </div>
            <div 
              class="
                footer__business-description 
                @if($acf['area'] && $acf['outlink'])
                  max-w-sm 
                @else
                  flex flex-wrap gap-12
                @endif
              "
            >
              @foreach ($acf['address'] as $key => $_)
                <div class="@if (count($acf['address']) !== $key + 1) mb-6 @endif">
                  @foreach ($_ as $key => $item)
                    @if (is_array($item))
                      <div class="flex gap-x-4 flex-wrap">
                        @foreach ($item as $c)
                          @if ($c['full']) 
                            <div class="w-full"></div>
                          @endif
                          <div class="flex pb-1.5">
                            @foreach ($c as $index => $v)
                              @if ($index === 'full')
                                @continue
                              @endif
                              {{ $v }} @if ($index == 'name') : @endif
                            @endforeach
                          </div>
                        @endforeach
                      </div>
                    @else
                      <p class="mb-1.5">
                        {{ $item }}
                      </p>
                    @endif
                  @endforeach
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
</footer>