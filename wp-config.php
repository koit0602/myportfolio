<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'NkKTo' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=ZA&~dU8xb5:CX(Ou!j*J25|pe&y?haY:*m,G7NQ~7roh9P!vak_tbzSLZMK$qFa' );
define( 'SECURE_AUTH_KEY',  '34Z@cXV[`@ix,g XL?-@Q|X5Q/%XWEbqPY,9fig:(x}~x*jl_J^1*N,;3`0MRT^&' );
define( 'LOGGED_IN_KEY',    'o~{%q7C?)*%T&4~@|pHP5E=m?Lmm#}KroFgT<{}h+ZRgXKq#@nIdWVRZ?tbVM]V6' );
define( 'NONCE_KEY',        'M.CxN*<n^ZXFrGG!Eq}08C}v/S}*FR9hO=mbAkm57*p0t|42jOJ_pP$o51-2X-y~' );
define( 'AUTH_SALT',        '}06Ec-#TTjuGirn:M3%S!$`P3}X[eJB=zp*_bY&pEC &m*H @:oBt#i.dL_I:bNm' );
define( 'SECURE_AUTH_SALT', 'f*`Jjr *t_8@;;Z&68wv`|`1; ~BR~Wju7L~dB1^wehVRRYe;%p2874i7)xz0oiv' );
define( 'LOGGED_IN_SALT',   'FXNi&h(2Eb!n6<|T9u!YP2t73CvK0H,CE4  `<Vf&Rk<-FyY40/,=2Bgy1*/AWM6' );
define( 'NONCE_SALT',       '3i6/nF%x#=(=?#Zfqz-,.f5NEn3]t?F!@Ku*f|r&%^p#eSM|8~-1G!m8N1rdVe5o' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
