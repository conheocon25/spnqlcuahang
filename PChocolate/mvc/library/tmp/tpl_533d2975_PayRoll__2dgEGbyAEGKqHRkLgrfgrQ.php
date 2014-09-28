<?php 
function tpl_533d2975_PayRoll__2dgEGbyAEGKqHRkLgrfgrQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "div" from line 11 */; ?>
<div id="sidebar">
			<?php /* tag "ul" from line 12 */; ?>
<ul style="display: block;">
				<?php 
/* tag "li" from line 13 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track1 = new PHPTAL_RepeatController($ctx->TrackAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track1 as $ctx->Track1): ;
if (null !== ($_tmp_2 = ($ctx->Track1->getId()==$ctx->Track->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Track1, 'getURLPayRoll')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track1, 'getName')); ?>
</span>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
		<?php /* tag "div" from line 20 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 21 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 23 */; ?>
<div class="row">
				<?php /* tag "div" from line 24 */; ?>
<div class="col-12">
					<?php /* tag "div" from line 25 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 26 */; ?>
<div class="widget-content nopadding">							
							<?php /* tag "table" from line 27 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 28 */; ?>
<thead>
									<?php /* tag "tr" from line 29 */; ?>
<tr>										
										<?php /* tag "th" from line 30 */; ?>
<th width="32">STT</th>
										<?php /* tag "th" from line 31 */; ?>
<th><?php /* tag "div" from line 31 */; ?>
<div class="text-left">NHÂN VIÊN</div></th>
										<?php /* tag "th" from line 32 */; ?>
<th width="120"><?php /* tag "div" from line 32 */; ?>
<div class="text-right">LƯƠNG</div></th>
										<?php /* tag "th" from line 33 */; ?>
<th width="120">IN PHIẾU</th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 36 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 37 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->PayRoll = new PHPTAL_RepeatController($ctx->path($ctx->Track, 'getPayRollAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->PayRoll as $ctx->PayRoll): ;
?>
<tr>
										<?php /* tag "td" from line 38 */; ?>
<td><?php /* tag "div" from line 38 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'PayRoll/number')); ?>
</div></td>
										<?php /* tag "td" from line 39 */; ?>
<td><?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getEmployee/getName')); ?>
</span></td>
										<?php /* tag "td" from line 40 */; ?>
<td align="right">
											<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PayRoll, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->PayRoll, 'getIdEmployee')))):  ;
$_tmp_1 = ' data-id-employee="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->PayRoll, 'getIdTracking')))):  ;
$_tmp_4 = ' data-id-tracking="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->PayRoll, 'getEmployee/getName')))):  ;
$_tmp_5 = ' data-name="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ($ctx->path($ctx->PayRoll, 'getBaseValue')))):  ;
$_tmp_6 = ' data-base-value="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
if (null !== ($_tmp_7 = ($ctx->path($ctx->PayRoll, 'getExtraValue')))):  ;
$_tmp_7 = ' data-extra-value="'.phptal_escape($_tmp_7).'"' ;
else:  ;
$_tmp_7 = '' ;
endif ;
if (null !== ($_tmp_8 = ($ctx->path($ctx->PayRoll, 'getPunishValue')))):  ;
$_tmp_8 = ' data-punish-value="'.phptal_escape($_tmp_8).'"' ;
else:  ;
$_tmp_8 = '' ;
endif ;
if (null !== ($_tmp_9 = ($ctx->path($ctx->PayRoll, 'getNote')))):  ;
$_tmp_9 = ' data-note="'.phptal_escape($_tmp_9).'"' ;
else:  ;
$_tmp_9 = '' ;
endif ;
if (null !== ($_tmp_10 = ($ctx->path($ctx->PayRoll, 'getAbsent')))):  ;
$_tmp_10 = ' data-absent="'.phptal_escape($_tmp_10).'"' ;
else:  ;
$_tmp_10 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
<?php echo $_tmp_1 ?>
<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
<?php echo $_tmp_7 ?>
<?php echo $_tmp_8 ?>
<?php echo $_tmp_9 ?>
<?php echo $_tmp_10 ?>
>
												<?php /* tag "span" from line 52 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getValuePrint')); ?>
</span>
											</a>
										</td>
										<?php /* tag "td" from line 55 */; ?>
<td align="center">
											<?php 
/* tag "a" from line 56 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PayRoll, 'getURLPrint')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_2 ?>
>
												<?php /* tag "span" from line 57 */; ?>
<span class="glyphicons-print"></span>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									<?php /* tag "tr" from line 61 */; ?>
<tr>
										<?php /* tag "td" from line 62 */; ?>
<td></td>
										<?php /* tag "td" from line 63 */; ?>
<td><?php /* tag "div" from line 63 */; ?>
<div class="text-left"><?php /* tag "B" from line 63 */; ?>
<B>TỔNG CỘNG</B></div></td>
										<?php /* tag "td" from line 64 */; ?>
<td><?php /* tag "div" from line 64 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->NSValue, 'formatCurrency')); ?>
</div></td>
										<?php /* tag "td" from line 65 */; ?>
<td></td>
									</tr>
								</tbody>
							</table>
							<?php 
/* tag "div" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->URLReset))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="Reset" class="btn btn-primary"<?php echo $_tmp_1 ?>
>Khởi tạo lại dữ liệu</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 75 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 76 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<!-- UPDATE DIALOG  -->
		<?php /* tag "div" from line 79 */; ?>
<div id="DialogEdit" class="modal fade">
			<?php /* tag "div" from line 80 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 81 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 82 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 82 */; ?>
<h3><?php /* tag "i" from line 82 */; ?>
<i class="glyphicons-user modal-icon"></i>CẬP NHẬT LƯƠNG NHÂN VIÊN</h3></div>
					<?php /* tag "form" from line 83 */; ?>
<form id="FormPayRollUpdate" action="#" class="form-horizontal" novalidate="novalidate">
						<?php /* tag "div" from line 84 */; ?>
<div class="modal-body">
							<?php /* tag "div" from line 85 */; ?>
<div class="form-group">								
								<?php /* tag "div" from line 86 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 87 */; ?>
<label class="control-label">Tên</label>
									<?php /* tag "div" from line 88 */; ?>
<div class="controls">
										<?php /* tag "input" from line 89 */; ?>
<input id="Name2" name="Name2" readonly="readonly" type="text" class="form-control input-small"/>
									</div>
								</div>																															
								<?php /* tag "div" from line 92 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 93 */; ?>
<label class="control-label">Lương cơ bản</label>
									<?php /* tag "div" from line 94 */; ?>
<div class="controls">								
										<?php /* tag "input" from line 95 */; ?>
<input id="BaseValue2" name="BaseValue2" type="text" class="form-control input-small"/>
									</div>
								</div>								
								<?php /* tag "div" from line 98 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 99 */; ?>
<label class="control-label">Số ngày nghỉ</label>
									<?php /* tag "div" from line 100 */; ?>
<div class="controls">								
										<?php /* tag "input" from line 101 */; ?>
<input id="Absent2" name="Absent2" type="text" class="form-control input-small"/>
									</div>
								</div>
								<?php /* tag "div" from line 104 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 105 */; ?>
<label class="control-label">Thưởng</label>
									<?php /* tag "div" from line 106 */; ?>
<div class="controls">
										<?php /* tag "input" from line 107 */; ?>
<input id="ExtraValue2" name="ExtraValue2" type="text" class="form-control input-small"/>
									</div>
								</div>
								<?php /* tag "div" from line 110 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 111 */; ?>
<label class="control-label">Phạt</label>
									<?php /* tag "div" from line 112 */; ?>
<div class="controls">
										<?php /* tag "input" from line 113 */; ?>
<input id="PunishValue2" name="PunishValue2" type="text" class="form-control input-small"/>
									</div>
								</div>
								<?php /* tag "div" from line 116 */; ?>
<div class="control-group">
									<?php /* tag "label" from line 117 */; ?>
<label class="control-label">Ghi chú</label>
									<?php /* tag "div" from line 118 */; ?>
<div class="controls">
										<?php /* tag "input" from line 119 */; ?>
<input id="Note2" name="Note2" type="text" class="form-control input-small"/>
									</div>
								</div>
								<?php /* tag "div" from line 122 */; ?>
<div id="Id2"></div>
								<?php /* tag "div" from line 123 */; ?>
<div id="IdTracking2"></div>
								<?php /* tag "div" from line 124 */; ?>
<div id="IdEmployee2"></div>
							</div>
						</div>									
						<?php /* tag "div" from line 127 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 128 */; ?>
<button class="btn btn-primary btn-small" id="URLUpdButton"><?php /* tag "i" from line 128 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
							<?php /* tag "button" from line 129 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 129 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- DIALOG PREVIEW	-->
		<?php /* tag "div" from line 136 */; ?>
<div id="DialogPreview" class="modal fade">
			<?php /* tag "div" from line 137 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 138 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 139 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 139 */; ?>
<h3><?php /* tag "i" from line 139 */; ?>
<i class="glyphicons-print modal-icon"></i>IN ẤN</h3></div>
					<?php /* tag "div" from line 140 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 141 */; ?>
<div class="form-group">
							<?php /* tag "div" from line 142 */; ?>
<div id="DocPreview"></div>
						</div>
						<?php /* tag "div" from line 144 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 145 */; ?>
<button id="ButtonDocPreview" data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 145 */; ?>
<i class="glyphicons-undo"></i> Đóng lại</button>
						</div>									
					</div>
				</div>
			</div>
		</div>
		<?php /* tag "script" from line 151 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			//-----------------------------------------------------------------------------------
			//Load PAYROLL
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				$('#Id2').attr('alt', 			$(this).attr('data-id'));
				$('#IdEmployee2').attr('alt', 	$(this).attr('data-id-employee'));
				$('#IdTracking2').attr('alt', 	$(this).attr('data-id-tracking'));
				$('#Name2').attr('value', 		$(this).attr('data-name'));
				$('#BaseValue2').attr('value', 	$(this).attr('data-base-value'));
				$('#ExtraValue2').attr('value', 	$(this).attr('data-extra-value'));
				$('#PunishValue2').attr('value', 	$(this).attr('data-punish-value'));
				$('#Absent2').attr('value', 		$(this).attr('data-absent'));
				$('#Note2').attr('value', 			$(this).attr('data-note'));
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 EMPLOYEEE
			//-----------------------------------------------------------------------------------
			$("#FormPayRollUpdate").validate({
				rules:{					
					BaseValue2:{
						number: true,
						required:true,
						min:1000000
					},
					ExtraValue2:{
						number: true,
						required:true,
						min:0
					},
					PunishValue2:{
						number: true,
						required:true,
						min:0
					},
					Absent2:{
						number: true,
						required:true,
						min:0
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
					Data[0] = $('#Id2').attr('alt');
					Data[1] = $('#IdEmployee2').attr('alt');
					Data[2] = $('#IdTracking2').attr('alt');						
					Data[3] = $('#Absent2').val();
					Data[4] = $('#BaseValue2').val();
					Data[5] = $('#ExtraValue2').val();
					Data[6] = $('#PunishValue2').val();					
					Data[7] = $('#Note2').val();
															
					var URL = "/object/upd/PayRoll";
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
			$("#DialogEdit").on('show.bs.modal', function(event){
				window.setTimeout(
					function(){$(event.currentTarget).find('input#BaseValue2').first().focus()},
					0500
				);
			});
									
			$("#Reset").click(function(){
				var URL = $(this).attr('alt');				
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\PayRoll.html (edit that file instead) */; ?>