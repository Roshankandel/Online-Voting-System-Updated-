<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New Voter</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->


<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Edit Voter</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="voters_edit.php">
                    <input type="hidden" class="id" name="id">

                    <div class="form-group">
                        <label for="edit_firstname" class="col-sm-3 control-label">Fullname</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_fullname" name="fullname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_firstname" class="col-sm-3 control-label">Citzenship Number</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_citznum" name="citznum">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_firstname" class="col-sm-3 control-label">Fathers Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_fname" name="fname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_email" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_email" name="email">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                    Update</button>
                </form>
            </div>
        </div>
    </div>
</div>






<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="voters_delete.php">
                    <input type="hidden" class="id" name="id">
                    <div class="text-center">
                        <p>DELETE VOTER</p>
                        <h2 class="bold" id="fullname"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog model-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                    <input type="hidden" class="id" name="id">
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i
                        class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- model for info -->



<?php

?>
<!-- 
<div class="modal fade" id="info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Voter data</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="voters_verify.php">

                    <input type="hidden" class="id" name="id">

                    <?php
                           include 'voters_row.php';
                            $pphoto=$_SESSION['pphoto'];
                            $citzphoto=$_SESSION['citzphoto'];
                            echo $citzphoto;
                            echo 'hello';

                    ?>




                    <div class="container rounded bg-white mt-5 mb-5">

                        <div class="row">

                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                        class="rounded-circle mt-5" width="150px"
                                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

                                </div>

                            </div>


                        </div>



                        <div class="row">

                            <div class="col-lg-6 border-right">
                                <div class="p-3 py-5">


                                    <div class="row mt-3">
                                        <div class="col-lg-6"><label class="labels">FullName</label>
                                            <input type="text" class="form-control" id="name" readonly>

                                        </div>

                                        <div class="col-lg-6"><label class="labels">Email</label>
                                            <input type="text" class="form-control" id="email" readonly>


                                        </div>

                                    </div>

                                    <div class=" row mt-3">

                                        <div class="col-lg-6"><label class="labels">Voters ID</label>
                                            <input type="text" class="form-control" id="voterid" readonly>

                                        </div>

                                        <div class="col-lg-6"><label class="labels">Mobile Number</label>
                                            <input type="text" class="form-control" id="phone" readonly>
                                        </div>

                                    </div>


                                    <div class="row mt-3">

                                        <div class="col-lg-6"><label class="labels">Fathers Name</label>
                                            <input type="text" class="form-control" id="fathername" readonly>

                                        </div>

                                        <div class="col-lg-6"><label class="labels">Citzenship issue Date</label>
                                            <input type="text" class="form-control" id="idate" readonly>
                                        </div>

                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-lg-6"><label class="labels">Date of birth</label>
                                            <input type="text" class="form-control" id="dob" readonly>

                                        </div>

                                        <div class="col-lg-6"><label class="labels">gender</label>
                                            <input type="text" class="form-control" id="gender" readonly>
                                        </div>

                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-lg-6"><label class="labels">State</label>
                                            <input type="text" class="form-control" id="state" readonly>

                                        </div>

                                        <div class="col-lg-6"><label class="labels">District</label>
                                            <input type="text" class="form-control" id="district" readonly>
                                        </div>


                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-lg-6"><label class="labels">Municipality</label>
                                            <input type="text" class="form-control" id="municipality" readonly>

                                        </div>


                                        <div class="col-lg-6"><label class="labels">Street</label>
                                            <input type="text" class="form-control" id="Street" readonly>

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="modal-footer">

                                    <button type="submit" class="btn btn-success btn-flat pull-left verify"
                                        name="validate"><i class="fa fa-check-square-o"></i>Verify</button>

                                    <button type="submit" class="btn btn-danger btn-flat" name="reject"><i
                                            class="fa-duatone fa-xmark"></i> Reject</button>
                </form>
            </div> -->
<!-- </div>
</div> -->

</div>
</div>
</div>
</div>

</div>

</div>
</div>

</div>