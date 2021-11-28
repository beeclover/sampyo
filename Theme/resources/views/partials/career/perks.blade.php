<main class="page__layout">
  <div class="container xl:max-w-screen-xl mx-auto">
    <div class="page__level-title mb-4">
      복리후생
    </div>
    <p>
      삼표는 직원들의 안정적이고 풍요로운 생활을 보장하기 위해 다양한 복리후생 제도를 시행하고 있습니다.
    </p>
    <div class="pb-[30px] sm:pb-20"></div>
    @php
      $benefits = [
        [
          "title" => "렌트 차량 지원",
          "content" => "렌트 차량을 지원하여 차량 구입에 따른 경제적 부담을 덜어 드립니다. (영업직군 등)"
        ],
        [
          "title" => "본인 및 자녀 학자금 지원",
          "content" => "본인의 자기계발과 역량발전을 위하여 대학원 학자금을 지원합니다. 자녀교육에 따른 경제적 부담을 덜어주기 위하여 중학생 이상 자녀의 학자금을 지원합니다."
        ],
        [
          "title" => "업무 보조비 지원",
          "content" => "원활한 업무활동을 위해 유류비, 통신비, 차량 유지비, 교통비 등을 지원합니다."
        ],
        [
          "title" => "리프레시 지원",
          "content" => "하계 휴가(비)/동계 휴가 지급. 리프레시(Refresh) 휴가 제도와 콘도미디엄 지원을 통해 몸과 마음의 재충전을 돕고 있습니다."
        ],
        [
          "title" => "기숙사 운영",
          "content" => "거주지로부터 멀리 떨어져 근무하는 직원에게 숙소를 지원합니다. (지방에 한함)"
        ],
        [
          "title" => "건강검진",
          "content" => "임직원의 건강관리를 위해, 매년 정기적인 건강검진을 실시하고 있습니다."
        ],
        [
          "title" => "동호회 지원",
          "content" => "다양한 동호회 활동을 통한 여가 선용 및 친목도모를 지원하고 있습니다."
        ],
        [
          "title" => "퇴직연금제도",
          "content" => "직원의 노후 및 생활보장을 위해 퇴직연금제도를 도입, 운영하고 있습니다."
        ],
        [
          "title" => "경조사 지원",
          "content" => "경조사 발생시 직원과 함께 기쁨과 슬픔을 나누기 위해 경조휴가를 부여하고 경조금, 상조용품, 경조화환을 지원합니다."
        ],
        [
          "title" => "복지포인트 지급",
          "content" => "임직원들이 필요한 것들을 구매할 수 있도록 복지포인트를 지급합니다."
        ],
      ]
    @endphp
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-16 gap-x-12">
      @foreach ($benefits as $key => $item)
        <div class="flex gap-x-7 m_sm:flex-wrap">
          @include('partials.img', ['ex' => 'png', 'name' => 'career-perks-' . $key, 'class' => 'w-[112px] h-[112px]'])
          <div class="prose py-1.5">
            <h3 class="text-lg">{{ $item['title'] }}</h3>
            <p>{{ $item['content'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</main>