@echo off
echo commit = %1
echo pushing too school
git add .
git commit -m %1
git push school master