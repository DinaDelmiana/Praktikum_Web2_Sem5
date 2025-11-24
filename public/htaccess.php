# mengaktifkan rewrite engine
Option -Indexes
Option +FollowSymLinks
RewriteEngine On
# Jika file atau folder yang diminta benar-benar ada, jangan lakukan rewrite
ewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
# Arahkan semua request ke index.php
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]