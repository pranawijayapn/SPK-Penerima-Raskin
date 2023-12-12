<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakeputusan_model extends Model
{
    protected $table = 'wp_hasil';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkeputusan()
    {
        $dataquery=$this->db->query("select * from wp_hasil");
        return $dataquery->getResult();
    }

    
}