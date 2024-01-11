<?php

$DB_Nama = "crud_perpustakaan";
$DB_User = "root";
$DB_Password = "";
$DB_Host = "127.0.0.1";
$DB_Port = 3306;

$konek = mysqli_connect($DB_Host, $DB_User, $DB_Password, $DB_Nama, $DB_Port);

if (mysqli_errno($konek)) {
    echo "error". mysqli_errno();
}

