
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="index.css" type="text/css" rel="stylesheet" />
</head>



<nav style="height: 50px;  background-color: white; box-shadow:0 0 1em #CCCCCC; ">
<div style="padding:10px 10px ">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <button style="float: right; border: 2px solid red; background-color: white; padding: 5px 5px;">Log out  <i class='fas fa-power-off' style='font-size:'></i></button>
</div>
</nav>
<hr>



<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <center>
    <img src="logo1.jpg" alt="UPB" style="width: 100px">
    <p style="color: white">Universitas Pelita Bangsa</p></center>
  <br>
  <br>
  <br>

<a href="indexxx.php" ><i class='fas fa-cloud-upload-alt' style='font-size:'></i> Dashboard</a><br><br>
  <br>
<p>Pembayaran</p><br>
<a href="transaksipembayaran.php" ><i class='fas fa-hand-holding-usd' style='font-size:'></i> Transaksi Pembayaran</a><br>
<a href="cekpembayaran.php" class="active"><i class='fas fa-money-check' style='font-size:'></i> Cek Pembayaran</a><br>
</div>
<body>
  <div id=container>
    <div id="main">
      <center>
    <h2>Cek Pembayaran</h2>
    <br>
    <div style="border: 2px solid grey; width: 800px;  padding: 20px">


  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Cari Mahasiswa ..." name="search">
      <button type="submit" ><i class="fa fa-search"></i></button>
    </form>
  </div>
 <br>

  
    
      <br>
      <br>
   <table>
  <tr>
    <th>Nama Mahasiswa</th>
    <th>NIM</th>
    <th>Jumlah Pembayaran</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>Ramadan</td>
    <td>3118100165</td>
    <td>5.000.000</td>
    <td>LUNAS</td>
  </tr>
   <tr>
    <td>Hafiz Lubis</td>
    <td>311810166</td>
    <td>4.000.000</td>
    <td>BELUM LUNAS</td>
  </tr>
 <tr>
    <td>Ronald Simanjuntak</td>
    <td>311810167</td>
    <td>2.000.000</td>
    <td>BELUM LUNAS</td>
  </tr>
   <tr>
    <td>Kholid Firdaus</td>
    <td>311810168</td>
    <td>2.000.000</td>
    <td>BELUM LUNAS</td>
  </tr>
   <tr >
    <th></th>
    <th></th>
    <th>Status Lunas</th>
    <th>Rp. 5.000.000</th>
  </tr>

</table>
<br>
<div style="float: right;"><a href="">Next Table >> </a></div>
</div>
</center>
    </div>
</div>
</body>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<?php include_once "index.php" ;?>
