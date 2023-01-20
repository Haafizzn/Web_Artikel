<section>
    <h2>Edit Artikel</h2>
    <?php
    Flasher::Message();
    ?>

    <form action="<?= base_url; ?>/artikel/update" method="POST">
        <input type="hidden" name="id_artikel" value="<?= $data['artikel']['id_artikel']; ?>">

        <label for="id_kategori">Kategori</label>
        <select id="id_kategori" name="id_kategori" required>

            <option value="<?= $data['artikel']['id_kategori']; ?>" selected><?= $data['artikel']['nama']; ?></option>
            <?php foreach ($data['kategori'] as $row) : ?>
                <option value="<?= $row['id_kategori']; ?>" <?= $row['id_kategori'] == $data['artikel']['id_kategori'] ? 'hidden' : ''; ?>><?= $row['nama']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="judul">Judul Artikel</label>
        <input type="text" id="judul" name="judul" value="<?= $data['artikel']['judul']; ?>" placeholder="Judul Artikel" required>

        <label for="deskripsi">Isi Artikel</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" placeholder="Isi Artikel" rows="10"><?= $data['artikel']['deskripsi']; ?></textarea>


        <button type="submit">Simpan</button>
    </form>
</section>