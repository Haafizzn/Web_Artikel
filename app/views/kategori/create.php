<section>
    <h2>Tambah Kategori</h2>
    <?php
    Flasher::Message();
    ?>

    <form action="<?= base_url; ?>/kategori/simpan" method="POST">
        <label for="nama">Nama Kategori</label>
        <input type="text" id="nama" name="nama" placeholder="Nama Kategori" required>


        <button type="submit">Simpan</button>
    </form>
</section>