<?php

namespace App\Models;

use CodeIgniter\Model;

class OcrModel extends Model
{
    protected $table            = 'data_ocr';
    protected $primaryKey       = 'id_ocr';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_relay', 'ocr_arus_1', 'ocr_tms', 'ocr_curva_1', 'ocr_arus_2', 'ocr_td', 'ocr_curva_2', 'ocr_arus_3', 'ocr_delay', 'ocr_curva_3'];

    public function getOCR($id = null)
    {
        if ($id != null) {
            return $this->select('data_ocr.*, data_relay_proteksi.nama_keypoint')
                ->join('data_relay_proteksi', 'data_relay_proteksi.id_relay = data_ocr.id_relay')
                ->find($id);
        }

        return $this->select('data_ocr.*, data_relay_proteksi.nama_keypoint')
            ->join('data_relay_proteksi', 'data_relay_proteksi.id_relay = data_ocr.id_relay')
            ->findAll();
    }

    public function saveOCR($data){
        return $this->insert($data);
    }

    public function updateOCR($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteOCR($id){
        return $this->delete($id);
    }

    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
