<div class="container-fluid">

    <div class="card border-0 box-shadow m-2">
        <div class="card-body p-0">
            <div class="row">
                <div class="card col-lg-3 m-0 border-bottom-0 border-top-0 border-left-0">
                    <h5 style="color: #000233;font-size:large; font-weight:bolder; margin: 20px 10px;">Kategori Program</h5>
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a href="#aktif" class="nav-link active" id="aktif-tab" data-toggle="tab" role="tab" aria-controls="aktif" aria-selected="true">Aktif</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tidakaktif" class="nav-link" id="tidakaktif-tab" data-toggle="tab" role="tab" aria-controls="tidakaktif" aria-selected="false">Tidak Aktif</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <div class="d-flex flex-column align-items-center mb-3">
                                <button class="btn border-0 btn-sm btn-primary p-2 pl-4 pr-4" style="border-radius: 6px;" type="button"><i class="fas fa-plus mr-2"></i><span>Tambah Kategori Baru</span></button>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent" style="width:100%">
                            <div class="tab-pane container fade show active" id="aktif" role="tabpanel" aria-labelledby="aktif-tab">
                                <div class="col-sm-12 pb-2 mb-2 border-bottom-primary">
                                    <div class="row d-flex flex-row">
                                        <span class="col" style="color:#2196F3 ; font-weight:bolder">WWKIDS</span>
                                        <div class="ml-auto mr-1 d-flex">
                                            <span class="rounded p-1 pl-2 pr-2 mr-2" style="font-size: 11px; color: #FFF; background-color: #2196F3;">4 program</span>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">ganti nama kategori</a>
                                                    <a class="dropdown-item" href="#">pindah non-aktif</a>
                                                    <a class="dropdown-item" href="#">hapus kategori</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="tidakaktif" role="tabpanel" aria-labelledby="tidakaktif-tab">
                                <div class="col-sm-12 pb-2 mb-2">
                                    <div class="row d-flex flex-row">
                                        <span class="col" style="color:#000233 ; font-weight:bolder">WWGYM</span>
                                        <div class="ml-auto mr-1 d-flex">
                                            <span class="rounded p-1 pl-2 pr-2 mr-2" style="font-size: 11px; color: #FFF; background-color: grey;">4 program</span>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">ganti nama kategori</a>
                                                    <a class="dropdown-item" href="#">pindah aktif</a>
                                                    <a class="dropdown-item" href="#">hapus kategori</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="card col-lg-9 m-0 p-0 border-0">
                    <div class="card-header m-0 border-0" style="background-color: #F2F2F2;color: #000233;">
                        WWKIDS
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a href="#aktif2" class="nav-link active" id="aktif2-tab" data-toggle="tab" role="tab" aria-controls="aktif2" aria-selected="true">Program Aktif</a>
                            </li>
                            <li class="nav-item">
                                <a href="#tidakaktif2" class="nav-link" id="tidakaktif2-tab" data-toggle="tab" role="tab" aria-controls="tidakaktif2" aria-selected="false">Program Tidak Aktif</a>
                            </li>
                            <div class="col">
                                <div class="d-flex flex-column align-items-end mb-3">
                                    <div class="dropdown">
                                        <button class="btn btn-transparent p-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="program_tambah.php">tambah program</a>
                                            <a class="dropdown-item" href="program_tambah_variasi.php">tambah variasi program</a>
                                            <a class="dropdown-item" href="program_edit.php">edit program</a>
                                            <a class="dropdown-item" href="#">hapus program</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane container fade show active" id="aktif2" role="tabpanel" aria-labelledby="aktif2-tab">
                                <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <thead style="background-color: #F2F2F2;color: #000233;">
                                            <tr>
                                                <th scope="col">Nama Program</th>
                                                <th scope="col">Variasi Program</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000233;">
                                            <tr>
                                                <td class="pt-4">Basketball</td>
                                                <td>
                                                    <table class="border-0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <p>Basketball Group Kids</p>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <label class="switch">
                                                                        <input type="checkbox" checked>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                    <p class="h6 ml-2">Aktif</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="program_edit_variasi.php">edit variasi program</a>
                                                                        <a class="dropdown-item" href="#">hapus program</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>Basketball Group Kids</p>
                                                            </td>
                                                            <td>
                                                                <div class="row mb-1">
                                                                    <label class="switch">
                                                                        <input type="checkbox" checked>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                    <p class="h6 ml-2">Aktif</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="program_edit_variasi.php">edit variasi program</a>
                                                                        <a class="dropdown-item" href="#">hapus program</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="tidakaktif2" role="tabpanel" aria-labelledby="tidakaktif2-tab">
                            <div class="table-responsive-sm">
                                    <table class="table table-borderless">
                                        <thead style="background-color: #F2F2F2;color: #000233;">
                                            <tr>
                                                <th scope="col">Nama Program</th>
                                                <th scope="col">Variasi Program</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: #000233;">
                                            <tr>
                                                <td class="pt-4">Basketball</td>
                                                <td>
                                                    <table class="border-0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <p>Basketball Group Kids</p>
                                                            </td>
                                                            <td>
                                                                <div class="row mb-1">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                    <p class="h6 ml-2">Tidak Aktif</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                        <a class="dropdown-item" href="program_edit_variasi.php">edit variasi program</a>
                                                                        <a class="dropdown-item" href="#">hapus program</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
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
    </div>

</div>

<!-- modal ganti nama kategori -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti Nama Kategori Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="color: #000233; font-weight: bolder;">Nama Kategori Baru</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- modal hapus kategori -->
