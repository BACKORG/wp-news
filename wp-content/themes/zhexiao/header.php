<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
	<div class="container main-wrap">
		<header>
			<div class="text-center header-1">
				<span class="date">
					<?=date('l, M j, Y', time())?>
				</span>
				<a href="" class="header-logo">
					<img src="http://motive.theme-sphere.com/news-demo/wp-content/uploads/2014/10/news-logo-retina.jpg" />
				</a>
			</div>

			<nav class="navbar navbar-default header-navbar" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->			
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navigator">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->			
					<div class="collapse navbar-collapse" id="header-navigator">
						<ul class="nav navbar-nav header-nav-ul">
							<li class="<?=!isset($_GET['cat'])?'active':'';?>">
								<a href="<?=get_home_url()?>">Home</a>
							</li>
							<?php
								$category_ids = get_all_category_ids();
								foreach($category_ids as $cat_id) { 
									if($cat_id == $GLOBALS['featuredCatId']){
										continue;
									}
								  	$cat_name = get_cat_name($cat_id);
							?>
									<li class="<?=($_GET['cat']==$cat_id)?'active':'';?>" > 
										<a href="?cat=<?=$cat_id?>"><?=$cat_name?></a>
									</li>
							<?php
								}
							?>				
						</ul>
					</div>
				</div>
			</nav>
		</header>