<?php

$result = sendAMessage($_GET['who'], $_GET['whom'], $_GET['text']);
echo "<script>location.href=`index.php?feed=1`</script>";


?>


