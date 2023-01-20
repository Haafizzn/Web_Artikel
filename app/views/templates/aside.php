<aside>
    <h3>Kategori Artikel</h1>
        <ul>
            <?php foreach ($data['kategori'] as $row) : ?>
                <li><a href="<?= base_url; ?>/kategori/artikelByKategori/<?= $row['id_kategori']; ?>"><?= $row['nama']; ?></a></li>

            <?php
            endforeach; ?>
        </ul>


</aside>