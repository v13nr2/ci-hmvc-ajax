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
              <h3 class="box-title">User Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="User Name">
                </div>
                <div class="form-group">
                  <label for="group">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="group">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="group">Confirm Password</label>
                  <input type="password" class="form-control" id="password2" placeholder="Confirm Password">
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
              <h3 class="box-title">Data User</h3>&nbsp;&nbsp;
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tableMenu" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
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
$(document).ready(function(){
	$('#baru').click(function(){
		$("#nama").val('');
	    $("#username").val('');
	    idx = "";
		
	});

});
	tampil_append_row();
	var idx;

	$('#submit').click(function(){
		simpan();
	});
	function simpan(){
		
		  nama =   $("#nama").val();
		  username =   $("#username").val();
		  password =   $("#password").val();
		  password2 =   $("#password2").val();
		  if(password!=password2){
			  alert("Password tidak sama");
			  return false;
		  }

		  $.ajax({
			  type:"post",
			  url:"<?php echo base_url('index.php/user/create');?>",
			  data:"nama="+nama+
			  "&username="+username+
			  "&password="+password+
			  "&id="+idx,
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
	
	function deletex(x){
		hapus = confirm("Apakah Anda yakin menghapus user ini ?");
		if(hapus){
		  $.ajax({
			  type:"post",
			  url:"<?php echo base_url('index.php/user/deletex');?>",
			  data:"id="+x,
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
					alert("Error. Data Tidak Terhapus");
				}
		  })
		  
		}
	}
	
	function editx(x){
		$.ajax({
			  type:"post",
			  url:"<?php echo base_url('index.php/user/loadx');?>",
			  data:"id="+x,
			  dataType: 'json',
			  success:  function(response){	
					//for(var x=0;x<response.data.length;x++){
					  $("#nama").val(response.data[0]['nama']);
					  $("#username").val(response.data[0]['username']);
					  $("#password").val('');
					  $("#password2").val('');
					  $("#password").attr("placeholder", "Biarkan kosong jika tidak diganti");
					  $("#password2").attr("placeholder", "Biarkan kosong jika tidak diganti");
					  idx = response.data[0]['id'];
					//}  
			  },
			  error: function(){
					alert("eror");
				}
		  });
	}
	
	function tampil_append_row(){
		$.ajax({
			  type:"get",
			  url:"<?php echo base_url('index.php/user/display');?>",
			  data:"cari=",
			  dataType: 'html',
			  success:  function(response){	
					$('.appendx').remove();
					$('#tableMenu').append(response);
			  },
			  error: function(){
					alert("eror");
				}
		  });
	}
</script>