<?php
    include "models/frontend/listModel.php";
    class homeController extends Controller{
        use listModel;
        // lay so record trong trang
        public function index(){
			//quy dinh so ban ghi tren mot trang
			// $recordPerPage = 10;
			//----
			//phan trang	
			//tinh tong so ban ghi
			$total = $this->list_money();	
			$total_input_money = $this->total_input_money();
			$a = $this->total_money_input();		
			$b = $this->total_money_output();
			$c = $a - $b;
			$con_lai = strrev(chop(chunk_split(strrev($c),3,"."),"."));		
			//tinh tong so trang
			// $numPage = ceil($total/$recordPerPage);//ham ceil de lay tran
			//lay bien p truyen tu url -> bien nay the hien la dang o may
			// $p = isset($_GET["p"])&&is_numeric($_GET["p"])? $_GET["p"]-1:0;
			// $fromRecord = $p*$recordPerPage;			
			//----
			//goi ham model_get() trong class userModel de lay du lieu
			// $data = $this->model_get($fromRecord,$recordPerPage);
			$money_output = $this->money_output();
			$ghichu = $this->list_content();
			$money_input = $this->money_input();
			$this->renderHTML("views/frontend/home.php", array("con_lai"=>$con_lai,"money_output"=>$money_output,"total"=>$total,"ghichu"=>$ghichu,"money_input"=>$money_input,"total_input_money"=>$total_input_money));
		}

    }
?>