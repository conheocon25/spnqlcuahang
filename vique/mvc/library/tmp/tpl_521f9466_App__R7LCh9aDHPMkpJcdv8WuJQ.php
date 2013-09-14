<?php 
function tpl_521f9466_App__R7LCh9aDHPMkpJcdv8WuJQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "span" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>
		
		<?php 
/* tag "span" from line 6 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php /* tag "div" from line 9 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 11 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 12 */; ?>
<div class="row-fluid">
					<?php /* tag "div" from line 13 */; ?>
<div class="span3">
						<?php /* tag "div" from line 14 */; ?>
<div class="menu">
							<?php 
/* tag "ul" from line 15 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 16 */; ?>
<li class="nav-header">CHỨC NĂNG</li>
								<?php /* tag "li" from line 17 */; ?>
<li>
									<?php 
/* tag "a" from line 18 */ ;
if (null !== ($_tmp_1 = ('/selling'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 19 */; ?>
<i class="icon-shopping-cart"></i>
										BÁN HÀNG
									</a>
								</li>
								<?php /* tag "li" from line 23 */; ?>
<li>
									<?php 
/* tag "a" from line 24 */ ;
if (null !== ($_tmp_1 = ('/import'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 25 */; ?>
<i class="icon-truck"></i>
										NHẬP HÀNG
									</a>
								</li>
								<?php /* tag "li" from line 29 */; ?>
<li>
									<?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_1 = ('/report'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 31 */; ?>
<i class="icon-book"></i>
										BÁO CÁO
									</a>
								</li>
								<?php /* tag "li" from line 35 */; ?>
<li>
									<?php 
/* tag "a" from line 36 */ ;
if (null !== ($_tmp_1 = ('/setting'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 37 */; ?>
<i class="icon-gear"></i>
										THIẾT LẬP
									</a>
								</li>
							</ul><?php endif; ?>

							<?php 
/* tag "ul" from line 42 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isSeller()):  ;
?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 43 */; ?>
<li class="nav-header">CHỨC NĂNG</li>
								<?php /* tag "li" from line 44 */; ?>
<li>
									<?php 
/* tag "a" from line 45 */ ;
if (null !== ($_tmp_1 = ('/selling'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 46 */; ?>
<i class="icon-shopping-cart"></i>
										BÁN HÀNG
									</a>
								</li>
							</ul><?php endif; ?>

						</div>
						<?php /* tag "BR" from line 52 */; ?>
<BR/>
						<?php /* tag "div" from line 53 */; ?>
<div class="menu">
							<?php /* tag "ul" from line 54 */; ?>
<ul class="nav nav-list">
								<?php /* tag "li" from line 55 */; ?>
<li class="nav-header">THỐNG KÊ</li>
								<?php /* tag "li" from line 56 */; ?>
<li>									
									<?php /* tag "i" from line 57 */; ?>
<i class="icon-user"></i> <?php /* tag "span" from line 57 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getOnlinePrint()); ?>
</span> trực tuyến
								</li>
								<?php /* tag "li" from line 59 */; ?>
<li>									
									<?php /* tag "i" from line 60 */; ?>
<i class="icon-bar-chart"></i> lượt									
								</li>
							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 65 */; ?>
<div class="span9">
						<?php /* tag "div" from line 66 */; ?>
<div class="content">
							<?php /* tag "center" from line 67 */; ?>
<center><?php /* tag "img" from line 67 */; ?>
<img src="/data/images/bg_manager.png" width="50%" style="opacity:.25;"/></center>
						</div>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 72 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		</div>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\App.html (edit that file instead) */; ?>