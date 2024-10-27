  <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
          <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel</a>
          <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link me-2 active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="kamar.php">Kamar</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="fasilitas.php">Fasilitas</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="kontak.php">Kontak</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link me-2" href="about.php">Tentang Kami</a>
                  </li>
              </ul>
              <div class="d-flex">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                      Login
                  </button>
                  <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#RegisterModal">
                      Register
                  </button>
              </div>
          </div>
      </div>
  </nav>
  <!-- navbar end -->




  <!-- Modal login-->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <!-- form login -->
              <form action="">
                  <div class="modal-header">
                      <h5 class="modal-title d-flex align-items-center">
                          <i class="bi bi-person-circle fs-3 me-2"></i>
                          User Login
                      </h5>
                      <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control shadow-none">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control shadow-none">
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                          <button class="btn btn-dark shadow-none">Login</button>
                          <a href="javascript: void(0)" class="text-secondary text-decoration-none">Lupa Password?</a>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>

  <!-- modal register -->
  <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <!-- form login -->
              <form action="">
                  <div class="modal-header">
                      <h5 class="modal-title d-flex align-items-center">
                          <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                          User Registration
                      </h5>
                      <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Catatan: Rincian harus sesuai identitas anda (KTP, Passport, Sim, dll) yang akan diperlukan saat Check-in</span>
                      <div class="container-fulid">
                          <div class="row">
                              <div class="col-md-6 mb-3">
                                  <label class="form-label ps-0">Nama</label>
                                  <input type="text" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label p-0">Email</label>
                                  <input type="email" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label ps-0">Nomor Hp</label>
                                  <input type="number" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label p-0">Foto</label>
                                  <input type="file" class="form-control shadow-none">
                              </div>
                              <div class="col-md-12 mb-3">
                                  <label class="form-label p-0">Alamat</label>
                                  <textarea class="form-control shadow-none" rows="1"></textarea>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label ps-0">Kode Pos</label>
                                  <input type="number" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label p-0">Tanggal Lahir</label>
                                  <input type="date" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label ps-0">Password</label>
                                  <input type="password" class="form-control shadow-none">
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label class="form-label p-0">Konfirmasi Password</label>
                                  <input type="password" class="form-control shadow-none">
                              </div>
                          </div>
                      </div>
                      <div class="text-center my-1">
                          <button class="btn btn-dark shadow-none">Register</button>
                      </div>
                      <!-- <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Lupa Password?</a>
                        </div> -->
                  </div>

              </form>
          </div>
      </div>
  </div>