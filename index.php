<?php
$entries = json_decode(file_get_contents('./entries.json'));
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>edp365</title>

    <link href="assets/css/output.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <script src="assets/script.js" defer></script>
    <script src="assets/js/jquery.min.js"></script>
</head>

<body>

<div class="flex px-5 xl:px-24 2xl:px-60 py-5 justify-center">
    <img src="assets/img/logo.png" class="animate-pulse" style="width: 25rem;" alt="">
</div>

<main class="px-5 xl:px-24 2xl:px-60 space-y-3 mt-5 min-h-screen">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <?php foreach ($entries as $entry): ?>
            <?php $id = md5(rand()) ?>

            <a class="bg-gray-900 text-white px-5 py-8 rounded-xl text-center text-h2-big link-<?= $id ?> flex-shrink-0 transition hover:scale-95 ease-in-out shadow self-start"
               href="<?= $entry->url ?>">
                <p class="text-h2-small md:text-h2-big tracking-tight font-inter-semibold">
                    <?= $entry->name ?></p>
            </a>

            <style>
                .link-<?= $id ?> {
                    color: white;
                    text-align: start;
                    line-height: 0.5rem !important;
                    background: url("<?= $entry->image ?>") no-repeat 150px 0, linear-gradient(to bottom right,<?= $entry->color1 ?>, <?= $entry->color2 ?>);
                    background-blend-mode: luminosity;
                    background-size: 250px, cover;
                    height: 145px;
                }
            </style>
        <?php endforeach; ?>
    </div>
</main>

<div class="text-center mt-5 mb-5 text-white">
    <p class="font-inter-regular">&copy; 2024 schaffer-edp<br><a href="https://schaffer-edp.de/impressum">Impressum</a>
        &ndash; <a href="https://schaffer-edp.de/datenschutz">Datenschutz</a><br></p>
</div>

</body>
</html>