<?php 
function tpl_5208bb74_SettingSupplierResou__j4Ae_A3HBhh5vKE1MCSfxQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/SettingSupplierResourceInsLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>						
	<?php /* tag "div" from line 9 */; ?>
<div id="info" data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php /* tag "a" from line 12 */; ?>
<a href="#" data-icon="back" data-rel="back">
					<?php /* tag "img" from line 13 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 17 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 18 */; ?>
<div class="content-primary">
				<?php 
/* tag "form" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResourceInsExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form id="FormSettingSupplierResourceInsLoad" method="post" data-ajax="false" data-mini="true" class="ui-body ui-body-b ui-corner-all"<?php echo $_tmp_1 ?>
>
					<?php /* tag "fieldset" from line 20 */; ?>
<fieldset>
						<?php /* tag "div" from line 21 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 22 */; ?>
<label for="Name" class="text">Tên:</label>
							<?php /* tag "input" from line 23 */; ?>
<input class="required" id="Name" name="Name" type="text"/>
						</div>
						<?php /* tag "div" from line 25 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 26 */; ?>
<label for="IdCategory" class="text">Danh mục:</label>						
							<?php /* tag "select" from line 27 */; ?>
<select name="IdCategory" id="IdCategory">							
								<?php 
/* tag "option" from line 28 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->Categories)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
									<?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span>
								</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</select>
						</div>
						<?php /* tag "div" from line 33 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 34 */; ?>
<label for="IdUnit" class="text">Đơn vị:</label>
							<?php /* tag "select" from line 35 */; ?>
<select name="IdUnit" id="IdUnit">
								<?php 
/* tag "option" from line 36 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Unit = new PHPTAL_RepeatController($ctx->Units)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Unit as $ctx->Unit): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getId')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
									<?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
								</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</select>
						</div>
						<?php /* tag "div" from line 41 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 42 */; ?>
<label for="Size" class="text">Kích thước:</label>
							<?php /* tag "input" from line 43 */; ?>
<input class="required" id="Size" name="Size" type="text"/>
						</div>
						<?php /* tag "div" from line 45 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 46 */; ?>
<label for="Price1" class="text">Giá nhập:</label>
							<?php /* tag "input" from line 47 */; ?>
<input class="required" id="Price1" name="Price1" type="text"/>
						</div>
						<?php /* tag "div" from line 49 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 50 */; ?>
<label for="Price2" class="text">Giá xuất:</label>
							<?php /* tag "input" from line 51 */; ?>
<input class="required" id="Price2" name="Price2" type="text"/>
						</div>
						<?php /* tag "div" from line 53 */; ?>
<div data-role="fieldcontain">
							<?php /* tag "label" from line 54 */; ?>
<label for="Note" class="text">Mô tả:</label>
							<?php /* tag "input" from line 55 */; ?>
<input id="Note" name="Note" type="text"/>
						</div>				
					</fieldset>
					<?php /* tag "button" from line 58 */; ?>
<button type="submit" data-theme="b" data-icon="check" name="submit" value="submit-value">Lưu</button>
				</form>
			</div>
			<?php /* tag "div" from line 61 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 62 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 63 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 64 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 65 */; ?>
<li><?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 66 */; ?>
<li><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_3 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 67 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 68 */; ?>
<li><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 69 */; ?>
<li><?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_3 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 70 */; ?>
<li><?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 75 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 75 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/SettingSupplierResourceInsLoad.html (edit that file instead) */; ?>