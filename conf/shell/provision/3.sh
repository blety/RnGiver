#!/bin/sh

msg_task "Install Apache2"

    msg_subtask "Install packages"
        apt-get -y install apache2 >/dev/null 2>/dev/null
        # some weird things here ?!
        #apt-get -y purge apache2.2-common
        #apt-get -y install apache2

    msg_subtask "Configure Apache2"
        sed -i "s/^export APACHE_RUN_USER=www-data$/export APACHE_RUN_USER=vagrant/g" /etc/apache2/envvars
        sed -i "s/^export APACHE_RUN_GROUP=www-data$/export APACHE_RUN_GROUP=vagrant/g" /etc/apache2/envvars
        chown vagrant /var/lock/apache2
        echo "ServerName localhost" >>/etc/apache2/apache2.conf

    msg_subtask "Install /etc files"
        cp -Rf ${FILES_DIR}/etc/apache2/* /etc/apache2/

    msg_subtask "Activating mod_rewrite"
        a2enmod rewrite > /dev/null

    msg_subtask "Restart Apache2"
        service apache2 restart >/dev/null

msg_task "Prepare env for web servers"

    msg_subtask "Set correct ownership and permissions"
        chown -R vagrant:vagrant /var/www
        chmod -R 777 /var/www