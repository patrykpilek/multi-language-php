<?php 

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