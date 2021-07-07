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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dados' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'vorgnae' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'muitodificil' );

/** Nome do host do MySQL */
define( 'DB_HOST', '10.120.49.163' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'KJ3$)k$3x61N},{V;TW;FEH^)tkTJ4Q-V?k4Wja#uWG2^#zr@BSzl?`l nPxi!Xt' );
define( 'SECURE_AUTH_KEY',  '] >J:J/B3Gpd>>qM$)2GUR>.X(@MB#CUFyl|kgQc$}SMmhlq4mK~kQOh>),xlYY?' );
define( 'LOGGED_IN_KEY',    ' #E&t+ud+*3) ^}wR[9[D@w[Vau`q<M,wK{n^jnF;V}?Q$41m=5`7JbEWMK[HHZK' );
define( 'NONCE_KEY',        ']!G%Jj]Jbb<$|2Bb~(P.c+!]D&t+&&`gzT%E,E.V!(|=a<;Ev.(}AXgn:^SQ|v.V' );
define( 'AUTH_SALT',        'n]#,,KCW<}+>.d:x%OCJ($2%|Bj)&^%4pj<OZ(Rdhg82Kl!{/![ ggt5LuLF&:Rq' );
define( 'SECURE_AUTH_SALT', 'Qx*fflg2^44Og8 m&z!*myXxrv^Zm~U`S^L@brOAcom.cFky{N8wyCoQNjL1IC~f' );
define( 'LOGGED_IN_SALT',   'AS>>iLys[_]%;Fs9b#rEa#q,^0ZiNNWE>idPw68Irg9bjQ|dzE?F-X+5duzg99((' );
define( 'NONCE_SALT',       '[7n#PLGV?zH{a[KGEeCC>EQ/NRT9QA<jCTh#O___)T+IMsgXtZ<1`Z.+X52tVm.l' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
