<?php 
   include __DIR__.'/includes/linksRel.php';
   
   include 'read.php'
  
   ?>
<div class="container" id="app">
<div class="card pd-2 m-4">
   <ul class="list-group">
      <li class="list-group-item active">Nome cadastrados</li>
      <?php foreach ($result as $value) { ?>
      <?php  echo '<li class="list-group-item">'. $value['nome'] .'</li>' ?>
      <?php } ?>
   </ul>
</div>
<div class="card pd-2 m-4">
   <ul class="list-group">
      <li class="list-group-item active">emails indicados</li>
      <?php foreach ($result as $value) { ?>
      <td><?php  echo '<li class="list-group-item">'.$value['email'].'</li>'?></td>
      <?php } ?>
   </ul>
</div>
<?php 
   include __DIR__.'/includes/scripts.php';
   ?>