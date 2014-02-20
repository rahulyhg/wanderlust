<?php

class RookiesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('rookies')->delete();

		$array = array(
			array(
					'slug' => 'chelsea',
					'name' => 'Chelsea',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes',
					'photocover_id' => 1
			),

			array(
					'slug' => 'Irina',
					'name' => 'Irina',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes',
					'photocover_id' => 2
			),

			array(
					'slug' => 'Maria',
					'name' => 'Maria',
					'height' => 'height',
					'bust' => 'bust',
					'waist' => 'waist',
					'hips' => 'hips',
					'shoes' => 'shoes',
					'hair' => 'hair',
					'eyes' => 'eyes',
					'photocover_id' => 3
			)
		);

		
		DB::table('rookies')->insert($array);
	}

}


/*
    $table->string('slug');
    $table->string('name');
    $table->string('height');
    $table->string('bust');
    $table->string('waist');
    $table->string('hips');
    $table->string('shoes');
    $table->string('hair');
    $table->string('eyes');
*/