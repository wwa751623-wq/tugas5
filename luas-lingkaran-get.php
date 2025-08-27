<?php
$hasil = "";
if (isset($_GET['jari'])) {
    $r = $_GET['jari'];
    $luas = 3.14 * $r * $r;
    $hasil = "Luas Lingkaran = $luas";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Luas Lingkaran (GET)</title>
<style>
    body {font-family: Arial, sans-serif; background: #e6ffe6; margin:0; padding:0;}
    .container {max-width: 500px; margin: 50px auto; background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.2);}
    h2 {text-align: center; color: #2d6a4f;}
    label {font-weight: bold;}
    input {width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 8px;}
    button {width: 100%; padding: 10px; background: #2d6a4f; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px;}
    button:hover {background: #1b4332;}
    .result {margin-top: 15px; padding: 12px; background: #d8f3dc; border-radius: 8px; text-align: center; font-weight: bold;}
</style>
</head>
<body>
<div class="container">
  <h2>Hitung Luas Lingkaran (GET)</h2>
  <form method="get">
    <label>Jari-jari (r):</label>
    <input type="number" step="any" name="jari" required>
    <button type="submit">Hitung</button>
  </form>
  <?php if($hasil) echo "<div class='result'>$hasil</div>"; ?>
</div>
</body>
</html>
