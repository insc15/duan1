<?php 
    require('controllers/main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.es2018.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.es2018.min.js"></script> -->
    <style>
        .material-symbols-rounded.icon-fill{
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48
        }

        .material-symbols-rounded.icon-outline{
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
        }
    </style>
    <link rel="stylesheet" href="<?php echo get_home_url() ?>/assets/style/common.css">
    <script src="<?php echo get_home_url() ?>/assets/js/main.js"></script>
</head>
<body class="font-primary">
    <?php Run(); ?>
</body>
</html>