<div id="bgMask" class="fixed top-0 bottom-0 left-0 right-0 w-full h-full bg-black opacity-50" x-cloak x-show="cybernotiModal | drawerMenu" style="z-index: 9010"></div>
<section id="modal" class="flex items-center justify-center">
  <div 
    class="fixed z-50 max-w-[720px] max-h-full w-full bg-white md:rounded shadow-2xl transform top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 p-[63px] pt-[80px] overflow-y-auto"
    style="z-index: 9020"
    x-show="cybernotiModal"
    x-cloak
    @click.away="cybernotiModal = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform scale-90"
    x-transition:enter-end="opacity-100 transform scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 transform scale-100"
    x-transition:leave-end="opacity-0 transform scale-90"
    >
      <button class="bg-atmosphere w-[82px] h-[82px] flex items-center justify-center absolute right-0 top-0 focus:ring-0 outline-none focus:outline-none" @click.prevent="cybernotiModal = false"><svg class="w-[26px] h-[26px]" id="Icons" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg" fill="#fff"><path d="m4.59 59.41a2 2 0 0 0 2.83 0l24.58-24.58 24.59 24.58a2 2 0 0 0 2.83-2.83l-24.59-24.58 24.58-24.59a2 2 0 0 0 -2.83-2.83l-24.58 24.59-24.59-24.58a2 2 0 0 0 -2.82 2.82l24.58 24.59-24.58 24.59a2 2 0 0 0 0 2.82z"/></svg></button>
      <h2 class="font-bold text-[50px] mb-[20px]">삼표그룹 사이버감사실</h2>
      <p class="mb-[72px]">
        사이버 감사실 개편 작업으로 인해 웹사이트를 통한 제보 접수가 일시적으로 중단되었습니다.<br/>
        12월 중 재개될 예정이오니 이용에 참고해 주시길 바랍니다.
      </p>
      <div class="text-[26px] font-bold mb-[30px]">제보방법</div>
      <p class="text-[15px] mb-[20px]">아래 방법중 가장 편리한 방법을 선택해 제보하실 수 있습니다.</p>
      <div class="grid gap-x-[25px] text-[15px] gap-y-[8px]" style="grid-template-columns: auto 1fr;">
        <div>이메일</div>
        <div><a href="mailto:nys3701@sampyo.co.kr" class="text-atmosphere underline">nys3701@sampyo.co.kr</a></div>
        <div>전화</div>
        <div><a href="tel:02-6270-0765">02-6270-0765</a></div>
        <div>팩스</div>
        <div><a href="tel:02-6270-5195">02-6270-5195</a></div>
        <div>방문 및 우편</div>
        <div>(110-755) 서울특별시 종로구 종로1길 42 이마빌딩 6층 감사팀</div>
      </div>
      <div class="bg-dugong h-[1px] w-full mt-[72px] mb-[32px]"></div>
      <div class="prose text-[14px]">
        <ul>
          <li>제보자 본인 및 비위행위자의 인적사항과 위반 내용을 적시하여 6하 원칙에 의거해 관련 자료를 첨부해 제보해주십시오.</li>
          <li>제보 시점 현재 진행중에 있는 비윤리행위 등 긴급을 요하는 경우는, 증거자료 없이 사실관계만으로 제보 가능합니다.</li>
        </ul>
      </div>
  </div>
</section>