<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container">
        <right><a href="<?= base_url('budaya/tampil') ?>" class="btn btn-info">
                << KEMBALI</a> </right> <center>
                    <h1>Tambah Data Budaya</h1>
                    </center>
                    <table class="table table-bordered">
                        <form action="<?= base_url('budaya/tambah_data_action') ?>" method="post">
                            <thead>
                                <tr>
                                    <th>Nama Perguruan</th>
                                    <th>:</th>
                                    <th><input type="text" name="nama_pgr" required autocomplete="off" /></th>
                                </tr>
                                <tr>
                                    <th>Jenis Beladiri</th>
                                    <th>:</th>
                                    <th><input type="text" name="jenis_beladiri" required autocomplete="off" /></th>
                                </tr>
                                <tr>
                                    <th>Tahun Berdiri</th>
                                    <th>:</th>
                                    <th><input type="number" name="tahun_berdiri" required autocomplete="off" /></th>
                                </tr>
                                <tr>
                                    <th>Pusat Perguruan</th>
                                    <th>:</th>
                                    <th><input type="text" name="pusat_pgr" required autocomplete="off" /></th>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <center><input type="submit" value="TAMBAH DATA" /></center>
                                    </th>
                                </tr>
                            </thead>
                        </form>
                    </table>
    </div>
</body>

</html>