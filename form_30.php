<?

	echo '<tr>
					  <td width=300px>
					  <input type="hidden" name="kola" value="7"/>
					  <input type="hidden" name="par7" value="'.$mpar[7].'"/>
					  Имя сервера</td><td><input type="text" name="par5" value="'.$mpar[5].'" maxlength="50" style="width:320px"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  ';
					  
						echo'  <tr><td>
					  TickRate</td><td>
					  <input type="hidden" name="par1" value="'.$mpar[1].'"/>
					  <input type="text" value="'.$mpar[1].'" disabled style="width:170px;"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  ';  
						  
					  
					  echo '<tr><td>
					  Пароль доступа (rcon)</td><td><input type="text" name="par4" value="'.$mpar[4].'" maxlength="50"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  <tr><td>
					  Парль на игру</td><td><input type="text" name="par3" value="'.$mpar[3].'" maxlength="50"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  <tr><td>
					  Режим игры</td><td>
					  ';
					  
					  echo '<select name="par6" style="width:170px;">';
				if ($mpar[6]=="+game_type 0 +game_mode 0 +mapgroup mg_allclassic"){$t6=" selected";}else{$t6="";}
					  echo '<option value="+game_type 0 +game_mode 0 +mapgroup mg_allclassic"'.$t6.'>Classic Casual</option>';
					  if ($mpar[6]=="+game_type 0 +game_mode 1 +mapgroup mg_allclassic"){$t6=" selected";}else{$t6="";}
					  echo '<option value="+game_type 0 +game_mode 1 +mapgroup mg_allclassic"'.$t6.'>Classic Competitive</option>';
					  if ($mpar[6]=="+game_type 1 +game_mode 0 +mapgroup mg_armsrace"){$t6=" selected";}else{$t6="";}
					  echo '<option value="+game_type 1 +game_mode 0 +mapgroup mg_armsrace"'.$t6.'>Arms Race</option>';
					  if ($mpar[6]=="+game_type 1 +game_mode 1 +mapgroup mg_demolition"){$t6=" selected";}else{$t6="";}
					  echo '<option value="+game_type 1 +game_mode 1 +mapgroup mg_demolition"'.$t6.'>Demolition</option>';
					  if ($mpar[6]=="+game_type 1 +game_mode 2 +mapgroup mg_allclassic"){$t6=" selected";}else{$t6="";}
					  echo '<option value="+game_type 1 +game_mode 2 +mapgroup mg_allclassic"'.$t6.'>Deathmatch</option>';
					  
					  echo '</select>
					  ';
					  echo '</td></tr><tr><td colspan=2><hr></td></tr>
					  <tr><td>
					  Старовая карта</td><td><input type="text" name="par2" value="'.$mpar[2].'" maxlength="50"/>
					  </td></tr><tr><td colspan=2><hr></td></tr>
					  ';


?>