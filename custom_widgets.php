<?php 
/* widgets add in wp.
* Only for notes.
* if you find any issue the contact to akashpatel7204@gmail.com
*/

add_action( 'widgets_init', 'themesdojo_widgets_init' );


// put this code in your template function.php files.


dynamic_sidebar( 'sidebar-2' ); ?>
register_sidebar( array(
		'name'          => __( 'For demo', 'twentythirteen' ),
		'id'            => 'fordemo',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
<?php 
// call the widget in any template files or any plugins files.
if ( is_active_sidebar( 'sidebar-2' ) ) {
	dynamic_sidebar( 'sidebar-2' );
} 