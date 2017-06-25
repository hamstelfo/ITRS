<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" 		content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" 	content="<?=$this->lng->i18n("app.description");?>">
    <meta name=keywords 			content="<?=$this->lng->i18n("app.tags");?>">

    <meta name="author" 			content="<?=APP_AUTHOR;?>">

    <title><?=$this->lng->i18n("app.title");?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=APP_URL_VENDORS;?>bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=APP_URL_VENDORS;?>narrow-jumbotron.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=APP_CSS;?>style.min.css?v=<?=APP_CACHE_AVOID;?>" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">

        <h3 class="text-muted"><?=APP_NAME;?> <span class="softer"><?=$this->lng->i18n("menu.header.training");?></span></h3>
        <nav class="nav-in-header">
          <ul class="nav nav-pills float-left">
          <?

          	for ($i=0; $i<count($menu->items); $i++)
          	{
							//pinta($menu->items[$i]);
          		?>
          		<!-- Pending: We have to add the class active to the corresponding menu item. -->
          		<!-- Pending: only internal links here for the moment. -->
          		<li class="nav-item">
	              <a class="nav-link <?=($i==$menu->getCurrentIndex()?"active":"")?>" href="<?=APP_URL."/".$menu->items[$i]['href']?>" target="<?=$menu->items[$i]['target'];?>"><?=$this->lng->i18n($menu->items[$i]['txt']);?></a>
	            </li>
          		<?php
          	}
          ?>
          </ul>
        </nav>
      </div>

      <div class="jumbotron">
        <img src="<?=APP_IMG;?>header.png">
      </div>