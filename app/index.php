<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vercel + PHP</title>
    <?php require_once __DIR__ . '/../dist/styles.html'; ?>
</head>
<body>
    <h1 class="text-3xl font-bold">Vercel + PHP</h1>
    <p>This is a simple PHP application running on Vercel.</p>
    <?php phpinfo(); ?>

    <?php require_once __DIR__ . '/../dist/scripts.html'; ?>
</body>
</html>