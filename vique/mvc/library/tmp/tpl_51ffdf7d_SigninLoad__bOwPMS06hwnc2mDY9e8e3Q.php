<?php 
function tpl_51ffdf7d_SigninLoad__bOwPMS06hwnc2mDY9e8e3Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div class="span12 main">
					<?php /* tag "div" from line 13 */; ?>
<div class="signin-inner">
						<?php 
/* tag "form" from line 14 */ ;
if (null !== ($_tmp_1 = ('/signin/exe'))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>
							<?php /* tag "legend" from line 15 */; ?>
<legend>Đăng nhập hệ thống</legend>
							<?php /* tag "div" from line 16 */; ?>
<div class="control-group">
								<?php /* tag "label" from line 17 */; ?>
<label class="control-label" for="Email">Email</label>
								<?php /* tag "div" from line 18 */; ?>
<div class="controls">
									<?php /* tag "input" from line 19 */; ?>
<input type="text" id="Email" name="Email"/>
								</div>
							</div>
							<?php /* tag "div" from line 22 */; ?>
<div class="control-group">
								<?php /* tag "label" from line 23 */; ?>
<label class="control-label" for="Pass">Mật khẩu</label>
								<?php /* tag "div" from line 24 */; ?>
<div class="controls">
									<?php /* tag "input" from line 25 */; ?>
<input type="Password" id="Pass" name="Pass"/>
								</div>
							</div>																								
							<?php /* tag "div" from line 28 */; ?>
<div class="control-group">
								<?php /* tag "div" from line 29 */; ?>
<div class="controls">
									<?php /* tag "button" from line 30 */; ?>
<button type="submit" class="btn" value="submit-value">Đăng nhập</button>
								</div>
							</div>						
						</form>
					</div>
				</div>
			</div>
			<?php 
/* tag "span" from line 37 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\SigninLoad.html (edit that file instead) */; ?>