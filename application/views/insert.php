<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Station</h2>
  <form class="form-horizontal" action="<?php echo site_url('welcome/insert') ?>" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="t_id">ขบวน:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="t_id" placeholder="" name="t_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="t_name">สถานี:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="t_name" placeholder="" name="t_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="t_out">เวลาออก:</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="t_out" placeholder="" name="t_out">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="h_to">ถึง:</label>
      <div class="col-sm-10">          
        <input type="time" class="form-control" id="h_to" placeholder="" name="h_to">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="h_out">ออก:</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="h_out" placeholder="" name="h_out">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="f_name">สถานี:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="f_name" placeholder="" name="f_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="f_out">ถึงเวลา:</label>
      <div class="col-sm-10">
        <input type="time" class="form-control" id="f_out" placeholder="" name="f_out">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="type">หมายเหตุ:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="type" placeholder="" name="type">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
