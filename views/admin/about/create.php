<div class="x_panel">
  <div class="x_title">
    <h2>About Me <i class="fa fa-user"></i></h2>
    <ul class="nav navbar-right panel_toolbox">
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left" action="<?php echo URL;?>index/add_my_info" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Full Name</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="fullname" required>
          <span class="fa fa-user form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="email" class="form-control" name="email" required>
          <span class="fa fa-inbox form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone #</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="phone" required>
          <span class="fa fa-phone form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="address" required>
          <span class="fa fa-home form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Job Role</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="jobrole" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Experience</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="experience" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Website</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="url" class="form-control" name="website" required>
          <!-- <span class="form-control-feedback right" aria-hidden="true"required ></span> -->
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">DOB</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" name="age" class="form-control datepicker" required>
          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Password</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="password" name="password" class="form-control" required>
          <span class="fa fa-lock form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Objective</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <textarea style="resize:none;" name="objective" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Summary</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <textarea style="resize:none;" name="summary" class="form-control"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">CV</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="file" class="form-control" name="cv" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Picture</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="file" class="form-control" name="pix" accept="image/*" required>
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

<script>
$(function(){
  $('.datepicker').datepicker({
    autoclose: true
  });
})
</script>
