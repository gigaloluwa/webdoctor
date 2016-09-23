<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="WebDoctor">
        <meta name="Author" content="Gigaloluwa">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <title>WebDoctor:Register</title>
        <!-- Bootstrap core CSS -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="../bootstrap/css/pages.css" rel="stylesheet" type="text/css" />
        <script src="../bootstrap/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/menu.js" type="text/javascript"></script>
        <link href="../bootstrap/css/menu.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="../bootstrap/js/notify.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    </head>
    <body>
        <div class="container">
            <div id='cssmenu'>
                <ul>
                    <li>
                        <a href="../index.php">webdoctor.ng</a>
                    </li>
                    <li class="active">
                        <a href="#">Profiles</a>
                    </li>
                    <li>
                        <a href="./register.php">Register</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
            <div class="row">
</div>
            <div class="container-fluid">
                <form method="POST" action="../functions/fn_register.php" name='lendr_registration' id='lendr_registration'>
                    <table class='table-responsive table table-condensed'>
                        <tr class="segment_lead">
                            <td colspan='4'>
                                <label>Personal Information</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Last Name</label>
                            </td>
                            <td colspan="3">
                                <input type='text' class="form-control" name='Last_Name' id='Last_Name' placeholder="Last Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Other Names</label>
                            </td>
                            <td colspan="3">
                                <input type='text' class="form-control" name='Other_Names' id="Other_Names" placeholder="Other Names" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Gender
                            </td>
                            <td>
                                <select class='form-control' name="sex">
                                    <option value='Female'>Female</option>
                                    <option value='Male'>Male</option>
                                </select>
                            </td>
                            <td style="text-align:center">D.O.B.</td>
                            <td>
                                <input type="date" class="form-control" name="dob" id="dob">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td colspan="3">
                                <input type='email' class="form-control" name='email' id="email" placeholder="email address" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Phone Number</label>
                            </td>
                            <td colspan="3">
                                <input type='number' class="form-control" name='phone' id="phone" placeholder="Phone" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Marital Status</label>
                            </td>
                            <td colspan="3">
                                <select class='form-control' name="marital_status">
                                    <option value='Single'>Single</option>
                                    <option value='married'>Married</option>
                                    <option value='widowed'>Widowed</option>
                                </select>
                            </td>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>No. of Children</label>
                        </td>
                        <td colspan="3">
                            <input type='number' class="form-control" name='no_of_kids' placeholder="Kids? How many?">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Education Level</label>
                        </td>
                        <td colspan="3">
                            <select class='form-control' name="ed_level">
                                <option value='5'>POST SECONDARY EDUCATION</option>
                                <option value='POST PRIMARY'>POST PRIMARY EDUCATION</option>
                                <option value='PRIMARY'>PRIMARY EDUCATION</option>
                                <option value='NONE'>NO FORMAL EDUCATION</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Residential Address</label>
                        </td>
                        <td colspan="3">
                            <input type='text' class="form-control" name='res_address' id="res_address" placeholder="Home address" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Local Government Area</label>
                        </td>
                        <td colspan="3">
                            <input type='text' class="form-control" id='' placeholder="LGA">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">By clicking the Submit button, I have read and agree with the 
                            <a href="../downloads/Terms_and_conditions/Terms of Use - LendR.pdf" target="_blank">terms and conditions</a> of this site
                        </td>
                    </tr>
                    <tr> 
                        <td colspan="4">
                            <button type="btn" id="submit_btn" class="btn btn-danger">Submit</button>
                        </td>
                </form>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="inner">
        <p>© Agnosys Technologies </p>
    </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>-->
<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../bootstrap/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="../bootstrap/js/notify.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="../bootstrap/js/webdoctor_register.js" type="text/javascript"></script>
