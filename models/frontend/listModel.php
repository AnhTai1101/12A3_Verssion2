<?php 
    trait listModel{
		// danh sach da nop tien full data
		public function list_money(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
            $result = $query->fetchAll();
            return $result;
        }
        // public function list_money(){
        //     $conn = Connection::getInstance();
        //     $query = $conn->prepare("select * from noptien");
        //     $query -> setFetchMode(PDO::FETCH_OBJ);
        //     $query -> execute();
        //     $result = $query->rowCount();
        //     return $result;
        // }
        // public function model_get($fromRecord,$recordPerPage){
		// 	//lay bien ket noi csdl
		// 	$conn = Connection::getInstance();			
		// 	//chuan bi cau truy van
		// 	$query = $conn->prepare("select * from noptien where trangthai=1 limit $fromRecord,$recordPerPage");
		// 	//chon che de duyet ban ghi
		// 	$query->setFetchMode(PDO::FETCH_OBJ);
		// 	//thuc hien truy van
		// 	$query->execute();
		// 	//duyet tat ca cac ban ghi nem ve mot bien
		// 	$result = $query->fetchAll();
		// 	return $result;
		// }
		// danh sach cac muc chi tieu full data
		public function list_content(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();			
			//chuan bi cau truy van
			$query = $conn->prepare("select * from ghichu");
			//chon che de duyet ban ghi
			$query->setFetchMode(PDO::FETCH_OBJ);
			//thuc hien truy van
			$query->execute();
			//duyet tat ca cac ban ghi nem ve mot bien
			$result = $query->fetchAll();
			return $result;
		}
		// model insert money from student
		public function money_input(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->rowCount();
			// tinh tong so tien
			$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
            return $d;
		}
		// v2
		// total the students added money
		public function total_input_money(){
			$conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->rowCount();
			return $result;
		}
		// số tiền chưa nộp ( đơn vị nghìn đồng)
		// function return total money output don vi vnd
		public function total_money_output(){
			$conn = Connection::getInstance();
            $query = $conn->prepare("select money from ghichu");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->fetchAll();
			// tinh tong so tien
			//$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			//$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
			
			foreach($result as $d){
				static $c = 0;
				$c = $c + $d->money;
				// $b = $d->money;
				// $a = (int)$b;
				// $c = $c + $a;
			}
			$c= $c*1000;
			return $c;
		}
		// số tiền đã nộp vào ( đơn vị nghìn đồng)
		public function total_money_input(){
			$conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->rowCount();
			// tinh tong so tien
			$d = $result*200000;
			return $d;
		}
		// hàm tính % số tiền còn lại
		// public function money_now(){
		// 	$a = $this->total_money_input();
		// 	$b = $this->total_money_output();
		// 	// so tien con lai la
		// 	$c = $a - $b;
		// 	// phan tram so tien con lai la
		// 	$d = round(($c/$a)*100);
		// 	return $b;
		// }
		// end v2
		// function tinh total money output
		public function money_output(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select money from ghichu");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->fetchAll();
			// tinh tong so tien
			//$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			//$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
			
			foreach($result as $d){
				static $c = 0;
				$c = $c + $d->money;
				// $b = $d->money;
				// $a = (int)$b;
				// $c = $c + $a;
			}
			$c= $c*1000;
			$e = strrev(chop(chunk_split(strrev($c),3,"."),"."));
            return $e;
		}
		// lay list student no add money
		public function no_money(){
			$conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=0");
            $query -> setFetchMode(PDO::FETCH_OBJ);
			$query -> execute();
			$result = $query->fetchAll();
			return $result;
		}
    }
?>