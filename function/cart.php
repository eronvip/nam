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

            $arr_cart = [];
            if (isset($_SESSION['CART']))
                $arr_cart = array_merge($arr_cart, $_SESSION['CART']);
            array_push($arr_cart, $obj_cart);
            $_SESSION['CART'] = $arr_cart;

            //setcookie("CART_GUEST", json_encode($obj_cart), time() + (86400 * 30));
            //return "abc";
        }
        public function getIdSPbySession($item, $_key){
            foreach($item as $key=>$value)
            {
                if($key == $_key)
                    return($value);
            }
        }
        public function hasProduct($id){
            $arr_cart = [];
            if (isset($_SESSION['CART'])) {
                $arr_cart = array_merge($arr_cart, $_SESSION['CART']);
                foreach ($arr_cart as $item) {
                    if ($this->getIdSPbySession($item, 'id_sp') == $id)
                        return true;
                }
            }
            return false;
        }
    }