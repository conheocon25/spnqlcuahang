<?php 
function tpl_5208bb6b_Setting__Nzqezcb3hMaWjW9LDrRWKA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<!-- UNIT !-->
	<?php /* tag "div" from line 10 */; ?>
<div id="unit" data-role="page" class="type-interior">
		<?php /* tag "div" from line 11 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 12 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
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
				<?php /* tag "ul" from line 20 */; ?>
<ul data-role="listview" data-theme="c" data-inset="true">
					<?php 
/* tag "li" from line 21 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Unit = new PHPTAL_RepeatController($ctx->Units)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Unit as $ctx->Unit): ;
?>
<li>
						<?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "strong" from line 23 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->repeat, 'Unit/number')); ?>
</strong>. <?php /* tag "strong" from line 23 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</strong>
						</a>
						<?php 
/* tag "a" from line 25 */ ;
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
/* tag "a" from line 28 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingUnitInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-theme="b" data-role="button" data-icon="plus"<?php echo $_tmp_2 ?>
>THÊM ĐƠN VỊ</a>
			</div>
			<?php /* tag "div" from line 30 */; ?>
<div class="content-secondary">				
				<?php /* tag "div" from line 31 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 32 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 33 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">												
						<?php /* tag "li" from line 34 */; ?>
<li><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 35 */; ?>
<li><?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 36 */; ?>
<li><?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 37 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 37 */ ;
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
		<?php /* tag "div" from line 42 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 42 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
				
	<!-- INFO !-->
	<?php /* tag "div" from line 46 */; ?>
<div id="info" data-role="page" class="type-interior">
		<?php /* tag "div" from line 47 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 48 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 50 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 54 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 55 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 56 */; ?>
<ul data-role="listview" data-inset="true">
					<?php /* tag "li" from line 57 */; ?>
<li>
						<?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfoUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "h3" from line 59 */; ?>
<h3><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getName')); ?>
</h3>
							<?php /* tag "p" from line 60 */; ?>
<p><?php /* tag "strong" from line 60 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getAddress')); ?>
</strong>, <?php /* tag "strong" from line 60 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getEmail')); ?>
</strong></p>
							<?php /* tag "p" from line 61 */; ?>
<p class="ui-li-aside">
								<?php /* tag "strong" from line 62 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getPhone')); ?>
</strong>
							</p>
						</a>
					</li>
					<?php /* tag "li" from line 66 */; ?>
<li>
						<?php /* tag "p" from line 67 */; ?>
<p>
							Sử dụng <?php /* tag "strong" from line 68 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getDateCreatedPrint')); ?>
</strong>,							
							Kích hoạt đến <?php /* tag "strong" from line 69 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/getDateActivityPrint')); ?>
</strong>,
							còn <?php /* tag "strong" from line 70 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->User, 'getApp/remainPercentUpdated')); ?>
</strong> giờ để cập nhật
						</p>						
					</li>
					<?php /* tag "li" from line 73 */; ?>
<li><?php 
/* tag "a" from line 73 */ ;
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
			<?php /* tag "div" from line 76 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 77 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 78 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 79 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 80 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 81 */; ?>
<li><?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 82 */; ?>
<li><?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 83 */; ?>
<li><?php 
/* tag "a" from line 83 */ ;
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
		<?php /* tag "div" from line 88 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 88 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
		
	<!-- POND !-->
	<?php /* tag "div" from line 92 */; ?>
<div id="pond" data-role="page" class="type-interior">
		<?php /* tag "div" from line 93 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 94 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 95 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "img" from line 96 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 100 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 101 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 102 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 103 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Pond = new PHPTAL_RepeatController($ctx->Ponds)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Pond as $ctx->Pond): ;
?>
<li>
						<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getURLSession')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_2 ?>
>
							<?php /* tag "span" from line 105 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Pond/number')); ?>
</span>. [<?php /* tag "span" from line 105 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</span>]
							<?php /* tag "span" from line 106 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Pond, 'getAddress')); ?>
</span>
							<?php /* tag "p" from line 107 */; ?>
<p class="ui-li-count"><?php /* tag "strong" from line 107 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Pond, 'getSessions/count')); ?>
</strong></p>
						</a>						
						<?php 
/* tag "a" from line 109 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Pond, 'getURLDelLoad')))):  ;
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
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPondInsLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_2 ?>
>THÊM AO</a>
			</div>
			<?php /* tag "div" from line 114 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 115 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 116 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 117 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 118 */; ?>
<li><?php 
/* tag "a" from line 118 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 119 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 119 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 120 */; ?>
<li><?php 
/* tag "a" from line 120 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 121 */; ?>
<li><?php 
/* tag "a" from line 121 */ ;
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
		<?php /* tag "div" from line 126 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 126 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
			
	<!-- SUPPLIER !-->
	<?php /* tag "div" from line 130 */; ?>
<div id="supplier" data-role="page" class="type-interior">
		<?php /* tag "div" from line 131 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 132 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 133 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLApp')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "img" from line 134 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 138 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 139 */; ?>
<div class="content-primary">				
				<?php /* tag "ul" from line 140 */; ?>
<ul data-role="listview" data-theme="c" data-inset="true">
					<?php 
/* tag "li" from line 141 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier as $ctx->Supplier): ;
?>
<li>
						<?php 
/* tag "a" from line 142 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResource')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 143 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 143 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span>
							<?php /* tag "p" from line 144 */; ?>
<p class="ui-li-aside"><?php /* tag "strong" from line 144 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getPhone')); ?>
</strong></p>
						</a>
						<?php 
/* tag "a" from line 146 */ ;
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
/* tag "a" from line 149 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplierInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-ajax="false" data-role="button" data-icon="plus" data-theme="b"<?php echo $_tmp_1 ?>
>THÊM NHÀ CUNG CẤP</a>
			</div>
			<?php /* tag "div" from line 151 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 152 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 153 */; ?>
<h3>THIẾT LẬP</h3>
					<?php /* tag "ul" from line 154 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 155 */; ?>
<li><?php 
/* tag "a" from line 155 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingInfo')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>THÔNG TIN</a></li>
						<?php /* tag "li" from line 156 */; ?>
<li><?php 
/* tag "a" from line 156 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->User, 'getApp/getURLSettingPond')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>AO NUÔI</a></li>
						<?php /* tag "li" from line 157 */; ?>
<li data-theme="a"><?php 
/* tag "a" from line 157 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLSettingSupplier')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>NHÀ CUNG CẤP</a></li>
						<?php /* tag "li" from line 158 */; ?>
<li><?php 
/* tag "a" from line 158 */ ;
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
		<?php /* tag "div" from line 163 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 163 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/Setting.html (edit that file instead) */; ?>