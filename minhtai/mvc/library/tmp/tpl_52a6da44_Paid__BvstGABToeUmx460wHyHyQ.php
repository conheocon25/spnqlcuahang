<?php 
function tpl_52a6da44_Paid__BvstGABToeUmx460wHyHyQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/Paid.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php /* tag "div" from line 9 */; ?>
<div id="paid" data-role="page" class="type-interior">
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1>MODULE CHI TRẢ</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="home" data-ajax="false"<?php echo $_tmp_1 ?>
>TRANG CHỦ</a>
			<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 16 */; ?>
<div class="content-primary">				
				<?php /* tag "div" from line 17 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 18 */; ?>
<h3>LOẠI CHI TRẢ</h3>
					<?php /* tag "ul" from line 19 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 20 */; ?>
<li><?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 21 */; ?>
<li><?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>2. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 22 */; ?>
<li><?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>3. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 23 */; ?>
<li><?php 
/* tag "a" from line 23 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidOther')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>4. CHI KHÁC</a></li>
					</ul>
				</div>
			</div>
			<?php /* tag "div" from line 27 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 28 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 29 */; ?>
<h3>MODULE</h3>
					<?php /* tag "ul" from line 30 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 31 */; ?>
<li><?php 
/* tag "a" from line 31 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG - THUỐC</a></li>
						<?php /* tag "li" from line 32 */; ?>
<li><?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG - THỨC ĂN</a></li>
						<?php /* tag "li" from line 33 */; ?>
<li><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 34 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>CHI TRẢ</a></li>
						<?php /* tag "li" from line 35 */; ?>
<li><?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁO CÁO - THUỐC</a></li>
						<?php /* tag "li" from line 36 */; ?>
<li><?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport2')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁO CÁO - THỨC ĂN</a></li>
						<?php /* tag "li" from line 37 */; ?>
<li><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSetting')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 42 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 42 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 45 */; ?>
<div id="employee" data-role="page" class="type-interior">
		<?php /* tag "div" from line 46 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 47 */; ?>
<h1>CHI TRẢ NHÂN VIÊN</h1>
			<?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 51 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 52 */; ?>
<div class="content-primary">				
				
				<?php /* tag "ul" from line 54 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm nhân viên">
					<?php 
/* tag "li" from line 55 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->Employees)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
?>
<li>
						<?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Employee/number')); ?>
</span>. <?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div>
			<?php /* tag "div" from line 63 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 64 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 65 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 66 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 67 */; ?>
<li><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 68 */; ?>
<li><?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 69 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>3. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 70 */; ?>
<li><?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidOther')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>4. CHI KHÁC</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 75 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 75 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 78 */; ?>
<div id="other" data-role="page" class="type-interior">
		<?php /* tag "div" from line 79 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 80 */; ?>
<h1>CHI TRẢ KHÁC</h1>
			<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 84 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 85 */; ?>
<div class="content-primary">				
				
				<?php /* tag "ul" from line 87 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm chi phí">
					<?php 
/* tag "li" from line 88 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Term = new PHPTAL_RepeatController($ctx->Terms)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Term as $ctx->Term): ;
?>
<li>
						<?php 
/* tag "a" from line 89 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Term, 'getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 90 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Term/number')); ?>
</span>. <?php /* tag "span" from line 90 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Term, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div><!--/content-primary -->
			<?php /* tag "div" from line 96 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 97 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 98 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 99 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 100 */; ?>
<li><?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 101 */; ?>
<li><?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 102 */; ?>
<li><?php 
/* tag "a" from line 102 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. NHÂN VIÊN</a></li>						
						<?php /* tag "li" from line 103 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 103 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidOther')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>4. CHI KHÁC</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 108 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 108 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 111 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 112 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 113 */; ?>
<h1>CHI TRẢ NHÀ CUNG CẤP</h1>
			<?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php 
/* tag "a" from line 115 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 117 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 118 */; ?>
<div class="content-primary">
				
				<?php /* tag "ul" from line 120 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm nhà cung cấp">
					<?php 
/* tag "li" from line 121 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<li>
						<?php 
/* tag "a" from line 122 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 123 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 123 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div>
			<?php /* tag "div" from line 129 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 130 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 131 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 132 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 133 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 133 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 134 */; ?>
<li><?php 
/* tag "a" from line 134 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 135 */; ?>
<li><?php 
/* tag "a" from line 135 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>3. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 136 */; ?>
<li><?php 
/* tag "a" from line 136 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidOther')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>4. CHI KHÁC</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 141 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 141 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 144 */; ?>
<div id="customer" data-role="page" class="type-interior">
		<?php /* tag "div" from line 145 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 146 */; ?>
<h1>KHÁCH HÀNG TRẢ</h1>
			<?php 
/* tag "a" from line 147 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php 
/* tag "a" from line 148 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 150 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 151 */; ?>
<div class="content-primary">
				
				<?php /* tag "ul" from line 153 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm khách hàng">
					<?php 
/* tag "li" from line 154 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Customer as $ctx->Customer): ;
?>
<li>
						<?php 
/* tag "a" from line 155 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 156 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Customer/number')); ?>
</span>. <?php /* tag "span" from line 156 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div>
			<?php /* tag "div" from line 162 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 163 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 164 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 165 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 166 */; ?>
<li><?php 
/* tag "a" from line 166 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 167 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 167 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 168 */; ?>
<li><?php 
/* tag "a" from line 168 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 169 */; ?>
<li><?php 
/* tag "a" from line 169 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidOther')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>4. CHI KHÁC</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 174 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 174 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_MinhTai\mvc\templates\Paid.html (edit that file instead) */; ?>