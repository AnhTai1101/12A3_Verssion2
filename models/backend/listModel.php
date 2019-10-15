<?php 
    trait listModel{
		public function list_money(){
			// function lấy ra tất cả những người trong danh sách lớp
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
            $result = $query->fetchAll();
            return $result;
        }
		public function ajax_list_money(){
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->fetchAll();
			$result = json_encode($result);
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
        public function delete(){
			// function xóa người nộp tiền chuyển từ đã nộp qua chưa nộp
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update noptien set trangthai=0 where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
        }
        public function add(){
			// chuyển từ chưa nộp thành đã nộp
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("update noptien set trangthai=1 where id=:id");
			//thuc thi truy van
			$query->execute(array("id"=>$id));
        }
        public function add_name(){
			// thêm người mới vào trong danh sách lớp
            $name = isset($_POST['name']) ? $_POST['name'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into noptien set name=:name, sdt=1, trangthai=0,facebook=0, tien=200");
			//thuc thi truy van
			$query->execute(array("name"=>$name));
        }
        // lay record de truyen ra view
        // public function model_get($fromRecord,$recordPerPage){
		// 	//lay bien ket noi csdl
		// 	$conn = Connection::getInstance();			
		// 	//chuan bi cau truy van
		// 	$query = $conn->prepare("select * from noptien limit $fromRecord,$recordPerPage");
		// 	//chon che de duyet ban ghi
		// 	$query->setFetchMode(PDO::FETCH_OBJ);
		// 	//thuc hien truy van
		// 	$query->execute();
		// 	//duyet tat ca cac ban ghi nem ve mot bien
		// 	$result = $query->fetchAll();
		// 	return $result;
		// }
		// full danh sách
		public function list_content(){
			// lấy ra danh sách các mục chi tiêu
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
		// thêm nội dung chi tiêu bao gồm nội dung tiền và ngày
		public function Model_addContent(){
			$content = isset($_POST['content']) ? $_POST['content'] : 0;
			$content = ucfirst($content);
			$money = isset($_POST['money']) ? $_POST['money'] : 0;
			$date = isset($_POST['date']) ? $_POST['date'] : 0;
            //lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into ghichu set content=:content , date=:date, money=:money");
			//thuc thi truy van
			$query->execute(array("content"=>$content,"money"=>$money,"date"=>$date));
		}
		// số người đã nộp tiền
		public function money_input(){
			// lấy ra danh sách nhữnng người đã nộp và chuyển từ dạnh số qua dạng 0.000.000.000
            $conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->rowCount();
			// tinh tong so tien
			// số người nộp nhân 200.000đ
			$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
            return $d;
		}
		// số tiền chi ( đơn vị nghìn đồng)
		// function return total money output don vi vnd
		public function total_money_output(){
			$conn = Connection::getInstance();
			// chọn ra cột tiền trong table ghi chú
            $query = $conn->prepare("select money from ghichu");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->fetchAll();
			// tinh tong so tien
			//$d = $result*200000;
			// chia cách cách hàng ngìn và triệu bằng dấu chậm.
			//$d = strrev(chop(chunk_split(strrev($d),3,"."),"."));
			
			foreach($result as $d){
				// vòng lặp cộng tổng số tiền trong mục chi tiêu ( table ghichu)
				static $c = 0;
				$c = $c + $d->money;
				// $b = $d->money;
				// $a = (int)$b;
				// $c = $c + $a;
			}
			// nhân với đơn vị là 1000đ
			$c= $c*1000;
			return $c;
		}
		// số tiền đã nộp vào ( đơn vị nghìn đồng)
		public function total_money_input(){
			// hàm tính tổng số tiền đã nộp
			$conn = Connection::getInstance();
            $query = $conn->prepare("select * from noptien where trangthai=1");
            $query -> setFetchMode(PDO::FETCH_OBJ);
            $query -> execute();
			$result = $query->rowCount();
			// tinh tong so tien
			$d = $result*200000;
			return $d;
		}
		// function add money in list chi ( thêm vào table chi tiêu để tính ra tổng tiển còn lại)
		public function add_ListMoney(){
			// hàm thêm tiền vào trong danh sách chi tiêu
			// gọi hàm tình tổng số tiền nộp vào
			$input = $this->total_money_input();
			// gọi hàm tính tổng số tiền chi
			$output = $this->total_money_output();
			// tiền còn lại là bằng tổng tiền còn về trừ đi tổng tiềnchi
			$money = $input - $output;
			$datet = getdate();
			$mdate = $datet['mday'];
			$mon = $datet['mon'];
			$year = $datet['year'];
			$date = "$year"."-"."$mon"."-"."$mdate";
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van
			$query = $conn->prepare("insert into list_chi set money=:money ,date=:date");
			//thuc thi truy van
			$query->execute(array("money"=>$money,"date"=>$date));

		}
    }
?>