<div class="newsroom__newsletter-body py-[38px] sm:py-[52px] gap-0 sm:gap-4
  @if ($border)
      border-t-4 border-b-4 border-blackout
  @endif
">
  <div class="newsroom__newsletter-title text-[36px] sm:text-[62px]">{!! $title !!}</div>
  <form action="https://stibee.com/api/v1.0/lists/f2eqTU7I64dCpLpErO92czVDIsF_nA==/public/subscribers" method="POST" target="_blank" accept-charset="utf-8" class="stb_form newsroom__newsletter-form" name="stb_subscribe_form" id="stb_subscribe_form" novalidate="">
    <div class="grid grid-cols-2 gap-y-4 gap-x-0 sm:gap-x-2">
      <div class="col-span-3 text-right">
        <div class="stb_form_msg_error" id="stb_policy_error"></div>
        <div class="stb_form_msg_error" id="stb_email_error"></div>
        <div class="stb_form_result" id="stb_form_result"></div>
      </div>
      <div class="col-span-2 flex justify-end">
        <input type="email" class="stb_form_set_input input max-w-full text-[14px] sm:text-base" id="stb_email" name="email" required="required" placeholder="sample@email.com">
      </div>
      <div class="flex gap-1 col-span-1">
        <button id="stb_form_submit_button" type="submit" class="btn btn-dark stb_form_submit_button text-[12px] sm:text-base">구독 신청<span class="hidden sm:inline">하기</span></button>
        {{-- <a href="https://page.stibee.com/archives/138300" target="_blank" class="btn btn-dark hidden">지난 뉴스레터 보기</a> --}}
      </div>
      <div class="col-span-3 flex justify-end">
        <div id="stb_subscribe" style="all: unset;">
          <div class="stb_form_policy" style="padding-bottom: 0">
            <label class="flex items-center gap-1">
              <input type="checkbox" id="stb_policy" value="stb_policy_true" class="bg-lighthouse">
              <div>
                <button id="stb_form_modal_open" data-modal="stb_form_policy_modal" class="stb_form_modal_open_btn" type="button">개인정보 수집 및 이용</button>에 동의합니다.
              </div>
            </label>
            <div class="stb_form_modal stb_form_policy_text blind" id="stb_form_policy_modal">
              <div class="stb_form_modal_body">
                <div class="stb_form_modal_title"></div>
                <div class="stb_form_modal_text prose overflow-y-scroll" style="white-space: unset; max-height: 400px">
                  <h1 style="margin-bottom: 20px">개인정보 수집 및 이용</h1>
                  <ol>
                    <li style="padding-left: 1.75em; margin-bottom: 14px">
                      <div>본인은 (주)삼표(이하‘삼표’라 함)의 웹 페이지를 이용 하며 뉴스레터 구독을 위해 개인정보제공이 필요하다는 것을 이해하고 있으며, 이를 위해 “개인정보보호법”등 규정 등에 따라 아래의 개인정보를 수집·이용하는 것에 동의합니다.</div>
                      개인정보 항목 : 이메일<br/>
                      수집·이용 목적 : 뉴스레터 구독<br/>
                      보유기간 : 구독서비스 종료 또는 해지시까지
                    </li>
                    <li style="padding-left: 1.75em; margin-bottom: 14px">
                      본인은 회사가 아래와 같이 개인정보를 제3자에게 제공하거나 위탁하는 것에 동의합니다.<br/>
                      제공받는자 : 스티비 주식회사<br/>
                      제공하는 항목 : 이메일<br/>
                      이용 목적 : 뉴스레터 구독<br/>
                      정보보유 및 이용기간 : 구독서비스 종료 또는 해지시까지
                    </li>
                    <li style="padding-left: 1.75em; margin-bottom: 14px">
                      본인은 위 1~2항에 따르는 개인정보의 수집·제공·이용에 대한 동의를 거부하고 제공된 개인정보에 대한 열람·삭제·정정·처리정지를 요구할 권리가 있다는 사실 및 동의 거부나 삭제, 처리정지시 개인정보 부정확에 따른 뉴스레터 구독 등에 불이익을 받을 수 있다는 사실을 충분히 설명 받고 숙지하였으며, 그 불이익에 대한 책임은 본인에게 있음을 확인합니다.
                    </li>
                  </ol>
                </div>
                <div class="stb_form_modal_btn">
                  <button id="stb_form_modal_close" class="stb_form_modal_close_btn" data-modal="stb_form_policy_modal" type="button">닫기</button>
                </div>
              </div>
              <div class="stb_form_modal_bg" id="stb_form_modal_bg"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
