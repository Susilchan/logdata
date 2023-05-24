<?php

namespace App\Controllers;

use App\Models\ApiModel;

class H31 extends BaseController
{
    public function h31()
    {
        // $sumber = 'http://103.76.120.90/logdata';
        // $konten = file_get_contents($sumber);
        // $api = json_decode($konten, true);
        $apiModel = new ApiModel();
        $api = $apiModel->findAll();

        $hourlyAverages = [];
        foreach ($api as $row) {
            $timestamp = strtotime($row['created_date']);
            $hour = date('Y-m-d H:m', $timestamp);

            if (!isset($hourlyAverages[$hour])) {
                $hourlyAverages[$hour] = [
                    'count' => 0,
                    'suhu' => 0,
                    'kelembapan' => 0,

                ];
            }

            $hourlyAverages[$hour]['count']++;
            $hourlyAverages[$hour]['suhu'] += floatVal($row['suhu']);
            $hourlyAverages[$hour]['kelembapan'] += floatVal($row['kelembapan']);
        }
        // Calculate the average value
        $averages = [];
        foreach ($hourlyAverages as $hour => $api) {
            $averages[$hour]['hour'] = $hour;
            $averages[$hour]['suhu'] = $api['suhu'] / $api['count'];
            $averages[$hour]['kelembapan'] = $api['kelembapan'] / $api['count'];
        }

        // Display the average values
        $data['average'] = $averages;
        return view('h31', $data);
    }
}
