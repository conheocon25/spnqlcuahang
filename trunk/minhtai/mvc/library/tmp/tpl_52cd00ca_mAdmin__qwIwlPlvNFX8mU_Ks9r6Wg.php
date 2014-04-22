<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_ReportHeader(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "table" from line 245 */; ?>
<table width="100%" border="0" cellpadding="2">
			<?php /* tag "tr" from line 246 */; ?>
<tr>			
				<?php /* tag "td" from line 247 */; ?>
<td width="50%" align="left"><?php /* tag "B" from line 247 */; ?>
<B>ĐẠI LÝ THỨC ĂN GIA SÚC MINH TÀI</B></td>
				<?php /* tag "td" from line 248 */; ?>
<td width="50%" align="left"><?php /* tag "B" from line 248 */; ?>
<B align="right"><?php echo phptal_escape($ctx->Title); ?>
</B></td>
			</tr>
			<?php /* tag "tr" from line 250 */; ?>
<tr>
				<?php /* tag "td" from line 251 */; ?>
<td width="50%" align="left">Phạm Hùng P9 Vĩnh Long</td>
				<?php /* tag "td" from line 252 */; ?>
<td width="50%" align="right">Lưu hành nội bộ</td>
			</tr>
			<?php /* tag "tr" from line 254 */; ?>
<tr>
				<?php /* tag "td" from line 255 */; ?>
<td width="50%" align="left">0933 66 99 07 </td>
				<?php /* tag "td" from line 256 */; ?>
<td width="50%" align="left"></td>
			</tr>
		</table>
	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_StyleTools(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="style-switcher">
		<?php /* tag "i" from line 232 */; ?>
<i class="glyphicon glyphicon-arrow-left"></i>
		<?php /* tag "span" from line 233 */; ?>
<span>Giao diện:</span>
		<?php /* tag "a" from line 234 */; ?>
<a href="/setting/theme/grey" alt="#grey" style="background-color:#555555;border-color:#aaaaaa;cursor:pointer;"></a>
		<?php /* tag "a" from line 235 */; ?>
<a href="/setting/theme/light-blue" alt="#light-blue" style="background-color:#8399b0;cursor:pointer;"></a>
		<?php /* tag "a" from line 236 */; ?>
<a href="/setting/theme/blue" alt="#blue" style="background-color:#2D2F57;cursor:pointer;"></a>
		<?php /* tag "a" from line 237 */; ?>
<a href="/setting/theme/red" alt="#red" style="background-color:#673232;cursor:pointer;"></a>
		<?php /* tag "a" from line 238 */; ?>
<a href="/setting/theme/red-green" alt="#red-green" style="background-image:url('/mvc/templates/theme/cms/img/demo/red-green.png');background-repeat:no-repeat;cursor:pointer;"></a>
	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row">
		<?php /* tag "div" from line 223 */; ?>
<div id="footer" class="col-12" style="text-align:right; padding-right:20px;">
			2009 - 2013 &copy; <?php /* tag "a" from line 224 */; ?>
<a href="https://www.spn-soft.com">SPN Group</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_MenuSetting(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="sidebar">				
		<?php 
/* tag "ul" from line 165 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 166 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Category'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 167 */ ;
if (null !== ($_tmp_2 = ('/setting/category'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 168 */; ?>
<i class="glyphicons-truck"></i>DANH MỤC
				</a>
			</li>
			<?php 
/* tag "li" from line 171 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Store'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 172 */ ;
if (null !== ($_tmp_2 = ('/setting/store'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 173 */; ?>
<i class="glyphicons-show_big_thumbnails"></i>KHO
				</a>
			</li>
			<?php 
/* tag "li" from line 176 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Supplier'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 177 */ ;
if (null !== ($_tmp_2 = ('/setting/supplier'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 178 */; ?>
<i class="glyphicons-truck"></i>NHÀ CUNG CẤP
				</a>
			</li>
			<?php 
/* tag "li" from line 181 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='User'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 182 */ ;
if (null !== ($_tmp_2 = ('/setting/user'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 183 */; ?>
<i class="glyphicons-user"></i>NGƯỜI DÙNG 
				</a>
			</li>			
			<?php 
/* tag "li" from line 186 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Unit'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 187 */ ;
if (null !== ($_tmp_2 = ('/setting/unit'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 188 */; ?>
<i class="glyphicons-coins"></i>ĐƠN VỊ TÍNH 
				</a>
			</li>
			<?php 
/* tag "li" from line 191 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Employee'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 192 */ ;
if (null !== ($_tmp_2 = ('/setting/employee'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 193 */; ?>
<i class="glyphicons-group"></i>NHÂN VIÊN
				</a>
			</li>
			<?php 
/* tag "li" from line 196 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Customer'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 197 */ ;
if (null !== ($_tmp_2 = ('/setting/customer'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 198 */; ?>
<i class="glyphicons-group"></i>KHÁCH HÀNG
				</a>
			</li>
			<?php 
/* tag "li" from line 201 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='TermCollect'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 202 */ ;
if (null !== ($_tmp_2 = ('/setting/termcollect'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 203 */; ?>
<i class="glyphicons-disk_save"></i>DANH MỤC THU
				</a>
			</li>
			<?php 
/* tag "li" from line 206 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='TermPaid'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 207 */ ;
if (null !== ($_tmp_2 = ('/setting/termpaid'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 208 */; ?>
<i class="glyphicons-disk_open"></i>DANH MỤC CHI
				</a>
			</li>
			<?php 
/* tag "li" from line 211 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Config'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 212 */ ;
if (null !== ($_tmp_2 = ('/setting/config'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
					<?php /* tag "i" from line 213 */; ?>
<i class="glyphicons-cogwheel"></i>CẤU HÌNH
				</a>
			</li>
		</ul><?php endif; ?>
	
	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_MenuApp(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="sidebar">
		<?php 
/* tag "ul" from line 109 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<ul>			
			<?php 
/* tag "li" from line 110 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Export'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 111 */ ;
if (null !== ($_tmp_1 = ('/export'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 111 */; ?>
<i class="glyphicons-cart_out"></i>QL.XUẤT HÀNG</a>
			</li>
			<?php 
/* tag "li" from line 113 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Import'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_1 = ('/import'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 114 */; ?>
<i class="glyphicons-cart_in"></i>QL.NHẬP HÀNG</a>
			</li>			
			<?php 
/* tag "li" from line 116 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Money'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 117 */ ;
if (null !== ($_tmp_1 = ('/money'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 117 */; ?>
<i class="glyphicons-transfer"></i>QL.THU / CHI</a>
			</li>
			<?php 
/* tag "li" from line 119 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Report'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 120 */ ;
if (null !== ($_tmp_1 = ('/report'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 120 */; ?>
<i class="glyphicons-fax"></i>BÁO CÁO</a>
			</li>
			<?php 
/* tag "li" from line 122 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Setting'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 123 */ ;
if (null !== ($_tmp_1 = ('/setting'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 123 */; ?>
<i class="glyphicons-cogwheels"></i>THIẾT LẬP</a>
			</li>
		</ul><?php endif; ?>

		<?php 
/* tag "ul" from line 126 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isSeller()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 127 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Export'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "a" from line 128 */ ;
if (null !== ($_tmp_1 = ('/export'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 128 */; ?>
<i class="glyphicons-drink"></i>XUẤT HÀNG</a>
			</li>
			<?php /* tag "li" from line 130 */; ?>
<li>
				<?php 
/* tag "a" from line 131 */ ;
if (null !== ($_tmp_3 = ('/change/pass/load'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 131 */; ?>
<i class="glyphicons-keys"></i>ĐỔI MẬT KHẨU</a>
			</li>
		</ul><?php endif; ?>

		<?php 
/* tag "ul" from line 134 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isManager()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 135 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Export'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
					<?php 
/* tag "a" from line 136 */ ;
if (null !== ($_tmp_2 = ('/export'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 136 */; ?>
<i class="glyphicons-drink"></i>XUẤT HÀNG</a>
			</li>
			<?php 
/* tag "li" from line 138 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Import'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 139 */ ;
if (null !== ($_tmp_2 = ('/import'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 139 */; ?>
<i class="glyphicons-truck"></i>NHẬP HÀNG</a>
			</li>
			<?php 
/* tag "li" from line 141 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='TermPaid'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 142 */ ;
if (null !== ($_tmp_2 = ('/paid'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 142 */; ?>
<i class="glyphicons-money"></i>KHOẢN CHI</a>
			</li>
			<?php 
/* tag "li" from line 144 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='TermCollect'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 145 */ ;
if (null !== ($_tmp_2 = ('/collect'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 145 */; ?>
<i class="glyphicons-money"></i>KHOẢN THU</a>
			</li>
			<?php /* tag "li" from line 147 */; ?>
<li>
				<?php 
/* tag "a" from line 148 */ ;
if (null !== ($_tmp_1 = ('/change/pass/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 148 */; ?>
<i class="glyphicons-keys"></i>ĐỔI MẬT KHẨU</a>
			</li>
		</ul><?php endif; ?>

		<?php 
/* tag "ul" from line 151 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isViewer()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 152 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Report'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 153 */ ;
if (null !== ($_tmp_3 = ('/report'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 153 */; ?>
<i class="glyphicons-fax"></i>BÁO CÁO</a>
			</li>
			<?php /* tag "li" from line 155 */; ?>
<li>
				<?php 
/* tag "a" from line 156 */ ;
if (null !== ($_tmp_1 = ('/change/pass/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 156 */; ?>
<i class="glyphicons-keys"></i>ĐỔI MẬT KHẨU</a>
			</li>
		</ul><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_PageBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<ul class="pagination alternate pull-right page-bar">
		<?php 
/* tag "li" from line 100 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P as $ctx->P): ;
if (null !== ($_tmp_1 = ($ctx->Page==$ctx->P->getId()?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
			<?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->P, 'getURL')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->P, 'getName')); ?>
</a>
		</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</ul><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_ContentHeader(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="content-header"><?php /* tag "h1" from line 94 */; ?>
<h1>HỆ THỐNG QUẢN LÝ ĐẠI LÝ MINH TÀI</h1></div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_LocationBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="breadcrumb">
		<?php /* tag "a" from line 86 */; ?>
<a class="tip-bottom" title="" href="/app" data-original-title="Về trang chủ"><?php /* tag "i" from line 86 */; ?>
<i class="glyphicons-shop"></i> Hệ thống</a>
		<?php 
/* tag "a" from line 87 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->Navigation)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
if (null !== ($_tmp_2 = ($ctx->Item[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-original-title="Về trang này" class="tip-bottom"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->Item[0]); ?>
</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "a" from line 88 */; ?>
<a class="current"><?php echo phptal_escape($ctx->Title); ?>
</a>
	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 66 */; ?>
<div id="header">
			<?php /* tag "h1" from line 67 */; ?>
<h1><?php /* tag "a" from line 67 */; ?>
<a>Store Management App</a></h1>
			<?php /* tag "a" from line 68 */; ?>
<a id="menu-trigger" href="#"><?php /* tag "i" from line 68 */; ?>
<i class="glyphicon glyphicon-align-justify"></i></a>	
		</div>
		<?php /* tag "div" from line 70 */; ?>
<div id="user-nav">
            <?php /* tag "ul" from line 71 */; ?>
<ul class="btn-group">
                <?php /* tag "li" from line 72 */; ?>
<li class="btn">
					<?php /* tag "a" from line 73 */; ?>
<a><?php /* tag "i" from line 73 */; ?>
<i class="glyphicons-imac" style="margin-top:-5px;margin-right:5px;"></i> <?php /* tag "span" from line 73 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getIPPrint()); ?>
</span></a>
				</li>
				<?php /* tag "li" from line 75 */; ?>
<li class="btn"><?php /* tag "a" from line 75 */; ?>
<a class="tip-bottom" data-original-title="Click để đăng xuất" href="/signout/exe">
					<?php /* tag "i" from line 76 */; ?>
<i class="glyphicon glyphicon-user"></i> <?php 
/* tag "span" from line 76 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()):  ;
?>
<span class="text"><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentUser()->getEmail()); ?>
</span><?php endif; ?>

				</a></li>
            </ul>
        </div>
	</div><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>						
		<?php /* tag "script" from line 44 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.min.js"></script>
		<?php /* tag "script" from line 45 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery-ui.custom.js"></script>
		<?php /* tag "script" from line 46 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap.min.js"></script>
		<?php /* tag "script" from line 47 */; ?>
<script src="/mvc/templates/theme/cms/js/unicorn.js"></script>
		<?php /* tag "script" from line 48 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.jpanelmenu.min.js"></script>
		<?php /* tag "script" from line 49 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.icheck.min.js"></script>
		<?php /* tag "script" from line 50 */; ?>
<script src="/mvc/templates/theme/cms/js/select2.min.js"></script>
		<?php /* tag "script" from line 51 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.dataTables.min.js"></script>
		<?php /* tag "script" from line 52 */; ?>
<script src="/mvc/templates/theme/cms/js/unicorn.tables.js"></script>
		<?php /* tag "script" from line 53 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.gritter.min.js"></script>
		<?php /* tag "script" from line 54 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 55 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>		
		<?php /* tag "script" from line 56 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datetimepicker.js"></script>
		<?php /* tag "script" from line 57 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datetimepicker.vi.js"></script>		
		<?php /* tag "script" from line 58 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.validate.js"></script>
		<?php /* tag "script" from line 59 */; ?>
<script src="/mvc/templates/theme/cms/js/pdfobject.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>	
		<?php /* tag "link" from line 26 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/icheck/flat/blue.css"/>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/select2.css"/>
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/bootstrap.min.css"/>
		<?php /* tag "link" from line 29 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/bootstrap-glyphicons.css"/>
		<?php /* tag "link" from line 30 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/glyphicons-regular.css"/>
		<?php /* tag "link" from line 31 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/jquery-ui.css"/>
		<?php /* tag "link" from line 32 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/unicorn.main.css"/>
		<?php /* tag "link" from line 33 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/datepicker.css"/>
		<?php /* tag "link" from line 34 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/datetimepicker.css"/>
		<?php /* tag "link" from line 35 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/custom.css"/>
		<?php /* tag "link" from line 36 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/jquery.gritter.css"/>
		<?php 
/* tag "link" from line 37 */ ;
if (null !== ($_tmp_1 = ('/mvc/templates/theme/cms/css/unicorn.' . \MVC\Base\SessionRegistry::instance()->getCurrentTheme() . '.css'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<link rel="stylesheet" class="skin-color"<?php echo $_tmp_1 ?>
/>
	</span><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Cửa hàng thức ăn gia súc Minh Tài'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://minhtai.quanly-cuahang.com"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="keywords" content="Cửa hàng thức ăn gia súc Minh Tài"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="description" content="Cửa hàng thức ăn gia súc Minh Tài"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="page-topic" content="Cửa hàng thức ăn gia súc Minh Tài"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="Abstract" content="Cửa hàng thức ăn gia súc Minh Tài"/>
		<?php /* tag "meta" from line 18 */; ?>
<meta name="classification" content="Cửa hàng thức ăn gia súc Minh Tài"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="shortcut icon" type="image/png" href="/data/images/app/icon.png"/>
	</span><?php 
}

 ?>
<?php 
function tpl_52cd00ca_mAdmin__qwIwlPlvNFX8mU_Ks9r6Wg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ======================================================================== -->
	<!-- META TAG INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 6 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 25 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 43 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 65 */; ?>


	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 85 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CONTENT HEADER															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 94 */; ?>

	
	<!-- ======================================================================== -->
	<!-- PAGE BAR																  -->
	<!-- ======================================================================== -->
	<?php /* tag "ul" from line 99 */; ?>

	
	<!-- ======================================================================== -->
	<!-- MENU.APP															  	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 108 */; ?>

	
	<!-- ======================================================================== -->
	<!-- MENU.SETTING															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 164 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 222 */; ?>

	
	<!-- ======================================================================== -->
	<!-- STYLE SWITCHER															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 231 */; ?>

	
	<!-- ======================================================================== -->
	<!-- REPORT HEADER															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 244 */; ?>

		
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\minhtai\mvc\templates\mAdmin.xhtml (edit that file instead) */; ?>