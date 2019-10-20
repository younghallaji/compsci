<?php
session_start();
include('conn.php');
if($_POST["user"] == "" OR $_POST["pass"] == "")
	{
		$_SESSION['index_msg']="Empty space Not Allowed";
		header("location:../index.php");
	}

else{
	$select = "SELECT * FROM tbl_student WHERE matricNo = '$_POST[user]' AND password = '$_POST[pass]' ";
	$query = mysqli_query($conn, $select);
	$num = mysqli_num_rows($query);
	$data = mysqli_fetch_array($query);

		if ($num > 0) {

			$_SESSION["username"] = $data["matricNo"];
			$_SESSION["email"] = $data["email"];
			header("location:../dashboard.php");
		}

		else
		{
		$selectAdmin = "SELECT * FROM admin WHERE username = '$_POST[user]' AND password = '$_POST[pass]' ";
		$queryAdmin = mysqli_query($conn, $selectAdmin);
		$numofAdmin = mysqli_num_rows($queryAdmin);
		$adminData = mysqli_fetch_array($queryAdmin);
		if($numofAdmin > 0){

			$_SESSION["username"] = $data["username"];
			$_SESSION["email"] = $data["email"];
			header("location:../footer.php");

		}
		else{
			$_SESSION['index_msg']="Invalid Login details";
			header("location:../index.php");
		}


		}

}

?>