<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header" style="color:#47b2e4;
                    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                  ">
                <h1>
                    Ballot Position
                </h1>

            </section>
            <!-- Main content -->
            <section class="content">
                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1" id="content" style="color:#47b2e4;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;>
                    </div>
                </div>

            </section>


        </div>

        <?php include 'includes/footer.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
    $(function() {
        fetch();

        $(document).on('click', '.reset', function(e) {
            e.preventDefault();
            var desc = $(this).data('desc');
            $('.' + desc).iCheck('uncheck');
        });




    });

    function fetch() {
        $.ajax({
            type: 'POST',
            url: 'ballot_fetch.php',
            dataType: 'json',
            success: function(response) {
                $('#content').html(response).iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            }
        });
    }
    </script>
</body>

</html>