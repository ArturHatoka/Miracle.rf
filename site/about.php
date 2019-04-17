<? include ('include/head.php'); ?>
<body>
<? include ('include/header.php'); ?>
<? include ('include/nav-about.php'); ?>
<div class="container">
    <div class="crumbs" style="margin-bottom: 0.3vw">
    <span>
        <a href="../index.php">Главная</a> /
        <b class="active-crumb">О компании</b>
    </span>
    </div>
    <div class="abt-txt">
        <div class="back">
            <? include ('include/about/manager.php'); ?>
            <? include ('include/about/contact.php'); ?>
            <? include ('include/about/payment.php'); ?>
            <? include ('include/about/rekvez.php'); ?>
            <? include ('include/about/about.php'); ?>
        </div>
    </div>
</div>
<? include ('include/footer.php'); ?>
</body>
<? include ('include/scripts.php'); ?>