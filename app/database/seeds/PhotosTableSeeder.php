<?php

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('photos')->delete();

		$array = array(
			array(
					'title' => 'photo 1',
					'slug' => 'cover',
					'path' => 'images/models/chelsea/0_cover.jpg'
			),
			array(
					'title' => 'photo 2',
					'slug' => 'cover',
					'path' => 'images/models/irina/0_cover.jpg'
			),
			array(
					'title' => 'photo 3',
					'slug' => 'cover',
					'path' => 'images/models/maria/0_cover.jpg'
			)
		);

		// Uncomment the below to run the seeder
		DB::table('photos')->insert($array);
	}

}


/*
	$table->string('title');
	$table->string('slug');
	$table->string('path');
*/