<?php

namespace App\Models;

use CodeIgniter\Model;

class RelayModel extends Model
{
    protected $table            = 'data_relay_proteksi';
    protected $primaryKey       = 'id_relay_proteksi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_ulp', 'id_penyulang', 'nama_relay', 'status_relay', 'urutan_keypoint', 'nama_keypoint', 'merk_relay', 'type_relay', 'seri_relay', 'tahun_relay', 'umur_relay', 'com_relay', 'rasio_ct_primer', 'rasio_ct_sekunder'];

    public function getRelay($id = null)
    {
        if ($id != null) {
            return $this->select('data_relay_proteksi.*, data_ulp.nama_ulp, data_penyulang.nama_penyulang_lama')
                ->join('data_ulp', 'data_ulp.id_ulp = data_relay_proteksi.id_ulp')
                ->join('data_penyulang', 'data_penyulang.id_penyulang = data_relay_proteksi.id_penyulang')
                ->find($id);
        }

        return $this->select('data_relay_proteksi.*, data_ulp.nama_ulp, data_penyulang.nama_penyulang_lama')
            ->join('data_ulp', 'data_ulp.id_ulp = data_relay_proteksi.id_ulp')
            ->join('data_penyulang', 'data_penyulang.id_penyulang = data_relay_proteksi.id_penyulang')
            ->findAll();
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
