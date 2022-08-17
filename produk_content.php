<div class="container-fluid">

    <div class="card border-0 box-shadow">
        <div class="card-body">
            <div class="header">
                <h5 style="color: #000233; font-size:x-large; font-weight:bold; margin-bottom: 40px;">Produk Anda</h5>
            </div>
            
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item">
                    <a href="#aktif" class="nav-link active" id="aktif-tab" data-toggle="tab" role="tab" aria-controls="aktif" aria-selected="true">Produk Aktif</a>
                </li>
                <li class="nav-item">
                    <a href="#tidakaktif" class="nav-link" id="tidakaktif-tab" data-toggle="tab" role="tab" aria-controls="tidakaktif" aria-selected="false">Produk Tidak Aktif</a>
                </li>
                <div class="col">
                    <div class="d-flex flex-column align-items-end mb-3">
                        <a href="produk_tambah.php">
                            <button class="btn border-0 btn-sm btn-primary p-2 pl-5 pr-5" style="border-radius: 6px; margin-right: -12px ;" type="button">
                                <i class="fas fa-plus mr-2"></i>
                                <span>Tambah Produk</span>
                            </button>
                        </a>
                    </div>
                </div>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane container fade show active" id="aktif" role="tabpanel" aria-labelledby="aktif-tab">
                    <div class="table-responsive-sm">
                        <table class="table table-borderless">
                            <thead style="background-color: #F2F2F2;color: #000233;">
                                <tr>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody style="color: #000233;">
                                <tr>
                                    <td>Nasi Merah</td>
                                    <td>Rp 100.000</td>
                                    <td width="50%">Nasi Merah dengan rendah kalori dapat membantu diet anda</td>
                                    <td class="row">
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                        <p class="h6 ml-2">Aktif</p>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="produk_edit.php">edit produk</a>
                                                <a class="dropdown-item" href="#">hapus produk</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane container fade" id="tidakaktif" role="tabpanel" aria-labelledby="tidakaktif-tab">
                <div class="table-responsive-sm">
                        <table class="table table-borderless">
                            <thead style="background-color: #F2F2F2;color: #000233;">
                                <tr>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody style="color: #000233;">
                                <tr>
                                    <td>Nasi Merah</td>
                                    <td>Rp 100.000</td>
                                    <td width="50%">Nasi Merah dengan rendah kalori dapat membantu diet anda</td>
                                    <td class="row">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <p class="h6 ml-2">Tidak Aktif</p>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-transparent p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="produk_edit.php">edit produk</a>
                                                <a class="dropdown-item" href="#">hapus produk</a>
                                            </div>
                                        </div>
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