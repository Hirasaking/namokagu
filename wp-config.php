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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'wordpress_namokagu');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GK.?cN6Jk6}ar>;GG9nJ2ZsfCShV?xm;^sYtZ=RTUd/B9ojCY@^?7k^tAEInIsDL');
define('SECURE_AUTH_KEY',  'H#|~41*UdYc1/?A(C}UV,?5^(6^m=(L_n,H9y*X8w0xoJ6 ;}|h?dae3PJiD3>7^');
define('LOGGED_IN_KEY',    '@0b<6Q)85Zj(Q}XQ/!R$Gep#4@(J=SgmL`xE4,zh]F[ha.a{%AG17`e^V*Pw7~/b');
define('NONCE_KEY',        'd7TJ<O5{*y:!-5.735^0g*^oo~h_|x7rX,E8#ZX~3xwpB9l|k4dVuf,Z,lPtU Fx');
define('AUTH_SALT',        '=w*xr$FXI4V|X#_XY~NQ&Y)e:.$)R^R7Vdu-H+ v2g&Ze;*y+MZ~:&cZAGq%iT*N');
define('SECURE_AUTH_SALT', 'mwo*v}MIVvNZ@wCJ@K}!4d0/tx% s,sSOygod8z 0n0EAI4_r4to]f/@g*c=G3~u');
define('LOGGED_IN_SALT',   'nwyaqnn;f@sse |,P+u5Yo]2`W{9:X26ZISBs=_JR7>#b*u:C!1%3xidD=jae`R%');
define('NONCE_SALT',       '%Rg_</sPk=Etv<.}_a]sdI+_:vTZ5&o{$}4P|qy./D0=Pyss?LNMyYiNbR1jQ;Nv');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
