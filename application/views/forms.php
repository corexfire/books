
<div class="container">
    <div class="card">
        <div class="card-header">
        <?php if($data){ echo "Edit Book";} else{ echo "Add New Book";} ?>
        
        </div>
        <div class="card-body">

        <form  action="<?php if($data) echo "update"; else echo "add"; ?>" method="POST">
        <input type="text" class="form-control d-none" id="id" name="id" placeholder="Book Title" value="<?php if($data) echo $data->id; ?>">
        <div class="form-group row">
          <label for="title" class="col-sm-2 col-form-label">Tilte</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="title" name="title" placeholder="Book Title" value="<?php if($data) echo $data->title; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="author" class="col-sm-2 col-form-label">Author</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="author" name="author" placeholder="author" value="<?php if($data) echo $data->author; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="date" class="col-sm-2 col-form-label">Date Published</label>
          <div class="col-sm-5">
            <input type="date" class="form-control" id="date" name="date" value="<?php if($data) echo $data->date_published; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="pages" class="col-sm-2 col-form-label">Number of Pages</label>
          <div class="col-sm-2">
            <input type="number" class="form-control" id="pages" name="pages" value="<?php if($data) echo $data->number_of_pages; ?>" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="type" class="col-sm-2 col-form-label">Type of book</label>
          <div class="col-sm-10">
          <select name="type" class="custom-select" required>
         
          <?php 
            if($types){
                if($data){
                    ?>
                    <option value=""> Select Type</option>
                   <?php
                   foreach($types as $rows){
                       ?>
                       <option <?php if($data->id_type == $rows->id) echo "selected" ?> value="<?php echo $rows->id ?>"><?php echo $rows->description ?></option>
                       <?php
                   }
                }else{
                    ?>
                    <option selected value=""> Select Type</option>
                   <?php
                   foreach($types as $rows){
                       ?>
                       <option value="<?php echo $rows->id ?>"><?php echo $rows->description ?></option>
                       <?php
                   }
                }
                
            }else{
                ?>
                <option selected value=""> Select Type</option>
                <?php
            }
          ?>
          </select>
          </div>
        </div>
        <div class="form-group row float-right">
            
           
            <a class="btn btn-lg btn-info" href="/books">Back</a>
            <button style="margin-left:5px;" class="btn  btn-success btn-lg btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip">Save</button>
        </div>
      </form>
        </div>
    </div>
</div>
