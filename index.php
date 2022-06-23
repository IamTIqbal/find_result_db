<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Query form Database</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Data Query | MySql Database </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="number" name="search" oninvalid="this.setCustomValidity('Enter customer ID Here')" required 
                                        value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                                        class="form-control" placeholder="Type Anythings">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div id="result_display">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" width="100%">
                            <tbody>
                             <?php 
                                    $con = mysqli_connect("sql.localhost","username","password","database name");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM table_name WHERE CONCAT(customer_id ) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                            <tr>
                                <td>Customer Id</td>
                                <td><?= $items['customer_id']; ?></td>
                                <td>Customer Type</td>
                                <td><?= $items['ctype']; ?></td>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <td colspan="3"><?= $items['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Customer's Company Name</td>
                                <td colspan="3"><?= $items['company']; ?></td>
                            </tr>
                            <tr>
                                <td>Member Valid</td>
                                <td><?= $items['date']; ?></td>
                                <td>Branch Code</td><td><?= $items['branch_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?= $items['csex']; ?></td>
                                <td>Batch No</td>
                                <td><?= $items['branch_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Colum</td>
                                <td><?= $items['ddb']; ?></td>
                                <td>Colum</td>
                                <td><?= $items['ddb']; ?></td>
                            </tr>
                            <tr>
                                <td>Colum</td>
                                <td colspan="3">
                                <span id="i_name"><?= $items['course']; ?></span>
                                </td>
                            </tr>
                            </tbody>  
                            <tbody>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">Enter A Valid ID No </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/main.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"> </script>
</body>
</html>