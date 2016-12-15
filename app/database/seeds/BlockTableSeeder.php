<?php

class BlockTableSeeder extends Seeder {

	public function run()
	{
		Block::create([
				'name' => 'Tư vấn & ',
				'name2' => 'Phân phối',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.',
				'url' => '#',
				'type' => BLOCK_1,
			]);
		Block::create([
				'name' => 'Phân tích ',
				'name2' => 'Tài chính',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.',
				'url' => '#',
				'type' => BLOCK_1,
			]);
		Block::create([
				'name' => 'Cố vấn ',
				'name2' => 'Pháp lý BĐS',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.',
				'url' => '#',
				'type' => BLOCK_1,
			]);
		Block::create([
				'name' => 'Chào mừng ',
				'name2' => 'tới Bắc Á Land!',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incid inisi ut aliquip ex ea co dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
				'url' => '#',
				'type' => BLOCK_2,
			]);
		Block::create([
				'name' => 'Đôi nét ',
				'name2' => 'Về chúng tôi',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incid inisi ut aliquip ex ea co dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
				'url' => '#',
				'type' => BLOCK_2,
			]);
		Block::create([
				'name' => 'Dịch vụ ',
				'name2' => 'Bắc Á cung cấp',
				'description' => 'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incid inisi ut aliquip ex ea co dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.',
				'url' => '#',
				'type' => BLOCK_2,
			]);
		
	}

}