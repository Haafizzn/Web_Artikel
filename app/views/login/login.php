<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="<?= base_url; ?>/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <main>

        <form id="login" action="<?= base_url; ?>/login/prosesLogin" method="post">

            <h2 style="text-align:center; margin-bottom:15px;">Silahkan Login Terlebih dahulu</h2>
            <?php
            Flasher::Message();
            ?>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>

            </div>

        </form>
    </main>


</body>

</html>