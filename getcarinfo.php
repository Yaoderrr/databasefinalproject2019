<?php
	include_once "db_conn.php";

	$query =("select * from data, id where data.ID=id.ID");
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result =$stmt->fetchAll();
	for($i=0;$i<count($result);$i++)
	{
		if($i%3==0){echo'<div class="row text-center mt-4">';};
		echo'<div class="col-md-4 pb-1 pb-md-0 h-40"><div class="card">';
        echo'<img class="card-img-top h-40" src="'.$result[$i]['IMAGE'].'" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">';
		echo "型號: ";
		echo $result[$i]['NAME'];
		echo "<br>";
		echo "價格: ";
		echo $result[$i]['PRICE'];
		echo "<br>";
		echo "排氣量: ";
		echo $result[$i]['DISPLACEMENT'].' cc';
		echo "<br>";
		echo "出廠年分: ";
		echo $result[$i]['YEAR'].' 年';
		echo "<br>";
		echo "廠牌: ";
		echo $result[$i]['MANUFACTURER'];
        echo'</p></div>
          </div>
        </div>';
		if($i%3==2){echo'</div>';};
	}
	
	
	
	
	
	
	
	echo '<div class="row text-center mt-4"><div>目前資料庫中有';
	echo count($result);
	echo '輛車</div></div>';
	if(count($result)%3!=0){echo'</div>';};
	?>
	  