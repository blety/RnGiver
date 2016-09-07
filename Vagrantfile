# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.define "webapp" do |webapp|

        webapp.vm.box = "vbox4.3-debian7"
        webapp.vm.box_url = " http://cdsphp-ftp:81/vagrant-boxes/vbox4.3-debian7.box"

        webapp.vm.provider :virtualbox do |v|
            v.name = "RnGiver"
            v.memory = 1024
        end

        webapp.vm.network "private_network", ip: "192.168.50.22"

        webapp.vm.network :forwarded_port, guest: 22, host: 2223, id: "ssh", auto_correct: false
        webapp.vm.network :forwarded_port, guest: 80, host: 8081 #http-apache
        webapp.vm.network :forwarded_port, guest: 3306, host: 33067 #mysql
        webapp.vm.network :forwarded_port, guest: 9000, host: 9091 #xdebug
        webapp.vm.network :forwarded_port, guest: 8025, host: 8026 #mailcatcher

        webapp.vm.provision :shell, :path => "conf/shell/install.sh"
        webapp.vm.synced_folder "./src/", "/home/vagrant/src"

    end

end