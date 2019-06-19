<?php

use Illuminate\Database\Seeder;
use App\Opleiding;
use App\OpleidingWaardes;

class OpleidingenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->opleiding("Bedrijfskunde");
        $this->opleiding("Bouwkunde");
        $this->opleiding("Chemie");
        $this->opleiding("Civiele Techniek");
        $this->opleiding("Commerciele Economie");
        $this->opleiding("Communicatie");
        $this->opleiding("Engineering");
        $this->opleiding("Finance & Control (Bedrijfseconomie)");
        $this->opleiding("HBO-ICT");
        $this->opleiding("Human Resource Management");
        $this->opleiding("International Business");
        $this->opleiding("Leraar Basisonderwijs)");
        $this->opleiding("Logistics Engineering");
        $this->opleiding("Maritiem Officier");
        $this->opleiding("Social Work");
        $this->opleiding("Sportkunde");
        $this->opleiding("Technische Bedrijfskunde");
        $this->opleiding("Tourism Management");
        $this->opleiding("Verpleegkunde");
        $this->opleiding("Verpleegkunde & Verloskunde");
        $this->opleiding("Watermanagement/Aquatische Ecotechnologie");
        $this->opleiding("Watermanagement/Delta Management");
        $this->opleiding("Pedagogiek");
    }


    public function opleiding($name) {
        $o = Opleiding::create([
            'name' => $name,
        ]);

       OpleidingWaardes::create([
            'opleiding_id' => $o->id,
            'timestamp' => now()
        ]);
    }
}
