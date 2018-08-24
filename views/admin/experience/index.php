<title>Work Experience</title>

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
          <th>Company</th>
          <th>Job Role</th>
          <th>Responsibility</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <tr>
          <?php foreach ($this->work_experiences as $experience) { ?>
          <td><?php echo $experience["company"];?></td>
          <td><?php echo $experience["jobrole"];?></td>
          <td><?php echo $experience["responsibility"];?></td>
          <td><?php echo $experience["start"] ."-". $experience["end"];?></td>
          <td>
            <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#update<?php echo $experience["id"];?>"><i class = "fa fa-pencil"></i> Edit</a>
          </td>

          <!-- Update Experience Modal -->

          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="update<?php echo $experience["id"];?>">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Edit Experience</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="<?php echo URL;?>/index/edit_experience/<?php echo $experience["is"];?>">
                  <label>Company</label>
                  <input type="text" name="company" class="form-control" value="<?php echo $experience["company"];?>">
                  <br/>
                  <label>Job Role</label>
                  <input type="text" name="jobrole" class="form-control" value="<?php echo $experience["jobrole"];?>">
                  <br/>
                  <label>Responsibility</label>
                  <textarea name="responsibility" class="form-control" value="<?php echo $experience["responsibility"];?>" style="resize:none"></textarea>
                  <br/>
                  <label>Start Date</label>
                  <input type="text" name="start" class="form-control datepicker" value="<?php echo $experience["start"];?>">
                  <br/>
                  <label>End Date</label>
                  <input type="text" name="end" class="form-control datepicker" value="<?php echo $experience["end"];?>">
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
        </tr>
      <?php } ?>
       </tbody>
     </table>
    </div>
  </div>
</div>
</div>
</div>

<script>
$(function(){
  $('.datepicker').datepicker({
    autoclose: true
  });
})
</script>
