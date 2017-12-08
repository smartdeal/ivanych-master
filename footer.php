			</div>
		</div>
	</div>
</div>
<?php if (is_front_page()) { get_template_part( 'inc/inc-why-we' ); } ?>
</div> <!-- main-layout -->
<div class="footer">
	<?php the_footer_useful(); // Вывести статьи Полезной информации ?>
	<div class="footer-form">
		<div class="container">
			<div class="b-form b-form_footer">
				<div class="b-form__form">
					<div class="b-form__title">остались вопросы?</div>
					<?php echo do_shortcode( '[contact-form-7 id="707" title="Форма футер"]' ) ?>
				</div>
				<div class="b-form__txt">Свяжитесь с нами или оставьте свой номер для звонка специалиста<a class="b-form__tel" hre="<?php the_tel_link(do_shortcode( '[get_tel]' )) ?>"><?php echo do_shortcode( '[get_tel]' ) ?></a></div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__item footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="" class="footer-logo_img">
					<div class="footer-logo__txt">© 2017 Все права защищены</div>
				</div>
				<div class="footer__item footer__menus">
					<div class="footer__menu footer__menu_1">
						<?php 
		                    wp_nav_menu( array(
		                        'menu' 				=> 8,
		                        'depth'             => 1,
		                        'container'         => 'ul',
		                        'menu_class'        => 'foot-menu-1',
		                        'container_class'   => 'cont',
		                        'container_id'      => '',
		                    ));
						?>					
					</div>
					<div class="footer__menu footer__menu_2">
						<?php 
		                    wp_nav_menu( array(
		                        'menu' 				=> 9,
		                        'depth'             => 1,
		                        'container'         => 'ul',
		                        'menu_class'        => 'foot-menu-2',
		                        'container_class'   => 'cont',
		                        'container_id'      => '',
		                    ));
						?>									
					</div>
					<div class="footer__menu footer__menu_1">
						<div class="footer__title footer__title_menu">Клиентам</div>
						<?php 
		                    wp_nav_menu( array(
		                        'menu' 				=> 10,
		                        'depth'             => 1,
		                        'container'         => 'ul',
		                        'menu_class'        => 'foot-menu-3',
		                        'container_class'   => 'cont',
		                        'container_id'      => '',
		                    ));
						?>									
					</div>
				</div>
				<div class="footer__item footer__pay">
					<div class="footer__title footer__title_pay">Способы оплаты:</div>
					<div class="footer__visa"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-footer-pay.png" alt=""></div>
					<div class="footer__title footer__title_pay">Расскажите о нас:</div>
					<div class="footer__share"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="popup-form_feedback" class="popup-form mfp-hide">
	<div class="b-form">
		<div class="b-form__title">Закать звонок</div>
		<?php echo do_shortcode( '[contact-form-7 id="625" title="Заказать обратный звонок"]' ) ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php the_field('option_code_bottom','option'); ?>
<script>
	var home_url="<?php echo home_url(); ?>";
	var theme_url="<?php echo get_template_directory_uri(); ?>";
</script>
</body>
</html>
