					<ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #047edf;">
								
                                <span class="mr-2 d-none d-lg-inline "><i class="fas fa-fw fa-user" ></i> <?php echo $this->session->userdata('ses_nama'); ?></span>
                                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url().'logout' ?>" data-toggle="modal" data-target="#logoutModal" style="color: red;">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

					<!-- Logout Modal-->
					<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Yakin Akan Keluar?</h5>
									<button class="close" type="button" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">×</span>
									</button>
								</div>
								<div class="modal-body">Pilih "Logout" Dibawah ini Untuk Keluar.</div>
								<div class="modal-footer">
									<button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
									<a class="btn btn-danger" href="<?php echo base_url().'logout' ?>">Logout</a>
								</div>
							</div>
						</div>
					</div>
