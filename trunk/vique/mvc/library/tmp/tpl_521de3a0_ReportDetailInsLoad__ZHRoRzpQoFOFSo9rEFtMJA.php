<?php 
function tpl_521de3a0_ReportDetailInsLoad__ZHRoRzpQoFOFSo9rEFtMJA(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
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

		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript">
			/*<![CDATA[*/
			$(function() {
				$('#DateStart').datepicker();
				$('#DateEnd').datepicker();
			});
			/*]]>*/
		</script>
	</head>	
	<?php /* tag "body" from line 16 */; ?>
<body>
		<?php /* tag "div" from line 17 */; ?>
<div class="container-fluid">
			<?php 
/* tag "span" from line 18 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 19 */; ?>
<div class="row-fluid">
				<?php /* tag "div" from line 20 */; ?>
<div class="span3"></div>
				<?php /* tag "div" from line 21 */; ?>
<div class="span9 main">
					<?php 
/* tag "span" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php /* tag "form" from line 23 */; ?>
<form class="form-horizontal" action="/report/ins/exe" method="post">
						<?php /* tag "div" from line 24 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 25 */; ?>
<label class="control-label" for="DateStart">Bắt đầu</label>
							<?php /* tag "div" from line 26 */; ?>
<div class="controls">
								<?php /* tag "input" from line 27 */; ?>
<input id="DateStart" name="DateStart" type="text"/>								
							</div>
						</div>
						<?php /* tag "div" from line 30 */; ?>
<div class="control-group">
							<?php /* tag "label" from line 31 */; ?>
<label class="control-label" for="DateEnd">Kết thúc</label>
							<?php /* tag "div" from line 32 */; ?>
<div class="controls">
								<?php /* tag "input" from line 33 */; ?>
<input id="DateEnd" name="DateEnd" type="text"/>
							</div>
						</div>
						<?php /* tag "div" from line 36 */; ?>
<div class="control-group">
							<?php /* tag "div" from line 37 */; ?>
<div class="controls">
								<?php /* tag "button" from line 38 */; ?>
<button type="submit" class="btn" value="submit-value">Thêm mới</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php 
/* tag "span" from line 44 */ ;
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

Generated by PHPTAL from I:\quanly-cuahang\vique\mvc\templates\ReportDetailInsLoad.html (edit that file instead) */; ?>