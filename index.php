<?php 
   include __DIR__.'/includes/linksRel.php';
   ?>
<body>
   <div class="container" id="app">
      <form action="dados.php" method="POST">
         <div class="form-group m-4">
            <label for="inputName" name="LabelInputName">Nome </label>
            <input type="name" class="form-control" id="inputName" aria-describedby="nome" placeholder="Bruce Wayne" name="inputName" required>
            <?php if(isset($nomeError)){ ?>
            <small><?php echo $nomeError ?></small>
            <?php } ?>
         </div>
         <div class="form-group m-4">
            <label for="LabelinputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Seu melhor email" name="inputEmail" required>
            <?php if(isset($emailError)){ ?>
            <small><?php echo $emailError ?></small>
            <?php } ?>
         </div>
         <div class="form-group m-4" id="amigoInvite">
         </div>
         <div class="form-group m-4">
            <button type="submit" class="btn btn-primary">Enviar</button>
         </div>
      </form>
      <div class="card m-4" style="width:18rem;">
         <p class="m-2">Indique para um amigo</p>
         <div class="card-body">
            <button v-on:click="inviteForm" class="btn btn-outline-danger">Convidar Amigo</button>
         </div>
      </div>
   </div>
</body>
<?php 
   include __DIR__.'/includes/scripts.php';
   ?>
<script type="text/javascript" src="js/script.js"></script>
</html>