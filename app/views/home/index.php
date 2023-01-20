<section>
    <?php if (!empty($data['artikel'])) {
        # code...

        foreach ($data['artikel'] as $row) : ?>
            <article>
                <a href="<?= base_url; ?>/artikel/detail/<?= $row['id_artikel'] ?>">
                    <img src="https://source.unsplash.com/random/?<?= $row['nama']; ?>" class="center" alt="logo">

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
            </article>

        <?php
        endforeach;
    } else {
        ?>
        <p style="padding: 20px; text-align: center"><b>TIDAK ADA DATA YANG DAPAT DITAMPILKAN</b></p>
    <?php } ?>
</section>