<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            [
                'noticia_id' => 1,
                'titulo' => 'En España ponen a Gallardo como candidato al Barcelona',
                'sinopsis' => 'El nombre del Muñeco vuelve a sonar en Europa y esta vez es para suceder a Ronald Koeman en el ex equipo de Lionel Messi.',
                'texto' => 'El nombre de Marcelo Gallardo está en carpeta de los clubes más grandes del mundo y no son pocas las ofertas que recibió el Muñeco durante su estadía en River. Esta vez volvió a sonar en un equipo que ya lo vino a buscar: en España aseguran que el ídolo Millonario es uno de los candidatos a suceder a Ronald Koeman en el banco del Barcelona. La encuesta con la opinión de los hinchas catalanes.
                            La última vez que tentaron al entrenador del exterior fue este mismo septiembre. El Al-Nassr, equipo árabe en el que juegan Ramiro Funes Mori y Gonzalo Martínez, le acercó una propuesta mediante un sondeo con su representante Juan Berros. Sin embargo, el DT ni siquiera la consideró y está enfocado en cumplir su contrato en Núñez al menos hasta diciembre.',
                'imagen'=>'gallardo.jpg',
                'imagen_descripcion' => 'Gallardo como DT en un partido de River',
                'fecha_publicacion' => '2021-12-05',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noticia_id' => 2,
                'titulo' => 'El parche que lucirá River en la camiseta del superclásico',
                'sinopsis' => 'La Liga dió a conocer el detalle que usarán los equipos en el encuentro del domingo en el monumental',
                'texto' => 'El nombre de Marcelo Gallardo está en carpeta de los clubes más grandes del mundo y no son pocas las ofertas que recibió el Muñeco durante su estadía en River. Esta vez volvió a sonar en un equipo que ya lo vino a buscar: en España aseguran que el ídolo Millonario es uno de los candidatos a suceder a Ronald Koeman en el banco del Barcelona. La encuesta con la opinión de los hinchas catalanes.
                La última vez que tentaron al entrenador del exterior fue este mismo septiembre. El Al-Nassr, equipo árabe en el que juegan Ramiro Funes Mori y Gonzalo Martínez, le acercó una propuesta mediante un sondeo con su representante Juan Berros. Sin embargo, el DT ni siquiera la consideró y está enfocado en cumplir su contrato en Núñez al menos hasta diciembre.',
                'imagen'=>'parche.jpg',
                'imagen_descripcion' => 'Parche que se usará en la camiseta de River',
                'fecha_publicacion' => '2022-05-23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noticia_id' => 3,
                'titulo' => 'Encuentro de ídolos riverplatenses en la previa al superclásico',
                'sinopsis' => 'Varios de los mejores jugadores de River de la década del 90 se reunieron a almorzar unos días antes que se dispute el superclásico del fútbol argentino, estuvieron Francescoli, Ortega y Gallardo.',
                'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum augue non mi ornare posuere. Phasellus molestie, turpis in vehicula auctor, tortor metus porttitor urna, vel iaculis sem leo vel arcu. Cras condimentum dolor bibendum diam dictum, nec tempus leo euismod. Integer porttitor condimentum posuere. Pellentesque quis sagittis quam, nec viverra nunc. Aenean ullamcorper massa in lectus posuere, sit amet fermentum ex mollis. Sed molestie, lacus ut laoreet hendrerit, turpis odio condimentum metus, ac elementum purus ante id dolor. Vestibulum dapibus aliquet ante eu dignissim. Maecenas maximus orci at enim viverra pretium',
                'imagen'=>'encuentro.jpg',
                'imagen_descripcion' => 'Encuentro de ídolos de River en un almuerzo',
                'fecha_publicacion' => '2021-11-09',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noticia_id' => 4,
                'titulo' => 'Suárez pide pista para el superclásico',
                'sinopsis' => 'El atacante se volvió a entrenar a la par del grupo y lo hizo sin dolor en su rodilla, por lo que el Muñeco lo podría tener en cuenta para que juegue desde el arranque ante el eterno rival el próximo domingo.',
                'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum augue non mi ornare posuere. Phasellus molestie, turpis in vehicula auctor, tortor metus porttitor urna, vel iaculis sem leo vel arcu. Cras condimentum dolor bibendum diam dictum, nec tempus leo euismod. Integer porttitor condimentum posuere. Pellentesque quis sagittis quam, nec viverra nunc. Aenean ullamcorper massa in lectus posuere, sit amet fermentum ex mollis. Sed molestie, lacus ut laoreet hendrerit, turpis odio condimentum metus, ac elementum purus ante id dolor. Vestibulum dapibus aliquet ante eu dignissim. Maecenas maximus orci at enim viverra pretium',
                'imagen'=>'suarez.jpg',
                'imagen_descripcion' => 'Matias Suarez en el entrenamiento',
                'fecha_publicacion' => '2021-11-05',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
