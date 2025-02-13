<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PERHITUNGAN DISKON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url(foto.jpg);
            text-align: left;
            background-size: cover,cover;
        }
        h2{
            color: white;
            text-shadow: none;
        }
        p.copyright{ 
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">APLIKASI PERHITUNGAN DISKON</h2>
                <form method="post" class="border rounded bg-light p-2">
                    <label class="form-label">HARGA BARANG (Rp)</label>
                    <input type="number" name="harga" class="form-control" placeholder="MASUKKAN HARGA BARANG" min="0" step="0,01" autocomplete="off" required onkeypress="return event.charCode >= 47 && event.charCode <=57 ">
                    <label class="form-label">DISKON (%)</label>
                    <input type="text" name="diskon" class="form-control" placeholder="MASUKKAN NILAI DISKON" min="0" max="100" step="0,01" autocomplete="off" required onkeypress="return event.charCode >= 47 && event.charCode <=57 ">
                    <button type="submit" class="btn btn-primary w-100 mt-2" name="hitung">Hitung</button>
                </form>
                <?php
                if (isset($_POST['hitung'])){
                    $harga = $_POST['harga'];
                    $diskon = $_POST['diskon'];

                    if ($harga <0){
                        echo "<script>alert ('HARGA TIDAK BOLEH NEGATIF')</script>";
                    }elseif($diskon <0 || $diskon >100){
                        echo "<script>alert ('NILAI DISKON HARUS DIANTARA 0-100')</script>";
                    } else {
                        $nilai_diskon = $harga * ($diskon/100);
                        $total_harga = $harga - $nilai_diskon; ?>
                        <div id="hasil "class="border rounded bg-light p-2 mt-5">
                           <p>HARGA BARANG : (Rp) <b><?php echo number_format($harga ,2,',','.')?></b></p>
                           <p>DISKON <?php echo $diskon?>% :<b><?php echo number_format($nilai_diskon ,2,',','.');?></b></p>
                           <p>TOTAL HARGA SETELAH DISKON: (Rp) <b><?php echo number_format($total_harga ,2,',','.')?></b></p>

                    </div>
                        

                  <?php  }
                }
                ?>
            </div>
        </div>
    </div>
    <p class="text-center copyright">&copy; UKK DISKON | IBNU ZAKI HISYAM | XII PPLG</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>