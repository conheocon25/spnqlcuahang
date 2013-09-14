<?php 
function tpl_521ad56d_ImportSupplier__m5lqUCmUAOsYwxTp7ln9Dw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php /* tag "div" from line 9 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 11 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 12 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 13 */; ?>
<div class="span3">
						<?php /* tag "div" from line 14 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 15 */; ?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 16 */; ?>
<li class="nav-header">NHÀ CUNG CẤP</li>
								<?php 
/* tag "li" from line 17 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier1 = new PHPTAL_RepeatController($ctx->SupplierAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier1 as $ctx->Supplier1): ;
if (null !== ($_tmp_2 = ($ctx->Supplier1->getId()==$ctx->Supplier->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
									<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Supplier1, 'getURLImport')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
										<?php /* tag "i" from line 19 */; ?>
<i class="icon-th-list"></i>
										<?php /* tag "span" from line 20 */; ?>
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
					<?php /* tag "div" from line 26 */; ?>
<div class="span9">												
						<?php /* tag "div" from line 27 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 28 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 29 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 30 */; ?>
<thead>
									<?php /* tag "tr" from line 31 */; ?>
<tr>
										<?php /* tag "th" from line 32 */; ?>
<th>STT</th>
										<?php /* tag "th" from line 33 */; ?>
<th>NGÀY</th>
										<?php /* tag "th" from line 34 */; ?>
<th>
											<?php /* tag "div" from line 35 */; ?>
<div class="text-right">
												GIÁ TRỊ
											</div>
										</th>
										<?php /* tag "th" from line 39 */; ?>
<th>XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 42 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 43 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Order = new PHPTAL_RepeatController($ctx->OrderAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Order as $ctx->Order): ;
?>
<tr>
										<?php /* tag "td" from line 44 */; ?>
<td width="32" align="center">
											<?php /* tag "div" from line 45 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</div>
										</td>
										<?php /* tag "td" from line 47 */; ?>
<td>
											<?php 
/* tag "a" from line 48 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Order, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 49 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 52 */; ?>
<td>
											<?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getURLDetail')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
												<?php /* tag "div" from line 54 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 57 */; ?>
<td width="32">
											<?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Order, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 59 */; ?>
<span class="icon-remove"></span>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 64 */; ?>
<tfoot>
									<?php /* tag "tr" from line 65 */; ?>
<tr>
										<?php /* tag "td" from line 66 */; ?>
<td colspan="4" align="center">
											<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLImportInsLoad')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_1 ?>
>
												<?php /* tag "span" from line 68 */; ?>
<span class="icon-plus"></span>Thêm mới
											</a>
										</td>
									</tr>
								</tfoot>
							</table>							
							<?php 
/* tag "span" from line 74 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 79 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\ImportSupplier.html (edit that file instead) */; ?>