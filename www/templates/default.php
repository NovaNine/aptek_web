<!doctype html>
<html class="" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<base href="<?php print $page['siteBaseUrl']; ?>">

	<title><?php print $page['title']; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Nunito|Exo+2:700" rel="stylesheet">
	<link href="lib/tether-1.3.3/css/tether.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/site.css">

	<?php print $page['head']; ?>
</head>
<body>

<div class="container-fluid" id="header">
	<div class="container" id="">
		<div class="row header-flex">
			<div class="" id="brand-ct">Aptek</div>
			<div id="menu-ct">
				<?php
					foreach ($page['menuCfg'] as $menuEntry) {
						print "<a href='{$menuEntry['link']}' class='menu-tile'><div>{$menuEntry['html']}</div></a>\n";
					}
				?>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid" id="tagline-ct">
	<div class="container">
		Mobile, on-site computer support serving Guelph and area
	</div>
</div>
<div class="container-fluid" id="main-ct-outer">
	<div class="container">
		<div class="row" id="main-ct">
			<?php print $page['body']; ?>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4"><span class="text-muted">&copy 2016 APTEK</span></div>
					<div class="col-xs-12 col-md-8">

					</div>
				</div>

			</div>
		</footer>
	</div>
</div>

<div class="modal fade" id="modal-msg">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<p></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="lib/tether-1.3.3/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script src="scripts/formSubmit.js"></script>

<!-- <script src="js/main.js"></script>-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-27607307-9', 'auto');
	ga('send', 'pageview');

</script>

<script src="//localhost:9999/livereload.js"></script>
</body>
</html>