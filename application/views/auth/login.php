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
  <h2>Login form</h2>
  <?= form_open('') ?>
    
    <div class="mb-3 mt-3">
      <label for="euc">Email/Username/Contact No:</label>
      <input type="text" value="<?= set_value('euc') ?>" class="form-control" id="email" placeholder="Enter Email/Username/Contact No" name="euc">
      <b class="text-danger"><?= form_error('euc'); ?></b>
    </div>
   
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      <b class="text-danger"><?= form_error('pswd'); ?></b>
    </div>
    <?php if($this->session->flashdata('msg')){
    echo $this->session->flashdata('msg');
  } ?><br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
