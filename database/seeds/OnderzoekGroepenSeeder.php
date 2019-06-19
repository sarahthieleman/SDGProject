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
        $this->groep("Customer insight & Value creation");
        $this->groep("Data science");
        $this->groep("Onderwijsexcellentie");
        $this->groep("Healthy region");
        $this->groep("Resilient Deltas");
        $this->groep("Delta Academy Applied");
        $this->groep("Marine Biobased Specialties");
    }

    public function groep($name) {
        OnderzoekGroep::create([
            'name' => $name,
        ]);
    }
}
