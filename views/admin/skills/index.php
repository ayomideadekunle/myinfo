<title>Skills</title>

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
          <th>Skill</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
       </thead>
       <tbody>
        <tr>
          <?php foreach ($this->skills as $key => $value) {
            // print_r($this->skills);
            $index_mod = new Index_Model();
            ?>
          <td><?php echo $value["name"]; ?></td>
          <td>
            <?php
              $skill_cats = $index_mod->skills_category_info($value["cat_id"]);
              foreach ($skill_cats as $key => $value2) {
                echo $value2["name"];
              }
              ?>
            </td>
          <td>
            <a class="btn btn-success btn-xs" data-toggle = "modal" data-target="#update<?php echo $value['id']?>"><i class = "fa fa-pencil"></i> Edit</a>
            <!-- <a class="btn btn-danger btn-xs"><i class = "fa fa-trash"></i> Delete</a> -->
          </td>
        </tr>

        <!-- Update Skills Modal -->

        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="update<?php echo $value['id']?>">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel2">Edit Skill</h4>
            </div>
            <div class="modal-body">
              <form method = "POST" action="<?php echo URL;?>index/edit_skill/<?php echo $value["id"]?>">
                <label>Skill</label>
                <input type="text" name="name" class="form-control" value ="<?php echo $value['name']?>">
                <br/>
                <label>Category</label>
                <select name="cat_id" class="form-control">
                  <?php
                  $skill_cats = $this->skill_cats;
                  foreach ($skill_cats as $skill_cat) {
                   ?>
                  <option value="<?php echo $skill_cat['id']?>" <?php if ($skill_cat['id'] == $value['cat_id']) echo 'selected'; ?>>
                    <?php
                      echo $skill_cat["name"];
                    ?>
                </option>
              <?php } ?>
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
