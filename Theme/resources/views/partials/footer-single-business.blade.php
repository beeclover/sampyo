<footer class="footer__business">
  <div class="container lg:max-w-screen-lg mx-auto">
    <div class="flex -mx-6 relative z-10">
      @if (!empty($acf['outlink']))
        <div class="w-1/2 px-6">
          <div class="footer__business-body">
            <div class="footer__business-title">
              홈페이지 바로가기
            </div>
            <div class="footer__business-description">
              계열사 홈페이지에서 더 많은 정보를 만나보실 수 있습니다.
            </div>
          </div>
          <div class="footer__business-etc">
            <a href="{!! $acf['outlink'] !!}" class="arrow">
              <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMi4wMDkgNTEyLjAwOSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PHNjcmlwdD48L3NjcmlwdD4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnPgoJCTxwYXRoIGQ9Ik01MDguNjI1LDI0Ny44MDFMNTA4LjYyNSwyNDcuODAxTDM5Mi4yNjIsMTMxLjQzN2MtNC4xOC00Ljg4MS0xMS41MjYtNS40NS0xNi40MDctMS4yNjkgICAgYy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN2MwLjM5LDAuNDU1LDAuODE0LDAuODgsMS4yNjksMS4yNjlsOTYuNDY1LDk2LjU4MkgxMS42MzZDNS4yMSwyNDQuNDI2LDAsMjQ5LjYzNiwwLDI1Ni4wNjMgICAgczUuMjEsMTEuNjM2LDExLjYzNiwxMS42MzZINDcyLjMybC05Ni40NjUsOTYuNDY1Yy00Ljg4MSw0LjE4LTUuNDUsMTEuNTI2LTEuMjY5LDE2LjQwN3MxMS41MjYsNS40NSwxNi40MDcsMS4yNjkgICAgYzAuNDU1LTAuMzksMC44OC0wLjgxNCwxLjI2OS0xLjI2OWwxMTYuMzY0LTExNi4zNjRDNTEzLjEzNywyNTkuNjcsNTEzLjEzNywyNTIuMzQsNTA4LjYyNSwyNDcuODAxeiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4="/>
            </a>
          </div>
        </div>
      @endif
      @if(!empty($acf['area']) && !$acf['address'])
        <div class="w-1/2 px-6">
          <div class="footer__business-body">
            <div class="footer__business-title">
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
        <div class="px-6 @if($acf['area'] && $acf['outlink']) w-1/2 @else w-full @endif">
          <div class="footer__business-body">
            <div class="footer__business-title">
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
              @foreach ($acf['address'] as $_)
                <div class="mb-6">
                  @foreach ($_ as $key => $item)
                    @if (is_array($item))
                      <div class="flex gap-x-4 flex-wrap">
                        @foreach ($item as $c)
                          <div class="flex">
                            @foreach ($c as $index => $v)
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