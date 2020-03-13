<?php

use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("criterias")->insert([
            "version" => "SWAST TXA PGD v3.4",
            "inclusion"=>"+ Post-partum haemorhage within 3 hours of giving birth;
            + Haemorrhage due to disorders of obstetric origin where the
            patient exhibits signs and symptoms of shock.
            + Traumatic cardiac arrest patients with suspected haemorrhage.
            + Treatment of traumatic haemorrhage within 3 hours of injury in adult patients who fulfil any of the following criteria at any time:
                + Systolic blood pressure < 90mmHg or absent radial pulse 
                + Heart rate > 110 bpm
                + Considered to be at risk of significant haemorrhage
                + OR 
                   + Children who show signs of potential circulatory failure (see JRCALC for assessment of children)",
            "exclusion"=>"+ Known hypersensitivity to tranexamic acid
            + Greater than three hours since known or suspected onset of
            injury
            + Isolated suspected brain injury (no evidence of effectiveness or harm)
            + Women with minor vaginal bleeding or spotting without associated signs and symptoms of shock.",
            "user_id"=>"1",
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s")
        ]);
    }
}
