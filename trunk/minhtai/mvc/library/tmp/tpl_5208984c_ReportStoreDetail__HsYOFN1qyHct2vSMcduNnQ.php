<?php 
function tpl_5208984c_ReportStoreDetail__HsYOFN1qyHct2vSMcduNnQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php 
/* tag "div" from line 9 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Store = new PHPTAL_RepeatController($ctx->Stores)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Store as $ctx->Store): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div data-role="page" class="type-interior"<?php echo $_tmp_2 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_3 ?>
>LUI</a>
			<?php /* tag "a" from line 13 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 16 */; ?>
<div class="content-primary">				
				<?php 
/* tag "div" from line 17 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Supplier = new PHPTAL_RepeatController($ctx->path($ctx->Store, 'getSuppliers'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Supplier as $ctx->Supplier): ;
?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">					
					<?php /* tag "h3" from line 18 */; ?>
<h3><?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 18 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span></h3>
					<?php /* tag "ul" from line 19 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
						
						<?php 
/* tag "li" from line 21 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Resource = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getResources'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Resource as $ctx->Resource): ;
?>
<li>
							<?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Resource/number')); ?>
</span>. <?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</span>
							: tồn đầu kỳ <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountInit')); ?>
</span> + 
							nhập vào <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountImport')); ?>
</span>, 
							xuất ra <?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountExport')); ?>
</span> = 
							còn lại <?php /* tag "span" from line 26 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountRemain')); ?>
</span>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
	
			</div>
			<?php /* tag "div" from line 31 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 32 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 33 */; ?>
<h3>KHO HÀNG</h3>
					<?php /* tag "ul" from line 34 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 35 */; ?>
<li><?php /* tag "a" from line 35 */; ?>
<a href="/minhtai/report/store/general#general">TỔNG TỒN</a></li>
						<?php 
/* tag "li" from line 36 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Store1 = new PHPTAL_RepeatController($ctx->Stores1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Store1 as $ctx->Store1): ;
if (null !== ($_tmp_3 = ($ctx->Store->getId()==$ctx->Store1->getId()?'a':'c'))):  ;
$_tmp_3 = ' data-theme="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
							<?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Store1, 'getURLStoreDetail')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a<?php echo $_tmp_5 ?>
><?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store1, 'getName')); ?>
</span></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>			
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 43 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 43 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	
	<?php /* tag "div" from line 46 */; ?>
<div id="general" data-role="page" class="type-interior">
		<?php /* tag "div" from line 47 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 48 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_5 ?>
>LUI</a>
			<?php /* tag "a" from line 50 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 52 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 53 */; ?>
<div class="content-primary">								
				<?php /* tag "ul" from line 54 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 55 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Store = new PHPTAL_RepeatController($ctx->Stores)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Store as $ctx->Store): ;
?>
<li>
						<?php /* tag "h3" from line 56 */; ?>
<h3><?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Store/number')); ?>
</span>. <?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span></h3>
						<?php /* tag "span" from line 57 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->Store, 'getValuePrint')); ?>
</span>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					<?php /* tag "li" from line 59 */; ?>
<li>
						<?php /* tag "h3" from line 60 */; ?>
<h3>TỔNG TỒN</h3>
						(<?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->SumStrPrint); ?>
</span>)
						<?php /* tag "span" from line 62 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->SumPrint); ?>
</span>
					</li>
				</ul>
			</div>
			<?php /* tag "div" from line 66 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 67 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 68 */; ?>
<h3>KHO HÀNG</h3>
					<?php /* tag "ul" from line 69 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 70 */; ?>
<li data-theme="a"><?php /* tag "a" from line 70 */; ?>
<a href="/minhtai/report/store/general#general">TỔNG TỒN</a></li>
						<?php 
/* tag "li" from line 71 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Store1 = new PHPTAL_RepeatController($ctx->Stores1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Store1 as $ctx->Store1): ;
?>
<li>
							<?php 
/* tag "a" from line 72 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store1, 'getURLStoreDetail')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 72 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store1, 'getName')); ?>
</span></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>
				</div>
			</div>
		</div>
		<?php /* tag "div" from line 78 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 78 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/minhtai/mvc/templates/ReportStoreDetail.html (edit that file instead) */; ?>