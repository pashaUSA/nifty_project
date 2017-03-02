<?php 
    $currentLocation = basename($_SERVER['PHP_SELF']);
    $pageTitle = $businessName;
    if ($currentLocation == 'index.php'){
       $pageTitle .= ' | ' . 'Home'; 
    }else if ($currentLocation == 'contact.php'){
        $pageTitle .= ' | ' . 'Contact'; 
    }
?>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $businessName ?> Travel agency">
    <meta name="author" content="Pavel Svintsitskiy">
    <title><?php echo $pageTitle; ?></title>
    <?php include_once "sections/top-include.php"; ?>
</head>
