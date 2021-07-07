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
define( 'AUTH_KEY',         'dX>4@Jk-T`>|3z(s{?zC;S1OF8DmF%4Ix0z)0wM}[mIO#3>qy#V*;GXHR:gc4eUN' );
define( 'SECURE_AUTH_KEY',  ',! ug~WkZS6Tki0xA*Of&4z!M=:y0=[m3@Br=9VGY,k!W@s OX5T_5s R$ZVtI{o' );
define( 'LOGGED_IN_KEY',    '<r2{DSIlBAY>C2^VQ/&-Gsd&M?uk3b6-,aF8j#,r`]X(;8+S5Yl[+tZcxd-OF&#^' );
define( 'NONCE_KEY',        '#tct;4`Y[V_#w1?g&TA)kiD}X=)X:NXVwv~F|};)/E2?+IfT]GM?~GvM2{U|9W}U' );
define( 'AUTH_SALT',        's3{f,Ikl6gX#7ul<rv_E@)O8r1/Y8,IX2*2v%n<)8[-IPm%tQp!IOCHD#~dmmlE<' );
define( 'SECURE_AUTH_SALT', 'Ju3eEMDs&05xB0SY#P-6:op@E=%JQ9*>}3AA8uG*9>my3WsAsMt+@6lR{HBQlC?K' );
define( 'LOGGED_IN_SALT',   'fu)H4d33!4HxwpOJ6sunvxPC5HMo2H3}IN6)S%s7yHBw>8#aF;<S`pSZLPYzK3(m' );
define( 'NONCE_SALT',       'ahi=@k`K};bi5LsHsrO;$3/~]>D>/Z.g|{3Z^sS;bw.nmlpV}Q@gi5Y;MBJ;/: M' );

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
