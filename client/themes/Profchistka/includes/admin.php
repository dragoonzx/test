<?php
if (!defined("IN_FUSION")) { die("Access Denied"); }

if (iADMIN && (iUSER_RIGHTS != "" || iUSER_RIGHTS != "C")) {
    echo "<div class='adminpanel'>";
    echo "<a href='".ADMIN."index.php".$aidlink."' data-toggle='tooltip' data-delay='1000' data-placement='right' title='Панель администратора'><i class='fas fa-cog'></i></a>";
    echo "<a href='".BASEDIR."edit_profile.php' data-toggle='tooltip' data-delay='1000' data-placement='right' title='Профиль'><i class='fas fa-user'></i></a>";
    echo "<a href='".BASEDIR."setuser.php?logout=yes' data-toggle='tooltip' data-delay='1000' data-placement='right' title='Выход'><i class='fas fa-power-off'></i></a>\n";
    echo "</div>";
}
?>