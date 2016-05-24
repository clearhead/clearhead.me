#!/usr/bin/env sh
git remote add staging git@git.wpengine.com:staging/clearhead.git
git push -f staging master
