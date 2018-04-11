<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script type="text/javascript">
            $(window).on('beforeunload', unload);
            $(window).on('unload', unload);
            
            function unload() {
                $.get('http://localhost/sms_project/index.php/user/logout');
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                    <A href="edit.html" >Edit Profile</A>

                    <p class=" text-info">Ma            y 05,2014,03:00 pm </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Md. Readul Islam</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-500x500.png" class="img-circle img-responsive"> </div>


                                <div class=" co                                                        l-md-9 col-lg-9 "> 
                                    <table class="table table                                                        -user-information">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td>Md. Readul Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Parent:</td>
                                                <td>Md.                                                        Rafiqul Islam</td>
                                            </tr>
                                            <tr>
                                                <td>Class:</td>
                                                <td>Five</td>
                                            </tr>
                                            <tr>
                                                <td>Section:</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Roll:</td>
                                                <td>02</td>
                                            </tr>
                                            <tr>
                                                <td>Birthday:</td>
                                                <td>10-20-2010</td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td>Male</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>Bank,colony,savar.</td>
                                            </tr>                                                                                     
                                            <tr>
                                                <td>Phone</td>
                                                <td>01682098380</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>r                                                        eadh@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>****</td>
                                            </tr>
                                        </tbody>
                                    </table>                                    
                                </div>
                            </div>
                        </div>
                        <div class=                                                        "panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"><                                            /i></a>
                            <span class="pull-right">
                                <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon                                                    -edit"></i></a>
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>