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
define( 'DB_NAME', 'ajarke_web' );

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
define( 'AUTH_KEY',         ']eH[U|N5mE3Jg>w}W,;*e$oc:4aTu1S3$HWZ^m<`!%OEv|eyCp6]/!6{lE$5r<^w' );
define( 'SECURE_AUTH_KEY',  '#MdV3n+WO^[t97:n6wo(Q!LPMK*s@y:W(Ga{1o2)8^Tg]/L@y_D/!TkxyrGuO:E*' );
define( 'LOGGED_IN_KEY',    '>5o/dWX$7:z>9iDw1d{F4@OM.z0.Y2fB&}3^ZZ]9%kl(K`**nsTJ1u6JW{zFjir&' );
define( 'NONCE_KEY',        'UPDd{HxoN%HvRv^Vk.qBAI|]llYNZ<*Xl;D $U{0|b|.D4?J?[x+]&dpy]O_4,U=' );
define( 'AUTH_SALT',        'l~Z9U<U)9m,h]yMY{&qtor^B3Z@2Ju&eX-%Q(@Ec?J8D-]LYf8IAe+.]bajIV|%g' );
define( 'SECURE_AUTH_SALT', '`;`~rK><xWj+9RrDMt|[<W&rG5pV}p]SFxQoImhC_`BVBI+K>z&l5f@B<)9>0`}c' );
define( 'LOGGED_IN_SALT',   'KNDthQ%]b%.0|j)eBV!=~~pQShT8])e]`Hc4+MoMy+.C79[Fw=J0K.!zH^Ox*Xp[' );
define( 'NONCE_SALT',       'M]>8Y{MJ}|:DH|;S,6KKk^d!1g3#]_:e)ocTD+I{ih3G%8`L=%VNo1NiDda~Y}_l' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Aj_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
