<?php
/*                         I N D E X . P H P
 * BRL-CAD
 *
 * Copyright (c) 1995-2013 United States Government as represented by
 * the U.S. Army Research Laboratory.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public License
 * version 2.1 as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this file; see the file named COPYING for more
 * information.
 */
/** @file geometry_viewer/accounts/index.php
 *
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Signup</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="copyright" content="" />

        <link href="inc/css/bootstrap.min.css" rel="stylesheet" 
        type="text/css" media="screen" />
        <script src="inc/js/bootstrap.min.js"></script>
        <script src="inc/js/jquery-1.10.2.min.js"></script>
        
        <style>
            body {
                background-color:#F2F2F2;
            }
            #login-form {
            margin-left: 38%;
            }

        </style>
        </head>

	<body>
            <?php
                $userAccountExists = $_GET['userExists'];
                if ($userAccountExists == "yes") {
                echo "Account already exists";
                }
            ?>
        
        <legend style="text-align: center;">Sign Up</legend>
        <form method="post" action="sendmail.php" 
        class="form-horizontal" role="form" id="login-form">
            <fieldset>
    	        <div class="form-group">
                    <label class="col-lg-1 control-label" 
                    for="username">Username:</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" 
                        id="name" name="username" style="width: 250px;"required>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-lg-1 control-label" 
                    for="password">Password:</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" 
                        id ="password" name="password" 
                        style="width: 250px;" required>
                    </div>
                </div>


                <div class="form-group">
    		    <label class="col-lg-1 control-label" 
                    for="email">Email:</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" 
                        id ="email" name="email" style="width: 250px;" required>
                    </div>
                </div>
        
                <div>
    		    <input type="submit" value="Signup Now" 
                    class="btn btn-primary" name="signup" 
                    style="width: 322px;"/>			
                </div>
            </fieldset>    
        </form>			
    </body>
</html>

<?php
/*                                                                    
 * Local Variables:                                                   
 * mode: PHP                                                            
 * tab-width: 8
 * End:                                                               
 * ex: shiftwidth=4 tabstop=8                                         
 */
?>
