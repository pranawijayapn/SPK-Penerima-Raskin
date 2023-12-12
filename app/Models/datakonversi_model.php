<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakonversi_model extends Model
{
    protected $table = 'wp_pangkat';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilwppangkat()
    {
        $dataquery=$this->db->query("select * from wp_pangkat");
        return $dataquery->getResult();
    }

    
}