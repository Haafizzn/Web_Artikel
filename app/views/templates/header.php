<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url; ?>/css/style.css">
    <link rel="stylesheet" href="https://font.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com">

    <title>Neforsys Official | <?= $data['title']; ?></title>

</head>

<body>
    <header>
        <div>
            <img src="<?= base_url; ?>/img/logo.jpg" class="center" alt="logo" width="70px" height="70px">
            <div id="title">
                <h1><?= $data['info']['nama_web']; ?></h1>
                <p><?= $data['info']['slogan']; ?></p>
                <small><?= $data['info']['alamat']; ?></small>
            </div>
        </div>
        <a href="<?= base_url; ?>/logout/logout" id="logout"><?= $_SESSION['username']; ?></a>
    </header>
    <main>