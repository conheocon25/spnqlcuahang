<?php 
function tpl_5208fa8c_Paid__BvstGABToeUmx460wHyHyQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSelling')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁN HÀNG</a></li>
						<?php /* tag "li" from line 32 */; ?>
<li><?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLImport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>NHẬP HÀNG</a></li>
						<?php /* tag "li" from line 33 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>CHI TRẢ</a></li>
						<?php /* tag "li" from line 34 */; ?>
<li><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-transition="none"<?php echo $_tmp_1 ?>
>BÁO CÁO</a></li>
						<?php /* tag "li" from line 35 */; ?>
<li><?php 
/* tag "a" from line 35 */ ;
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
		<?php /* tag "div" from line 40 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 40 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 43 */; ?>
<div id="employee" data-role="page" class="type-interior">
		<?php /* tag "div" from line 44 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 45 */; ?>
<h1>CHI TRẢ NHÂN VIÊN</h1>
			<?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 49 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 50 */; ?>
<div class="content-primary">				
				
				<?php /* tag "ul" from line 52 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm nhân viên">
					<?php 
/* tag "li" from line 53 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Employee = new PHPTAL_RepeatController($ctx->Employees)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Employee as $ctx->Employee): ;
?>
<li>
						<?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Employee, 'getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Employee/number')); ?>
</span>. <?php /* tag "span" from line 55 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div>
			<?php /* tag "div" from line 61 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 62 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 63 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 64 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 65 */; ?>
<li><?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 66 */; ?>
<li><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 67 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>3. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 68 */; ?>
<li><?php 
/* tag "a" from line 68 */ ;
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
		<?php /* tag "div" from line 73 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 73 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 76 */; ?>
<div id="other" data-role="page" class="type-interior">
		<?php /* tag "div" from line 77 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 78 */; ?>
<h1>CHI TRẢ KHÁC</h1>
			<?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingTerm')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 82 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 83 */; ?>
<div class="content-primary">				
				
				<?php /* tag "ul" from line 85 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm chi phí">
					<?php 
/* tag "li" from line 86 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Term = new PHPTAL_RepeatController($ctx->Terms)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Term as $ctx->Term): ;
?>
<li>
						<?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Term, 'getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 88 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Term/number')); ?>
</span>. <?php /* tag "span" from line 88 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Term, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div><!--/content-primary -->
			<?php /* tag "div" from line 94 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 95 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 96 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 97 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 98 */; ?>
<li><?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 99 */; ?>
<li><?php 
/* tag "a" from line 99 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 100 */; ?>
<li><?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. NHÂN VIÊN</a></li>						
						<?php /* tag "li" from line 101 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 101 */ ;
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
		<?php /* tag "div" from line 106 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 106 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 109 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 110 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 111 */; ?>
<h1>CHI TRẢ NHÀ CUNG CẤP</h1>
			<?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_1 ?>
>LUI</a>
			<?php 
/* tag "a" from line 113 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_2 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 115 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 116 */; ?>
<div class="content-primary">
				
				<?php /* tag "ul" from line 118 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm nhà cung cấp">
					<?php 
/* tag "li" from line 119 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<li>
						<?php 
/* tag "a" from line 120 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 121 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 121 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div>
			<?php /* tag "div" from line 127 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 128 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 129 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 130 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 131 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 131 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 132 */; ?>
<li><?php 
/* tag "a" from line 132 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 133 */; ?>
<li><?php 
/* tag "a" from line 133 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>3. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 134 */; ?>
<li><?php 
/* tag "a" from line 134 */ ;
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
		<?php /* tag "div" from line 139 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 139 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 142 */; ?>
<div id="customer" data-role="page" class="type-interior">
		<?php /* tag "div" from line 143 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 144 */; ?>
<h1>KHÁCH HÀNG TRẢ</h1>
			<?php 
/* tag "a" from line 145 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaid')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php 
/* tag "a" from line 146 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingCustomer')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-icon="gear" data-transition="none" data-ajax="false"<?php echo $_tmp_1 ?>
>THIẾT LẬP</a>
		</div>
		<?php /* tag "div" from line 148 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 149 */; ?>
<div class="content-primary">
				
				<?php /* tag "ul" from line 151 */; ?>
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="d" data-filter="true" data-filter-placeholder="Gõ tìm khách hàng">
					<?php 
/* tag "li" from line 152 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Customer = new PHPTAL_RepeatController($ctx->Customers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Customer as $ctx->Customer): ;
?>
<li>
						<?php 
/* tag "a" from line 153 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLPaid')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 154 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Customer/number')); ?>
</span>. <?php /* tag "span" from line 154 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</span>
						</a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
				
			</div>
			<?php /* tag "div" from line 160 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 161 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 162 */; ?>
<h3>CHI TRẢ</h3>
					<?php /* tag "ul" from line 163 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 164 */; ?>
<li><?php 
/* tag "a" from line 164 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>1. NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 165 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 165 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLPaidCustomer')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_2 ?>
>2. KHÁCH HÀNG</a></li>
						<?php /* tag "li" from line 166 */; ?>
<li><?php 
/* tag "a" from line 166 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLPaidEmployee')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_1 ?>
>3. NHÂN VIÊN</a></li>
						<?php /* tag "li" from line 167 */; ?>
<li><?php 
/* tag "a" from line 167 */ ;
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
		<?php /* tag "div" from line 172 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 172 */; ?>
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