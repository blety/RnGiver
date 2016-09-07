#!/usr/bin/env bash

msg_task "Install Drush & Drupal"

    msg_subtask "Install Drush"
        apt-get -y install drush >/dev/null

#    msg_subtask "Install Drupal 7"
#        rm -R /var/www/*
#        composer create-project drupal/drupal /var/www -n >/dev/null 2>/dev/null
#        chown -R vagrant:vagrant /var/www
#        #cp -R /var/www/* ${SRC_ROOT}
#        #chown -R vagrant:vagrant ${SRC_ROOT}
#        # install Drupal 8
#        #drush site-install standard --db-url=mysql://root:beuchat51@localhost/drupal8 --account-pass=beuchat51 --account-mail=ncoste@asi.fr --site-name='Drupal 8' --notify -y
#
#    msg_subtask "Dump database"
#        mysqldump -uroot -pbeuchat51 ${DB_NAME} > ${CONF_ROOT}/files/mysql/content.sql

#msg_task "Install drupal"

#   drush dl drupal-7.38 --destination=${SERVER_ROOT} --drupal-project-rename='src' -y
#   curl http://ftp.drupal.org/files/translations/7.x/drupal/drupal-7.38.fr.po >  ${SRC_ROOT}/profiles/standard/translations/drupal-7.8.fr.po
#   cd ${SRC_ROOT}
#   drush site-install standard --account-name=admin --account-pass=beuchat51 --locale=fr --site-name='LNA_referentiel' --db-url=mysql://root:beuchat51@localhost:8080/LNA_referentiel --notify -y
#   drush dl drush_language -y
#   drush dl l10n_update && drush en -y $_
#   drush language-add fr && drush language-default $_
#   drush l10n-update-refresh
#   drush l10n-update
#   drush cc all