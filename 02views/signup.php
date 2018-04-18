<?php

    include_once 'header.php';
    

?>


        <h1>New Member Team</h1>



            <h1 class="text-center">Login Form</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form action="../01models/signup.php" method="GET" role="form">
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="Name" class="form-control" id="Name" placeholder="New team member's name">                               
                        </div>

                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="text" name="Phone" class="form-control" id="Phone" placeholder="Phone number">
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="Email" class="form-control" id="Email" placeholder="Valid e-mail">
                        </div>

<!-- TODO1 JUST VISIBLE TO ADMIN
 -->     
<!--  TODO3 MENSAJE SI EL MAIL YA EXISTE, O SEA, COMO 
 --> 
                    <div class="form-group">
                            <label for="Role">Role</label>
                            <input type="text" name="Role" class="form-control" id="Role" placeholder="Role">
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="text" name="Password" class="form-control" id="Password" placeholder="Your password" required>
                        </div>

                            <div class="form-group">

                                <input type="submit" name="enviar" class="btn btn-default" value="Enviar">

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





