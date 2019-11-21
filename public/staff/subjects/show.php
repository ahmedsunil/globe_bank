<?php require_once('../../../private/initialize.php'); ?>

<?php

   //$id = isset($_GET['id']) ? $_GET['id'] : '1';


    $id = $_GET['id'] ?? '1'; // PHP > 7.0

    echo htmlspecialchars($id);

?>


<a href="show.php?name=<?php echo urlencode('john doe'); ?> ">Link</a><br/>
<a href="show.php?company=<?php echo urlencode('Widgets&More'); ?>">Link</a><br/>
<a href="show.php?query=<?php echo urlencode('!#*?'); ?>">Link</a><br/>
