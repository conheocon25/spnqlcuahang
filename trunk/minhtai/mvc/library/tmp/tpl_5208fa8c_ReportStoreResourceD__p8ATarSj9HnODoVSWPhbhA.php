<?php 
function tpl_5208fa8c_ReportStoreResourceD__p8ATarSj9HnODoVSWPhbhA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store1, 'getId')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div data-role="page" class="type-interior"<?php echo $_tmp_1 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 11 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>
			<?php /* tag "a" from line 13 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>			
		</div>
		<?php /* tag "div" from line 15 */; ?>
<div data-role="content">
				
			<?php /* tag "div" from line 17 */; ?>
<div class="content-primary">
				<?php /* tag "div" from line 18 */; ?>
<div data-role="header" data-theme="f">					
					<?php /* tag "h4" from line 19 */; ?>
<h4>TỒN KHO [<?php /* tag "b" from line 19 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Store1, 'getName')); ?>
</b>]</h4>						
					<?php 
/* tag "a" from line 20 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_2 ?>
>LUI</a>					
					<?php 
/* tag "a" from line 21 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Store1, 'getURLStoreDetailPrint')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a rel="external" target="blank" data-icon="gear"<?php echo $_tmp_2 ?>
>IN</a>						
				</div>				
				<?php 
/* tag "div" from line 23 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Supplier = new PHPTAL_RepeatController($ctx->path($ctx->Store1, 'getSuppliers'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Supplier as $ctx->Supplier): ;
?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">					
					<?php /* tag "h3" from line 24 */; ?>
<h3><?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</span>. <?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</span></h3>
					<?php /* tag "ul" from line 25 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
						
						<?php 
/* tag "li" from line 27 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Resource = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getResources'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Resource as $ctx->Resource): ;
?>
<li>
							<?php /* tag "span" from line 28 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Resource/number')); ?>
</span>. <?php /* tag "span" from line 28 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</span>
							: tồn đầu kỳ <?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountInit')); ?>
</span> + 
							nhập vào <?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountImport')); ?>
</span>, 
							xuất ra <?php /* tag "span" from line 31 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getCountExport')); ?>
</span> = 
							còn lại <?php /* tag "span" from line 32 */; ?>
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
			<?php /* tag "div" from line 37 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 38 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 39 */; ?>
<h3>KHO HÀNG</h3>
					<?php /* tag "ul" from line 40 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 41 */; ?>
<li><?php /* tag "a" from line 41 */; ?>
<a href="/minhtai/report/store/general#general">TỔNG TỒN</a></li>
						<?php 
/* tag "li" from line 42 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Store = new PHPTAL_RepeatController($ctx->Stores1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Store as $ctx->Store): ;
if (null !== ($_tmp_2 = ($ctx->Store->getId()==$ctx->Store1->getId()?'a':'c'))):  ;
$_tmp_2 = ' data-theme="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
							<?php 
/* tag "a" from line 43 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Store, 'getURLStoreDetail')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a<?php echo $_tmp_4 ?>
><?php /* tag "span" from line 43 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span></a>
						</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</ul>			
				</div>				
			</div>
		</div>
		<?php /* tag "div" from line 49 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 49 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
	
	<?php /* tag "div" from line 52 */; ?>
<div id="general" data-role="page" class="type-interior">
		<?php /* tag "div" from line 53 */; ?>
<div data-role="header" data-position="fixed" data-theme="f">
			<?php /* tag "h1" from line 54 */; ?>
<h1><?php echo phptal_escape($ctx->Title); ?>
</h1>
			<?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->User, 'getApp/getURLReport')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-icon="back" data-ajax="false"<?php echo $_tmp_4 ?>
>LUI</a>
			<?php /* tag "a" from line 56 */; ?>
<a href="/signout/load" data-icon="delete" data-transition="fade">THOÁT</a>
		</div>
		<?php /* tag "div" from line 58 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 59 */; ?>
<div class="content-primary">								
				<?php /* tag "ul" from line 60 */; ?>
<ul data-role="listview" data-inset="true">
					<?php 
/* tag "li" from line 61 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Store = new PHPTAL_RepeatController($ctx->Stores)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Store as $ctx->Store): ;
?>
<li>
						<?php /* tag "h3" from line 62 */; ?>
<h3><?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Store/number')); ?>
</span>. <?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Store, 'getName')); ?>
</span></h3>
						<?php /* tag "span" from line 63 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->path($ctx->Store, 'getValuePrint')); ?>
</span>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					<?php /* tag "li" from line 65 */; ?>
<li>
						<?php /* tag "h3" from line 66 */; ?>
<h3>TỔNG TỒN</h3>
						(<?php /* tag "span" from line 67 */; ?>
<span><?php echo phptal_escape($ctx->SumStrPrint); ?>
</span>)
						<?php /* tag "span" from line 68 */; ?>
<span class="ui-li-aside"><?php echo phptal_escape($ctx->SumPrint); ?>
</span>
					</li>
				</ul>
			</div>
			<?php /* tag "div" from line 72 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 73 */; ?>
<div data-role="collapsible" data-collapsed="false" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 74 */; ?>
<h3>KHO HÀNG</h3>
					<?php /* tag "ul" from line 75 */; ?>
<ul data-role="listview" data-theme="c" data-dividertheme="d">
						<?php /* tag "li" from line 76 */; ?>
<li data-theme="a"><?php /* tag "a" from line 76 */; ?>
<a href="/minhtai/report/store/general#general">TỔNG TỒN</a></li>
						<?php 
/* tag "li" from line 77 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Store1 = new PHPTAL_RepeatController($ctx->Stores1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Store1 as $ctx->Store1): ;
?>
<li>
							<?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Store1, 'getURLStoreDetail')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "span" from line 78 */; ?>
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
		<?php /* tag "div" from line 84 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 84 */; ?>
<p>&copy; 2012 SPN Co,ltd.</p></div>
	</div>
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\ReportStoreResourceDetail.html (edit that file instead) */; ?>