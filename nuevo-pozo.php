<!-- Header -->
<?php include "includes/header.php"; ?>

<div class="container-fluid">
   <div class="row mt-5">
      <div class="col-3 mx-auto">
         <div class="card">
            <h5 class="card-title text-center bg-primary text-light py-2 mb-0">Registrar nuevo pozo</h5>

            <form class="card-body" method="POST" action="functions/modelo-pozo.php">
               <label for="nombre" class="form-label">Nombre</label>

               <input type="text" class="form-control" id="nombre" placeholder="Nombre o código del pozo" name="nombre" autocomplete="off">

               <input type="hidden" name="accion" value="crear">

               <div class="d-flex justify-content-end mt-2">
                  <button type="submit" class="btn btn-primary">Crear pozo</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Footer -->
<?php include "includes/footer.php"; ?>