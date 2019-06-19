<?php

use Illuminate\Database\Seeder;
use App\OnderzoekGroep;

class OnderzoekGroepenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->groep("Economie & Management");
        $this->groep("Technologie & Innovatie");
        $this->groep("Educatie & Pedagogiek");
        $this->groep("Zorg & Welzijn");
        $this->groep("De Ruyter Academy");
        $this->groep("Delta Academy");
        $this->groep("Deeltijd Academy");
    }

    public function groep($name) {
        OnderzoekGroep::create([
            'name' => $name,
        ]);
    }
}
