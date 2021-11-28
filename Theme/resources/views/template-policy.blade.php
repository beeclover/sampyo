{{--
  Template Name: 개인정보 처리방침
--}}

@extends('layouts.app')

@section('content')
  @include('partials.header-template')
  <main class="page__layout">
  <div class="container xl:max-w-screen-xl mx-auto">
    <section class="mb-[30px] sm:mb-[70px]">
      <div class="prose tracking-[-0.16px]">
        <p>
          삼표그룹(이하 ‘회사’라 합니다)은 이용자의 개인정보를 중요시하며, 「개인정보 보호법」을 준수하기 위하여 노력하고 있습니다.<br/>
          회사는 이용자로부터 제공받은 개인정보를 어떠한 용도와 방식으로 이용하고 있으며, 개인정보 보호를 위해 어떠한 조치를 취하고 있는지 개인정보처리방침을 통해 알려드립니다.<br/>
          <br/>
          본 방침은 2021년 11월 24일부터 시행됩니다.
        </p>
      </div>
    </section>
    <section>
      <h1 class="page__level-title mb-[30px] sm:mb-10 tracking-[-0.8px]">
        회사의 개인정보처리방침은 다음과 같은 내용을 담고 있습니다.
      </h1>
      <div class="border border-dugong p-[30px] lg:p-[60px] prose text-[14px] tracking-[-0.17px]">
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold !mt-0">01. 개인정보의 처리 목적</h2>
          <p>
            회사는 이용자가 별도의 회원가입 절차 없이 컨텐츠에 자유롭게 접근할 수 있으며 이용자의 선택에 따라 뉴스레터 발송을 위한 최소한의 개인정보만을 수집하고 있으며 일체의 다른 개인정보 항목이 없음을 알려드립니다.
          </p>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">02. 개인정보 수집항목 및 이용목적</h2>
          <p>
            회사는 해당 목적 이외의 목적으로 개인정보를 사용하지 않습니다
          </p>
          <table class="table-auto">
            <colgroup>
              <col width="100px" />
              <col width="auto" />
            </colgroup>
            <tbody>
              <tr>
                <td>수집 항목</td>
                <td>이메일 주소</td>
              </tr>
              <tr>
                <td>이용목적</td>
                <td>삼표그룹 뉴스레터 발송을 원하시는 이용자에 한해서 뉴스레터 구독 신청</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">03. 제3자 개인정보 제공</h2>
          <p>
            회사는 정보주체의 개인정보회사는 원칙적으로 이용자의 개인정보를 외부에 제공하지 않습니다. 다만 아래의 경우는 예외로 합니다.
          </p>
          <ul>
            <li>법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우</li>
            <li>이용자가 사전에 동의한 경우</li>
          </ul>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">04. 개인정보 처리의 위탁</h2>
          <p>
            회사는 원활한 업무처리를 위하여 개인정보 처리업무를 위탁할 수 있습니다.<br/>
            회사는 위탁계약 체결 시 수탁자가 개인정보를 안전하게 처리하는지 감시합니다.
          </p>
          <table class="table-auto">
            <colgroup>
              <col width="100px" />
              <col width="auto" />
            </colgroup>
            <tbody>
              <tr>
                <td>수탁자</td>
                <td>스티비 주식회사</td>
              </tr>
              <tr>
                <td>위탁업무내용</td>
                <td>뉴스레터 구독 및 발송</td>
              </tr>
              <tr>
                <td>항목</td>
                <td>이메일 주소</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">05. 수집한 개인정보의 보유 및 이용기간</h2>
          <p>
            회사는 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.<br/>
            단, 보유기간을 이용자에게 미리 고지하였을 경우에는 그 기간 동안 해당 정보를 보유합니다.
          </p>
          <p>
            삼표그룹 뉴스레터 시스템의 개인정보의 보유 및 이용기간은 구독 해지 시 혹은 삼표그룹 뉴스레터 발송 서비스 종료 또는 이용자의 구독 해지 시점까지로 정합니다. <br/>
            (단, 관련 법규에 별도 규정이 있는 경우에는 당해 관련 법규에 따라 보유)
          </p>
          <p>
            이용자는 위와 관련된 동의를 거부할 권리가 있으나, 필수정보 수집에 동의하지 않는 경우 삼표그룹 뉴스레터 발송을 신청할 수 없습니다.
          </p>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">06. 개인정보의 파기절차 및 방법</h2>
          <p>
            회사는 개인정보의 처리 목적 달성, 보유기간이 만료된 경우 등 개인정보가 불필요하게 된 때에는 지체없이 해당 개인정보를 파기합니다.
          </p>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">07. 개인정보 관리책임자</h2>
          <p>
            회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보 관리책임자를 지정하고 있습니다.
          </p>
          <table class="table-auto">
            <colgroup>
              <col width="150px" />
              <col width="auto" />
            </colgroup>
            <tbody>
              <tr>
                <td>개인정보 보호책임자</td>
                <td>대표이사</td>
              </tr>
              <tr>
                <td colspan="2">개인정보보호 담당부서</td>
              </tr>
              <tr>
                <td>부서명</td>
                <td>커뮤니케이션팀</td>
              </tr>
              <tr>
                <td>담당자</td>
                <td>김미소</td>
              </tr>
              <tr>
                <td>연락처</td>
                <td>(전화) <a href="tel:+02-6270-6902">02-6270-6902</a>, <a href="mailto:Communication@sampyo.co.kr">Communication@sampyo.co.kr</a></td>
              </tr>
            </tbody>
          </table>
          <p>
            이용자는 회사의 서비스를 이용하며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 고객의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다.
          </p>
        </div>
        <div class="mb-[40px]">
          <h2 class="!text-[18px] !mb-[30px] font-bold">08. 기타</h2>
          <p>
            개인정보정책은 본 사이트 및 회사의 웹사이트에 관한 것입니다. 본 사이트로 링크된 다른 회사의 개인정보취급방침은 별도로 확인하시기 바랍니다.
          </p>
          <div>
            공고일자 : <time datetime="2021-11-24">2021년 11월 24일</time><br/>
            시행일자 : <time datetime="2021-11-24">2021년 11월 24일</time>
          </div>
        </div>
      </div>
    </section>
  </div>
  </main>
@endsection