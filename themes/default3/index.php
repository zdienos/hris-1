<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SiKuMis</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico" />

        <link rel="stylesheet" href="<?php echo theme_path(); ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/fonts/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/fonts/ionicons/css/ionicons.min.css" />

        <link rel="stylesheet" href="<?php echo theme_path(); ?>/js/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/js/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" href="<?php echo theme_path(); ?>/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/css/_all-skins.min.css">
        
        <!-- EasyUI Style -->
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/css/metro/easyui.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo theme_path(); ?>/js/select2/select2.min.css" rel="stylesheet"/>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- EasyUI -->
        <script src="<?php echo theme_path(); ?>/js/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/easyui/jquery.easyui.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/easyui/datagrid-filter.js"></script>

        <!-- datables -->
        <script src="<?php echo theme_path(); ?>/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/datatables/dataTables.bootstrap.min.js"></script>
        
        
        <!--inline styles related to this page-->
        <?php echo $headtag; ?>
        
    </head>
    <body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
        <div class="wrapper">
            <header class="main-header">
                <a href="<?php echo base_url();?>" class="logo">
                    <span class="logo-mini"><img src="<?php echo base_url(); ?>/logo-pu.jpg" width="32" alt="Logo PU" /></span>
                    <span class="logo-lg"><img src="<?php echo base_url(); ?>/logo-pu.jpg" width="32" alt="Logo PU" /> SiKuMis</span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" title="Profile">
                                    <i class="glyphicon glyphicon-user"></i> &nbsp;
                                    <span class="hidden-xs"><?php $auth = $this->session->userdata('auth'); echo $auth['name']; ?></span> 
                                </a>                            
                            </li>
                            <li>
                                <a href="/logout" title="Logout">
                                    <i class="glyphicon glyphicon-log-out"></i> &nbsp;
                                    <span class="hidden-xs">Logout</span> 
                                </a>                            
                            </li>
                        </ul>
                    </div><!-- /.navbar-custom-menu -->
                </nav>
            </header>

            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <?php echo renderNavigation(); ?>
                    </ul>
                </section>
            </aside>

            <!-- content-wrapper -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <?php echo $header; ?>
                    </h1>
                    <ol class="breadcrumb">
                        <?php echo $breadcrumb; ?>
                    </ol>
                </section>
                <br />
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <!--PAGE CONTENT BEGINS-->
                            <?php echo $content; ?>
                            <!--PAGE CONTENT ENDS-->
                        </div>
                    </div>
                </section>
            </div><!-- /.content-wrapper -->
        </div><!-- /.wrapper -->        

        <!-- JavaScript -->
        
        <script src="<?php echo theme_path(); ?>/js/bootstrap/bootstrap.min.js"></script>
        
        
        <script src="<?php echo theme_path(); ?>/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/daterangepicker/moment.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo theme_path(); ?>/js/app.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo theme_path(); ?>/js/chartjs/Chart.min.js"></script>
        
        <script src="<?php echo theme_path(); ?>/js/select2/select2.min.js"></script>

        
        <script type="text/javascript">
            $(".select2").select2();
        
            /* TODO : Delete this line, reason : not all page using Datatables */ 
            $(function () {
                $('#dtTbls').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "order": [[1, 'asc']],
                    "info": true,
                    "autoWidth": false
                });                
            });
        </script>
        
    </body>
</html>