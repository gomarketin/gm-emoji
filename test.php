<?php
foreach (array_diff(scandir('img/png/34x32/'), array('..', '.')) as $key => $value) {
  $value = str_replace('emoji_','',$value);
  echo explode('.',$value)[0].' ';
}
 ?>
