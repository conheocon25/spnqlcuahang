<?php 
function tpl_533d2c61_PayRollPrint__RkbNMdwlvgWTwVtdNQwATw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<td width="100%" align="center">
			<?php /* tag "B" from line 27 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->ConfigName, 'getValue')); ?>
</B>
		</td>
	</tr>	
	<?php /* tag "tr" from line 30 */; ?>
<tr>
		<?php /* tag "td" from line 31 */; ?>
<td width="100%" align="center">
			<?php /* tag "b" from line 32 */; ?>
<b>CHI TIẾT LƯƠNG <?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape(mb_strtoupper($ctx->PayRoll->getEmployee()->getName(), 'UTF8')); ?>
</span></b>
		</td>
	</tr>
	<?php /* tag "tr" from line 35 */; ?>
<tr>
		<?php /* tag "td" from line 36 */; ?>
<td width="100%" align="center">
			<?php /* tag "B" from line 37 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Track, 'getName')); ?>
</B>
		</td>
	</tr>	
</table>
<?php /* tag "br" from line 41 */; ?>
<br/>
<?php /* tag "font" from line 42 */; ?>
<font size="9pt">
	<?php /* tag "table" from line 43 */; ?>
<table style="padding-bottom:0px;" width="100%" cellpadding="2" cellspacing="0" border="0">		
		<?php /* tag "tbody" from line 44 */; ?>
<tbody>
			<?php /* tag "tr" from line 45 */; ?>
<tr>
				<?php /* tag "td" from line 46 */; ?>
<td width="60%" align="left">1. LƯƠNG CB</td>
				<?php /* tag "td" from line 47 */; ?>
<td width="40%" align="right"><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getBaseValuePrint')); ?>
</td>
			</tr>						
			<?php /* tag "tr" from line 49 */; ?>
<tr>
				<?php /* tag "td" from line 50 */; ?>
<td width="60%" align="left">2. THƯỞNG</td>
				<?php /* tag "td" from line 51 */; ?>
<td width="40%" align="right"><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getExtraValuePrint')); ?>
</td>
			</tr>
			<?php /* tag "tr" from line 53 */; ?>
<tr>
				<?php /* tag "td" from line 54 */; ?>
<td width="60%" align="left">3. PHẠT</td>
				<?php /* tag "td" from line 55 */; ?>
<td width="40%" align="right"><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getPunishValuePrint')); ?>
</td>
			</tr>			
			<?php /* tag "tr" from line 57 */; ?>
<tr>
				<?php /* tag "td" from line 58 */; ?>
<td width="60%" align="left">4. NGHỈ (<?php /* tag "span" from line 58 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getAbsentPrint')); ?>
</span>)</td>
				<?php /* tag "td" from line 59 */; ?>
<td width="40%" align="right"><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getAbsentValuePrint')); ?>
</td>
			</tr>
			<?php /* tag "tr" from line 61 */; ?>
<tr>
				<?php /* tag "td" from line 62 */; ?>
<td width="100%" align="left"><?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getNote')); ?>
</span></td>
			</tr>
			<?php /* tag "tr" from line 64 */; ?>
<tr>
				<?php /* tag "td" from line 65 */; ?>
<td width="60%" align="left">5. ỨNG</td>
				<?php /* tag "td" from line 66 */; ?>
<td width="40%" align="right"></td>
			</tr>
			<?php 
/* tag "tr" from line 68 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Paid = new PHPTAL_RepeatController($ctx->PaidAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Paid as $ctx->Paid): ;
?>
<tr>
				<?php /* tag "td" from line 69 */; ?>
<td width="60%" align="left">
					<?php /* tag "span" from line 70 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getDatePrint')); ?>
</span> - 
					<?php /* tag "span" from line 71 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Paid, 'getNote')); ?>
</span>
				</td>				
				<?php /* tag "td" from line 73 */; ?>
<td width="40%" align="right"><?php echo phptal_escape($ctx->path($ctx->Paid, 'getValuePrint')); ?>
</td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			<?php /* tag "tr" from line 75 */; ?>
<tr>
				<?php /* tag "td" from line 76 */; ?>
<td width="60%" align="right">---------------------------</td>
				<?php /* tag "td" from line 77 */; ?>
<td width="40%" align="left">----------</td>
			</tr>
			<?php /* tag "tr" from line 79 */; ?>
<tr>
				<?php /* tag "td" from line 80 */; ?>
<td width="60%" align="left">THỰC LÃNH</td>
				<?php /* tag "td" from line 81 */; ?>
<td width="40%" align="right">
					<?php /* tag "B" from line 82 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PayRoll, 'getValuePrint')); ?>
</B>
				</td>
			</tr>
		</tbody>		
	</table>	
</font>
</body><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\PayRollPrint.html (edit that file instead) */; ?>