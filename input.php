<?php
    $truong = $start_end = $noidung = $thoigian = '';
    require_once('dbhelp.php');
    if(!empty($_POST)){
        $id = '';
        if(isset($_POST['id'])){
            $id = $_POST['id'];
        }
        if(isset($_POST['truong'])){
            $truong = $_POST['truong'];
        }
        if(isset($_POST['start_end'])){
            $start_end = $_POST['start_end'];
        }
        if(isset($_POST['noidung'])){
            $noidung = $_POST['noidung'];
        }
        if(isset($_POST['thoigian'])){
            $thoigian = $_POST['thoigian'];
        }

        //fix loi sql intraction
        $truong = str_replace('\'','\\\'', $truong);
        $start_end = str_replace('\'','\\\'', $start_end);
        $noidung = str_replace('\'','\\\'', $noidung);
        $thoigian = str_replace('\'','\\\'', $thoigian);
        
        if($id != ''){
            //update
            $sql = "update education set truong='$truong',start_end='$start_end',noidung='$noidung',thoigian='$thoigian' where id =".$id;
        }
        else{
            //insert 
            $sql = "insert into education(truong,start_end,noidung,thoigian) values('$truong','$start_end','$noidung','$thoigian')";
        }
        execute($sql);
        // direction to index.php
        header('Location: index-edu.php');
        die();
    }
    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = 'select * from education where id = '.$id;
        $eduList = executeResult($sql);
        if($eduList != null && count($eduList) > 0){
            $edu = $eduList[0];
            $truong = $edu['truong'];
            $start_end = $edu['start_end'];
            $noidung = $edu['noidung'];
            $thoigian = $edu['thoigian'];
        }else {
            $id = '';
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Input education</title>
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
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Input education's Detail Information</h2>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <label for="truong" name="truong">School:</label>
                        <input type="number" style="display:none" name="id" value="<?=$id?>">
                        <input required="true" type="text" class="form-control" id="truong" name="truong" value="<?=$truong?>">
                    </div>
                    <div class="form-group">
                        <label for="start_end" name="start_end">Start-end:</label>
                        <input required="true" type="text" class="form-control" id="start_end" name="start_end" value="<?=$start_end?>">
                    </div>
                    <div class="form-group">
                        <label for="noidung">Content:</label>
                        <textarea class="form-control" id="noidung" name="noidung" rows="3" value="<?=$noidung?>" placeholder="<?=$noidung?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thoigian" name="thoigian">Time:</label>
                        <input required="true" type="text" class="form-control" id="thoigian" name="thoigian" value="<?=$thoigian?>">
                    </div>
                    
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>