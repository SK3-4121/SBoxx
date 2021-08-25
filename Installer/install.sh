#!/bin/sh

clear
echo "#############################################"
echo " ######### SBoxx Made by SK3#0001 ##########"
echo "  #########################################\n\n"

sudo apt update -y
sudo apt upgrade -y
sudo apt install git wget python3.8 python apache2 php7.4 -y
echo "Done updateing and upgrading and installing all of the main pakages"

wget https://raw.githubusercontent.com/SK3-4121/SBoxx/main/Installer/launcher.py

echo "|========= Completed install of launcher.py =========|"
echo "\nNow runing launcher.py"

sudo python3 launcher.py
