<?php
if(isset($_POST) && !empty($_POST)){

	if(isset($_POST) && count($_POST) > 0 ){
			$post=$_POST;
			$check=md5(implode('', $_POST));
			if(!isset($_SESSION['check']) || $_SESSION['check']!=$check){
				$x=addUser($dbh, $post);
				if($x) $_SESSION['check']=$check;

			}

	}
}
?>
        <div class="row">
            <div class="col-sm-12 sm-fifty">
                <div class="panel panel-default">
                    <div class="panel-heading"> <i class="clip-stats"></i> Add Customer
                        <div class="panel-tools"> <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a> </div>
                    </div>
                    <div class="panel-body">
                        <div class="flot-big-container">
                            <form action="./?option=addUser" role="form" class="smart-wizard form-horizontal" method="post" name="site_config"  enctype="multipart/form-data" accept-charset="utf-8" novalidate>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="co_name">Name:<font color="#ff0000">*</font> </label>
                                  <div class="col-sm-3">
                                    <input class="form-control" type="text" name="name" autocomplete="Off" tabindex="1" value="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="co_name">Mobile:<font color="#ff0000">*</font> </label>
                                  <div class="col-sm-3">
                                    <input class="form-control" type="text" name="mobile" autocomplete="Off" tabindex="1" value="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="co_name">Username:<font color="#ff0000">*</font> </label>
                                  <div class="col-sm-3">
                                    <input class="form-control" type="text" name="username" autocomplete="Off" tabindex="1" value="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="co_name">Password:<font color="#ff0000">*</font> </label>
                                  <div class="col-sm-3">
                                    <input class="form-control" type="text" name="password" autocomplete="Off" tabindex="1" value="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="co_name">Role:<font color="#ff0000">*</font> </label>
                                  <div class="col-sm-3">
                                    <select name="role" id="" class="form-control">
                                        <option value="0">Select One</option>
                                        <option value="admin">Admin</option>
                                        <option value="office">Manager</option>
                                        <option value="pos">Sales</option>
                                        <option value="cook">Cook</option>
                                        <option value="display">Display</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-2 control-label" for="co_name">Status:<font color="#ff0000">*</font> </label>
                                  <div class="col-sm-3">
                                    <input class="myfunnel-switch-light"  data-id="active" data-type="switch" type="checkbox"  value="1" checked>
            			            <input type="hidden" id="active" name="status" value="1" />
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="col-sm-5 text-right">
                                    <input type="hidden" value="<?php echo date("Y-m-d H:i:s");?>" name="date" id="" class=""/>
                                    <input class="btn btn-success" type="submit" name="submit" value="Submit">
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
