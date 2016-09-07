#!/bin/sh

msg_task "Set dotdeb repositories"

    msg_subtask "Add dotdeb packages to sources.list"
        echo "deb http://packages.dotdeb.org wheezy-php56 all" >> /etc/apt/sources.list
        echo "deb-src http://packages.dotdeb.org wheezy-php56 all" >> /etc/apt/sources.list

    msg_subtask "Get keys"
        wget -q http://www.dotdeb.org/dotdeb.gpg
        apt-key add dotdeb.gpg >/dev/null && rm dotdeb.gpg

    msg_subtask "Update APT repositories"
        apt-get update >/dev/null 2>/dev/null

msg_task "Common packages and configuration"

    msg_subtask "Install customized prompt"
        apt-get install figlet >/dev/null
        figlet -t ${APP_NAME} -w 150 > /etc/motd

    msg_subtask "Install lynx, curl"
        apt-get install lynx curl >/dev/null

    msg_subtask "Install customized dotfiles to /home/vagrant"
        cp -Rf ${FILES_DIR}/home/vagrant/.bash_aliases /home/vagrant/
        cp -Rf ${FILES_DIR}/home/vagrant/.bashrc /home/vagrant/
        chown -R vagrant:vagrant /home/vagrant/.bash_aliases
        chown -R vagrant:vagrant /home/vagrant/.bashrc

    msg_subtask "Install debconf-utils"
        apt-get install debconf-utils >/dev/null