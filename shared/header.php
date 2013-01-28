
<!-- header -->
<header>
    <div class="wrapper">
        <ul id="icons">
            <li><a href="#" class="normaltip"><img src="images/icon1.png" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="images/icon2.png" alt=""></a></li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="floatLeft">
            <h1><a href="index.php" id="logo">Nico og Silje</a></h1>
            <p>Kjerringøy 22. juni 2013</p>
        </div>
        <nav>
            <ul id="menu">
                <li><a href="index.php"   <?php if (_CURRENT_PAGE == 'index') {
    echo 'class="active"';
} ?>>HJEM</a></li>
                <li><a href="hvor.php"    <?php if (_CURRENT_PAGE == 'hvor') {
    echo 'class="active"';
} ?>>KJERRINGØY</a></li>

            </ul>
        </nav>
    </div>

</header>
<!-- / header -->