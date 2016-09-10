<?php include "common_upper.html" ?>

    <!-- BEGIN ROW  -->
    <div class="row">
        <div class="col-lg-8">
            <section class="panel">
                <div class="panel-body">

                    <div class="task-thumb-details">
                        <h1>
                            <a href="#">
                                Work Progress
                            </a>
                        </h1>
                        <p>
                            tester lalala
                        </p>
                    </div>
                </div>
                <table class="table table-hover personal-task">

                    <tbody>

                    <?php
                    $cars=array("sar22","sar23","sar24");
                    foreach($cars as $key => $value){
                        ?>
                        <tr>
                            <td>
                                <?php
                                echo $key+1;
                                ?>
                            </td>
                            <td>
                                <a href="#" class="">
                                    <?php
                                    echo $value;
                                    ?>
                                </a>
                            </td>
                            <td>
                                <span class="badge bg-success">
                                    100%
                                </span>
                            </td>
                            <td>

                                <a class="btn btn-primary btn-xs" href="sysstat_index.php?sarXX=<?php
                                echo $value;
                                ?>">View details &raquo;</a>

                            </td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </section>
        </div>

    </div>
    <!-- END ROW  -->




<?php include "common_bottom.html" ?>