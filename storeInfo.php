<?php

include 'storeData.php';

if ($_GET['country'] == "USA") {
    $storesInfo = $usStores;
} elseif ($_GET['country'] == "UK") {
    $storesInfo = $ukStores;
} else {
    $storesInfo = $canadaStores;
}
?>

<head></head>
<body>
    <div>
        <div>
            <?php
                if ($_GET['name'] == 'Victorias Secret') {
                    echo "Victoria's Secret";
                } elseif ($_GET['name'] == 'Macys') {
                    echo "Macy's";
                } else {
                    echo $_GET['name'];
                }
            ?>
        </div>
        <div>We have - refunds for this store</div>
        <div>
            <?php echo "The minimum amount is $" . $storesInfo[$_GET['name']][0] . " to submit"?>
        </div>
        <div>
            <div>
                <div>
                    <?php echo "$ " . $storesInfo[$_GET['name']][1]?>
                </div>
                <div>PURCHASE LIMIT</div>
            </div>
            <div>
                <div>
                    <?php echo $storesInfo[$_GET['name']][2]?>
                </div>
                <div>ITEM LIMIT</div>
            </div>
            <div>
                <div>
                    <?php echo $storesInfo[$_GET['name']][3]?>
                </div>
                <div>ORDER LIMIT (PER PERSON)</div>
            </div>
            <div>
                <div>
                    <?php echo $storesInfo[$_GET['name']][4]?>
                </div>
                <div>REFUND TIMEFRAME</div>
            </div>
        </div>
    </div>
</body>
