#!/bin/sh

msg_task "Install Mail system"

    msg_subtask "Install ruby and rubygems"
        apt-get -y install rubygems ruby ruby-dev >/dev/null
        apt-get -y install libsqlite3-dev >/dev/null 2>/dev/null

    msg_subtask "Install Mailcatcher"
        gem install mime-types --version "< 3" >/dev/null # Pour pouvoir installer mailcatcher correctement
        gem install mailcatcher >/dev/null 2>/dev/null # Erreur ici, mais mailcatcher fonctionne tout de même

    msg_subtask "Setup Mailcatcher to run on startup"
        sed -i "s/^exit 0$/\/usr\/local\/bin\/mailcatcher/g" /etc/rc.local
        echo exit 0 >> /etc/rc.local

    msg_subtask "Install reverse proxy to access webmail"
        cp -Rf ${FILES_DIR}/etc/apache2/sites-available/mailcatcher /etc/apache2/sites-available/
        a2enmod proxy >/dev/null
        a2enmod proxy_http >/dev/null
        a2ensite mailcatcher >/dev/null
        service apache2 restart >/dev/null

    msg_subtask "Install and configure postfix to relay all mail to mailcatcher"
        cat ${FILES_DIR}/preseed/postfix.preseed | debconf-set-selections
        apt-get -y install postfix >/dev/null 2>/dev/null
        service postfix restart >/dev/null

    msg_subtask "Start Mailcatcher"
        mailcatcher >/dev/null

block_hint "Now, you can send emails to [ smtp://localhost:1025 ] and read them on [ http://localhost:8025 ]"