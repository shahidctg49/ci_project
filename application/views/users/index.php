<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>User Table CRUD</h2>
  <p>Basic CI CRUD Example</p>            
  <a href="<?= base_url() ?>users/add" class="btn btn-primary float-end">Add New</a>
  <?php if($this->session->flashdata('msg')){
    echo $this->session->flashdata('msg');
  } ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
            if($users){
                foreach($users as $u){
        ?>
                <tr>
                    <td><?= $u->id ?></td>
                    <td><?= $u->name ?></td>
                    <td><?= $u->email ?></td>
                    <td>
                        <a href="<?= base_url() ?>users/edit/<?= $u->id ?>" class="btn btn-info">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="<?= base_url() ?>users/delete/<?= $u->id ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
        <?php } } ?>
    </tbody>
  </table>
</div>

</body>
</html>
