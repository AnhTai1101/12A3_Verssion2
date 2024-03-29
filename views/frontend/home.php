
<!DOCTYPE html>

<head>
    <title>Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="assets/frontend/images/accept.ico"/>
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="assets/frontend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="assets/frontend/css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="assets/frontend/css/font.css" type="text/css" />
    <link href="assets/frontend/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/frontend/css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="assets/frontend/css/monthly.css">
    <!-- //calendar -->
    <!-- calendar2 -->
    <link rel="stylesheet" href="assets/frontend/css/calendar.css">
    <!-- calendar2 -->
    <!-- //font-awesome icons -->
    <script src="assets/frontend/js/jquery2.0.3.min.js"></script>
    <script src="assets/frontend/js/raphael-min.js"></script>
    <script src="assets/frontend/js/morris.js"></script>
    <script>
        function load(){
            $.get('index.php',function(data){
                $('#name').css('display','block');
                $('#name').html(data);
                $('#result').attr('onclick','unload()');

            });
        }
        function unload(){
            $('#name').css('display','none');
            $('#result').attr('onclick','load()')
        }
    </script>
</head>

<body> 
    
    <section id="container">
        
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div style="width: 340px;" class="brand">
                <a href="index.php?area=backend&controller=login" class="logo">Demo</a>
                <div style="float: left;" class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="assets/frontend/#">
                                <i class="fa fa-tasks"></i>
                                <span class="badge bg-success">8</span>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <li>
                                    <p class="">You have 8 pending tasks</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info clearfix">
                                            <div class="desc pull-left">
                                                <h5>Target Sell</h5>
                                                <p>25% , Deadline 12 June’13</p>
                                            </div>
                                            <span class="notification-pie-chart pull-right" data-percent="45">
                                <span class="percent"></span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info clearfix">
                                            <div class="desc pull-left">
                                                <h5>Product Delivery</h5>
                                                <p>45% , Deadline 12 June’13</p>
                                            </div>
                                            <span class="notification-pie-chart pull-right" data-percent="78">
                                <span class="percent"></span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info clearfix">
                                            <div class="desc pull-left">
                                                <h5>Payment collection</h5>
                                                <p>87% , Deadline 12 June’13</p>
                                            </div>
                                            <span class="notification-pie-chart pull-right" data-percent="60">
                                <span class="percent"></span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info clearfix">
                                            <div class="desc pull-left">
                                                <h5>Target Sell</h5>
                                                <p>33% , Deadline 12 June’13</p>
                                            </div>
                                            <span class="notification-pie-chart pull-right" data-percent="90">
                                <span class="percent"></span>
                                            </span>
                                        </div>
                                    </a>
                                </li>

                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="assets/frontend/#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-important">4</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p class="red">You have 4 Mails</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="assets/frontend/images/3.png"></span>
                                        <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="assets/frontend/images/1.png"></span>
                                        <span class="subject">
                                    <span class="from">Jane Doe</span>
                                        <span class="time">2 min ago</span>
                                        </span>
                                        <span class="message">
                                        Nice admin template
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="assets/frontend/images/3.png"></span>
                                        <span class="subject">
                                    <span class="from">Tasi sam</span>
                                        <span class="time">2 days ago</span>
                                        </span>
                                        <span class="message">
                                        This is an example msg.
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="assets/frontend/images/2.png"></span>
                                        <span class="subject">
                                    <span class="from">Mr. Perfect</span>
                                        <span class="time">2 hour ago</span>
                                        </span>
                                        <span class="message">
                                        Hi there, its a test
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                        <!-- notification dropdown start-->
                        <li id="header_notification_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="assets/frontend/#">

                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-warning">3</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <li>
                                    <p>Notifications</p>
                                </li>
                                <li>
                                    <div class="alert alert-info clearfix">
                                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                        <div class="noti-info">
                                            <a href="#"> Server #1 overloaded.</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="alert alert-danger clearfix">
                                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                        <div class="noti-info">
                                            <a href="#"> Server #2 overloaded.</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="alert alert-success clearfix">
                                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                        <div class="noti-info">
                                            <a href="#"> Server #3 overloaded.</a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>
                        <!-- notification dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <!-- <input type="text" class="form-control search" placeholder=" Search"> -->
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="assets/frontend/images/information.png">
                        <span class="username">Xin chào, Khách</span>
                        <b class="caret"></b>
                    </a>
                    <!-- <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul> -->
                    
                </li>
                <!-- user login dropdown end -->
            
            </ul>
            <!--search & user info end-->
            <!-- </div> -->
                
                <!--logo end-->
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="backend">
                                <i class="fa fa-dashboard"></i>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        
                            
                        

                        <!-- <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Null</span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-bullhorn"></i>
                                <span>Loading...</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Loading...</span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Loading...</span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Dropzone</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span>Loading... </span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Loading...</span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>Loading...</span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">VLoading...</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-glass"></i>
                                <span>Loading...</span>
                            </a>
                            <ul class="sub">
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                                <li><a href="#">Loading...</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="login">
                                <i class="fa fa-user"></i>
                                <span>Login Page</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- //market-->
                <div class="market-updates">
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-2">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Tổng thu</h4>
                                <h3><?php echo $money_input; ?>đ</h3>
                                <p>được đưa vào quỹ!</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-1">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Số Người nộp</h4>
                                <h3><?php echo $total_input_money; ?></h3>
                                <p>Trên tổng số 49 người!</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Tổng chi</h4>
                                <h3><?php echo $money_output; ?>đ</h3>
                                <p>Trong các dịp hiếu hỉ!</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 market-update-gd">
                        <div class="market-update-block clr-block-4">
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <div class="col-md-8 market-update-left">
                                <h4>Còn lại &nbsp;<?php echo $money_now; ?>%</h4>
                                <h3><?php echo $con_lai; ?>đ</h3>
                                <!-- <p>Số tiền quỹ lớp còn lại</p> -->
                                <div class="progress progress-striped active ">
                                    <div class="bar <?php echo $money_now >=30 ? "green" : "red"; ?>" style="width:<?php echo $money_now; ?>%;"></div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    </div>
                    <!-- //market-->
                    <div class="agile-last-grids">
                        <div class="col-md-12 agile-last-left agile-last-right">
                            <div class="agile-last-grid">
                                <div class="area-grids-heading">
                                    <h3>Tiền còn trong kho</h3>
                                </div>
                                <div id="graph9"></div>
                                <script>
                                    var day_data = [{
                                        "elapsed": "01-01-2019",
                                        "value": 4500000
                                    }<?php foreach($listMoney as $nows): ?>,{
                                        "elapsed": "<?php echo date("d-m-Y", strtotime($nows->date)); ?>",
                                        "value": <?php echo $nows->money; ?>
                                    }
                                    <?php endforeach; ?>
                                    ];
                                    Morris.Line({
                                        element: 'graph9',
                                        data: day_data,
                                        xkey: 'elapsed',
                                        ykeys: ['value'],
                                        labels: ['Còn'],
                                        parseTime: false
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="agil-info-calendar">
                    
                    <!-- calendar -->
                        <div class="col-md-8 agile-calendar ">
                        <div class='calendar'>
                            <div class='day'></div>
                            <div class='month'>
                                <div class='month-name'></div>
                            </div>
                            <div class='number'></div>
                            </div>
                            <div class='contain'>
                            <div class='caltwo'>
                                <div class='daytwo'></div>
                                <div class='monthtwo'></div>
                                <div class='numtwo'></div>
                            </div>
                            <div class='clock'>
                                <div class='hour time'></div>
                                <div class='min time'></div>
                                <div class='sec time'></div>
                            </div>
                            </div>
                            <div class='meter'>
                            <div class='hours timer'></div>
                            <div class='minutes timer'></div>
                            <div class='seconds timer'></div>
                        </div>
                        </div>

                    
                    <!-- //calendar -->
                    <div class="col-md-4 w3agile-notifications">
                        <div class="notifications">
                            <!--notification start-->
                            <header class="panel-heading">
                                Các mục chi tiêu
                            </header>
                                <?php foreach($ghichu as $row): ?>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                    <div class="notification-info">
                                        <ul class="clearfix notification-meta">
                                            <li class="pull-left notification-sender"><?php echo $row->content; ?></li>
                                            <li class="pull-right notification-time"><?php echo $row->money; ?>.000đ</li>
                                        </ul>
                                        <p>
                                        <?php echo date("d-m-Y", strtotime($row->date)); ?>
                                        </p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>

                            <!--notification end-->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="agileits-w3layouts-stats">
                <div class="col-md-8 stats-info stats-last widget-shadow">
                        <div class="stats-last-agile">
                            <h3>Danh sách các bạn đã đóng tiền</h3>
                            <table class="table stats-table ">
                                <thead>
                                    <tr>
                                        <th style="color: #4F52BA;">STT</th>
                                        <th>Tên</th>
                                        <th>Hôn nhân</th>
                                        <th>Số tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($total as $rows): ?>
                                    <?php static $z=1; ?>
                                    <tr>
                                        <th scope="row"><?php echo $z; ?></th>
                                        <td style="color: #4F52BA;"><?php echo $rows->name; ?></td>
                                        <td><span class="label label-success">In progress</span></td>
                                        <td>
                                            <h5>200.000đ <i class="fa fa-level-up"></i></h5>
                                        </td>
                                    </tr>
                                    <?php $z++; ?>
                                    <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 stats-info widget">
                        <div class="stats-info-agileits">
                            <div class="stats-title">
                                <h4 class="title">Danh sách chưa đóng quỹ</h4>
                            </div>
                            <div class="stats-body">
                                <ul class="list-unstyled">
                                <?php foreach($no_money as $rows): ?>
                                <?php static $t=1; ?>
                                    <li><?php echo $rows->name; ?> <span class="pull-right"><?php echo $t; ?></span>
                                        <!-- <div class="progress progress-striped active progress-right">
                                            <div class="bar green" style="width:85%;"></div>
                                        </div> -->
                                    </li>
                                <?php $t++; ?>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- <div id="name">
                            
                            </div>
                            <button id="result" class="btn btn-compose" value="Click" onclick="load()" >Click</button>
                    </div> -->
                   
                    <div class="clearfix"> </div>
                </div>
                
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                    <p>© 2019 Visitors. All rights reserved | Design by Super Admin Tài</p>
                </div>
            </div>
            <!-- / footer -->
            
        </section>
        <!--main content end-->
    </section>
    
    <script src="assets/frontend/js/bootstrap.js"></script>
    <script src="assets/frontend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/frontend/js/scripts.js"></script>
    <script src="assets/frontend/js/jquery.slimscroll.js"></script>
    <script src="assets/frontend/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="assets/frontend/js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="assets/frontend/js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <script>
        $(document).ready(function() {
        // calendar
            var weekdays=["Chủ nhật","Thứ hai","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7"];
            var months=["Tháng Giêng","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"];
            setInterval(function(){
                var d=new Date();
                var day=d.getDay();
                var day_name=weekdays[day];
                var num=d.getDate();
                var mo=d.getMonth();
                var name=months[mo];
                $(".month-name").html(name.substring());// VD name.substring(0,3) cắt chuối lấy 3 ký tự đầu tiên
                $(".number").html(num);
                //$(".day").html(day_name);
                $(".monthtwo").html("Ngày-"+num+"<br>"+name);
                $(".daytwo").html(day_name);
                var minute=d.getMinutes();
                var hour=d.getHours();
                var sec=d.getSeconds();
                var secMinMeter=300/60;
                $(".hours").css("width",hour*12.5+"px");
                if(hour<10){
                    $(".hour").html("0"+hour+":")
                }
                else if(hour>12){
                    hour=hour-12;
                    if(hour<10){
                        $(".hour").html("0"+hour+":");
                    }
                }
                else{
                    $(".hour").html(hour+":");
                }
                if(minute<10){
                    $(".min").html("0"+minute+":");
                    $(".minutes").css("width",minute*5+"px");
                }
                else{
                    $(".min").html(minute+":");
                    $(".minutes").css("width",minute*5+"px");
                }
                if(sec<10){
                    $(".sec").html("0"+sec);
                    $(".seconds").css("width",sec*5+"px");
                }
                else{
                    $(".sec").html(sec);
                    $(".seconds").css("width",sec*5+"px");
                }
            },1000)
            // end calendar
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2015 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    }, {
                        period: '2015 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    }, {
                        period: '2015 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    }, {
                        period: '2015 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    }, {
                        period: '2016 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    }, {
                        period: '2016 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    }, {
                        period: '2016 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    }, {
                        period: '2016 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    }, {
                        period: '2017 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },

                ],
                lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="assets/frontend/js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load(function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

            switch (window.location.protocol) {
                case 'http:':
                case 'https:':
                    // running on a server, should be good.
                    break;
                case 'file:':
                    alert('Just a heads-up, events will not work when run locally.');
            }

        });
    </script>
    <!-- //calendar -->
    <!-- <div id="name">
        
        </div>
        <button id="result" class="btn btn-compose" value="Click" onclick="load()" >Click</button>
    </div> -->
</body>

</html>