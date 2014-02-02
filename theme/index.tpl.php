<!doctype html>
<html class="no-js"> <!-- Modernizr will replace the class 'no-js' with a list of features supoported by the browser -->
<head>
<meta charset="utf-8"/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel="shortcut icon" href="<?=$favicon?>"/><?php endif; ?>
<?php foreach ($stylesheets as $val): ?>
<link rel="stylesheet" href="<?=$val?>" type="text/css" />
<?php endforeach; ?>
<script src="<?=$modernizr?>"></script>
</head>
<body>
	<div class="wrapper">
		<div id="header_top"></div>
		<div id="header">	
		<div class="container">
		<div id="navbar">
			<?php if(isset($navbar)): ?><div class='nav_left'><?=get_navbar($navbar)?></div><?php endif; ?>
			</div>
		</div>
		<?=$header?></div>
		<div id="main">
			<div class="main container"><?=$main?></div>		
		</div>
	</div>
	<div id="footer"><?=$footer?></div>
<?php if(isset($jquery)): ?><script src="<?=$jquery?>"></script><?php endif; ?>

<?php if(isset($javascript_include)): foreach ($javascript_include as $val): ?>
<script src="<?=$val?>"></script>
<?php endforeach; endif; ?>

<?php if(isset($google_analytics)): ?>
<script>
	var _gaq=[['_setAccount', '<?=$google_analytics?>'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga..js';
	s.parentNode.insertBefore(g,g)}(document,'script'));
</script>
<?php endif; ?>

</body>
</html>