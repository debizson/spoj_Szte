<?php



if (isset($_SESSION['szamlalo'])) {
    $_SESSION['szamlalo'] += 1;
} else {
    $_SESSION['szamlalo'] = 1;
}

$name = "Főoldal ".$_SESSION['szamlalo'];

include('header.php');

require_once('connect.php');

$result = mysqli_query($connection, "SELECT id, title, text, posted FROM post");

if (!$result) {
    echo "Hiba a lekérdezés végrehajtása során: " . mysqli_error($connection);
    mysqli_close($connection);
    exit;
}

?>

        <main>
            <?php

            while ($row = mysqli_fetch_array($result)) {

                ?>
                <article>
                    <h2>
                        <a href="blog.php?id=<?php echo $row['id']; ?>">
                            <?php echo $row['title']; ?>
                        </a>
                    </h2>
                    <div class="post-content">
                        <?php echo $row['text']; ?>
                    </div>
                    <div class="post-date">
                        <?php echo $row['posted']; ?>
                    </div>
                </article>
                <?php

            }

            ?>
            <div class="clearfix"></div>
        </main>
    </div>
</body>
</html>
<?php

mysqli_close($connection);
