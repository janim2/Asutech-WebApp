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
                                <h3 class="col-sm-10 box-title">Manage Periods</h3>
                                <button class="col-sm-2 btn btn-info" data-toggle="modal"
                                    data-target="#addClassModal">Add period</button>
                            </div>
                            <p class="text-muted"></p>
                            <div class="table-responsive">
                                <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Subject</th>
                                            <th>Course</th>
                                            <th>Day</th>
                                            <th>Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Math</td>
                                            <td>Mathematics</td>
                                            <td>Tuesday</td>
                                            <td>12</td>
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
                                <h4 class="modal-title">Add Period</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Subject:</label>
                                        <input type="text" class="form-control" id="recipient-name"> </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Course:</label>
                                        <input type="text" class="form-control" id="recipient-name"> </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Day:</label>
                                        <select name="day" id="day" class="form-control">
                                            <option value="">Select Day</option>
                                            <option value="">Monday</option>
                                            <option value="">Tuesday</option>
                                            <option value="">Wednesday</option>
                                            <option value="">Thursday</option>
                                            <option value="">Friday</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Time:</label>
                                        <input type="time" class="form-control" id="recipient-name"> </div>
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