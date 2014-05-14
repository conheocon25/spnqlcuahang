<?php 
function tpl_534d7b23_ASellingSession__nmwSTaaaITWou5BdcHvF_Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<span class="icon"><?php /* tag "i" from line 6 */; ?>
<i class="glyphicon glyphicon-th-list"></i></span>
				<?php /* tag "div" from line 7 */; ?>
<div class="buttons">
					<?php /* tag "a" from line 8 */; ?>
<a title="Chỉnh sửa" data-toggle="modal" class="btn SessionUpdate" href="#DialogSession"><?php /* tag "i" from line 8 */; ?>
<i class="glyphicons-edit"></i></a>
					<?php 
/* tag "a" from line 9 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tính phiếu" class="btn Checkout"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 9 */; ?>
<i class="glyphicons-ok_2"></i></a>										
					<?php 
/* tag "a" from line 10 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In phiếu" class="Ticket btn"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 10 */; ?>
<i class="glyphicons-print"></i></a>
				</div>
			</div>
			<?php /* tag "div" from line 13 */; ?>
<div class="widget-content nopadding size-12">				
				<?php /* tag "div" from line 14 */; ?>
<div class="invoice-content">
					<?php /* tag "div" from line 15 */; ?>
<div>
						<?php /* tag "div" from line 16 */; ?>
<div class="invoice-meta">
							<?php 
/* tag "h5" from line 17 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h5 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</h5>
							<?php 
/* tag "div" from line 18 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdSession"<?php echo $_tmp_1 ?>
></div>
						</div>
						<?php /* tag "div" from line 20 */; ?>
<div class="invoice-to">
							<?php /* tag "ul" from line 21 */; ?>
<ul><?php /* tag "li" from line 21 */; ?>
<li><?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getCustomer/getName')); ?>
</span></li></ul>
						</div>
						<?php /* tag "div" from line 23 */; ?>
<div class="invoice-from">
							<?php /* tag "ul" from line 24 */; ?>
<ul><?php /* tag "li" from line 24 */; ?>
<li><?php /* tag "span" from line 24 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getId')); ?>
</span></li></ul>
						</div>
					</div>						
						<?php /* tag "table" from line 27 */; ?>
<table class="table table-striped table-hover">
							<?php /* tag "thead" from line 28 */; ?>
<thead>
								<?php /* tag "tr" from line 29 */; ?>
<tr>										
									<?php /* tag "th" from line 30 */; ?>
<th width="30">STT</th>
									<?php /* tag "th" from line 31 */; ?>
<th><?php /* tag "div" from line 31 */; ?>
<div class="text-left">TÊN</div></th>
									<?php /* tag "th" from line 32 */; ?>
<th width="30">SL</th>
									<?php /* tag "th" from line 33 */; ?>
<th width="80"><?php /* tag "div" from line 33 */; ?>
<div class="text-right">Đ.GIÁ</div></th>
									<?php /* tag "th" from line 34 */; ?>
<th width="80"><?php /* tag "div" from line 34 */; ?>
<div class="text-right">T.TIỀN</div></th>
									<?php /* tag "th" from line 35 */; ?>
<th width="30"><?php /* tag "i" from line 35 */; ?>
<i class="glyphicons-bin"></i></th>
								</tr>
							</thead>
							<?php /* tag "tbody" from line 38 */; ?>
<tbody>
								<?php 
/* tag "tr" from line 39 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->SD = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->SD as $ctx->SD): ;
?>
<tr>
									<?php /* tag "td" from line 40 */; ?>
<td><?php /* tag "div" from line 40 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'SD/number')); ?>
</div></td>
									<?php /* tag "td" from line 41 */; ?>
<td>
										<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SD, 'getId')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->SD, 'getIdResource')))):  ;
$_tmp_3 = ' idresource="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->SD, 'getResource/getName')))):  ;
$_tmp_4 = ' name="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->SD, 'getCount')))):  ;
$_tmp_5 = ' count="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->SD, 'getPrice')))):  ;
$_tmp_6 = ' price="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
><?php echo phptal_escape($ctx->path($ctx->SD, 'getResource/getName')); ?>
</a>
									</td>
									<?php /* tag "td" from line 53 */; ?>
<td><?php /* tag "div" from line 53 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->SD, 'getCountPrint')); ?>
</div></td>
									<?php /* tag "td" from line 54 */; ?>
<td><?php /* tag "div" from line 54 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->SD, 'getPricePrint')); ?>
</div></td>
									<?php /* tag "td" from line 55 */; ?>
<td><?php /* tag "div" from line 55 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->SD, 'getValuePrint')); ?>
</div></td>
									<?php /* tag "td" from line 56 */; ?>
<td class="center">
										<?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->SD, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
											<?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-remove_2"></i>
										</a>
									</td>
								</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</tbody>
						</table>						
						<?php /* tag "table" from line 64 */; ?>
<table width="100%">																										
							<?php /* tag "tr" from line 65 */; ?>
<tr>
								<?php /* tag "td" from line 66 */; ?>
<td style="text-align:right;">TỔNG CỘNG:</td>
								<?php /* tag "td" from line 67 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</td>
								<?php /* tag "th" from line 68 */; ?>
<th width="36"></th>
							</tr>
						</table>																		
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 72 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 73 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 74 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 75 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 76 */; ?>
<h3><?php /* tag "i" from line 76 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT CHI TIẾT GIAO DỊCH</h3>
								</div>								
								<?php /* tag "form" from line 78 */; ?>
<form id="FormSDUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 79 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 80 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 81 */; ?>
<div class="controls">
											<?php /* tag "input" from line 82 */; ?>
<input readonly="readonly" id="IdResource1" name="IdResource1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 85 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 86 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 87 */; ?>
<div class="controls">
											<?php /* tag "input" from line 88 */; ?>
<input readonly="readonly" id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 91 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 92 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 93 */; ?>
<div class="controls">
											<?php /* tag "input" from line 94 */; ?>
<input id="Count1" name="Count1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 97 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 98 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 99 */; ?>
<div class="controls">
											<?php /* tag "input" from line 100 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 103 */; ?>
<div class="form-actions">										
										<?php /* tag "button" from line 104 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 104 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 105 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 105 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
																								
					<!-- DIALOG SESSION EDIT	-->
					<?php /* tag "div" from line 114 */; ?>
<div id="DialogSession" class="modal fade">
						<?php /* tag "div" from line 115 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 116 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 117 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 117 */; ?>
<h3><?php /* tag "i" from line 117 */; ?>
<i class="glyphicons-edit modal-icon"></i>CẬP NHẬT GIAO DỊCH</h3></div>
								<?php /* tag "div" from line 118 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 119 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 120 */; ?>
<label class="control-label">Bắt đầu</label>
										<?php /* tag "div" from line 121 */; ?>
<div class="controls">
											<?php /* tag "input" from line 122 */; ?>
<input id="DateTime1" name="DateTime1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd hh:ii"/>
										</div>
									</div>
									<?php /* tag "div" from line 125 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 126 */; ?>
<label class="control-label">Kết thúc</label>
										<?php /* tag "div" from line 127 */; ?>
<div class="controls">
											<?php /* tag "input" from line 128 */; ?>
<input id="DateTimeEnd1" name="DateTimeEnd1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd hh:ii"/>
										</div>
									</div>
									<?php /* tag "div" from line 131 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 132 */; ?>
<label class="control-label">Nhân viên</label>
										<?php /* tag "div" from line 133 */; ?>
<div class="controls">
											<?php /* tag "select" from line 134 */; ?>
<select name="IdEmployee1" id="IdEmployee1" style="width:80%;" class="form-control">
												<?php 
/* tag "option" from line 135 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Employee = new PHPTAL_RepeatController($ctx->EmployeeAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Employee as $ctx->Employee): ;
?>
<option>
													<?php /* tag "span" from line 136 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>									
									<?php /* tag "div" from line 141 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 142 */; ?>
<label class="control-label">Gõ/quét mã thẻ</label>
										<?php /* tag "div" from line 143 */; ?>
<div class="controls">
											<?php /* tag "input" from line 144 */; ?>
<input id="SearchIdCustomer" name="SearchIdCustomer" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 147 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 148 */; ?>
<label class="control-label">Tên KH</label>
										<?php /* tag "div" from line 149 */; ?>
<div class="controls">
											<?php /* tag "input" from line 150 */; ?>
<input id="CustomerName" name="CustomerName" readonly="readonly" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 153 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 154 */; ?>
<label class="control-label">Giảm giá %</label>
										<?php /* tag "div" from line 155 */; ?>
<div class="controls">
											<?php /* tag "input" from line 156 */; ?>
<input id="DiscountPercent1" name="DiscountPercent1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 159 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 160 */; ?>
<label class="control-label">Giảm giá tiền</label>
										<?php /* tag "div" from line 161 */; ?>
<div class="controls">
											<?php /* tag "input" from line 162 */; ?>
<input id="DiscountValue1" name="DiscountValue1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 165 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 166 */; ?>
<label class="control-label">Ghi chú</label>
										<?php /* tag "div" from line 167 */; ?>
<div class="controls">
											<?php /* tag "input" from line 168 */; ?>
<input id="Note1" name="Note1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 171 */; ?>
<div class="form-actions">
										<?php /* tag "button" from line 172 */; ?>
<button id="URLSessionUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 172 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 173 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 173 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
									<?php /* tag "div" from line 175 */; ?>
<div id="IdUser1"></div>
									<?php /* tag "div" from line 176 */; ?>
<div id="IdCustomer1"></div>									
									<?php /* tag "div" from line 177 */; ?>
<div id="Surtax1"></div>
									<?php /* tag "div" from line 178 */; ?>
<div id="Payment1"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					
					<?php 
/* tag "div" from line 185 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div>
			</div>
		</div>
		
		<?php /* tag "div" from line 190 */; ?>
<div id="Session" class="widget-box">
			<?php /* tag "div" from line 191 */; ?>
<div class="widget-content nopadding">
				<?php /* tag "div" from line 192 */; ?>
<div>					
					<?php /* tag "table" from line 193 */; ?>
<table class="table table-striped table-hover">
						<?php /* tag "thead" from line 194 */; ?>
<thead>
							<?php /* tag "tr" from line 195 */; ?>
<tr>										
								<?php /* tag "th" from line 196 */; ?>
<th width="30">STT</th>
								<?php /* tag "th" from line 197 */; ?>
<th><?php /* tag "div" from line 197 */; ?>
<div class="text-left">NGÀY</div></th>
								<?php /* tag "th" from line 198 */; ?>
<th><?php /* tag "div" from line 198 */; ?>
<div class="text-right">PHIẾU</div></th>
								<?php /* tag "th" from line 199 */; ?>
<th width="30"><?php /* tag "i" from line 199 */; ?>
<i class="glyphicons-bin"></i></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 202 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 203 */ ;
$_tmp_4 = $ctx->repeat ;
$_tmp_4->Order = new PHPTAL_RepeatController($ctx->OrderAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_4->Order as $ctx->Order): ;
?>
<tr>
								<?php /* tag "td" from line 204 */; ?>
<td><?php /* tag "div" from line 204 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Order/number')); ?>
</div></td>
								<?php /* tag "td" from line 205 */; ?>
<td><?php /* tag "div" from line 205 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</div></td>
								<?php /* tag "td" from line 206 */; ?>
<td>
									<?php 
/* tag "a" from line 208 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Order, 'getURLPrint')))):  ;
$_tmp_5 = ' alt="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<a title="Xem phiếu" data-toggle="modal" class="SessionPreview" href="#DialogPreview"<?php echo $_tmp_5 ?>
>
										<?php /* tag "div" from line 209 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</div>
									</a>
								</td>
								<?php /* tag "td" from line 212 */; ?>
<td class="center">
									<?php 
/* tag "a" from line 213 */ ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->Order, 'getId')))):  ;
$_tmp_6 = ' data-id="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<a class="remove-session-item" href="#DialogSessionDel" data-toggle="modal"<?php echo $_tmp_6 ?>
>
										<?php /* tag "i" from line 214 */; ?>
<i class="glyphicons-remove_2"></i>
									</a>
								</td>
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
					</table>					
				</div>
				<!-- DELETE DIALOG  -->
				<?php /* tag "div" from line 222 */; ?>
<div id="DialogSessionDel" class="modal fade">
					<?php /* tag "div" from line 223 */; ?>
<div class="modal-dialog">
						<?php /* tag "div" from line 224 */; ?>
<div class="modal-content">
							<?php /* tag "div" from line 225 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 225 */; ?>
<h3>XÓA</h3></div>
							<?php /* tag "div" from line 226 */; ?>
<div class="modal-body">
								<?php /* tag "p" from line 227 */; ?>
<p>Bạn có chắc muốn xóa GIAO DỊCH này ?</p>
							</div>
							<?php /* tag "div" from line 229 */; ?>
<div class="modal-footer">
								<?php /* tag "button" from line 230 */; ?>
<button id="URLSessionDelButton" class="btn btn-primary btn-small">Xóa</button>
								<?php /* tag "button" from line 231 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- END DIALOG EDIT -->
        <?php /* tag "script" from line 240 */; ?>
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
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});			
			$('#URLDelButton').click(function(e){								
				var URL = "/object/del/OrderExportDetail/" + $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$("#DialogDel").modal('hide');
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						$("#Session").load("/selling/load/table/"+IdTable);
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Delete 1 SESSION			
			//-----------------------------------------------------------------------------------
			$('.remove-session-item').click(function(){
				$('#URLSessionDelButton').attr('alt', $(this).attr('data-id'));
			});			
			$('#URLSessionDelButton').click(function(e){								
				var URL = "/object/del/OrderExport/" + $(this).attr('alt');				
				$("#DialogSessionDel").modal('hide');
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
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
						$("#Session").load("/admin/selling/session");
					}
				});
			});
						
			//-----------------------------------------------------------------------------------
			//CHECKOUT
			//-----------------------------------------------------------------------------------
			$('.Checkout').click(function(e){				
				$.ajax({
					type: "POST",
					url: "/admin/selling/checkout",
					success: function(msg){						
						location.reload();
					}
				});
			});
						
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về								
				$('#URLUpdButton').attr('alt', 	$(this).attr('id'));
				$('#IdResource1').attr('value', 	$(this).attr('idresource'));
				$('#Name1').attr('value', 		$(this).attr('name'));
				$('#Count1').attr('value', 		$(this).attr('count'));
				$('#Price1').attr('value', 		$(this).attr('price'));
			});
			
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
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var IdTable = $("#CurrentTable").attr('alt');
					var Data = [];
					Data[0] = $('#URLUpdButton').attr('alt');				
					Data[1] = $('#IdSession').attr('alt')				
					Data[2] = $('#IdResource1').val();
					Data[3] = $('#Count1').val();
					Data[4] = $('#Price1').val();
																				
					var URL = "/object/upd/OrderExportDetail";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){																			
							//location.reload();
							$("#Session").load("/admin/selling/session");
							$("#DialogEdit").modal('hide');
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\ASellingSession.html (edit that file instead) */; ?>