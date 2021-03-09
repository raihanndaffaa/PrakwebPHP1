<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>

<body>
    <div class="bg-success p-5">
        <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="tugas2.php" method="post" class="mt-3">

                    <div class="form-group">
                        <label for=""> NAMA PEMBELI</label>
                        <input type="text" name="customer" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">BARANG</label><br>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="checkbox" name="lang[]" id="inlineRadio1" value="TV">
                            <label class="form-check-label" for="inlineRadio1">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lang[]" id="inlineRadio2" value="KULKAS">
                            <label class="form-check-label" for="inlineRadio2">KULKAS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="lang[]" id="inlineRadio3" value="MESIN CUCI">
                            <label class="form-check-label" for="inlineRadio3">MESIN CUCI</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">BERAPA BARANG TV YANG DI BELI: </label>
                        <input type="number" name="jumtv" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">BERAPA BARANG KULKAS YANG DI BELI: </label>
                        <input type="number" name="jumkulkas" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">BERAPA BARANG MESIN CUCI YANG DI BELI: </label>
                        <input type="number" name="jumcuci" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TOTAL BARANG</label>
                        <input type="text" name="totali" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">TANGGAL PEMBELIAN</label>
                        <input type="date" name="date" value="" class="form-control">
                    </div>

                    <label for="">JENIS KURIR</label>
                    <select class="form-select form-control" name="jeniskur" class="form-control">
                        <option selected>PILIH JENIS KURIR :</option>
                        <option value="TIKI">TIKI</option>
                        <option value="SI CEPAT">SI CEPAT</option>
                        <option value="POS">POS</option>
                        <option value="GRAB">GRAB</option>
                        <option value="GOJEK">GOJEK</option>
                    </select>
                    <div class="form-group">
                        <label for="">ALAMAT PENGIRIMAN</label>
                        <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">BIAYA PENGIRIMAN</label>
                        <input type="text" name="ongkir" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">BIAYA ASURANSI</label>
                        <input type="text" name="ongasura" value="" class="form-control">
                    </div>
                    <input type="submit" value="SIMPAN" name="simpan" class="btn btn-success btn-sm btn-block">

                </form>
            </div>

            <?php
            $customer = $_POST['customer'];
            $jumtv = $_POST['jumtv'];
            $totaltv = (int)$jumtv * 3000000;
            $jumkulkas = $_POST['jumkulkas'];
            $totalkulkas = (int)$jumkulkas * 6000000;
            $jumcuci = $_POST['jumcuci'];
            $totalcuci = (int)$jumcuci * 4000000;
            $totali = $_POST['totali'];
            $date = $_POST['date'];
            $jeniskur = $_POST['jeniskur'];
            $alamat = $_POST['alamat'];
            $ongkir = $_POST['ongkir'];
            $ongasura = $_POST['ongasura'];
            $a = array($totaltv, $totalkulkas, $totalcuci, $ongkir, $ongasura);
            $total = array_sum($a);
            $save = $_POST['simpan']

            ?>


            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                        HASIL DATA
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">NAMA PEMBELI : <?php echo $customer; ?></li>
                        <li class="list-group-item">BARANG YANG DIBELI : <?php if (!empty($_POST['lang'])) {

                                                                                foreach ($_POST['lang'] as $value) {
                                                                                    echo "<br> -" . $value;
                                                                                }
                                                                            } ?></li>
                        <li class="list-group-item">TANGGAL PEMBELIAN : <?php echo $date; ?></li>
                        <li class="list-group-item">JENIS KURIR : <?php echo $jeniskur; ?></li>
                        <li class="list-group-item">ALAMAT PENGIRIMAN : <?php echo $alamat; ?></li>
                        <li class="list-group-item">BIAYA PENGIRIMAN : <?php echo $ongkir; ?></li>
                        <li class="list-group-item">BIAYA ASURANSI : <?php echo $ongasura; ?></li>
                        <li class="list-group-item">TOTAL PEMBAYARAN : <?php echo 'Rp.' . $total; ?></li>

                    </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                        DAFTAR HARGA BARANG
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : Rp.3.000.000</li>
                        <li class="list-group-item">KULKAS : Rp.6.000.000</li>
                        <li class="list-group-item">MESIN CUCI : Rp. 4.000.000</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</body>

</html>