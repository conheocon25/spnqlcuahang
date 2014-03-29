<?php 
function tpl_5208bb69_ImportPondOrderCallL__ARMlQPWGosp5yEYPPxhdtg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="/mvc/templates/script/user/ImportPondOrderCallLoad.js"></script>
	</head>
<?php /* tag "body" from line 8 */; ?>
<body>
	<?php 
/* tag "div" from line 9 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->Suppliers)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getIdPrint')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->URLCallExe))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div data-role="page" class="supplier type-interior"<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>
		<?php /* tag "div" from line 10 */; ?>
<div data-role="header" data-theme="d">
			<?php /* tag "div" from line 11 */; ?>
<div align="center">
				<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_4 = ($ctx->URLBack))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-ajax="false"<?php echo $_tmp_4 ?>
>
					<?php /* tag "img" from line 13 */; ?>
<img border="0" width="100%" src="/data/images/app/banner.jpg"/>
				</a>
			</div>
		</div>
		<?php /* tag "div" from line 17 */; ?>
<div data-role="content">
			<?php /* tag "div" from line 18 */; ?>
<div class="content-primary">
				<?php /* tag "ul" from line 19 */; ?>
<ul data-role="listview" data-inset="true">
					<?php /* tag "li" from line 20 */; ?>
<li data-role="list-divider"><?php echo phptal_escape('NHẬP HÀNG VỀ CHO '.$ctx->Pond->getName()); ?>
</li>
					<?php 
/* tag "li" from line 21 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Resource = new PHPTAL_RepeatController($ctx->path($ctx->Supplier, 'getResources'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Resource as $ctx->Resource): ;
?>
<li>
						<?php 
/* tag "a" from line 22 */ ;
if (null !== ($_tmp_5 = ('#'))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_6 = ' alt="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<a class="Plus" data-ajax="true"<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
>
							<?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Resource/number')); ?>
</span>. <?php /* tag "span" from line 23 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</span>
							 (<?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit/getName')); ?>
</span>)
							<?php /* tag "p" from line 25 */; ?>
<p class="ui-li-aside"><?php echo '0'; ?>
</p>
						</a>
						<?php 
/* tag "a" from line 27 */ ;
if (null !== ($_tmp_5 = ('#'))):  ;
$_tmp_5 = ' href="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_6 = ' alt="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<a class="Minus" data-theme="c" data-icon="minus"<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
></a>
					</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</ul>
			</div>
			<?php /* tag "div" from line 31 */; ?>
<div class="content-secondary">
				<?php /* tag "div" from line 32 */; ?>
<div data-role="collapsible" data-collapsed="true" data-theme="b" data-content-theme="d">
					<?php /* tag "h3" from line 33 */; ?>
<h3>NHÀ CUNG CẤP</h3>
					<?php /* tag "ul" from line 34 */; ?>
<ul data-role="listview" data-theme="c">
						<?php 
/* tag "li" from line 35 */ ;
$_tmp_5 = $ctx->repeat ;
$_tmp_5->Supplier1 = new PHPTAL_RepeatController($ctx->Suppliers1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_5->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_6 = ($ctx->Supplier1->getId()==$ctx->Supplier->getId() ? 'a' : 'c'))):  ;
$_tmp_6 = ' data-theme="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<li<?php echo $_tmp_6 ?>
>
							<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Supplier1, 'getURLCall')))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-transition="none"<?php echo $_tmp_4 ?>
>
								<?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier1/number')); ?>
</span>. <?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier1, 'getName')); ?>
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
		<?php /* tag "div" from line 44 */; ?>
<div data-role="footer" class="footer-docs" data-theme="c"><?php /* tag "p" from line 44 */; ?>
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

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/ImportPondOrderCallLoad.html (edit that file instead) */; ?>