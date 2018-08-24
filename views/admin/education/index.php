<title>Education Background</title>

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
          <th>Institution</th>
          <th>Qualification</th>

          <th>Date</th>
          <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <tr>
          <?php foreach ($this->education_details as $detail) { ?>
          <td><?php echo $detail["institution"];?></td>
          <td><?php echo $detail["qualification"];?></td>
          <td><?php echo $detail["start"] ."-". $detail["end"];?></td>
          <td>
            <a class="btn btn-success btn-xs" data-toggle = "modal" data-target="#update<?php echo $detail["id"];?>"><i class = "fa fa-pencil"></i> Edit</a>
          </td>

        </tr>

        <!-- Update Education Background Modal -->

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="update<?php echo $detail["id"];?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel2">Edit Education Details</h4>
            </div>
            <div class="modal-body">
              <form method="POST"
              action="<?php echo URL;?>index/edit_edu_bgd/<?php echo $detail["id"];?>">
                <label>Institution</label>
                <input type="text" name="institution" class="form-control" value="<?php echo $detail["institution"];?>">
                <br/>
                <label>Start Date</label>
                <input type="text" name="start" class="form-control datepicker" value="<?php echo $detail["start"];?>">
                <br/>
                <label>End Date</label>
                <input type="text" name="end" class="form-control datepicker" value="<?php echo $detail["end"];?>">
                <br/>
                <label>Qualification</label>
                <select name="qualification" class="form-control">
                  <option value="BSc" <?php if ($detail['qualification'] == 'BSc') echo 'selected'; ?>>Bachelors in Science</option>
                  <option value="HND" <?php if ($detail['qualification'] == 'HND') echo 'selected'; ?>>Higher National Diploma</option>
                  <option value="OND" <?php if ($detail['qualification'] == 'OND') echo 'selected'; ?>>Ordinary National Diploma</option>
                  <option value="NCE" <?php if ($detail['qualification'] == 'NCE') echo 'selected'; ?>>NCE</option>
                  <option value="SSCE" <?php if ($detail['qualification'] == 'SSCE') echo 'selected'; ?>>SSCE</option>
                </select>
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


<script>
$(function(){
  $('.datepicker').datepicker({
    autoclose: true
  });
})
</script>
