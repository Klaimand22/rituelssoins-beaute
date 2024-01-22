<?php
/* rediriger vers page-home.php */
$home_url = get_home_url();
header("Location: $home_url");
exit;
?>
```