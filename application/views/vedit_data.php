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
        <right><a href="<?= base_url('Budaya/tampil') ?>" class="btn btn-info">
                << KEMBALI</a> </right> <center>
                    <h1>Ubah Data Budaya</h1>
                    </center>
                    <table class="table table-bordered">
                        <form action="<?= base_url('Budaya/ubah_data') ?>" method="post">
                            <thead>
                                <input type="hidden" name="id" id="id" value="<?= $dat->id ?>">
                                <tr>
                                    <th>Nama Perguruan</th>
                                    <th>:</th>
                                    <th><input type="text" name="nama_pgr" value="<?= $dat->nama_pgr ?>" required />
                                    </th>
                                </tr>
                                <tr>
                                    <th>Jenis Beladiri</th>
                                    <th>:</th>
                                    <th><input type="text" name="jenis_beladiri" value="<?= $dat->jenis_beladiri ?>"
                                            required />
                                    </th>
                                </tr>
                                <tr>
                                    <th>Tahun Berdiri</th>
                                    <th>:</th>
                                    <th><input type="number" name="tahun_berdiri" value="<?= $dat->tahun_berdiri ?>"
                                            required />
                                    </th>
                                </tr>
                                <tr>
                                    <th>Pusat Perguruan</th>
                                    <th>:</th>
                                    <th><input type="text" name="pusat_pgr" value="<?= $dat->pusat_pgr ?>" required />
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="3">
                                        <center><input type="submit" value="UBAH DATA" /></center>
                                    </th>
                                </tr>
                            </thead>
                        </form>
                    </table>
    </div>
</body>

</html>