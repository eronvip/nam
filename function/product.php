<?php
    //include('../inc/ketnoi_new.php');
    class Product
    {
//        public $pro_id;
//        public $pro_name;
//        public $pro_number;
//        public $price;
//        public $price_sale;
//        public $description;
//        public $status;
//        public $category;

        public function getProductbyId($id, $ketnoi)
        {
            $laysp = "SELECT * FROM san_pham WHERE id='" . $id . "'";
            $qr_laysp = mysqli_query($ketnoi, $laysp);
            $sp = mysqli_fetch_array($qr_laysp);
            return $sp;
        }
    }