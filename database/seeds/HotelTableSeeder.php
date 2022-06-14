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
                'begin_at' => ('m d Y'),
                'end_at' => ('m d Y'),
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
                'begin_at' => ('m d Y'),
                'end_at' => ('m d Y'),
                'price' => 599.99,
                'note' => 'lorem picsum'
            ],
        ];
        /* Avvio il ciclo ForEach */
        foreach ($hotels as $hotel) {
            /* Avvio l'istanza della classe */
            $new_hotels = new Hotel(); // Questa è l'istanza tramite modello
            /* Ora passo i dati */
            $new_hotels->name = $hotel['name']; // Richiamo del Dato name
            $new_hotels->address = $hotel['address']; // Richiamo del Dato address
            $new_hotels->city = $hotel['city']; // Richiamo del Dato city
            $new_hotels->civic = $hotel['civic']; // Richiamo del Dato civic
            $new_hotels->begin_at = $hotel['begin_at']; // Richiamo del Dato begin_at
            $new_hotels->end_at = $hotel['end_at']; // Richiamo del Dato end_at
            $new_hotels->price = $hotel['price']; // Richiamo del Dato price
            $new_hotels->note = $hotel['note']; // Richiamo del Dato note
            /* Ora salvo */
            $new_hotels->save();

        }
    }
}
