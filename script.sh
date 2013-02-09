#!/bin/bash
for file in $(cat list.txt); do
mv $file crmOLD/
done;

