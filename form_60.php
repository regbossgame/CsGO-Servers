<?

	echo '<tr>
					  <td width=300px>
					  <input type="hidden" name="kola" value="6"/>
					  Имя сервера</td><td><input type="text" name="par1" value="'.$mpar[1].'" maxlength="50" style="width:320px"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  ';
					  
						/*echo'  <tr><td>
					  TickRate</td><td>
					  <input type="hidden" name="par1" value="'.$mpar[1].'"/>
					  <input type="text" value="'.$mpar[1].'" disabled style="width:170px;"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  ';  
					  */
						  
					  
					  echo '<tr><td>
					  Рандомизация (seed)</td><td><input type="text" name="par2" value="'.$mpar[2].'" maxlength="7"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  <tr><td>
					  Размер мира (4000)</td><td><input type="text" name="par3" value="'.$mpar[3].'" maxlength="5"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  
					  <tr><td>
					  Карта</td><td><input type="text" name="par4" value="'.$mpar[4].'" maxlength="50"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  
					  <tr><td>
					  Пароль админа (rcon)</td><td><input type="text" name="par5" value="'.$mpar[5].'" maxlength="30"/>
					  </td></tr><tr><td colspan=2><hr></td></tr> 
					  
					  <tr><td>
					  Режим PVP</td><td>';
					  				  echo '<select name="par6" style="width:170px;">';
					if ($mpar[6]=="true"){$t6=" selected";}else{$t6="";}
					  echo '<option value="true"'.$t6.'>ДА</option>';
					  if ($mpar[6]=="false"){$t6=" selected";}else{$t6="";}
					  echo '<option value="false"'.$t6.'>НЕТ</option>';
					  echo '</select>
					  ';
					  
					  echo '</td></tr><tr><td colspan=2><hr></td></tr>';
					  
					  //true
					  
?>