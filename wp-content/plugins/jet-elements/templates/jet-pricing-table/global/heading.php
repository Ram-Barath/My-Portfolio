<?php
/**
 * Pricing table heading template
 */
?>
<div class="pricing-table__heading">
	<?php $this->_icon( 'icon', '<div class="pricing-table__icon"><div class="pricing-table__icon-box"><span class="jet-elements-icon">%s</span></div></div>' ); ?>
	<?php $this->_html( 'title', '<h2 class="pricing-table__title">%s</h2>' ); ?>
	<?php $this->_html( 'subtitle', '<h4 class="pricing-table__subtitle">%s</h4>' ); ?>
</div>