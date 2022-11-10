<?php
require_once('dbhelp.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Education Management</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">       
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Education Management</h2>
                <form method="get">
                    <input type="text" name="s" class="form-control" style="margin-top:15px; margin-bottom: 15px;" placeholder="Search by edu name...">
                </form>
            </div>

            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>School</th>
                            <th>Time</th>
                            <th>Major</th>
                            <th>Gra</th>
                            <th width="60px"></th>
                            <th width="60px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['s']) && $_GET['s'] != '') {
                            $sql = 'select * from education where truong like "%' . $_GET['s'] . '%"';
                        } else {
                            $sql = 'select * from education';
                        }   
                        $eduList = executeResult($sql);
                        foreach ($eduList as $edu) {
                            echo '<tr>
                                <td>' . $edu['id'] . '</td>
                                <td>' . $edu['truong'] . '</td>
                                <td>' . $edu['start_end'] . '</td>  
                                <td>' . $edu['noidung'] . '</td>
                                <td>' . $edu['thoigian'] . '</td>
                                <td><button class="btn btn-warning" onclick=\'window.open("input.php?id=' . $edu['id'] . '","_self")\'>Edit</button></td>
                                <td><button class="btn btn-danger" onclick="deleteEducation(' . $edu['id'] . ')">Delete</button></td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <button class="btn btn-success" onclick="window.open('input.php','_self')">Add education</button>
                <button class="btn btn-primary" onclick="window.open('./ResumePage/index.php','_self')">Go to CV page</button>
            </div>
        </div>
    </div>
    <!-- ajax for delete function -->
    <script type="text/javascript">
        function deleteEducation(id) {
            option = confirm('Do you want to delete this Education?')
            if (!option) {
                return;
            }
            $.post('delete_edu.php', {
                'id': id
            }, function(data) {
                // reload page
                alert(data)
                location.reload()
            })
        }
    </script>

</body>

</html>