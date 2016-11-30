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
define('DB_NAME', 'journee_projet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3e3T19`JM!$i9nb;e2EF^L)5U(L2Wbl{n~<eY_yKjl^L4XTKsT-i|.Aa1}m6O,~!');
define('SECURE_AUTH_KEY',  'Jae9MjP +VZoY0F b>%2]pVj[S>M`(m`@CYX`O~#5N nPz<N892yyd;+;jcd78-W');
define('LOGGED_IN_KEY',    '2KWG[/m+e9/i=/m;;Fd?<pEd/9YP->E?gH_LoAwZ:t5w|j7k,O>6gXyrih`%-J19');
define('NONCE_KEY',        '~M;c{bJi+)>GTd7S,`Xw8W&uS}zQFbaR4:+np{Oy1#4}@6moFnwL5%R*(} dbO}g');
define('AUTH_SALT',        'w=03q2;]eb=;cj}N;q;CnBj1Pm:7~9uYO#{-3zd3*&P836>: 5>n,O*1[w:+C}Zn');
define('SECURE_AUTH_SALT', 'yTR!Ra=7}aV^)vzl7$Z+/rLayJIif<t1Y2n[W`chNc(O}{g!:y1Q5xi*[TNy6vCY');
define('LOGGED_IN_SALT',   'jRaycmM>c|HuZZ<?9{s|`n:jc:q50@t*a^v*<@g)fJ[9t.A)2d~nWiWZ[5`?!B&D');
define('NONCE_SALT',       'xLAIBYl28X4^nZBT1~CvZe~7G[*j%vb&ce`p~CuIM~AH.AAUFh=-$>{.G~klh=Bw');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wpjp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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