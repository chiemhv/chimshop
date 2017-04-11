<!DOCTYPE html>
<html>
<head>
	<title>Business Operations Center</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/admin.css')}}">
</head>
<body>
<div class="container">
	<div class="row" id="menu-header">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		     <a class="navbar-brand" href="#">Business Operations Center</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a href="#">Lịch trực online</a></li>
		        <li><a href="#">Thông báo</a></li>
		        <li><a href="#">Kế hoạch kinh doanh</a></li>
		        <li><a href="#">Thông tin nhân viên</a></li>
		        <li><a href="#">Đăng xuất</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	</div>
<!-- PHAN THAN -->
<div class="container" id="c_phanthan">
	<div id="c_menu_bar">
		<div id="area_menu">
			<ul>
			  <li><a href="#">MÀN HÌNH ĐIỀU HÀNH</a></li>
			</ul>
			<label>BÁN HÀNG</label>
			<ul>
			  <li><a href="#">Đơn hàng</a></li>
			  <li><a href="#">Doanh Số</a></li>
			  <li><a href="#">Lợi nhuận</a></li>
			</ul>
	 		<label>NGƯỜI DÙNG</label>
	 		<ul>
			  <li><a href="#">quản trị viên</a></li>
			  <li><a href="#">khách hàng</a></li>
			  <li><a href="#">Ví</a></li>
			  <li><a href="#">Bình Luận</a></li>
			  <li><a href="#">Tin nhắn</a></li>
			</ul>
			<label>KHO HÀNG</label>
			<ul>
			  <li><a href="{{URL::to('admin/catalog')}}">Catalog</a></li>
			  <li><a href="#">Producer</a></li>
			  <li><a href="#">Product</a></li>
			  <li><a href="#">Sản phẩm khuyến mãi</a> </li>
			</ul>
			<label>MEDIA</label>
			<ul>
			  <li><a href="#">Image</a></li>
			  <li><a href="#">Producer</a></li>
			  <li><a href="#">Product</a></li>
			  <li><a href="#">Sản phẩm khuyến mãi</a> </li>
			</ul>
		</div>
	</div>
	<div id="c_content">
	    @yield('content_admin')
	</div>
	<div id="c_quangcao">
	     <div id="c_quangcao_content">
				<table class="table table-hover" border="1">
				<thead>
					<tr>
						<th><center>WEBSITE INDEX</center></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
								<table>
									<tbody>
										<tr>
											<td>Số người dùng:</td>
											<td>123.689 người</td>
										</tr>
									</tbody>
								</table>
						</td>
					</tr>
					<tr>
						<td>
								<table>
									<tbody>
										<tr>
											<td>Số sản phẩm:</td>
											<td>200 sp</td>
										</tr>
									</tbody>
								</table>
						</td>
					</tr>
					<tr>
						<td>
								<table>
									<tbody>
										<tr>
											<td>Số nhà cung cấp:</td>
											<td>50 Producer</td>
										</tr>
									</tbody>
								</table>
						</td>
					</tr>
					<tr>
						<td>
								<table>
									<tbody>
										<tr>
											<td>Doanh thu tuần:</td>
											<td>10.000.000 đ</td>
										</tr>
									</tbody>
								</table>
						</td>
					</tr>
					<tr>
						<td>
								<table>
									<tbody>
										<tr>
											<td>Doanh thu tháng 2: </td>
											<td> 90.000.000 đ</td>
										</tr>
									</tbody>
								</table>
						</td>
					</tr>
					<tr>
						<td>
							   <table>
									<tbody>
										<tr>
											<td>Doanh thu năm 2017: </td>
											<td> 100.000.000 đ</td>
										</tr>
									</tbody>
								</table>
						</td>
					</tr>
				</tbody>
				</table>
	     </div>
	</div>
</div>
<div class="container">
 	<div class="row" id="admin_footer">
 		LIÊN HỆ HOTLINE : 0989.686.392 / 0942100362  -- CODE BY : HÀ CHIÊM PTIT
 	</div>
</div>
</body>
</html>


