<?php

require 'vendor/autoload.php';

require 'includes/i18n_init.php';

?>
<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', $locale) ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $translator->gettext('Example') ?></title>
</head>
<body>

    <?php require 'includes/lang_nav.php' ?>
    
    <h1><?= $translator->gettext('Home') ?></h1>

    <p><?= $translator->gettext('Hello and welcome!') ?></p>
    
</body>
</html>
