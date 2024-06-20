<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title>Monitoring Perkembangan Studi Mahasiswa</title>
<div class="container ">
    <div class="row ">
        <div class="col-md-12">
            <div class="error-template mt-5 text-capitalize">
                <h1>
                    404</h1>
                <h2 style="text-transform: capitalize;">
                    Halaman {{ (Request::path() ) }} Tidak Ditemukan</h2>
                <div class="error-details">
                    Jika anda merasa melihat pesan ini karena kesalahan,
                    Tolong beritahu kami.
                </div>
                <div class="error-actions">
                    <a href="/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Kembali Ke Beranda </a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        }

    .error-template {
        padding: 40px 15px;
        text-align: center;
    }

    .error-actions {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .error-actions .btn {
        margin-right: 10px;
    }
</style>
