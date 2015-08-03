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
    $textBox=new TextBox();
    $radio=new RadioBox();
    $button=new Button();
    $dropDown=new Dropdown();
    $dropDown->addToList("1");
    $dropDown->addToList("2");
    $dropDown->addToList("3");
    $dropDown->addToList("4");
    $dropDown->addToList("5");
    $dropDown2=new Dropdown();
    $dropDown2->addToList("General Service");
    $dropDown2->addToList("Repair");
    $dropDown2->addToList("Some Other Item 1");
    $dropDown2->addToList("Some Other Item 2");
    $dropDown2->addToList("Some Other Item 3");
    $dropDown3=new Dropdown();
    $dropDown3->addToList("Paint");
    $dropDown3->addToList("Oil");
    $dropDown3->addToList("light");
    $dropDown3->addToList("Brakes");
    $dropDown3->addToList("Clutch");
    $form=new Form_Container();
    $form->AddElement($radio->Generate("customerType","New",""));
    $form->AddElement($radio->Generate("customerType","Existing",""));
    $form->AddElement($dropDown->Generate("Select Customer"));
    $form2=new Form_Container();
    $form2->AddElement($textBox->Generate("CustomerName","Name",""));
    $form2->AddElement($textBox->Generate("CustomerContactNumber","Contact Number",""));
    $form2->AddElement($textBox->Generate("CustomerContactEmail","Contact Email",""));
    $form2->AddElement($textBox->Generate("CustomerAddress","Address",""));
    $form2->AddElement($textBox->Generate("CustomerIDNumber","ID Number",""));
    $form3=new Form_Container();
    $form3->AddElement($textBox->Generate("staffName","Name of Mechanic",""));
    $form3->AddElement($dropDown2->Generate("Job"));
    $form3->AddElement($dropDown3->Generate("Parts Used"));
    $form3->AddElement($button->Generate("testbutton","Add Part"));
    $form3->AddElement($dropDown->Generate("Time Spent"));
    $form4=new Form_Container();
    $form4->AddElement($button->Generate("PJC","Print Job Card"));
    ?>
</head>
<body>

<div class="splash">
    <div class="color-line">
    </div>
    <div class="splash-title">
        <h1>Homer - Responsive Admin Theme</h1>
        <p>Special AngularJS Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p>
        <img src="images/loading-bars.svg" width="64" height="64" />
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
        <?= $hpanel->Generate("Customer Type",$form->Generate(),"")?><hr/>
        <?= $hpanel->Generate("Customer Details",$form2->Generate(),"")?><hr/>
        <?= $hpanel->Generate("Job Description",$form3->Generate(),"")?><hr/>
        <?= $hpanel->Generate("Complete",$form4->Generate(),"")?><hr/>
    </div>
</div>

<!-- Vendor scripts -->

<?php
$js=new \Scripts\JsIncludes();
$js->generateIncludes();
?>

</body>
</html>