<?php
  `git add -A`;
  `git commit -m "Server: Website based changes`;
  `git pull origin master`;
  `git submodule foreach git pull origin master`;
  `git add -A`;
  `git commit -m "Server: Updated submodules to latest`;
  `git push origin master`;
?>
