'Sneaker - WooVina Theme' => array(
	'categories'        => array('PRO'),
	'demo_class'        => 'pro-demo',
	'xml_file'     		=> $url . 'pro-demos/demo_19_contents.xml',
	'theme_settings' 	=> $url . 'pro-demos/demo_19_customizer.json',
	'widgets_file'  	=> $url . 'pro-demos/demo_19_widgets.wie',
	'form_file'  		=> $url . 'pro-demos/demo_19_form.json',
	'preview_image'		=> $url . 'pro-demos/demo-19.jpg',
	'preview_url'		=> 'https://pro.woovina.net/demo-19/',
	'home_title'  		=> 'Home',
	'blog_title'  		=> 'Blog',
	'posts_to_show'  	=> '12',
	'elementor_width'  	=> '1740',
	'css_file'			=> 'demo-18.css',
	'woo_image_size'	=> '600',
	'woo_thumb_size'	=> '600',
	'woo_crop_width'	=> '1',
	'woo_crop_height'	=> '1',
	'required_plugins'  => array(
		'free' => array(							
			array(
				'slug'  	=> 'elementor',
				'init'  	=> 'elementor/elementor.php',
				'name'  	=> 'Elementor',
			),
			array(
				'slug'  	=> 'woocommerce',
				'init'  	=> 'woocommerce/woocommerce.php',
				'name'  	=> 'WooCommerce',
			),
			array(
				'slug'  	=> 'ti-woocommerce-wishlist',
				'init'  	=> 'ti-woocommerce-wishlist/ti-woocommerce-wishlist.php',
				'name'  	=> 'WooCommerce Wishlist Plugin',
			),
			array(
				'slug' 		=> 'yith-woocommerce-compare',
				'init'  	=> 'yith-woocommerce-compare/init.php',
				'name' 		=> 'YITH WooCommerce Compare',
			),
			array(
				'slug'  	=> 'wpforms-lite',
				'init'  	=> 'wpforms-lite/wpforms.php',
				'name'  	=> 'WPForms',
			),
			array(
				'slug'  	=> 'yith-woocommerce-frequently-bought-together',
				'init'  	=> 'yith-woocommerce-frequently-bought-together/init.php',
				'name'  	=> 'YITH WooCommerce Frequently Bought Together',
			),
			array(
				'slug'  	=> 'yith-woocommerce-tab-manager',
				'init'  	=> 'yith-woocommerce-tab-manager/init.php',
				'name'  	=> 'YITH WooCommerce Tab Manager',
			),
		),
		'premium' => array(
			array(
				'slug'  	=> 'woovina-variation-swatches',
				'init'  	=> 'woovina-variation-swatches/woovina-variation-swatches.php',
				'name'  	=> 'WooVina Variation Swatches',
			),
			array(
				'slug' 		=> 'woovina-extra',
				'init'  	=> 'woovina-extra/woovina-extra.php',
				'name' 		=> 'WooVina Extra',
			),
			array(
				'slug' 		=> 'woovina-elementor-widgets',
				'init'  	=> 'woovina-elementor-widgets/woovina-elementor-widgets.php',
				'name' 		=> 'WooVina Elementor Widgets',
			),
			array(
				'slug' 		=> 'woovina-custom-sidebar',
				'init'  	=> 'woovina-custom-sidebar/woovina-custom-sidebar.php',
				'name' 		=> 'WooVina Custom Sidebar',
			),
			array(
				'slug' 		=> 'woovina-preloader',
				'init'  	=> 'woovina-preloader/woovina-preloader.php',
				'name' 		=> 'WooVina Preloader',
			),
			array(
				'slug' 		=> 'woovina-sticky-header',
				'init' 		=> 'woovina-sticky-header/woovina-sticky-header.php',
				'name' 		=> 'WooVina Sticky Header',
			),
			array(
				'slug' 		=> 'woovina-product-sharing',
				'init' 		=> 'woovina-product-sharing/woovina-product-sharing.php',
				'name' 		=> 'WooVina Product Sharing',
			),
			array(
				'slug' 		=> 'woovina-popup-login',
				'init' 		=> 'woovina-popup-login/woovina-popup-login.php',
				'name' 		=> 'WooVina Popup Login',
			),
			array(
				'slug' 		=> 'woovina-woo-popup',
				'init' 		=> 'woovina-woo-popup/woovina-woo-popup.php',
				'name' 		=> 'WooVina Woo Popup',
			),
			
		),
	),
),