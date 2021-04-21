<?php
/**
 * Componente text
 */

class iframe extends base_component implements components_interface {

	public function make_iframe() : string {
		$html = '';

		ob_start();
		?>
		<!--<script type="module" src="https://unpkg.com/x-frame-bypass"></script>-->
		<iframe is="x-frame-bypass" src="<?=$this->cfg( 'contenido', 'url' )?>" class="w-100 h-100"></iframe>
		<?php

		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}

	public function gen_content( ) : string {		
		return $this -> make_iframe();
	}
}