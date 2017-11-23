<?php 

function get_portfolio($posts_per_page = -1) {
    $arrPortfolio_tax = array();
    $arrPortfolio_tax_one = array();
    $out = '';
    $out_menu = '';
    $portfolio_full = false;
    if ($posts_per_page == -1) $portfolio_full = true;
    if ($portfolio_full) {
        $class_grid = ' portfolio_all js-portfolio-grid'; 
        $class_grid_item = ' portfolio__item_all';
    }
    else {
        $class_grid = ''; 
        $class_grid_item = ''; 
    }
    $arg =  array(
        'orderby'      => 'menu_order',
        'order'        => 'ASC',
        'posts_per_page' => $posts_per_page,
        'post_type' => 'portfolio',
        'post_status' => 'publish',
    );
    $query = new WP_Query($arg);
    if ($query->have_posts() ):
        $out .= '<div class="portfolio'.$class_grid.'">';
        while ( $query->have_posts() ): 
            $query->the_post();
            if (!$folio_logo_color = get_field('folio_logo_color'))
                $folio_logo_color = "#fff";
            $folio_logo_bg = '';
            if ($arrFolio_logo_bg = get_field('folio_logo_bg'))
                $folio_logo_bg = ' url('.$arrFolio_logo_bg['sizes']['medium'].') center no-repeat; background-size: cover';
            $port_tax = get_field('folio_type',get_the_ID());
            $class_tax = '';
            if ($port_tax) {
                foreach ($port_tax as $key => $value) {
                    $class_tax .= ' portfolio-tax-'.$value->slug;
                    $arrPortfolio_tax_one['id'] =   $value->term_id;
                    $arrPortfolio_tax_one['name'] = $value->name;
                    $arrPortfolio_tax_one['slug'] = $value->slug;
                    if (!in_array($arrPortfolio_tax_one, $arrPortfolio_tax)) {
                        $arrPortfolio_tax[] = $arrPortfolio_tax_one;
                    }
                }
            }
            $out .= '<div class="portfolio__item'.$class_grid_item.$class_tax.'" data-aload style="background:'.$folio_logo_color.$folio_logo_bg.'">';
            $out .= '<a href="'.get_the_permalink().'" class="portfolio__link">';
            $out .= '<div class="portfolio__caption">'.get_the_title().'</div>';
            if (has_post_thumbnail())
                $out .= '<img src="'.wp_get_attachment_image_url(get_post_thumbnail_id(),'medium').'" alt="'.get_the_title().'" class="portfolio__img">';
            $out .= '</a>';
            $out .= '</div>';
        endwhile;
        $arrTmp=array();
        foreach($arrPortfolio_tax as $key=>$arr){
            $arrTmp[$key]=$arr['id'];
        }
        array_multisort( $arrTmp, SORT_NUMERIC, $arrPortfolio_tax); // сортирует Таксиномию по ИД
        $out .= '</div>';
        if ($portfolio_full) {
            $out_menu .= '<div class="portfolio-filter js-portfolio-filter">';
            $out_menu .= '<div class="portfolio-filter__btn js-portfolio-filter-btn"><span></span><span></span><span></span></div>';
            $out_menu .= '<div class="portfolio-menu">';
            $out_menu .= '<a href="#" class="portfolio-menu__link js-portfolio-btn" data-filter=".portfolio__item">Все работы</a>';
            foreach ($arrPortfolio_tax as $key => $value) {
                $out_menu .= '<a href="#" class="portfolio-menu__link js-portfolio-btn" data-filter=".portfolio-tax-'.$value['slug'].'">'.$value['name'].'</a>';
            }
            $out_menu .= '</div>';
            $out_menu .= '</div>';
        }
        $out = '<div class="portfolio__wrapper">'.$out_menu.$out.'</div>';
    endif;
    wp_reset_postdata();
    echo $out;
}

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
            $out .= '<div class="b-news__item"><a class="b-news__link" href="#" title="'.get_the_title().'">';
            if (has_post_thumbnail()) $img_src = wp_get_attachment_image_url(get_post_thumbnail_id(),'medium');
                else $img_src = get_template_directory_uri().'/img/placeholder.jpg';
            $out .= '<div class="b-news__img" style="background-image:url('.$img_src.');"></div>';
            $out .= '<div class="b-news__body"><div class="b-news__title">'.get_the_title().'</div><div class="b-news__txt">'.get_the_excerpt().'</div></div>';
            $out .= '<div class="b-news__btn_more btn">Подробнее</div>';
            $out .= '</a></div>';
        endwhile;
        $out .= '</div></div></div>';
    endif;
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
            $out .= '<div class="b-news__item"><a class="b-news__link" href="#" title="'.get_the_title().'">';
            if (has_post_thumbnail()) $img_src = wp_get_attachment_image_url(get_post_thumbnail_id(),'medium');
                else $img_src = get_template_directory_uri().'/img/placeholder.jpg';
            $out .= '<div class="b-news__img" style="background-image:url('.$img_src.');"></div>';
            $out .= '<div class="b-news__body"><div class="b-news__title">'.get_the_title().'</div><div class="b-news__txt">'.get_the_excerpt().'</div></div>';
            $out .= '</a></div>';
        endwhile;
        $out .= '<a class="b-news__btn_more btn" href="'.home_url().'">Все новости</a></div>';
    endif;
    echo $out;
}

function the_custom_title(){
    $title = get_field('page_title');
    if (!$title) $title = get_the_title();
    echo $title;
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

function the_our_production(){
    $out = '';
    $managers = get_field('production-imgs',159);
    if ($managers): 
        $out .= '<div class="b-our-production content-block">';
        $out .= '<div class="title-line title-line_blue"><span>Наше производство</span></div>';
        $out .= '<div class="b-our-production__body">';
        $out .= '<div class="b-slider-big js-slick js-slider-production">';
        foreach ($managers as $key => $value):
            $out .= '<div class="b-slider-big__item"><div class="b-slider-big__img" style="background-image:url('.$value['sizes']['large'].')"></div></div>';
        endforeach;
        $out .= '</div>';
        $out .= '<div class="b-slider-thumb__wrap"><div class="b-slider-thumb js-slick js-slider-production-thumb">';
        foreach ($managers as $key => $value):
            $out .= '<div class="b-slider-thumb__item"><div class="b-slider-thumb__img" style="background-image:url('.$value['sizes']['thumbnail'].')"></div></div>';
        endforeach;
        $out .= '</div></div>';
        $out .= '</div></div>';
        echo $out;
    endif;
}