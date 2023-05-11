<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>

<body>
    <button class="btn btn-primary btn-hilang">TOMBOL 1</button>
    <button class="btn btn-secondary btn-muncul">TOMBOL 2</button>
    <button class="btn btn-primary btn-toggle">TOMBOL 3</button>
    <h1>ini adalah text h1 atau judul</h1>
    <!-- FILE IMPORT JQUERY DAN JS -->
    <script src="bootstrap-5.3.0-alpha3-dist/js/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".btn-hilang").click(function() {
            // $("h1").hide(1000);
            // $("h1").fadeIn();
            $("h1").slideUp();
        })
        $(".btn-muncul").click(function() {
            // $("h1").hide(1000);
            // $("h1").fadeOut();
            $("h1").slideDown();
        })
        $(".btn-toggle").click(function() {
            // $("h1").hide(1000);
            // $("h1").fadeOut();
            // $("h1").slideDown();
            $("h1").toggle();
            // $("h1").fadetoggle();
            // $("h1").slideToggle();
        })

    })
    </script>


</body>

</html>