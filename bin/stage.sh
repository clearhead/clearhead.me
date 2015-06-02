#!/usr/bin/env sh
git remote add stage git@git.wpengine.com:staging/clearhead.git
git push -f stage HEAD:master
