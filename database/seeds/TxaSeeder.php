<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class TxaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $txa = [];

        $txa_age = [];
        for($i = 1; $i <= 144; $i++) {
            $txa_age[] = $i;
        }

        $dose = [];
        foreach($txa_age as $t) {
            if($t <= 1) $dose[] = 50;
            if($t > 1 & $t < 9) $dose[] = 100;
            if($t >= 9 & $t < 24) $dose[] = 150;
            if($t >= 24 & $t < 48) $dose[] = 200;
            if($t >= 48 & $t < 60) $dose[] =250;
            if($t >= 60 & $t < 84) $dose[] = 300;
            if($t >= 84 & $t < 96) $dose[] = 350;
            if($t >= 96 & $t < 108) $dose[] = 400;
            if($t >= 108 & $t < 120) $dose[] = 450;
            if($t >= 120 & $t < 144) $dose[] = 500;
            if($t == 144) $dose[] = 1;
        }

        //$dose = [50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 1];
        $concentration = 100;
        Log::debug($txa_age);
        Log::debug($dose);

        for ($i=0; $i<144; $i++) {
            $txa[] = [
                'age' => $txa_age[$i],
                'dose' => ($i == 143) ? $dose[$i]." grams" : $dose[$i]." mg",
                'concentration' => "100 mg/ml",
                'volume' => ($i == 143) ? ($dose[$i]*1000)/$concentration." ml" : $dose[$i]/$concentration." ml",
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];

            DB::table("txas")->insert($txa);

            $txa = [];
        }
    }
}
