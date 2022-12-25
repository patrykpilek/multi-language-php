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
- [ ] Detecting the visitor's preferred language
- [ ] Using gettext with PHP
- [ ] Using MoTranslator as gettext-compatible alternative
- [ ] Translating dynamic content: variable substitution, plurals, decimals and dates
- [ ] Translating content unsuited to gettext: long text, plurals, decimals and dates
- [ ] Selecting and remembering the language
