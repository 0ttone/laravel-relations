<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Article;
use Faker\Generator as Faker;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
            //invece di generare i nomi dal Faker creo due array con nomi 
            //e cognomi di giornalist  e abbino  a caso usando flip.
            //Faker per gli articoli e le img

            $authorListName =[
                  'Alberto', 'Daniela', 'Marco','Sebastiano','Tiziana', 'Fiorenza','Domenico','Elena','Daniele','Roberta', 'Ylenia','Filippo'   
            ];

            $authorListSurname =[
                  'Negri', 'Preziosi', "D'Eramo", 'Messina','Ferrario','Sarzanini','Quirico','Rosselli', 'Fulvi','Aiello','Sina','Ceccarelli'
            ];

            //array dove fare push degli autori random
            $authorListId = [];

            //ciclo per generare autori 
            for($i = 0; $i < 12; $i++) {

                  $authorSeed = new Author();
                  $name = array_rand(array_flip($authorListName), 1);
                  $surname = array_rand(array_flip($authorListSurname), 1);

                  $authorSeed->name = $name;
                  $authorSeed->surname = $surname;
                  $authorSeed->email = "{$name}.{$name}@bodegabay.news";

                  $authorSeed->save();

                  //prendo ciascun elemento indicizzato random popolo la lista riga 31
                  
                  $authorListId[] = $authorSeed->id; 


            }

            //ciclo per generare gli articoli -con Faker
            for($x = 0; $x < 50; $x++ ){

                  $articleSeed->title = $faker->sentence(3);
                  $articleSeed->subtitle = $faker->sentence();
                  $articleSeed->content = $faker->paragraph(6);
                  $articleSeed->img = "link a pic rand";

                  //random pesca nella author_id
                  $$articleSeed->save();

            }

            


       
    }
}
