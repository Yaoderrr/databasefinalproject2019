<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap eCommerce Page Template</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap-4.3.1.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="js/switchslide.js"></script>
	<script src="js/uploaddata.js"></script>
	 <!--  <script src="js/uploadpic.js"></script>-->
	
  </head>
  <body>
  <!-- 最上面的bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="javascript:switchhome()">首頁</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="javascript:switchshowcar()">顯示新車資訊 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="javascript:switchshowmanufacturer()">顯示廠商資訊</a>
            </li>
            
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="javascript:switcheditpage()">編輯資訊</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
	<!-- 幻燈片 -->
    <div class="container mt-3" style="display:on" id="slidephoto">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img class="d-block w-100 img-responsive center-block" src="/images/intro_car2.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/car2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/images/car3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>

    <!-- 車子展示 -->
    <div class="container" style="display:none" id="showcar" action="getcarinfo.php" method="get">
	<hr>
    <h2 class="text-center">車輛資訊</h2>
    <hr>
    
	<?php
	include_once "getcarinfo.php";
	
	?>	
    </div>

	<!-- 廠商展示 -->
    <div class="container" style="display:none" id="showmanufacturer" action="getshowmanufacturer.php" method="get">
	<hr>
	<h2 class="text-center">廠商資訊</h2>
	 <hr>
      <div class="row">
	  <?php
	include_once "getshowmanufacturer.php";
	
	?>
	<!-- 暫時頁面
        <div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="/images/100X125.gif" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="/images/100X125.gif" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media">
              <img class="mr-3" src="/images/100X125.gif" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
          </ul>
        </div>
		<div class="col-lg-4">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="/images/100X125.gif" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="/images/100X125.gif" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media">
              <img class="mr-3" src="/images/100X125.gif" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
          </ul>
        </div>
		 -->
        
        
      </div>
    </div>

	<!-- 編輯頁面 -->
  	<div class="container" style="display:on" id="editpage">
	<hr>
		<h2 class="text-center">編輯頁面</h2>
	<hr>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			<button type="button" class="btn btn-secondary btn-lg" id="starteditcarinfo">編輯車輛資訊</button>
			<a>&nbsp &nbsp &nbsp &nbsp</a>
			<button type="button" class="btn btn-secondary btn-lg" id="starteditcarinfo">編輯廠商資訊</button>
	</nav>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			
			<button type="button" class="btn btn-primary btn-lg">新增</button>
	</nav>
		<div class="container" id="addnewcar">
		<h5>新增資料-車輛</h5>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">型號(NAME)</span>				
				</div>
				<input type="text" class="form-control" aria-label="name input">
				<div class="input-group-prepend">
					<span class="input-group-text">價格(PRICE)</span>				
				</div>
				<input type="text" class="form-control" aria-label="price input"  onkeyup="value=value.replace(/[^\d]/g,'') ">
				<div class="input-group-prepend">
					<span class="input-group-text">排氣量(DISPLACEMENT)</span>				
				</div>
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
					<button class="btn btn-outline-secondary" type="button">確定</button>
					<button class="btn btn-outline-secondary" type="button" onclick="javascript:window.location.reload()">取消</button>
				</div>
			</div>
			<div id="addnewcarplace"></div>
		</div>
		<div class="container" id="addMANUFACTURER">
		<h5>新增資料-廠商</h5>
		<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">廠牌(MANUFACTURER)</span>				
				</div>
				<input type="text" class="form-control" aria-label="price input"  >
				<div class="input-group-prepend">
					<span class="input-group-text">國家(COUNTRY)</span>				
				</div>
				<input type="text" class="form-control" aria-label="country input" >
				<div class="input-group-prepend">
					<span class="input-group-text">圖片(IMAGE)</span>				
				</div>
				<input type="file" class="form-control" aria-label="image input" id="upload" >
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button">確定</button>
					<button class="btn btn-outline-secondary" type="button" onclick="javascript:window.location.reload()">取消</button>
				</div>
			
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap-4.3.1.js"></script>
  </body>
</html>