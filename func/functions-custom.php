<?php 

function the_footer_useful(){
    $cat_slug = 'useful';
    $cat_name = get_category_by_slug($cat_slug)->cat_name; 
    $out = '';
    $arg =  array(
        'orderby'      => 'rand',
        // 'orderby'      => 'menu_order',
        // 'order'        => 'ASC',
        'posts_per_page' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $cat_slug
    );
    $query = new WP_Query($arg);
    if ($query->have_posts() ):
        $out .= '<div class="footer-news"><div class="container">';
        $out .= '<div class="footer-news__title block-title">'.$cat_name.'</div>';
        $out .= '<div class="b-news b-news_footer js-slick js-news-footer">';
        while ( $query->have_posts() ): 
            $query->the_post();    
            $out .= '<div class="b-news__item"><a class="b-news__link" href="'.get_the_permalink().'" title="'.get_the_title().'">';
            if (has_post_thumbnail()) $img_src = wp_get_attachment_image_url(get_post_thumbnail_id(),'medium');
                else $img_src = get_template_directory_uri().'/img/placeholder.jpg';
            $out .= '<div class="b-news__img" style="background-image:url('.$img_src.');"></div>';
            $out .= '<div class="b-news__body"><div class="b-news__title">'.get_the_title().'</div><div class="b-news__txt">'.get_the_excerpt().'</div></div>';
            $out .= '<div class="b-news__btn_more btn">Подробнее</div>';
            $out .= '</a></div>';
        endwhile;
        $out .= '</div></div></div>';
    endif;
    wp_reset_postdata();
    echo $out;
}

function the_last_news($num){
    $out = '';
    $arg =  array(
        'posts_per_page' => $num,
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'news'
    );
    $query = new WP_Query($arg);
    if ($query->have_posts() ):
        $out .= '<div class="b-news">';
        while ( $query->have_posts() ): 
            $query->the_post();    
            $out .= '<div class="b-news__item"><a class="b-news__link" href="'.get_the_permalink().'" title="'.get_the_title().'">';
            if (has_post_thumbnail()) $img_src = wp_get_attachment_image_url(get_post_thumbnail_id(),'medium');
                else $img_src = get_template_directory_uri().'/img/placeholder.jpg';
            $out .= '<div class="b-news__img" style="background-image:url('.$img_src.');"></div>';
            $out .= '<div class="b-news__body"><div class="b-news__title">'.get_the_title().'</div><div class="b-news__txt">'.get_the_excerpt().'</div></div>';
            $out .= '</a></div>';
        endwhile;
        $out .= '<a class="b-news__btn_more btn" href="'.home_url().'">Все новости</a></div>';
    endif;
    wp_reset_postdata();
    echo $out;
}

function get_custom_title(){
    $title = get_field('page_title');
    if (!$title) $title = get_the_title();
    return $title;
}

function the_custom_title(){
    echo get_custom_title();
}

function the_managers(){
    $out = '';
    $managers = get_field('managers',135);
    if ($managers): 
        $out .= '<div class="b-managers content-block">';
        $out .= '<div class="title-line title-line_blue"><span>Отдел по работе с клиентами:</span></div>';
        $out .= '<div class="b-managers__body">';
        $out .= '<div class="b-managers__items js-slick js-slider-managers">';
        foreach ($managers as $key => $value): 
            $out .= '<div class="b-managers__item"><div class="b-managers__inner"><div class="b-managers__img-wrap">';
            if ($value['img']) $img_src = $value['img']['sizes']['medium'];
                else $img_src = get_template_directory_uri().'/img/placeholder-man.jpg';
            $out .= '<div class="b-managers__img" style="background-image:url('.$img_src.')"></div></div>';
            $out .= '<div class="b-managers__name">'.$value['name'].'<span>доб '.$value['dob'].'</span></div>';
            $out .= '<a class="b-managers__email" href="mailto:'.$value['email'].'">'.$value['email'].'</a></div></div>';
        endforeach;
        $out .= '</div></div></div>';
        echo $out;
    endif;
}

$slider_with_thumb_count = 0;
function the_slider_with_thumb($imgs, $title = ''){
    global $slider_with_thumb_count;
    $out = '';
    if (is_array($imgs)): 
        $out .= '<div class="b-slider-with-thumb">';
        if ($title) {
            $out .= '<div class="b-slider-with-thumb__title">'.$title.'</div>';
        }
        $out .= '<div class="b-slider-with-thumb__body">';
        $out .= '<div class="b-slider-big js-slick js-slider-big js-slider-big-'.$slider_with_thumb_count.'">';
        foreach ($imgs as $key => $value):
            $out .= '<div class="b-slider-big__item"><div class="b-slider-big__img" style="background-image:url('.$value['sizes']['large'].')"></div></div>';
        endforeach;
        $out .= '</div>';
        $out .= '<div class="b-slider-thumb__wrap"><div class="b-slider-thumb js-slick js-slider-big-thumb js-slider-big-thumb-'.$slider_with_thumb_count.'">';
        foreach ($imgs as $key => $value):
            $out .= '<div class="b-slider-thumb__item"><div class="b-slider-thumb__img" style="background-image:url('.$value['sizes']['thumbnail'].')"></div></div>';
        endforeach;
        $out .= '</div></div>';
        $out .= '</div></div>';
        echo $out;
        $slider_with_thumb_count++;
    endif;
}

function the_form_func($id = 0) {
    $out = '<div class="b-form">';
    $out .= '<div class="b-form__title title-line title-line_blue"><span>'.get_the_title($id).'</span></div>';
    $out .= do_shortcode( '[contact-form-7 id="'.$id.'"]' );
    $out .= '</div>';
    echo $out;
}


function the_contact_form() {
    $clients_form = get_field('contact-form'); 
    if ($clients_form) the_form_func($clients_form);
}

function the_contact_form_vacancy() {
    $clients_form = get_field('contact-form'); 
    if ($clients_form) {
        $out = '<div class="b-form b-form_vacancy">';
        $out .= do_shortcode( '[contact-form-7 id="'.$clients_form.'"]' );
        $out .= '</div>';
        echo $out;
    }
}

function the_relative($post_type = 'post' , $num = 4) {
    $out = '';
    $arg =  array(
        'posts_per_page' => $num,
        'post_type' => $post_type,
        'post_status' => 'publish',
    );
    $query = new WP_Query($arg);
    if ($query->have_posts() ):
        $out .= '<div class="b-grid__items js-slider-grid">';
        while ( $query->have_posts() ): 
            $query->the_post();    
            $out .= '<div class="b-grid-item"><a class="b-grid-item__link" href="'.get_the_permalink().'" title="'.get_the_title().'">';
            $out .= '<div class="b-grid-item__inner">';
            if (has_post_thumbnail()) $img_src = wp_get_attachment_image_url(get_post_thumbnail_id(),'medium');
                else $img_src = get_template_directory_uri().'/img/placeholder.jpg';
            $out .= '<div class="b-grid-item__img" style="background-image:url('.$img_src.');"></div>';
            $out .= '<div class="b-grid-item__caption">'.get_the_title().'</div><div class="b-grid-item__btn btn_c2" href="#">Подробнее</div>';
            $out .= '</div>';
            $out .= '</a></div>';
        endwhile;
        $out .= '</div>';
    endif;    
    wp_reset_postdata();
    echo $out;
}

function get_gallery($title =''){
    $out = '';
    $examples = get_field('imgs'); 
    if ($examples): 
        $out .= '<div class="b-gallery-imgs b-gallery-imgs_service content-block">';
        if ($title)
            $out .= '<div class="b-gallery-imgs__title title-line"><span>'.$title.'</span></div>';
        $out .= '<div class="b-gallery-imgs__items js-slick js-slider-service-examples">';
        foreach ($examples as $key => $value):
            $out .= '<div class="b-gallery-imgs__item js-magnific-popup">';
            $out .= '<a href="'.$value['sizes']['large'].'" class="b-gallery-imgs__img" data-aload style="background-image:url('.$value['sizes']['medium'].')"></a>';
            $out .= '</div>';
        endforeach;
        $out .= '</div></div>';
    endif;
    return $out;
}