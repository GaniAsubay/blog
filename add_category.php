<!-- Include Head -->
<?php include "assest/head.php"; ?>

<title>Санат қосу</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Санат жіберу</h1>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/insert.php?type=category" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="catName">Санат атауы</label>
                            <input type="text" class="form-control" name="catName" id="catName">
                        </div>

                        <div class="form-group">
                            <label for="catImage">Санат кескіні</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="catImage" id="catImage">
                                <label class="custom-file-label" for="catImage">Файлды таңдаңыз</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="catColor">Санат Түсі</label>
                            <input type="color" id="catColor" name="catColor" value="#0f88e1">
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