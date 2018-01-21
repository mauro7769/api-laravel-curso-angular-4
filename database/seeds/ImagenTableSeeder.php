<?php

use Illuminate\Database\Seeder;
use App\Imagen;
use Faker\Factory as Faker;

class ImagenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $links = array(

        	"https://videotutoriales.com/maspa/maspa1",
        	"https://videotutoriales.com/maspa/maspa2",
			"https://videotutoriales.com/maspa/maspa3",
			"https://videotutoriales.com/maspa/maspa4",
			"https://videotutoriales.com/maspa/maspa5",
			"https://videotutoriales.com/maspa/maspa6",
			"https://videotutoriales.com/maspa/maspa7",
			"https://videotutoriales.com/maspa/maspa8",
        );

		foreach($links as $link)
		{
			Imagen::create([
				'titulo'=>$faker->text(80),
				'descripcion' => $content = $faker->paragraph(18),
				'thumbnail'=> $link.".jpg",
				'link' => $link."-1.jpg",
				'user_id' => $faker->numberBetween($min = 1, $max = 5),
			]);
		}

    }
}
