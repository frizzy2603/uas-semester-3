<?php
 require "database.php";

 function get($query){
     global $konek;
     $result = mysqli_query($konek, $query);
     $data = [];
     while ($row = mysqli_fetch_assoc($result)) {
         $data[] = $row;
     }
     return $data;
 }

 function simpan($query){
     global $konek;
     mysqli_query($konek, $query);
     return mysqli_affected_rows($konek);
 }

 function hapus($query){
    global $konek;
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}