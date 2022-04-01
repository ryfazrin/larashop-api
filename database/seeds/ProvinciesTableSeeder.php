<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url_province = "https://api.rajaongkir.com/starter/province?key=ad306fe24bcd8815881bf675897cd490";
        $json_str = file_get_contents($url_province);
        $provinces = [];
        foreach ($json->rajaongkir->results as $province) {
            $provinces[] = [
                'id' => $province->province_id,
                'province' => $province->province
            ];
        }
        DB::table('provinces')->insert($provinces);
    }
}
