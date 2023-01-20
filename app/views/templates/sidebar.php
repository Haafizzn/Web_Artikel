<nav>
    <ul>
        <li><a href="<?= base_url; ?>/" class="active">Home</a></li>
        <?php if ($_SESSION['level'] != 0) { ?>
            <li><a href="<?= base_url; ?>/artikel/">Artikel</a></li>
            <li><a href="<?= base_url; ?>/kategori/">Kategori</a></li>
            <li><a href="<?= base_url; ?>/user/">User</a></li>
        <?php } ?>

        <li><a href="<?= base_url; ?>/about/">About Me</a></li>
    </ul>
</nav>