<div class="x_panel">
  <div class="x_title">
    <h2>Add Project <i class="fa fa-briefcase"></i></h2>
    <ul class="nav navbar-right panel_toolbox">
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left" action="<?php echo URL;?>index/add_project" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Number</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="no" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Image</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="file" name="image" class="form-control" required>
        </div>
      </div>


      <div class="ln_solid"></div>

      <div class="form-group">
        <div class="col-md-9 col-md-offset-3">
          <button type="submit" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
