<?php include('header.php'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                                    Add User
                                </button>
                            </h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Contact</th>
                                        <th>NIN Number</th>
                                        <th>Photo</th>
                                        <th>Role</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Teddy Nandutu</td>
                                        <td>+256123456789</td>
                                        <td>CF19227873827GH</td>
                                        <td>My Photo</td>
                                        <td>Admin</td>
                                        <td>Password</td>
                                        <td>
                                            <a data-toggle="modal" href="#edit<?= $rx->user_id; ?>">
                                                <i class="fa fa-edit" style="color:blue;" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" onclick="confirmDelete(<?= $rx->user_id; ?>)">
                                                <i class="fa fa-times" style="color:red;" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal for Adding User -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="your_action_page.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- First Name Field -->
                            <div class="form-group">
                                <label for="exampleInputFirstName">First Name</label>
                                <input type="text" class="form-control" id="exampleInputFirstName" name="firstName" placeholder="Enter First Name" required aria-label="First Name">
                            </div>
                            <!-- Last Name Field -->
                            <div class="form-group">
                                <label for="exampleInputLastName">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputLastName" name="lastName" placeholder="Enter Last Name" required aria-label="Last Name">
                            </div>
                            <!-- Contact Field -->
                            <div class="form-group">
                                <label for="exampleInputContact">Contact</label>
                                <input type="tel" class="form-control" id="exampleInputContact" name="contact" placeholder="Enter Contact" required aria-label="Contact" pattern="^\+?\d{10,15}$" title="Enter a valid contact number (10-15 digits)">
                            </div>
                            <!-- NIN Field -->
                            <div class="form-group">
                                <label for="exampleInputNIN">NIN Number</label>
                                <input type="text" class="form-control" id="exampleInputNIN" name="ninNumber" placeholder="Enter NIN" required aria-label="NIN Number" minlength="8" maxlength="20">
                            </div>
                            <!-- Role Selection -->
                            <div class="form-group">
                                <label for="exampleInputRole">Role</label>
                                <select class="form-control" id="exampleInputRole" name="role" required aria-label="Role">
                                    <option value="" disabled selected>Select a role</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Delivery Man">Delivery Man</option>
                                </select>
                            </div>
                            <!-- File Input -->
                            <div class="form-group">
                                <label for="exampleInputFile">Photo Upload</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="fileInput" aria-label="Upload Photo" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="saveUser">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

<?php include('footer.php'); ?>
