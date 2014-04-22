<?php 
function tpl_52d7563f_ExportCustomerOrder__F9GrB7495g2jqaLGjn0Wkg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "div" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "div" from line 12 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 15 */; ?>
<div class="row">
				<?php /* tag "div" from line 16 */; ?>
<div class="col-3">
					<?php /* tag "div" from line 17 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 18 */; ?>
<div class="controls">
							<?php /* tag "input" from line 19 */; ?>
<input id="SearchName" type="text" placeholder="Nhập tìm mặt hàng" style="width:80%;"/>
							<?php /* tag "a" from line 20 */; ?>
<a class="btn RemoveCourseSearch">
								<?php /* tag "i" from line 21 */; ?>
<i class="glyphicons-circle_remove"></i>
							</a>							
						</div>
					</div>
					<?php /* tag "div" from line 25 */; ?>
<div id="ResourceF"></div>
				</div>
				<?php 
/* tag "div" from line 27 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdCustomer" class="col-9"<?php echo $_tmp_1 ?>
>
					<?php /* tag "div" from line 28 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 29 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "h5" from line 30 */; ?>
<h5>ĐƠN HÀNG</h5>
							<?php /* tag "table" from line 31 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 32 */; ?>
<thead>
									<?php /* tag "tr" from line 33 */; ?>
<tr>
										<?php /* tag "th" from line 34 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 35 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 36 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 37 */; ?>
<th class="left" width="120">ĐƠN VỊ</th>
										<?php /* tag "th" from line 38 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 39 */; ?>
<th class="right" width="120">T.TIỀN</th>
										<?php /* tag "th" from line 40 */; ?>
<th width="40"></th><?php /* tag "th" from line 40 */; ?>
<th width="40"></th><?php /* tag "th" from line 40 */; ?>
<th width="40"></th>
										
									</tr>
								</thead>
								<?php /* tag "tbody" from line 44 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 45 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 46 */; ?>
<td class="center"><?php /* tag "div" from line 46 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 47 */; ?>
<td><?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getResource/getName')))):  ;
$_tmp_4 = ' data-name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_5 = ' data-idresource="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_6 = ' data-count="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_7 = ' data-price="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</a></td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "div" from line 48 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 49 */; ?>
<td><?php /* tag "div" from line 49 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 50 */; ?>
<td><?php /* tag "div" from line 50 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 51 */; ?>
<td><?php /* tag "div" from line 51 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 52 */; ?>
<td><?php 
/* tag "span" from line 52 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<span href="#DialogDel" data-toggle="modal" class="remove-item glyphicons-remove_2"<?php echo $_tmp_3 ?>
></span></td>
										<?php /* tag "td" from line 53 */; ?>
<td><?php 
/* tag "span" from line 53 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_4 = ' data-idresource="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_5 = ' data-count="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<span class="discount 	glyphicons-download_alt"<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
></span></td>
										<?php /* tag "td" from line 54 */; ?>
<td><?php 
/* tag "span" from line 54 */ ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_6 = ' data-id="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<span class="extra glyphicons-circle_plus"<?php echo $_tmp_6 ?>
></span></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 56 */; ?>
<tr>
										<?php /* tag "td" from line 57 */; ?>
<td colspan="5"></td>
										<?php /* tag "td" from line 58 */; ?>
<td><?php /* tag "div" from line 58 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue1Print')); ?>
</div></td>
										<?php /* tag "td" from line 59 */; ?>
<td></td><?php /* tag "td" from line 59 */; ?>
<td></td><?php /* tag "td" from line 59 */; ?>
<td></td>
									</tr>
								</tbody>
							</table>
							<?php /* tag "h5" from line 63 */; ?>
<h5>GIẢM GIÁ</h5>
							<?php /* tag "table" from line 64 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 65 */; ?>
<thead>
									<?php /* tag "tr" from line 66 */; ?>
<tr>
										<?php /* tag "th" from line 67 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 68 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 69 */; ?>
<th class="right" width="80">SỐ LƯỢNG</th>
										<?php /* tag "th" from line 70 */; ?>
<th class="left" width="120">ĐƠN VỊ</th>
										<?php /* tag "th" from line 71 */; ?>
<th class="right" width="120">ĐƠN GIÁ</th>
										<?php /* tag "th" from line 72 */; ?>
<th class="right" width="120">T.TIỀN</th>
										<?php /* tag "th" from line 73 */; ?>
<th width="40"></th><?php /* tag "th" from line 73 */; ?>
<th width="40"></th><?php /* tag "th" from line 73 */; ?>
<th width="40"></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 76 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 77 */ ;
$_tmp_7 = $ctx->repeat ;
$_tmp_7->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAllExtra'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_7->Detail as $ctx->Detail): ;
?>
<tr>
										<?php /* tag "td" from line 78 */; ?>
<td class="center"><?php /* tag "div" from line 78 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
										<?php /* tag "td" from line 79 */; ?>
<td><?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getResource/getName')))):  ;
$_tmp_4 = ' data-name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getResource/getId')))):  ;
$_tmp_5 = ' data-idresource="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_6 = ' data-count="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_2 = ' data-price="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-discount-item" href="#DialogDiscountEdit" data-toggle="modal"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</a></td>
										<?php /* tag "td" from line 80 */; ?>
<td><?php /* tag "div" from line 80 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
										<?php /* tag "td" from line 81 */; ?>
<td><?php /* tag "div" from line 81 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</div></td>
										<?php /* tag "td" from line 82 */; ?>
<td><?php /* tag "div" from line 82 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
										<?php /* tag "td" from line 83 */; ?>
<td><?php /* tag "div" from line 83 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 84 */; ?>
<td><?php 
/* tag "span" from line 84 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<span href="#DialogDel" data-toggle="modal" class="discount remove-discount-item glyphicons-remove_2 text-center"<?php echo $_tmp_3 ?>
></span></td>
										<?php /* tag "td" from line 85 */; ?>
<td></td><?php /* tag "td" from line 85 */; ?>
<td></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 87 */; ?>
<tr>
										<?php /* tag "td" from line 88 */; ?>
<td colspan="5"></td>
										<?php /* tag "td" from line 89 */; ?>
<td><?php /* tag "div" from line 89 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue2Print')); ?>
</div></td>
										<?php /* tag "td" from line 90 */; ?>
<td></td><?php /* tag "td" from line 90 */; ?>
<td></td><?php /* tag "td" from line 90 */; ?>
<td></td>
									</tr>
								</tbody>
							</table>
							<?php /* tag "h5" from line 94 */; ?>
<h5>TRẢ TRƯỚC</h5>
							<?php /* tag "table" from line 95 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 96 */; ?>
<thead>
									<?php /* tag "tr" from line 97 */; ?>
<tr>
										<?php /* tag "th" from line 98 */; ?>
<th width="40">STT</th>
										<?php /* tag "th" from line 99 */; ?>
<th class="left">NGÀY</th>										
										<?php /* tag "th" from line 100 */; ?>
<th class="left">DIỄN GIẢI</th>										
										<?php /* tag "th" from line 101 */; ?>
<th class="right" width="120">T.TIỀN</th>
										<?php /* tag "th" from line 102 */; ?>
<th width="40"></th><?php /* tag "th" from line 102 */; ?>
<th width="40"></th><?php /* tag "th" from line 102 */; ?>
<th width="40"></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 105 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 106 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Paid = new PHPTAL_RepeatController($ctx->PCAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Paid as $ctx->Paid): ;
?>
<tr>
										<?php /* tag "td" from line 107 */; ?>
<td class="center"><?php /* tag "div" from line 107 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->repeat, 'Paid/number')); ?>
</div></td>
										<?php /* tag "td" from line 108 */; ?>
<td><?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Paid, 'getId')))):  ;
$_tmp_5 = ' data-id="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Paid, 'getDate')))):  ;
$_tmp_6 = ' data-date="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Paid, 'getNote')))):  ;
$_tmp_2 = ' data-note="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Paid, 'getValue')))):  ;
$_tmp_3 = ' data-value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="update-paid-item" href="#DialogPaidEdit" data-toggle="modal"<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</a></td>
										<?php /* tag "td" from line 109 */; ?>
<td><?php /* tag "div" from line 109 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</div></td>
										<?php /* tag "td" from line 110 */; ?>
<td><?php /* tag "div" from line 110 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</div></td>
										<?php /* tag "td" from line 111 */; ?>
<td></td><?php /* tag "td" from line 111 */; ?>
<td></td><?php /* tag "td" from line 111 */; ?>
<td></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 113 */; ?>
<tr>
										<?php /* tag "td" from line 114 */; ?>
<td colspan="3"></td>
										<?php /* tag "td" from line 115 */; ?>
<td>
											<?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Customer, 'getURLPaid')))):  ;
$_tmp_7 = ' href="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<a<?php echo $_tmp_7 ?>
>
												<?php /* tag "div" from line 117 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->SPaid->formatCurrency() . ' đ'); ?>
</div>
											</a>
										</td>
										<?php /* tag "td" from line 120 */; ?>
<td></td><?php /* tag "td" from line 120 */; ?>
<td></td><?php /* tag "td" from line 120 */; ?>
<td></td>
									</tr>
								</tbody>
							</table>
							<?php /* tag "h5" from line 124 */; ?>
<h5>TỔNG CỘNG</h5>
							<?php /* tag "table" from line 125 */; ?>
<table width="100%">
								<?php /* tag "tr" from line 126 */; ?>
<tr>
									<?php /* tag "td" from line 127 */; ?>
<td><?php /* tag "div" from line 127 */; ?>
<div class="text-right">NỢ CŨ</div></td>
									<?php /* tag "td" from line 128 */; ?>
<td><?php /* tag "div" from line 128 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->CL->getOldDebtValuePrint() . ' đ'); ?>
</div></td>
									<?php /* tag "td" from line 129 */; ?>
<td width="120"></td>
								</tr>
								<?php /* tag "tr" from line 131 */; ?>
<tr>
									<?php /* tag "td" from line 132 */; ?>
<td><?php /* tag "div" from line 132 */; ?>
<div class="text-right">TRẢ TRONG KÌ</div></td>
									<?php /* tag "td" from line 133 */; ?>
<td><?php /* tag "div" from line 133 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->CL->getPaidValuePrint() . ' đ'); ?>
</div></td>
									<?php /* tag "td" from line 134 */; ?>
<td width="120"></td>
								</tr>
								<?php /* tag "tr" from line 136 */; ?>
<tr>
									<?php /* tag "td" from line 137 */; ?>
<td><?php /* tag "div" from line 137 */; ?>
<div class="text-right">ĐƠN HÀNG</div></td>
									<?php /* tag "td" from line 138 */; ?>
<td><?php /* tag "div" from line 138 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue1Print')); ?>
</div></td>
									<?php /* tag "td" from line 139 */; ?>
<td width="120"></td>
								</tr>																
								<?php /* tag "tr" from line 141 */; ?>
<tr>
									<?php /* tag "td" from line 142 */; ?>
<td><?php /* tag "div" from line 142 */; ?>
<div class="text-right">GIẢM GIÁ</div></td>
									<?php /* tag "td" from line 143 */; ?>
<td><?php /* tag "div" from line 143 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValue2Print')); ?>
</div></td>
									<?php /* tag "td" from line 144 */; ?>
<td width="120"></td>
								</tr>																
								<?php /* tag "tr" from line 146 */; ?>
<tr>
									<?php /* tag "td" from line 147 */; ?>
<td><?php /* tag "div" from line 147 */; ?>
<div class="text-right">NỢ MỚI</div></td>
									<?php /* tag "td" from line 148 */; ?>
<td>										
										<?php 
/* tag "a" from line 149 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_5 = ' alt="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a title="In phiếu" data-toggle="modal" class="OrderPreview text-right" href="#DialogPreview"<?php echo $_tmp_5 ?>
><?php /* tag "div" from line 149 */; ?>
<div><?php echo phptal_escape($ctx->CL->getDebtValuePrint() . ' đ'); ?>
</div></a>
									</td>
									<?php /* tag "td" from line 151 */; ?>
<td width="120"></td>
								</tr>																
							</table>
						</div>
					</div>
					
					<!-- DIALOG PREVIEW	-->
					<?php /* tag "div" from line 158 */; ?>
<div id="DialogPreview" class="modal fade">
						<?php /* tag "div" from line 159 */; ?>
<div class="modal-dialog full-screen">
							<?php /* tag "div" from line 160 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 161 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 162 */; ?>
<h3><?php /* tag "i" from line 162 */; ?>
<i class="glyphicons-star modal-icon"></i>XEM TRƯỚC KHI IN</h3>
								</div>								
								<?php /* tag "form" from line 164 */; ?>
<form class="form">
									<?php /* tag "div" from line 165 */; ?>
<div class="form-group">
										<?php /* tag "div" from line 166 */; ?>
<div id="DocPreview" width="640px" height="480px"></div>
									</div>
									<?php /* tag "div" from line 168 */; ?>
<div class="modal-footer">									
										<?php /* tag "button" from line 169 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 169 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 176 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 177 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 178 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 179 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 179 */; ?>
<h3><?php /* tag "i" from line 179 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT CHI TIẾT ĐƠN HÀNG</h3></div>
								<?php /* tag "form" from line 180 */; ?>
<form id="FormEdit" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 181 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 182 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 183 */; ?>
<div class="controls">
											<?php /* tag "input" from line 184 */; ?>
<input readonly="readonly" id="IdResource2" name="IdResource2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 187 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 188 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 189 */; ?>
<div class="controls">
											<?php /* tag "input" from line 190 */; ?>
<input readonly="readonly" id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 193 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 194 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 195 */; ?>
<div class="controls">
											<?php /* tag "input" from line 196 */; ?>
<input id="Count2" name="Count2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 199 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 200 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 201 */; ?>
<div class="controls">
											<?php /* tag "input" from line 202 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 205 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 206 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 206 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 207 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 207 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 216 */; ?>
<div id="DialogDiscountEdit" class="modal fade">
						<?php /* tag "div" from line 217 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 218 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 219 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 219 */; ?>
<h3><?php /* tag "i" from line 219 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT CHI TIẾT CHIẾT KHẤU</h3></div>
								<?php /* tag "form" from line 220 */; ?>
<form id="FormDiscountEdit" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 221 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 222 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 223 */; ?>
<div class="controls">
											<?php /* tag "input" from line 224 */; ?>
<input readonly="readonly" id="IdResource3" name="IdResource3" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 227 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 228 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 229 */; ?>
<div class="controls">
											<?php /* tag "input" from line 230 */; ?>
<input readonly="readonly" id="Name3" name="Name3" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 233 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 234 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 235 */; ?>
<div class="controls">
											<?php /* tag "input" from line 236 */; ?>
<input id="Count3" name="Count3" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 239 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 240 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 241 */; ?>
<div class="controls">
											<?php /* tag "input" from line 242 */; ?>
<input id="Price3" name="Price3" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 245 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 246 */; ?>
<button id="URLUpdDiscountButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 246 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 247 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 247 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 257 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 258 */ ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_6 = ' alt="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<div id="IdOrder"<?php echo $_tmp_6 ?>
></div>
		<?php 
/* tag "div" from line 259 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 260 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 261 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			
			//---------------------------------------------------------------------------
			//Xử lí search tên			
			$('#SearchName').keyup(function(e){
				var Name 		= $(this).val();										
				$("#ResourceF").load("/search/resource", { Name: Name });
			});
			//-----------------------------------------------------------------------------------
			//CALL COURSE
			$(".RemoveCourseSearch").click(function(){
				$("#ResourceF").html("");
			});
			
			//-----------------------------------------------------------------------------------
			//PRINT ORDER
			$(".OrderPreview").click(function(){
				URL = $(this).attr('alt');
				var mPDF = new PDFObject({ 		
					url: URL,				
					height: "500px",
					pdfOpenParams:{
						view: 'Fit', 
						toolbar: '1', 
						statusbar: '1', 
						messages: '1',
						navpanes: '1' 
					}				
				}).embed("DocPreview");												
				$("#DocPreview").show().printElement();	
			});
					
			//-----------------------------------------------------------------------------------
			//Exe DISCOUNT
			//-----------------------------------------------------------------------------------
			$('.discount').click(function(){
				var Data = [];
				Data[0] = $('#IdCustomer').attr('alt');
				Data[1] = $('#IdOrder').attr('alt');
				Data[2] = $(this).attr('data-idresource');
				Data[3] = $(this).attr('data-count');
				
				var URL = "/export/"+Data[0]+"/"+Data[1]+"/"+Data[2]+"/"+Data[3]+"/discount";
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			
			//-----------------------------------------------------------------------------------
			//Exe DISCOUNT
			//-----------------------------------------------------------------------------------
			$('.extra').click(function(){								
				var URL = "/export/detail/"+$(this).attr('data-id')+"/clone";
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 ORDER
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				$('#URLUpdButton').attr('alt', $(this).attr('data-id'));
				$('#IdResource2').attr('value', $(this).attr('data-idresource'));
				$('#Name2').attr('value', $(this).attr('data-name'));
				$('#Count2').attr('value', $(this).attr('data-count'));
				$('#Price2').attr('value', $(this).attr('data-price'));
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 TABLE
			//-----------------------------------------------------------------------------------
			$("#FormEdit").validate({
				rules:{
					Price2:{
						number:true,
						min:0,
						required:true
					},
					Count2:{						
						number:true,
						min:0,
						required:true
					}
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.form-group').addClass('has-error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var Data = [];					
					Data[0] = $('#URLUpdButton').attr('alt');					
					Data[1] = $('#IdOrder').attr('alt');
					Data[2] = $('#IdResource2').val();
					Data[3] = $('#Count2').val();
					Data[4] = $('#Price2').val();
										
					var URL = "/object/upd/OrderExportDetail";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							location.reload();
						}
					});
					
					return false;
				}
			});
			
			//-----------------------------------------------------------------------------------
			//update DISCOUNT
			//-----------------------------------------------------------------------------------
			$('.update-discount-item').click(function(){
				$('#URLUpdDiscountButton').attr('alt', $(this).attr('data-id'));
				$('#IdResource3').attr('value', $(this).attr('data-idresource'));
				$('#Name3').attr('value', $(this).attr('data-name'));
				$('#Count3').attr('value', $(this).attr('data-count'));
				$('#Price3').attr('value', $(this).attr('data-price'));
			});
			
			$("#FormDiscountEdit").validate({
				rules:{
					Price3:{
						number:true,
						min:0,
						required:true
					},
					Count3:{						
						number:true,
						min:0,
						required:true
					}
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.form-group').addClass('has-error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var Data = [];					
					Data[0] = $('#URLUpdDiscountButton').attr('alt');					
					Data[1] = $('#IdOrder').attr('alt');
					Data[2] = $('#IdResource3').val();
					Data[3] = $('#Count3').val();
					Data[4] = $('#Price3').val();
										
					var URL = "/object/upd/OrderExportDetailExtra";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							location.reload();
						}
					});
					
					return false;
				}
			});
			
			//-----------------------------------------------------------------------------------
			//Delete 1 OrderExportDetailExtra			
			//-----------------------------------------------------------------------------------
			$('.remove-discount-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){
				var URL = "/object/del/OrderExportDetailExtra/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Delete 1 OrderExportDetail			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){
				var URL = "/object/del/OrderExportDetail/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		/*]]>*/
		</script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ExportCustomerOrder.html (edit that file instead) */; ?>