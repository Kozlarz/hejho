	<html>
	<head>
		<title>Tech Site</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
			<div class = "navbar-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
				</div>
				
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				
				<div class = "collapse navbar-collapse navHeaderCollapse">
				
					<ul class = "nav navbar-nav navbar-right">
					<?php//wyswietlania menu  ?>
					<?php wp_nav_menu( array( 'hejho' => 'header-menu' ) ); ?>
						<li><a href = "#">Home</a></li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Blog <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Item One</a></li>
								<li><a href = "#">Item Two</a></li>
								<li><a href = "#">Item Three</a></li>
								<li><a href = "#">Item Four</a></li>
							</ul>
						
						</li>
						<li class = "dropdown">
							
							<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Social Media <b class = "caret"></b></a>
							<ul class = "dropdown-menu">
								<li><a href = "#">Twitter</a></li>
								<li><a href = "#">Facebook</a></li>
								<li><a href = "#">Google+</a></li>
								<li><a href = "#">Instagram</a></li>
							</ul>
						
						</li>
						<li><a href = "#">About</a></li>
						<li><a href = "#contact" data-toggle="modal">Contact</a></li>
					
					</ul>
				
				</div>
				
			</div>
		</div>
		