
<?php if(filter_var(file_get_contents($GET['id']), FILTER_VALIDATE_URL)!==false){headers(Location : file_get_contents($GET['id']));
}else{echo "Invalid URL";}?>
