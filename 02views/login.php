<?php

    include_once 'header.php';
    

?>

            
            <h1 class="text-center">Login Form</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form action="../03controllers/teamController.php" method="GET" role="form">
                            <div class="form-group">
                                <label for="username">
                                    Email
                                </label>
                                <input type="email" name="email" class="form-control" id="username" placeholder="Your email goes here" required>
                            </div>
                            <div class="form-group">
                                
                                <label for="password">
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Your password goes here." required>
                            </div>

                            <div class="form-group">

                                <input type="submit" name="access" class="btn btn-default" value="Log In">

                            </div>
                            

                             <?php
//TODO2 Mensaje a mostrar si hay un error en la conexion                               
                            ?> 


                        </form>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>

<?php

    include_once 'footer.php';

?>
