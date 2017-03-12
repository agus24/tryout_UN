<?php
error_reporting(E_ALL);
require "../library/pull_data.class.php";


$pull = new PullData("UNBN","SD",1,"http://tryoutunonline.com/soal-86-prediksi_soal_usbn.html");
print_r($pull->setToDB());
