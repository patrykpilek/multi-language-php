# Multi-language PHP: internationalisation for PHP developers

## Content

- [x] An introduction to translating content using PHP
  - translate a page by copying the entire page and translating all the text in it
  - translate a page by using conditional statements for every string
  - store translated strings in an array with one array for each language
  - [ISO/IEC 8859-1 - Wikipedia](https://en.wikipedia.org/wiki/ISO/IEC_8859-1)
  - [Unicode - Wikipedia](https://en.wikipedia.org/wiki/Unicode)
  - [UTF-8 Wikipedia](https://en.wikipedia.org/wiki/UTF-8)
  - [Declaring character encodings in HTML](https://www.w3.org/International/questions/qa-html-encoding-declarations)
  - display any character by encoding files using UTF-8
- [x] Getting the language from the URL
  - [ISO 639-1 - Wikipedia](https://en.wikipedia.org/wiki/ISO_639-1) 
  - language code standards and passing the language code in the URL
  - get the language code from the query string
  - [Apache mod_rewrite](https://httpd.apache.org/docs/current/rewrite/intro.html)
  - [Apache .htaccess files](https://httpd.apache.org/docs/current/howto/htaccess.html)
  - get the language code from a subfolder or URL segment
  - get the language code from a subdomain
  - [List of top-level domains - Wikipedia](https://en.wikipedia.org/wiki/List_of_Internet_top-level_domains)
  - get the language code from the top-level domain
- [x] Locale identifiers and validating the language from the URL
  - add an i18n class with a list of supported languages
  - [List of ISO 639-1 codes](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes)
  - [List of ISO 3166 country codes](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes)
  - combine language codes and region codes to create locale identifiers
  - [PHP: Local::canonicalize](https://www.php.net/manual/en/locale.canonicalize.php)
  - canonicalise the locale code from the URL
  - get the best match from the list of supported locales
  - redirect to the default locale if the value in the URL is invalid
  - [Declaring language in HTML](https://www.w3.org/International/questions/qa-html-language-declarations)
  - declare the language of the HTML document with the lang attribute
- [x] Detecting the visitor's preferred language
  - [Accept-Language HTTP header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language)
  - [PHP: $_SERVER](https://www.php.net/manual/en/reserved.variables.server.php)
  - get language preferences form the browser: the HTTP Accept-Language header
  - [PHP: Locale::acceptFromHttp(https://www.php.net/manual/en/locale.acceptfromhttp.php)
  - parse the Accept-Language header to get a list of locales in order of preference
  - compare supported locales to the browser preferences and choose the best match
  - get the best match to the browser preferences using just the language codes
  - refactor the code to make it clearer
  - [PHP: $_SERVER](https://www.php.net/manual/en/reserved.variables.server.php)
  - [MaxMind GeoIP databases](https://www.maxmind.com/en/geoip2-services-and-databases)
  - [IPinfo geolocation API](https://ipinfo.io/)
  - [IPinfo official PHP client](https://github.com/ipinfo/php)
  - geolocation: matching the user's IP address to their location
  - use a geolocation API to get the country code from the IP address
  - [ipinfo - token](https://ipinfo.io/account/token)
- [x] Using gettext with PHP
  - [Symfony translations](https://symfony.com/doc/current/translation.html#basic-translation)
  - [PO files](https://www.gnu.org/software/gettext/manual/html_node/PO-Files.html)
  - [PHP: gettext](https://www.php.net/manual/en/book.gettext.php)
  - the options for storing translations in separate files
  - [PHP: the gettext extension](https://www.php.net/manual/en/book.gettext.php)
  - [PHP: the gettext function](https://www.php.net/manual/en/function.gettext.php)
  - [Install gettext on macOS](https://macappstore.org/gettext/)
  - [Ubuntu php-gettext](https://packages.ubuntu.com/bionic/php-gettext)
  - the PHP gettext extension and gettext function for marking translatable strings
  - create the folders to store the gettext translation files
  - [Install gettext on macOS](https://poedit.net/)
  - install the Poedit editor and create a .po translation file
  - configure gettext to use translation file and show the translations
- [x] Using MoTranslator as gettext-compatible alternative
  - [PHP: gettext](https://www.php.net/manual/en/ref.gettext.php)
  - [MoTranslator](https://github.com/phpmyadmin/motranslator)
  - MoTranslator: a .mo-file-compatible alternative to gettext
  - [MoTranslator: gettext compatibility functions](https://github.com/phpmyadmin/motranslator#gettext-compatibility-usage)
  - using MoTranslator with its gettext compatibility functions
  - configure Poedit to extract MoTranslator translations
  - [MoTranslator: gettext compatibility functions](https://github.com/phpmyadmin/motranslator#gettext-compatibility-usage)
  - use the simpler MoTranslator object API
  - using real or keyword messages: the advantages and disadvantages
- [x] Translating dynamic content: variable substitution, plurals, decimals and dates
  - [PHP: sprintf](https://www.php.net/manual/en/function.sprintf.php)
  - including variables in translated strings: use sprintf with gettext
  - [PHP: ngettext](https://www.php.net/manual/en/function.ngettext.php)
  - display plural forms of messages using ngettext
  - [Decimal separator - Wikipedia](https://en.wikipedia.org/wiki/Decimal_separator)
  - [PHP: sprintf](https://www.php.net/manual/en/function.sprintf.php)
  - [PHP: The NumberFormatter class](https://www.php.net/manual/en/class.numberformatter.php)
  - decimal separators: format decimal numbers based on the locale
  - [PHP: date](https://www.php.net/manual/en/function.date.php)
  - [PHP: strftime](https://www.php.net/manual/en/function.strftime.php)
  - [PHP: The IntDateFormatter class](https://www.php.net/manual/en/class.intldateformatter.php)
  - translate day and month names in dates based on the locale
- [x] Translating content unsuited to gettext: long text, plurals, decimals and dates
  - [GNU gettext](https://www.gnu.org/software/gettext/manual/gettext.html)
  - handle lang strings of text in separate files
  - display a message if the file containing the translation is unavailable
  - [Markdown](https://daringfireball.net/projects/markdown/)
  - [Markdown emphasis syntax](https://daringfireball.net/projects/markdown/syntax#em)
  - use a plain-text formatting language to help translators
  - [Packagist: markdown parsers](https://packagist.org/?query=markdown)
  - convert translations in separate files to Markdown
  - translate data from a database: multiple columns in one table
  - translate data from a database: separate table for the translations
  - display localised versions of images that contain text
- [ ] Selecting and remembering the language
  - add navigation links for switching between languages
