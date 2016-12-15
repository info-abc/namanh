@extends('site.layout.default', array('pageContact'=>1))

@section('title', 'Liên hệ')

@section('content')

<!--========================================================
													CONTENT 
=========================================================-->
<section id="content" class="content_pages">

	<div class="container">
		
		<div class="row">
			<div class="grid_6 wow fadeInLeft" data-wow-duration="" data-wow-delay="0.0s">
				<p class="txt4 color4 marTop9">Thông tin<br><span class="colorff8401">Liên hệ</span></p>

				<div class="map">
					<!-- <figure class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
					</figure> -->

					<address class="address1">
						{{ $configSite->company_contact }}
					</address>
				</div>

			</div>

			<div class="grid_6">
				<p class="txt4 color4 marTop9">Gửi<br><span class="colorff8401">Liên hệ</span></p>

				<form id="contact-form" method="post" action="/lien-he">
					<div class="contact-form-loader"></div>
					@include('message')
					<fieldset>
						<label class="name">
							<input type="text" name="name" placeholder="Họ tên" value="" required="" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
						</label>
					 
						<label class="email">
							<input type="email" name="email" placeholder="E-mail" value="" required="" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
						</label>
						<label class="phone">
							<input type="text" name="phone" placeholder="Điện thoại" value="" required="" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
						</label>
						<label class="phone">
							<input type="text" name="address" placeholder="Địa chỉ" value="" required="" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
						</label>
					 	<label class="phone">
							<input type="text" name="title" placeholder="Tiêu đề" value="" required="" />
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
						</label>
						<label class="message">
							<textarea name="message" placeholder="Tin nhắn" required=""></textarea>
							<span class="empty-message">Trường có dấu * là bắt buộc.</span>
						</label>
						<div class="btns">
							<!-- <a href="#" class="more_btn" data-type="reset">Clear</a> -->
							<!-- <a href="#" class="more_btn3" data-type="submit">Gửi</a> -->
							<input type="submit" value="Gửi" class="more_btn3">
						</div>
					</fieldset> 
				</form>

			</div>

		</div>
	</div>

</section>

@stop
