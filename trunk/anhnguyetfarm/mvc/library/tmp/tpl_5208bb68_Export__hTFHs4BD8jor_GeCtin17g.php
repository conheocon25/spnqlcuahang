<?php 
function tpl_5208bb68_Export__hTFHs4BD8jor_GeCtin17g(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		
		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Export.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php 
/* tag "div" from line 9 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Pond, 'getIdPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="main" data-role="page" class="type-interior"<?php echo $_tmp_1 ?>
></div>
	<?php 
/* tag "div" from line 10 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->Session1, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Track, 'getIdMonth')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="pond type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 12 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_3 ?>
>
					<?php /* tag "img" from line 14 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 18 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 19 */; ?>
<div class="content-primary">
				<?php /* tag "H3" from line 20 */; ?>
<H3><?php echo phptal_escape($ctx->path($ctx->Track, 'getPond/getName')); ?>
</H3>
				<?php /* tag "fieldset" from line 21 */; ?>
<fieldset class="ui-grid-a">
					<?php 
/* tag "div" from line 22 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->D = new PHPTAL_RepeatController($ctx->path($ctx->Track, 'getDates'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->D as $ctx->D): ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->D, 'getCSSClass')))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<div data-role="collapsible" data-collapsed="true" data-theme="b"<?php echo $_tmp_4 ?>
>
						<?php /* tag "h3" from line 23 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->D, 'getDatePrint')); ?>
</h3>
						<?php /* tag "ul" from line 24 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
							<?php /* tag "li" from line 25 */; ?>
<li><?php 
/* tag "a" from line 25 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->D, 'getURLExportPond1')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
>1. XUẤT THỨC ĂN</a></li>
							<?php /* tag "li" from line 26 */; ?>
<li><?php 
/* tag "a" from line 26 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->D, 'getURLExportPond2')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
>2. XUẤT THUỐC</a></li>
							<?php /* tag "li" from line 27 */; ?>
<li><?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->D, 'getURLPaidPond')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
>3. CHI PHÍ</a></li>
							<?php /* tag "li" from line 28 */; ?>
<li><?php 
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->D, 'getURLLogUpdLoad')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
>4. HAO HỤT</a></li>
							<?php /* tag "li" from line 29 */; ?>
<li><?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->D, 'getURLImportPond1')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
>5. NHẬP THỨC ĂN</a></li>
							<?php /* tag "li" from line 30 */; ?>
<li><?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->D, 'getURLImportPond2')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_5 ?>
>6. NHẬP THUỐC</a></li>
						</ul>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</fieldset>
			</div>
			<?php /* tag "div" from line 35 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 36 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 37 */; ?>
<h3>THÁNG</h3>					
					<?php /* tag "ul" from line 38 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php 
/* tag "li" from line 39 */ ;
$_tmp_5 = $ctx->repeat ;
$_tmp_5->Track1 = new PHPTAL_RepeatController($ctx->path($ctx->Session, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_5->Track1 as $ctx->Track1): ;
if (null !== ($_tmp_4 = ($ctx->Track->getIdMonth()==$ctx->Track1->getIdMonth()?'a':'c'))):  ;
$_tmp_4 = ' data-theme="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<li<?php echo $_tmp_4 ?>
>
							<?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_3 = ('#'.$ctx->Track1->getIdMonth()))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_3 ?>
>
								<?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track1, 'getMonthPrint')); ?>
</span>
							</a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 48 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 48 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/Export.html (edit that file instead) */; ?>