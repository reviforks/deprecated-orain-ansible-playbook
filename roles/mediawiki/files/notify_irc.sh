#!/bin/sh

cd /root/ansible-playbook
currentHashHead=$(git rev-parse --short HEAD)
messageStart=$(echo 'New LocalSettings loaded from commit' )
echo -e "USER OrainProd OrainProd OrainProd OrainProd\nNICK OrainProd\nPRIVMSG #orain :$messageStart $currentHashHead\nQUIT\n" \
| nc irc.freenode.net 6667
