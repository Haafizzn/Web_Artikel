<section>
    <h2>Tambah User</h2>
    <?php
    Flasher::Message();
    ?>

    <form action="<?= base_url; ?>/user/simpanuser" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Nama" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" required>
        <label for="Password">Password</label>
        <input type="password" id="oassword" name="password" placeholder="Password" required>

        <label for="level">Level</label>
        <select id="level" name="level" required>
            <option disabled selected>Pilih Level</option>
            <option value="1">Administrator</option>
            <option value="0">User</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
</section>