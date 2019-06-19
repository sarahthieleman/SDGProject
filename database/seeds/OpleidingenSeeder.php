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
        $this->opleiding("Bedrijfskunde", 1);
        $this->opleiding("Bouwkunde", 2);
        $this->opleiding("Chemie", 2);
        $this->opleiding("Civiele Techniek", 2);
        $this->opleiding("Commerciele Economie", 1);
        $this->opleiding("Communicatie", 1);
        $this->opleiding("Engineering", 2);
        $this->opleiding("Finance & Control (Bedrijfseconomie)", 1);
        $this->opleiding("HBO-ICT", 2);
        $this->opleiding("Human Resource Management", 1);
        $this->opleiding("International Business", 1);
        $this->opleiding("Leraar Basisonderwijs)", 3);
        $this->opleiding("Logistics Engineering", 1);
        $this->opleiding("Maritiem Officier", 5);
        $this->opleiding("Social Work", 4);
        $this->opleiding("Sportkunde", 4);
        $this->opleiding("Technische Bedrijfskunde", 1);
        $this->opleiding("Tourism Management", 1);
        $this->opleiding("Verpleegkunde", 4);
        $this->opleiding("Verpleegkunde & Verloskunde", 4);
        $this->opleiding("Watermanagement/Aquatische Ecotechnologie", 6);
        $this->opleiding("Watermanagement/Delta Management", 6);
        $this->opleiding("Pedagogiek", 3);
    }


    public function opleiding($name, $group) {
        $o = Opleiding::create([
            'name' => $name,
            'onderzoek_groep_id' => $group
        ]);

       OpleidingWaardes::create([
            'opleiding_id' => $o->id,
            'timestamp' => now()
        ]);
    }
}
