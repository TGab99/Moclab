<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'Moclab' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', 'root' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost:8889' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'ViFWy{r[ ,{7}36e/TQt%({n:B~8Q4Lh4{|GH7d_FM1iu({53Zm&YDso]*icf#6L' );
define( 'SECURE_AUTH_KEY', 'p0~{v.RC>*fyU5=}P4!72(z-Kh7.=/^<gx<Eknr>lxrFRbGcQN#Q]oezt7WuEb]N' );
define( 'LOGGED_IN_KEY', 'mlbiWG8?-FQ> MXS& MX|suHlm88S[|)$}(?}^dCV&$uqSNP*a{+Ob/k{4g7_$=R' );
define( 'NONCE_KEY', '{w&B+iR5Eg*Vu{|j4BXT{*#: ^(pMfx/=;am(=Mat#p5/(t[J}3^z $[es}uR26y' );
define( 'AUTH_SALT',        'OA#~(Pca32/GUt>E*Cyf#eI`?0BQP ^h55aYtrm&xT.W9nAap1{E3w^5SC:a.dg-' );
define( 'SECURE_AUTH_SALT', ':}~rm3F,TNxd.Vuo|aCp-=_w!2^(qKhDh%^J8O;E? pJgfKe&o@enyX+3a*L*moP' );
define( 'LOGGED_IN_SALT',   'Fz(l<-j.GlkL84VtC+K-Uq/xUEF cdWztAPqGI7i[qvZ[4.868Y=DvI-uHjn&s?l' );
define( 'NONCE_SALT',       'HEC|v3!K0&(k-_aV/k<R<s):Eql^[OVsE`s02+!3Z3S$|-3[]C]e5FV/qHMZ:Q#0' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
