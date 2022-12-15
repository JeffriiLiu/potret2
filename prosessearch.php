<?php  
 require 'koneksi2.php';
 $gambar = query("SELECT * FROM gambar");

//  function query($query){
//     global $connect;

//  }


function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;   
}


 //tombol cari di klik
if(isset($_POST ["cari"])) {
   $gambar = cari($_POST["keyword"]);
}


//  $no_urut = 0;
//  $search = $_POST['search'];
//  $query = "SELECT * FROM gambar WHERE nama LIKE '%$search%'";
//  $result = mysql_query($query);
//  while($data = mysql_fetch_array($result)) {
//   $no_urut++;
//   echo "

//      <td>".$data['nama']."</td>";
//  }
?>