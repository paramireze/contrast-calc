<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contrast Calculator</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.min.css">
        <?php include 'functions/application.php'; ?>
    </head>
    <body>
        <?php

        include 'layout/navigation.php';
        include 'functions/calculations.php';

        $page_title = 'Contrast Calculator';
        $page_description = "Tim Stick production under construction";
        $file_path = 'site/introduction.php';

        if (!empty($_GET['show'])) {

            switch ($_GET['show']) {

                case 'calculation-details':

                    $page_title = 'Site Rules & Other Details';
                    $page_description = '';
                    $file_path = 'site/calculation-details.php';
                    break;

                case 'about':

                    $page_title = 'About This Site';
                    $page_description = 'yeah what about it?';
                    $file_path = 'site/about.php';
                    break;

                default:
                    $page_title = 'Huh?';
                    $page_description = "oooopppsss";
                    $file_path = 'layout/not-found.php';
            }
        }
        ?>

        <div class="container">
            <div class="page-header" id="banner">

                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-7">
                        <h1><?php echo $page_title ?></h1>
                        <p><?php echo $page_description; ?></p>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="sponsor">
                            <a href="https://github.com/paramireze/contrast-calc"><img src="images/Octocat.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include($file_path); ?>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>