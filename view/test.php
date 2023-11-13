<ul class="pagination pagination-month justify-content-center">

                                <?php
                                // Loop through the result set and generate links
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id_ruangan = $row['id_ruangan'];
                                    $nama_ruangan = $row['nama_ruangan'];

                                    // Modify the href as per your requirement
                                    $href = "detailruang.php?id=" . $id_ruangan;

                                    echo '<li class="page-item">
                                            <a class="page-link" href="' . $href . '">
                                                <p class="page-month">' . $nama_ruangan . '</p>
                                                <p class="page-year">' . $id_ruangan . '</p>
                                            </a>
                                          </li>';
                                }

                                // Free the result set
                                mysqli_free_result($result);
                                ?>

                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>