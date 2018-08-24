<div class="x_panel">
  <div class="x_title">
    <h2>Skill <i class="fa fa-briefcase"></i></h2>
    <ul class="nav navbar-right panel_toolbox">
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />
    <form class="form-horizontal form-label-left" action="<?php echo URL;?>index/add_skill" method="POST">
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-3">Skill</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <input type="text" class="form-control" name="name" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-sm-3 col-xs-3">Category</label>
        <div class="col-md-9 col-sm-9 col-xs-9">
          <select name="cat_id" class="form-control" required>
            <?php
            foreach ($this->skill_cats as $value) { ?>
            <option value="<?php echo $value["id"]?>"><?php echo $value["name"]?></option>
          <?php } ?>
          </select>
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
