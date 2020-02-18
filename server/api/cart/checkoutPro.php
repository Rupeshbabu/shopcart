<?php 
    include_once '../../config/Database.php';
    include_once '../../models/Cart.php';

    $database = new Database();
    $db = $database->connect();
    $cart = new cart($db);

    $check=array();
    session_start();
    $check['user_uni_id']=$_SESSION['user_uni_id'];

    $res=$cart->checkoutItem($check);
    if($res->rowCount()>0) {
        $result = array();
        while($pro=$res->fetch(PDO::FETCH_ASSOC)){
            extract ($pro);
            $result[]=$pro;
        }
        echo json_encode($result);
    }else{
        echo json_encode(array("msg"=>1));
    }

?>