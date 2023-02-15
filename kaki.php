
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    


    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    

    <script src="assets/chartjs/Chart.bundle.min.js"></script>
    

        <script>
            var ctx = document.getElementById("chart1").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Kelas 1", "Kelas 2", "Kelas 3", "Kelas 4", "Kelas 5", "Kelas 6"],
                datasets: [{
                    label: 'Kelas',
                    data: [
                    <?php 
                    include "koneksi.php";
                    $jumlahpos = mysqli_query($koneksi,"select * from user where Akses='aktif'");
                    echo mysqli_num_rows($jumlahpos);
                    ?>, 
                    <?php 
                    include "koneksi.php";
                    $jumlahneg = mysqli_query($koneksi,"select * from user where Akses='tidak_aktif'");
                    echo mysqli_num_rows($jumlahneg);
                    ?>
                    ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
                    </script>
   
   
  
        <script>
            var ctx = document.getElementById("kelas_chart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Kelas 1", "Kelas 2", "Kelas 3", "Kelas 4", "Kelas 5", "Kelas 6"],
                datasets: [{
                    label: 'Kelas',
                    data: [ 
                            <?=$siswa_kelas1?>, <?=$siswa_kelas2?>,<?=$siswa_kelas3?>,<?=$siswa_kelas4?>,<?=$siswa_kelas5?>,<?=$siswa_kelas6?>,
                          ],

                    backgroundColor: ['#4FC3F7', 'red', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
  
  
        <script>
            var ctx = document.getElementById("status_chart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["baru", "diterima", "ditolak", "aktif", "pindah","dikeluarkan","berhenti", "lulus",],
                datasets: [{
                    label: 'Siswa',
                    data: [ 
                            <?=$siswa_baru?>, <?=$siswa_diterima?>,<?=$siswa_ditolak?>,<?=$siswa_aktif?>,<?=$siswa_pindah?>,<?=$siswa_dikeluarkan?>,<?=$siswa_berhenti?>,<?=$siswa_lulus?>,
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
  
  
<script>
    var ctx = document.getElementById("pendaftar_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'pendaftar',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
<script>
    var ctx = document.getElementById("ditolak_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'ditolak',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'ditolak'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
  
<script>
    var ctx = document.getElementById("ditolak_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'ditolak',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'ditolak'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
  
<script>
    var ctx = document.getElementById("ditolak_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'ditolak',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'ditolak'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
  
<script>
    var ctx = document.getElementById("ditolak_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'ditolak',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'ditolak'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
  
<script>
    var ctx = document.getElementById("pindah_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'pindah',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'pindah'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
  
<script>
    var ctx = document.getElementById("berhenti_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'berhenti',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'berhenti'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
  
   
<script>
    var ctx = document.getElementById("drop_out_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'drop_out',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'drop_out'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
  
<script>
    var ctx = document.getElementById("diluluskan_chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'diluluskan',
                    data: [ 
                    <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                {
                                    // menghitung jumlah pendaftar
                                    $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'diluluskan'";
                                    $query=mysqli_query($koneksi,$sql);
                                    $rk_pendaftar=0;
                                        while($data=mysqli_fetch_array($query)) 
                                            { 
                                                $rk_pendaftar++;
                                            }
                                            print $rk_pendaftar.',';
                                } ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   


 
        <script>
            var ctx = document.getElementById("rekapitulasi_chart").getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [

                        <?php for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                    {
                                        echo $rk.',';
                                    }
                        ?>
                        ],
                datasets: [{
                    label: 'Tahun',
                    data: [ 
                    <?php 
                                                    for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                                        {
                                                            print $rk;

                                                            // menghitung jumlah pendaftar
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_pendaftar=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_pendaftar++;
                                                                    }
                                                            print $rk_pendaftar.',';

                                                            // menghitung jumlah siswa ditolak
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'ditolak'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_ditolak=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_ditolak++;
                                                                    }
                                                            print $rk_ditolak.',';
                                                            
                                                            // menghitung jumlah siswa pindah
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'pindah'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_pindah=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_pindah++;
                                                                    }
                                                            print $rk_pindah.',';
                                                            
                                                            // menghitung jumlah siswa berhenti
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'berhenti'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_berhenti=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_berhenti++;
                                                                    }
                                                            print $rk_berhenti.',';
                                                            
                                                            // menghitung jumlah siswa dikeluarkan
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'dikeluarkan'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_dikeluarkan=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_dikeluarkan++;
                                                                    }
                                                            print $rk_dikeluarkan.',';
                                                            
                                                            // menghitung jumlah siswa diluluskan
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'diluluskan'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_diluluskan=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_diluluskan++;
                                                                    }
                                                            print $rk_diluluskan.',';
                                                            
                                                            // menghitung jumlah Pendaftar
                                                            //$jml_Pendaftar = $rk_ditolak + $rk_pindah + $rk_berhenti + $rk_dikeluarkan + $rk_diluluskan; 
                                                            //print $jml_Pendaftar.;


                                                        }
                                                ?>

                            
                          ],


                    backgroundColor: ['#4FC3F7', '#4DB6AC', '#AED581', '#FFF176', '#FFB74D', '#A1887F', '#e57373'],
                    borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255,99,132,1)'
                    ],
                    borderWidth: 1
                }]
                    },
                options: {
                    scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
</script>
   
   
   
</body>
</html>
