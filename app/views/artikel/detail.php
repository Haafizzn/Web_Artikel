<section>

    <article>
        <img src="https://random.imagecdn.app/50/50?category=logo" class="center" alt="logo" width="100px" height="100px">

        <h3><?= $data['artikel']['judul']; ?></h3>
        <p><b style=" color:red;"><?= $data['artikel']['nama']; ?></b> <?= $data['artikel']['tanggal']; ?></p style="font-size: 12px;">

        <p>
            <?= nl2br($data['artikel']['deskripsi'], false); ?>
        </p>

    </article>

</section>