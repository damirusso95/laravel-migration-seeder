<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i < 10; $i++) { 
            
        
        // Italo
        $italo = new Train();
        $italo->azienda = "italo";
        $italo->tipologia_treno = "Freccia";
        $italo->stazione_di_partenza = "Torino";
        $italo->stazione_di_arrivo = "Catania";
        $italo->Orario_di_partenza = '2024-07-03 10:02:00';
        $italo->Orario_di_arrivo = '2024-07-03 12:00:00';
        $italo->codice_treno = '0015';
        $italo->classe_servizio = "A";
        $italo->numero_di_carrozze = 8;
        $italo->costo_biglietto = 10.99;
        $italo->in_orario = true; 
        $italo->cancellato = false; 
        $italo->save();

        // trenitalia
        $trenitalia = new Train();
        $trenitalia->azienda = "Trenitalia";
        $trenitalia->tipologia_treno = "Freccia rossa";
        $trenitalia->stazione_di_partenza = "Torino";
        $trenitalia->stazione_di_arrivo = "firenze";
        $trenitalia->Orario_di_partenza = '2024-07-03 10:02:00';
        $trenitalia->Orario_di_arrivo = '2024-07-03 12:00:00';
        $trenitalia->codice_treno = '0015';
        $trenitalia->classe_servizio = "B";
        $trenitalia->numero_di_carrozze = 10;
        $trenitalia->costo_biglietto = 7.99;
        $trenitalia->in_orario = true; 
        $trenitalia->cancellato = true;
        $trenitalia->save();
    }
    }

}
