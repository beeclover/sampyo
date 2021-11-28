<main class="career__page page__layout">
<div class="container xl:max-w-screen-xl mx-auto">
  <div class="page__level-title mb-4">
    인재상
  </div>
  <p>
    삼표그룹의 핵심가치를 실천하는 융합형 인재, 전문형 인재, 도전형 인재를 지향합니다.
  </p>
  <div class="pb-[30px] sm:pb-20"></div>
  <div class="relative">
    <div id="mindsetOriginal" class="grid grid-cols-3 gap-x-[18px] invisible md:visible absolute left-0 top-0">
      <div id="cardWrap">
        <div class="card__s1 gap-9 max:lg:mx-auto">
          <div class="card__s1-thumbnail_ max:lg:flex max:lg:justify-center">
              @include('partials.img', ['ex' => 'png', 'name' => 'career-mindset-1'])
          </div>
          <div class="card__s1-body lg:items-start text-center lg:text-left gap-5">
            <div class="card__s1-title text-xl font-bold">
              융합형 인재<br/>
              (Synergy Creator)
            </div>
            <div class="card__s1-content">
              소통과 협력을 통해 새로운 가치를 창출하고 변화를 전략적으로 예측하는 미래지향적 가치관을 가진 사람
            </div>
          </div>
        </div>
      </div>
      <div id="cardWrap">
        <div class="card__s1 gap-9 max:lg:mx-auto">
          <div class="card__s1-thumbnail_ max:lg:flex max:lg:justify-center">
              @include('partials.img', ['ex' => 'png', 'name' => 'career-mindset-2'])
          </div>
          <div class="card__s1-body lg:items-start text-center lg:text-left gap-5">
            <div class="card__s1-title text-xl font-bold">
              전문형 인재 <br/>
              (Value Professional) 
            </div>
            <div class="card__s1-content">
              다양한 경험과 끊임없는 자기계발로 전문분야에서 가치 있는 성과를 만드는 역량과 능력을 갖춘 사람
            </div>
          </div>
        </div>
      </div>
      <div id="cardWrap">
        <div class="card__s1 gap-9 max:lg:mx-auto">
          <div class="card__s1-thumbnail_ max:lg:flex max:lg:justify-center">
              @include('partials.img', ['ex' => 'png', 'name' => 'career-mindset-3'])
          </div>
          <div class="card__s1-body lg:items-start text-center lg:text-left gap-5">
            <div class="card__s1-title text-xl font-bold">
              도전형 인재 <br/>
              (Proactive Challenger)
            </div>
            <div class="card__s1-content">
              열정과 끈기를 바탕으로 실패를 두려워하지 않고 목표를 위한 끊임없는 도전으로 조직을 선도하는 사람
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="mindsetSwiper" class="z-10 sm:z-0 md:invisible overflow-hidden">
      <div class="swiper-pagination s3 pagination__s1 static mt-7 pt-0.5"></div>
    </div>
  </div>
  <div class="mb-[70px] sm:mb-32"></div>
  <div class="page__level-title mb-4">
    핵심가치
  </div>
  <p>조직 내에서 바람직한 행동을 제시하는 기본 규범이며, 기업 구성원들이 공유하고 있는 가치관이자 신념으로서 기업이 지향하는 신념과 기준으로서 경영행위나 의사결정 방식을 결정하는 기능을 합니다.</p>
  <div class="mb-[30px] sm:mb-14"></div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-18 gap-y-[30px]">
    <div class="sm:col-span-2">
      <div class="card__house-root max:sm:mb-[30px]" data-label="지향가치">
        <div class="card__house bg-mistyLawn sm:mb-4">
          <div class="card__house-inner flex flex-col items-center p-8 sm:h-52">
            <div class="text-[16px] sm:text-2xl font-black">
              시너지
            </div>
            <div class="prose max-w-sm">
              <p>
                소통을 통해 서로의 강점을 살리고 약점을 보완하며, 협력함으로써 효과적이고 효율적인 성과를 창출해 나가는 가치
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-2.5 sm:gap-y-5">
        <div class="card__house bg-hospitalGreen text-white" style="--triangle: 50px">
          <div class="card__house-inner sm:h-52 flex flex-col items-center p-8">
            <div class="text-[16px] sm:text-2xl font-black">
              혁신
            </div>
            <div class="prose max-w-sm">
              <p>
                창의적이고, 열린 사고를 기반으로 새로운 체계를 만들어가는 가치
              </p>
            </div>
          </div>
        </div>
        <div class="card__house-root" data-label="행동가치" style="--triangle: 50px">
          <div class="card__house bg-hospitalGreen text-white max:sm:rootless" style="--triangle: 50px">
            <div class="card__house-inner sm:h-52 flex flex-col items-center p-8">
              <div class="text-[16px] sm:text-2xl font-black">
                전문성
              </div>
              <div class="prose max-w-sm">
                <p>
                  탄탄한 기본역량과 끊임없는 자기계발로 직무분야의 최고가 되고, 사업영역의 선도기업이 될 수 있는 가치
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-center p-8 bg-bermudagrass sm:h-52 text-white">
          <div class="text-[16px] sm:text-2xl font-black">
            도전정신
          </div>
          <div class="prose max-w-sm">
            <p>
              강한 열정과 추진력을 바탕으로 목표한 성과를 끈기있게 창출하는 가치
            </p>
          </div>
        </div>

        <div class="card__house-root rootless" data-label="기반가치">
          <div class="flex flex-col items-center p-8 bg-bermudagrass sm:h-52 text-white">
            <div class="text-[16px] sm:text-2xl font-black">
              윤리성
            </div>
            <div class="prose max-w-sm">
              <p>
                정직성을 바탕으로 조직의 원칙과 가치를 지키며, 모든 일을 투명하고 합리적으로 추진하는 가치
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pb-[70px] sm:pb-24"></div>
</div>
</main>