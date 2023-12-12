<?php 
namespace App\Models;
use CodeIgniter\Model;

class datamatrixkeputusan_model extends Model
{
    protected $table = 'vmatrixkeputusan';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilmatrixkeputusan()
    {
        $dataquery=$this->db->query("select * from vmatrixkeputusan ORDER BY id_matrix");
        return $dataquery->getResult();
    }

    
}