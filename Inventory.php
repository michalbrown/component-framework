<?php
include 'Classes/Resources/Global_Includes.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HOMER | WebApp admin theme</title>
    <?php
    $navbar=new \Elements\SideBar();
    $test3=new \Scripts\CssIncludes();
    $test3->generateIncludes();
    ?>
</head>
<body>

<!-- Simple splash screen-->

<div class="splash">
    <div class="color-line">
    </div>
    <div class="splash-title">
        <h1>Homer - Responsive Admin Theme</h1>
        <p>Special AngularJS Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p>-->
        <img src="images/loading-bars.svg" width="64" height="64" />-->
</div>
</div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            Developer Central
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">Developer Central</span>
        </div>
    </nav>
</div>
<?php $navbar->Create("testname");?>

<!-- Main Wrapper -->
<div id="wrapper">
    <div class="p-lg">
        <?php //print_r($testGrid->columns);?><hr/>
        <?= $hpanel->Generate("this is a test",$testGrid->GenerateGridView("table table-striped table-bordered table-hover dataTable no-footer"))?><hr/>
    </div>
</div>

<!-- Vendor scripts -->

<?php
$js=new \Scripts\JsIncludes();
$js->generateIncludes();
?>

</body>
</html>