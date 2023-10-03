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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'medit' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8_general_ci' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&MN/YB|a4LZN?rcJQ|5Y=YosYvsB#*&0yuK2j7_^.NZGwW0|np>+z,wPx_$4@S_9' );
define( 'SECURE_AUTH_KEY',  'hG3nn z9gPI_4*tx4ct?Zff8ay>d>~?:k$po[@F>%BJpmt__)!2M6j?)^?Fdf/nT' );
define( 'LOGGED_IN_KEY',    '&VK]MoSRh=kEZUorRE}zg!?[@!7$I}uBWE[^>P2TQ_U+VsjW{PMJ$Elww}mMW9xt' );
define( 'NONCE_KEY',        '|@^km*u67j^wU=Hfq^T c6`yj}N+vw@R07/;J1HK5(/O[0&Au&6#LQCa/1/@;I::' );
define( 'AUTH_SALT',        'e+Dj{=[&B:j}4w^:1+/Jml{W>xxJ=65QKD>-RR;92o|+]$`[B oaj)F>s2SFe,1@' );
define( 'SECURE_AUTH_SALT', 'xP(oODn48l_|??=#N!q@ *N8u(0DUCy8%M}>:HFslcu?tR`-)hV+UU?%hE&kFr]Z' );
define( 'LOGGED_IN_SALT',   'x(67qI-dPj+KFq%xWp| 3NgRx S@[Yy.s~W62UaMWy7%}eN!WVYv>=xPyKM>.SQD' );
define( 'NONCE_SALT',       '-mVW!=K:Ja)|7z>p[5MApj;h?KVeD},w%[8I;dBfklkS.ECe:olORw=:y(w0x-Ac' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
//define( 'WP_DEBUG_DISPLAY', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
