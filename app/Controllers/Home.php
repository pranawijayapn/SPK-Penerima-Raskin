<?php

namespace App\Controllers;
use App\Models\namajenis_model;
use App\Models\datakriteria_model;
use App\Models\datakonversi_model;
use App\Models\datanormalisasi_model;
use App\Models\dataperankingan_model;
use App\Models\datakeputusan_model;
use App\Models\datamatrixkeputusan_model;
use App\Models\dataskala_model;
use App\Models\datavektors_model;
use App\Models\datawarga_model;

class Home extends BaseController
{
    public function index()
    {
         echo View('admin_header');
         echo View('admin_nav');
         echo View ('home'); 
         echo View('admin_footer');
    }

   
    public function callviewdatawarga()
    {
        $mb = new datawarga_model();
        $datamb = $mb->tampildata();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewdatawarga',$data); 
        echo View('admin_footer');
    }
    public function callviewdatakriteria()
    {
        $mb = new datakriteria_model();
        $datamb = $mb->tampilkriteria();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewdatakriteria',$data); 
        echo View('admin_footer');
    }

    public function callviewdataskala()
    {
        $mb = new dataskala_model();
        $datamb = $mb->tampilskala();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewdataskala',$data); 
        echo View('admin_footer');
    }

    public function callviewdatavektors()
    {
        $mb = new datavektors_model();
        $datamb = $mb->tampilnilaiS();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_vectors',$data); 
        echo View('admin_footer');
    }

    public function callviewhitung()
    {
        $mb = new datakonversi_model();
        $datamb = $mb->tampilwppangkat();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_wppangkat',$data); 
        echo View('admin_footer');
    }
    public function callviewnormalisasi()
    {
        
        $mb = new datanormalisasi_model();
        $datamb = $mb->tampilnormalisasi();
        $data = array('dataMb'=> $datamb);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewnormalisasi',$data); 
        echo View('admin_footer');
    }

    public function callviewranking()
    {
        $mb = new dataperankingan_model();
        $datamb = $mb->tampilranking();
        $data = array('dataMb'=> $datamb);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewperankingan',$data); 
        echo View('admin_footer');
    }

    public function callviewkeputusan()
    {
        $mb = new datakeputusan_model();
        $datamb = $mb->tampilkeputusan();
        $data = array('dataMb'=> $datamb);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewkeputusan',$data); 
        echo View('admin_footer');
    }

    public function callviewmatrixkeputusan()
    {
        $mb = new datamatrixkeputusan_model();
        $datamb = $mb->tampilmatrixkeputusan();
        $data = array('dataMb'=> $datamb);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewmatrixkeputusan',$data); 
        echo View('admin_footer');
    }

   
}
