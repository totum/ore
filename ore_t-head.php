	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<!-- Empty conditional comment before loading CSS, to prevent block of further downloads until CSS is loaded -->
	<!--[if IE]><![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico" >
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	

	<!-- IE stuff -->
	<? /*
	Target IE browsers specifically. Uncomment and place in own partial if needed.
		<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
		<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
		<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
		<!--[if IE 9 ]>    <body class="ie9"> <![endif<]-->
		<!--[if (gt IE 9)|!(IE)]><!-->  <!--<![endif]-->
	*/ ?>

	<?php wp_head(); ?>