<?php 
function tpl_5208fa8c_SellingCustomerOrder__rSBeVFlAcqjXcEfLw0Nwyg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

<?php /* tag "font" from line 7 */; ?>
<font size="10">
	<?php /* tag "table" from line 8 */; ?>
<table width="100%" cellpadding="1" cellspacing="0" border="0" bordercolor="#FFF">
		<?php /* tag "tr" from line 9 */; ?>
<tr>
			<?php /* tag "td" from line 10 */; ?>
<td width="33%" align="center">ĐẠI LÝ THỨC ĂN GIA SÚC MINH TÀI</td>
			<?php /* tag "td" from line 11 */; ?>
<td width="67%" rowspan="2" align="center">
				<?php /* tag "font" from line 12 */; ?>
<font size="24"><?php /* tag "b" from line 12 */; ?>
<b>HÓA ĐƠN BÁN HÀNG</b></font>
			</td>
		</tr>
		<?php /* tag "tr" from line 15 */; ?>
<tr>			
			<?php /* tag "td" from line 16 */; ?>
<td width="33%" align="center">170/10 Phạm Hùng - P9 - TPVL</td>			
		</tr>
		<?php /* tag "tr" from line 18 */; ?>
<tr>
			<?php /* tag "td" from line 19 */; ?>
<td width="33%" align="center">ĐT: 070.3824169 Fax: 3822748</td>
			<?php /* tag "td" from line 20 */; ?>
<td width="32%" align="right"><?php /* tag "font" from line 20 */; ?>
<font size="12">KHÁCH HÀNG:</font></td>
			<?php /* tag "td" from line 21 */; ?>
<td width="35%" align="left"><?php /* tag "font" from line 21 */; ?>
<font size="12"><?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPrefix')); ?>
</span> <?php /* tag "span" from line 21 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getName')); ?>
</span></font></td>
		</tr>
		<?php /* tag "tr" from line 23 */; ?>
<tr>			
			<?php /* tag "td" from line 24 */; ?>
<td width="33%" align="center">DĐ:(0932) 92 62 44</td>
			<?php /* tag "td" from line 25 */; ?>
<td width="67%" colspan="2" align="center"><?php /* tag "font" from line 25 */; ?>
<font size="12">ĐC:<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getAddress')); ?>
</span> - ĐT: <?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPhone')); ?>
</span></font></td>
		</tr>
	</table>
</font>
<?php /* tag "h5" from line 29 */; ?>
<h5></h5>
<?php /* tag "font" from line 30 */; ?>
<font size="12pt">
	<?php /* tag "table" from line 31 */; ?>
<table class="hor-minimalist-a" width="100%" cellpadding="2" cellspacing="0" border="0">
	<?php /* tag "thead" from line 32 */; ?>
<thead>
		<?php /* tag "tr" from line 33 */; ?>
<tr>
			<?php /* tag "th" from line 34 */; ?>
<th scope="col" width="6%" align="center"><?php /* tag "B" from line 34 */; ?>
<B>STT</B></th>
			<?php /* tag "th" from line 35 */; ?>
<th scope="col" width="22%" align="left"><?php /* tag "B" from line 35 */; ?>
<B>TÊN HÀNG</B></th>						
			<?php /* tag "th" from line 36 */; ?>
<th scope="col" width="14%" align="left"><?php /* tag "B" from line 36 */; ?>
<B>ĐƠN VỊ</B></th>
			<?php /* tag "th" from line 37 */; ?>
<th scope="col" width="7%" align="right"><?php /* tag "B" from line 37 */; ?>
<B>SL</B></th>
			<?php /* tag "th" from line 38 */; ?>
<th scope="col" width="12%" align="right"><?php /* tag "B" from line 38 */; ?>
<B>ĐƠN GIÁ</B></th>
			<?php /* tag "th" from line 39 */; ?>
<th scope="col" width="19%" align="right"><?php /* tag "B" from line 39 */; ?>
<B>KHUYẾN MÃI</B></th>
			<?php /* tag "th" from line 40 */; ?>
<th scope="col" width="20%" align="right"><?php /* tag "B" from line 40 */; ?>
<B>THÀNH TIỀN</B></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 43 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 44 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->ODED = new PHPTAL_RepeatController($ctx->path($ctx->OE, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->ODED as $ctx->ODED): ;
?>
<tr>
			<?php /* tag "td" from line 45 */; ?>
<td width="6%" align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'ODED/number')); ?>
</td>
			<?php /* tag "td" from line 46 */; ?>
<td width="22%" align="left"><?php echo phptal_escape($ctx->path($ctx->ODED, 'getResource/getName')); ?>
</td>
			<?php /* tag "td" from line 47 */; ?>
<td width="14%" align="left"><?php echo phptal_escape($ctx->path($ctx->ODED, 'getResource/getUnit/getName')); ?>
</td>
			<?php /* tag "td" from line 48 */; ?>
<td width="7%" align="right"><?php echo phptal_escape($ctx->path($ctx->ODED, 'getCountPrint')); ?>
</td>
			<?php /* tag "td" from line 49 */; ?>
<td width="12%" align="right"><?php echo phptal_escape($ctx->path($ctx->ODED, 'getPricePrint')); ?>
</td>
			<?php /* tag "td" from line 50 */; ?>
<td width="19%" align="right">
				<?php 
/* tag "span" from line 51 */ ;
if ($ctx->path($ctx->ODED, 'getExtra')):  ;
?>
<span><?php echo phptal_escape($ctx->path($ctx->ODED, 'getExtra/getValuePrint')); ?>
</span><?php endif; ?>
	
				<?php 
/* tag "span" from line 52 */ ;
if (!($ctx->path($ctx->ODED, 'getExtra'))):  ;
?>
<span>0</span><?php endif; ?>

			</td>
			<?php /* tag "td" from line 54 */; ?>
<td width="20%" align="right"><?php echo phptal_escape($ctx->path($ctx->ODED, 'getValuePrint')); ?>
</td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</tbody>
	<?php /* tag "tfoot" from line 57 */; ?>
<tfoot>
		<?php /* tag "tr" from line 58 */; ?>
<tr>
			<?php /* tag "th" from line 59 */; ?>
<th align="right" colspan="5" width="61%"></th>
			<?php /* tag "th" from line 60 */; ?>
<th align="right" width="19%">
				<?php /* tag "B" from line 61 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->OE, 'getValue2Print')); ?>
</B>
			</th>
			<?php /* tag "th" from line 63 */; ?>
<th align="right" width="20%">
				<?php /* tag "B" from line 64 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->OE, 'getValue1Print')); ?>
</B>
			</th>
		</tr>
	</tfoot>
	</table>	
	<?php /* tag "BR" from line 69 */; ?>
<BR/>
</font>

<?php /* tag "font" from line 72 */; ?>
<font size="12">
	<?php /* tag "table" from line 73 */; ?>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
		<?php /* tag "tr" from line 74 */; ?>
<tr>
			<?php /* tag "td" from line 75 */; ?>
<td width="80%" align="right">NỢ CŨ:</td>
			<?php /* tag "td" from line 76 */; ?>
<td width="20%" align="right">
				<?php /* tag "span" from line 77 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getOldDebt1Print')); ?>
</span>
			</td>
		</tr>
		<?php /* tag "tr" from line 80 */; ?>
<tr>
			<?php /* tag "td" from line 81 */; ?>
<td width="80%" align="right">TIỀN HÀNG:</td>
			<?php /* tag "td" from line 82 */; ?>
<td width="20%" align="right">
				+<?php /* tag "span" from line 83 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OE, 'getValue1Print')); ?>
</span>
			</td>
		</tr>
		<?php /* tag "tr" from line 86 */; ?>
<tr>
				<?php /* tag "td" from line 87 */; ?>
<td width="80%" align="right">KHUYẾN MÃI:</td>
				<?php /* tag "td" from line 88 */; ?>
<td width="20%" align="right">
					-<?php /* tag "span" from line 89 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OE, 'getValue2Print')); ?>
</span>
				</td>
		</tr>
		<?php /* tag "tr" from line 92 */; ?>
<tr>
			<?php /* tag "td" from line 93 */; ?>
<td width="80%" align="right">TRẢ TRƯỚC:</td>
			<?php /* tag "td" from line 94 */; ?>
<td align="right" width="20%">
				<?php /* tag "span" from line 95 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getPaidsTrackingValue1Print')); ?>
</span>
			</td>
		</tr>		
		<?php /* tag "tr" from line 98 */; ?>
<tr>
			<?php /* tag "td" from line 99 */; ?>
<td width="80%" align="right">
				____________________
			</td>
			<?php /* tag "td" from line 102 */; ?>
<td width="20%" align="left">							
				_________________				
			</td>
		</tr>
		<?php /* tag "tr" from line 106 */; ?>
<tr>
			<?php /* tag "td" from line 107 */; ?>
<td align="right"><?php /* tag "B" from line 107 */; ?>
<B>NỢ MỚI:</B></td>
			<?php /* tag "td" from line 108 */; ?>
<td align="right">
				<?php /* tag "font" from line 109 */; ?>
<font size="14px">
					<?php /* tag "B" from line 110 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Customer, 'getNewDebt1Print')); ?>
</B>
				</font>
			</td>
		</tr>
	</table>
	<?php /* tag "div" from line 115 */; ?>
<div align="right"><?php /* tag "font" from line 115 */; ?>
<font size="14">(<?php /* tag "span" from line 115 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Customer, 'getNewDebt1StrPrint')); ?>
</span> đồng)</font></div>
	<?php /* tag "BR" from line 116 */; ?>
<BR/>
	<?php /* tag "table" from line 117 */; ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<?php /* tag "tr" from line 118 */; ?>
<tr>
			<?php /* tag "td" from line 119 */; ?>
<td width="30%" align="center"></td>				
			<?php /* tag "td" from line 120 */; ?>
<td width="30%" align="center"></td>
			<?php /* tag "td" from line 121 */; ?>
<td width="40%" align="center"><?php /* tag "span" from line 121 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->OE, 'getDatePrint1')); ?>
</span></td>
		</tr>		
		<?php /* tag "tr" from line 123 */; ?>
<tr>
			<?php /* tag "td" from line 124 */; ?>
<td align="center">
				Người lập phiếu
			</td>
			<?php /* tag "td" from line 127 */; ?>
<td align="center">
				Người nhận hàng
			</td>
			<?php /* tag "td" from line 130 */; ?>
<td align="center">
				Đại lý thức ăn gia súc Minh Tài
			</td>
		</tr>		
	</table>
</font><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\MyCodePHP\minhtai\mvc\templates\SellingCustomerOrderPrint.html (edit that file instead) */; ?>