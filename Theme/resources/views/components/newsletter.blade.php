<link rel="stylesheet" href="https://s3.ap-northeast-2.amazonaws.com/resource.stibee.com/subscribe/stb_subscribe_form_style.css">
<div class="newsroom__newslater-body py-38px sm:py-52px gap-0 sm:gap-4
  @if ($border)
      border-t-4 border-b-4 border-blackout
  @endif
">
  <div class="newsroom__newslater-title text-36px sm:text-62px">{!! $title !!}</div>
  <form action="https://stibee.com/api/v1.0/lists/f2eqTU7I64dCpLpErO92czVDIsF_nA==/public/subscribers" method="POST" target="_blank" accept-charset="utf-8" class="stb_form newsroom__newslater-form" name="stb_subscribe_form" id="stb_subscribe_form" novalidate="">
    <div class="grid grid-cols-2 gap-y-4 gap-x-0 sm:gap-x-2">
      <div class="col-span-3 text-right">
        <div class="stb_form_msg_error" id="stb_policy_error"></div>
        <div class="stb_form_msg_error" id="stb_email_error"></div>
        <div class="stb_form_result" id="stb_form_result"></div>
      </div>
      <div class="col-span-2 flex justify-end">
        <input type="email" class="stb_form_set_input input max-w-full text-14px sm:text-base" id="stb_email" name="email" required="required" placeholder="sample@email.com">
      </div>
      <div class="flex gap-1 col-span-1">
        <button id="stb_form_submit_button" type="submit" class="btn btn-dark stb_form_submit_button text-12px sm:text-base">구독 신청<span class="hidden sm:inline">하기</span></button>
        <a href="https://page.stibee.com/archives/138300" target="_blank" class="btn btn-dark hidden sm:block">지난 뉴스레터 보기</a>
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
                <h1 class="stb_form_modal_title">개인정보 수집 및 이용</h1>
                <p class="stb_form_modal_text" style="white-space: unset">
                  뉴스레터 발송을 위한 최소한의 개인정보를 수집하고 이용합니다.
                  수집된 정보는 발송 외 다른 목적으로 이용되지 않으며, 서비스가 종료되거나 구독을 해지할 경우 즉시 파기됩니다.
                </p>
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
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script><script type="text/javascript" src="https://s3.ap-northeast-2.amazonaws.com/resource.stibee.com/subscribe/stb_subscribe_form.js"></script>