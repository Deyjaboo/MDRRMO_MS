<style>
  #asd,#exampleModalLongTitle,#labelresume,#resume{
            color:black;

          }

</style>
<!-- Modal -->

<?php
?>
<div class="modal fade" id="EditEmployee{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route ('EditEmployee' , $data->id) }}" method="post" enctype="multipart/form-data" id="editForm">
      {{ csrf_field() }}


      <div class="modal-body">
        <div class="form_wrap fullname">
            <div class="form_item">
                <b><label>Name<span class="text-danger"></span></label></b>
                <input type="text"  name="Name" id="Name" class="form-control" placeholder="Name" value="{{$data->name}}" required>
            </div>

            <div class="form_item">
                <b><label>Address<span class="text-danger"></span></label></b>
                <input type="text"  name="Address" id="Address" class="form-control" placeholder="Address" value="{{$data->address}}" required>
                </div>
        </div>
        <div class="form_wrap fullname">
            <div class="form_item">
                <b><label>Contact No.<span class="text-danger"></span></label></b>
                <input type="text"  name="number" id="number" class="form-control" placeholder="Number" value="{{$data->contact_num}}" required>
            </div>

            <div class="form_item">
                <b><label>Email<span class="text-danger"></span></label></b>
                <input type="text"  name="email" id="email" class="form-control" placeholder="Email" value="{{$data->email}}" required>
                </div>
        </div>
         <div class="form_wrap fullname">
            <div class="form_item">
                <b><label>Status<span class="text-danger"></span></label></b>
                <select class="form-control" name="status" id="status">
                    @if($data->Status == 'Active')
                        <option value="Active" selected>Active</option>
                        <option value="Inactive">Inactive</option>
                    @else
                        <option value="Active">Active</option>
                        <option value="Inactive" selected>Inactive</option>
                    @endif

                </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <!-- <a class="btn btn-primary" href="export_data" onclick="myFunction()">Export</a> -->
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </form>
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
