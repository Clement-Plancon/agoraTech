<?php

        if (isset($error))
        {

          echo '</br> <div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
        ?>

        <?php

        if (isset($succes))
        {

          echo '</br> <div class="alert alert-success" role="alert">' . $succes . '</div>';
        }
        ?>