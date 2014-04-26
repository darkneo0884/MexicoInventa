<?php
    class utilities {
    	protected $_route;
		
    	public function routes($BASE_URL){
    		
			$_layoutParams = array(
			'ruta_css' => $BASE_URL .  '/css/',
			'ruta_img' => $BASE_URL .  '/img/',
			'ruta_js' =>  $BASE_URL .  '/js/'
		);
		}
    }
?>