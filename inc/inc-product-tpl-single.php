<?php 

get_form_product_param();

function get_form_product_param() {

    $product_price = array();
    $product_price_one = array();
    $product_imgs_color = array();
    for ($i=1; $i <= 2; $i++) { 
        $product_price_one['num'] = get_field('product_price_'.$i);
        $product_price_one['desc'] = sanitize_text_field(get_field('product_price_desc_'.$i));
        $product_price[] = $product_price_one;
    }
    for ($i=1; $i <= 16; $i++) {
        $product_imgs_color_one = get_field('product_color_'.$i);
        if ($product_imgs_color_one) $product_imgs_color[] = $product_imgs_color_one['sizes']['medium'];
            else $product_imgs_color[] = '';
    }
    echo '<script>var product_price = ', json_encode($product_price), ';</script>';
    echo '<script>var product_imgs_color = ', json_encode($product_imgs_color), ';</script>';
}
 ?>
<div class="f-ui-form f-ui-form_product js-form-ui js-form-product">
    <?php echo do_shortcode( '[contact-form-7 id="618" title="Форма заказ товара"]' ); ?>
</div>

<?php if ('' !== get_post()->post_content): ?>
    <div class="content__body">
        <div class="content__txt" itemprop="articleBody">
            <?php the_content(); ?>
        </div>
    </div>            
<?php endif ?>        
