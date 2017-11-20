<?php 
    $why = get_field('block-why',17);
    $why_title = get_field('block-why-title',17);
?>
<?php if ($why): ?>

<div class="b-why-choose">
    <div class="container">
        <div class="b-why-choose__title block-title"><?php echo $why_title ?></div>
        <div class="b-why-choose__body">
            <div class="b-why-choose__items js-slick js-why-choose">
                <?php foreach ($why as $key => $value): ?>
                    <div class="b-why-choose__item b-why-choose__item_<?php echo $key+1 ?>">
                        <div class="b-why-choose__caption js-why-choose-caption"><span><?php echo $value['block-why-caption'] ?></span></div>
                        <div class="b-why-choose__img-wrap">
                            <div class="b-why-choose__num"><?php echo $key+1 ?></div>
                            <div class="b-why-choose__img"></div>
                        </div>
                        <div class="b-why-choose__txt"><?php echo $value['block-why-desc'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>