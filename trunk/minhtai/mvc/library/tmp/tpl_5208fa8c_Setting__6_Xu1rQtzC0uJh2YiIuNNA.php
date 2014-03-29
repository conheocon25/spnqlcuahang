<?php 
function tpl_5208fa8c_Setting__6_Xu1rQtzC0uJh2YiIuNNA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Setting.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<!-- SETTING !-->
	<?php /* tag "div" from line 10 */; ?>
<div id="setting" data-role="page" class="type-interior"></div>	
	
	<!-- UNIT !-->
	<?php /* tag "div" from line 13 */; ?>
<div id="unit" data-role="page" class="type-interior">
		<?php /* tag "div" from line 14 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 15 */; ?>
<h1><?php echo 'THIẾT LẬP ĐƠN VỊ TÍNH'; ?>
</h1>
			<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 17 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 19 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 20 */; ?>
<div class="content-primary">			
				<?php /* tag "ul" from line 21 */; ?>
<ul data-role="listview" data-filter="true" data-theme="c" data-inset="true" data-filter-placeholder="Gõ để tìm đơn vị...">
					<?php 
/* tag "li" from line 22 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Unit = new PHPTAL_RepeatController($ctx->Units)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Unit as $ctx->Unit): ;
?>
<li>
						<?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "strong" from line 24 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->repeat, 'Unit/number')); ?>
</strong>. <?php /* tag "strong" from line 24 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</strong>
						</a>
						<?php 
/* tag "a" from line 26 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
																
				</ul>
				<?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnitInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>THÊM ĐƠN VỊ</a>
			</div>
			<?php /* tag "div" from line 31 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 32 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 33 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 34 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 35 */; ?>
<li><?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 36 */; ?>
<li><?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 37 */; ?>
<li><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 38 */; ?>
<li><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 39 */; ?>
<li><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 40 */; ?>
<li><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 41 */; ?>
<li><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 42 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 47 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 47 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- STORE !-->
	<?php /* tag "div" from line 51 */; ?>
<div id="store" data-role="page" class="type-interior">
		<?php /* tag "div" from line 52 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 53 */; ?>
<h1><?php echo 'THIẾT LẬP KHO'; ?>
</h1>
			<?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 55 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 57 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 58 */; ?>
<div class="content-primary">			
				<?php /* tag "ul" from line 59 */; ?>
<ul data-role="listview" data-filter="true" data-theme="c" data-inset="true" data-filter-placeholder="Gõ để tìm kho...">
					<?php 
/* tag "li" from line 60 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Store = new PHPTAL_RepeatController($ctx->Stores)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Store as $ctx->Store): ;
?>
<li>
						<?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store, 'getURLInit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "strong" from line 62 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->repeat, 'Store/number')); ?>
</strong>. <?php /* tag "strong" from line 62 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</strong>
						</a>
						<?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store, 'getURLDelLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_1 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
																
				</ul>
				<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStoreInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_1 ?>
>THÊM KHO</a>
			</div>
			<?php /* tag "div" from line 69 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 70 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 71 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 72 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 73 */; ?>
<li><?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 74 */; ?>
<li><?php 
/* tag "a" from line 74 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 75 */; ?>
<li><?php 
/* tag "a" from line 75 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 76 */; ?>
<li><?php 
/* tag "a" from line 76 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 77 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 77 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 78 */; ?>
<li><?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 79 */; ?>
<li><?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 80 */; ?>
<li><?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 85 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 85 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- CATEGORY !-->
	<?php /* tag "div" from line 89 */; ?>
<div id="category" data-role="page" class="type-interior">
		<?php /* tag "div" from line 90 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 91 */; ?>
<h1><?php echo 'THIẾT LẬP DANH MỤC'; ?>
</h1>
			<?php 
/* tag "a" from line 92 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php /* tag "a" from line 93 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 95 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 96 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 97 */; ?>
<ul data-role="listview" data-filter="true" data-theme="c" data-inset="true" data-filter-placeholder="Gõ để tìm danh mục...">
					<?php 
/* tag "li" from line 98 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->Categories)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<li>						
						<?php 
/* tag "a" from line 99 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 100 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Category/number')); ?>
</span>. <?php /* tag "span" from line 100 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</span>
						</a>
						<?php 
/* tag "a" from line 102 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
																
				</ul>
				<?php 
/* tag "a" from line 105 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategoryInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>THÊM DANH MỤC</a>
			</div>
			<?php /* tag "div" from line 107 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 108 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 109 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 110 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 111 */; ?>
<li><?php 
/* tag "a" from line 111 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 112 */; ?>
<li><?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 113 */; ?>
<li><?php 
/* tag "a" from line 113 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 114 */; ?>
<li><?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 115 */; ?>
<li><?php 
/* tag "a" from line 115 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 116 */; ?>
<li><?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 117 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 117 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 118 */; ?>
<li><?php 
/* tag "a" from line 118 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 123 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 123 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
			
	<!-- INFO !-->
	<?php /* tag "div" from line 127 */; ?>
<div id="info" data-role="page" class="type-interior">
		<?php /* tag "div" from line 128 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 129 */; ?>
<h1>THIẾT LẬP THÔNG TIN</h1>
			<?php 
/* tag "a" from line 130 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 131 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>		
		<?php /* tag "div" from line 133 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 134 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 135 */; ?>
<ul data-role="listview" data-inset="true">
					<?php /* tag "li" from line 136 */; ?>
<li>
						<?php 
/* tag "a" from line 137 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfoUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "h3" from line 138 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getName')); ?>
</h3>
							<?php /* tag "p" from line 139 */; ?>
<p><?php /* tag "strong" from line 139 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getAddress')); ?>
</strong>, <?php /* tag "strong" from line 139 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getEmail')); ?>
</strong></p>
							<?php /* tag "p" from line 140 */; ?>
<p class="ui-li-aside">
								<?php /* tag "strong" from line 141 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getPhone')); ?>
</strong>
							</p>
						</a>
					</li>
					<?php /* tag "li" from line 145 */; ?>
<li>
						<?php /* tag "p" from line 146 */; ?>
<p>
							Sử dụng <?php /* tag "strong" from line 147 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getDateCreatedPrint')); ?>
</strong>,							
							Kích hoạt đến <?php /* tag "strong" from line 148 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getDateActivityPrint')); ?>
</strong>,
							còn <?php /* tag "strong" from line 149 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/remainPercentUpdated')); ?>
</strong> giờ để cập nhật
						</p>						
					</li>
					<?php /* tag "li" from line 152 */; ?>
<li><?php 
/* tag "a" from line 152 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfoPasswdLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>Đổi mật khẩu</a></li>
				</ul>
			</div>
			<?php /* tag "div" from line 155 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 156 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 157 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 158 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 159 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 159 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 160 */; ?>
<li><?php 
/* tag "a" from line 160 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 161 */; ?>
<li><?php 
/* tag "a" from line 161 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 162 */; ?>
<li><?php 
/* tag "a" from line 162 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 163 */; ?>
<li><?php 
/* tag "a" from line 163 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 164 */; ?>
<li><?php 
/* tag "a" from line 164 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 165 */; ?>
<li><?php 
/* tag "a" from line 165 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 166 */; ?>
<li><?php 
/* tag "a" from line 166 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 171 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 171 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- TERM !-->
	<?php /* tag "div" from line 175 */; ?>
<div id="term" data-role="page" class="type-interior">
		<?php /* tag "div" from line 176 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 177 */; ?>
<h1><?php echo 'THIẾT LẬP CHI KHÁC'; ?>
</h1>
			<?php 
/* tag "a" from line 178 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php /* tag "a" from line 179 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 181 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 182 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 183 */; ?>
<ul data-role="listview" data-filter="true" data-theme="c" data-inset="true" data-filter-placeholder="Gõ để tìm ...">
					<?php 
/* tag "li" from line 184 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Term = new PHPTAL_RepeatController($ctx->Terms)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Term as $ctx->Term): ;
?>
<li>
						<?php 
/* tag "a" from line 185 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Term, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 186 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Term/number')); ?>
</span>. <?php /* tag "span" from line 186 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Term, 'getName')); ?>
</span>
						</a>
						<?php 
/* tag "a" from line 188 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Term, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 191 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingTermInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_2 ?>
>THÊM CHI KHÁC</a>
			</div>
			<?php /* tag "div" from line 193 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 194 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 195 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 196 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 197 */; ?>
<li><?php 
/* tag "a" from line 197 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 198 */; ?>
<li><?php 
/* tag "a" from line 198 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 199 */; ?>
<li><?php 
/* tag "a" from line 199 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 200 */; ?>
<li><?php 
/* tag "a" from line 200 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 201 */; ?>
<li><?php 
/* tag "a" from line 201 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 202 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 202 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 203 */; ?>
<li><?php 
/* tag "a" from line 203 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 204 */; ?>
<li><?php 
/* tag "a" from line 204 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 209 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 209 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	<!-- CUSTOMER !-->
	<?php /* tag "div" from line 212 */; ?>
<div id="customer" data-role="page" class="type-interior">
		<?php /* tag "div" from line 213 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 214 */; ?>
<h1>THIẾT LẬP KHÁCH HÀNG</h1>
			<?php 
/* tag "a" from line 215 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 216 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>

		<?php /* tag "div" from line 219 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 220 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 221 */; ?>
<ul data-role="listview" data-inset="true" data-filter="true" data-filter-placeholder="Gõ để tìm khách hàng...">
					<?php 
/* tag "li" from line 222 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Customer as $ctx->Customer): ;
?>
<li>
						<?php 
/* tag "a" from line 223 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLUpdLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 224 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Customer/number')); ?>
</span>. <?php /* tag "span" from line 224 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</span>
							<?php /* tag "p" from line 225 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 225 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPhone')); ?>
</strong></p>
						</a>						
						<?php 
/* tag "a" from line 227 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLDelLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_1 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 230 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomerInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_1 ?>
>THÊM KHÁCH HÀNG</a>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 232 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 233 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 234 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 235 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 236 */; ?>
<li><?php 
/* tag "a" from line 236 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 237 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 237 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 238 */; ?>
<li><?php 
/* tag "a" from line 238 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 239 */; ?>
<li><?php 
/* tag "a" from line 239 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 240 */; ?>
<li><?php 
/* tag "a" from line 240 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 241 */; ?>
<li><?php 
/* tag "a" from line 241 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 242 */; ?>
<li><?php 
/* tag "a" from line 242 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 243 */; ?>
<li><?php 
/* tag "a" from line 243 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div><!-- /content -->
		<?php /* tag "div" from line 248 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 248 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- EMPLOYEE !-->
	<?php /* tag "div" from line 252 */; ?>
<div id="employee" data-role="page" class="type-interior">
		<?php /* tag "div" from line 253 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 254 */; ?>
<h1>THIẾT LẬP NHÂN VIÊN</h1>
			<?php 
/* tag "a" from line 255 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php /* tag "a" from line 256 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>

		<?php /* tag "div" from line 259 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 260 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 261 */; ?>
<ul data-role="listview" data-filter="true" data-theme="c" data-inset="true" data-filter-placeholder="Gõ để tìm nhân viên...">
					<?php 
/* tag "li" from line 262 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->Employees)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
?>
<li>
						<?php 
/* tag "a" from line 263 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 264 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Employee/number')); ?>
</span>. <?php /* tag "span" from line 264 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
							<?php /* tag "p" from line 265 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 265 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Employee, 'getPhone')); ?>
</strong></p>
						</a>						
						<?php 
/* tag "a" from line 267 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_2 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				<?php 
/* tag "a" from line 270 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployeeInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_2 ?>
>THÊM NHÂN VIÊN</a>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 272 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 273 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 274 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 275 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 276 */; ?>
<li><?php 
/* tag "a" from line 276 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 277 */; ?>
<li><?php 
/* tag "a" from line 277 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 278 */; ?>
<li><?php 
/* tag "a" from line 278 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 279 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 279 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 280 */; ?>
<li><?php 
/* tag "a" from line 280 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 281 */; ?>
<li><?php 
/* tag "a" from line 281 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 282 */; ?>
<li><?php 
/* tag "a" from line 282 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 283 */; ?>
<li><?php 
/* tag "a" from line 283 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div><!-- /content -->
		<?php /* tag "div" from line 288 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 288 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<!-- SUPPLIER !-->
	<?php /* tag "div" from line 292 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 293 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 294 */; ?>
<h1>THIẾT LẬP NHÀ CUNG CẤP</h1>
			<?php 
/* tag "a" from line 295 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php /* tag "a" from line 296 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>

		<?php /* tag "div" from line 299 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 300 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 301 */; ?>
<ul data-role="listview" data-filter="true" data-theme="c" data-inset="true" data-filter-placeholder="Gõ để tìm nhà cung cấp...">
					<?php 
/* tag "li" from line 302 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier as $ctx->Supplier): ;
?>
<li>
						<?php 
/* tag "a" from line 303 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResource')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 304 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 304 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span>
							<?php /* tag "p" from line 305 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 305 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPhone')); ?>
</strong></p>
						</a>
						<?php 
/* tag "a" from line 307 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLDelLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-theme="c" data-icon="delete"<?php echo $_tmp_1 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
					
				</ul>
				<?php 
/* tag "a" from line 310 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplierInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_1 ?>
>THÊM NHÀ CUNG CẤP</a>
			</div><!--/content-primary -->
			<?php /* tag "div" from line 312 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 313 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 314 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 315 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 316 */; ?>
<li><?php 
/* tag "a" from line 316 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 317 */; ?>
<li><?php 
/* tag "a" from line 317 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 318 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 318 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 319 */; ?>
<li><?php 
/* tag "a" from line 319 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 320 */; ?>
<li><?php 
/* tag "a" from line 320 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingStore')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>KHO HÀNG</a></li>
						<?php /* tag "li" from line 321 */; ?>
<li><?php 
/* tag "a" from line 321 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CHI KHÁC</a></li>
						<?php /* tag "li" from line 322 */; ?>
<li><?php 
/* tag "a" from line 322 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingCategory')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>DANH MỤC</a></li>
						<?php /* tag "li" from line 323 */; ?>
<li><?php 
/* tag "a" from line 323 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnit')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 328 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 328 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\Setting.html (edit that file instead) */; ?>