<section>

    <header>
        <h2>Halaman User</h2>
        <a href="<?= base_url; ?>/user/tambah" id="create">Tambah Data</a>
    </header>
    <?php
    Flasher::Message();
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level</th>
            <th>Aksi</th>

        </tr>

        <?php
        $i = 1;
        foreach ($data['user'] as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= ($row['level']) == 0 ? "User" : "Administrator"; ?></td>
                <td>
                    <a href="<?= base_url; ?>/user/hapus/<?= $row['id_user'] ?>" id="hapus">Hapus</a>
                    <a href="<?= base_url; ?>/user/edit/<?= $row['id_user'] ?>" id="edit">Edit</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</section>