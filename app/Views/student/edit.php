<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href=" <?=base_url('Bootstarp/css/bootstrap.min.css')?>">
    <title>Form</title>
</head>
<body class="m-4 p-4">
    <form action="#" method="post" style="width:50%">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name:</label>
    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name" value=<?="'$data->name'"?>>
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
    <input name="address" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Address" value=<?="'$data->address'"?>>
    </div>
    <button class="btn btn-primary"  type="submit" >Submit</button>
</form>
</body>
</html>
