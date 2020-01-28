<?php
# Database Configuration
define( 'DB_NAME', 'wp_eighteenb' );
define( 'DB_USER', 'eighteenb' );
define( 'DB_PASSWORD', '5vhJDCN4ZpbVlKFSJAAH' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
$table_prefix = 'eb_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         's9%{+F$@gZ)&NrnZ#B(Fudkt#l}h]ju]!(Mh@D.|+75W{YG!ypN5v8|x@4Gw0*>a');
define('SECURE_AUTH_KEY',  'y&l!<(?z[{|wJ|(^+a~9a|8f<r5QbGJHm|7ELhUq[|7pv5<ON+y;G B1F{GU9>+z');
define('LOGGED_IN_KEY',    ')mO=`|04cZku2%-ejs6ozG94bF7ENf?@NbV,iUaY]RR$s] |gk-Pr}fngWpfh=t!');
define('NONCE_KEY',        '1`syqzS[ASN/z fp(Z6vMe|hMWA7!+Y|;*inT87[zP2p0[FJv<(yjw$l1Q16Jz|v');
define('AUTH_SALT',        'wayB!?9&?drgrEsqrDl}f_]TuQ]-uA?,p{%^v>um76&7U6:9!4sg-=0gT.UrIT`#');
define('SECURE_AUTH_SALT', '&B,_aK>+Uf{.?Bkv@E<;~sBGs<xuHE?dJur]F~5H$vH+|H3p{ovAli)r?nZ7Y|(s');
define('LOGGED_IN_SALT',   'h-s!_6i]`.a%`c9kS*o;-lS,QOEp&Jq~|3KT)6TF4--MLhT<f|D|fsz5-#qfIicd');
define('NONCE_SALT',       '_gU_A?3htQ4)D+YTOcNzx6-Y4bq}b7KKWEr&PLb3*;jKJA_zSLf:1Nij]|+  MU-');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'eighteenb' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'e3e565f27c87d686a19d59751b533bf54c1d3473' );

define( 'WPE_CLUSTER_ID', '100447' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'blog.eighteenb.com', 1 => 'eighteenb.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100447', );

$wpe_special_ips=array ( 0 => '104.196.22.244', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );


# WP Engine ID


# WP Engine Settings







# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

































































define( 'WP_SITEURL', 'http://blog.eighteenb.com' );

define( 'WP_HOME', 'http://blog.eighteenb.com' );
