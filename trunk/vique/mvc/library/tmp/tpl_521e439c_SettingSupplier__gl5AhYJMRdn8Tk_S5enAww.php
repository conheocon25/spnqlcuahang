<?php 
function tpl_521e439c_SettingSupplier__gl5AhYJMRdn8Tk_S5enAww(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
						<?php 
/* tag "span" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Menu', $_thistpl) ;
$ctx->popSlots() ;
?>

						<?php /* tag "br" from line 15 */; ?>
<br/>
						<?php /* tag "div" from line 16 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 17 */; ?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 18 */; ?>
<li class="nav-header">THỐNG KÊ MẶT HÀNG</li>
								<?php /* tag "li" from line 19 */; ?>
<li>
									<?php /* tag "a" from line 20 */; ?>
<a href="#">
										<?php /* tag "i" from line 21 */; ?>
<i class="icon-th"></i>
										TỔNG SỐ <?php /* tag "span" from line 22 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->ResourceAll, 'count')); ?>
</span>
									</a>
								</li>
								<?php /* tag "li" from line 25 */; ?>
<li>
									<?php /* tag "a" from line 26 */; ?>
<a href="#">
										<?php /* tag "i" from line 27 */; ?>
<i class="icon-th"></i>
										CÓ MÃ VẠCH <?php /* tag "span" from line 28 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->ResourceBarcode, 'count')); ?>
</span>
									</a>
								</li>
								<?php /* tag "li" from line 31 */; ?>
<li>
									<?php /* tag "a" from line 32 */; ?>
<a href="/setting/barcode">
										<?php /* tag "i" from line 33 */; ?>
<i class="icon-th"></i>
										CHƯA CÓ MÃ VẠCH <?php /* tag "span" from line 34 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->ResourceAll->count() - $ctx->ResourceBarcode->count()); ?>
</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 40 */; ?>
<div class="span9">
						<?php /* tag "div" from line 41 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 42 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 43 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 44 */; ?>
<thead>
									<?php /* tag "tr" from line 45 */; ?>
<tr>
										<?php /* tag "th" from line 46 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 47 */; ?>
<th>TÊN</th>
										<?php /* tag "th" from line 48 */; ?>
<th width="120">SẢN PHẨM</th>
										<?php /* tag "th" from line 49 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 52 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 53 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->SupplierAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<tr>
										<?php /* tag "td" from line 54 */; ?>
<td><?php /* tag "div" from line 54 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</div></td>
										<?php /* tag "td" from line 55 */; ?>
<td><?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "div" from line 55 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</div></a></td>
										<?php /* tag "td" from line 56 */; ?>
<td>
											<?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLResource')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 58 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getResourceAll/count')); ?>
</span>
											</a>
										</td>
										<?php /* tag "td" from line 61 */; ?>
<td><?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 61 */; ?>
<span class="icon-remove"></span></a></td>
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
<td colspan="4">
											<?php /* tag "a" from line 67 */; ?>
<a class="btn" href="/setting/supplier/ins/load"><?php /* tag "span" from line 67 */; ?>
<span class="icon-plus"></span>Thêm mới</a>
										</td>
									</tr>
								</tfoot>
							</table>							
							<?php 
/* tag "span" from line 72 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 77 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SettingSupplier.html (edit that file instead) */; ?>