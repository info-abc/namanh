@extends('site.layout.default', array('pageOrder'=>1))

@section('title', 'Đặt hàng')

@section('content')

<!--========================================================
													CONTENT 
=========================================================-->
<section id="content">

	<div class="container">
		<p class="txt4 color4 marTop9">Đặt hàng<br><span>online</span></p>
		<h3>Hendreritivamus eget nibh vel metus Etiam cursus leo psum Nulla facilisii primis nec laoreet Aenean nec eros luctus Vestibulum ante faucibus </h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Su spendisse non lacus at quam iaculis pharetra. Maecenas te mpus neque at ligula lobortis, sit amet mollis tellus vehicu la. Qui sque et leo hendrerit diam porta auctor. Mauris ac libero sed lorem vulputate cursus in quis velit. Vestibulum vitae metus eu ante commodo interdum sed ut enim. Vestibulum a purus sce lerisque tortor dapibus sagittis a ultrices metusauris tempus volutpat tortor, eu volutpat velit cursus vitae. Vestibulum eget ex in elit feugiat </p>


		<form id="bookingForm" method="post">

			<div class="wrapper2 form_marTop1">
				<div class="row">
					<div class="grid_4">
						<div class="num_section">1.</div>
						<div class="box">
							<p class="txt9">Region</p>


							<div class="form_col1">
								<div class="tmRadio">
										<input name="Region" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])' checked/>
										<span class="radio_txt">Vienna</span><br>
										<input name="Region" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Salzburg</span><br>
										<input name="Region" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Tirol</span><br>
										<input name="Region" type="radio" id="tmRadio3" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Carinthia</span><br>
										<input name="Region" type="radio" id="tmRadio4" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Lower Austria</span><br>
								</div>
							</div>

							<div class="form_col1">
								<div class="tmRadio">
										<input name="Region" type="radio" id="tmRadio5" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])' />
										<span class="radio_txt">Upper Austria</span><br>
										<input name="Region" type="radio" id="tmRadio6" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Burgenland</span><br>
										<input name="Region" type="radio" id="tmRadio7" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Styria</span><br>
										<input name="Region" type="radio" id="tmRadio8" data-constraints='@RadioGroupChecked(name="Region", groups=[RadioGroup])'/>
										<span class="radio_txt">Vorarlberg</span><br>
								</div>
							</div>

						</div>
						
					</div>

					<div class="grid_6">
						<p class="form_txt1">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. </p>
						<p class="form_txt2">city</p>
						<div class="row">
							<div class="grid_3">
								<select name="Country" class="tmSelect manual autocomplete" data-constraints="">
									<option>Canada</option>
									<option>France</option>
									<option>England</option>
									<option>Germany</option> 
									<option>Italy</option> 
									<option>USA</option>
								</select>
							</div>
						</div>
						
					</div>

				</div>
			</div>

			<div class="wrapper2 form_marTop2">
				<div class="row">
					<div class="grid_4">
						<div class="num_section">2.</div>
						<div class="box">
							<p class="txt9">Property type</p>
							<div class="form_col1">
								<div class="tmRadio">
										<input name="property_type" type="radio" id="tmRadio2_0" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])' checked/>
										<span class="radio_txt">Villa</span><br>
										<input name="property_type" type="radio" id="tmRadio2_1" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">House</span><br>
										<input name="property_type" type="radio" id="tmRadio2_2" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">Castle</span><br>
										<input name="property_type" type="radio" id="tmRadio2_3" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">Apartment</span><br>
										<input name="property_type" type="radio" id="tmRadio2_4" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">Hotel</span><br>
								</div>
							</div>
			
							<div class="form_col1">
								<div class="tmRadio">
										<input name="property_type" type="radio" id="tmRadio2_5" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])' />
										<span class="radio_txt">Pension</span><br>
										<input name="property_type" type="radio" id="tmRadio2_6" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">Restaurant</span><br>
										<input name="property_type" type="radio" id="tmRadio2_7" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">Business</span><br>
										<input name="property_type" type="radio" id="tmRadio2_8" data-constraints='@RadioGroupChecked(name="property_type", groups=[RadioGroup])'/>
										<span class="radio_txt">Plot of land</span><br>
								</div>
							</div>
			
						</div>
						
					</div>
			
					<div class="grid_4">
						<div class="num_section">3.</div>
						<div class="box">
							<p class="txt9">Price in Euro</p>
							<div class="form_col2">
								<div class="tmRadio">
										<input name="price" type="radio" id="tmRadio3_0" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])' checked/>
										<span class="radio_txt">up to 500.000</span><br>
										<input name="price" type="radio" id="tmRadio3_1" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])'/>
										<span class="radio_txt">up to 1.000.000</span><br>
										<input name="price" type="radio" id="tmRadio3_2" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])'/>
										<span class="radio_txt">up to 1.500.000</span><br>
										<input name="price" type="radio" id="tmRadio3_3" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])'/>
										<span class="radio_txt">up to 2.000.000</span><br>
										<input name="price" type="radio" id="tmRadio3_4" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])'/>
										<span class="radio_txt">up to 3.000.000</span><br>
								</div>
							</div>
			
							<div class="form_col2">
								<div class="tmRadio">



										<input name="price" type="radio" id="tmRadio3_5" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])' />
										<span class="radio_txt">up to 5.000.000</span><br>
										<input name="price" type="radio" id="tmRadio3_6" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])'/>
										<span class="radio_txt">up to 9.000.000</span><br>
										<input name="price" type="radio" id="tmRadio3_7" data-constraints='@RadioGroupChecked(name="price", groups=[RadioGroup])'/>
										<span class="radio_txt">unlimited</span><br>
								</div>
							</div>
			
						</div>
						
					</div>
			
				</div>
			</div>

			<div class="wrapper2 form_marTop3">
				<div class="row">
					<div class="grid_3">
						<div class="num_section">4.</div>
						<div class="box">
							<p class="txt9">Area (m²)</p>


							<div class="">
								<div class="tmRadio">
										<input name="Area" type="radio" id="tmRadio4_1" data-constraints='@RadioGroupChecked(name="Area", groups=[RadioGroup])' checked/>
										<span class="radio_txt">up to 150</span><br>
										<input name="Area" type="radio" id="tmRadio4_2" data-constraints='@RadioGroupChecked(name="Area", groups=[RadioGroup])'/>
										<span class="radio_txt">from 150 up  to 250</span><br>
										<input name="Area" type="radio" id="tmRadio4_3" data-constraints='@RadioGroupChecked(name="Area", groups=[RadioGroup])'/>
										<span class="radio_txt">from 250 up  to 500</span><br>
										<input name="Area" type="radio" id="tmRadio4_4" data-constraints='@RadioGroupChecked(name="Area", groups=[RadioGroup])'/>
										<span class="radio_txt">from 500 up  to 1000</span><br>
										<input name="Area" type="radio" id="tmRadio4_5" data-constraints='@RadioGroupChecked(name="Area", groups=[RadioGroup])'/>
										<span class="radio_txt">more 1000</span><br>
								</div>
							</div>


						</div>
						
					</div>

					<div class="grid_7">
						<p class="form_txt1">Praesent justo dolor, lobortis quis.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.</p>
						<p class="form_txt2">Quantity of rooms:</p>
						<div class="row">
							<div class="grid_3">
								<div class="tmInput">
									<input name="Quantity" placeHolder="" type="text" data-constraints=''>
								</div>
							</div>
						</div>
						
						
					</div>

				</div>
			</div>

			<div class="wrapper2 form_marTop2">
				<div class="row">
					<div class="grid_3 mobile_pad_right1">
						<div class="num_section">5.</div>
						<div class="box">
							<p class="txt9">Plot of land (m²)</p>
							<div class="">
								<div class="tmRadio">
										<input name="Plot" type="radio" id="tmRadio5_1" data-constraints='@RadioGroupChecked(name="Plot", groups=[RadioGroup])' checked/>
										<span class="radio_txt">from 300 up  to 500</span><br>
										<input name="Plot" type="radio" id="tmRadio5_2" data-constraints='@RadioGroupChecked(name="Plot", groups=[RadioGroup])'/>
										<span class="radio_txt">from 500 up  to 1000</span><br>
										<input name="Plot" type="radio" id="tmRadio5_3" data-constraints='@RadioGroupChecked(name="Plot", groups=[RadioGroup])'/>
										<span class="radio_txt">from 1000 up  to 5000</span><br>
										<input name="Plot" type="radio" id="tmRadio5_4" data-constraints='@RadioGroupChecked(name="Plot", groups=[RadioGroup])'/>
										<span class="radio_txt">from 5000 up  to 10000</span><br>
										<input name="Plot" type="radio" id="tmRadio5_5" data-constraints='@RadioGroupChecked(name="Plot", groups=[RadioGroup])'/>
										<span class="radio_txt">more 1000</span><br>
								</div>
							</div>


						</div>
						
					</div>

					<div class="grid_5">

						<p class="txt9">Extra</p>
							<div class="">

								<div class="tmRadio">
										<input name="Extra" type="radio" id="tmRadio6_1" data-constraints='@RadioGroupChecked(name="Extra", groups=[RadioGroup])' checked/>
										<span class="radio_txt">Garage</span><br>
										<input name="Extra" type="radio" id="tmRadio6_2" data-constraints='@RadioGroupChecked(name="Extra", groups=[RadioGroup])'/>
										<span class="radio_txt">Swimmingpool</span><br>
										<input name="Extra" type="radio" id="tmRadio6_3" data-constraints='@RadioGroupChecked(name="Extra", groups=[RadioGroup])'/>
										<span class="radio_txt">Garden</span><br>
								</div>
							</div>
						
					</div>

				</div>
			</div>

			<div class="wrapper2 form_marTop2">
				<div class="row">
					<div class="grid_12">
						<div class="num_section">6.</div>
						<div class="box">
							<p class="form_txt1 form_marTop4">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
						</div>
					</div>


					<div class="grid_10 preffix_1 form_marTop5">
						<div class="row">
							<div class="grid_4">
								<div class="tmInput">
										<input name="Name" placeHolder="Name*:" type="text" data-constraints="@NotEmpty @Required">
								</div>
								<div class="tmInput">
										<input name="Email" placeHolder="E-mail*:" type="text" data-constraints="@NotEmpty @Required @Email">
								</div>
								<div class="tmInput">
										<input name="Phone:" placeHolder="Phone:" type="text" data-constraints="">
								</div>
							</div>

							<div class="grid_6">
								<div class="tmTextarea">
										<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
								</div>
							</div>
						</div>

						<!-- <a href="#" class="more_btn3 v2 fright" data-type="submit">Gửi</a> -->
						<input class="more_btn3 v2 fright" type="submit" value="Gửi">
					</div>

				</div>
			</div>

	</form>

	</div>

</section>

@stop
