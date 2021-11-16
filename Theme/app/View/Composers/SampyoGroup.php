<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SampyoGroup extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-sampyo',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'fixedMenu' => $this->fixedMenu(),
          'history' => $this->history(),
        ];
    }

    public function sort_terms_hierarchically(array &$posts, array &$into, $parentId = 0, $custom = null)
    {
        foreach ($posts as $i => $post) {
            $post->permalink = get_the_permalink($post->ID);

            if ($post->post_parent == $parentId) {
                if ($custom) {
                    $post = $custom($post, $parentId);
                }
                
                if ($post) {
                    $into[$post->ID] = $post;
                }
                unset($posts[$i]);
            }
        }

        foreach ($into as $parentPost) {
            $parentPost->children = array();
            $this->sort_terms_hierarchically($posts, $parentPost->children, $parentPost->ID, $custom);
        }
    }

    public function fixedMenu()
    {
        $termsHierarchy = array();
        $posts = get_posts([
          'post_type' => 'sampyo',
          'hide_empty' => false,
          'numberposts' => 99,
        ]);
        $this->sort_terms_hierarchically($posts, $termsHierarchy);
        return $termsHierarchy;
    }

    public function history()
    {
        $history = array(
          "2020" => [
            0 => array(
              "date" => "2021 . 08",
              "title" => "삼표 2050 탄소제로 로드맵 발표",
            ),
            1 => array(
              "date" => "2020 . 11",
              "title" => "건설소재 업계 최초 웹․모바일 통합 주문 플랫폼 ‘스마트오더’ 도입",
            ),
            2 => array(
              "date" => "2020 . 11",
              "title" => "㈜삼표시멘트, 국내 최초 단일공장 기준 클링커 누적 생산량 3억 톤",
            ),
            3 => array(
              "date" => "2020 . 09",
              "title" => "㈜삼표산업, ‘레미콘제품 3개 규격’ 저탄소제품인증 획득",
            ),
            4 => array(
              "date" => "2020 . 03",
              "title" => "㈜삼표산업, 현대엔지니어링과 3D프린팅 비정형 건축물 시공기술 공동 개발",
            ),
          ],
          "2010" => [
            0 => array(
              "date" => "2019 . 09",
              "title" => "㈜삼표시멘트, 국내 최초 ‘세계시멘트협회’ 가입"
            ),
            1 => array(
              "date" => "2018 . 12",
              "title" => "㈜삼표산업, 통합품질실험센터 업계 유일 국제공인시험기관 인정 획득"
            ),
            2 => array(
              "date" => "2017 . 01",
              "title" => "㈜삼표산업, 업계 최초 모르타르 자동출하시스템 및 모바일 & Web 주문서비스 구축"
            ),
            3 => array(
              "date" => "2015 . 09",
              "title" => "동양시멘트㈜, 삼표그룹사 계열사 편입 (現 ㈜삼표시멘트)"
            ),
            4 => array(
              "date" => "2013 . 10",
              "title" => "그룹 지주회사 체제 전환 (지주사 : ㈜삼표)"
            ),
            5 => array(
              "date" => "2011 . 04",
              "title" => "삼표이앤씨㈜, 세계 최초 초고강도(130MPa) PHC PILE 개발 성공"
            ),
          ],
          "2000" => [
            0 => array(
              "date" => "2007 . 04",
              "title" => "㈜삼표, 고성능 레미콘 브랜드 ‘블루콘’ 출시"
            ),
            1 => array(
              "date" => "2006 . 10",
              "title" => "故정인욱 명예회장 ‘한국을 일으킨 엔지니어 60인’ 선정"
            ),
            2 => array(
              "date" => "2004 . 07",
              "title" => "삼표그룹 CI 및 계열사 사명 변경"
            ),
            3 => array(
              "date" => "2000 . 12",
              "title" => "삼표정보시스템㈜ 설립 (現 삼표 IT사업부문)"
            ),
            4 => array(
              "date" => "2000 . 11",
              "title" => "철도기술연구소 설립"
            ),
            5 => array(
              "date" => "2000 . 03",
              "title" => "삼표산업㈜, 정도원 대표이사 취임"
            ),
          ],
          "1990" => [
            0 => array(
              "date" => "1999 . 12",
              "title" => "한국사이버물류주식회사 설립 (現 삼표물류사업부문)"
            ),
            1 => array(
              "date" => "1994 . 07",
              "title" => "삼표궤도㈜ 설립 (現 삼표레일웨이㈜)"
            ),
            2 => array(
              "date" => "1993 . 07",
              "title" => "콘크리트 기술연구소 설립"
            ),
            3 => array(
              "date" => "1993 . 02",
              "title" => "(재)강원산업장학재단 (現 정인욱학술장학재단) 설립"
            ),
            4 => array(
              "date" => "1992 . 08",
              "title" => "철도/궤도 공사업 면허 취득"
            ),
            5 => array(
              "date" => "1992 . 02",
              "title" => "고속철도분기기 생산업체 지정"
            ),
          ],
          "1980" => [
            0 => array(
              "date" => "1986 . 04",
              "title" => "플라이애시(Fly-ash) 사업 개시 (분체사업 개시)"
            ),
            1 => array(
              "date" => "1980 . 03",
              "title" => "강원산업㈜, 철도사업부 신설 (철도사업 개시)"
            ),
          ],
          "1970" => [
            0 => array(
              "date" => "1977 . 07",
              "title" => "성수, 풍납 레미콘공장 가동 (레미콘사업 개시) "
            ),
            1 => array(
              "date" => "1976 . 02",
              "title" => "골재채취판매업 허가 취득 (골재사업 개시) "
            ),
            2 => array(
              "date" => "1974 . 07",
              "title" => "㈜한국양회 공장 인수 (콘크리트사업 개시)"
            ),
            3 => array(
              "date" => "1974 . 07",
              "title" => "삼강운수㈜, 삼표산업㈜ 으로 상호변경"
            ),
          ],
          "1960" => [
            0 => array(
              "date" => "1966 . 12",
              "title" => "삼표그룹의 전신인 삼강운수㈜ 설립 (연탄운송사업, 골재운송사업)"
            ),
          ],
        );

        return $history;
    }
}
