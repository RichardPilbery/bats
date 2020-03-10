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
            "version" => "SWAST PGD v14.0",
            "inclusion"=>"+ Injured patient triggering local network major trauma criteria
+ Head injury patient, aged 18 and over with a GCS of 12 or less
+ Patients with a time critical injury where significant internal or external haemorrhage is known or suspected",
            "exclusion"=>"+ Known previous analphylactic reaction to TXA
+ Bleeding started more than 3 hours ago
+ Obvious resolution of haemorrhage
+ Post-partum haemorrhage before the administration of an uterotonic unless trauma is suspected cause
+ Critical interventions required",
            "user_id"=>"1",
            "created_at"=>date("Y-m-d H:i:s"),
            "updated_at"=>date("Y-m-d H:i:s")
        ]);
    }
}
