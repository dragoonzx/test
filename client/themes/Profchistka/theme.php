<?php
if (!defined("IN_FUSION")) {
    die("Access Denied");
}
define("THEME_BULLET", "<img src='".THEME."images/bullet.gif' class='bullet' alt='&raquo;' border='0' />");
require_once THEME."functions.php";
require_once INCLUDES."theme_functions_include.php";
require_once INFUSIONS.'mega_menu/classes/MegaMenu.class.php';
function render_page($license = false) {
    add_handler("theme_output");
    global $settings, $main_style, $locale, $mysql_queries_time, $aidlink;
    require_once THEME."includes/admin.php"; ?>
	<?php
    // Content
    echo "<div class='container'>\n";
        echo "<div id='main-bg'>\n";
        if ((LEFT) || (RIGHT)) {
            echo '<div class="row">';
            echo "<div class='col-xl-3 order-2 order-xl-1'><div class='side'>".LEFT.RIGHT."</div></div>\n";
            echo "<div class='col-xl-9 order-1 order-xl-2'>\n";
            echo "<div class='upper'>".U_CENTER."</div>\n";
            echo "<div class='content'>".CONTENT."</div>\n";
            echo "<div class='lower'>".L_CENTER."</div>\n";
            echo "</div>\n";
            echo '</div>';
        } else {
            echo "<div class='upper'>".U_CENTER."</div>\n";
            echo "<div class='content'>".CONTENT."</div>\n";
            echo "<div class='lower'>".L_CENTER."</div>\n";
        }
        echo "</div>\n";
    echo "</div>\n";
    ?>
<?php
}

function opentable($title,$additional='') {
    echo "<div class='capmain inherit'><h1>".$title."</h1>".($additional!=''?"<div class='additional'>$additional</div>":'')."</div>\n";
    echo "<div class='main-body floatfix spacer'>\n";
}

function closetable() {
    echo "</div>\n";
}

function openside($title = '') {
    echo "<div class='sideblock'>\n";
    if ($title!='') {
        echo "<div class='sidetitle'>".$title."</div>\n";
    }
    echo "<div class='sidebody'>\n";
}

function closeside() {
    echo "</div>\n";
    echo "</div>\n";
}

?>