<?php
    class Cart
    {
        public $id_sp;
        public $number;
        public $datetime_cart;

        public function addToCart($post)
        {

            $obj_cart = new Cart();
            $obj_cart->id_sp = $post['id_san_pham'];
            $obj_cart->number = $post['number_pro'];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $obj_cart->datetime_cart = date("Y-m-d H:i:s");

            $objCartArray = [];
            if (isset($_SESSION['CART'])) {
                $objCartArray = json_decode($_SESSION['CART'], true);
            }
            $objCartArray[] = $obj_cart;
            $_SESSION['CART'] = json_encode($objCartArray);

            //$_SESSION['CART'] = array_map("unserialize", array_unique(array_map("serialize", $_SESSION['CART'])));

            //setcookie("CART_GUEST", json_encode($obj_cart), time() + (86400 * 30));
            //return "abc";
        }
        public function hasProduct($id){
            if (isset($_SESSION['CART'])) {
                $arr_cart = json_decode($_SESSION['CART'], true);
                foreach ($arr_cart as $item) {
                    if ($item['id_sp'] == $id)
                        return true;
                }
            }
            return false;
        }
    }