
<?php 

$conn;
function connect(){
	$conn = mysqli_connect('localhost','root','123456789','db_banhang') or die('Không thể kết nối!');
	return $conn;
}
function disconnect($conn){
	mysqli_close($conn);
}

// function hien_sanpham($m){
// 	$_GET['masp'] = $m;
// 	require_once 'sanpham.php';
// }

function get_3_newest(){
	$conn = connect();
	mysqli_set_charset($conn, 'utf8');
	$sql = "SELECT * FROM products ORDER BY created_at desc LIMIT 8";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	while ($row = mysqli_fetch_assoc($result)) {
		if($i == 8){ ?>
		<div class='product-container'>
			<a data-toggle='modal' data-target='#modal-id'>
				<div style="text-align: center;" class='product-img'>
					<img src='<?php echo $row['image'] ?>'>
				</div>
				<div class='product-info'>
					<h4><b><?php echo $row['name'] ?></b></h4>
					<b class='price'>Giá: <?php echo $row['unit_price'] ?> VND</b>
					<div class='buy'>
						<a class='btn btn-default btn-md unlike-container'>
						<i class='glyphicon glyphicon-heart unlike'></i>
					</a>
					<a class='btn btn-primary btn-md cart-container'>
					<i title='Thêm vào giỏ hàng' class='glyphicon glyphicon-shopping-cart cart-item'></i></a>
					<a class="snip0050"><span>Mua ngay</span><i class="glyphicon glyphicon-ok"></i></a>
				</div>
			</div>
		</a></div>
		<?php }
		$i++;
	}
	disconnect($conn);
}



?>

