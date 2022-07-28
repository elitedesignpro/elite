<?php
/**
 * Functions for custom Gutenberg blocks
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */

/**
 * Register custom Gutenberg blocks
 */
add_action( 'acf/init', 'glide_theme_acf_init' );
function glide_theme_acf_init() {

	if ( function_exists( 'acf_register_block' ) ) {

		// Register a block - Spacer
		acf_register_block(
			array(
				'name'            => 'spacer',
				'title'           => __( 'Theme Spacer', 'elitedesign_td' ),
				'description'     => __( 'A custom spacer block for theme.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M8 0H16V64H8V0Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 56L24 64L-3.49691e-07 64L0 56L24 56Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M24 0L24 8L-3.49691e-07 8L0 -1.04907e-06L24 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L36 4L36 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M50 16L50 20L36 20L36 16L50 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L36 12L36 8L64 8Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L36 48L36 44L64 44Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M50 60L50 64L36 64L36 60L50 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L36 56L36 52L64 52Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Spacer Block' ),
				'align'           => 'full',
				'supports'        => array(
					'align'           => array('full')
				),
			)
		);

		// Register a block - Button
		acf_register_block(
			array(
				'name'            => 'button',
				'title'           => __( 'Theme Buttons', 'elitedesign_td' ),
				'description'     => __( 'A custom button block with theme styles.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 16L64 20L-3.73004e-07 20L0 16L64 16Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 8L64 12L-3.73004e-07 12L0 8L64 8Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 0L64 4L-3.73004e-07 4L0 -1.31134e-06L64 0Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 44L64 48L-3.73004e-07 48L0 44L64 44Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 60L64 64L-3.73004e-07 64L0 60L64 60Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M64 52L64 56L-3.73004e-07 56L0 52L64 52Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M28 28L28 36L-7.46008e-07 36L0 28L28 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				<path d="M64 28L64 36L36 36L36 28L64 28Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'Button'),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => esc_url(get_template_directory_uri()).'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - ACFBlock
		acf_register_block(
			array(
				'name'            => 'acfblock',
				'title'           => __( 'ACFBlock', 'elitedesign_td' ),
				'description'     => __( 'A custom ACFBlock.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => 'images-alt2',
				'mode'            => 'edit',
				'keywords'        => array( 'ACFBlock' ),
				'align'           => 'wide',
				// calling assets js,css
				// 'enqueue_assets' => function(){
				// 	wp_enqueue_script( 'block-testimonial', get_template_directory_uri() . '/scripts/jquery.cycle2.min.js', array('jquery'), '', true );
				// },
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Image Alongside Text
		acf_register_block(
			array(
				'name'            => 'image-alongside-text',
				'title'           => __( 'Image Alongside Text', 'elitedesign_td' ),
				'description'     => __( 'A custom image alongside text.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image','along','side','text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Image Alongside Text
		acf_register_block(
			array(
				'name'            => 'mid-page-cta',
				'title'           => __( 'Mid Page CTA', 'elitedesign_td' ),
				'description'     => __( 'A custom Mid Page CTA.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'mid','page','cta','call' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Text Columns
		acf_register_block(
			array(
				'name'            => 'text-columns',
				'title'           => __( 'Text Columns', 'elitedesign_td' ),
				'description'     => __( 'A custom Text Columns.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'text','columns' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Image Collage
		acf_register_block(
			array(
				'name'            => 'image-collage',
				'title'           => __( 'Image Collage', 'elitedesign_td' ),
				'description'     => __( 'A custom Image Collage.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'image','along','side','text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Lead Paragraph
		acf_register_block(
			array(
				'name'            => 'lead-paragraph',
				'title'           => __( 'Lead Paragraph', 'elitedesign_td' ),
				'description'     => __( 'A custom Lead Paragraph.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'lead','para','paragraph' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - ELITE Video
		acf_register_block(
			array(
				'name'            => 'video',
				'title'           => __( 'ELITE Video', 'elitedesign_td' ),
				'description'     => __( 'A custom ELITE Video.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'video','Elite','elite' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Proccess
		acf_register_block(
			array(
				'name'            => 'proccess',
				'title'           => __( 'Proccess', 'elitedesign_td' ),
				'description'     => __( 'A custom Proccess.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'process','Elite','proccesses' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Images Slider
		acf_register_block(
			array(
				'name'            => 'images-slider',
				'title'           => __( 'Images Slider', 'elitedesign_td' ),
				'description'     => __( 'A custom Images Slider.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'images','slider' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Large CTA
		acf_register_block(
			array(
				'name'            => 'large-cta',
				'title'           => __( 'Large CTA', 'elitedesign_td' ),
				'description'     => __( 'A custom Large CTA.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'large','cta' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Two Column Text
		acf_register_block(
			array(
				'name'            => 'two-columns',
				'title'           => __( 'Two Column Text', 'elitedesign_td' ),
				'description'     => __( 'A custom Two Column Text.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'large','cta' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - List Columns
		acf_register_block(
			array(
				'name'            => 'list-columns',
				'title'           => __( 'List Columns', 'elitedesign_td' ),
				'description'     => __( 'A custom List Columns.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'large','cta' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

		// Register a block - Three Column Text
		acf_register_block(
			array(
				'name'            => 'three-column-text',
				'title'           => __( 'Three Column Text', 'elitedesign_td' ),
				'description'     => __( 'A custom Three Column Text.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'three column','text' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Maintinance Plan
		acf_register_block(
			array(
				'name'            => 'maintinance-plan',
				'title'           => __( 'Maintinance Plan', 'elitedesign_td' ),
				'description'     => __( 'A custom Maintinance Plan.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'plan','maintinance','maintina' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Team Members
		acf_register_block(
			array(
				'name'            => 'team-members',
				'title'           => __( 'Team Members', 'elitedesign_td' ),
				'description'     => __( 'A custom Team Members.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'team','members','family' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Stats
		acf_register_block(
			array(
				'name'            => 'stats',
				'title'           => __( 'Stats', 'elitedesign_td' ),
				'description'     => __( 'A custom Stats.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'stats','grow' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Heading Alongside Text
		acf_register_block(
			array(
				'name'            => 'heading-alongside-text',
				'title'           => __( 'Heading Alongside Text', 'elitedesign_td' ),
				'description'     => __( 'A custom Heading Alongside Text.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'heading','along', 'text', 'side' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Testimonial
		acf_register_block(
			array(
				'name'            => 'testimonial',
				'title'           => __( 'Testimonial', 'elitedesign_td' ),
				'description'     => __( 'A custom Testimonial.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'heading','along', 'text', 'side' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Projects
		acf_register_block(
			array(
				'name'            => 'projects',
				'title'           => __( 'Projects', 'elitedesign_td' ),
				'description'     => __( 'A custom Projects.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'heading','along', 'text', 'side' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);
		
		// Register a block - Services
		acf_register_block(
			array(
				'name'            => 'services',
				'title'           => __( 'Services', 'elitedesign_td' ),
				'description'     => __( 'A custom Services.', 'elitedesign_td' ),
				'render_callback' => 'glide_acf_block_callback',
				'category'        => 'glide-blocks',
				'icon'            => '<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" clip-rule="evenodd" d="M60 40H40V60H60V40ZM36 36V64H64V36H36Z" fill="#A50A09"/>
				<path d="M46.0714 48L40 56.2143V60H60V56.5714L56.0714 51.9286L52.8571 55.5L46.0714 48Z" fill="#A50A09"/>
				<path d="M56 45.5C56 46.8807 54.8807 48 53.5 48C52.1193 48 51 46.8807 51 45.5C51 44.1193 52.1193 43 53.5 43C54.8807 43 56 44.1193 56 45.5Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 48L28 52L-1.63189e-07 52L0 48L28 48Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M28 40L28 44L-1.63189e-07 44L0 40L28 40Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M14 56L14 60L-1.63189e-07 60L0 56L14 56Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 12L64 16L36 16L36 12L64 12Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M64 4L64 8L36 8L36 4L64 4Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path d="M50 20L50 24L36 24L36 20L50 20Z" fill="#A50A09"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H4V24H24V4ZM0 0V28H28V0H0Z" fill="#A50A09"/>
				<path d="M10.0714 12L4 20.2143V24H24V20.5714L20.0714 15.9286L16.8571 19.5L10.0714 12Z" fill="#A50A09"/>
				<path d="M22 9.5C22 10.8807 20.8807 12 19.5 12C18.1193 12 17 10.8807 17 9.5C17 8.11929 18.1193 7 19.5 7C20.8807 7 22 8.11929 22 9.5Z" fill="#A50A09"/>
				</svg>',
				'mode'            => 'edit',
				'keywords'        => array( 'heading','along', 'text', 'side' ),
				'align'           => 'wide',
				'supports'        => array(
					'align'           => false
				),
				'example'  => array(
					'attributes' => array(
						'mode' => 'preview',
						'data' => array(
							'preview_image_help' => get_template_directory_uri().'/assets/img/admin/default-block-preview.webp',
						)
					)
				)
			)
		);

	}
}