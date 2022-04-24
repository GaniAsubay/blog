<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$author_id = $_GET["id"];

// Get author Data to display
$stmt = $conn->prepare("SELECT * FROM author WHERE author_id = ?");
$stmt->execute([$author_id]);
$author = $stmt->fetch();

?>

<title>Авторды жаңарту</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Авторды жаңарту</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/update.php?type=author&id=<?= $author_id ?>&img=<?= $author["author_avatar"] ?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="authName">Толық аты</label>
                            <input type="text" class="form-control" name="authName" id="authName" value="<?= $author['author_fullname'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authDesc">Сипаттама</label>
                            <input type="text" class="form-control" name="authDesc" id="authDesc" value="<?= $author['author_desc'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authEmail">Электрондық пошта</label>
                            <input type="text" class="form-control" name="authEmail" id="authEmail" value="<?= $author['author_email'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authImage">Аватар</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="authImage" id="authImage">
                                <label class="custom-file-label" for="authImage"> <?= $author['author_avatar'] ?> </label>
                            </div>
                        </div>

                        <div class="my-2" style="width: 200px;">
                            <img class="w-100 h-auto" src="img/avatar/<?= $author['author_avatar'] ?>" alt="">
                        </div>

                        <div class="form-group">
                            <label for="authTwitter">Twitter пайдаланушы аты <span class="text-info">(міндетті емес)</span></label>
                            <input type="text" class="form-control" name="authTwitter" id="authTwitter" value="<?= $author['author_twitter'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="authGithub">Github пайдаланушы аты <span class="text-info">(міндетті емес)</span></label>
                            <input type="text" class="form-control" name="authGithub" id="authGithub" value="<?= $author['author_github'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="authLinkedin">Linkedin пайдаланушы аты <span class="text-info">(міндетті емес)</span></label>
                            <input type="text" class="form-control" name="authLinkedin" id="authLinkedin" value="<?= $author['author_link'] ?>">
                        </div>


                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Сақтау</button>
                        </div>


                    </form>
                </div>


            </div>

        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

</body>

</html>