<?php 
namespace App\Models;
use CodeIgniter\Model;

class datavektors_model extends Model
{
    protected $table = 'wp_nilais';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnilaiS()
    {
        $dataquery=$this->db->query("select * from wp_nilais");
        return $dataquery->getResult();
    }

    
}