<?php
?>

        <section>
            <p>This is the footer</p>
            <?php var_dump($_SESSION); ?>
            <?php echo "POSTED DATA:";
                    var_dump($_POST); ?>
            <?php echo "This is the role".$_SESSION['userconnected']['role'];

            
            
            
                        ?>

        </section>


    </body>

</html>

