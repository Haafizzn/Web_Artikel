<section>
    <h2>Edit Kategori</h2>
    <?php
    Flasher::Message();
    ?>

    <form action="<?= base_url; ?>/kategori/update" method="POST">

        <input type="hidden" name="id_kategori" value="<?= $data['editKategori']['id_kategori']; ?>">
        <label for="nama">Nama Kategori</label>
        <input type="text" id="nama" value="<?= $data['editKategori']['nama']; ?>" name="nama" placeholder="Nama Kategori" required>


        <button type="submit">Simpan Perubahan</button>
    </form>
</section>