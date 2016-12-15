<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<meta http-equiv="Content-language" content="vi">
	<meta name="revisit-after" content="1 days" />
	<meta name="robots" content="noodp,noindex,nofollow" />
	<meta name="language" content="vietnamese" />

<?php 
	$code = Common::getFieldModel('Configsite', 1, 'code');
	echo $code;
?>

	@if(!empty($meta_title))
	<meta name="title" content="{{ $meta_title }}">
	@endif
	@if(!empty($meta_keyword))
	<meta name="keywords" content="{{ $meta_keyword }}">
	@endif
	@if(!empty($meta_description))
	<meta name="description" content="{{ $meta_description }}">
	@endif
	@if(!empty($meta_title) && !empty($meta_keyword))
	<meta property="og:url" content="{{ URL::current() }}" />
	<meta property="og:title" content="{{ $meta_title }}" />
	<meta property="og:description" content="{{ $meta_description }}" />
	@endif
	@if(!empty($meta_image))
	<meta property="og:image" content="{{ url($meta_image) }}" />
	@endif
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/assets/css/grid.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/js/jquery-migrate-1.2.1.js"></script>
	@if(isset($pageHome))
	<link rel="stylesheet" href="/assets/css/camera.css">
	<script src="/assets/js/camera.js"></script>
	@endif
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="/assets/js/jquery.mobile.customized.min.js"></script>
	<script src="/assets/js/wow/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	@if(isset($pageContact))
	<link rel="stylesheet" href="/assets/css/contact-form.css">
	@endif
	@if(isset($pageOrder))
	<link rel="stylesheet" href="/assets/booking/css/booking.css">
	<script src="/assets/booking/js/booking.js"></script>
	@endif
	@if(isset($pagePost))
	<link rel="stylesheet" href="/assets/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/assets/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" href="/assets/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/assets/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	@endif
	<!--<![endif]-->
	<!--[if lt IE 8]>
  	<div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
	<map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
	<area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
	</map>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="/js/html5shiv.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="/css/ie.css">
	<![endif]-->
</head>	