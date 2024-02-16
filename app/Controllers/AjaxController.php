<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AjaxController extends Controller
{
    public function fetchData($keyword='MENDUNG')
    {
       
        
        $db = db_connect();

        // Fetch data from data_penyulang and data_ocr tables
        $queryData = $db->table('data_penyulang')
                        ->select('data_ocr.id_ocr, data_penyulang.nama_penyulang_lama, data_relay_proteksi.nama_keypoint, data_relay_proteksi.type_relay, CONCAT(data_relay_proteksi.rasio_ct_primer,"/", data_relay_proteksi.rasio_ct_sekunder) as "Rasio CT", data_ocr.ocr_arus_1, data_ocr.ocr_tms, data_ocr.ocr_arus_2, data_ocr.ocr_td, data_ocr.ocr_arus_3, data_ocr.ocr_delay')
                        ->join('data_relay_proteksi', 'data_penyulang.id_penyulang = data_relay_proteksi.id_penyulang')
                        ->join('data_ocr', 'data_relay_proteksi.id_relay = data_ocr.id_relay')
                        ->where('data_penyulang.nama_penyulang_lama', $keyword)
                        ->orderBy('data_relay_proteksi.urutan_keypoint')
                        ->get()->getResultArray();
        
        // Prepare datasets for Chart.js
        $datasets = [];
        foreach ($queryData as $row) {
            $id_ocr = $row['id_ocr'];

            $label = $row['nama_keypoint'];
            $data = [];
            $querySetting = $db->table('setting_ocr')
                            ->select("setting_ocr.i_nominal_ocr, 
                                      CAST(setting_ocr.i_nominal_ocr * data_ocr.ocr_arus_1 AS SIGNED) AS 'Arus Ganggu', 
                                      ROUND(data_ocr.ocr_tms * (0.14 / (POW(CAST(setting_ocr.i_nominal_ocr * data_ocr.ocr_arus_1 AS SIGNED) / data_ocr.ocr_arus_1, 0.02)-1)), 2) AS 'Waktu Kerja'")
                            ->join('data_ocr', "data_ocr.id_ocr = $id_ocr")
                            ->get()->getResultArray();
            
            // Add data to datasets array
            foreach ($querySetting as $setting) {
                $data[] = ['x' => $setting['Arus Ganggu'], 'y' => $setting['Waktu Kerja']];
            }
            $datasets[] = [
                'label' => $label,
                'data' => $data
            ];
        }
        
        // Prepare response
        $response = [
            'datasets' => $datasets,
            'dataTable' => $queryData,
        ];
        
        // Encode the response as JSON and return
        return $this->response->setJSON($response);
        
    }
}
