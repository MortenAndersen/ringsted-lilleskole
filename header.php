<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head();?>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Asap+Condensed&display=swap" rel="stylesheet">
</head>

<body <?php body_class();?>>
  <?php wp_body_open();?>
<?php ringsted_intra_link(); ?>
<header class="page-header <?php web_header_sticky();?>">
	
	<div class="flex <?php web_header_style(); ?>">
		<?php web_logo();?>
		<div class="name">Ringsted Lilleskole</div>
			<div class="menu-icon">
				<?php get_template_part('img/menu', 'icon');?>
			</div>
			<?php get_template_part('template-parts/nav/main', 'menu');?>
	</div>
</header>