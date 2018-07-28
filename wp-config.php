<?php

//Begin Really Simple SSL Load balancing fix

if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
) {
$_SERVER["HTTPS"] = "on";
}

//END Really Simple SSL
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

define('WP_HOME', 'https://levery.com.br');
define('WP_SITEURL', 'https://levery.com.br');

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'leverywpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'leverywpress');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'w3s1e1b3a6a');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql642.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nc;Qd~-^?Ccf:fu%(t2TE9L?vt/_4vto{j@<::Hi%s~ru#z3=VW>~Zy)x=`ub~{.');
define('SECURE_AUTH_KEY',  'en*+ 6<3r;pA#oCYjt#xxp}}+p[^9j[^J7B/qIyq@a_%+~SIUMsOGp<)USKz>s/-');
define('LOGGED_IN_KEY',    'jaGbF}GXv7)+}sx#)qdB;eIQjyY<>LyQzad,K{g2GXGx$=m_MW$MJ~b~<1C~66u&');
define('NONCE_KEY',        '1%zHg=m&1{Aa9!&.FJ4ML&h`~.gtxm|&F3>=)O/}V3Qzc{87yfN1.(?_B8qWE1[^');
define('AUTH_SALT',        'uXFU!RC#G0xL`|9`]jTvB/Aa/qNi%pl|Kp?tKWQ `fs^:H =cD/;s#51WbzO{9Ug');
define('SECURE_AUTH_SALT', 'h9JkY|0cE[/L5f3yZ>yERV2frVx#{~ZbJlQ9ZQffppk+94Z}-vEFzTD0PL@=~g+?');
define('LOGGED_IN_SALT',   'VdT`^HN(ZtQ00(P>*([~7c5&TCjM:tTMgD`r0M>FrRA8(0PevZ;?uzi>f5*iy]t{');
define('NONCE_SALT',       'R!F{^(&+9# %CYFmvDj{!$ThMQtzCt7/42*M#q<DTs8E]74Ro9>nJZ.$}yE0u8;3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
define('WP_MEMORY_LIMIT', '256M');
$table_prefix  = 'lv_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
