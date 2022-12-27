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

?>
<!DOCTYPE html>
<html lang="<?= str_replace('_', '-', $locale) ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $translator->gettext('Example') ?></title>
</head>
<body>

    <nav>
        <?php if ($locale == 'en_GB'): ?>
          
            English
            
        <?php else: ?>
        
            <a href="http://en.localhost/">English</a>
            
        <?php endif; ?>
        
        <?php if ($locale == 'es'): ?>
          
            Español
            
        <?php else: ?>
            
            <a href="http://es.localhost/">Español</a>
            
        <?php endif; ?>
    </nav>
    
    <h1><?= $translator->gettext('Home') ?></h1>

    <p><?= $translator->gettext('Hello and welcome!') ?></p>
    
</body>
</html>
