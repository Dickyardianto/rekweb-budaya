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
    <center>
        <h1>Data Budaya Pencak Silat</h1>
    </center>
    <div class="container">
        <div class="kotak-link-back">
            <a href="<?= base_url() ?>" class="btn btn-info" style="margin-bottom: 10px">
                <<<< KEMBALI</a> </div> <div class="kotak-link" style="margin-bottom: 10px">
                    <a href="<?= base_url('budaya/tambah_data') ?>" class="btn btn-info">TAMBAH DATA</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Perguruan</th>
                    <th>Jenis Beladiri</th>
                    <th>Tahun Berdiri</th>
                    <th>Pusat Perguruan</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dat as $row) { ?>
                <tr>
                    <td><?= $row->nama_pgr ?></td>
                    <td><?= $row->jenis_beladiri ?></td>
                    <td><?= $row->tahun_berdiri ?></td>
                    <td><?= $row->pusat_pgr ?></td>
                    <td><a href="<?= base_url('Budaya/edit_data/' . $row->id) ?>" class="btn btn-warning">EDIT</a></td>
                    <td><a href="<?= base_url('Budaya/delete_data/' . $row->id) ?>" class="btn btn-danger"
                            onclick="return confirm('Yakin ?')">DELETE</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>