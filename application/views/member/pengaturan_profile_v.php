<br>
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">

    <!-- Column bagian kiri : mulai -->

    <div class="col-lg-2 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="myadmin-dd dd" id="nestable">
                    <div class="text-center">
                        <button type="button" class="btn waves-effect waves-light btn-outline-info"> Jual Barang </button>
                    </div><br>
                    <ol class="dd-list">
                        <li class="dd-item" >
                            <a href="#"> Ringkasan Akun </a>
                        </li><br>
                        <li class="dd-item">
                            <a href="<?php echo base_url()?>labelbarang" > Label Barang </a>   
                        </li><br>
                        <li class="dd-item" >
                            <a href="#"> Daftar Barang </a>
                            <ol class="dd-list"><br>
                                <li class="dd-item" >
                                    <a href="#"> Barang Dijual </a>
                                </li><br>
                                <li class="dd-item" >
                                    <a href="#"> Barang Tidak Dijual </a> 
                                </li><br>
                                <li class="dd-item" >
                                    <a href="#"> Barang Draf  </a>    
                                </li><br>
                            </ol>
                        </li>

                        <div class="dropdown-divider"></div>

                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Teman </a> 
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Barang Favorit </a> 
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Langganan </a>    
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Pembelian Rutin </a>   
                        </li>

                        <div class="dropdown-divider"></div>

                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Saldo </a>   
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Transaksi </a>   
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Feedback </a>   
                        </li>

                        <div class="dropdown-divider"></div>

                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Pesan </a>  
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Diskusi Barang </a>  
                        </li>

                        <div class="dropdown-divider"></div>

                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Kode Promo </a> 
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>labelbarang"> Koperasi Widget </a> 
                        </li><br>
                        <li class="dd-item" data-id="1">
                            <a href="<?php echo base_url()?>pengaturan_profile" style="color: #4798e8;"> Pengaturan </a>
                        </li>
                    </ol><br>
                    <div class="text-center">
                        <button type="button" class="btn waves-effect waves-light btn-outline-info"> Preview Lapak </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Column bagian kiri : selasai -->

    <!-- Column bagian kanan : mulai -->
    <div class="col-lg-10 col-md-12">
        <h3 class="card-title">Pengaturan </h3><br>
        <?php
        $data=$this->session->flashdata('sukses');
        if($data!=""){ 
            ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                <h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3> <?=$data;?>
            </div>
            <?php 
        } 
        ?>
        <?php 
        $data2=$this->session->flashdata('error');
        if($data2!=""){ 
            ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                <h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal!</h3> <?=$data2;?>
            </div>
            <?php 
        } 
        ?>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-pills m-t-30 m-b-30">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Akun</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Alamat</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Toko</a> </li>
                <li class=" nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Pengiriman</a> </li>
                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Rekening Bank</a> </li>
                <li class="nav-item"> <a href="#navpills-6" class="nav-link" data-toggle="tab" aria-expanded="true">Pengaturan Pembayaran</a> </li>
                <li class=" nav-item"> <a href="#navpills-7" class="nav-link" data-toggle="tab" aria-expanded="false">Notifikasi</a> </li>
                <li class="nav-item"> <a href="#navpills-8" class="nav-link" data-toggle="tab" aria-expanded="false">Forum</a> </li>
                <li class="nav-item"> <a href="#navpills-9" class="nav-link" data-toggle="tab" aria-expanded="true">Lainnya</a> </li>
            </ul>


            <h5 class="card-title">Profil Akun </h5>
            <p> Data Anda selalu rahasia dan tidak akan kami beritahukan kepada pihak ketiga.</p>

            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        <div class="table-responsive">
                            <?php echo validation_errors(); ?>
                            <form action="<?php echo site_url('MemberC/update_member')?>" method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width="230"><h4>Informasi Umum</h4></td>
                                            <td class="text-right">
                                                <button type="button" class="btn waves-effect waves-light btn-info" id="edit"> Edit </button>
                                                <span> &nbsp;</span>
                                                <button type="button" name="cancel" id="cancel" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel </button>
                                            </td>
                                            <input type="hidden" name="memberID" value="<?php echo $dataDiri['memberID']?>">
                                        </tr>
                                        <tr>
                                            <td>Foto Profil</td>
                                            <td> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 20%"/> </td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td> 
                                                <input type="text" name="username" id="username" class="form-control is-valid" value="<?php echo $detail_member->username;?>" style="display: none;" ></input>
                                                <div id="username2"><?php echo $detail_member->username;?></div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('username'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>
                                                <input type="text" name="memberName" id="memberName" class="form-control is-valid" value="<?php echo $detail_member->memberName;?>" style="display: none;">
                                                <div id="memberName2"><?php echo $detail_member->memberName;?></div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('memberName'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td>
                                                <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control is-valid" value="<?php echo $detail_member->tmp_lahir;?>" style="display: none;">
                                                <div id="tmp_lahir2">
                                                    <?php
                                                    if($detail_member->tmp_lahir==""){
                                                        echo "-";
                                                    }else{
                                                        echo $detail_member->tmp_lahir;
                                                    }
                                                    ?>
                                                </div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('tmp_lahir'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>
                                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control is-valid" value="<?php echo $detail_member->tgl_lahir;?>" style="display: none;">
                                                <div id="tgl_lahir2">
                                                    <?php
                                                    if($detail_member->tgl_lahir == "0000-00-00"){
                                                        echo "-";
                                                    }else{
                                                        echo $detail_member->tgl_lahir;
                                                    } 
                                                    ?>
                                                </div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('tgl_lahir'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin </td>
                                            <td>
                                                <select name="gender" id="gender" class="form-control is-valid" style="display: none;">
                                                   <?php
                                                   if($detail_member->gender == 1){
                                                    echo "<option selected value='1'>Laki-laki</option>
                                                    <option value='2'>Perempuan</option>
                                                    <option value='3'>Lainnya</option>";
                                                }elseif ($detail_member->gender == 2) {
                                                 echo "<option value='1'>Laki-laki</option>
                                                 <option selected value='2'>Perempuan</option>
                                                 <option value='3'>Lainnya</option>";
                                             }elseif ($detail_member->gender == 3){
                                                 echo "<option value='1'>Laki-laki</option>
                                                 <option value='2'>Perempuan</option>
                                                 <option selected value='3'>Lainnya</option>";
                                             }else{
                                                echo "<option>----Pilih Jenis Kelamin----</option>
                                                <option value='1'>Laki-laki</option>
                                                <option value='2'>Perempuan</option>
                                                <option value='3'>Lainnya</option>";
                                            }
                                            ?>

                                        </select>
                                        <div id="gender2">
                                            <?php
                                            if($detail_member->gender == 1){
                                                echo "Laki-laki";
                                            }elseif ($detail_member->gender == 2) {
                                                echo "Perempuan";
                                            }elseif($detail_member->gender == 3){
                                                echo "Lainnya";
                                            }else{
                                                echo "-";
                                            }

                                            ?>

                                        </div>
                                        <span class="text-danger" style="color: red;"><?php echo form_error('gender'); ?></span> 
                                    </td>
                                </tr>
                                <tr id="kolom_save" style="display: none;">
                                    <td>

                                    </td>
                                    <td>
                                        <button type="submit" name="submit" class="btn waves-effect waves-light btn-info" id="save"> Save </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td ><h4>E-mail dan Telepon</h4></td>
                                    <td class="text-right">
                                        <button type="button" class="btn waves-effect waves-light btn-info" id="edit2"> Edit </button>
                                        <span> &nbsp;</span>
                                        <button type="button" name="cancel" id="cancel2" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel 
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>
                                        <input type="text" name="email" id="email" class="form-control is-valid" value="<?php echo $detail_member->email;?>" style="display: none;" ></input>
                                        <div id="email2"><?php echo $detail_member->email;?> <i class="mdi mdi-check font-20" style="color: #4798e8;"> <small>terverifikasi</small></i></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>
                                        <input type="text" name="phone" id="phone" class="form-control is-valid" value="<?php echo $detail_member->phone;?>" style="display: none;" ></input>
                                        <div id="phone2"><?php echo $detail_member->phone;?></div>
                                    </td>
                                </tr>
                                <tr id="kolom_save2" style="display: none;">
                                    <td>

                                    </td>
                                    <td>
                                        <button type="submit" name="submit" class="btn waves-effect waves-light btn-info" id="save2"> Save </button>
                                    </td>
                                    <tr>
                                        <td><h4>Password</h4></td>
                                        <td class="text-right">
                                            <button type="button" class="btn waves-effect waves-light btn-info" id="edit3"> Edit </button>
                                            <span> &nbsp;</span>
                                            <button type="button" name="cancel3" id="cancel3" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel 
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            <input type="password" name="password" id="password" class="form-control is-valid" value="" style="display: none;" ></input>
                                            <div id="password2">Diperbaharui beberapa waktu yang lalu</div>
                                        </td>
                                    </tr>
                                    <tr id="kolom_confirm"  style="display: none;" >
                                        <td>Konfirmasi password</td>
                                        <td >
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control is-valid"></input>
                                        </td>
                                    </tr>
                                    <tr id="kolom_save3" style="display: none;">
                                        <td>

                                        </td>
                                        <td>
                                            <button type="submit" name="submit" class="btn waves-effect waves-light btn-info" id="save3"> Save 
                                            </button>
                                        </td>
                                        <tr>
                            <!-- <tr>
                                <td><h4>Otentikasi 2 langkah</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info"> Non-aktifkan </button></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td style="color: #4798e8;"> Aktif </td>
                            </tr>
                            <tr>
                                <td><h4>Login Alerts</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info">  Non-aktifkan </button></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td style="color: #4798e8;"> Aktif </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <ul class="list-group list-group-full">
                                        <li class="list-group-item active" style="font-size: 12px"> Bila fitur ini dinyalakan, Anda akan mendapatkan email pemberitahuan setiap kali akun Anda melakukan login dari device yang berbeda.</li>
                                    </ul>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </form><br><br>
            </div>
        </div>
    </div>
    <div id="navpills-2" class="tab-pane">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12"> 
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width=><h4>Alamat</h4> <h6 class="card-subtitle">Alamat utama digunakan untuk menghitung estimasi biaya pengiriman saat pembeli berbelanja di toko kamu.</h6></td>
                                            <td class="text-right">
                                                <input type="button" name="tambah" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal"  title="tambah alamat" value="Tambah">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--  -->
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="max-width: 10px; text-align: center;">No.</th>
                                        <th>Nama Alamat</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // print_r($shipping_address);
                                    $i=0;
                                    foreach ($shipping_address as $alamat) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td style="max-width: 10px; text-align: center; vertical-align: center;"><?php echo $i;?></td>
                                            <td><?php echo $alamat->shipping_address_name;?></td>
                                            <td>
                                                <?php 
                                                echo "<p><b>".$alamat->nama_penerima."</b><br>";
                                                echo $alamat->locationName."<br>";
                                                echo $alamat->nama_kelurahan."<br>";
                                                echo $alamat->nama_kecamatan."<br>";
                                                echo $alamat->nama_kabupaten_kota."<br>";
                                                echo $alamat->nama_propinsi."<br>";

                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($alamat->status_alamat == "default") {
                                                    ?>

                                                    <button title="alamat utama" class="btn btn-info btn-sm"><span class="ti-check"></span> Alamat Utama</button>
                                                    <?php
                                                }else{

                                                    ?>
                                                    <a href="<?php echo site_url('MemberC/set_utama/').$dataDiri['memberID']."/".$alamat->shipping_addressID;?>" title="set utama" class="btn btn-secondary btn-sm" onClick="return confirm('Anda yakin akan menggunakan alamat ini sebagai alamat utama ?')"><span class="ti-save"></span> Set Utama
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                                <a href="<?php echo site_url('MemberC/edit_alamat/').$dataDiri['memberID']."/".$alamat->shipping_addressID;?>" title="edit" class="btn btn-success btn-sm"><span class="ti-pencil-alt"></span>
                                                </a>
                                                <a href="<?php echo site_url('MemberC/hapus_alamat/').$dataDiri['memberID']."/".$alamat->shipping_addressID;?>" title="hapus" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin akan menghapus item ini dari keranjang?')"><span class="ti-trash"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="navpills-3" class="tab-pane">
        Toko
    </div>
    <div id="navpills-4" class="tab-pane">
        Pegiriman
    </div>
    <div id="navpills-5" class="tab-pane">
        Rekening Bank
    </div>
    <div id="navpills-6" class="tab-pane">
        Pengaturan Pembayaran
    </div>
    <div id="navpills-7" class="tab-pane">
        Notifikasi
    </div>
    <div id="navpills-8" class="tab-pane">
        Forum
    </div>
    <div id="navpills-9" class="tab-pane">
        Lainnya
    </div>
</div>
</div>

</div>
</div>
</div>
<!-- Column bagian kanan : selesai -->


</div>

<!-- modal -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <?php echo validation_errors(); ?>
        <form action="<?php echo site_url('MemberC/post_tambah_alamat')?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Alamat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="memberID" value="<?php echo $dataDiri['memberID'];?>">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama Alamat:</label>
                        <input type="text" class="form-control" id="shipping_address_name" name="shipping_address_name" placeholder="contoh : aalmat rumah, alamat kantor" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Alamat</label>
                        <textarea type="text" class="form-control" id="locationName" name="locationName" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Propinsi</label>
                        <select class="form-control" id="propinsi" name="propinsi" required>
                            <option>-----pilih provinsi-----</option>
                            <?php 
                            foreach ($provinsi as $prov) {
                                ?>
                                <option value="<?php echo $prov['id_propinsi']?>"><?php echo $prov['nama_propinsi'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kota</label>
                        <select class="form-control" id="kota" name="kota" required>
                            <option>-----pilih kota-----</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kecamatan</label>
                        <select class="form-control" id="kecamatan" name="kecamatan" required>
                            <option>-----pilih kecamatan-----</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kelurahan</label>
                        <select class="form-control" id="kelurahan" name="id_kelurahan" required>
                            <option>-----pilih kelurahan-----</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kode Pos</label>
                        <input type="number" name="kode_pos" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Batal</button>
                    <input type="submit" name="submit" class="btn btn-info" value="Simpan">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>

<script language="JavaScript">
    $("#edit").click(function(){
        $("#username2").hide();
        $("#memberName2").hide();
        $("#tmp_lahir2").hide();
        $("#tgl_lahir2").hide();
        $("#gender2").hide();

        $("#username").show();
        $("#memberName").show();
        $("#tmp_lahir").show();
        $("#tgl_lahir").show();
        $("#gender").show();
        $("#kolom_save").show();

        $("#username").focus();
        $("#edit").hide();
        $("#cancel").show();
    });

    $("#edit2").click(function(){
        $("#email2").hide();
        $("#phone2").hide();

        $("#email").show();
        $("#phone").show();
        $("#kolom_save2").show();

        $("#email").focus();
        $("#edit2").hide();
        $("#cancel2").show();


    });

    $("#edit3").click(function(){
        $("#password2").hide();
        $("#confirm_password2").show();


        $("#password").show();
        $("#confirm_password").show();
        $("#kolom_save3").show();
        $("#kolom_confirm").show();

        $("#password").focus();
        $("#edit3").hide();
        $("#cancel3").show();


    });

    $("#cancel").click(function(){
        $("#username2").show();
        $("#memberName2").show();
        $("#tmp_lahir2").show();
        $("#tgl_lahir2").show();
        $("#gender2").show();

        $("#username").hide();
        $("#memberName").hide();
        $("#tmp_lahir").hide();
        $("#tgl_lahir").hide();
        $("#gender").hide();
        $("#kolom_save").hide();

        $("#edit").show();
        $("#cancel").hide();
    });

    $("#cancel2").click(function(){
        $("#email2").show();
        $("#phone2").show();

        $("#email").hide();
        $("#phone").hide();
        $("#kolom_save2").hide();

        $("#edit2").show();
        $("#cancel2").hide();
    });

    $("#cancel3").click(function(){
        $("#password2").show();
        $("#confirm_password2").show();


        $("#password").hide();
        $("#confirm_password").hide();
        $("#kolom_save3").hide();
        $("#kolom_confirm").hide();


        $("#edit3").show();
        $("#cancel3").hide();
    });

    $(function () {
        $("#save3").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm_password").val();
            var pass_length = password.length;
            if (password != confirmPassword) {
                alert("Kata sandi tidak sama.");
                    // document.getElementById("demo").innerHTML = "Kata sandi tidak sama.";
                    return false;
                }else{
                    if(pass_length < 6){
                        alert("Panjang Kata sandi minimal 6 karakter");
                        return false;
                    }else{
                        if(pass_length > 50){
                            alert("Panjang Kata sandi maksimal 50 karakter");
                            return false;
                        }else{
                            return true;
                        }
                    }
                }
            });
    });

    $(document).ready(function(){
        // City change
        $('#propinsi').change(function(){
            var propinsi = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>MemberC/get_kabupaten_kota',
                method: 'post',
                data: {id_propinsi: propinsi}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kota').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kota').append('<option value="'+data['id_kabupaten_kota']+'">'+data['nama_kabupaten_kota']+'</option>');
                    });
                }
            });
        });

        $('#kota').change(function(){
            var kota = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>MemberC/get_kecamatan',
                method: 'post',
                data: {id_kabupaten_kota: kota}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kecamatan').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kecamatan').append('<option value="'+data['id_kecamatan']+'">'+data['nama_kecamatan']+'</option>');
                    });
                }
            });
        });

        $('#kecamatan').change(function(){
            var kecamatan = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>MemberC/get_kelurahan',
                method: 'post',
                data: {id_kecamatan : kecamatan}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kelurahan').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kelurahan').append('<option value="'+data['id_kelurahan']+'">'+data['nama_kelurahan']+'</option>');
                    });
                }
            });
        });

        //buat reoad ke current tab pane 
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          // save the latest tab; use cookies if you like 'em better:
          localStorage.setItem('lastTab', $(this).attr('href'));
      });

      // go to the latest tab, if it exists:
      var lastTab = localStorage.getItem('lastTab');
      if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
    }
});
</script>