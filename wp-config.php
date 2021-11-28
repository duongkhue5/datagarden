<?php
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'datagarden' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';C5Bw}&c3P&:PO~o 4|F=zkU~KTd:Nj)d.HxU6B+SF[5VO[-w6H5HqC~(5s/]26a' );
define( 'SECURE_AUTH_KEY',  'V#YRn(heP j&]t/Vr3nOg5bMBP,x8~b``L;+2KLFA8,,%CQdWLY8~5#J%CzT2~:!' );
define( 'LOGGED_IN_KEY',    'yY;6Jln9WsYeGX<SAkmn5WG2WRr9*ERF)H]LSuzI:<30&vK2YO`It~NjgO0-wfS^' );
define( 'NONCE_KEY',        '*0F8g#8ufysLV2PI}>4L.1/gkayL-G)G}XG x9*!z[lK<}g6S@j81#gmDAp6u@Ia' );
define( 'AUTH_SALT',        'KVZ[FlfOzcjVQ`S8(#-wHN=fgU%l(p{xb((7M?N-&NM0qV2ne:z2c/B,f3D-*| ;' );
define( 'SECURE_AUTH_SALT', '=RFMoJsB#wjAN|)nxYNRHa.>WMnt_U!*-E3oCy65UN*Swwih(V-Xq$.$THB; VYd' );
define( 'LOGGED_IN_SALT',   't<STP,qk%l@G7%Kha;I{8Y.fUJ@59YD4A)c9b7b/{,8y^pxI__W;%jCSf2V7B#Hf' );
define( 'NONCE_SALT',       'Z(R{leUhSU8 T.^=xyI|`(Y>&wCR?JLk<#s:twh:!+k#X.{1g,!lT]w]k[PWtd2A' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
