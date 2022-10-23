<?php

while ($line = @fgets($fp, 1024)) {
  list (, $name, , $email, , $url) =
    unpack("A20name/x5/A50email/x5/A30url", $line);
    
}
