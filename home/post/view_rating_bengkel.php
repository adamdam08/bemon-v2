<?php
    include_once '../php/session_checker.php';
    $id = $_GET['id'];
    $mysqlx = mysqli_query($con,"SELECT * FROM review_bengkel where id_bengkel = $id");
?>
<div style="margin-top:1vh">
    <h3 class="text-light text-left">Menampilkan Review user</h3>
</div>
<table class="table table-borderless bg-light">
  <thead>
    <tr>
      <th scope="col">Komentar User</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($data_v = mysqli_fetch_array($mysqlx)){
    ?>
    <tr>
      <th scope="row">
        <?php echo $data_v['review'] ?> <br/> Rating : <?php echo $data_v['rating']?>/5</th>
    </tr>
    <?php 
        }
    ?>
  </tbody>
</table>