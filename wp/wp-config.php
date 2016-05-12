<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'phpgrund');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#&Y8<#nspY%s-1hxhhl~hF *I%,]GnFz=$!RmGmWV>yKTTw_EA-=-|.8bo(sgKcW');
define('SECURE_AUTH_KEY',  'W0oBN9r%(Z2?gJuH-n4l:3o`-c#NqD`{}L3RhH<e*v@+3j(pyV@s^,+@Skd:qknF');
define('LOGGED_IN_KEY',    ' w%igI?S*+K/Q}EpaY|tH<c4e(s81Yn|ifd-PnH0pHS&TkI,Is~>U|FFBxMYO@j+');
define('NONCE_KEY',        '@`2s2&d#=/cqD iz.we9#S-lPB=[6CaX7o#|5d_e-e/Lt=k+~)1Bx<&-a-+NdXB`');
define('AUTH_SALT',        '=p@}en4UX0uPY>]u2@f%V)Vc%}U9}7ry}(XFTW+}xHZM~k <5.+b-ra+e&o[Pcgt');
define('SECURE_AUTH_SALT', '|U+xV4{f}7q[9i>Kq90%]8h6(?XFMc4#Va+5;|3m(*@*-?Y|sL+]oYLj_ yhiU/t');
define('LOGGED_IN_SALT',   '}$Kdfvwe,d:u@xtw{MejP,:qL|^y;}g=GZfwqMLb?;U5_dH z{zoi`5 /|ghKn.>');
define('NONCE_SALT',       'qDvgsjhaUI+%+zIz{^ RCxty+FQ}e<r-cJxUmeGnY~UmqM$Yr.Q{:e{9kLaaZ:b^');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');