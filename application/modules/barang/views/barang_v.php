<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
		<div class="col-md-4">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">COA Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="Form">
			<input type="hidden" name="id" id="id" value="">
              <div class="box-body">
                <div class="form-group">
                  <label for="group">Group ?</label>
                  <select name="group" class="form-control"  id="group">
						<option value="">-Pilih-</option>
						<option value="Y">Ya</option>
						<option value="T">Tidak</option>
				  </select>
                </div>
                <div class="form-group">
                  <label for="nama">Rekening Induk</label>
                  <input type="text" class="form-control" name="coainduk" id="coainduk" placeholder="Rekening Induk">
                </div>
                <div class="form-group">
                  <label for="group">Nama Rekening</label>
                  <input type="text" class="form-control" name="coa"  id="coa" placeholder="coa">
                </div>
                <div class="form-group">
                  <label for="group">Kode Rekening</label>
                  <input type="text" class="form-control" name="kodecoa"  id="kodecoa" placeholder="kodecoa">
                </div>
                <div class="form-group">
                  <label for="group">Transaksi</label>
                  <select name="transaksi" class="form-control"  id="transaksi">
						<option value="">-Pilih-</option>
						<option value="Y">Ya</option>
						<option value="T">Tidak</option>
				  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="button"  id="submit" class="btn btn-primary">Submit</button>
                <button type="button"  id="baru"   class="btn btn-primary">Baru</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-8">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Rekening</h3>&nbsp;&nbsp;
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableCOA" class="table display table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Rekening</th>
                  <th>Nama Rekening</th>
                  <th>Saldo Normal</th>
                  <th align="center">Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
</div>
<script>
$(document).ready(function() {
    //$('#tableCOA').DataTable();
} );
function nextCOA(){
	konfirm = confirm("Tambah anak Rekening ?");
}
$(document).ready(function(){

	$('#baru').click(function(){
		$("#id").val('');
	    $("#coa").val('');
	    $("#coainduk").val('');
	    $('#kodecoa').val('');
		$("#group").val('');
	    $("#transaksi").val('');
	    
	});
		
	
});
	tampil_append_row();
	
	function tampil_append_row(){
		$.ajax({
			  type:"get",
			  url:"<?php echo base_url('index.php/rekening/display');?>",
			  data:"cari=",
			  dataType: 'html',
			  success:  function(response){	
					$('.appendx').remove();
					$('#tableCOA').append(response);
					$('#tableCOA').DataTable( {
							paging: true,
							searching: true,
							"order": [[ 1, "asc" ]]
						} );
			  },
			  error: function(){
					alert("eror");
				}
		  });
	}
	
	function editx(x){
		$.ajax({
			  type:"post",
			  url:"<?php echo base_url('index.php/rekening/loadx');?>",
			  data:"id="+x,
			  dataType: 'json',
			  success:  function(response){	
					//for(var x=0;x<response.data.length;x++){
					  $("#id").val(response.data[0]['id']);
					  $("#coa").val(response.data[0]['nama']);
					  $("#kodecoa").val(response.data[0]['kode']);
					  $("#transaksi").val(response.data[0]['transaksi']);
					  $("#group").val(response.data[0]['group']);
					  $("#coainduk").val(response.data[0]['kodeinduk']);
					//}  
			  },
			  error: function(){
					alert("eror");
				}
		  });
	}
	$('#submit').click(function(){
		simpan();
	});
	function simpan(){
		
		  
	  $.ajax({
		  type:"post",
		  url:"<?php echo base_url('index.php/rekening/create');?>",
		  data:$('Form').serialize(),
		  dataType: 'json',
		  success:
		  function(response){
			 for (var x = 0; x < response.results.length; x++) {
				alert(response['results'][0]['message']);
				tampil_append_row();
			}
		  },
		  error:
			function(){
				alert("Error. Data Tidak Tersimpan");
			}
	  })
	}
	
</script>