<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">Menu</li>
			<li><a href="{{ action('PostController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý bài viết</span></a></li>
			<li><a href="{{ action('PostController@index').'/?highlight=' }}"><i class="fa fa-chevron-right"></i> <span>Nổi bật</span></a></li>
			<li><a href="{{ action('PostTypeController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý thể loại</span></a></li>
			<li><a href="{{ action('SlideController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý slide</span></a></li>
			<li><a href="{{ action('ContactController@index') }}"><i class="fa fa-chevron-right"></i> <span>Quản lý liên hệ</span></a></li>
			<li><a href="{{ action('ConfigsiteController@edit', 1) }}"><i class="fa fa-chevron-right"></i> <span>Cài đặt chung</span></a></li>
			@if(Admin::isAdmin())
			<li><a href="{{ action('ManagerController@index') }}"><i class="fa fa-users"></i> <span>Quản lý thành viên</span></a></li>
			@endif
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>