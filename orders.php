<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->

        <!-- DataTables CSS -->

        <!-- Custom CSS -->
        <link href="css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">
                <?php
            require_once './managers/web_manager.php';
            $manager = new web_manager();
            $data = $manager->GetAllOrders();
            ?>
            <!-- Navigation -->
           <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">ניהול הזמנות</a>
                </div>
                <!-- /.navbar-header -->

                 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">גרביים</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">

                    <!-- /.dropdown -->
                 
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="orders.php"><i class="fa fa-dashboard fa-fw"></i> Orders</a>
                            </li>
                           
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
     <!-- /.navbar-top-links -->

            
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">הזמנות</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                כל ההזמנות 
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>OrderId</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>PhoneNumber</th>
                                                <th>OtherPhone</th>
                                                <th>Notes</th>
                                                <th>Is_Delivered</th>
                                                <th>Is_Paid</th>
                                                <th>TotalQuantity</th>
                                                <th>TotalPrice</th>
                                                <th>TotalItems</th>
                                                <th>edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $value) {
                                                            
                                                        ?>
                                            <tr class="odd gradeX">
                                                <td><a href="orderdetails.php?orderid=<?php echo $value->OrderId ;?>"> <?php echo $value->OrderId ;?></a> </td>
                                                <td><?php echo $value->Name ;?></td>
                                                <td><?php echo $value->Address ;?></td>
                                                <td><?php echo $value->City ;?></td>
                                                <td><?php echo $value->PhoneNumber ;?></td>
                                                <td><?php echo $value->OtherPhone ;?></td>
                                                <td><?php echo $value->Notes ;?></td>
                                                <td><?php echo $value->Is_Delivered ;?></td>
                                                <td><?php echo $value->Is_Paid ;?></td>
                                                <td><?php echo $value->TotalQuantity ;?></td>
                                                <td><?php echo $value->TotalPrice;?></td>
                                                <td><?php echo $value->TotalItems;?></td>
                                                <td><a href="editorders.php?orderid=<?php echo $value->OrderId ;?>"> Edit</a> </td>
                                                
                                            </tr>
                                            <?php }?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->

                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- /.row -->
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- jQuery Version 1.11.0 -->
            <script src="js/jquery-1.11.0.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->


            <!-- Custom Theme JavaScript -->
            <script src="js/sb-admin-2.js"></script>

            <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    </body>

</html>
