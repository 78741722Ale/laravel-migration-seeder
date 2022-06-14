<?php

use App\Hotel; // Questo è il modello appena creato in app
use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* All'interno di questa funzione comincio
        con il creare un array di vari oggetti, poi farò forEach */
        $hotels = [
            /* Questo è il primo hotel che intendo
            Pushare. le proprietà (key) equivalgono a quelle presenti nella
            migration, quindi $table->string('name', 40); */
            [
                'name' => 'Paris Hotel',
                'address' => 'Via Leonardo Da vinci',
                'city' => 'Milano',
                'civic' => 5,
                'begin_at' => 25-5-2022,
                'end_at' => 27-5-2022,
                'price' => 299.99,
                'note' => 'lorem picsum'
            ],
            /* Questo è il primo hotel che intendo
            Pushare */
            [
                'name' => 'Berlin Hotel',
                'address' => 'Via Leonardo Da vinci',
                'city' => 'Torino',
                'civic' => 10,
                'begin_at' => 21-6-2021,
                'end_at' => 27-6-2021,
                'price' => 599.99,
                'note' => 'lorem picsum'
            ],
        ];
    }
}
