<section>
    <header>
        <h2>Halaman Kategori</h2>
        <a href="<?= base_url; ?>/kategori/tambah" id="create">Tambah Data</a>
    </header>
    <?php
    Flasher::Message();
    ?>
    <table>
        <tr>
            <th>No</th>
            <!-- <th>ID</th> -->
            <th>Nama</th>
            <th>Aksi</th>

        </tr>

        <?php
        $i = 1;
        foreach ($data['kategori'] as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <!-- <td><?= $row['id_kategori']; ?></td> -->
                <td><?= $row['nama']; ?></td>
                <td>
                    <a href="<?= base_url; ?>/kategori/hapus/<?= $row['id_kategori'] ?>" id="hapus">Hapus</a>
                    <a href="<?= base_url; ?>/kategori/edit/<?= $row['id_kategori'] ?>" id="edit">Edit</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</section>