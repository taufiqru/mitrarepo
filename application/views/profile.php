<?php

foreach($mitra as $row){
  $nama = $row->nama;
  $kemampuan_nyata = $row->kemampuan_nyata;
  $tenaga_ahli = $row->tenaga_ahli;
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Mitra</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Profil Mitra</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">

                <div class="text-center">
                  <img class="profile-user-img img-fluid" style="border:none" src="<?=base_url();?>dist/img/user4-128x128.jpg" alt="Logo Mitra">
                </div>

                <h3 class="profile-username text-center"><?=$nama?></h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>KN</b> <a class="float-right">Rp <?=$kemampuan_nyata?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tenaga Ahli</b> <a class="float-right"><?=$tenaga_ahli?> Orang</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tahun Berdiri</b> <a class="float-right">2014</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tags</b> <a class="float-right">None</a>
                  </li>
                </ul>

            </div>
          </div>
          <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#kantor" data-toggle="tab">Kantor</a></li>
                  <li class="nav-item"><a class="nav-link" href="#workshop" data-toggle="tab">Workshop</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="kantor">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>
                    <p class="text-muted">Malibu, California</p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Status Kepemilikan</strong>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>
                  <div class="tab-pane" id="workshop">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>
                    <p class="text-muted">Malibu, California</p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Status Kepemilikan</strong>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
          </div>
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Galeri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#direktur" data-toggle="tab">Direktur</a></li>
                  <li class="nav-item"><a class="nav-link" href="#cp" data-toggle="tab">LO/CP</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="direktur">
                    <strong><i class="fas fa-user mr-1"></i>Nama</strong>
                    <p class="text-muted">Malibu, California</p>
                    <hr>
                    <strong><i class="far fa-file-alt mr-1"></i> Jabatan</strong>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    <hr>
                    <strong><i class="far fas fa-phone mr-1"></i> Kontak</strong>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>
                  <div class="tab-pane" id="cp">
                    <div class="card">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                              <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Kontak</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Functional requirements docx</td>
                                <td>49.8005 kb</td>
                                <td>0813123456</td>
                              </tr><tr>
                                <td>UAT.pdf</td>
                                <td>28.4883 kb</td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>    
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#kemhan" data-toggle="tab">Pengalaman IT 4 Thn Terakhir di Kemhan</a></li>
                  <li class="nav-item"><a class="nav-link" href="#luar" data-toggle="tab">Pengalaman IT 4 Thn Terakhir di Luar Kemhan</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="kemhan">
                    <div class="card">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                            <tr>
                              <th>Order ID</th>
                              <th>Item</th>
                              <th>Status</th>
                              <th>Popularity</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR9842</a></td>
                              <td>Call of Duty IV</td>
                              <td><span class="badge badge-success">Shipped</span></td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR1848</a></td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge badge-warning">Pending</span></td>
                              <td>
                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR7429</a></td>
                              <td>iPhone 6 Plus</td>
                              <td><span class="badge badge-danger">Delivered</span></td>
                              <td>
                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR7429</a></td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge badge-info">Processing</span></td>
                              <td>
                                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                              </td>
                            </tr>
                            
                            </tbody>
                          </table>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                      </div>
                      <!-- /.card-footer -->
                    </div>
                  </div>
                  <div class="tab-pane" id="luar">
                    <div class="card">
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                            <tr>
                              <th>Order ID</th>
                              <th>Item</th>
                              <th>Status</th>
                              <th>Popularity</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR9842</a></td>
                              <td>Call of Duty IV</td>
                              <td><span class="badge badge-success">Shipped</span></td>
                              <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR1848</a></td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge badge-warning">Pending</span></td>
                              <td>
                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR7429</a></td>
                              <td>iPhone 6 Plus</td>
                              <td><span class="badge badge-danger">Delivered</span></td>
                              <td>
                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                              </td>
                            </tr>
                            <tr>
                              <td><a href="pages/examples/invoice.html">OR7429</a></td>
                              <td>Samsung Smart TV</td>
                              <td><span class="badge badge-info">Processing</span></td>
                              <td>
                                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                              </td>
                            </tr>
                            
                            </tbody>
                          </table>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                      </div>
                      <!-- /.card-footer -->
                    </div>    
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Dokumen</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Popularity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-info">Processing</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>iPhone 6 Plus</td>
                      <td><span class="badge badge-danger">Delivered</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            
        </div>
      </div>
    </div>
</section>
  
</div>