<?php

require 'src/App/I18n.php';
require 'vendor/autoload.php';

$i18n = new App\I18n(['en_GB', 'es']);

list($subdomain, $domain) = explode('.', $_SERVER['HTTP_HOST'], 2);

$locale = $i18n->getBestMatch($subdomain);

if ($locale === null) {
  
    $locale = $i18n->getLocaleForRedirect(); 
  
    $subdomain = substr($locale, 0, 2);
    
    header("Location: http://" . $subdomain . ".localhost/");
    exit;
      
}

$translator = new PhpMyAdmin\MoTranslator\Translator("locales/$locale/LC_MESSAGES/messages.mo");

$conn = new PDO('mysql:host=localhost;dbname=phpi18n_2;charset=utf8', 'root', 'secret');

$sql = "SELECT title_$locale AS title, description_$locale AS description, size FROM product";

$stmt = $conn->query($sql);

$products = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', $locale) ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $translator->gettext('Example') ?></title>
</head>
<body>

    <h1><?= $translator->gettext('Home') ?></h1>

    <table border="1">
        <thead>
            <th><?= $translator->gettext('Title') ?></th>
            <th><?= $translator->gettext('Description') ?></th>
            <th><?= $translator->gettext('Size') ?></th>
        </thead>
        <tbody>

            <?php foreach ($products as $product): ?>

                <tr>
                    <td><?= $product['title'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['size'] ?></td>
                </tr>

            <?php endforeach; ?>

        <tbody>
    </table>    

</body>
</html>












