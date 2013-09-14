<?php 
function tpl_520d1ed4_SellingOrderPrint__7jqlno3P6qvWT2UbJrWuqg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "table" from line 1 */ ;
?>
<table width="100%" cellpadding="1" cellspacing="0" border="0" bordercolor="#FFF">
	<?php /* tag "tr" from line 2 */; ?>
<tr>
		<?php /* tag "td" from line 3 */; ?>
<td align="center"><?php /* tag "font" from line 3 */; ?>
<font size="10pt"><?php /* tag "b" from line 3 */; ?>
<b>SIÊU THỊ TỰ CHỌN VỊ QUÊ</b></font></td>
	</tr>
	<?php /* tag "tr" from line 5 */; ?>
<tr>		
		<?php /* tag "td" from line 6 */; ?>
<td align="center"><?php /* tag "font" from line 6 */; ?>
<font size="10pt">Nguyễn Huệ, P2, Vĩnh Long</font></td>
	</tr>
	<?php /* tag "tr" from line 8 */; ?>
<tr>
		<?php /* tag "td" from line 9 */; ?>
<td align="center"><?php /* tag "font" from line 9 */; ?>
<font size="13pt"><?php /* tag "b" from line 9 */; ?>
<b>PHIẾU TÍNH TIỀN</b></font></td>
	</tr>
</table>
<?php /* tag "br" from line 12 */; ?>
<br/><?php /* tag "br" from line 12 */; ?>
<br/>
<?php /* tag "font" from line 13 */; ?>
<font size="10pt">	
	<?php /* tag "table" from line 14 */; ?>
<table style="padding-top:0px;" width="100%" cellpadding="1" cellspacing="0" border="0" bordercolor="#FFF">
		<?php /* tag "tr" from line 15 */; ?>
<tr>
			<?php /* tag "td" from line 16 */; ?>
<td width="50%" align="left">
				<?php /* tag "span" from line 17 */; ?>
<span><?php echo 'QUẦY 1'; ?>
</span>
			</td>
			<?php /* tag "td" from line 19 */; ?>
<td width="50%" align="right">
				<?php /* tag "span" from line 20 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getDatePrint')); ?>
</span>
			</td>
		</tr>
		<?php /* tag "tr" from line 23 */; ?>
<tr>
			<?php /* tag "td" from line 24 */; ?>
<td width="50%" align="left">				
				ID: <?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getId')); ?>
</span>
			</td>
			<?php /* tag "td" from line 27 */; ?>
<td width="50%" align="right">
				NV: <?php /* tag "span" from line 28 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getUser/getName')); ?>
</span>
			</td>
		</tr>		
	</table>
</font>
<?php /* tag "br" from line 33 */; ?>
<br/>
<?php /* tag "font" from line 34 */; ?>
<font size="9pt">
	<?php /* tag "table" from line 35 */; ?>
<table style="padding-bottom:0px;" width="100%" cellpadding="2" cellspacing="0" border="1">
		<?php /* tag "thead" from line 36 */; ?>
<thead>
			<?php /* tag "tr" from line 37 */; ?>
<tr>
				<?php /* tag "th" from line 38 */; ?>
<th width="42%"><?php /* tag "b" from line 38 */; ?>
<b>TÊN HÀNG</b></th>
				<?php /* tag "th" from line 39 */; ?>
<th width="11%" align="right"><?php /* tag "b" from line 39 */; ?>
<b>SL</b></th>
				<?php /* tag "th" from line 40 */; ?>
<th width="21%" align="right"><?php /* tag "b" from line 40 */; ?>
<b>Đ.GIÁ</b></th>			
				<?php /* tag "th" from line 41 */; ?>
<th width="26%" align="right"><?php /* tag "b" from line 41 */; ?>
<b>T.TIỀN</b></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 44 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 45 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Order, 'getDetailAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
				<?php /* tag "td" from line 46 */; ?>
<td width="42%" align="left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getResource/getName')); ?>
</td>
				<?php /* tag "td" from line 47 */; ?>
<td width="11%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</td>
				<?php /* tag "td" from line 48 */; ?>
<td width="21%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</td>
				<?php /* tag "td" from line 49 */; ?>
<td width="26%" align="right"><?php /* tag "span" from line 49 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
		
		</tbody>
	</table>
	<?php /* tag "table" from line 53 */; ?>
<table style="padding-bottom:2px;" width="100%" cellpadding="2" cellspacing="0" border="0">
		<?php /* tag "tbody" from line 54 */; ?>
<tbody>												
			<?php /* tag "tr" from line 55 */; ?>
<tr>
				<?php /* tag "td" from line 56 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "font" from line 57 */; ?>
<font align="right" size="12pt">TỔNG TIỀN: <?php /* tag "b" from line 57 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Order, 'getValuePrint')); ?>
</b></font>
				</td>
			</tr>
			<?php /* tag "tr" from line 60 */; ?>
<tr>
				<?php /* tag "td" from line 61 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "p" from line 62 */; ?>
<p>( <?php /* tag "span" from line 62 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Order, 'getValueStrPrint')); ?>
</span> )</p>
				</td>
			</tr>			
			<?php /* tag "tr" from line 65 */; ?>
<tr><?php /* tag "td" from line 65 */; ?>
<td></td></tr>
			<?php /* tag "tr" from line 66 */; ?>
<tr><?php /* tag "td" from line 66 */; ?>
<td></td></tr>
			<?php /* tag "tr" from line 67 */; ?>
<tr>
				<?php /* tag "td" from line 68 */; ?>
<td align="center" colspan="5" width="100%">
					<?php /* tag "font" from line 69 */; ?>
<font align="center" size="8pt">XIN CẢM ƠN QUÍ KHÁCH, HẸN GẶP LẠI</font>
				</td>
			</tr>
		</tbody>
	</table>	
</font><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SellingOrderPrint.html (edit that file instead) */; ?>