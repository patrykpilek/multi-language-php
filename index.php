<?php

$lang = 'es';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Example</title>
</head>
<body>

    <h1>
        <?php if ($lang == 'en'): ?>
            Home
        <?php elseif ($lang == 'es'): ?>
            Inicio
        <?php endif; ?>
    </h1>

    <p>Hello and welcome!</p>

</body>
</html>
