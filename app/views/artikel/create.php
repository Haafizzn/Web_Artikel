<section>
    <h2>Tambah Artikel</h2>
    <?php
    Flasher::Message();
    ?>

    <form action="<?= base_url; ?>/artikel/simpan" method="POST">
        <label for="id_kategori">Kategori</label>
        <select id="id_kategori" name="id_kategori" required>
            <option disabled selected>Pilih Kategori</option>
            <?php foreach ($data['kategori'] as $row) : ?>
                <option value="<?= $row['id_kategori']; ?>"><?= $row['nama']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="judul">Judul Artikel</label>
        <input type="text" id="judul" name="judul" placeholder="Judul Artikel" required>

        <label for="deskripsi">Isi Artikel</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" placeholder="Isi Artikel" rows="10"></textarea>


        <button type="submit">Simpan</button>
    </form>
</section>