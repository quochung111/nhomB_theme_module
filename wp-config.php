<?php
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
define('DB_NAME', 'nhomb');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '!8_M R6UaZrKG&]8+/8.bvxd}&qx~{a9UlU4PZsEbfUGVj0ex,v*lWTo8ab [csI');
define('SECURE_AUTH_KEY',  '7g7=q 0oPBgFi<fTDnu#FRS>Xy=9P)$,m(WzB :q~=onjh>m`E-BcyywA,qN^:J3');
define('LOGGED_IN_KEY',    'f7J)5OCn5F6V:Vd/ua=I=9tw48KE{54Ktjk!Y~PSnC/9e&(HBRJs.ru$xv{Ge#4@');
define('NONCE_KEY',        '5`VL?gd6Zu5E#*#D{SGOx34#)sMS7z52&UL+ k/OsP9wOl^%TC_&3Vr:nGFfrrg<');
define('AUTH_SALT',        'Rt/BNG.&h?/KeENfgvzg[1ARd<.zWZn[2K0E7;1r-#V: Q^sOwfzM.CR|uqg?W?D');
define('SECURE_AUTH_SALT', '[}Mf<i]LQn6/@*Crh}ZSaXQGH[!=5Gd?b&.wFdY R{Ub3[Jdu)&sko|)T%)5b|EL');
define('LOGGED_IN_SALT',   'K;^iqI}^WI0]1ZO~ZKNW-0!?_TV4]x{W1!*Y{EdEOmX lM.EZ]<a2_gVz ;Iv#qy');
define('NONCE_SALT',       '5|e%c&NRbe:-#e@=42@GeuQrCPsY2:ZZQ:W<N=<erOk`oK|-EP~:,z~=iyJe,r4F');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
