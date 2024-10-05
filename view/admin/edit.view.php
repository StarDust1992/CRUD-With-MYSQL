
<div class="container">

   <div class="row">

         <div class="col-len-12 text-center">
    <h1 class="mt-5">Edit Term</h1>
        </div>
     <div class="row">
   <form action="" method="POST">
    <input type="hidden" name="original_term" value="<?=$model->id?>">
      <div class="form-group">
            <label  for="term"></label>
             <input class="form-control" type="text" name="term" id="term" value="<?=$model->term?>">
      </div>
   <div class="form-group">
           <label class="form-control" for="definition">DEFINITION:</label>
            <textarea class="form-control" name="definition" id="definition"><?=$model->definition?></textarea>
            <div class="form-group">
               <input class="button" type="submit" value="Edit Term">
            </div>        
   </div>        
   </form>
      </div>
</div>

















