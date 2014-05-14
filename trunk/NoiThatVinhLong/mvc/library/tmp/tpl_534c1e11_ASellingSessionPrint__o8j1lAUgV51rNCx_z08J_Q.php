<?php 
function tpl_534c1e11_ASellingSessionPrint__o8j1lAUgV51rNCx_z08J_Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "head" from line 1 */ ;
?>
<head>
	<?php /* tag "meta" from line 2 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<?php /* tag "style" from line 3 */; ?>
<style>
	@media print{
		.header, .hide { visibility: hidden };
		body { font-size: 9px };
		margin: 0mm 0mm 0mm 0mm;
	}	 
	@media screen {
		body { font-size: 9px }
	}
	@media screen, print {
		body { line-height: 1.0 }
	}
	@page  
	{ 
		size: auto;   /* auto is the initial value */ 
		/* this affects the margin in the printer settings */ 
		margin: 0mm 0mm 0mm 0mm;
	}
	</style>
</head>
<?php /* tag "body" from line 23 */; ?>
<body onload="window.print()">
<?php /* tag "table" from line 24 */; ?>
<table width="100%" cellpadding="1" cellspacing="0" border="0">
	<?php /* tag "tr" from line 25 */; ?>
<tr>
		<?php /* tag "td" from line 26 */; ?>
<td width="100%" align="center" style="font-size:14pt;font-family:Arial; line-height:14pt;padding-top:0px">
			<?php /* tag "B" from line 27 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->ConfigName, 'getValue')); ?>
</B>
		</td>
	</tr>
	<?php /* tag "tr" from line 30 */; ?>
<tr>
		<?php /* tag "td" from line 31 */; ?>
<td width="100%" align="center" style="font-size:9pt;font-family:Arial; line-height:11pt;">			
			<?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ConfigAddress, 'getValue')); ?>
</span>
		</td>
	</tr>
	<?php /* tag "tr" from line 35 */; ?>
<tr>
		<?php /* tag "td" from line 36 */; ?>
<td width="100%" align="center" style="font-size:10pt;font-family:Arial; line-height:11pt">
			<?php /* tag "span" from line 37 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->ConfigPhone, 'getValue')); ?>
</span>
		</td>
	</tr>
	<?php /* tag "tr" from line 40 */; ?>
<tr>
		<?php /* tag "td" from line 41 */; ?>
<td width="100%" align="center" style="font-size:13pt;font-family:Arial; line-height:14pt">
			<?php /* tag "b" from line 42 */; ?>
<b>PHIẾU TÍNH TIỀN</b>
		</td>
	</tr>
</table>
<?php /* tag "br" from line 46 */; ?>
<br/>
<?php /* tag "table" from line 47 */; ?>
<table width="100%" cellpadding="1" cellspacing="0" border="0" style="font-size:10pt;font-family:Arial; line-height:11pt;padding-top:0px">
	<?php /* tag "tr" from line 48 */; ?>
<tr>
		<?php /* tag "td" from line 49 */; ?>
<td width="55%" align="left">							
			<?php /* tag "span" from line 50 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span>
		</td>
		<?php /* tag "td" from line 52 */; ?>
<td width="45%" align="right">
			<?php /* tag "span" from line 53 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getCustomer/getName')); ?>
</span>
		</td>
	</tr>	
</table>
<?php /* tag "br" from line 57 */; ?>
<br/>
<?php /* tag "table" from line 58 */; ?>
<table width="100%" cellpadding="2" cellspacing="0" border="1" style="font-size:10pt;font-family:Arial; line-height:11pt;padding-bottom:0px">
	<?php /* tag "thead" from line 59 */; ?>
<thead>
		<?php /* tag "tr" from line 60 */; ?>
<tr>
			<?php /* tag "th" from line 61 */; ?>
<th width="42%" align="left"><?php /* tag "b" from line 61 */; ?>
<b>TÊN HÀNG</b></th>
			<?php /* tag "th" from line 62 */; ?>
<th width="11%" align="right"><?php /* tag "b" from line 62 */; ?>
<b>SL</b></th>
			<?php /* tag "th" from line 63 */; ?>
<th width="21%" align="right"><?php /* tag "b" from line 63 */; ?>
<b>Đ.GIÁ</b></th>
			<?php /* tag "th" from line 64 */; ?>
<th width="26%" align="right"><?php /* tag "b" from line 64 */; ?>
<b>T.TIỀN</b></th>
		</tr>
	</thead>
	<?php /* tag "tbody" from line 67 */; ?>
<tbody>
		<?php 
/* tag "tr" from line 68 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
			<?php /* tag "td" from line 69 */; ?>
<td width="42%" align="left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</td>
			<?php /* tag "td" from line 70 */; ?>
<td width="11%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</td>
			<?php /* tag "td" from line 71 */; ?>
<td width="21%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</td>
			<?php /* tag "td" from line 72 */; ?>
<td width="26%" align="right"><?php /* tag "span" from line 72 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span></td>
		</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
		
	</tbody>
</table>	
<?php /* tag "table" from line 76 */; ?>
<table width="100%" cellpadding="2" cellspacing="0" border="0" style="font-size:12pt;font-family:Arial; line-height:12pt;padding-bottom:2px;">
	<?php /* tag "tbody" from line 77 */; ?>
<tbody>		
		<?php /* tag "tr" from line 78 */; ?>
<tr>
			<?php /* tag "td" from line 79 */; ?>
<td align="right" colspan="5" width="100%">
				TỔNG TIỀN: <?php /* tag "b" from line 80 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</b>
			</td>
		</tr>
		<?php /* tag "tr" from line 83 */; ?>
<tr>
			<?php /* tag "td" from line 84 */; ?>
<td align="right" colspan="5" width="100%">
				<?php /* tag "p" from line 85 */; ?>
<p style="font-size:10pt;font-family:Arial; line-height:10pt;">( <?php /* tag "span" from line 85 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getValueStrPrint')); ?>
</span> )</p>
			</td>
		</tr>
		<?php /* tag "tr" from line 88 */; ?>
<tr><?php /* tag "td" from line 88 */; ?>
<td></td></tr>
		<?php /* tag "tr" from line 89 */; ?>
<tr>
			<?php /* tag "td" from line 90 */; ?>
<td align="center" colspan="5" width="100%">				
				<?php /* tag "B" from line 91 */; ?>
<B style="font-size:10pt;font-family:Arial; line-height:12pt;">CÁM ƠN QUÍ KHÁCH. HẸN GẶP LẠI !</B>
			</td>
		</tr>
	</tbody>
</table>
</body><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\ASellingSessionPrint.html (edit that file instead) */; ?>