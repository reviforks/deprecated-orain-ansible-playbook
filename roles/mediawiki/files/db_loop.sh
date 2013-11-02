#!/bin/sh
while read line
do
	wiki=`echo $line | cut -f1 -d "|"`
	php $* --wiki $wiki
done < /usr/share/nginx/.orain.org/w/all.dblist

