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

