<?php

class ConfigsiteTableSeeder extends Seeder {

	public function run()
	{
		Configsite::create([
				'meta_title' => 'NamAnh',
				'meta_description' => 'NamAnh',
				'meta_keyword' => 'NamAnh',
				'meta_image' => '',
				'code' => '',
				'address' => 'Số 5B/55 đường Huỳnh Thúc Kháng, Phường Láng Hạ, Quận Đống Đa, Hà Nội, Việt Nam',
				'phone' => '098 447 34 89',
				'email' => 'dungnm@abc-group.vn',
				'company_information' => 'Công ty Cổ phần Truyền thông ABC – ABC Communications được thành lập vào tháng 8/2004, là doanh nghiệp hoạt động trong lĩnh vực truyền thông, quảng cáo và các dịch vụ viễn thông tại Việt Nam. Sản phẩm – Dịch vụ của chúng tôi bao gồm: Phát triển phần mềm; Thiết kế và lập trình website; Phát triển ứng dụng cho điện thoại di động; Cung cấp hạ tầng thanh toán cho các dịch vụ giá trị gia tăng trên nền tảng điện thoại di động…',
				'company_contact' => 'Tel: (84-4) 37754334 
Fax: (84-4) 37754556',
				'map' => '',
			]);
	}

}