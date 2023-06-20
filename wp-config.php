<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty_db' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8/qjV]1J5MC~sX+/`UAHs)*LwSOk|k;5ZH~/3++exbzG${:_th|/v4`ilPWkFj& ' );
define( 'SECURE_AUTH_KEY',  '6vk!&|#qWX+sk/yajn*pe7I{B$*k>%8kE%0bc{j*WVD{oiaOtFpQ#|<A>gaOIj d' );
define( 'LOGGED_IN_KEY',    'JR[fpeBrpUI*vd-9`Ty5~I0jFr-Z2`z9#~hRihsQW~BiT_)B6JmKekBLB.f.IF6U' );
define( 'NONCE_KEY',        'Q?Vw[jvg@n^n3*gYz+pv>QHN:65i#&)VFt-5,^0Ys!)SSBHr@;dEj#_{B+@P?q0R' );
define( 'AUTH_SALT',        'GPM{U,uX=ov8Se?kT:!76+Q}?D?!h_aBo,JLaoan^cKWSFV!P{KEzv&`7[VC8X,r' );
define( 'SECURE_AUTH_SALT', 'G[+6#}=@5-}D,g@],Z~+<bi`kQ7Th{;qDEv_SbVTZitT`l wh{(0f)CgS/O<}K4)' );
define( 'LOGGED_IN_SALT',   'nUE?!]2ZJ@&XTYGNN*z)SD6`[ohe2-LYQb0`s>t`s:<bJoe7lO|R,W]Y(_ <w%N4' );
define( 'NONCE_SALT',       'L6<IM#U7)1RcTiA[&$chx%OVLbHkY9lhZ2MHFE70<|]dwO1m/?6&pT*ocku le$1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
