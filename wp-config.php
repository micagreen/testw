<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b=7)wz]OeGzD;AqNd&1nFw4vDiQ!!&~]wJlGEP)PYd`ol%QapYA8C7 5qu@t KBK');
define('SECURE_AUTH_KEY',  '[#(M+YKL_Lb -=,JD4GXW;$h r2FcKFsg[/2$+iPi.f7Z:JePOaHksl*|`aye^8S');
define('LOGGED_IN_KEY',    'a@}u/TV&L[29eV?jkquzP2?SLH[SF!)S1SVz%j%!d43J*tP=+<7q{E`l2/.HmBVd');
define('NONCE_KEY',        'O0z&%0hmsHO|K8WeiTkufMe|4&Huv$A?)dTGN$=xEs;|#g.<*Hw*O1_l>>)^l-8`');
define('AUTH_SALT',        'D*Z1B-+-surKu7hdczwvFyHBG,-n_zbfUj+b-gN>1nc {]Eu7!@F07.RKN?2n|p6');
define('SECURE_AUTH_SALT', 'HXrMOl+=ji(6W!5$BNzroRCHZ!}.=btpry+N hWv2&.KynII>/=DZ~ftXrJa#v0U');
define('LOGGED_IN_SALT',   'S-Vd5>Sgu+3gWSrOxAHF@WQ>keN3Q?=+WTPOwv#Fl|o6^-/QE86d6-!}e0?F|[q<');
define('NONCE_SALT',       'EHnvJ Z+`y[f;;B1tJ3}n(Us^QX*7^[pb]*`IVV/ZigJ`C*-tPkEHV6}J|#$pTlx');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');