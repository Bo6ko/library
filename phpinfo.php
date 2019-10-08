<?php
if(class_exists('Memcache')){  
	echo 'Memcache is enabled. ';
}else{
echo 'Memcache is not enabled. ';
}
phpinfo();
?>