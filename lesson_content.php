<?PHP
/**
 * lessons
 *
 * @author Peter Gabriel <pgabriel@databay.de>
 * @package ilias
 * @version $Id$
 */
include_once("./include/ilias_header.inc");
include("./include/inc.main.php");

$tpl = new Template("tpl.lessons.html", true, true);

$tplbtn = new Template("tpl.buttons.html", true, true);
$tplbtn->setCurrentBlock("btn_cell");
$tplbtn->setVariable("BTN_LINK","courses.php");
$tplbtn->setVariable("BTN_TXT", $lng->txt("courses"));
$tplbtn->parseCurrentBlock();
$tplbtn->setCurrentBlock("btn_row");
$tplbtn->parseCurrentBlock();

$tpl->setVariable("TXT_PAGEHEADLINE",  $lng->txt("lo_available"));
$tpl->setVariable("BUTTONS",$tplbtn->get());

$lessons = $ilias->account->getLessons();

for ($i = 0; $i<2; $i++)
{
        for ($j = 0; $j<3; $j++)
        {
                $tpl->setCurrentBlock("subcategory");
                $tpl->setVariable("ROWCOL","tblrow".(($j%2)+1));
                $tpl->setVariable("TITLE","title".$j);
                $tpl->setVariable("IMG_AND_LINK","img".$j);
                $tpl->parseCurrentBlock();
        }
        $tpl->touchBlock("subcategory_others");
        $tpl->setCurrentBlock("category");
        $tpl->setVariable("CAT_TITLE","CATEGORY".$i);
        $tpl->parseCurrentBlock();

}

$tplmain->setVariable("PAGECONTENT",$tpl->get());
$tplmain->show();

?>