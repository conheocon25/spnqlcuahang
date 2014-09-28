<?php 
function tpl_5363d993_SellingTableLoad__EaQcDpd84o8lFQ9SYIZErw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">	
	<?php /* tag "body" from line 3 */; ?>
<body>				
		<?php /* tag "div" from line 4 */; ?>
<div id="Session" class="widget-box">
			<?php /* tag "div" from line 5 */; ?>
<div class="widget-title">
				<?php /* tag "span" from line 6 */; ?>
<span class="icon">
					<?php /* tag "i" from line 7 */; ?>
<i class="glyphicon glyphicon-th-list"></i>
				</span>				
				<?php 
/* tag "div" from line 9 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="buttons">
					<?php 
/* tag "a" from line 10 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' data-session-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Chuyển bàn" data-toggle="modal" class="btn SessionMove" href="#DialogMove"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 10 */; ?>
<i class="glyphicons-move"></i></a>
					<?php 
/* tag "a" from line 11 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' data-session-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Gom bàn" data-toggle="modal" class="btn SessionMerge" href="#DialogMerge"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 11 */; ?>
<i class="glyphicons-resize_small"></i></a>
					<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' data-session-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Chỉnh sửa giao dịch" data-toggle="modal" class="btn SessionUpdate" href="#DialogSession"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 12 */; ?>
<i class="glyphicons-edit"></i></a>
					<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLCheckoutExe')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tính phiếu" class="btn Checkout"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 13 */; ?>
<i class="glyphicons-ok_2"></i></a>					
					<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In phiếu" class="Ticket btn"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 14 */; ?>
<i class="glyphicons-print"></i></a>
				</div><?php endif; ?>

			</div>
			<?php /* tag "div" from line 17 */; ?>
<div class="widget-content nopadding size-12">
				<?php 
/* tag "div" from line 18 */ ;
if (!($ctx->path($ctx->Table, 'getSessionActive'))):  ;
?>
<div class="invoice-content">
					<?php /* tag "div" from line 19 */; ?>
<div class="invoice-head">
						<?php /* tag "div" from line 20 */; ?>
<div class="invoice-meta">
							<?php 
/* tag "h5" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h5 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</h5>
						</div>
					</div>
				</div><?php endif; ?>

				<?php 
/* tag "div" from line 25 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="invoice-content">
					<?php /* tag "div" from line 26 */; ?>
<div>
						<?php /* tag "div" from line 27 */; ?>
<div class="invoice-meta">
							<?php 
/* tag "h5" from line 28 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h5 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->Table->getName() . '/' . $ctx->Table->getSessionActive()->getCustomer()->getName()); ?>
</h5>
							<?php 
/* tag "div" from line 29 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdSession"<?php echo $_tmp_1 ?>
></div>
						</div>
						<?php /* tag "div" from line 31 */; ?>
<div class="invoice-to">
							<?php /* tag "ul" from line 32 */; ?>
<ul><?php /* tag "li" from line 32 */; ?>
<li><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getUser/getName')); ?>
</span></li></ul>
						</div>
						<?php /* tag "div" from line 34 */; ?>
<div class="invoice-from">
							<?php /* tag "ul" from line 35 */; ?>
<ul><?php /* tag "li" from line 35 */; ?>
<li><?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDateTimePrint')); ?>
</span></li></ul>
						</div>
					</div>
						<?php /* tag "table" from line 38 */; ?>
<table class="table table-striped table-hover">
							<?php /* tag "thead" from line 39 */; ?>
<thead>
								<?php /* tag "tr" from line 40 */; ?>
<tr>										
									<?php /* tag "th" from line 41 */; ?>
<th width="30">STT</th>
									<?php /* tag "th" from line 42 */; ?>
<th><?php /* tag "div" from line 42 */; ?>
<div class="text-left">TÊN</div></th>
									<?php /* tag "th" from line 43 */; ?>
<th width="30">SL</th>
									<?php /* tag "th" from line 44 */; ?>
<th width="80"><?php /* tag "div" from line 44 */; ?>
<div class="text-right">Đ.GIÁ</div></th>
									<?php /* tag "th" from line 45 */; ?>
<th width="80"><?php /* tag "div" from line 45 */; ?>
<div class="text-right">T.TIỀN</div></th>									
									<?php /* tag "th" from line 46 */; ?>
<th width="30"><?php /* tag "i" from line 46 */; ?>
<i class="glyphicons-bin"></i></th>									
								</tr>
							</thead>
							<?php /* tag "tbody" from line 49 */; ?>
<tbody>
								<?php 
/* tag "tr" from line 50 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionActive/getDetails1'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
									<?php /* tag "td" from line 51 */; ?>
<td><?php /* tag "div" from line 51 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
									<?php /* tag "td" from line 52 */; ?>
<td><?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Detail, 'getIdCourse')))):  ;
$_tmp_3 = ' idcourse="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Detail, 'getCourse/getName')))):  ;
$_tmp_4 = ' name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Detail, 'getCount')))):  ;
$_tmp_5 = ' count="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Detail, 'getPrice')))):  ;
$_tmp_6 = ' price="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Detail, 'getIdEmployee')))):  ;
$_tmp_7 = ' idemployee="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</a>
									</td>
									<?php /* tag "td" from line 62 */; ?>
<td><?php /* tag "div" from line 62 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
									<?php /* tag "td" from line 63 */; ?>
<td><?php /* tag "div" from line 63 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
									<?php /* tag "td" from line 64 */; ?>
<td><?php /* tag "div" from line 64 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>									
									<?php /* tag "td" from line 65 */; ?>
<td class="center">
										<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
											<?php /* tag "i" from line 67 */; ?>
<i class="glyphicons-remove_2"></i>
										</a>
									</td>									
								</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</tbody>
						</table>
						<?php /* tag "table" from line 73 */; ?>
<table width="100%">
							<?php /* tag "tr" from line 74 */; ?>
<tr>								
								<?php /* tag "td" from line 75 */; ?>
<td><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getNote')); ?>
</td>
							</tr>
							<?php /* tag "tr" from line 77 */; ?>
<tr>
								<?php /* tag "td" from line 78 */; ?>
<td style="text-align:right;">GIẢM GIÁ %:</td>
								<?php /* tag "td" from line 79 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDiscountPercent')); ?>
</td>
								<?php /* tag "th" from line 80 */; ?>
<th width="36"></th>
							</tr>
							<?php /* tag "tr" from line 82 */; ?>
<tr>
								<?php /* tag "td" from line 83 */; ?>
<td style="text-align:right;">GIẢM GIÁ $:</td>
								<?php /* tag "td" from line 84 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDiscountValuePrint')); ?>
</td>
								<?php /* tag "th" from line 85 */; ?>
<th width="36"></th>
							</tr>
							<?php /* tag "tr" from line 87 */; ?>
<tr>
								<?php /* tag "td" from line 88 */; ?>
<td style="text-align:right;">TỔNG CỘNG:</td>
								<?php /* tag "td" from line 89 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getValuePrint')); ?>
</td>
								<?php /* tag "th" from line 90 */; ?>
<th width="36"></th>
							</tr>
						</table>
																					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 95 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 96 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 97 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 98 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 99 */; ?>
<h3><?php /* tag "i" from line 99 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT MÓN</h3>
								</div>								
								<?php /* tag "form" from line 101 */; ?>
<form id="FormSDUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 102 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 103 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 104 */; ?>
<div class="controls">
											<?php /* tag "input" from line 105 */; ?>
<input readonly="readonly" id="IdCourse1" name="IdCourse1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 108 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 109 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 110 */; ?>
<div class="controls">
											<?php /* tag "input" from line 111 */; ?>
<input readonly="readonly" id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 114 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 115 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 116 */; ?>
<div class="controls">
											<?php /* tag "input" from line 117 */; ?>
<input id="Count1" name="Count1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 120 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 121 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 122 */; ?>
<div class="controls">
											<?php /* tag "input" from line 123 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 126 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 127 */; ?>
<label class="control-label">Nhân viên tặng</label>
										<?php /* tag "div" from line 128 */; ?>
<div class="controls">
											<?php /* tag "select" from line 129 */; ?>
<select name="IdEmployee1" id="IdEmployee1" style="width:80%;" class="form-control">
												<?php 
/* tag "option" from line 130 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Employee = new PHPTAL_RepeatController($ctx->EmployeeAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Employee as $ctx->Employee): ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if ($ctx->Session->getIdEmployee()==$ctx->Employee->getId()?true:false):  ;
$_tmp_5 = ' selected="selected"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<option<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
>
													<?php /* tag "span" from line 131 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 136 */; ?>
<div class="form-actions">										
										<?php /* tag "button" from line 137 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 137 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 138 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 138 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
																								
					<!-- DIALOG SESSION EDIT	-->
					<?php /* tag "div" from line 147 */; ?>
<div id="DialogSession" class="modal fade">
						<?php /* tag "div" from line 148 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 149 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 150 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 150 */; ?>
<h3><?php /* tag "i" from line 150 */; ?>
<i class="glyphicons-edit modal-icon"></i>CẬP NHẬT GIAO DỊCH</h3></div>
								<?php /* tag "div" from line 151 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 152 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 153 */; ?>
<label class="control-label">Bắt đầu</label>
										<?php /* tag "div" from line 154 */; ?>
<div class="controls">
											<?php /* tag "input" from line 155 */; ?>
<input id="DateTime1" name="DateTime1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd hh:ii"/>
										</div>
									</div>
									<?php /* tag "div" from line 158 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 159 */; ?>
<label class="control-label">Kết thúc</label>
										<?php /* tag "div" from line 160 */; ?>
<div class="controls">
											<?php /* tag "input" from line 161 */; ?>
<input id="DateTimeEnd1" name="DateTimeEnd1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd hh:ii"/>
										</div>
									</div>
									<?php /* tag "div" from line 164 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 165 */; ?>
<label class="control-label">Nhân viên</label>
										<?php /* tag "div" from line 166 */; ?>
<div class="controls">
											<?php /* tag "select" from line 167 */; ?>
<select name="IdEmployee1" id="IdEmployee1" style="width:80%;" class="form-control">
												<?php 
/* tag "option" from line 168 */ ;
$_tmp_6 = $ctx->repeat ;
$_tmp_6->Employee = new PHPTAL_RepeatController($ctx->EmployeeAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_6->Employee as $ctx->Employee): ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_7 = ' value="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
if ($ctx->Session->getIdEmployee()==$ctx->Employee->getId()?true:false):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_7 ?>
<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 169 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 174 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 175 */; ?>
<label class="control-label">Tính tiền</label>
										<?php /* tag "div" from line 176 */; ?>
<div class="controls">
											<?php /* tag "select" from line 177 */; ?>
<select name="Status1" id="Status1" style="width:80%;" class="form-control">
												<?php 
/* tag "option" from line 178 */ ;
if ($ctx->Session->getStatus()==0?'true':false):  ;
$_tmp_1 = ' selected="selected"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option value="0"<?php echo $_tmp_1 ?>
>Chưa tính</option>
												<?php 
/* tag "option" from line 179 */ ;
if ($ctx->Session->getStatus()==1?'true':false):  ;
$_tmp_4 = ' selected="selected"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option value="1"<?php echo $_tmp_4 ?>
>Thanh toán đủ</option>
												<?php 
/* tag "option" from line 180 */ ;
if ($ctx->Session->getStatus()==2?'true':false):  ;
$_tmp_5 = ' selected="selected"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<option value="2"<?php echo $_tmp_5 ?>
>Nợ phiếu</option>
												<?php 
/* tag "option" from line 181 */ ;
if ($ctx->Session->getStatus()==3?'true':false):  ;
$_tmp_3 = ' selected="selected"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option value="3"<?php echo $_tmp_3 ?>
>Tiếp khách</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 185 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 186 */; ?>
<label class="control-label">Gõ/quét mã thẻ</label>
										<?php /* tag "div" from line 187 */; ?>
<div class="controls">
											<?php /* tag "input" from line 188 */; ?>
<input id="SearchIdCustomer" name="SearchIdCustomer" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 191 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 192 */; ?>
<label class="control-label">Tên KH</label>
										<?php /* tag "div" from line 193 */; ?>
<div class="controls">
											<?php /* tag "input" from line 194 */; ?>
<input id="CustomerName" name="CustomerName" readonly="readonly" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 197 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 198 */; ?>
<label class="control-label">Giảm giá %</label>
										<?php /* tag "div" from line 199 */; ?>
<div class="controls">
											<?php /* tag "input" from line 200 */; ?>
<input id="DiscountPercent1" name="DiscountPercent1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 203 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 204 */; ?>
<label class="control-label">Giảm giá tiền</label>
										<?php /* tag "div" from line 205 */; ?>
<div class="controls">
											<?php /* tag "input" from line 206 */; ?>
<input id="DiscountValue1" name="DiscountValue1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 209 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 210 */; ?>
<label class="control-label">Ghi chú</label>
										<?php /* tag "div" from line 211 */; ?>
<div class="controls">
											<?php /* tag "input" from line 212 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 215 */; ?>
<div class="form-actions">
										<?php /* tag "button" from line 216 */; ?>
<button id="URLSessionUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 216 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 217 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 217 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
									<?php /* tag "div" from line 219 */; ?>
<div id="IdUser1"></div>
									<?php /* tag "div" from line 220 */; ?>
<div id="IdCustomer1"></div>									
									<?php /* tag "div" from line 221 */; ?>
<div id="Surtax1"></div>
									<?php /* tag "div" from line 222 */; ?>
<div id="Payment1"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<!-- DIALOG MOVE	-->
					<?php /* tag "div" from line 229 */; ?>
<div id="DialogMove" class="modal fade">
						<?php /* tag "div" from line 230 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 231 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 232 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 233 */; ?>
<h3><?php /* tag "i" from line 233 */; ?>
<i class="glyphicons-move modal-icon"></i>CHUYỂN BÀN</h3>
								</div>
								<?php 
/* tag "form" from line 235 */ ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->Table, 'getURLMoveExe')))):  ;
$_tmp_7 = ' action="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_7 ?>
>
									<?php /* tag "div" from line 236 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 237 */; ?>
<label class="control-label" for="IdTableMove">Chuyển đến bàn</label>
										<?php /* tag "div" from line 238 */; ?>
<div class="controls">
											<?php /* tag "select" from line 239 */; ?>
<select name="IdTableMove" id="IdTableMove" class="form-control input-sm">
												<?php 
/* tag "option" from line 240 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Table = new PHPTAL_RepeatController($ctx->TableAllNonGuest)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Table as $ctx->Table): ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_6 = ' value="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<option<?php echo $_tmp_6 ?>
>
													<?php /* tag "span" from line 241 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 241 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 246 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 247 */; ?>
<button id="URLSessionMoveButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 247 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 248 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 248 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>									
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					
					<!-- DIALOG MERGE	-->
					<?php /* tag "div" from line 257 */; ?>
<div id="DialogMerge" class="modal fade">
						<?php /* tag "div" from line 258 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 259 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 260 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 261 */; ?>
<h3><?php /* tag "i" from line 261 */; ?>
<i class="glyphicons-resize_small modal-icon"></i>GOM BÀN</h3>
								</div>
								<?php 
/* tag "form" from line 263 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getURLMergeExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>
									<?php /* tag "div" from line 264 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 265 */; ?>
<label class="control-label" for="IdTableMerge">Gom với bàn</label>
										<?php /* tag "div" from line 266 */; ?>
<div class="controls">
											<?php /* tag "select" from line 267 */; ?>
<select name="IdTableMerge" id="IdTableMerge" class="form-control input-sm">
												<?php 
/* tag "option" from line 268 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Table = new PHPTAL_RepeatController($ctx->TableAllGuest)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Table as $ctx->Table): ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_5 = ' value="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<option<?php echo $_tmp_5 ?>
>
													<?php /* tag "span" from line 269 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 269 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 274 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 275 */; ?>
<button id="URLSessionMergeButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 275 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 276 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 276 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>									
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 283 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div><?php endif; ?>

			</div>
		</div>
		
		<?php /* tag "div" from line 288 */; ?>
<div id="Session" class="widget-box">
			<?php /* tag "div" from line 289 */; ?>
<div class="widget-content nopadding">
				<?php /* tag "div" from line 290 */; ?>
<div>
					<?php /* tag "table" from line 291 */; ?>
<table class="table table-striped table-hover">
						<?php /* tag "thead" from line 292 */; ?>
<thead>
							<?php /* tag "tr" from line 293 */; ?>
<tr>										
								<?php /* tag "th" from line 294 */; ?>
<th width="30">STT</th>
								<?php /* tag "th" from line 295 */; ?>
<th><?php /* tag "div" from line 295 */; ?>
<div class="text-left">NGÀY</div></th>
								<?php /* tag "th" from line 296 */; ?>
<th><?php /* tag "div" from line 296 */; ?>
<div class="text-right">PHIẾU</div></th>								
							</tr>
						</thead>
						<?php /* tag "tbody" from line 299 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 300 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Session = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionRecent'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Session as $ctx->Session): ;
?>
<tr>
								<?php /* tag "td" from line 301 */; ?>
<td><?php /* tag "div" from line 301 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</div></td>
								<?php /* tag "td" from line 302 */; ?>
<td><?php /* tag "div" from line 302 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</div></td>
								<?php /* tag "td" from line 303 */; ?>
<td>
									<?php 
/* tag "div" from line 304 */ ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_6 = ' alt="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<div class="Ticket text-right"<?php echo $_tmp_6 ?>
>
										<?php /* tag "span" from line 305 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</span>
									</div>
								</td>								
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
					</table>
				</div>
				<!-- DELETE DIALOG  -->
				<?php /* tag "div" from line 313 */; ?>
<div id="DialogSessionDel" class="modal fade">
					<?php /* tag "div" from line 314 */; ?>
<div class="modal-dialog">
						<?php /* tag "div" from line 315 */; ?>
<div class="modal-content">
							<?php /* tag "div" from line 316 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 316 */; ?>
<h3>XÓA</h3></div>
							<?php /* tag "div" from line 317 */; ?>
<div class="modal-body">
								<?php /* tag "p" from line 318 */; ?>
<p>Bạn có chắc muốn xóa GIAO DỊCH này ?</p>
							</div>
							<?php /* tag "div" from line 320 */; ?>
<div class="modal-footer">
								<?php /* tag "button" from line 321 */; ?>
<button id="URLSessionDelButton" class="btn btn-primary btn-small">Xóa</button>
								<?php /* tag "button" from line 322 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- DIALOG PREVIEW	-->
		<?php /* tag "div" from line 330 */; ?>
<div id="DialogPreview" class="modal fade">
			<?php /* tag "div" from line 331 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 332 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 333 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 334 */; ?>
<h3><?php /* tag "i" from line 334 */; ?>
<i class="glyphicons-star modal-icon"></i>XEM TRƯỚC KHI IN</h3>
					</div>								
					<?php /* tag "form" from line 336 */; ?>
<form class="form">
						<?php /* tag "div" from line 337 */; ?>
<div class="form-group">
							<?php /* tag "div" from line 338 */; ?>
<div id="DocPreview" width="320px" height="480px"></div>
						</div>
						<?php /* tag "div" from line 340 */; ?>
<div class="modal-footer">									
							<?php /* tag "button" from line 341 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 341 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- END DIALOG EDIT -->
        <?php /* tag "script" from line 348 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/			
			$("#SearchIdCustomer").change(function(){
				URL = "/search/customer/"+$(this).val();
				$.getJSON(URL, function(data){
					$("#IdCustomer1").attr('alt', data.Id);					
					$("#DiscountPercent1").val(data.Discount);
					$("#CustomerName").val(data.Name);
				});				
			});
						
			//-----------------------------------------------------------------------------------
			//Delete 1 DETAIL			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){$('#URLDelButton').attr('alt', $(this).attr('data-id'));});
			$('#URLDelButton').click(function(e){
				//Load dữ liệu JSON về
				var url = "/object/load/SessionDetail/" + $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){										
					$("#DialogDel").modal('hide');					
					var Data = [];
					Data[0] = data.Id;
					Data[1] = data.IdSession;
					Data[2] = data.IdCourse;
					Data[3] = data.Count;
					Data[4] = data.Price;
					Data[5] = 0;
																				
					var URL = "/object/upd/SessionDetail";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							$("#Session").load("/selling/load/table/"+IdTable);
						}
					});
				
				});
			});
									
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION
			//-----------------------------------------------------------------------------------
			$('.SessionUpdate').click(function(e){
				//Load dữ liệu JSON về
				var url = "/object/load/Session/" + $(this).attr('data-session-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){					
					$('#URLSessionUpdButton').attr('alt', data.Id);
					$('#DateTime1').attr('value'		, data.DateTime);
					$('#DateTimeEnd1').attr('value'		, data.DateTimeEnd);
					$('#DiscountPercent1').attr('value'	, data.DiscountPercent);
					$('#DiscountValue1').attr('value'	, data.DiscountValue);
					$('#CustomerName').attr('value'		, data.CustomerName);					
					$('#Note1').attr('value'			, data.Note);
					
					$('#IdUser1').attr('alt'			, data.IdUser);
					$('#IdCustomer1').attr('alt'		, data.IdCustomer);					
					$('#Surtax1').attr('alt'			, data.Surtax);
					$('#Payment1').attr('alt'			, data.Payment);
				});
			});
			$("#URLSessionUpdButton").click(function(){
				var IdTable = $("#CurrentTable").attr('alt');
				var Data = [];
				Data[0] 	= $('#URLSessionUpdButton').attr('alt');
				Data[1] 	= IdTable;
				Data[2] 	= $('#IdUser1').attr('alt');				
				Data[3] 	= $('#IdCustomer1').attr('alt');				
				Data[4] 	= $('#IdEmployee1').val();
				Data[5] 	= $('#DateTime1').val();
				Data[6] 	= $('#DateTimeEnd1').val();
				Data[7] 	= $('#Note1').val();
				Data[8] 	= $('#Status1').val();
				Data[9] 	= $('#DiscountValue1').val();
				Data[10] 	= $('#DiscountPercent1').val();
				Data[11] 	= $('#Surtax1').val();
				Data[12] 	= "0";//$('#Payment1').val();
				$("#DialogSession").modal('hide');
									
				var URL = "/object/upd/Session";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						var TableActive = "#" + $("#TableActive").attr('alt');
						if ($('#Status1').val()>0){														
							$(TableActive).removeClass('actived');
						}
						$("#Session").load("/selling/load/table/"+IdTable);
					}
				});
			});
			
											
			//-----------------------------------------------------------------------------------
			//click gọi món
			//-----------------------------------------------------------------------------------
			$('.Course').click(function(e){
				var IdCourse 	= $(this).attr('alt');
				var Delta 		= $(this).attr('data-delta');
				var IdTable 	= $("#CurrentTable").attr('alt');
				URL = "/selling/call/table/"+IdTable+"/"+IdCourse+"/"+Delta;				
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST", 
					async: false,
					url: URL,
					dataType: 'json',
					success: function(data){
						var TableActive = "#" + $("#TableActive").attr('alt');
						$("#Session").load("/selling/load/table/"+IdTable);
						
						//Đánh dấu Table có khách
						$(TableActive).addClass('actived');
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				$('#URLUpdButton').attr('alt', 	$(this).attr('Id')			);
				$('#IdCourse1').attr('value', 	$(this).attr('idcourse')	);
				$('#Name1').attr('value', 		$(this).attr('name')		);
				$('#Count1').attr('value', 		$(this).attr('count')		);
				$('#Price1').attr('value', 		$(this).attr('price')		);
				$('#IdEmployee1').val( 			$(this).attr('idemployee')	);
			});
			
			//-----------------------------------------------------------------------------------
			//CHECKOUT
			//-----------------------------------------------------------------------------------
			$('.Checkout').click(function(e){
				var URL = $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						var TableActive = "#" + $("#TableActive").attr('alt');
						$("#Session").load("/selling/load/table/"+IdTable);
																		
						//Đánh dấu Table có khách
						$(TableActive).toggleClass('actived');
					}
				});
			});
						
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$("#FormSDUpdate").validate({
				rules:{
					Count1:{
						min: 0,
						required:true
					},
					Price1:{
						min: 0,
						required:true
					}
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.form-group').addClass('has-error');
				},
				unhighlight: function(element, errorClass, validClass){
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var IdTable = $("#CurrentTable").attr('alt');
					var Data = [];
					Data[0] = $('#URLUpdButton').attr('alt');
					Data[1] = $('#IdSession').attr('alt')				
					Data[2] = $('#IdCourse1').val();
					Data[3] = $('#Count1').val();
					Data[4] = $('#Price1').val();
					Data[5] = 1;
					Data[6] = $('#IdEmployee1').val();
					
					$("#DialogEdit").modal('hide');
										
					var URL = "/object/upd/SessionDetail";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							$("#Session").load("/selling/load/table/"+IdTable);
						}
					});
					return false;
				}
			});
			$("#DialogEdit").on('show.bs.modal', function(event){
				window.setTimeout(function(){
				$(event.currentTarget).find('input#Count1').first().focus()
				}, 0500);
			});
			
			$(".Ticket").click(function(){
				var url = $(this).attr('alt');
				var thePopup = window.open( url, "In Phiếu", "menubar=0,location=0,height=700,width=700" );
				thePopup.print();
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SellingTableLoad.html (edit that file instead) */; ?>