<?php
$hasil = "";
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['t'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $t = $_GET['t'];
    $luas = 0.5 * ($a + $b) * $t;
    $hasil = "Luas Trapesium = $luas";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Luas Trapesium (GET)</title>
<style>
    body {font-family: Arial, sans-serif; background: #fffde7; margin:0; padding:0;}
    .container {max-width: 500px; margin: 50px auto; background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);}
    h2 {text-align: center; color: #f77f00;}
    label {font-weight: bold;}
    input {width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 8px;}
    button {width: 100%; padding: 10px; background: #f77f00; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px;}
    button:hover {background: #d00000;}
    .result {margin-top: 15px; padding: 12px; background: #ffe6a7; border-radius: 8px; text-align: center; font-weight: bold;}
</style>
</head>
<body>
<div class="container">
  <h2>Hitung Luas Trapesium (GET)</h2>
  <form method="get">
    <label>Sisi Atas (a):</label>
    <input type="number" step="any" name="a" required>
    <label>Sisi Bawah (b):</label>
    <input type="number" step="any" name="b" required>
    <label>Tinggi (t):</label>
    <input type="number" step="any" name="t" required>
    <button type="submit">Hitung</button>
  </form>
  <?php if($hasil) echo "<div class='result'>$hasil</div>"; ?>
</div>
</body>
</html>
