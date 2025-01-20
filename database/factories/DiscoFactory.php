<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disco>
 */
class DiscoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
        
        $discos = [
            ['id'=>104, 'titulo'=>'Back in Black', 'autor'=>'AC/CD', 'genero'=>'Heavy Metal', 'anio'=>'1980'],
            ['id'=>106, 'titulo'=>'Sgt. Peppers Lonely Hearts Club Band', 'autor'=>'Beatles', 'genero'=>'Rock', 'anio'=>'1967'],
            ['id'=>107, 'titulo'=>'Revolver', 'autor'=>'Beatles', 'genero'=>'Rock', 'anio'=>'1966'],
            ['id'=>101, 'titulo'=>'Thriller', 'autor'=>'Michael Jackson', 'genero'=>'Pop', 'anio'=>'1982'],
            ['id'=>102, 'titulo'=>'History', 'autor'=>'Michael Jackson', 'genero'=>'Pop', 'anio'=>'1995'],
            ['id'=>103, 'titulo'=>'Dangerous', 'autor'=>'Michael Jackson', 'genero'=>'Pop', 'anio'=>'1991'],
            ['id'=>105, 'titulo'=>'The Dark Side of the Moon', 'autor'=>'Pink Floyd', 'genero'=>'Rock', 'anio'=>'1972'],
        ];
        $index = array_rand($discos);
        $discoSeleccionado = $discos[$index];
        unset($discos[$index]);
        
        return [
            
            'titulo' => $discoSeleccionado['titulo'],
            'autor' => $discoSeleccionado['autor'],
            'genero' => $discoSeleccionado['genero'],
            'anio' => $discoSeleccionado['anio'],
        ];
    }
}
