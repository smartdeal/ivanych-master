
<?php if ('' !== get_post()->post_content): ?>
    <div class="content__body">
        <div class="content__txt b-content-more" itemprop="articleBody">
            <?php the_content(); ?>
            <a href="#" class="btn_content-more js-btn-content-more" data-text="Скрыть">Подробнее</a>
        </div>
    </div>            
<?php endif ?>        

<div class="btns-wrap_service content-block">
    <a href="#" class="btn btn_service">Стоимость</a>
    <a href="#" class="btn_c2 btn_service">Заказать</a>
</div>

<?php echo get_gallery('Примеры выполненных работ'); ?>

<?php $bullets = get_field('bullet-items',448); ?>
<?php if ($bullets): ?>
    <div class="b-bullet b-bullet_benefits content-block">
        <div class="title-line"><span>Преимущества срочной печати</span></div>
        <div class="b-bullet__body">
            <div class="b-bullet__items js-slick js-about-worth">
                <?php foreach ($bullets as $key => $value): ?>
                    <div class="b-bullet__item b-bullet__item_<?php echo $key+1 ?>">
                        <div class="b-bullet__img-wrap">
                            <div class="b-bullet__img"></div>
                        </div>
                        <div class="b-bullet__txt"><?php echo $value['desc'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>                    
        </div>
    </div>
<?php endif ?>               

<?php $content = get_field('content_block_2'); ?>
<?php if ($content): ?>
    <div class="content-block content-block_service"><?php echo $content ?></div>
<?php endif; ?>

<?php $price = get_field('price'); ?>
<?php $price_title = get_field('price_title'); ?>
<?php if ($price && is_array($price)): ?>
    <div class="b-accord b-accord_price-service content-block">
        <?php if ($price_title): ?>
            <div class="b-accord__caption"><?php echo $price_title ?></div>
        <?php endif ?>   
        <div class="b-accord__items">
            <?php foreach ($price as $key => $value): ?>
                <div class="b-accord__item">
                    <div class="b-accord__header">
                        <div class="b-accord__title"><?php echo $value['caption'] ?></div>
                        <div class="b-accord__title-btns">
                            <a href="#" class="btn-accordeon-more js-btn-accordeon-more"></a>
                        </div>                                
                    </div>
                    <div class="b-accord__desc"><?php echo $value['table'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif ?>   

<?php $order_form = get_field('contact-form'); ?>
<?php if ($order_form): ?>
    <div class="b-form b-form_service">
        <div class="b-form__title title-line title-line_blue"><span><?php echo get_the_title($order_form) ?></span></div>
        <?php echo do_shortcode( '[contact-form-7 id="'.$order_form.'"]' ); ?>
    </div>
<?php endif; ?>

<?php $content = get_field('content_block_3'); ?>
<?php if ($content): ?>
    <div class="content-block content-block_service"><?php echo $content ?></div>
<?php endif; ?>    