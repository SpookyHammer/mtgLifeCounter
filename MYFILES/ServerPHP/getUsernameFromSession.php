<?php
/**
 * Created by PhpStorm.
 * User: Kaân Gostek
 * Date: 30/04/2017
 * Time: 19:05
 */
if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}else{
    echo "UnknownUser";
}