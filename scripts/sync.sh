#!/bin/bash
cd $(dirname $0)

./generateCodeCoverage.sh &
git push

wait

cd ../../s9e.github.io/TextFormatter

git add *
git commit -a -m "Synced"
git push