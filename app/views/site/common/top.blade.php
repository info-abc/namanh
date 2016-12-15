<!--========================================================
													HEADER 
=========================================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_4">
					<div><a href="/" class="toplogo1"><img src="/assets/images/logo.png" alt="NAMANH" class="toplogo"></a> </div>
				</div>
				<div class="grid_8">
					<nav>
						<ul class="sf-menu">
							<li {{ checkActive('/') }}><a href="/">Trang chủ<strong></strong></a></li>
							<li {{ checkActive('gioi-thieu') }}><a href="/gioi-thieu">Giới thiệu<strong></strong></a></li>
							<li {{ checkActive('san-pham') }}><a href="/san-pham">Sản phẩm<strong></strong></a>
								<!-- 
								<ul class="submenu">
									<li><a href="#">Tổ yến tinh chế cao cấp</a></li>
									<li><a href="#">Trà Oolong thượng hạng</a></li>
									<li><a href="#">Do eiusmod </a>
										<ul class="submenu2">
											<li><a href="#">News</a></li>
											<li class="last"><a href="#">Archive</a></li>
										</ul>
									</li>
									<li><a href="#">Incididunt ut</a></li>
									<li><a href="#">Et dolore </a></li>
									<li class="last"><a href="#">Ut enim ad minim</a></li>
								</ul>
								-->
							</li>
							<li {{ checkActive('tin-tuc') }}><a href="/tin-tuc">Tin tức<strong></strong></a></li>
							<!-- <li><a href="/dat-hang">Đặt hàng<strong></strong></a></li> -->
							<li {{ checkActive('lien-he') }} id="last-li"><a href="/lien-he">Liên hệ<strong></strong></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>