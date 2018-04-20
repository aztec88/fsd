<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(''); ?></title>
        <meta name="description" content="Custom WP Theme">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="shortcut icon" href="/wp-content/themes/fsd/favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
		<?php wp_head(); ?>
		
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$site_classes = array( 'site_home' );
		else:
			$site_classes = array( 'side_page' );
		endif;
		
	?>
	
	<body <?php body_class( $site_classes ); ?>>
		<div class="container-fluid no-padding top_menu">
			<div class="container">
				<div class="nav">
					<div class="logo col-xs-6 col-md-3">
						<a href="<?php echo home_url(); ?>"><img title="FSD Test" alt="FSD Test" src="/wp-content/themes/fsd/logo.png"></a>
					</div>
					<div class="menu_right col-xs-6 col-md-9">
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'main_menu',
								'walker' => new Walker_Nav_primary()
								)
							);
						?>	
						<ul class="search">
							<li>
								<i class="fa fa-search search_btn" aria-hidden="true"></i>
								<?php get_search_form(); ?>
							</li>
						</ul>
						<i class="mob_btn fa fa-bars" aria-hidden="true"></i>
						<div class="mob_nav">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'mob_menu',
									'walker' => new Walker_Nav_primary()
									)
								);
							?>			  	
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
          
		
		
				    
		
	
