<?php
require("../../config.php");

$operator = $conn->real_escape_string(filter($_POST['target']));
$link2=	substr($operator,0,4);
	if(($link2 == '0811') OR ($link2 == '0812') OR ($link2 == '0813') OR ($link2 == '0821') OR ($link2 == '0822') OR ($link2 == '0823') OR ($link2 == '0852') OR ($link2 == '0853')){
    $jenis_nomor = 'E-Money OVO';
     $jenis_nomor2 = 'TSEL';
} else if(($link2 == '0817') OR ($link2 == '0818') OR ($link2 == '0819') OR ($link2 == '0859') OR ($link2 == '0877') OR ($link2 == '0878')){
    $jenis_nomor = 'E-Money OVO';
    $jenis_nomor2 = 'XL';
} else if(($link2 == '0896') OR ($link2 == '0897') OR ($link2 == '0898') OR ($link2 == '0899') OR ($link2 == '0895')){
    $jenis_nomor = 'E-Money OVO';
     $jenis_nomor2 = 'THREE';
} else if(($link2 == '0881') OR ($link2 == '0882') OR ($link2 == '0883') OR ($link2 == '0884') OR ($link2 == '0885') OR ($link2 == '0886') OR ($link2 == '0887') OR ($link2 == '0888') OR ($link2 == '0889') OR ($link2 == '0895') OR ($link2 == '0896') OR ($link2 == '0897') OR ($link2 == '0898') OR ($link2 == '0899')){
    $jenis_nomor = 'E-Money OVO';
    $jenis_nomor2 = 'SMARTFREN';
} else if(($link2 == '0998') OR ($link2 == '0999')){
    $jenis_nomor = 'E-Money OVO';
} else if(($link2 == '0828')){
    $jenis_nomor = 'E-Money OVO';
} else if(($link2 == '0838') OR ($link2 == '0831') OR ($link2 == '0832') OR ($link2 == '0833')){
    $jenis_nomor = 'E-Money OVO';
    $jenis_nomor2 = 'AXIS';
} else if(($link2 == '0855') OR ($link2 == '0856') OR ($link2 == '0857') OR ($link2 == '0858') OR ($link2 == '0814') OR ($link2 == '0815') OR ($link2 == '0816')){
    $jenis_nomor = 'E-Money OVO';
     $jenis_nomor2 = 'ISAT';
} else if(($link2 == '0851')){
    $jenis_nomor = 'E-Money OVO';
     $jenis_nomor2 = 'by.U';
}else{
    $jenis_nomor="tidak ada";$jenis_nomor2 = 'tidak ada';
}

$check_service = $conn->query("SELECT * FROM layanan_pulsa WHERE operator = '$jenis_nomor' AND status = 'Normal' ORDER BY harga ASC");
?>
	<?php
	while ($data_service = mysqli_fetch_assoc($check_service)) {
	    ?>
	    
	    <label class="col-12 alert alert-light bd bd-light" style="cursor: pointer;border: 5px solid #ffffff;border-radius: 12px;">
					<div class="rdiobox" style="width:100%">
						<input type="radio" name="layanan" value="<?php echo $data_service['service_id'];?>"><span><b> <?= $data_service['layanan']  ?></b></span>
							<div style="margin-top:20px;text-align:left;border:2px solid #fff;padding:1em;width:100%">
					            <h4><b> Harga :</b> <b>Rp <?= number_format($data_service['harga'],0,',','.') ?></b></h4>

					        </div>
                            <div style="margin-top:5px;text-align:left;border:2px solid #fff;padding:1em;width:100%">
                            <b> Info Paket</b><br> <h4><?php echo $data_service['deskripsi']; ?></h4>

					        </div>
					</div>
				
		</label>
        <!--<label class="col-12 alert alert-light bd bd-light" >
					
						<input type="radio" name="layanan" value="<?php echo $data_service['service_id'];?>"><span><b> <?= $data_service['layanan']  ?></b></span>
							<div style="margin-top:10px;solid #fff;width:100%">
					            <b> Harga :</b> Rp <?= number_format($data_service['harga'],0,',','.') ?>
                                

					        </div>
                            <div style="text-left">
                                <b> info :</b> <?php echo $data_service['deskripsi']; ?>

					        </div>
					
				
		</label>-->
				
	   
<?php
}