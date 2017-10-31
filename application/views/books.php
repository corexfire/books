<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" id="theme" href="assets/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" id="theme" href="assets/css/font-awesome.min.css"/>
<!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="assets/pages/js/books.js"></script>
	<meta charset="utf-8">
	<title>List of Books</title>
</head>
<body>

<div class="container">
	<h1>List Of Books</h1>
    
  <div class="card">
  <div class="card-header">
  <a class="btn btn-success float-right btn-add" href="books/form "><i class="fa fa-plus"></i> Add New</a>
  </div>
  <div class="card-body">
  <table class="table  table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Date Published</th>
      <th scope="col">Number Of Pages</th>
      <th scope="col">Type Of Book</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
          if($data){
            $i=1;
              foreach($data as $d_row){
                ?>
                <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $d_row->title; ?></td>
                <td><?php echo $d_row->author; ?></td>
                <td><?php echo $d_row->date_published; ?></td>
                <td><?php echo $d_row->number_of_pages; ?></td>
                <td><?php echo $d_row->description; ?></td>
                <td>
                <form action="books/form" method="POST">
                <input class="d-none" type="text" class="form-control" id="id" name="id" value="<?php echo $d_row->id; ?>">
                <button class="btn btn-info btn-sm btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $d_row->id; ?>" data-title="<?php echo $d_row->title; ?>"><i class="fa fa-trash-o"></i></button>
                </form>
                </td>
                </th>
                </tr>
                <?php
                $i++;
              }
          }
          ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->
   
  </tbody>
  </table>
  </div>
</div>
    
  

</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="books/delete"  method="POST">
        <div class="form-group " >
          <label id="title-name"  for="recipient-name" class="col-form-label"></label>
          <input class="d-none" type="text" class="form-control" id="id" name="id">
        </div>
        <!-- <div class="form-group">
          <label for="message-text" class="col-form-label">Message:</label>
          <textarea class="form-control" id="message-text"></textarea>
        </div> -->
        <button type="button" class="btn float-right btn-secondary" data-dismiss="modal" style="margin-left:5px;">Close</button>
      <button type="submit" class="btn float-right btn-danger">Delete</button>
      </form>
    </div>

  </div>
</div>
</div>

</body>
</html>