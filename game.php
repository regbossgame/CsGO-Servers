<?

$gid=$_GET["id"];

$sql="SELECT name,txt FROM games WHERE id LIKE '$gid'";
$result = @mysql_query("$sql",$db);
	$i=0;
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");

	
$sql="SELECT id,slot1,slot2,zen FROM types WHERE id LIKE '$gid'";
$result = @mysql_query("$sql",$db);



$i=0;
	$id=@mysql_result($result, $i,"id");
	//$nam="-";//@mysql_result($result, $i,"name");
	$slot1=@mysql_result($result, $i,"slot1");
	$slot2=@mysql_result($result, $i,"slot2");
	$zen=@mysql_result($result, $i,"zen");

	if ($slot2==0){$slot2=2;$slot1=0;$zen=1;$id=$gid;}
	
	/*
	<span style='font-size:28pt;color:#FFFFFF;'><? echo $name[0]; ?><? echo substr($name,1,strlen($name)-1); ?>
				</span>
	*/

?>

<script>setTimeout("calc();",300);</script>
<div class="container">
          <div class="about-block">
            <div class="about-inner">
              <div class="text-container" style="width:800px;">
			  <center>
                <table><tr valign=top><td> <? echo '
				<img src="images/src/'.$id.'.png" width=400px/>
				'; ?> 
				</td>
				</tr></table>
				
				
				
				<form action="tocart.php" method="POST" style='text-align:center;'>
				<p style="text-align:justify;margin:5px;color:#FFFFFF;background-color:#3f3363;border-radius:5px;padding:10px;">
				

<? 
				 echo $txt."";
				 ?>
				</p>
				
				
				<table border=0>
				<tr>
                <?
				for ($i=1;$i<=5;$i++){
				echo '<td>
				<a href="images/src/'.$id.'/'.$i.'.jpg" rel="lightbox[plants]" >
				<img src="images/src/'.$id.'/'.$i.'.jpg" width=150px height=90px style="margin:5px;">
				</a>
				</td>
				
				';
				}
				
				?>
				</tr>
				</table>
				
				<div style="clear:both;width:700px;height:10px;"></div>
				<p style="text-align:justify;margin:5px;color:#FFFFFF;text-align:center;">
				<?
				
				if ($id!=40 && $id!=50){
				
				echo 'Цена от '.$zen.' руб/слот<br><br>
				<select name="slots" id="slots" style="width:100px;margin-right:10px;" onchange="calc();">
				';
				
				for($i=$slot1;$i<=$slot2;$i++)
				{
					//$tt="";
					//if ($i==$slot1){$tt=" selected";}else{$tt="";}
					echo "<option value='".$i."'>Слотов: ".$i."</option>";
					
				}
				
				echo "</select>";
				}else{
					echo "Цена ".$zen." руб.<br><input type='hidden' value='1' id='slots'/>
					<textarea style='width:790px;' name='txt' placeholder='Вы можете заказать сервер любой конфигурации и любой версии. Просто опишите нам ваши требования и проведите оплату, в течение часа мы сделаем вам уникальную сборку, после чего наши менеджеры с вами свяжутся'></textarea>
					";
					
				}
				
				if ($id==30){
 echo '<select id="ticks" name="ticks" style="width:100px;margin-right:10px;" onchange="calc();">
 <option selected value="128">tickrate: 128</option>
 <option value="64">tickrate: 64</option>
 </select>';
				}
				
if ($id==80){
 echo '<select id="ticks" name="ticks" style="width:100px;margin-right:10px;" onchange="calc();">
 <option selected value="66">tickrate: 66</option>
 <option value="100">tickrate: 100</option>
 </select>';
				}				
				

if ($id==110){
 echo '<select id="ticks" name="ticks" style="width:100px;margin-right:10px;" onchange="calc();">
 <option selected value="1">team kill clan war</option>
 <option value="2">public 500fps</option>
 <option value="3">public 1000fps</option>
 </select>';
				}				
				
				
echo ' <select id="srok" name="srok" style="width:100px;margin-right:10px;" onchange="calc();">
 <option selected value="1">30 дней</option>
 <option value="3">90 дней</option>
 <option value="6">180 дней</option>
 <option value="12">360 дней</option>
 </select>
 
 <span id="rzen" style="color:#fbac03;">...</span>
 
  <input type="hidden" id="zen" name="zen" value="'.$zen.'"/>
  <input type="hidden" id="buyid" name="buyid" value="'.$id.'"/>
 
 <div>
 <center>
			<input type="submit" value="В КОРЗИНУ" class="subo"/>
</center>			
			</div>
';				
				
				?>
				
				</p>
				</form>
				</center>
				
				
				
				
				
	
              </div>
              
            </div>
          </div>
        </div>

