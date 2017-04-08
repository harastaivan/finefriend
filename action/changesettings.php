<?php

changeSettings($_GET);

unset($_SESSION['user']);

echo "<script>location.href='index.php'</script>"

?>