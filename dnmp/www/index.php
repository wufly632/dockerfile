<?php
echo "<h1><center>hello wufly-dnmp</center></h1>";
phpinfo();

UPDATE pms_product_words_lib SET en_name = CONCAT(UPPER(SUBSTR(en_name,1,1)), SUBSTR(en_name,2,LENGTH(en_name)-1)) WHERE id = 1

select substr(en_name, 1, 1) from pms_product_words_lib where id = 1