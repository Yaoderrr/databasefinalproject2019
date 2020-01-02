<?php
	include_once "db_conn.php";

	$query =("select * from data, id where data.ID=id.ID");
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result =$stmt->fetchAll();
	for($i=0;$i<count($result);$i++)
	{	
		$cid ='car'+$result[$i]['ID'];
		echo '<div class="input-group mb-3">';
		echo '<div class="input-group-prepend">';
		echo '<span class="input-group-text">型號(NAME)</span></div>';
		echo '<input type="text" class="form-control" aria-label="name input" id='.$cid.'NAME value="'.$result[$i]['NAME'].'">';
		echo '<div class="input-group-prepend"><span class="input-group-text">價格(PRICE)</span></div>';
		echo '<input type="text" class="form-control" aria-label="price input"  id='.$cid.'PRICE value="'.$result[$i]['PRICE'].'onkeyup="value=value.replace(/[^\\d]/g,\'\') ">';
		echo '<div class="input-group-prepend"><span class="input-group-text">排氣量(DISPLACEMENT)</span></div>';
		echo '<input type="text" class="form-control" aria-label="DISPLACEMENT input" id='.$cid.'DISPLACEMENT value='. +*$result[$i]['DISPLACEMENT'].'onkeyup="value=value.replace(/[^\\d]/g,\'\') "></div>';
		echo '<div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text">年分(YEAR)</span></div>';
		echo '<input type="text" class="form-control" aria-label="year input" id='.$cid.'YEAR value='. +*$result[$i]['DISPLACEMENT'].'onkeyup="value=value.replace(/[^\d]/g,'') ">';
		$result[$i]['IMAGE']
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

//<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">型號(NAME)</span>				
				</div>
				<input type="text" class="form-control" aria-label="name input" >
				<div class="input-group-prepend"><span class="input-group-text">價格(PRICE)</span></div>
				<input type="text" class="form-control" aria-label="price input"  onkeyup="value=value.replace(/[^\d]/g,'') ">
				<div class="input-group-prepend"><span class="input-group-text">排氣量(DISPLACEMENT)</span></div>
				<input type="text" class="form-control" aria-label="DISPLACEMENT input" onkeyup="value=value.replace(/[^\d]/g,'') ">
			
			</div>
						<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">年分(YEAR)</span>				
				</div>
				<input type="text" class="form-control" aria-label="year input" onkeyup="value=value.replace(/[^\d]/g,'') ">
				<div class="input-group-prepend">
					<span class="input-group-text">廠牌(MANUFACTURER)</span>				
				</div>
				<input type="text" class="form-control" aria-label="price input"  onkeyup="value=value.replace(/[^\d]/g,'') ">
				<div class="input-group-prepend">
					<span class="input-group-text">圖片(IMAGE)</span>				
				</div>
				<input type="file" class="form-control" aria-label="image input" >
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button">更改</button>
					<button class="btn btn-outline-secondary" type="button" onclick="javascript:window.location.reload()">刪除</button>
				</div>
			</div>
	  