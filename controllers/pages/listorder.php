<?php
require('./models/order.php');

$orders = get_order(array('customer_id' => ($_SESSION['currentUser']->id)));
$order = $orders[0];
include('./views/partials/header.php');
include('./views/pages/listorder.php');
include('./views/partials/footer.php');