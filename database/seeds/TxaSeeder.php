<?php

use Illuminate\Database\Seeder;

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
        // $txa_ages = ["12 years and older", "11 years", "10 years", "9 years", "8 years", "7 years", "6 years", "5 years", "4 years", "3 years", "2 years", "18 months", "12 months", "9 months", "6 months", "3 months", "1 month", "Birth"];
        $txa_age = [1, 6, 18, 36, 48, 72, 84, 96, 108, 132, 144];
        $dose = [50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 1];
        $concentration = 100;

        for ($i=0; $i<11; $i++) {
            $txa[] = [
                'age' => $txa_age[$i],
                'dose' => ($i == 10) ? $dose[$i]." grams" : $dose[$i]." mg",
                'concentration' => "100 mg/ml",
                'volume' => ($i == 10) ? ($dose[$i]*1000)/$concentration." ml" : $dose[$i]/$concentration." ml",
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ];

            DB::table("txas")->insert($txa);

            $txa = [];
        }
    }
}
