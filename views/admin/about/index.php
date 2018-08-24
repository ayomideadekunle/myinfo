<title>About Me</title>

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
                <th>Dp</th>
                <th>Full Name</th>
                <th>Email</th>

                <th>Job Role</th>
                <th>Objective</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php foreach ($this->infos as $info) { ?>
                  <td><img src="<? echo URL.$info["pix"];?>" class="img-circle profile_img"></td>
                  <td><? echo $info["fullname"];?></td>
                  <td><? echo $info["email"];?></td>
                  <td><? echo $info["jobrole"];?></td>
                  <td><? echo $info["objective"];?></td>
                  <td>
                    <a class="btn btn-success btn-xs" data-toggle="modal" data-target="#update<? echo $info["id"];?>"><i class = "fa fa-pencil"></i> Edit</a>
                  </td>

                  <!-- Update About Me Modal -->

                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="update<? echo $info["id"];?>">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit About Me</h4>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="<? echo URL;?>index/edit_info/<? echo $info["id"];?>" enctype="multipart/form-data">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control" value ="<? echo $info["fullname"];?>">
                            <br/>
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<? echo $info["email"];?>">
                            <br/>
                            <label>Age</label>
                            <input type="text" name="age" class="form-control datepicker" value="<? echo $info["age"];?>">
                            <br/>
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="<? echo $info["phone"];?>">
                            <br/>
                            <label>Website</label>
                            <input type="url" name="website" class="form-control" value="<? echo $info["website"];?>">
                            <br/>
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="<? echo $info["address"];?>">
                            <br/>
                            <br/>
                            <label>Experience</label>
                            <input type="text" name="experience" class="form-control" value="<? echo $info["experience"];?>">
                            <br/>
                            <br/>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <br/>
                            <label>Job Role</label>
                            <input type="text" name="jobrole" class="form-control" value="<? echo $info["jobrole"];?>">
                            <br/>
                            <label>Objective</label>
                            <textarea  name="objective" class="form-control" style="resize:none"></textarea>
                            <br/>
                            <label>Summary</label>
                            <textarea  name="summary" class="form-control" style="resize:none"></textarea>
                            <br/>
                            <label>Pix</label>
                            <input type="file" name="pix" class="form-control">
                            <br/>
                            <label>CV</label>
                            <input type="file" name="cv" class="form-control">
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
