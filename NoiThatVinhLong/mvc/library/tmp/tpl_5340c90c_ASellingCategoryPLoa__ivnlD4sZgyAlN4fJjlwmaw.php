<?php 
function tpl_5340c90c_ASellingCategoryPLoa__ivnlD4sZgyAlN4fJjlwmaw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<div id="CategorySAll" class="widget-box">
			<?php /* tag "div" from line 5 */; ?>
<div class="widget-content nopadding">
				<?php /* tag "div" from line 6 */; ?>
<div class="gallery-masonry">
					<?php 
/* tag "div" from line 11 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
if (null !== ($_tmp_2 = ('Category' . $ctx->Category->getId()))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ('CategoryS item'))):  ;
$_tmp_4 = ' class="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<div<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
>
						<?php /* tag "a" from line 12 */; ?>
<a class="thumbnail"><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a>
					</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				</div>
			</div>					
		</div>						
        <?php /* tag "script" from line 17 */; ?>
<script>
			//Click ở mục con
			$(".CategoryS").click(function(){
				var IdCategory = $(this).attr('alt');				
				$("#ResourceAll").load("/admin/selling/categorys/"+IdCategory+"/load");
				$(this).toggleClass('active').siblings().removeClass('active');				
				$("#SearchName").focus();
			});
			//Mặc định lấy click của DANH MỤC CON đầu tiên			
			$('.CategoryS:first').click();
						
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

Generated by PHPTAL from G:\AppsWeb\quanly-cuahang.com\DienMayMinhHoang\mvc\templates\ASellingCategoryPLoad.html (edit that file instead) */; ?>