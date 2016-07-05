<?php




// Custom Post Type Produit

 add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'produit',
    array(
      'labels' => array(
        'name' => __( 'Produits' ),
        'singular_name' => __( 'Produit' )
      ),
      'public' => true
    )
  );
register_taxonomy( 'couleur', 'produit', array( 'hierarchical' => true, 'label' => 'Couleur', 'query_var' => true, 'rewrite' => true ) );
}

function include_styles_scripts(){
	wp_enqueue_style('style-name', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'include_styles_scripts');


/*style*/
function include_scripts() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'assets/css/bootstrap.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'assets/js/bootstrap.min.js');
    wp_enqueue_script('classie-js', get_template_directory_uri().'assets/js/classie.js');
    wp_enqueue_script('cbpAnimatedHeader', get_template_directory_uri().'assets/js/cbpAnimatedHeader.js');

    wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri().'assets/js/jqBootstrapValidation.js');

     wp_enqueue_script('contact', get_template_directory_uri().'assets/js/contact_me.js');

}
add_action('wp_enqueue_scripts', 'include_scripts');

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

	//add_action('theme_init','theme_js');



	/*ShortCode*/

	function myShortCode(){
		return "Coucou ceci est mon shortcode";
	}
	// add_shortcode('short','myShortCode');


	/*Editor Style*/
	function editorstyle(){
		add_editor_style("editorStyle.css");

	}

	//add_action('after_setup_theme','editorstyle');

/*MODIF DE LEDITEUR*/
// 	function editor_tinymce(){
// 		$style_formats=array(			
// 				'title'=>'.translation',
// 				'block'=> 'blockquote',
// 				'classes'=>'translation',
// 				'wrapper'=> true
// 				)

// 			);
	
// 	$init_formats('style_formats')=json_encode($style_formats)
// 	return $init_formats; 
// }

// 	add_filter('tiny_mce_before_init', 'editor_tinymce');



function custom_post_type() {
 
 
    $labels = array(
        'name'                => ( 'Menu_FBN' ), // Le nom de mon menu
        'singular_name'       => ( 'Menu Food By Night' ),
        'all_items'           => ( 'Tous les menus' ),
        'view_item'           => ( 'Voir le menu' ),
        'add_new_item'        => ( 'Ajouter un menu' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( 'Editer un menu' ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Rechercher un menu' ),
        'not_found'           => ( 'Aucun résultat' ),
        'not_found_in_trash'  => ( 'Aucun résultat dans la corbeille' )
    );
    $args = array(
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail' ), // Permet de définir les éléments à ajouter pour notre type de contenu.
        //'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true, // Pour l'ajouter dans la barre d'admin en haut dans l'onglet "Créer"
        'menu_position'       => 2, // L'ordre d'affichage dans le menu à gauche
        'menu_icon'           => 'dashicons-format-gallery', // Nom de l’icône
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page', // Permet de spécifier que l'utilisateur possède les mêmes droits qu'il a sur les pages
    );
    register_post_type( 'Menu_FBN', $args );
 
}
add_action( 'init', 'custom_post_type', 0 );


// Add Custom Category
function Menu_Category() {
    register_taxonomy(
        'project-cat',
        'Menu_FBN',
        array(
            'label' => __( 'Catégories' ),
            'rewrite' => array( 'slug' => 'project-cat' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'Menu_Category' );




// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

}



add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {
 if ( is_home() )
 $query->set( 'post_type', array( 'produit' ) );

 return $query;
}
