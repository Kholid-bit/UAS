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

<a href="index.php" ><i class='fas fa-cloud-upload-alt' style='font-size:'></i> Dashboard</a><br><br>
  <br>
<p>Pembayaran</p><br>
<a href="transaksipembayaran.php" class="active"><i class='fas fa-hand-holding-usd' style='font-size:'></i> Transaksi Pembayaran</a><br>
<a href="cekpembayaran.php"><i class='fas fa-money-check' style='font-size:'></i> Cek Pembayaran</a><br>
</div>
<body>
  <div id=container>
    <div id="main">
      <center>
    <h2>Transaksi Pembayaran</h2>
    <br>
    <div style="border: 2px solid grey; width: 500px;  padding: 20px">
      <br>
    <form action="/action_page.php">

  <label for="fname">Nama Mahasisa:</label><br>
  <input type="text" id="fname" name="fname" style="width: 300px"><br><br>
  <label for="lname">NIM :</label><br>
  <input type="text" id="lname" name="lname" style="width: 300px"><br><br>
   <label for="lname">Kelas :</label><br>
  <input type="text" id="lname" name="lname" style="width: 300px"><br><br>
   <label for="lname">DiBayar :</label><br>
  <input type="text" id="lname" name="lname"style="width: 300px"><br><br>
   <label for="lname">Total Di Bayar:</label><br>
  <input type="text" id="lname" name="lname" style="width: 300px"><br><br>
  <label for="lname">Sisa :</label><br>
  <input type="text" id="lname" name="lname" style="width: 300px"><br><br>
  <input type="submit" value="Submit" style="background-color: green; padding: 10px 30px ">
</form>
<br>
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