<!-- Header -->
<?php
   include "includes/header.php";
   
   if (!isset($_GET['pozo'])) {
      header("Location: index.php");
   }

?>

<div class="container-fluid">
   <div class="row mt-5">
      <div class="col-3 mx-auto">
         <div class="card">
            <h5 class="card-title text-center bg-primary text-light py-2 mb-0">Insertar nuevo registro</h5>

            <form class="card-body" method="POST" action="functions/modelo-registro.php">
               <label for="medicion" class="form-label">Medición</label>

               <input type="number" step="0.01" class="form-control" id="medicion" placeholder="Ingrese el resultado obtenido" name="medicion" autocomplete="off">



               <label for="fecha" class="form-label mt-2">Fecha de la medición</label>

               <input type="date" class="form-control" id="fecha" name="fecha">



               <input type="hidden" name="id_pozo" value="<?=$_GET['pozo']?>">

               <input type="hidden" name="accion" value="crear">

               <div class="d-flex justify-content-end mt-2">
                  <button type="submit" class="btn btn-primary">Crear registro</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Footer -->
<?php include "includes/footer.php"; ?>