<section>
    <h2>Tambah User</h2>
    <?php
    Flasher::Message();
    ?>

    <form action="<?= base_url; ?>/user/updateUser" method="POST">
        <input type="hidden" name="id_user" value="<?= $data['user']['id_user']; ?>">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?= $data['user']['nama']; ?>" placeholder="Nama" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?= $data['user']['username']; ?>" placeholder="Username" disabled>
        <label for="Password">Password </label><small class="quote-warning"> *Abaikan jika tidak ingin mengganti password.
        </small>
        <input type="password" id="oassword" name="password" placeholder="Password">


        <label for="level">Level</label>
        <select id="level" name="level" required>
            <option disabled selected>Pilih Level</option>
            <option value="1" <?php if ($data['user']['level'] == 1)  echo 'selected="selected"'; ?>>Administrator</option>
            <option value="0" <?php if ($data['user']['level'] == 0)  echo 'selected="selected"'; ?>>User</option>
        </select>

        <button type="submit">Simpan Perubahan</button>
    </form>
</section>