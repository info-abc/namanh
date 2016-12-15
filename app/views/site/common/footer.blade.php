<!--========================================================
													FOOTER 
=========================================================-->
<footer id="footer" class="main_page">
	<div class="container">
		<div class="row">
			<div class="grid_12">

				<p class="txt_priv wow fadeInLeft floatLeft">Copyright &copy; <span id="copyright-year"></span>. <!--<a href="/">Privacy Policy</a><br>--></p>

				<ul class="soc_icons wow fadeInRight noMargin">
					<li><a href="http://facebook.com/yenthatvietnam" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>

			</div>
		</div>
	</div>
</footer>

<script src="/assets/js/script.js"></script>

@if(isset($pageHome))
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="/assets/js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->

<script type="text/javascript">

$(document).ready(function(){
	jQuery('#camera_wrap').camera({
			loader: false,
			pagination: false,
			thumbnails: false,
			height: '37.03125%',
			fx: 'curtainBottomLeft',
			rows: '3',
			slicedCols: '3',
			slicedRows: '3',
			caption: false
		});
 });

</script>

<!-- 
<link rel="stylesheet" href="/assets/css/swiper.min.css">
<script src="/assets/js/swiper.jquery.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
	slidesPerView: 5,
	nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0
});
</script>
 -->

@endif

@if(isset($pageOrder))
<script type="text/javascript">
 $(function (){
		$('#bookingForm').bookingForm({
				ownerEmail: '#'
		});
	})
</script>
@endif

@if(isset($pagePost))
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
});
</script>
@endif