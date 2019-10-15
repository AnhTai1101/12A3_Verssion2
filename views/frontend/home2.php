<!DOCTYPE html>

<head>
    <title>Demo Class 12A3</title>
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
    <base href="https://mobibbz.000webhostapp.com/">
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="assets/frontend/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/png" href="assets/frontend/images/accept.ico"/>
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
    <!-- //font-awesome icons -->
    <script src="assets/frontend/js/jquery2.0.3.min.js"></script>
    <script src="assets/frontend/js/raphael-min.js"></script>
    <script src="assets/frontend/js/morris.js"></script>
</head>

<body>
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
    <script src="assets/frontend/js/bootstrap.js"></script>
    <script src="assets/frontend/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/frontend/js/scripts.js"></script>
    <script src="assets/frontend/js/jquery.slimscroll.js"></script>
    <script src="assets/frontend/js/jquery.nicescroll.js"></script>
    <script language="javascript" type="text/javascript" src="assets/frontend/js/flot-chart/excanvas.min.js"></script><![endif]
    <!-- <script src="assets/frontend/js/jquery.scrollTo.js"></script> -->
    <!-- morris JavaScript -->
    
    <!-- //calendar -->
</body>

</html>
