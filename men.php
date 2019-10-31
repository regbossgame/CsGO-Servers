<?

echo '<nav class="nav">
            <ul>';


for ($i=0;$i<$men_count;$i++){
	if ($mena[$i]==1){
		$t1='<a href="?cat='.$mlink[$i].'" title="'.$mtit[$i].'">';
		if ($mlink[$i]=="shop"){$t1="<a name='lost'>";}
		echo '<li class="nav-item">'.$t1.'<img src="images/icons/micon-'.$mlink[$i].'.png" alt="'.$mtit[$i].'"/>
			  <p>'.$mtit[$i].'</p></a></li>
			  ';
	}
}
            echo '</ul>
          </nav>';

?>