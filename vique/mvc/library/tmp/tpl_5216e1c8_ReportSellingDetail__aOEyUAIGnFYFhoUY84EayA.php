<?php 
function tpl_5216e1c8_ReportSellingDetail__aOEyUAIGnFYFhoUY84EayA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "body" from line 1 */ ;
?>
<body>
	<?php /* tag "BR" from line 2 */; ?>
<BR/>
	<?php /* tag "table" from line 3 */; ?>
<table width="100%" border="0" cellpadding="2">
		<?php /* tag "tr" from line 4 */; ?>
<tr>			
			<?php /* tag "td" from line 5 */; ?>
<td width="50%" align="left"><?php /* tag "B" from line 5 */; ?>
<B>SIÊU THỊ MINI TỰ CHỌN VỊ QUÊ</B></td>
			<?php /* tag "td" from line 6 */; ?>
<td width="50%" align="left"><?php /* tag "B" from line 6 */; ?>
<B align="right"><?php echo phptal_escape($ctx->Title); ?>
</B></td>
		</tr>
		<?php /* tag "tr" from line 8 */; ?>
<tr>			
			<?php /* tag "td" from line 9 */; ?>
<td width="50%" align="left">ĐC: Nguyễn Huệ, P2, TP.VL</td>
			<?php /* tag "td" from line 10 */; ?>
<td width="50%" align="right">Lưu hành nội bộ</td>
		</tr>
		<?php /* tag "tr" from line 12 */; ?>
<tr>			
			<?php /* tag "td" from line 13 */; ?>
<td width="50%" align="left">ĐT: (0703) xxx xxx</td>
			<?php /* tag "td" from line 14 */; ?>
<td width="50%" align="left"></td>
		</tr>
	</table>	
	<?php 
/* tag "span" from line 17 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Data = new PHPTAL_RepeatController($ctx->DataAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Data as $ctx->Data): ;
?>
<span>
	<?php /* tag "br" from line 18 */; ?>
<br/>
	<?php 
/* tag "table" from line 19 */ ;
if ($ctx->Data[1]):  ;
?>
<table width="100%" border="1" cellpadding="2">
		<?php /* tag "tr" from line 20 */; ?>
<tr>
			<?php /* tag "th" from line 21 */; ?>
<th align="left" colspan="5" width="100%"><?php /* tag "H3" from line 21 */; ?>
<H3>NGÀY <?php /* tag "b" from line 21 */; ?>
<b><?php echo phptal_escape($ctx->Data[0]); ?>
</b></H3></th>
		</tr>
		<?php /* tag "tr" from line 23 */; ?>
<tr>
			<?php /* tag "th" from line 24 */; ?>
<th width="5%"><?php /* tag "B" from line 24 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 25 */; ?>
<th width="20%" align="left"><?php /* tag "B" from line 25 */; ?>
<B>THỜI GIAN</B></th>			
			<?php /* tag "th" from line 26 */; ?>
<th width="20%" align="right"><?php /* tag "B" from line 26 */; ?>
<B>NHÂN VIÊN</B></th>			
			<?php /* tag "th" from line 27 */; ?>
<th width="30%" align="left"><?php /* tag "B" from line 27 */; ?>
<B>GHI CHÚ</B></th>			
			<?php /* tag "th" from line 28 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 28 */; ?>
<B>GIÁ TRỊ</B></th>
		</tr>
		<?php 
/* tag "tr" from line 30 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->D = new PHPTAL_RepeatController($ctx->Data[1])
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->D as $ctx->D): ;
?>
<tr>
			<?php /* tag "td" from line 31 */; ?>
<td align="center"><?php echo phptal_escape($ctx->D[0]); ?>
</td>
			<?php /* tag "td" from line 32 */; ?>
<td align="left"><?php echo phptal_escape($ctx->D[1]); ?>
</td>			
			<?php /* tag "td" from line 33 */; ?>
<td align="right"><?php echo phptal_escape($ctx->D[2]); ?>
</td>
			<?php /* tag "td" from line 34 */; ?>
<td align="left"><?php echo phptal_escape($ctx->D[3]); ?>
</td>
			<?php /* tag "td" from line 35 */; ?>
<td align="right"><?php echo phptal_escape($ctx->D[4]); ?>
</td>			
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "tr" from line 37 */; ?>
<tr>
			<?php /* tag "th" from line 38 */; ?>
<th align="right" colspan="4"><?php /* tag "H3" from line 38 */; ?>
<H3>TỔNG</H3></th>
			<?php /* tag "th" from line 39 */; ?>
<th align="right"><?php /* tag "B" from line 39 */; ?>
<B><?php echo phptal_escape($ctx->Data[2]); ?>
</B></th>
		</tr>
	</table><?php endif; ?>

	</span><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	
	<?php /* tag "table" from line 44 */; ?>
<table width="100%" border="0" cellpadding="2">
		<?php /* tag "tr" from line 45 */; ?>
<tr>
			<?php /* tag "td" from line 46 */; ?>
<td width="65%" align="right"><?php /* tag "h2" from line 46 */; ?>
<h2>TỔNG CỘNG</h2></td>
			<?php /* tag "td" from line 47 */; ?>
<td width="35%" align="right"><?php /* tag "h2" from line 47 */; ?>
<h2><?php echo phptal_escape($ctx->NTotal->formatCurrency() . ' đ'); ?>
</h2></td>
		</tr>
		<?php /* tag "tr" from line 49 */; ?>
<tr>
			<?php /* tag "td" from line 50 */; ?>
<td width="100%" align="right">(<?php /* tag "i" from line 50 */; ?>
<i><?php echo phptal_escape($ctx->path($ctx->NTotal, 'readDigit')); ?>
</i>)</td>
		</tr>
		<?php /* tag "tr" from line 52 */; ?>
<tr>
			<?php /* tag "td" from line 53 */; ?>
<td width="35%" align="center"></td>
			<?php /* tag "td" from line 54 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 55 */; ?>
<td width="35%" align="center"><?php echo phptal_escape($ctx->DateCurrent); ?>
</td>
		</tr>
		<?php /* tag "tr" from line 57 */; ?>
<tr>
			<?php /* tag "td" from line 58 */; ?>
<td width="35%" align="center">BÁN HÀNG</td>
			<?php /* tag "td" from line 59 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 60 */; ?>
<td width="35%" align="center">QUẢN LÝ</td>
		</tr>
		<?php /* tag "tr" from line 62 */; ?>
<tr><?php /* tag "td" from line 62 */; ?>
<td width="35%"></td><?php /* tag "td" from line 62 */; ?>
<td width="30%"></td><?php /* tag "td" from line 62 */; ?>
<td width="35%"></td></tr>
		<?php /* tag "tr" from line 63 */; ?>
<tr><?php /* tag "td" from line 63 */; ?>
<td width="35%"></td><?php /* tag "td" from line 63 */; ?>
<td width="30%"></td><?php /* tag "td" from line 63 */; ?>
<td width="35%"></td></tr>
		<?php /* tag "tr" from line 64 */; ?>
<tr><?php /* tag "td" from line 64 */; ?>
<td width="35%"></td><?php /* tag "td" from line 64 */; ?>
<td width="30%"></td><?php /* tag "td" from line 64 */; ?>
<td width="35%"></td></tr>
		<?php /* tag "tr" from line 65 */; ?>
<tr>
			<?php /* tag "td" from line 66 */; ?>
<td width="35%" align="center"></td>
			<?php /* tag "td" from line 67 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 68 */; ?>
<td width="35%" align="center"></td>
		</tr>
	</table>
</body><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\ReportSellingDetail.html (edit that file instead) */; ?>