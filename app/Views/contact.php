<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>MyBlog</title>

<!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                    <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
                    <button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-
expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?=
base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('post')
?>">Blog</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?=
base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs')
?>">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="p-5 mb-4 bg-light rounded-3">
<div class="container py-5">
    <h1 class="display-5 fw-bold">Contact Person</h1>
    <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
    <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
        </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Alamat</h5>
                <p>Jakarta Barat, Kebon Jeruk, Kedoya Selatan</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Email</h5>
                <p>sitinurwahida09@gmail.com</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">No.HP</h5>
                <p>089616373023</p>
            </div>
        </div>
    </div>
</div>

</div>
<div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top">
        <div class="container">
            &copy; <?= date('Y') ?>
        </div>
    </footer>
</div>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    
</body>
</html>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Alamat</h5>
                <p>Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Email</h5>
                <p>Lorem ipsum dolor sit amet</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">No.HP</h5>
                <p>Lorem ipsum dolor sit</p>
            </div>
        </div>
    </div>
</div>
