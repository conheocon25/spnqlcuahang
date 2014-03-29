<?php 
function tpl_5208bb68_App__8FH9632Mqvjp13LDAP4UDQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>
 
<?php /* tag "html" from line 2 */; ?>
<html>
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeCSS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeJS_Mobile', $_thistpl) ;
$ctx->popSlots() ;
?>
		
	</head>
<?php /* tag "body" from line 7 */; ?>
<body>
	<!-- MAIN PAGE -->
	<?php /* tag "div" from line 9 */; ?>
<div id="main" data-role="page" class="type-interior">
		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 11 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 12 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 13 */; ?>
<div data-role="collapsible" data-inset="true" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 14 */; ?>
<h3>CHỌN AO QUẢN LÝ</h3>
					<?php /* tag "ul" from line 15 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
						<?php 
/* tag "li" from line 16 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
?>
<li>
							<?php 
/* tag "a" from line 17 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getURLExport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
			<?php /* tag "div" from line 22 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 23 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 24 */; ?>
<h3>CÁC MODULE</h3>
					<?php /* tag "ul" from line 25 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 26 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 26 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLMain')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>QUẢN LÝ</a></li>
						<?php /* tag "li" from line 27 */; ?>
<li><?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 28 */; ?>
<li><?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 33 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 33 */; ?>
<p>&copy; 2012 SPN Co, Ltd.</p></div>
	</div>
			
	<!-- REPORT PAGE -->
	<?php /* tag "div" from line 37 */; ?>
<div id="report" data-role="page" class="type-interior">
		<?php 
/* tag "div" from line 38 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 39 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 40 */; ?>
<div class="content-primary">
				<?php /* tag "div" from line 41 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 42 */; ?>
<h3>CHỌN LOẠI</h3>
					<?php /* tag "ul" from line 43 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 44 */; ?>
<li><?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReportPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>1. AO NUÔI</a></li>
					</ul>
				</div>
			</div>
			<?php /* tag "div" from line 48 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 49 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 50 */; ?>
<h3>CÁC MODULE</h3>
					<?php /* tag "ul" from line 51 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 52 */; ?>
<li><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLMain')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>QUẢN LÝ</a></li>
						<?php /* tag "li" from line 53 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 54 */; ?>
<li><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 59 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 59 */; ?>
<p>&copy; 2012 SPN Co, Ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/App.html (edit that file instead) */; ?>