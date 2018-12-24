<?php require 'partial/head.php'; ?>
<h1>All users</h1>
<?php foreach ($users as $user): ?>
  <li><?= $user->name?></li>
<?php endforeach; ?>
    <h1>Submit name</h1>
    <form class="" action="/users" method="post">
      <input type="text" name="name" value="">
      <button type="submit" >Submit</button>
    </form>

<?php require 'partial/footer.php'; ?>
