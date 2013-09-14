<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 132 */; ?>
<div class="row-fluid footer">
			<?php /* tag "span" from line 133 */; ?>
<span class="label pull-right copyright">&#169; 2012 SPN</span>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_Menu(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="menu">
		<?php /* tag "ul" from line 81 */; ?>
<ul class="nav nav-list">
			<?php /* tag "li" from line 82 */; ?>
<li class="nav-header">DANH MỤC</li>
			<?php 
/* tag "li" from line 83 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Supplier'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_1 = ('/setting/supplier'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 85 */; ?>
<i class="icon-user"></i>
					NHÀ CUNG CẤP<?php /* tag "span" from line 86 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->SupplierAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 89 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='User'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 90 */ ;
if (null !== ($_tmp_1 = ('/setting/user'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 91 */; ?>
<i class="icon-user"></i>
					NGƯỜI DÙNG<?php /* tag "span" from line 92 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->UserAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 95 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Customer'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 96 */ ;
if (null !== ($_tmp_1 = ('/setting/customer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 97 */; ?>
<i class="icon-user"></i>
					KHÁCH HÀNG<?php /* tag "span" from line 98 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->CustomerAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Unit'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 102 */ ;
if (null !== ($_tmp_1 = ('/setting/unit'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 103 */; ?>
<i class="icon-th"></i>
					ĐƠN VỊ TÍNH<?php /* tag "span" from line 104 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->UnitAll, 'count')); ?>
</span>
				</a>
			</li>			
			<?php 
/* tag "li" from line 107 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Tag'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>				
				<?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_1 = ('/setting/tag'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 109 */; ?>
<i class="icon-tag"></i>
					THẺ<?php /* tag "span" from line 110 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->TagAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 113 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='TagSelected'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_1 = ('/setting/tagselected'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 115 */; ?>
<i class="icon-tag"></i>
					THẺ ĐƯỢC CHỌN<?php /* tag "span" from line 116 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->TagSelectedAll, 'count')); ?>
</span>
				</a>
			</li>
			<?php 
/* tag "li" from line 119 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Config'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 120 */ ;
if (null !== ($_tmp_1 = ('/setting/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
					<?php /* tag "i" from line 121 */; ?>
<i class="icon-wrench"></i>
					CẤU HÌNH<?php /* tag "span" from line 122 */; ?>
<span class="badge badge-info pull-right"><?php echo phptal_escape($ctx->path($ctx->ConfigAll, 'count')); ?>
</span>
				</a>
			</li>
		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_PageBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="pagination">
		<?php /* tag "ul" from line 73 */; ?>
<ul>
			<?php 
/* tag "li" from line 74 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P as $ctx->P): ;
if (null !== ($_tmp_1 = ($ctx->Page==$ctx->P->getId()?'disabled':'active'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 75 */ ;
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

		</ul>
	</div><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_LocationBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 59 */; ?>
<div class="row-fluid">			
			<?php /* tag "ul" from line 60 */; ?>
<ul class="span12 breadcrumb">
				<?php 
/* tag "li" from line 61 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->Navigation)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
?>
<li>
					<?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_2 = ($ctx->Item[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->Item[0]); ?>
</a> <?php /* tag "span" from line 62 */; ?>
<span class="divider">/</span>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php /* tag "li" from line 64 */; ?>
<li class="active"><?php echo phptal_escape($ctx->Title); ?>
</li>
			</ul>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 45 */; ?>
<div class="navbar navbar-inverse">
			<?php /* tag "div" from line 46 */; ?>
<div class="navbar-inner">
				<?php /* tag "a" from line 47 */; ?>
<a class="brand" href="/app">Siêu thị mini tự chọn Vị Quê</a>
				<?php /* tag "p" from line 48 */; ?>
<p class="navbar-text pull-right">
					<?php /* tag "a" from line 49 */; ?>
<a class="navbar-link" href="/signout/load"><?php 
/* tag "span" from line 49 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()):  ;
?>
<span><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentUser()->getEmail()); ?>
</span><?php endif; ?>
</a>
				</p>
			</div>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "script" from line 35 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/script/library/jquery-1.7.1.min.js"></script>		
		<?php /* tag "script" from line 36 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap.min.js"></script>
		<?php /* tag "script" from line 37 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 38 */; ?>
<script type="text/javascript" language="javascript" src="/mvc/templates/theme/bootstrap/js/bootstrap-datepicker.vi.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>	
		<?php /* tag "link" from line 26 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/bootstrap.min.css" media="screen"/>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/madmin.css"/>
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" type="text/css" href="/mvc/templates/theme/bootstrap/css/datepicker.css"/>
	</span><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 8 */; ?>
<title><?php echo 'Website Siêu Thị Mini Vị Quê'; ?>
</title>
		<?php /* tag "base" from line 9 */; ?>
<base href="http://vique.quanly-cuahang.com"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="keywords" content="Website Siêu Thị Mini Vị Quê"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="description" content="Website Siêu Thị Mini Vị Quê"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="page-topic" content="Chùa Khải Tường"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="Abstract" content="Website Siêu Thị Mini Vị Quê"/>
		<?php /* tag "meta" from line 18 */; ?>
<meta name="classification" content="Website Siêu Thị Mini Vị Quê"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="icon" type="image/png" href="/data/images/icon.png"/>
	</span><?php 
}

 ?>
<?php 
function tpl_521de310_mAdmin__OlbaOniwaCMfafNyuVljRA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	
	<?php /* tag "span" from line 7 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 25 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 34 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 44 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 58 */; ?>

	
	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 72 */; ?>

							
	<?php /* tag "div" from line 80 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 131 */; ?>
	
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\mAdmin.xhtml (edit that file instead) */; ?>