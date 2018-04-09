<?php

	function allGen($tbl, $col) {
		include('connect.php');

    // Orders movies from highest rating to lowest (make colunm a int)
		$queryAll = "SELECT * FROM {$tbl} ORDER BY {$col} DESC";

		$getAll = mysqli_query($link, $queryAll);
		if($getAll){
			return $getAll;
		}else{
			$sorry = "Sorry We Had A Problem Accessing This Information";
			return $sorry;
		}
		mysqli_close($link);
	}


	function singleGen($tbl, $col, $id) {
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		$allSingle = mysqli_query($link, $querySingle);
			if($allSingle){
			return $allSingle;
		}else{
			$sorry = "Sorry We Had A Problem Accessing This Information";
			return $sorry;
		}
		mysqli_close($link);
	}


	function filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter) {
		include('connect.php');
		$filterQuery = "SELECT * FROM {$tbl}, {$tbl2}, {$tbl3} WHERE {$tbl}.{$col} = {$tbl3}.{$col} AND {$tbl2}.{$col2} = {$tbl3}.{$col2} AND {$tbl2}.{$col3}='{$filter}'";
		$allQuery = mysqli_query($link, $filterQuery);
		if($allQuery){
			return $allQuery;
		}else{
			$sorry = "Sorry We Had A Problem Accessing This Information";
			return $sorry;
		}
		mysqli_close($link);
	}


 ?>
