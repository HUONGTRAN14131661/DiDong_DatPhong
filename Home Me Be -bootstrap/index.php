<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Thu Huong Blog</title>
	<meta charset="utf-8">
	<meta name="description" content="html">
	<meta name="keyword" content="html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important : the de responsive tren nhieu thiet bi -->
	<link rel="stylesheet" type="text/css" href="font-awesome\css\font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="./js/bootstrap.min.css"> <!-- duong dan den bootstrap onl-->

    <link rel="stylesheet" type="text/css" href="style.css"> <!-- luôn để cuối cùng-->
    <script src="./js/jquery.min.js"></script>
	<script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
	<script src="./js/popper.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="container-fluid header">
			<div class="row">
				<div class="col-2 col-sm-4 d-md-none ddddd"><!--  icon navbar hien thi o che do sm -->
				    <button class="btn-bar"><i class="fa fa-bars"></i></button>
				</div>
				<div class="col-5 col-sm-4 col-md-2 header-left">
					<img src="img/header-logo.png">
				</div>
				<div class="col-5 col-sm-4 col-md-10 header-right">
					<div class="row">
						<div class="col-lg-12 col-xl-12 text-right d-block d-sm-none d-md-none d-lg-block " style="position: relative;"> 
							<i class="fa fa-phone"></i><button type="button" class="button btn-contact">1800 1125</button>
						</div>
						<div class="col-8 col-sm-4 col-md-12 col-lg-9 header-menu d-none d-sm-none d-md-block d-lg-block"> <!-- menu hien thi che do md lg xl -->
							<ul class="menu">
						    	<li><a href="./index.html" class="active-bg-menu">Trang Chu</a></li>
						    	<li class="hover-sanpham"><a href=" ">San Pham <i class="fa fa-chevron-down"></i></a>
								    <ul class="menu-child">
								    	<li><a href="#">Yoosun Mama</a></li>
								    	<li><a href="#">Yoosun Baby</a></li>
								    </ul>
						    	</li>
						    	<li><a href="./randa.html">Ran Da</a></li>
						    	<li><a href="#">Ham Da</a></li>
						    	<li><a href="./danhsachnhathuoc.html">Danh Sach Nha Thuoc</a></li>
						    </ul>
						</div>
						<div class="col-12 col-sm-5 col-md-12 col-lg-3 d-none d-sm-none d-md-block d-lg-block text-right" style="align-self: center;"> <!-- form-timkiem -->
						    <form class="form-inline my-2 my-lg-0">
						      <input class="input-search" type="search" placeholder="Tim Kiem" aria-label="Search">
						      <button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
						    </form>
						</div>
						<div class="col-4 col-sm-12 col-md-12 text-right d-none d-sm-block d-md-block d-lg-none" style="position: relative;align-self: center;"> <!-- sodienthoai -->
							<i class="fa fa-phone"></i><button type="button" class="button btn-contact">1800 1125</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="container-fluid navbar-collapse offcanvas-collapse content-menu d-block d-sm-block d-md-none d-lg-none">
	      <ul class="navbar-nav mr-auto bbbbb">
			    <form class="form-inline my-2 my-lg-0 d-block d-sm-block d-md-none d-lg-none d-xl-none">
		      		<input class="input-search" type="search" placeholder="Tim Kiem" aria-label="Search">
		    	  	<button class="btn-search" type="submit"><i class="fa fa-search"></i></button>
	   			 </form>
		        <li class="nav-item active">
		          <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Ran Da</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Ham Da</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">Danh Sach Nha Thuoc</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
		          <div class="dropdown-menu" aria-labelledby="dropdown01">
		            <a class="dropdown-item" href="#">Yoosun Mama</a>
		            <a class="dropdown-item" href="#">Yoosun Baby</a>
		          </div>
		        </li>
	      </ul>
		</div>
		
 <script type="text/javascript">
 	$(function () {
  		$('.btn-bar').on('click', function () {
    		$('.content-menu').toggleClass('open')
  })
})
 </script>
<style type="text/css">
	.open{
		left: 0px;
		transition: all 1s;
	}
</style>
	</header>
	<main>
		<div class="container-fluid">
			<div class="row main-randa-camnang">
				<div class="col-12">
					<p class="main-randa-padding-title">Trang chủ/ Đặt hàng online 2</p>
				</div>
				<div class="col-md-12 padding-dathang d-none d-sm-none d-md-block">
					<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">Tên Sản Phẩm</th>
					      <th scope="col" colspan="3">Số Lượng</th>
					      <th scope="col">Giá Tiền</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  	echo "string";
					  	?>
					    <tr>
					      <td class="dathang-img-sanpham">
							 <div class="checkboxFive checkboxfive-1">
							   <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
							   <label for="checkboxFiveInput"></label>
							</div>
							 <img src="img/Layer-51.png">
							 <span>Kem hăm da Yoosun baby 30ml </span>
					      </td>
					      <td>
		      				<div class="input-group-btn">
				                <button id="down" class="btn btn-default">
				                	<span class="glyphicon glyphicon-minus">-</span>
				                </button>
				            </div>
					      </td>
					      <td>
					      	    <div class="form-group">
							        <div class="input-group">
							            <input type="text" id="myNumber" class="form-control input-number" value="1" />
							        </div>
							    </div>
					      </td>
					      <td>
		      				<div class="input-group-btn">
				                <button id="up" class="btn btn-default">
				                	<span class="glyphicon glyphicon-plus">+</span>
				                </button>
				            </div>
					      </td>
					      <td>
					      		<input type="text" id="price" class="form-control input-number" value="20000" readonly />
					      </td>
					    </tr>
					    <tr>
					      <td class="dathang-img-sanpham">
							<div class="checkboxFive">
							   <input type="checkbox" value="1" id="checkboxFiveInput" name="" />
							   <label for="checkboxFiveInput"></label>
							</div>
															 
							 <img src="img/Layer-51.png">
							 <span>Kem hăm da Yoosun baby 100ml </span>
					      </td>
					      <td>
		      				<div class="input-group-btn">
				                <button id="down1" class="btn btn-default">
				                	<span class="glyphicon glyphicon-minus">-</span>
				                </button>
				            </div>
					      </td>
					      <td>
					      	    <div class="form-group">
							        <div class="input-group">
							            <input type="text" id="myNumber1" class="form-control input-number" value="1" />
							        </div>
							    </div>
					      </td>
					      <td>
		      				<div class="input-group-btn">
				                <button id="up1" class="btn btn-default">
				                	<span class="glyphicon glyphicon-plus">+</span>
				                </button>
				            </div>
					      </td>
					      <td>
					      		<input type="text" id="price1" class="form-control input-number" value="40000" readonly />
					      </td>
					    </tr>
					  </tbody>
					</table>


				</div>
				<div class="col-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
					<div class="row padding-sanpham-dathang">
						<div class="col-3">
							<img src="img/Layer-51.png">
						</div>
						<div class="col-9">									
							<div class="text-sanpham">
								<p>Kem hăm da Yoosun baby 30ml </p>
								<p>20000 d</p>
							<div class="form-group">
							        <div class="input-group">
							            <div class="input-group-btn">
							                <button id="down2" class="btn btn-default"><span class="glyphicon glyphicon-minus">-</span></button>
							            </div>
							            <input type="text" id="myNumber2" class="form-control input-number" value="1" />
							            <div class="input-group-btn">
							                <button id="up2" class="btn btn-default"><span class="glyphicon glyphicon-plus">+</span></button>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="thanhtoan">
								<span>Tong Cong</span>
								<span><input type="text" id="price2" class="form-control input-number" value="20000" readonly/></span>
							</div>
						</div>
					</div>
					<div class="row padding-sanpham-dathang">
						<div class="col-3">
							<img src="img/Layer-51.png">
						</div>
						<div class="col-9">									
							<div class="text-sanpham">
								<p>Kem hăm da Yoosun baby 30ml </p>
								<p>20000 d</p>
							<div class="form-group">
							        <div class="input-group">
							            <div class="input-group-btn">
							                <button id="down3" class="btn btn-default"><span class="glyphicon glyphicon-minus">-</span></button>
							            </div>
							            <input type="text" id="myNumber3" class="form-control input-number" value="1" />
							            <div class="input-group-btn">
							                <button id="up3" class="btn btn-default"><span class="glyphicon glyphicon-plus">+</span></button>
							            </div>
							        </div>
							    </div>
							</div>
							<div class="thanhtoan">
								<span>Tong Cong</span>
								<span><input type="text" id="price3" class="form-control input-number" value="40000" readonly />
								</span>
							</div>
						</div>

					</div>
				</div>
				<div class="col-12 margin-top-bottom">
					<div class="row">
						<div class="col-12 col-md-7">
						    <div class="form-group">
							    <label for="exampleFormControlInput1">Ho Ten</label>
							    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
						    </div>
						    <div class="form-group">
							    <label for="exampleFormControlInput1">Email</label>
							    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="neu co">
						    </div>
						</div>
						<div class="col-12 col-md-5">
						    <div class="form-group">
							    <label for="exampleFormControlInput1">So Dien Thoai</label>
							    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
						    </div>
						    <div class="form-group">
							    <label for="exampleFormControlInput1">Dia Chi</label>
							    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
						    </div>
						</div>
					</div>
					<form>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Ghi chu</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
					</form>
				</div>
				<div class="col-12 text-right">
					<button class="btn-dathang">Dat Hang</button>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			for(var i=0 ; i<4 ; i++){
				var myNumber1= parseInt($("#myNumber").val());
				var prices1= parseInt($("#price").val());
				$("#up").click( function() {
					myNumber1 = parseInt($("#myNumber").val()) + 1;
					$("#myNumber").val(myNumber1);
					prices1 = parseInt($("#price").val()) + 20000;
					$("#price").val(prices1);
				} );	
				$("#down").click( function(){
					myNumber1 = parseInt($("#myNumber").val()) - 1;
					if(myNumber1<1){
						$("#myNumber").val(1);
						alert('So luong sp phai lon hon 1');
					}else{
						$("#myNumber").val(myNumber1);
						prices1 = parseInt($("#price").val()) - 20000;		
						$("#price").val(prices1);
					}				
					
				});			
		}
		</script>
	</main>
	<footer class="footer-rada">
		<div class="container-fluid leuleu">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-8 footer-text-center">
					<div class="container">
						<div class="footer-text-left text-1">
							<span>Lien He</span>
							<span>|</span>
							<span>Chinh Sach</span>
							<p><i>Tac dung co the khac nhau tuy thuoc vao co dia cua nguoi dung</i></p>
						</div>
						<div class="footer-img-left img-2">
							<img src="img/footer-logo.png">
						</div>
						<div class="footer-text">
							<h5>CONG TY TNHH DAI BAC</h5>
							<p>Địa chỉ: Số 11 đường Công nghiệp 4, KCN Sài Đồng B, Phường Thạch Bàn, Quận Long Biên, Hà Nội</p>
							<p>Điện thoại: 043.7761445 - Fax: 043.7761448 </p>
							<p>Website: daibac.com - Email: daibac@daibac.com</p>
						</div>
						<div class="footer-text">
							<h5>Miền Nam</h5>
							<p>Địa chỉ: 133/5 Hoà Hưng, Phường 12, Quận 10, TP Hồ Chí Minh</p>
							<p>Điện thoại: 028 6265 0738/ 028 6264 6868</p>
						</div>
						<div class="footer-text">
							<h5>Miền Trung</h5>
							<p>Địa chỉ: 315 Ỷ Lan Nguyên Phi - Phường Hòa Cường Bắc - Quận Hải Châu - TP Đà Nẵng</p>
							<p>Điện thoại: 0236 3638 222 Fax 0236 3638 224</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-4 img-footer-right d-none d-sm-none d-md-block">
					<div class="container">
						
					</div>
				</div>
				<div class="btn-dathangonline-cha">
					<div class="row">
						<div class="col-12 header-meongao">
							<a href="./dathangonline.html"><button class="btn-dathangonline-con">Dat hang online</button></a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</footer>
</body>