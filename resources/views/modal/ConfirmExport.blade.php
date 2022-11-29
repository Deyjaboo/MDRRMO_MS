<style>
  #asd,#exampleModalLongTitle,#labelresume,#resume{
            color:black;
           
          }
    
</style>
<!-- Modal -->

<?php
?>
<div class="modal fade" id="exportconfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class='bx bxs-file-import'></i>Export</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mdrrmo_db";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

 $res = mysqli_query($conn, "SELECT * FROM exports");
 $rowcount = mysqli_num_rows( $res );
//  echo "Number of Reports: " . $rowcount;

mysqli_close($conn);
?>
            <h6 id="asd">Number of Reports: {{$rowcount}}</h6>
            <!-- <p id="asd">Are you sure you want to <b><i>Export</i></b> the reports listed below?</p> -->
            <p id="asd">Are you sure you want to <b><i>Export</i></b> the reports?</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary">Yes</button> -->
        <a class="btn btn-primary" href="export_data" onclick="myFunction()">Export</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
      



<script>
    function myFunction() {
        $('#exportconfirm').modal('hide');
    }
    
</script>

                                    