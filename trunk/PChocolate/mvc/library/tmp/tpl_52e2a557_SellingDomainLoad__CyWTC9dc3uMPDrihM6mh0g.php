<?php 
function tpl_52e2a557_SellingDomainLoad__CyWTC9dc3uMPDrihM6mh0g(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "body" from line 3 */; ?>
<body>		
		<?php /* tag "div" from line 4 */; ?>
<div id="TableAll" class="widget-box">			
			<?php /* tag "div" from line 5 */; ?>
<div class="widget-content nopadding">
				<?php /* tag "div" from line 6 */; ?>
<div class="gallery-masonry">
					<?php 
/* tag "div" from line 7 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Table = new PHPTAL_RepeatController($ctx->TableAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Table as $ctx->Table): ;
if (null !== ($_tmp_2 = ('Table' . $ctx->Table->getId()))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ($ctx->Table->getSessionActive()==null? 'Table item':'Table item actived'))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<div<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
						<?php /* tag "a" from line 8 */; ?>
<a class="thumbnail"><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</a>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</div>
			</div>					
		</div>						
        <?php /* tag "script" from line 13 */; ?>
<script>
			$(".Table").click(function(){
				var IdTable = $(this).attr('alt');
				
				$("#Session").load("/selling/load/table/"+IdTable);
				$(this).toggleClass('active').siblings().removeClass('active');				
				//Nhớ lại Table đang được chọn.
				$("#TableActive").attr('alt', 'Table'+IdTable);
				$("#SearchName").focus();
			});
			//Mặc định lấy click của BÀN đầu tiên
			$('.Table:first').click();
						
			$('.gallery-masonry').masonry({
				itemSelector: '.item',
				isAnimated: true,
				isFitWidth: true
			});
        </script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\PChocolate\mvc\templates\SellingDomainLoad.html (edit that file instead) */; ?>