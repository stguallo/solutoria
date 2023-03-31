<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        $endpoint = 'https://postulaciones.solutoria.cl/api/indicadores';

        $token = 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJQb3N0dWxhY2lvbmVzSldUU2VydmljZUFjY2Vzc1Rva2VuIiwianRpIjoiNmQyMmExMzEtNTdmNC00NmJhLTg0MTItOTM5YzAxODMwYzZjIiwiaWF0IjoiMy8xLzIwMjMgMTI6MjI6NTggQU0iLCJVc2VySWQiOiJJZCIsIkRpc3BsYXlOYW1lIjoiUG9zdHVsYW50ZSAyMDIzMDMiLCJVc2VyTmFtZSI6Im1hbnVlbHNhbGF6YXJkenZral9oaWNAaW5kZWVkZW1haWwuY29tIiwiRW1haWwiOiJtYW51ZWxzYWxhemFyZHp2a2pfaGljQGluZGVlZGVtYWlsLmNvbSIsImV4cCI6MTY3NzY0NDg3OCwiaXNzIjoiaHR0cHM6Ly9zb2x1dG9yaWEuY2wvIiwiYXVkIjoiSldUU2VydmljZVBvc3R1bGFudGUifQ.9YVJALm4eQRpkbio1-W0Ba-lfld1wJc1Gwi1ShQrXow';

        $data = array();
        $data['data'] = 'value';

        $options = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n" .
                            "Authorization: $token\r\n",
                'content' => http_build_query($data)
            )
        );

        $context  = stream_context_create($options);
        $response = file_get_contents($endpoint, false, $context);

        $userData = json_decode($response);

        if ($userData) {
            $userDataString = json_encode($userData);
            echo $userDataString;

            foreach ($userData as $data) {
                echo $data;
            }
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
