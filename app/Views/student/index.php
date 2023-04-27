<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href=" <?=base_url('Bootstarp/css/bootstrap.min.css')?>">
    <title>Student Information</title>
    <style>
      .msg{
        color:green;
      }
      </style>
</head>
<body>
  <div class="msg">
    <h1>
    <?php
    if(session()->getFlashdata('status')){//Student Controller redirect gareko bela ->with('satus','message added deleted successfully') patha ko ya display hunxw
      echo "".session()->getFlashdata('status');
    };
    ?>
    </h1>
  </div>
    <h1 class="m-4">Student Information</h1>
    <table class="table m-4 w-50">
  <thead>
    <tr>
      <th>S.N.</th>
      <th>Name</th>
      <th>Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    // var_dump($data);
    foreach ($data as $item) {?>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?= $item['name']?></td>
            <td><?php echo $item['address']?></td>
            <td><?php echo "<a href='/student/edit?id=".$item['id']."'>Edit</a> | 
                            <a href='/student/delete?id=".$item['id']."'>Delete</a>"?></td>
                                   <!-- edit garda url ma id pathako to know the actual person -->
         </tr>
    <?php }?>
  </tbody>
</table>
<button><a href="student/new">Add New Record</a></button>
</body>
</html>