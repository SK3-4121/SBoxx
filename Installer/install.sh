#!/bin/sh
clear
echo "#############################################"
echo " ######### SBoxx Made by SK3#0001 ##########"
echo "  #########################################\n\n"

sudo apt update -y
sudo apt upgrade -y
sudo apt install git wget python3.8 python apache2 php7.4 curl -y
echo "Done updateing and upgrading and installing all of the main pakages"

echo "|========= Completed install now closing and uninstalling this file =========|"

sudo rm -f -r install.sh
