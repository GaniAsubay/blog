<!-- Include Head -->
<?php include "assest/head.php"; ?>

<title>Add Author</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Авторды қосу</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/insert.php?type=author" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="authName">Толық аты</label>
                            <input type="text" class="form-control" name="authName" id="authName">
                        </div>

                        <div class="form-group">
                            <label for="authDesc">Сипаттама</label>
                            <input type="text" class="form-control" name="authDesc" id="authDesc">
                        </div>

                        <div class="form-group">
                            <label for="authEmail">Электрондық пошта</label>
                            <input type="email" class="form-control" name="authEmail" id="authEmail">
                        </div>

                        <div class="form-group">
                            <label for="authImage">Аватар</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="authImage" id="authImage">
                                <label class="custom-file-label" for="authImage">Файлды таңдаңыз</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="authTwitter">Twitter пайдаланушы аты <span class="text-info">(міндетті емес)</span></label>
                            <input type="text" class="form-control" name="authTwitter" id="authTwitter">
                        </div>
                        <div class="form-group">
                            <label for="authGithub">Github пайдаланушы аты <span class="text-info">(міндетті емес)</span></label>
                            <input type="text" class="form-control" name="authGithub" id="authGithub">
                        </div>
                        <div class="form-group">
                            <label for="authLinkedin">Linkedin пайдаланушы аты <span class="text-info">(міндетті емес)</span></label>
                            <input type="text" class="form-control" name="authLinkedin" id="authLinkedin">
                        </div>


                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Сақтау</button>
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