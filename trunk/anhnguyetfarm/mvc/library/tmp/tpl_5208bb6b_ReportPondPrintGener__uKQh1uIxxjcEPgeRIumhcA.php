<?php 
function tpl_5208bb6b_ReportPondPrintGener__uKQh1uIxxjcEPgeRIumhcA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "style" from line 1 */ ;
?>
<style type="text/css">
	.hor-minimalist-a{	background: #fff;margin: 45px;border-collapse: collapse;text-align: left;}
	.hor-minimalist-a th{ font-weight: normal; border: 1px solid #000; }
	.hor-minimalist-a td{ padding: 8px; border-right: 1px solid #000; border-left: 1px solid #000; }
</style>
<?php /* tag "font" from line 6 */; ?>
<font size="10">
	<?php /* tag "table" from line 7 */; ?>
<table width="100%" cellpadding="1" cellspacing="0" border="0">
		<?php /* tag "tr" from line 8 */; ?>
<tr>
			<?php /* tag "td" from line 9 */; ?>
<td width="30%" align="center">TRẠI CÁ ÁNH NGUYỆT</td>
			<?php /* tag "td" from line 10 */; ?>
<td width="70%" rowspan="2" align="center">
				<?php /* tag "font" from line 11 */; ?>
<font size="16"><?php /* tag "b" from line 11 */; ?>
<b>THÔNG TIN TỔNG HỢP</b></font>
			</td>
		</tr>
		<?php /* tag "tr" from line 14 */; ?>
<tr>			
			<?php /* tag "td" from line 15 */; ?>
<td width="30%" align="center">An Hòa, Châu Thành, Đồng Tháp</td>			
		</tr>
		<?php /* tag "tr" from line 17 */; ?>
<tr>			
			<?php /* tag "td" from line 18 */; ?>
<td width="30%" align="center">ĐT: 0939.438837, Fax: 0673.123456</td>
			<?php /* tag "td" from line 19 */; ?>
<td width="70%" align="center">
				<?php /* tag "font" from line 20 */; ?>
<font size="13"><?php /* tag "B" from line 20 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Pond, 'getName')); ?>
</B></font>
			</td>
		</tr>
	</table>
</font>

<?php /* tag "H3" from line 26 */; ?>
<H3>1. THÔNG TIN</H3>
<?php /* tag "table" from line 27 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 28 */; ?>
<tr>
		<?php /* tag "td" from line 29 */; ?>
<td width="15%" align="right">Chủ đầu tư:</td>
		<?php /* tag "td" from line 30 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getName')); ?>
</td>
		<?php /* tag "td" from line 31 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 32 */; ?>
<td width="15%" align="right">Cá giống:</td>
		<?php /* tag "td" from line 33 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountStartPrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 35 */; ?>
<tr>
		<?php /* tag "td" from line 36 */; ?>
<td width="15%" align="right">Quản lý:</td>
		<?php /* tag "td" from line 37 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getEmployeeName')); ?>
</td>
		<?php /* tag "td" from line 38 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 39 */; ?>
<td width="15%" align="right">Lượng cá ngộp:</td>
		<?php /* tag "td" from line 40 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 40 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountWastePrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 42 */; ?>
<tr>
		<?php /* tag "td" from line 43 */; ?>
<td width="15%" align="right">Điện thoại:</td>
		<?php /* tag "td" from line 44 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getEmployeePhone')); ?>
</td>
		<?php /* tag "td" from line 45 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 46 */; ?>
<td width="15%" align="right">Giá cá ngộp:</td>
		<?php /* tag "td" from line 47 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 47 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceWastePrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 49 */; ?>
<tr>
		<?php /* tag "td" from line 50 */; ?>
<td width="15%" align="right">Hình thức:</td>
		<?php /* tag "td" from line 51 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTypePrint')); ?>
</td>
		<?php /* tag "td" from line 52 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 53 */; ?>
<td width="15%" align="right">Lượng cá vét:</td>
		<?php /* tag "td" from line 54 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 54 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountRemainPrint')); ?>
</span></td>
	</tr>	
	<?php /* tag "tr" from line 56 */; ?>
<tr>
		<?php /* tag "td" from line 57 */; ?>
<td width="15%" align="right">Lãi suất vay:</td>
		<?php /* tag "td" from line 58 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 58 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBankRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 59 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 60 */; ?>
<td width="15%" align="right">Giá cá vét:</td>
		<?php /* tag "td" from line 61 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 61 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceRemainPrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 63 */; ?>
<tr>		
		<?php /* tag "td" from line 64 */; ?>
<td width="15%" align="right">Bắt đầu:</td>
		<?php /* tag "td" from line 65 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getDateStartPrint')); ?>
</td>
		<?php /* tag "td" from line 66 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 67 */; ?>
<td width="15%" align="right">Lưới + Công Đoàn:</td>
		<?php /* tag "td" from line 68 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 68 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getNetPrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 70 */; ?>
<tr>		
		<?php /* tag "td" from line 71 */; ?>
<td width="15%" align="right">Kết thúc:</td>
		<?php /* tag "td" from line 72 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getDateEndPrint')); ?>
</td>
		<?php /* tag "td" from line 73 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 74 */; ?>
<td width="15%" align="right">Tiền thưởng:</td>
		<?php /* tag "td" from line 75 */; ?>
<td width="30%" align="left"><?php /* tag "span" from line 75 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTipPrint')); ?>
</span></td>
	</tr>
	<?php /* tag "tr" from line 77 */; ?>
<tr>		
		<?php /* tag "td" from line 78 */; ?>
<td width="15%" align="right">Tổng thời gian:</td>
		<?php /* tag "td" from line 79 */; ?>
<td width="30%" align="left"><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTimesPrint')); ?>
</td>
		<?php /* tag "td" from line 80 */; ?>
<td width="10%"></td>
		<?php /* tag "td" from line 81 */; ?>
<td width="15%" align="right"></td>
		<?php /* tag "td" from line 82 */; ?>
<td width="30%" align="left"></td>
	</tr>
</table>

<?php /* tag "H3" from line 86 */; ?>
<H3>2. THỨC ĂN </H3>
	<?php 
/* tag "span" from line 87 */ ;
if ($ctx->PondSession->getType()==1?true:false):  ;
?>
<span>
		<?php /* tag "table" from line 88 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
			<?php /* tag "thead" from line 89 */; ?>
<thead>
				<?php /* tag "tr" from line 90 */; ?>
<tr>			
					<?php /* tag "th" from line 91 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 91 */; ?>
<B>STT</B></th>
					<?php /* tag "th" from line 92 */; ?>
<th width="20%"><?php /* tag "B" from line 92 */; ?>
<B>THÁNG</B></th>
					<?php /* tag "th" from line 93 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 93 */; ?>
<B>VỐN GỐC</B></th>
					<?php /* tag "th" from line 94 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 94 */; ?>
<B>LÃI SUẤT</B></th>
					<?php /* tag "th" from line 95 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 95 */; ?>
<B>THÀNH TIỀN</B></th>
				</tr>
			</thead>
			<?php /* tag "tbody" from line 98 */; ?>
<tbody>
				<?php 
/* tag "tr" from line 99 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
					<?php /* tag "td" from line 100 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 100 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
					<?php /* tag "td" from line 101 */; ?>
<td width="20%"><?php /* tag "span" from line 101 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
					<?php /* tag "td" from line 102 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 102 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue1BasePrint')); ?>
</span></td>
					<?php /* tag "td" from line 103 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 103 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue1RatePrint')); ?>
</span></td>						
					<?php /* tag "td" from line 104 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 104 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue1BasePrint')); ?>
</span></td>
				</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</tbody>
			<?php /* tag "tfoot" from line 107 */; ?>
<tfoot>
				<?php /* tag "tr" from line 108 */; ?>
<tr>
					<?php /* tag "th" from line 109 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 109 */; ?>
<B>TỔNG CỘNG</B></th>
					<?php /* tag "th" from line 110 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 110 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1BasePrint')); ?>
</B></th>
					<?php /* tag "th" from line 111 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 111 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1RatePrint')); ?>
</B></th>
					<?php /* tag "th" from line 112 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 112 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1Print')); ?>
</B></th>
				</tr>		
			</tfoot>
		</table>
	</span><?php endif; ?>

	<?php 
/* tag "span" from line 117 */ ;
if ($ctx->PondSession->getType()==2?true:false):  ;
?>
<span>
		<?php /* tag "table" from line 118 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
			<?php /* tag "thead" from line 119 */; ?>
<thead>
				<?php /* tag "tr" from line 120 */; ?>
<tr>
					<?php /* tag "th" from line 121 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 121 */; ?>
<B>STT</B></th>
					<?php /* tag "th" from line 122 */; ?>
<th width="60%"><?php /* tag "B" from line 122 */; ?>
<B>THÁNG</B></th>				
					<?php /* tag "th" from line 123 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 123 */; ?>
<B>SỐ LƯỢNG</B></th>
				</tr>
			</thead>
			<?php /* tag "tbody" from line 126 */; ?>
<tbody>
				<?php 
/* tag "tr" from line 127 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
					<?php /* tag "td" from line 128 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 128 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
					<?php /* tag "td" from line 129 */; ?>
<td width="60%"><?php /* tag "span" from line 129 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
					<?php /* tag "td" from line 130 */; ?>
<td width="35%" align="right"><?php /* tag "span" from line 130 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersCount1Print')); ?>
</span></td>
				</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</tbody>		
			<?php /* tag "tfoot" from line 133 */; ?>
<tfoot>
				<?php /* tag "tr" from line 134 */; ?>
<tr>
					<?php /* tag "th" from line 135 */; ?>
<th width="65%" align="right" colspan="3"><?php /* tag "B" from line 135 */; ?>
<B>TỔNG CỘNG</B></th>
					<?php /* tag "th" from line 136 */; ?>
<th width="35%" align="right"><?php /* tag "B" from line 136 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrderTrackingsCount1Print')); ?>
</B></th>
				</tr>
			</tfoot>		
		</table>
	</span><?php endif; ?>

	
<?php /* tag "H3" from line 142 */; ?>
<H3>3. THUỐC</H3>
<?php /* tag "table" from line 143 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
	<?php /* tag "thead" from line 144 */; ?>
<thead>
		<?php /* tag "tr" from line 145 */; ?>
<tr>			
			<?php /* tag "th" from line 146 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 146 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 147 */; ?>
<th width="20%"><?php /* tag "B" from line 147 */; ?>
<B>THÁNG</B></th>
			<?php /* tag "th" from line 148 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 148 */; ?>
<B>VỐN GỐC</B></th>
			<?php /* tag "th" from line 149 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 149 */; ?>
<B>LÃI SUẤT</B></th>
			<?php /* tag "th" from line 150 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 150 */; ?>
<B>THÀNH TIỀN</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 153 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 154 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getOrderTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
			<?php /* tag "td" from line 155 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 155 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
			<?php /* tag "td" from line 156 */; ?>
<td width="20%"><?php /* tag "span" from line 156 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>			
			<?php /* tag "td" from line 157 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 157 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2BasePrint')); ?>
</span></td>
			<?php /* tag "td" from line 158 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 158 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2RatePrint')); ?>
</span></td>						
			<?php /* tag "td" from line 159 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 159 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getOrdersValue2BasePrint')); ?>
</span></td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</tbody>
	<?php /* tag "tfoot" from line 162 */; ?>
<tfoot>		
		<?php /* tag "tr" from line 163 */; ?>
<tr>
			<?php /* tag "th" from line 164 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 164 */; ?>
<B>TỔNG CỘNG</B></th>
			<?php /* tag "th" from line 165 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 165 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2BasePrint')); ?>
</B></th>
			<?php /* tag "th" from line 166 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 166 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2RatePrint')); ?>
</B></th>
			<?php /* tag "th" from line 167 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 167 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2Print')); ?>
</B></th>
		</tr>		
	</tfoot>
</table>

<?php /* tag "H3" from line 172 */; ?>
<H3>4. CHI PHÍ</H3>	
	<?php /* tag "table" from line 173 */; ?>
<table class="hor-minimalist-a" width="100%" border="1" cellpadding="2">
		<?php /* tag "thead" from line 174 */; ?>
<thead>
			<?php /* tag "tr" from line 175 */; ?>
<tr>
				<?php /* tag "th" from line 176 */; ?>
<th width="5%" align="center"><?php /* tag "B" from line 176 */; ?>
<B>STT</B></th>
				<?php /* tag "th" from line 177 */; ?>
<th width="20%"><?php /* tag "B" from line 177 */; ?>
<B>THÁNG</B></th>
				<?php /* tag "th" from line 178 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 178 */; ?>
<B>VỐN GỐC</B></th>
				<?php /* tag "th" from line 179 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 179 */; ?>
<B>LÃI SUẤT</B></th>
				<?php /* tag "th" from line 180 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 180 */; ?>
<B>THÀNH TIỀN</B></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 183 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 184 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Track = new PHPTAL_RepeatController($ctx->path($ctx->PondSession, 'getPaidTrackings'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Track as $ctx->Track): ;
?>
<tr>
				<?php /* tag "td" from line 185 */; ?>
<td width="5%" align="center"><?php /* tag "span" from line 185 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->repeat, 'Track/number')); ?>
</span></td>
				<?php /* tag "td" from line 186 */; ?>
<td width="20%"><?php /* tag "span" from line 186 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getMonthPrint')); ?>
</span></td>
				<?php /* tag "td" from line 187 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 187 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValuePrint')); ?>
</span></td>
				<?php /* tag "td" from line 188 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 188 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getPaidsValueRatePrint')); ?>
</span></td>
				<?php /* tag "td" from line 189 */; ?>
<td width="25%" align="right"><?php /* tag "span" from line 189 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Track, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>
		<?php /* tag "tfoot" from line 192 */; ?>
<tfoot>
			<?php /* tag "tr" from line 193 */; ?>
<tr>
				<?php /* tag "th" from line 194 */; ?>
<th width="25%" align="right" colspan="2"><?php /* tag "B" from line 194 */; ?>
<B>TỔNG CỘNG</B></th>
				<?php /* tag "th" from line 195 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 195 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValue1Print')); ?>
</B></th>
				<?php /* tag "th" from line 196 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 196 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsRateValuePrint')); ?>
</B></th>
				<?php /* tag "th" from line 197 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 197 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</B></th>
			</tr>
		</tfoot>
	</table>

<?php /* tag "H3" from line 202 */; ?>
<H3>5. TỔNG KẾT</H3>
<?php /* tag "table" from line 203 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 204 */; ?>
<tr>
		<?php /* tag "td" from line 205 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 206 */; ?>
<td width="35%" align="right">CON GIỐNG</td>
		<?php /* tag "td" from line 207 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 207 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 208 */; ?>
<td width="40%"></td>
	</tr>
	<?php /* tag "tr" from line 210 */; ?>
<tr>
		<?php /* tag "td" from line 211 */; ?>
<td></td>
		<?php /* tag "td" from line 212 */; ?>
<td align="right">VẬN CHUYỂN</td>
		<?php /* tag "td" from line 213 */; ?>
<td align="right"><?php /* tag "span" from line 213 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getShipStartPrint')); ?>
</span></td>
		<?php /* tag "td" from line 214 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 216 */; ?>
<tr>
		<?php /* tag "td" from line 217 */; ?>
<td></td>
		<?php /* tag "td" from line 218 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 219 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 221 */; ?>
<tr>
		<?php /* tag "td" from line 222 */; ?>
<td></td>
		<?php /* tag "td" from line 223 */; ?>
<td align="right">TIỀN GIỐNG</td>
		<?php /* tag "td" from line 224 */; ?>
<td align="right"><?php /* tag "span" from line 224 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1Print')); ?>
</span></td>
		<?php /* tag "td" from line 225 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 227 */; ?>
<tr>
		<?php /* tag "td" from line 228 */; ?>
<td></td>
		<?php /* tag "td" from line 229 */; ?>
<td align="right">LÃI TIỀN GIỐNG</td>
		<?php /* tag "td" from line 230 */; ?>
<td align="right"><?php /* tag "span" from line 230 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart1RatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 231 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 233 */; ?>
<tr>
		<?php /* tag "td" from line 234 */; ?>
<td></td>
		<?php /* tag "td" from line 235 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 236 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 238 */; ?>
<tr>
		<?php /* tag "td" from line 239 */; ?>
<td></td>
		<?php /* tag "td" from line 240 */; ?>
<td align="right">ĐẦU TƯ GIỐNG</td>
		<?php /* tag "td" from line 241 */; ?>
<td align="right"><?php /* tag "span" from line 241 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStart2Print')); ?>
</span></td>
		<?php /* tag "td" from line 242 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 244 */; ?>
<tr>
		<?php /* tag "td" from line 245 */; ?>
<td></td>
		<?php /* tag "td" from line 246 */; ?>
<td colspan="2" align="left">+</td>
		<?php /* tag "td" from line 247 */; ?>
<td></td>
	</tr>	
	<?php 
/* tag "tr" from line 249 */ ;
if ($ctx->PondSession->getType()==1?true:false):  ;
?>
<tr>
		<?php /* tag "td" from line 250 */; ?>
<td></td>
		<?php /* tag "td" from line 251 */; ?>
<td align="right">TIỀN THỨC ĂN</td>
		<?php /* tag "td" from line 252 */; ?>
<td align="right"><?php /* tag "span" from line 252 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue1Print')); ?>
</span></td>
		<?php /* tag "td" from line 253 */; ?>
<td></td>
	</tr><?php endif; ?>
	
	<?php /* tag "tr" from line 255 */; ?>
<tr>
		<?php /* tag "td" from line 256 */; ?>
<td></td>
		<?php /* tag "td" from line 257 */; ?>
<td align="right">TIỀN THUỐC</td>
		<?php /* tag "td" from line 258 */; ?>
<td align="right"><?php /* tag "span" from line 258 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getOrdersValue2Print')); ?>
</span></td>
		<?php /* tag "td" from line 259 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 261 */; ?>
<tr>
		<?php /* tag "td" from line 262 */; ?>
<td></td>
		<?php /* tag "td" from line 263 */; ?>
<td align="right">CHI PHÍ NUÔI</td>
		<?php /* tag "td" from line 264 */; ?>
<td align="right"><?php /* tag "span" from line 264 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPaidsValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 265 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 267 */; ?>
<tr>
		<?php /* tag "td" from line 268 */; ?>
<td></td>
		<?php /* tag "td" from line 269 */; ?>
<td align="right">LƯỚI + CÔNG ĐOÀN</td>
		<?php /* tag "td" from line 270 */; ?>
<td align="right"><?php /* tag "span" from line 270 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getNetPrint')); ?>
</span></td>
		<?php /* tag "td" from line 271 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 273 */; ?>
<tr>
		<?php /* tag "td" from line 274 */; ?>
<td></td>
		<?php /* tag "td" from line 275 */; ?>
<td align="right">TIỀN THƯỞNG</td>
		<?php /* tag "td" from line 276 */; ?>
<td align="right"><?php /* tag "span" from line 276 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTipPrint')); ?>
</span></td>
		<?php /* tag "td" from line 277 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 279 */; ?>
<tr>
		<?php /* tag "td" from line 280 */; ?>
<td></td>
		<?php /* tag "td" from line 281 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 282 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 284 */; ?>
<tr>
		<?php /* tag "td" from line 285 */; ?>
<td></td>
		<?php /* tag "td" from line 286 */; ?>
<td align="right"><?php /* tag "B" from line 286 */; ?>
<B>(1) TỔNG CHI</B></td>
		<?php /* tag "td" from line 287 */; ?>
<td align="right"><?php /* tag "B" from line 287 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 288 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 290 */; ?>
<tr>
		<?php /* tag "td" from line 291 */; ?>
<td></td>
		<?php /* tag "td" from line 292 */; ?>
<td colspan="2" align="left">-</td>
		<?php /* tag "td" from line 293 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 295 */; ?>
<tr>
		<?php /* tag "td" from line 296 */; ?>
<td></td>
		<?php /* tag "td" from line 297 */; ?>
<td align="right">XUẤT BÁN THÀNH PHẨM</td>
		<?php /* tag "td" from line 298 */; ?>
<td align="right"><?php /* tag "span" from line 298 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCountExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 299 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 301 */; ?>
<tr>
		<?php /* tag "td" from line 302 */; ?>
<td></td>
		<?php /* tag "td" from line 303 */; ?>
<td align="right">GIÁ BÁN</td>
		<?php /* tag "td" from line 304 */; ?>
<td align="right"><?php /* tag "span" from line 304 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getPriceExportPrint')); ?>
</span></td>
		<?php /* tag "td" from line 305 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 307 */; ?>
<tr>
		<?php /* tag "td" from line 308 */; ?>
<td></td>
		<?php /* tag "td" from line 309 */; ?>
<td align="right"><?php /* tag "B" from line 309 */; ?>
<B>(2) TIỀN CÁ THÀNH PHẨM</B></td>
		<?php /* tag "td" from line 310 */; ?>
<td align="right"><?php /* tag "B" from line 310 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueImportPrint')); ?>
</B></td>
		<?php /* tag "td" from line 311 */; ?>
<td></td>
	</tr>	
	<?php /* tag "tr" from line 313 */; ?>
<tr>
		<?php /* tag "td" from line 314 */; ?>
<td></td>
		<?php /* tag "td" from line 315 */; ?>
<td align="right"><?php /* tag "B" from line 315 */; ?>
<B>(3) TIỀN CÁ NGỘP</B></td>
		<?php /* tag "td" from line 316 */; ?>
<td align="right"><?php /* tag "B" from line 316 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueWastePrint')); ?>
</B></td>
		<?php /* tag "td" from line 317 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 319 */; ?>
<tr>
		<?php /* tag "td" from line 320 */; ?>
<td></td>
		<?php /* tag "td" from line 321 */; ?>
<td align="right"><?php /* tag "B" from line 321 */; ?>
<B>(4) TIỀN CÁ VÉT</B></td>
		<?php /* tag "td" from line 322 */; ?>
<td align="right"><?php /* tag "B" from line 322 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueRemainPrint')); ?>
</B></td>
		<?php /* tag "td" from line 323 */; ?>
<td></td>
	</tr>
	
	<?php /* tag "tr" from line 326 */; ?>
<tr>
		<?php /* tag "td" from line 327 */; ?>
<td></td>
		<?php /* tag "td" from line 328 */; ?>
<td colspan="2" align="right">------------------------------------------------------------------</td>
		<?php /* tag "td" from line 329 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 331 */; ?>
<tr>
		<?php /* tag "td" from line 332 */; ?>
<td></td>
		<?php /* tag "td" from line 333 */; ?>
<td align="right"><?php /* tag "B" from line 333 */; ?>
<B>TỔNG THU = (4) + (3) + (2)</B></td>
		<?php /* tag "td" from line 334 */; ?>
<td align="right"><?php /* tag "B" from line 334 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValue1Print')); ?>
</B></td>
		<?php /* tag "td" from line 335 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 337 */; ?>
<tr>
		<?php /* tag "td" from line 338 */; ?>
<td></td>
		<?php /* tag "td" from line 339 */; ?>
<td align="right"><?php /* tag "B" from line 339 */; ?>
<B>LỢI NHUẬN = TỔNG THU - TỔNG CHI</B></td>
		<?php /* tag "td" from line 340 */; ?>
<td align="right"><?php /* tag "B" from line 340 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</B></td>
		<?php /* tag "td" from line 341 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 343 */; ?>
<tr>
		<?php /* tag "td" from line 344 */; ?>
<td colspan="3" align="center">
			(<?php /* tag "span" from line 345 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueStrPrint')); ?>
</span>)
		</td>
		<?php /* tag "td" from line 347 */; ?>
<td></td>
	</tr>
</table>
<?php /* tag "H3" from line 350 */; ?>
<H3>6. PHÂN TÍCH</H3>
<?php /* tag "table" from line 351 */; ?>
<table width="100%" border="0" cellpadding="2">
	<?php /* tag "tr" from line 352 */; ?>
<tr>
		<?php /* tag "td" from line 353 */; ?>
<td width="5%"></td>
		<?php /* tag "td" from line 354 */; ?>
<td width="30%" align="right">VỐC GỐC</td>
		<?php /* tag "td" from line 355 */; ?>
<td width="20%" align="right"><?php /* tag "span" from line 355 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportBasePrint')); ?>
</span></td>
		<?php /* tag "td" from line 356 */; ?>
<td width="45%"></td>
	</tr>
	<?php /* tag "tr" from line 358 */; ?>
<tr>
		<?php /* tag "td" from line 359 */; ?>
<td></td>
		<?php /* tag "td" from line 360 */; ?>
<td align="right">THỜI GIAN ĐẦU TƯ</td>
		<?php /* tag "td" from line 361 */; ?>
<td align="right"><?php /* tag "span" from line 361 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getTimesPrint')); ?>
</span></td>
		<?php /* tag "td" from line 362 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 364 */; ?>
<tr>
		<?php /* tag "td" from line 365 */; ?>
<td></td>
		<?php /* tag "td" from line 366 */; ?>
<td align="right">LÃI SUẤT NGÂN HÀNG</td>
		<?php /* tag "td" from line 367 */; ?>
<td align="right"><?php /* tag "span" from line 367 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBankRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 368 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 370 */; ?>
<tr>
		<?php /* tag "td" from line 371 */; ?>
<td></td>
		<?php /* tag "td" from line 372 */; ?>
<td align="right">TIỀN LÃI SUẤT NGÂN HÀNG</td>
		<?php /* tag "td" from line 373 */; ?>
<td align="right"><?php /* tag "span" from line 373 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValueExportBaseRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 374 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 376 */; ?>
<tr>
		<?php /* tag "td" from line 377 */; ?>
<td></td>
		<?php /* tag "td" from line 378 */; ?>
<td align="right">LÃI SUẤT KHI KINH DOANH</td>
		<?php /* tag "td" from line 379 */; ?>
<td align="right"><?php /* tag "span" from line 379 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getBusinessRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 380 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 382 */; ?>
<tr>
		<?php /* tag "td" from line 383 */; ?>
<td></td>
		<?php /* tag "td" from line 384 */; ?>
<td align="right">TIỀN LÃI KINH DOANH</td>
		<?php /* tag "td" from line 385 */; ?>
<td align="right"><?php /* tag "span" from line 385 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getValuePrint')); ?>
</span></td>
		<?php /* tag "td" from line 386 */; ?>
<td></td>
	</tr>
	<?php /* tag "tr" from line 388 */; ?>
<tr>
		<?php /* tag "td" from line 389 */; ?>
<td></td>
		<?php /* tag "td" from line 390 */; ?>
<td align="right">SO SÁNH TỈ LỆ LÃI</td>
		<?php /* tag "td" from line 391 */; ?>
<td align="right"><?php /* tag "span" from line 391 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PondSession, 'getCompareRatePrint')); ?>
</span></td>
		<?php /* tag "td" from line 392 */; ?>
<td></td>
	</tr>
</table><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/spnsoft/public_html/anhnguyetfarm/mvc/templates/ReportPondPrintGeneral.html (edit that file instead) */; ?>