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
define('DB_NAME', 'klaimand_rsb');

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#dHvkoP9EWV9aYzx~BFOU{prg#2SP=-Fd:v?LZIwo9*/@J*oGf2S4<-}8 2_J1}?');
define('SECURE_AUTH_KEY',  '[p4~Te lPh`{I!S&mwq+[UrWm!q9H;W}G#Qa* 36#G3rluYsS[tDjX?SgjcYtQ3T');
define('LOGGED_IN_KEY',    'Q`fPcv$9XrwM|0MJ-N}0LAI,uwyrrgFKA(S{qoWf;f=GXK8EtF@XC3GMsNq6lBD_');
define('NONCE_KEY',        '%#-$Qc(nwv.m,TMx8ZopDJ;G/U4[M9^08Gz7QgDj3eUYs=/&#UnpbB9!kYk~.XJ9');
define('AUTH_SALT',        ')+&8lLupJ~7RyXyR=^.,eDh+x>Sal}q #sctVq7Yf 2]eXeje6n[ke9?1EP9&r0u');
define('SECURE_AUTH_SALT', 's!T=#{ZOfg-={yb`W~)H#Iq7%*vL3V%!(lXdtM#J?Qr~*DR>q`gWQ0^)G*u8]xgh');
define('LOGGED_IN_SALT',   'hHfo0g`gz4ItiR+)HO. u(W2?^1W0{*@Vl<j^Y}F4%L2e}3=yc!z=a_-6:?Yp1R6');
define('NONCE_SALT',       'TPk:/L}0kZpuvq];H0Nx4pc0hm)}I3M5I$n}L/-Y9DZ0Vo%[n}~b_b8|chV7ek4V');
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
