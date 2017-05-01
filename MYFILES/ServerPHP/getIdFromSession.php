<?php
/**
 * Created by PhpStorm.
 * User: Kaân Gostek
 * Date: 30/04/2017
 * Time: 19:05
 */
if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
}else{
    echo "UnknownId";
}