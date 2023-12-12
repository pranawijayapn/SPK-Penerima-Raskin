<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakriteria_model extends Model
{
    protected $table = 'kriteria';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkriteria()
    {
        $dataquery=$this->db->query("select * from kriteria");
        return $dataquery->getResult();
    }

    
}