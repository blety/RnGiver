#!/bin/sh

msg_task "Install and configure PHP"

    msg_subtask "Install PHP"
        apt-get -y install php5 php5-intl php5-gd php5-xdebug php5-curl >/dev/null 2>/dev/null # php5-ldap php5-mcrypt

    msg_subtask "Install phpunit"
        wget -q https://phar.phpunit.de/phpunit.phar
        mv phpunit.phar /usr/bin/
        chmod +x /usr/bin/phpunit.phar

    msg_subtask "Install php5-mysql"
        apt-get -y install php5-mysql >/dev/null 2>/dev/null

    msg_subtask "Change PHP CLI configuration"
        sed -i "s/^;date\.timezone =$/date.timezone = 'UTC'/g" /etc/php5/cli/php.ini
        echo "xdebug.max_nesting_level = 256" >> /etc/php5/cli/conf.d/xdebug.ini

msg_task "Install and configure PHP for Apache2"

    msg_subtask "Configure PHP for Apache2"
        sed -i "s/^;date\.timezone =$/date.timezone = 'UTC'/g" /etc/php5/apache2/php.ini
        echo "xdebug.max_nesting_level = 256" >> /etc/php5/apache2/conf.d/*xdebug.ini

    msg_subtask "Enable mod php5 on Apache2"
        a2enmod php5 >/dev/null

    msg_subtask "Restart Apache2"
        service apache2 restart >/dev/null