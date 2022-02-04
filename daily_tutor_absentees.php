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
                                <h3 class="col-sm-10 box-title">Tutor Absentees for [2nd February, 2021]</h3>
                                <!-- <button class="col-sm-2 btn btn-info" data-toggle="modal"
                                    data-target="#addClassModal">Add class</button> -->
                            </div>
                            <p class="text-muted"></p>
                            <div class="table-responsive">
                                <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name of Teacher</th>
                                            <!-- <th>Course</th> -->
                                            <th>Class</th>
                                            <th>Subject</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Jesse Anim</td>
                                            <!-- <td>Agric</td> -->
                                            <td>1 Science B</td>
                                            <td>Mathematics</td>
                                            <td>
                                                <!-- <button class="btn btn-sm badge-dark "><i
                                                        class="fa fa-eye text-dark"></i></button> -->
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
                                <h4 class="modal-title">Add Class</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">Class name:</label>
                                        <input type="text" class="form-control" id="recipient-name"> </div>
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
                <!-- </div> <img src="../plugins/images/model.png" alt="default" data-toggle="modal"
                    data-target="#responsive-modal" class="model_img img-responsive" /> -->
                <!-- Button trigger modal -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php 
    include_once 'partials/footer.php';
?>