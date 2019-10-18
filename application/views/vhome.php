<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>">Rekayasa Web</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?php echo base_url() ?>">Home <span
                            class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?php echo base_url() ?>budaya/tampil">Budaya Indonesia</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="card shadow bg-white rounded" style="width: 18rem;">
            <img src="<?= base_url('assets/img/d.jpg') ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?= $nama ?></h5>
                <!-- <p class="card-text">NRP : 173040046</p>
                <p class="card-text">Mata Kuliah : Rekayasa Web</p> -->
                <table>
                    <tr>
                        <td>NRP</td>
                        <td>&nbsp; :</td>
                        <td>173040046</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>&nbsp; :</td>
                        <td>Teknik Informatika</td>
                    </tr>
                    <tr>
                        <td>Mata Kuliah</td>
                        <td>&nbsp; :</td>
                        <td>Rekayasa Web</td>
                    </tr>
                </table>
                <a href="#" class="btn btn-primary mt-2">About Me</a>
            </div>
        </div>
    </div>

</body>

</html>