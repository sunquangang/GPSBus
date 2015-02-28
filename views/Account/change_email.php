<?php
include_once("../../assets/autoload.php");
include_once("../../assets/redirect.php");

session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <?php include_once("../../assets/resources/Header.php"); ?>
    <title>Зміна імейлу</title>
</head>

<body>
    <?php include_once("../../assets/resources/NavigationPanel.php"); ?>

    <div class="container adaptiveContainer">

        <div class="container adaptiveContainer">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <?php include_once("../../assets/resources/left_navbar.php"); ?>

                <!-- content -->
                <div class="col-md-10 adaptiveCol-MD-10">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Профіль</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <fieldset>
                                            <legend>Зміна імейлу:</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Старий імейл:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="oldEmail" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Новий імейл:</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control col-md-6" id="typeahead" name="newEmail" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead"></label>
                                                <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-primary" name="save">Зберегти</button>
                                                </div>
                                            </div>
                                            <?php include_once("../../controllers/ChangeController.php"); ?>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <footer>
            <p>© Company 2014</p>
        </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../web/js/jquery.min.js"></script>
    <script src="../../web/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../../web/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../web/js/spinners.js"></script>

</body>
</html>
