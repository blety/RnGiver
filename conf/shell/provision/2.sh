#!/bin/sh

msg_task "Install MySQL Server"

    msg_subtask "Prepare preseed"
        cat ${FILES_DIR}/preseed/mysql.preseed | debconf-set-selections

    msg_subtask "Install MySQL server and client"
        apt-get -y install mysql-server mysql-client >/dev/null 2>/dev/null

    msg_subtask "Update my.cnf to allow UTF8 support"
        sed -i "s/^\[mysqld\]$/\[mysqld\]\ncollation-server = utf8_general_ci\ncharacter-set-server = utf8\n/g" /etc/mysql/my.cnf

    msg_subtask "Update my.cnf to allow external connection"
        sed -i "s/^bind-address.*=.*127.0.0.1$/\#bind-address            = 127.0.0.1/g" /etc/mysql/my.cnf

    msg_subtask "Add a root@'%' user"
        mysql -uroot -pbeuchat51 -e "GRANT ALL PRIVILEGES ON *.* TO root@'%' IDENTIFIED BY 'beuchat51'"

    msg_subtask "Restart MySQL"
        service mysql restart >/dev/null

msg_task "Install database"

    msg_subtask "Init database"

        mysql -uroot -pbeuchat51 -e "CREATE DATABASE ${DB_NAME}"
        mysql -uroot -pbeuchat51 -e "GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER ON ${DB_NAME}.* TO 'root'@'localhost' IDENTIFIED BY 'beuchat51'"

    msg_subtask "Fill database"

        mysql -uroot -pbeuchat51 ${DB_NAME} < ${CONF_ROOT}/files/mysql/content.sql