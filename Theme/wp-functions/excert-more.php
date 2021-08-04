<?php

/**
 * more 더보기 관련 텍스트 변경
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

function custom_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');
