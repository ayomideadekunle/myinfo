<div class="x_panel">
  <div class="x_title">
    <h2>Experience <i class="fa fa-calendar"></i></h2>
    <ul class="nav navbar-right panel_toolbox">
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left" action="<?php echo URL;?>index/add_experience" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Company</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="company" required>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Job Role</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="jobrole" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Start Date</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" name="start" class="form-control datepicker" required>
          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">End Date</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" name="end" class="form-control datepicker" required>
          <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Responsibility</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <textarea style="resize:none" class="form-control" name="responsibility" required></textarea>
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
