<div class="x_panel">
  <div class="x_title">
    <h2>Education Background <i class="fa fa-book"></i></h2>
    <ul class="nav navbar-right panel_toolbox">
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left" action="<?php echo URL;?>index/add_edu_background" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Institution</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="institution" required>
          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Qualificat</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <select name="qualification" class="form-control" required>
            <option value=""></option>
            <option value="BSc">Bachelors in Science</option>
            <option value="HND">Higher National Diploma</option>
            <option value="OND">Ordinary National Diploma</option>
            <option value="NCE">NCE</option>
            <option value="SSCE">SSCE</option>
          </select>
          <span class="fa form-control-feedback right" aria-hidden="true"></span>
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
