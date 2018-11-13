<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bsi');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B~Zt~I.sY@Q=sAvvL#z*+4k@+{|e@th3|HK)&C>AtznVUrcUusr[]l.~R3D5*ccs');
define('SECURE_AUTH_KEY',  '=:T}dgl035B_g8Nz6: _4 v1XHM#H84L#UDN%Y5,xsm`60y} (ny,G_>;IJ,2IWv');
define('LOGGED_IN_KEY',    'WuH/rU=t78f*3DP.QdR.+QV<L7h3i9fXz9q%2MR?l?oal:]dc8+/*cmN;)G2qaVD');
define('NONCE_KEY',        'k98tidW02w4VGt#bi^W`/^&V>dk`|)^yVAt3-RBG}Yrm7~CXv@jbuZZ--{N<Q:P<');
define('AUTH_SALT',        'AfVx~>}2(.AmZuikOTntyj<R!Qwk9ac8EKW6KRdZ!vpD5rm^*gc0eVkRve`+LxZi');
define('SECURE_AUTH_SALT', 'PccRoTf>/}V2+EcQ/79G:H&%y+Yt5:SF3}b.+}WAx,Q^DV[}Ly&-qX}h.kd^]W[y');
define('LOGGED_IN_SALT',   '=T%e($vY5PK~,~e$)ir!thyE@-{XOMzlZ%[DxqAemK5{DhXX=5zf9x#<sBqd~Z8z');
define('NONCE_SALT',       ';0j}D/rxFzlez#KnYM)M4^E@}*r2X*V{a/2_:bKf1Y pfm(GI1{l.OiN%3.yTJOo');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
