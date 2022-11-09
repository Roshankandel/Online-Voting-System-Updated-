<?php
include 'includes/session.php';

include 'includes/conn.php';

$id=$_GET['id'];

$sql="select*from voters where id=$id"; 
$query = $conn->query($sql);


?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/voter_info.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Voters info</title>


    <style>
    header h2 {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        text-align: center;
        margin-top: 5rem;
    }
    </style>
</head>

<body>


    <?php
                while($row = $query->fetch_assoc()){
                        $imageprofile = (!empty($row['pphoto'])) ? '../upload/profile/'.$row['pphoto'] : '../images/profile.jpg';
                        
                        // $cphoto = (!empty($row['citzphoto'])) ? '../upload/citzenships/'.$row['citzphoto'] : '../images/citzenship.jpg';
                        $cphoto = (!empty($row['citzphoto'])) ?  '../upload/citzenships/'.$row['citzphoto'] : '../images/profile.jpg';
                        // echo $cphoto;
                        

    ?>



    <!-- profile picture -->

    <header>
        <h2>Voters Profile info</h2>
    </header>
    <div class="container rounded bg-white mt-5 mb-5 ">
        <div class="row">
            <div class="col-md-2 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="mt-5" width="200px"
                        height="200px" src="<?php echo $imageprofile;?>"
                        class="font-weight-bold"></span><?php echo $row['fullname'];?>
                </div>
            </div>


            <!-- citzenship -->


            <div class="col-md-4">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">



                    <img class="mt-5" width="500px" height="400px" src="../images/citzenship.jpg">


                    <?php echo $row['fullname'];?>'s
                    Citzenship</span><span>

                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-5 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">

                    </div>
                    <form class="form-horizontal" method="POST" action="voters_verify.php">

                        <input type="hidden" class="id" name="id" value="<?php echo $row['id']?>">
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Full Name</label><input type="text"
                                    class="form-control" value="<?php echo $row['fullname']?>" readonly></div>
                            <div class="col-md-6"><label class="labels">Email</label><input type="text"
                                    class="form-control" value="<?php echo $row['email']?>" readonly></div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                    class="form-control" value="<?php echo $row['phon']?>" readonly></div>

                            <div class="col-md-12"><label class="labels">Voters_ID</label><input type="text"
                                    class="form-control" value="<?php echo $row['voters_id']?>" readonly></div>

                            <div class="col-md-12"><label class="labels">Father's Name</label><input type="text"
                                    class="form-control" value="<?php echo $row['fathername']?>" readonly></div>

                            <div class="col-md-12"><label class="labels">Citzenship Number</label><input type="text"
                                    class="form-control" value="<?php echo $row['citznum']?>" readonly></div>

                            <div class="col-md-12"><label class="labels">Citzenship issue Date</label><input type="text"
                                    class="form-control" value="<?php echo $row['idate']?>" readonly></div>

                            <div class="col-md-12"><label class="labels">Date of birth</label><input type="text"
                                    class="form-control" value="<?php echo $row['dob']?>" readonly></div>

                            <div class="col-md-12"><label class="labels">gender</label><input type="text"
                                    class="form-control" value="<?php echo $row['gender']?>" readonly></div>
                            <div class="col-md-12"><label class="labels">State</label><input type="text"
                                    class="form-control" value="<?php echo $row['state']?>" readonly></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">District<input type="text" class="form-control"
                                        value="<?php echo $row['district']?>" readonly></div>

                            <div class="col-md-6"><label class="labels">Municipality</label><input type="text"
                                    class="form-control" value="<?php echo $row['municipality']?>" readonly></div>
                        </div>

                        <div class="row mt-5 ">
                            <div class="col-md-6 px-4">
                                <button type="submit" class="btn btn-success btn-flat pull-left verify"
                                    name="validate"><i class="fa fa-check-square-o"></i>Verify</button>

                            </div>
                            <div class="col-md-6 px-5">
                                <button type="submit" class="btn btn-danger btn-flat pull-right" name="reject"><i
                                        class="fa-duatone fa-xmark"></i> Reject</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    </div>


    <?php 
    
         }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>