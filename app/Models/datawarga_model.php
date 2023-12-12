<?php 
namespace App\Models;
use CodeIgniter\Model;

class datawarga_model extends Model
{
    protected $table = 'alternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery=$this->db->query("select * from alternatif");
        return $dataquery->getResult();
    }

    
}