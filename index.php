<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <title>Query form Database</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Certificate E-Verify | Akbor Ali Institute of Information Technology </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="number" name="search" min="20000000" max="39999999" oninvalid="this.setCustomValidity('Enter ID Number Here')" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Type Your ID No">
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
                                    $con = mysqli_connect("sql102.vibd.eu.org","vibd_31680043","IL7H@SFQ","vibd_31680043_everify");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM certificate WHERE CONCAT(uid,id,name,fname,dob,course,download) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                            <tr>
                                <td>ID No</td>
                                <td><?= $items['id']; ?></td>
                                <td>Certificate Key</td>
                                <td><?= $items['uid']; ?></td>
                            </tr>
                            <tr>
                                <td>Student Name</td>
                                <td colspan="3"><?= $items['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Father's Name</td>
                                <td colspan="3"><?= $items['fname']; ?></td>
                            </tr>
                            <tr>
                                <td>Session</td>
                                <td><?= $items['syear']; ?></td>
                                <td>Branch Code</td><td><?= $items['brnc']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?= $items['ssex']; ?></td>
                                <td>Batch No</td>
                                <td><?= $items['brnc']; ?></td>
                            </tr>
                            <tr>
                                <td>Result</td>
                                <td><?= $items['cgpa']; ?></td>
                                <td>Date of Birth</td>
                                <td><?= $items['dob']; ?></td>
                            </tr>
                            <tr>
                                <td>Course Name</td>
                                <td colspan="3">
                                <span id="i_name"><?= $items['course']; ?></span>
                                </td>
                            </tr>
                             <tr>
                                <td colspan="4">
                                <a href="<?= $items['download']; ?>" class="btn btn-info"><span class="glyphicon glyphicon-arrow-down"></span> Download</a>
                                <a onclick="window.print()" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</a>
                                <a onclick="history.back()" class="btn btn-success"><span class="glyphicon glyphicon-step-backward"></span> Back</a>
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
    <script href="js/main.js" > </script>
</body>
</html>