<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="index.css" type="text/css" rel="stylesheet" />
<link href="style.css" type="text/css" rel="stylesheet" />
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

<a href="indexxx.php" class="active"><i class='fas fa-cloud-upload-alt' style='font-size:'></i> Dashboard</a><br><br>
  <br>
<p>Pembayaran</p><br>
<a href="transaksipembayaran.php"><i class='fas fa-hand-holding-usd' style='font-size:'></i> Transaksi Pembayaran</a><br>
<a href="cekpembayaran.php"><i class='fas fa-money-check' style='font-size:'></i> Cek Pembayaran</a><br>
</div>
<body>
  <div id=container>
    <div id="main">
    <h3 style="font-size: 30px">Dashboard</h3>
    <div class="row">

<div class="box">
      <a href="" class="hoverbox" style="color: green;">
      <div style="border: 5px solid green">
      <h3 style="text-align: center; display: inline-block;">Mahasiswa</h3>
      <img src="people.png" alt="">
     </div>
  </a>
     <div style="float: right;
     background-color: green;
     width: 90px;
     margin-bottom: 10px;
     padding: 10px 20px 20px;
     font-size: 30px ;
     color: white">
     <p>Jumlah</p>
     <div style="border: 2px solid #eee; padding: 10px 10px">1980</div>
   </div>
  </div>


  <div class="box">
<a href="" class="hoverbox" style="color: purple;">
  <div style="border: 5px solid purple">
       <h3 style="text-align: center; display: inline-block; ">Pembayaran</h3>
        <img src="pembayaran.png" alt="">
    </div>
  </a>
        <div style="float: right;
     background-color: purple;
     width: 90px;
     margin-bottom: 10px;
     padding: 10px 20px 20px;
     font-size: 30px ;
     color: white">
     <p>Jumlah</p>
     <div style="border: 2px solid #eee; padding: 10px 10px">80</div>
   </div>
</div>



     <div class="box">
      <a href="" class="hoverbox" style="color: pink;">
      <div style="border: 5px solid pink">
     <h3 style="text-align: center; display: inline-block;">Pendaftaran</h3>
        <img src="buku.png" alt="" >
    </div>
  </a>
     <div style="float: right;
     background-color: pink;
     width: 90px;
     margin-bottom: 10px;
     padding: 10px 20px 20px;
     font-size: 30px ;
     color: white">
     <p>Jumlah</p>
     <div style="border: 2px solid #eee; padding: 10px 10px">980</div>
   </div>
    </div>

    <marquee>Selamat Datang Kholid Firdaus dan Selamat Bekerja</marquee>

    </div>
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