<link rel="stylesheet" href="<?php echo base_url('assets/autocomplete/jquery-ui.css');?>">

  <script src="<?php echo base_url('assets/autocomplete/jquery-ui.js');?>"></script>
	
	<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Barang Masuk</h3>
			</div>
			<div class="box-body">
				<div id='sukses' class="alert alert-success alert-dismissable collapse">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success</h4>
                </div>
				<div id='rusak' class="alert alert-danger alert-dismissable collapse">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Error</h4>
                </div>
				<form class="form-horizontal" id="form" method="POST" >
				
					<div class="col-md-6">
						<div class="form-group ui-widget">
							<label class="control-label col-sm-3" for="nama">Supplier</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="nmsupp" name="nmsupp" placeholder="Nama Supplier" required>
								<input type="hidden" class="form-control" id="txtsupp" name="txtsupp"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group ui-widget">
							<label class="control-label col-sm-3" for="nama">No. Nota</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="nonota" name="nonota" placeholder="Nomor Nota" required>
								<input type="hidden" class="form-control" id="nonota" name="nonota"/>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-sm-3" for="nama">Tanggal Pembelian</label>
							<div class="col-sm-6">
								<input type="text" name="tgl" class="form-control" id="tgl" placeholder="Tanggal" required>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-sm-3" for="nama">Tanggal Jatuh Tempo</label>
							<div class="col-sm-6">
								<input type="text" name="tgljatem" class="form-control" id="tgljatem" placeholder="Tanggal" required>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-sm-3" for="nama">Pembayaran</label>
							<div class="col-sm-6">
								<select name="pembayaran" id="pembayaran"  class="form-control" >
									<option value="Lunas">Lunas</option>
									<option value="Kredit">Kredit</option>
								</select>
							</div>
						</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="box box-solid box-primary">
							<div class="box-header">
								<h3 class="box-title">Detail</h3>
								<div class="box-tools pull-right">
									<a class="btn btn-sm btn-warning" id="btnAdd"><i class="fa fa-plus"></i> Add</a>
								</div>
							</div>
							<div class="box-body">
								
								<table id="tableMenu" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>Nama Barang</th>
											<th>Qty</th>
											<th>Satuan</th>
											<th>Harga</th>
											<th>Discount</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody id="tbl_content">
						
									</tbody>
								</table>
								
							</div>
						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		var idS;
		$( "#nmsupp" ).autocomplete({
			source: function( request, response ) {
				$.ajax({
					dataType: "json",
					type : 'POST',
					data:{
						term: request.term,
					},
					url: '<?php echo base_url('/index.php/supplier/getSupplier')?>',
					success: function(data) {
						$('#nmsupp').removeClass('ui-autocomplete-loading');  
						response(data);
					},
					error: function(data) {
						$('#nmsupp').removeClass('ui-autocomplete-loading');  
					}
				});
			},
			select: function(event, ui) {
				idS = ui.item.id;
			},
			close: function() {
				$("#txtsupp").val(idS);
			}
		});
		
		$("#tgl").datepicker();
		$("#tgljatem").datepicker();
	});
	
	var i=0;
	var specialKeys = new Array();
	specialKeys.push(8);
	
	$("#btnAdd").click(function(){
		i++;
		$('#tbl_content').append(tmp(i));
	});
	
	$("#form").submit(function(e){
		e.preventDefault();
		$.ajax({
			type:'POST',
            url:'<?php echo base_url('/index.php/brgmasuk/simpan')?>',
			dataType: "json",
            data:$(this).serialize(),
            success:function(result){
				if(result.status){
					$('#sukses').removeClass('collapse');
					$('#sukses').append(result.msg);
					setTimeout(function() {
						$('#sukses').addClass("collapse");
					}, 2000);
				}else{
					$('#rusak').removeClass('collapse');
					$('#rusak').append(result.msg);
				}
                console.log(result.status);
			}
        }).done(function() {
			$("#form").trigger("reset");
			$('#tbl_content').empty();
		});
	});
	
	function tmp(id){
		var html_out="";
		html_out += "<tr id='row"+id+"'>";
		html_out += "<td>";
		html_out += "<input type='text' id='txtbrg"+id+"' onfocus='brgFocus("+id+")' class='form-control' name='txt_brg[]' placeholder='Nama Barang' required/>";
		html_out += "<input type='hidden' name='txt_kdbrg[]' id='txtbrg1"+id+"'/></td>";
		html_out += "<td style='width:80px'>";
		html_out += "<input type='text' class='form-control' name='txt_qty[]' placeholder='QTY' onkeypress='return IsNumeric(event);' required/></td>";
		
		html_out += "<td style='width:100px'>";
		html_out += "<input type='text' class='form-control' name='txt_satuan[]' placeholder='Satuan' required/></td>";
		
		html_out += "<td>";
		html_out += "<input type='text' class='form-control' name='txt_harga[]' placeholder='Harga' required/></td>";
		html_out += "<td><input type='text' class='form-control' name='txt_ket[]' placeholder='Discount'/></td>";
		html_out += "<td class='text-right'><a href='#' onclick='hapus("+id+")' class='btn btn-sm btn-danger'>Delete</a></td>";
		html_out += "</tr>";
		return html_out;
	} 
	
	function hapus(id){
		$("#row"+id).remove();
	}
	
	function brgFocus(id){
		var dtID;
		$("#txtbrg"+id).autocomplete({
			source: function( request, response ) {
				$.ajax({
					dataType: "json",
					type : 'POST',
					data:{
						term: request.term,
					},
					url: '<?php echo base_url('/index.php/barang/getBarang')?>',
					success: function(data) {
						var dt = [];
						$("#txtbrg"+id).removeClass('ui-autocomplete-loading');
						response(data);
					},
					error: function(data) {
						$("#txtbrg"+id).removeClass('ui-autocomplete-loading');  
					}
				});
			},
			select: function(event, ui) {
				dtID = ui.item.id;
			},
			close: function() {
				$("#txtbrg1"+id).val(dtID);
			}
		});
	}
	
	function IsNumeric(e) {
		var keyCode = e.which ? e.which : e.keyCode
		var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
		return ret;
	}
	
</script>