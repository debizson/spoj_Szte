<?php
session_start();

$name = "Blogpost";

include('header2.php');

require_once('connect.php');

$id = $_GET['id'];

$stmt = mysqli_prepare($connection, "SELECT id, title, text, posted, imagepath FROM post WHERE id = ?");

mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);

mysqli_stmt_bind_result($stmt, $id, $title, $text, $posted, $imagepath);
mysqli_stmt_fetch($stmt);

mysqli_stmt_close($stmt);

mysqli_close($connection);


?>
        
        <main>
            <article>
                <h2>
                    <?php echo $title; ?>
                </h2>
                <img src="<?php echo $imagepath; ?>" alt="kep" />
                <div class="post-content">
                    <?php echo $text; ?>
                </div>
                <div class="post-date">
                    <?php echo $posted; ?>
                </div>
            </article>
            <div class="clearfix"></div>
        </main>
    </div>
</body>
</html>
<?php

