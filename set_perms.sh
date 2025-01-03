


#!/bin/bash

# Set proper permissions for directories and files in the public directory
sudo chmod -R 755 /var/www/html/kassang/katio/mbouop/tansatechlive/public
sudo find /var/www/html/kassang/katio/mbouop/tansatechlive/public -type d -exec chmod 755 {} \;
sudo find /var/www/html/kassang/katio/mbouop/tansatechlive/public -type f -exec chmod 644 {} \;
# Set directory permissions to 775 (directories should be executable to access files inside)
sudo find /var/www/html/kassang/katio/mbouop/tansatechlive/storage -type d -exec chmod 775 {} \;

# Set file permissions to 664 (files should be writable, but not executable)
sudo find /var/www/html/kassang/katio/mbouop/tansatechlive/storage -type f -exec chmod 664 {} \;

# Set ownership for the SSL certificate directory
sudo chown -R www-data:www-data /etc/letsencrypt/live/engineering.tansatech.com

# Set correct permissions for the SSL certificate files
sudo chmod 644 /etc/letsencrypt/live/engineering.tansatech.com

