<?php 
function tpl_5208fa8c_macros__60JNR1eJ0iQIh3Pneoh4Fg_MobileMenuReport(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 62 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">			
			<?php /* tag "h3" from line 63 */; ?>
<h3>BÁO CÁO</h3>
			<?php /* tag "ul" from line 64 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
				<?php /* tag "li" from line 65 */; ?>
<li id="ReportSelling"><?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁN HÀNG</a></li>
				<?php /* tag "li" from line 66 */; ?>
<li id="ReportSupplier"><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
				<?php /* tag "li" from line 67 */; ?>
<li id="ReportEmployee"><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></li>
				<?php /* tag "li" from line 68 */; ?>
<li id="ReportOther"><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportOther')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>CHI KHÁC</a></li>
			</ul>			
		</div>	
	</div><?php 
}

 ?>
<?php 
function tpl_5208fa8c_macros__60JNR1eJ0iQIh3Pneoh4Fg_MobileMenuMain(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 49 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
			<?php /* tag "h3" from line 50 */; ?>
<h3>MODULE</h3>
			<?php /* tag "ul" from line 51 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
				<?php /* tag "li" from line 52 */; ?>
<li id="Selling"><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁN HÀNG</a></li>
				<?php /* tag "li" from line 53 */; ?>
<li id="Import"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
				<?php /* tag "li" from line 54 */; ?>
<li id="Paid"><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>CHI TRẢ</a></li>
				<?php /* tag "li" from line 55 */; ?>
<li id="Report"><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
				<?php /* tag "li" from line 56 */; ?>
<li id="Setting"><?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a></li>
			</ul>
		</div>	
	</div><?php 
}

 ?>
<?php 
function tpl_5208fa8c_macros__60JNR1eJ0iQIh3Pneoh4Fg_MobileMenuSettings(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 35 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
			<?php /* tag "h3" from line 36 */; ?>
<h3>THIẾT LẬP</h3>
			<?php /* tag "ul" from line 37 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
				<?php /* tag "li" from line 38 */; ?>
<li id="SettingInfo"><?php /* tag "a" from line 38 */; ?>
<a href="#Info" data-transition="none" data-inline="true">THÔNG TIN</a></li>
				<?php /* tag "li" from line 39 */; ?>
<li id="SettingCategory"><?php /* tag "a" from line 39 */; ?>
<a href="#Category" data-transition="none" data-inline="true">DANH MỤC MÓN</a></li>
				<?php /* tag "li" from line 40 */; ?>
<li id="SettingDomain"><?php /* tag "a" from line 40 */; ?>
<a href="#Domain" data-transition="none" data-inline="true">KHU VỰC QUÁN</a></li>
				<?php /* tag "li" from line 41 */; ?>
<li id="SettingSupplier"><?php /* tag "a" from line 41 */; ?>
<a href="#Supplier" data-transition="none" data-inline="true">NHÀ CUNG CẤP</a></li>
				<?php /* tag "li" from line 42 */; ?>
<li id="SettingEmployee"><?php /* tag "a" from line 42 */; ?>
<a href="#Employee" data-transition="none" data-inline="true">NHÂN VIÊN</a></li>
				<?php /* tag "li" from line 43 */; ?>
<li id="SettingTerm"><?php /* tag "a" from line 43 */; ?>
<a href="#Term" data-transition="none" data-inline="true">CHI KHÁC</a></li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5208fa8c_macros__60JNR1eJ0iQIh3Pneoh4Fg_IncludeJS_Mobile(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "script" from line 26 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>
		<?php /* tag "script" from line 27 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.mobile.custom.js"></script>
		<?php /* tag "script" from line 28 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.mobile-1.1.1.min.js"></script>
		<?php /* tag "script" from line 29 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.session.js"></script>
		<?php /* tag "script" from line 30 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.validate.min.js"></script>
		<?php /* tag "script" from line 31 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery.validate.messages_vi.js"></script>
		<?php /* tag "script" from line 32 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/mobiscroll-2.0.2.custom.min.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_5208fa8c_macros__60JNR1eJ0iQIh3Pneoh4Fg_IncludeCSS_Mobile(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 5 */; ?>
<title><?php 
$ctx->noThrow(true) ;
if (!phptal_isempty($_tmp_1 = $ctx->path($ctx->User, 'getApp/getName', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_1) ;
elseif (!phptal_isempty($_tmp_1 = $ctx->path($ctx->App, 'getName', true))):  ;
?>
<?php 
echo phptal_escape($_tmp_1) ;
else:  ;
?>
<?php 
echo 'Hệ Thống Quản Lý Bán Hàng' ;
endif ;
$ctx->noThrow(false) ;
?>
</title>
		<?php /* tag "BASE" from line 6 */; ?>
<BASE href="http://minhtai.spn-soft.com"/>
		<?php /* tag "meta" from line 7 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 8 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta name="keywords" content="android, tablet, ios, web app, hệ thống, phần mềm, quản lý, đại lý, bán hàng"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta name="description" content="Hệ thống quản lý bán hàng"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta name="page-topic" content="Hệ thống quản lý bán hàng"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="Abstract" content="Hệ thống quản lý bán hàng"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="classification" content="Hệ thống quản lý bán hàng"/>
		
		<?php /* tag "link" from line 17 */; ?>
<link rel="icon" type="image/ico" href="data/images/app/favicon2.ico"/>
		
		<?php /* tag "meta" from line 19 */; ?>
<meta name="viewport" content="width=device-width, initial-scale=1"/> 
		<?php /* tag "link" from line 20 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/jquery.mobile-1.1.1.css"/>
		<?php /* tag "link" from line 21 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/vendaf.css"/>
		<?php /* tag "link" from line 22 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/base/mobiscroll-2.0.2.custom.min.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_5208fa8c_macros__60JNR1eJ0iQIh3Pneoh4Fg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ĐỊNH NGHĨA THƯ VIỆN CSS JAVASCRIPT -->	
	<?php /* tag "span" from line 4 */; ?>

			
	<?php /* tag "span" from line 25 */; ?>
	
	<?php /* tag "div" from line 34 */; ?>

	
	<?php /* tag "div" from line 48 */; ?>

	
	<?php /* tag "div" from line 61 */; ?>
						
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\macros.xhtml (edit that file instead) */; ?>