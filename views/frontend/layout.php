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
    <?php echo $this->view; ?>
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
</body>

</html>