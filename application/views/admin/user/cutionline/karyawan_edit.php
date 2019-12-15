

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Karyawan</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Edit Karyawan cutionline</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">

                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Edit Karyawan <a href="<?php echo base_url('admin/cutionline/karyawan') ?>" class="btn btn-info pull-right"><i class="fa fa-list"></i> All Karyawan </a></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/cutionline/update_karyawan/'.$karyawan->no) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">NBM <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="nbm" class="form-control" value="<?php echo $karyawan->nbm; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">nama <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $karyawan->nama; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Gender </label>
                                        <div class="col-md-9 controls">
                                                <select class="form-control custom-select" name="gender" aria-invalid="false">
												<option value=<?php echo $karyawan->gender ; ?>><?php echo $karyawan->gender ; ?></option>
                                                    <option value="Laki-Laki">Laki-Laki</option>
													<option value="Perempuan">Perempuan</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tempat Lahir <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="tempat_lhr" class="form-control" value="<?php echo $karyawan->tempat_lhr ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tanggal Lahir <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $karyawan->tgl_lahir ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Alamat <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="alamat" class="form-control" value="<?php echo $karyawan->alamat ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">RT <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="rt" class="form-control" value="<?php echo $karyawan->rt ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">RW <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="rw" class="form-control" value="<?php echo $karyawan->rw ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nomor <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="no_hp" class="form-control" value="<?php echo $karyawan->no_hp ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Devisi <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="devisi" class="form-control" value="<?php echo $karyawan->devisi ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Jabatan <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="jabatan" class="form-control" value="<?php echo $karyawan->jabatan ; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                            
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->

</div>
