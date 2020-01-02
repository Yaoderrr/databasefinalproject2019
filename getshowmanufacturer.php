<?php
	include_once "db_conn.php";

	$query =("select * from MANUFACTURER");
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result =$stmt->fetchAll();
	for($i=0;$i<count($result);$i++)
	{
		if($i%3==0){echo'<div class="row text-center mt-4">';};
		echo'<div class="col-md-4 pb-1 pb-md-0 h-40"><div class="card">';
        echo'<img class="card-img-top h-40" src="'.$result[$i]['image'].'" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">';
		echo "廠商: ";
		echo $result[$i]['MANUFACTURER'];
		echo "<br>";
		echo "國家: ";
		echo $result[$i]['COUNTRY'];
		echo "<br>";
		
        echo'</p></div>
          </div>
        </div>';
		if($i%3==2){echo'</div>';};
	}
	echo '<div class="row text-center mt-4"><div>目前資料庫中有';
	echo count($result);
	echo '個廠商</div></div>';
	if(count($result)%3!=0){echo'</div>';};
	?>
	  