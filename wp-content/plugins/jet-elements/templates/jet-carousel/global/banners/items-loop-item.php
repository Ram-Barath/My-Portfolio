<?php
	/**
	 * Loop item template
	 */
	
	$target = $this->_loop_item( array( 'item_link_target' ), ' target="%s"' );
	$rel = $this->_loop_item( array( 'item_link_rel' ), ' rel="%s"' );
	
	$item_settings = $this->_processed_item;
	
	$content_type = ! empty( $item_settings['item_content_type'] ) ? $item_settings['item_content_type'] : 'default';

?>
<div class="jet-carousel__item">
	<div class="jet-carousel__item-inner">
	<figure class="jet-banner jet-effect-<?php echo esc_attr( $this->get_settings_for_display( 'animation_effect' ) ); ?>"><?php
			if ($item_settings['item_content_type'] == 'default') {
				echo $this->_loop_item( array( 'item_link' ), '<a href="%s" class="jet-banner__link"' . $target . $rel . '>' );
			}
			echo '<div class="jet-banner__overlay"></div>';
			echo $this->get_advanced_carousel_img( 'jet-banner__img' );
			echo '<figcaption class="jet-banner__content">';
				echo '<div class="jet-banner__content-wrap">';
					switch ( $content_type ) {
						case 'default':
							echo $this->_loop_item( array( 'item_title' ), '<' . $title_tag . ' class="jet-banner__title">%s</' . $title_tag . '>' );
							echo $this->_loop_item( array( 'item_text' ), '<div class="jet-banner__text">%s</div>' );
							break;
						case 'template':
							echo $this->_loop_item_template_content();
							break;
					}
				echo '</div>';
			echo '</figcaption>';
		
		echo $this->_loop_item( array( 'item_link' ), '</a>' );
	?></figure>
	</div>
</div>
