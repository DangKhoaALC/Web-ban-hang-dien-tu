<?php


function construct() {
	load_model('index');

}

function listAction() {

	$data_tmp =  getAllCustomer();
//phan trang
	if(!empty($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page =1;
	}
	
	$numProduct = count($data_tmp);
	$productOnPage = 5;
	$num = ceil($numProduct/$productOnPage);
	if(!empty($_GET['page']) && $_GET['page']>$num){
		$page =$num;
	}
	$start = ($page - 1) * $productOnPage;
	$res =[];
	for ($i=$start; $i < $start+$productOnPage; $i++) { 
		if(isset($data_tmp[$i]))
        $res[] = $data_tmp[$i];
	};

	$data = [$res, $num, $page];
	 load_view('index',$data);
}

function deleteAction() {
	$id = $_GET['id'];
	delete_customer_by_id($id);
	header('location:?modules=customers&controllers=index&action=list');
}

function editAction() {
	
	$id = $_GET['id'];
	$data = get_customer_by_id($id);
	load_view('show',$data);
	
}

function updateAction() {
	$id = $_GET['id'];
	$data = get_customer_by_id($id);
	$data1 = array();
	if(!empty($_POST['btn_submit'])){

		if(empty($_POST['name'])){
			$data1['fullname'] = $data[0]['fullname'];
		}else{
			$data1['fullname'] = $_POST['fullname'];
		}

		if(empty($_POST['mail'])){
			$data1['mail'] = $data[0]['mail'];
		}else{
			$data1['mail'] = $_POST['mail'];
		}

		if(empty($_POST['phone'])){
			$data1['phone'] = $data[0]['phone'];
		}else{
			$data1['phone'] = $_POST['phone'];
		}

		if(empty($_POST['address'])){
			$data1['address'] = $data[0]['address'];
		}else{
			$data1['address'] = $_POST['address'];
		}

		if(empty($_POST['create_date'])){
			$data1['create_date'] = $data[0]['create_date'];
		}else{
			$data1['create_date'] = $_POST['create_date'];
		}
	}

	///////////////////////////////////////
	if(update_customer_by_id($id,$data1)){
		$res = get_customer_by_id($id);
		load_view('show',$res);
            echo " <script type='text/javascript'> alert('Cập Nhật Thành Công');</script>";
	}else{
			load_view('show',$data);
            echo " <script type='text/javascript'> alert('Cập Nhật Thất Bại');</script>";
	}
	
	
}

?>