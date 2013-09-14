<?php 
function tpl_521ad0a6_Selling__XwcsTK8AeiLz38hbyspaFQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/$(document).ready(function(){$("#Barcode").focus();});/*]]>*/
		</script>
	</head>
	<?php /* tag "body" from line 11 */; ?>
<body>
		<?php /* tag "div" from line 12 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 15 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 16 */; ?>
<div class="span3">						
						<?php /* tag "div" from line 17 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 18 */; ?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 19 */; ?>
<li>
									<?php 
/* tag "form" from line 20 */ ;
if (null !== ($_tmp_1 = ('/selling/barcode'))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form method="post"<?php echo $_tmp_1 ?>
>
										<?php /* tag "div" from line 21 */; ?>
<div class="control-group">
											<?php /* tag "label" from line 22 */; ?>
<label class="control-label" for="Barcode">Quét mã vạch</label>
											<?php /* tag "div" from line 23 */; ?>
<div class="controls">
												<?php /* tag "input" from line 24 */; ?>
<input id="Barcode" name="Barcode" type="text"/>
											</div>
										</div>
									</form>
								</li>
								<?php 
/* tag "li" from line 29 */ ;
if ($ctx->Order):  ;
?>
<li>
									<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 31 */; ?>
<i class="icon-print"></i>
										<?php /* tag "span" from line 32 */; ?>
<span>In phiếu</span>
									</a>
									<?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ('/selling/checkout'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 35 */; ?>
<i class="icon-star"></i>
										<?php /* tag "span" from line 36 */; ?>
<span>Tính tiền</span>
									</a>
								</li><?php endif; ?>

								<?php 
/* tag "li" from line 39 */ ;
if (!($ctx->Order)):  ;
?>
<li>
									<?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_1 = ('/selling/checkin'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 41 */; ?>
<i class="icon-th"></i>
										<?php /* tag "span" from line 42 */; ?>
<span>Nhập phiếu</span>
									</a>
								</li><?php endif; ?>

								<?php /* tag "li" from line 45 */; ?>
<li>
									<?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ('/selling/call/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 47 */; ?>
<i class="icon-th"></i>
										<?php /* tag "span" from line 48 */; ?>
<span>Chọn món ...</span>
									</a>
								</li>
								<?php /* tag "li" from line 51 */; ?>
<li>
									<?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ('/selling/log'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 53 */; ?>
<i class="icon-edit"></i>
										<?php /* tag "span" from line 54 */; ?>
<span>Nhật ký</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 60 */; ?>
<div class="span9">												
						<?php /* tag "div" from line 61 */; ?>
<div class="content">
							<?php 
/* tag "span" from line 62 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>
							
							<?php 
/* tag "table" from line 63 */ ;
if ($ctx->Order):  ;
?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 64 */; ?>
<thead>
									<?php /* tag "tr" from line 65 */; ?>
<tr>
										<?php /* tag "th" from line 66 */; ?>
<th width="30">
											<?php /* tag "div" from line 67 */; ?>
<div class="text-center">
												STT
											</div>
										</th>
										<?php /* tag "th" from line 71 */; ?>
<th>TÊN HÀNG</th>
										<?php /* tag "th" from line 72 */; ?>
<th width="120">
											<?php /* tag "div" from line 73 */; ?>
<div class="text-right">
												SỐ LƯỢNG
											</div>
										</th>
										<?php /* tag "th" from line 77 */; ?>
<th width="120">
											<?php /* tag "div" from line 78 */; ?>
<div class="text-right">
												ĐƠN GIÁ
											</div>
										</th>
										<?php /* tag "th" from line 82 */; ?>
<th width="140">
											<?php /* tag "div" from line 83 */; ?>
<div class="text-right">
												THÀNH TIỀN
											</div>
										</th>
										<?php /* tag "th" from line 87 */; ?>
<th width="30"></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 90 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 91 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 92 */; ?>
<td><?php /* tag "div" from line 92 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 93 */; ?>
<td>
											<?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getURLUpdLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
												<?php /* tag "div" from line 95 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 98 */; ?>
<td><?php /* tag "div" from line 98 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</div></td>
										<?php /* tag "td" from line 99 */; ?>
<td><?php /* tag "div" from line 99 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 100 */; ?>
<td><?php /* tag "div" from line 100 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 101 */; ?>
<td><?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getURLDelLoad')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="btn"<?php echo $_tmp_2 ?>
><?php /* tag "span" from line 101 */; ?>
<span class="icon-remove"></span></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
								<?php /* tag "tfoot" from line 104 */; ?>
<tfoot>
									<?php /* tag "tr" from line 105 */; ?>
<tr>
										<?php /* tag "td" from line 106 */; ?>
<td colspan="4"><?php /* tag "div" from line 106 */; ?>
<div class="text-right">TỔNG CỘNG</div></td>
										<?php /* tag "td" from line 107 */; ?>
<td><?php /* tag "div" from line 107 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 108 */; ?>
<td></td>
									</tr>
								</tfoot>
							</table><?php endif; ?>
							
						</div>						
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 116 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\Selling.html (edit that file instead) */; ?>