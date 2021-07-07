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
define( 'AUTH_KEY',         '#5J{/nQgQ:Y@IFC*f|a;^Xlw!y)xY]}5ckA?[n>*JJH=D(E#/$9b+*7=k)r[Y2lH' );
define( 'SECURE_AUTH_KEY',  'g*vKW9J(-s<PQWyI */RR.:|?yBAx6}8y:5Q[F1Sz:9QvJbUnG@Q}IdD>DCR31(:' );
define( 'LOGGED_IN_KEY',    '*[1/xxx%AYcVQ%CR!HCtgA/_jDlpaP3vct.<6;cB`>:k1+tF/89dN`~vLey[l3Q_' );
define( 'NONCE_KEY',        '_wo}*|Ia}o|yk$o8 t|pfr6p._6}V&bD(?-Wx>U3E5Hr*OL[RZvL4cm`jDHh59rN' );
define( 'AUTH_SALT',        'fE_|W^OAF&,G}A?]nN%Xl0P1.|?UDs:p#ezQ<(XU/9=d$g:]<c.yI[Jx]mDtyvB!' );
define( 'SECURE_AUTH_SALT', 'n[rmr#XVNPz>$uY`J3XH%(VO)@bJB^*R}:w0~eg@@QtF{cToR{;6lL+P)_&g5.f6' );
define( 'LOGGED_IN_SALT',   '2ED;Ko{Np3<K& T[5ea/sFMLqquzIGoib-HWv{:k1xeE.s=5bS+A4nyda;.P%O*w' );
define( 'NONCE_SALT',       ' _]vZRzP.c`gVH.ut~^] 9yO$~W9oKa+JwG&Rf-=|_ 9wRf>NX]<DH^un</dE5d-' );

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
