<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP AJAX CRUD</title>
    <!-- Bootstrap css core -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/paper.min.css">
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>PHP CRUD using jQuery and Ajax
                <button class="pull-right btn btn-primary" id="button_add">
                    Add new User
                </button>
            </h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Users list:</h4>
            <div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->

<!-- jQuery core file -->
<script type="text/javascript" src="bootstrap/js/jquery-1.12.4.min.js"></script>
<!-- Bootstrap js core -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- Custom js file -->
<script type="text/javascript" src="bootstrap/js/script.js"></script>
</body>
</html>

<!-- Add new User record modal -->
<div class="modal fade" id="modal_add" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Create new User</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="first_name">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="first_name" placeholder="Enter first name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="last_name" >Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="last_name" placeholder="Enter last name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" id="email" placeholder="Email Address" class="form-control" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>

<!-- Update User details modal -->
<div class="modal fade" id="modal_update" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Update User</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="update_first_name">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="update_first_name" placeholder="Enter first name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="update_last_name" >Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="update_last_name" placeholder="Enter last name" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="update_email">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" id="update_email" placeholder="Email Address" class="form-control" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()">Save changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>