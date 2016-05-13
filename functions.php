<?php

function include_styles_scripts(){
	wp_enqueue_style('style-name', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'include_styles_scripts');

function menus()
{
	register_nav_menus(array(
		'main_menu' => 'Menu Principal',
		'secondary_menu' => 'Menu Secondaire'
	));
}
add_action('init', 'menus');

function sidebars() {
	register_sidebar(array(
		'name' => __('Main_Sidebar', 'foodbynight'),
		'id' => 'sidebar-1',
		'description' => __('Widgets in this area will be shown on ', 'foodbynight')
		));
}
add_action('widgets_init', 'sidebars');


/*
* Logo d'en tête
*/

$defaults = array(
	'default-image'          => get_template_directory_uri().'/img/W.png',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
); 

add_theme_support('custom-header', $defaults);

/*
* Page Admin
*/
function menu_page(){
	add_menu_page('Options supplementaires', 'Options sup', 'administrator', 'manage_options', 'options_page');
}
add_action('admin_menu', 'menu_page');


function theme_options(){
	register_setting('esgi', 'background');
	register_setting('esgi', 'text_color');
}
add_action('admin_init', 'theme_options');

function options_page(){
	echo '<h1>Ma page d\'options</h1>'
	.'<form action="options.php" method ="post">';
		settings_fields('esgi');
		echo'<label>Background</label>'
		.'<input id="background" name="background" value="'.get_option('background').'" type="text">'
		.'<label>Text</label>'
		.'<input id ="text_color" name="text_color" value="'.get_option('text_color').'" type="text">'
		.'<input type="submit" value ="Mettre à jour">'
	.'</form>';
}

function head_style(){
	echo '<style>
			body { 
					background_color:'. get_option('background').';
					color:'. get_option('text_color').';
				}
		</style>';
}

add_action('wp_head', 'head_style');

function my_widgets(){
	register_widget('link_custom');
}

add_action('widgets_init', 'my_widgets');

class link_custom extends WP_Widget {
	function link_custom(){
		parent::__construct(FALSE, 'Lien Personalisé');
		$options = array(
			'classname' => 'link-custom',
			'description' => 'Ceci est mon premier Widget' 
		);
		$this->WP_Widget('link-custom', 'Lien Personalisé', $options);
	}

	function widget($args, $instance){
		echo '<a href="'.$instance['url'].'">'.$instance['name'].'</a>';
	}

	function update($new_instance, $old_instance){
		return $new_instance;
	}

	function form($instance){
		$params = array(
			'url' => 'http://www.google.com', 
			'name' => 'GOOGLE'
		);
		$instance = wp_parse_args($instance, $params);
		echo '<label for="'.$this->get_field_id('url').'">URL du lien</label><br>
		<input type ="text" id="'.$this->get_field_id('url').'" name="'.$this->get_field_name('url')
			.'" value="'.$instance['url'].'"><br>
		<label for="'.$this->get_field_name('name').'">Titre du lien</label><br>
		<input type ="text" id="'.$this->get_field_id('name'). '" name="'.$this->get_field_name('name')
			.'" value="'.$instance['name'].'">';
	}


	/*Fonction qui fait appel au JS*/

	function theme_js(){

		/*Appel jQuery*/
		wp_register_script("jquery", get_template_directory_uri().'assets/js/jquery-2.2.2.js',array());
		wp_enqueue_script("jquery");

		/*Appel bootstrap.min.Js*/
		wp_register_script("bootstrap", get_template_directory_uri().'assets/js/bootstrap.min.js',array());
		wp_enqueue_script("bootstrap");

	}

	add_action('init','theme_js');
}