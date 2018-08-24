<title>Projects</title>

<!-- page content -->
<div class="right_col" role="main">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class = "col-md-4 col-lg-4 col-xs-4">
    <?php include 'create.php';?>
  </div>
  <div class = "col-md-8 col-lg-8 col-xs-8">
    <div class = "x-panel">
     <table id="datatable" class="table table-striped table-bordered">
       <thead>
        <tr>
          <th>Image</th>
          <th>Number</th>
          <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <tr>
          <?php foreach ($this->projects as $project) { ?>
          <td><img src="<?php echo URL , $project["image"];?>" style="width:80px;height:60px"></td>
          <td><?php echo $project["no"];?></td>
          <td>
            <a href="#update" class="btn btn-success btn-xs" data-toggle = "modal" data-target="#update<?php echo $project["id"];?>"><i class = "fa fa-pencil"></i> Edit</a>
          </td>

        </tr>

        <!-- Update Project Modal -->

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="update<?php echo $project["id"];?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel2">Edit Project</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo URL;?>index/edit_project/<?php echo $project["id"];?>">
                <label>Number</label>
                <input type="text" name="no" class="form-control" value="<?php echo $project["no"];?>">
                <br/>
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                <br/>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
        </div>

        <!-- End -->
      <?php } ?>
       </tbody>
     </table>
    </div>
  </div>
</div>
</div>
</div>
