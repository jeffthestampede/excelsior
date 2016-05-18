<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

mail("admission@excelsiorschool.com","Request for Information","Form data:

First Name: " . $_POST['field_1'] . "
Last Name: " . $_POST['field_2'] . "
Birth Date: " . $_POST['field_3'] . ", " . $_POST['field_4'] . "
Current Grade: " . $_POST['field_5'] . "
Address 1: " . $_POST['field_6'] . "
Address 2: " . $_POST['field_7'] . "
City: " . $_POST['field_8'] . "
State/Province: " . $_POST['field_9'] . "
ZIP Code: " . $_POST['field_10'] . "
Country " . $_POST['field_11'] . "
E-mail: " . $_POST['field_12'] . "
Telephone #: " . $_POST['field_13'] . "
Current School: " . $_POST['field_14'] . "
Enter Message: " . $_POST['field_15'] . "


");

include("Cconfirm.html");

?>