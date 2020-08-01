FIX lỗi: vendor/autoload.php

- Mở Git Bash hoặc CMD > di chuyển đến thư mục chứa project, gõ lệnh:
composer install
- copy file .env.example rồi đổi tên thành .evn
- bấm: Alt + F12 gõ lệnh: php artisan key:generate
- chạy tiếp lệnh : php artisan migrate --seed
1.

theo đường dẫn:"C:\Windows\System32\drivers\etc"
dùng notepat mở bằng admin file host
copy and paste 2 file này vào cuối file host và save.
127.0.0.1		localhost
127.0.0.1		ngo-yasuo.org

2. mở file "httpd-vhosts.conf" theo đường dẫn: "C:\xampp\apache\conf\extra"

copy and paste 2 file này vào cuối file httpd-vhosts.conf và save.

<VirtualHost *:80>
	DocumentRoot "C:/xampp/htdocs"
	ServerName localhost
</VirtualHost>

<VirtualHost *:80>
	DocumentRoot "C:\xampp\htdocs\ngo-yasuo\public"
	ServerName ngo-yasuo.org
</VirtualHost>

3. 