<?php
  'cd /kunden/homepages/13/d176034565/htdocs/weiskopf/william';
  'git add -A';
  'git commit -m "Server: Website based changes';
  echo "Commited server side changes";
  'git pull origin master';
  echo "pulling for each submodule";
  'git submodule foreach git pull origin master';
  'git add -A';
  'git commit -m "Server: Updated submodules to latest';
  'git push origin master';
?>
