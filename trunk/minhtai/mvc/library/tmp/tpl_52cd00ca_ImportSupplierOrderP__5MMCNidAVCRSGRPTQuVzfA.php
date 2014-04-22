<?php 
function tpl_52cd00ca_ImportSupplierOrderP__5MMCNidAVCRSGRPTQuVzfA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<B>ĐẠI LÝ THỨC ĂN GIA SÚC MINH TÀI</B></td>
			<?php /* tag "td" from line 6 */; ?>
<td width="50%" align="right"><?php /* tag "B" from line 6 */; ?>
<B>PHIẾU NHẬP HÀNG</B></td>
		</tr>
		<?php /* tag "tr" from line 8 */; ?>
<tr>			
			<?php /* tag "td" from line 9 */; ?>
<td width="50%" align="left">ĐC: Phạm Hùng, P9, TP.VL</td>
			<?php /* tag "td" from line 10 */; ?>
<td width="50%" align="right">NHÀ CUNG CẤP <?php /* tag "span" from line 10 */; ?>
<span><?php echo phptal_escape(mb_strtoupper($ctx->Supplier->getName(),'UTF8')); ?>
</span></td>
		</tr>
		<?php /* tag "tr" from line 12 */; ?>
<tr>			
			<?php /* tag "td" from line 13 */; ?>
<td width="50%" align="left">ĐT: (0933) 66 99 07</td>
			<?php /* tag "td" from line 14 */; ?>
<td width="50%" align="right"><?php /* tag "span" from line 14 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OI, 'getStore/getName')); ?>
</span> / <?php /* tag "span" from line 14 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OI, 'getDatePrint')); ?>
</span></td>
		</tr>
	</table>
	<?php /* tag "BR" from line 17 */; ?>
<BR/>
	<?php /* tag "table" from line 18 */; ?>
<table width="100%" border="1" cellpadding="2">
		<?php /* tag "tr" from line 19 */; ?>
<tr>
			<?php /* tag "th" from line 20 */; ?>
<th width="8%" align="center"><?php /* tag "B" from line 20 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 21 */; ?>
<th width="27%" align="left"><?php /* tag "B" from line 21 */; ?>
<B>TÊN</B></th>
			<?php /* tag "th" from line 22 */; ?>
<th width="15%" align="right"><?php /* tag "B" from line 22 */; ?>
<B>SỐ LƯỢNG</B></th>
			<?php /* tag "th" from line 23 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 23 */; ?>
<B>ĐƠN GIÁ</B></th>
			<?php /* tag "th" from line 24 */; ?>
<th width="25%" align="right"><?php /* tag "B" from line 24 */; ?>
<B>THÀNH TIỀN</B></th>
		</tr>
		<?php 
/* tag "tr" from line 26 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->OI, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
			<?php /* tag "td" from line 27 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</td>
			<?php /* tag "td" from line 28 */; ?>
<td>
				<?php /* tag "span" from line 29 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</span>
				(<?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getUnit/getName')); ?>
</span>)
			</td>
			<?php /* tag "td" from line 32 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</td>
			<?php /* tag "td" from line 33 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</td>
			<?php /* tag "td" from line 34 */; ?>
<td align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "tr" from line 36 */; ?>
<tr>
			<?php /* tag "th" from line 37 */; ?>
<th align="right" colspan="4">TỔNG CỘNG</th>
			<?php /* tag "th" from line 38 */; ?>
<th align="right" colspan="1"><?php echo phptal_escape($ctx->path($ctx->OI, 'getValuePrint')); ?>
</th>
		</tr>
	</table>
	<?php /* tag "span" from line 41 */; ?>
<span align="right">( <?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OI, 'getValueStrPrint')); ?>
</span> )</span><?php /* tag "br" from line 41 */; ?>
<br/>
	<?php /* tag "table" from line 42 */; ?>
<table width="100%" border="0" cellpadding="2">
		<?php /* tag "tr" from line 43 */; ?>
<tr>
			<?php /* tag "td" from line 44 */; ?>
<td width="35%" align="center"></td>
			<?php /* tag "td" from line 45 */; ?>
<td width="25%" align="center"></td>
			<?php /* tag "td" from line 46 */; ?>
<td width="40%" align="center"><?php /* tag "span" from line 46 */; ?>
<span><?php echo phptal_escape($ctx->DateCurrent); ?>
</span></td>
		</tr>
		<?php /* tag "tr" from line 48 */; ?>
<tr>
			<?php /* tag "td" from line 49 */; ?>
<td width="35%" align="center">NGƯỜI LẬP PHIẾU</td>
			<?php /* tag "td" from line 50 */; ?>
<td width="25%" align="center"></td>
			<?php /* tag "td" from line 51 */; ?>
<td width="40%" align="center">ĐẠI LÝ</td>
		</tr>		
	</table>
</body><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\ImportSupplierOrderPrint.html (edit that file instead) */; ?>