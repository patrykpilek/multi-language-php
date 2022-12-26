<?php

require 'src/App/I18n.php';
require 'vendor/autoload.php';

$i18n = new App\I18n(['en_GB', 'es']);

list($subdomain, $domain) = explode('.', $_SERVER['HTTP_HOST'], 2);

$locale = $i18n->getBestMatch($subdomain);

if ($locale === null) {
  
    $locale = $i18n->getLocaleForRedirect(); 
  
    $subdomain = substr($locale, 0, 2);
    
    header("Location: http://" . $subdomain . ".phpi18n.localhost/");
    exit;
      
}

$translator = new PhpMyAdmin\MoTranslator\Translator("locales/$locale/LC_MESSAGES/messages.mo");

$name = "Dave";

$count = 1;

$pi = 3.14159;

// setlocale(LC_ALL, 'es_ES.UTF-8');

$formatter = new NumberFormatter($locale, NumberFormatter::DECIMAL);
$formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 60);

?>
<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', $locale) ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $translator->gettext('Example') ?></title>
</head>
<body>

    <h1><?= $translator->gettext('Home') ?></h1>

    <p><?= sprintf($translator->gettext("Welcome, %s"), $name) ?></p>

    <p><?= sprintf($translator->ngettext("You have %d message", "You have %d messages", $count), $count) ?></p>
    
    <p><?= $formatter->format($pi) ?></p>
    
</body>
</html>
