<?php
// $Id: index.php,v 1.2 2005/04/06 09:49:05 gij Exp $
// FILE		::	index.php
// AUTHOR	::	Ryuji AMANO <info@ryus.co.jp>
// WEB		::	Ryu's Planning <http://ryus.co.jp/>
//

require_once "../../../include/cp_header.php";
require_once dirname(dirname(__FILE__)).'/include/functions.php' ;
xoops_cp_header();
$plugins_path = XOOPS_ROOT_PATH . "/modules/waiting/plugins";
$module_handler =& xoops_gethandler('module');
$block = array();

//インストールされているモジュールリストを得る。
$mod_lists = $module_handler->getList(new Criteria(1,1),true);
echo "<h4>"._AM_WAITING_PLUGINLIST."</h4>";
echo "<table class='outer'>";
echo "<th>"._AM_WAITING_MODNAME."</th><th>dirname</th><th>"._AM_WAITING_STATUS."</th>";
foreach( $mod_lists as $dirname => $name ) {
	$style = ( @$style == "odd" ) ? "even" : "odd" ;
	$plugin_info = waiting_get_plugin_info( $dirname ) ;
	printf( "<tr class='%s'><td>%s</td><td>%s</td><td>%s</td></tr>" , $style , htmlspecialchars( $name ) , htmlspecialchars( $dirname ) , @$plugin_info['type'] ) ;
}
echo "</table>";
echo _AM_WAITING_PLUGINLIST_DESC;

xoops_cp_footer();
?>