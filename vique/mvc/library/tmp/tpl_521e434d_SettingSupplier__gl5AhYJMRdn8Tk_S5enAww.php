<?php 
function tpl_521e434d_SettingSupplier__gl5AhYJMRdn8Tk_S5enAww(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
									<?php /* tag "i" from line 20 */; ?>
<i class="icon-th"></i>
									TỔNG SỐ <?php /* tag "span" from line 21 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->ResourceAll, 'count')); ?>
</span>
								</li>
								<?php /* tag "li" from line 23 */; ?>
<li>
									<?php /* tag "i" from line 24 */; ?>
<i class="icon-th"></i>
									CÓ MÃ VẠCH <?php /* tag "span" from line 25 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->ResourceBarcode, 'count')); ?>
</span>
								</li>
								<?php /* tag "li" from line 27 */; ?>
<li>
									<?php /* tag "a" from line 28 */; ?>
<a href="">
										<?php /* tag "i" from line 29 */; ?>
<i class="icon-th"></i>
										CHƯA CÓ MÃ VẠCH <?php /* tag "span" from line 30 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->ResourceAll->count() - $ctx->ResourceBarcode->count()); ?>
</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 36 */; ?>
<div class="span9">
						<?php /* tag "div" from line 37 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 38 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

							<?php /* tag "table" from line 39 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 40 */; ?>
<thead>
									<?php /* tag "tr" from line 41 */; ?>
<tr>
										<?php /* tag "th" from line 42 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 43 */; ?>
<th>TÊN</th>
										<?php /* tag "th" from line 44 */; ?>
<th width="120">SẢN PHẨM</th>
										<?php /* tag "th" from line 45 */; ?>
<th width="32">XÓA</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 48 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 49 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Supplier = new PHPTAL_RepeatController($ctx->SupplierAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Supplier as $ctx->Supplier): ;
?>
<tr>
										<?php /* tag "td" from line 50 */; ?>
<td><?php /* tag "div" from line 50 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Supplier/number')); ?>
</div></td>
										<?php /* tag "td" from line 51 */; ?>
<td><?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "div" from line 51 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getName')); ?>
</div></a></td>
										<?php /* tag "td" from line 52 */; ?>
<td>
											<?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLResource')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Supplier, 'getResourceAll/count')); ?>
</span>
											</a>
										</td>
										<?php /* tag "td" from line 57 */; ?>
<td><?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Supplier, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 57 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 60 */; ?>
<tfoot>
									<?php /* tag "tr" from line 61 */; ?>
<tr>
										<?php /* tag "td" from line 62 */; ?>
<td colspan="4">
											<?php /* tag "a" from line 63 */; ?>
<a class="btn" href="/setting/supplier/ins/load"><?php /* tag "span" from line 63 */; ?>
<span class="icon-plus"></span>Thêm mới</a>
										</td>
									</tr>
								</tfoot>
							</table>							
							<?php 
/* tag "span" from line 68 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 73 */ ;
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