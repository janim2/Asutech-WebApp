<?php 
    include_once 'partials/header.php';
?>
        <!-- Page Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <h3 class="col-sm-10 box-title">Manage Students</h3>
                                <button class="col-sm-2 btn btn-info" data-toggle="modal"
                                    data-target="#addClassModal">Add Student</button>
                            </div>
                            <p class="text-muted"></p>
                            <div class="table-responsive">
                                <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Course</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td>John Smith</td>
                                            <td>Science A</td>
                                            <td>General Arts</td>
                                            <td>Tuesday, 10th October, 2000</td>
                                            <td>Male</td>
                                            <td>
                                                <button class="btn btn-sm badge-dark "><i
                                                        class="fa fa-edit text-dark"></i></button>
                                                <button class="btn btn-sm badge-danger "><i
                                                        class="fa fa-trash text-white"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="addClassModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add Student</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Name:</label>
                                        <input type="text" class="form-control" id="recipient-name"> </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Gender:</label>
                                            <select name="day" id="day" class="form-control">
                                                <option value="">Select Gender</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">DOB:</label>
                                            <input type="date" class="form-control" id="recipient-name"> </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Class:</label>
                                        <input type="text" class="form-control" id="recipient-name"> </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Course:</label>
                                        <select name="day" id="day" class="form-control">
                                            <option value="">Select Course</option>
                                            <option value="">Course one</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php 
    include_once 'partials/footer.php';
?>