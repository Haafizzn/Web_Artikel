<section>
    <header>
        <h2>Halaman Artikel</h2>
        <a href="<?= base_url; ?>/artikel/tambah" id="create">Tambah Data</a>
    </header>

    <?php
    Flasher::Message();
    ?>

    <?php foreach ($data['artikel'] as $row) : ?>
        <article>
            <a href="<?= base_url; ?>/artikel/detail/<?= $row['id_artikel'] ?>">
                <img src="https://source.unsplash.com/random/?<?= $row['nama']; ?>" class="center" alt="logo" width="100px" height="100px">

                <h3><?= $row['judul']; ?></h3>
                <p id="kategoriTgl"><b style=" color:red;"><?= $row['nama']; ?></b> <?= $row['tanggal']; ?></p style="font-size: 12px;">

                <p><?php
                    if (strlen($row['deskripsi']) > 100) {

                        $total = strlen($row['deskripsi']) - 100;
                        $thisData = substr($row['deskripsi'], 0, -$total) . ' ...';
                    } else {
                        $thisData = $row['deskripsi'];
                    }
                    ?>
                    <?= $thisData; ?>
                </p>

            </a>
            <div id="artikelBtn">
                <a href="<?= base_url; ?>/artikel/hapus/<?= $row['id_artikel'] ?>" id="hapus">Hapus</a>
                <a href="<?= base_url; ?>/artikel/edit/<?= $row['id_artikel'] ?>" id="edit">Edit</a>
            </div>
        </article>

    <?php
    endforeach; ?>
</section>