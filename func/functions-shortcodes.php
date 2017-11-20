<?php 

function get_tel_func( $atts ){
    if ($main_tel = get_field('option_tel','option')) $out = $main_tel;
        else $out = '';
    return $out;
}
add_shortcode('get_tel', 'get_tel_func');

function get_email_func( $atts ){
    if ($main_email = get_field('option_email','option')) $out = $main_email;
        else $out = '';
    return $out;
}
add_shortcode('get_email', 'get_email_func');

function get_service_result_func( $atts ){
    $out = '';
    if (is_array($atts) && array_key_exists('title', $atts) && $atts['title'] != '') $title = $atts['title'];
        else $title = 'Результаты наших клиентов';

    $arg =  array(
        'orderby'       => 'menu_order',
        'tag_id'        => 7, // Категория "Продвижение"
        'order'         => 'ASC',
        'posts_per_page'=> -1,
        'post_type'     => 'portfolio',
        'post_status'   => 'publish',
    );
    $query = new WP_Query($arg);
    if ($query->have_posts() ):
        $out .= '<div class="b-result">';
        $out .= '<div class="b-result__title">'.$title.'</div><div class="b-result__body js-result-slider">';
        while ( $query->have_posts() ): 
            $query->the_post();
            if (!$folio_logo_color = get_field('folio_logo_color'))
                $folio_logo_color = "#fff";
            $folio_logo_bg = '';
            if ($arrFolio_logo_bg = get_field('folio_logo_bg'))
                $folio_logo_bg = ' url('.$arrFolio_logo_bg['sizes']['medium'].') center no-repeat; background-size: cover';

            $folio_res_check = get_field('folio_res_check');
            if (!is_null($folio_res_check) && $folio_res_check[0] == 'yes') continue;
            $out .= '<div class="b-result__item"><div class="b-result__top"><div class="b-result__desc">';
            $out .= '<div class="b-result__name">'.get_the_title().'</div>';
            if ($folio_res_desc = get_field('folio_res_desc'))
                $out .= '<div class="b-result__txt">'.$folio_res_desc.'</div>';
            $out .= '</div>';
            if ($folio_res_txt = get_field('folio_res_txt'))
                $out .= '<div class="b-result__middle">'.$folio_res_txt.'</div>';
            $out .= '<div class="b-result__graf">';

            $folio_request_before = get_field('folio_res_graf_before');
            $folio_request_after = get_field('folio_res_graf_after');
            
            if ($folio_request_before != '' && $folio_request_after != ''):
                $out .= '<div class="case-result__graf"><div class="case-result__chart"><div class="case-chart">';
                $digit_height_request_max = 100; // max height request's block
                $digit_request_max = max($folio_request_after, $folio_request_before); 
                $out .= '<div class="case-chart__before">';
                $out .= '<div class="case-chart__before-request" style="height:'.round($digit_height_request_max * $folio_request_before / $digit_request_max ).'px"></div>';
                $out .= '<div class="case-chart__after-request" style="height:'.round($digit_height_request_max * $folio_request_after / $digit_request_max ).'px"></div>';
                $out .= '</div></div></div>';
                $out .= '<div class="case-result__txt"><span class="case-result__caption">до</span><span class="case-result__caption">после</span></div>';
                $out .= '</div>';
            endif;

            if ($folio_res_graf =get_field('folio_res_graf'))
                $out .= '<div class="b-result__graf-txt">'.$folio_res_graf.'</div>';
            $out .= '</div>';
            $out .= '</div>';
            $out .= '<div class="b-result__bottom">';

            $out .= '<div class="b-result__pic" data-aload style="background:'.$folio_logo_color.$folio_logo_bg.'">';
            $out .= '<a href="'.get_the_permalink().'" class="b-result__link">';
            if (has_post_thumbnail())
                $out .= '<img src="'.wp_get_attachment_image_url(get_post_thumbnail_id(),'medium').'" alt="'.get_the_title().'" class="b-result__img">';
            $out .= '</a>';
            $out .= '</div>';

            $folio_stage_img = '';
            $folio_stage = get_field('folio_stage');
            if ($folio_stage):
                foreach ($folio_stage as $key => $value) {
                    if ($value['folio_stage_img'])
                        $folio_stage_img = $value['folio_stage_img']['sizes']['large'];
                }
            endif;

            if ($folio_stage_img)
                $out .= '<div class="b-result__res-img"><img data-aload="'.$folio_stage_img.'" alt=""></div>';

            $out .= '</div>';
            $out .= '</div>';
        endwhile;
        $out .= '</div></div>';
    endif;
    wp_reset_postdata();
    return $out;
}
add_shortcode('get_service_result', 'get_service_result_func');
