#!/bin/sh
while read line
do
	wiki=`echo $line | cut -f1 -d "|"`
	/usr/bin/php5 $* --wiki $wiki
done < /srv/mediawiki/w/all.dblist

