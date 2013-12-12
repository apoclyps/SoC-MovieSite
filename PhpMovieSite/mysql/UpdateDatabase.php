<?php

SESSION_START();

$_SESSION['counter']=0;

?>

<?php

    include "../mysql/createmovie.php";
    include "../mysql/actordata.php";
    include "../mysql/moviedata.php";
    include "../mysql/movietype.php";
    include "../mysql/moviereview.php";
    include "../gd/gd1.php";

    include "../css/footer.php";

?>
