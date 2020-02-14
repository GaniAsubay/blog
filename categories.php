<?php require "db.php" ?>
<?php 

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/flogo.png" sizes="32x32" type="image/png">
    <title>Category</title>

    <!-- Bootstrap, FontAwesome, Custom Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link href="css/category.css" rel="stylesheet">


</head>

<body>
    <header class="blog-header">
        <div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 bg-white border-bottom shadow-sm">
            <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="img/logo/logo.png" alt="dev culture logo" style="width: 100%;height: auto;">
            </a>

            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 px-5 text-muted" href="index.php">Home</a>
                <a class="p-2 px-5 text-muted" href="categories.php">Category</a>
                <a class="p-2 px-5 text-muted" href="article.php">Article</a>
                <a class="p-2 px-5 text-muted" href="autheur.php">Autheur</a>
            </nav>

            <a class="btn btn-outline-primary" href="#">Sign up</a>
        </div>

    </header><!-- Header -->

    <main role="main" class="">

        <div class="jumbotron text-center mb-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                    <?php
                        $data = $conn->query("SELECT * FROM category")->fetchAll();
                        foreach ($data as $row) :   
                    ?>

                        <div class="col mb-4 d-flex align-items-stretch">
                            <a href="articleOfCategory.php?catID=<?= $row['category_id'] ?>" class="card text-white py-3 btn w-100" style="background-color: <?php echo "#".random_color() ?>" >
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <h2 class="card-title"><?= $row['category_name'] ?></h2>
                                </div>
                            </a>
                        </div>

                    <?php endforeach ?>

                </div>
            </div>
        </div>


    </main><!-- /.container -->

    <footer class="blog-footer">
        <p>Blog template built by <a href="https://twitter.com/mdo">@KhalidLam</a>.</p>
        <p><a href="#">Back to top</a></p>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

</html>