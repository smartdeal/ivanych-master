<?php get_header(); ?>

                <?php if (have_posts()) { 
                    while (have_posts()) { the_post();
                        $post_title = get_field('page_title');
                        if (!$post_title) $post_title = get_the_title();
                        $post_content = get_the_content();
                    ?>			
			    <div class="b-grid b-grid_products">
			    	<?php if ($post_title): ?>
				        <div class="b-grid__title"><?php echo $post_title; ?></div>
			    	<?php endif; ?>
			        <div class="b-grid__body">
			            <div class="b-grid__items">
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn" href="#">Подробнее</a>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="b-grid b-grid_services">
			        <div class="b-grid__title">Товары под нанесение логотипов</div>
			        <div class="b-grid__body">
			            <div class="b-grid__items">
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			                <div class="b-grid-item">
			                    <div class="b-grid-item__inner">
			                        <div class="b-grid-item__img"></div>
			                        <div class="b-grid-item__caption">Печать на футболках</div><a class="b-grid-item__btn btn_c2" href="#">Подробнее</a>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="b-partners-logo">
			        <div class="b-partners-logo__body">
			            <div class="b-partners-logo__items js-partners-logo">
			                <div class="b-partners-logo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tmp/logo-1.png"></div>
			                <div class="b-partners-logo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tmp/logo-2.png"></div>
			                <div class="b-partners-logo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tmp/logo-3.png"></div>
			                <div class="b-partners-logo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tmp/logo-4.png"></div>
			                <div class="b-partners-logo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tmp/logo-5.png"></div>
			                <div class="b-partners-logo__item"><img src="<?php echo get_template_directory_uri(); ?>/img/tmp/logo-6.png"></div>
			            </div>
			            <div class="b-partners-logo__arrow-prev"></div>
			            <div class="b-partners-logo__arrow-next"></div>
			        </div>
			    </div>
			    <?php if ($post_content): ?>
				    <div class="b-content"><?php echo $post_content; ?></div>
			    <?php endif; ?>
			<?php }} ?>

<?php get_footer(); ?>