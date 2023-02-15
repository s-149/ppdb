<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Rekapitulasi PPDB
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Tahun Akademik</th>
                                                <th>Pendaftar</th>
                                                <th>Ditolak</th>
                                                <th>Pindah</th>
                                                <th>Berhenti</th>
                                                <th>Drop Out</th>
                                                <th>Diluluskan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php 
                                                    for ($rk=$Tahun_berdiri_institusi; $rk <$Tahun_Angkatan+1; $rk++) 
                                                        {
                                                            print'<tr>';
                                                            print'<td>'.$rk.'</td>';

                                                            // menghitung jumlah pendaftar
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_pendaftar=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_pendaftar++;
                                                                    }
                                                            print'<td>'.$rk_pendaftar.'</td>';

                                                            // menghitung jumlah siswa ditolak
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'ditolak'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_ditolak=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_ditolak++;
                                                                    }
                                                            print'<td>'.$rk_ditolak.'</td>';
                                                            
                                                            // menghitung jumlah siswa pindah
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'pindah'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_pindah=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_pindah++;
                                                                    }
                                                            print'<td>'.$rk_pindah.'</td>';
                                                            
                                                            // menghitung jumlah siswa berhenti
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'berhenti'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_berhenti=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_berhenti++;
                                                                    }
                                                            print'<td>'.$rk_berhenti.'</td>';
                                                            
                                                            // menghitung jumlah siswa dikeluarkan
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'dikeluarkan'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_dikeluarkan=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_dikeluarkan++;
                                                                    }
                                                            print'<td>'.$rk_dikeluarkan.'</td>';
                                                            
                                                            // menghitung jumlah siswa diluluskan
                                                            $sql="select * from `siswa`  WHERE `TA` = '$rk'  and `Status_Siswa` = 'diluluskan'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_diluluskan=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_diluluskan++;
                                                                    }
                                                            print'<td>'.$rk_diluluskan.'</td>';
                                                            
                                                            // menghitung jumlah Pendaftar
                                                            //$jml_Pendaftar = $rk_ditolak + $rk_pindah + $rk_berhenti + $rk_dikeluarkan + $rk_diluluskan; 
                                                            //print'<td>'.$jml_Pendaftar.'</td>';

                                                            print'</tr>';

                                                        }
                                                ?>

                                                <?php 
                                                            print'<tr>';
                                                            print'<td>Subtotal : </td>';
                                                            
                                                            // menghitung jumlah Pendaftar
                                                            print'<td>'.$jml_siswa.'</td>';

                                                            // menghitung jumlah siswa ditolak
                                                            $sql="select * from `siswa`  WHERE    `Status_Siswa` = 'ditolak'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_ditolak=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_ditolak++;
                                                                    }
                                                            print'<td>'.$rk_ditolak.'</td>';
                                                            
                                                            // menghitung jumlah siswa pindah
                                                            $sql="select * from `siswa`  WHERE    `Status_Siswa` = 'pindah'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_pindah=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_pindah++;
                                                                    }
                                                            print'<td>'.$rk_pindah.'</td>';
                                                            
                                                            // menghitung jumlah siswa berhenti
                                                            $sql="select * from `siswa`  WHERE    `Status_Siswa` = 'berhenti'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_berhenti=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_berhenti++;
                                                                    }
                                                            print'<td>'.$rk_berhenti.'</td>';
                                                            
                                                            // menghitung jumlah siswa dikeluarkan
                                                            $sql="select * from `siswa`  WHERE    `Status_Siswa` = 'dikeluarkan'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_dikeluarkan=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_dikeluarkan++;
                                                                    }
                                                            print'<td>'.$rk_dikeluarkan.'</td>';
                                                            
                                                            // menghitung jumlah siswa diluluskan
                                                            $sql="select * from `siswa`  WHERE   `Status_Siswa` = 'diluluskan'";
                                                            $query=mysqli_query($koneksi,$sql);
                                                            $rk_diluluskan=0;
                                                                while($data=mysqli_fetch_array($query)) 
                                                                    { 
                                                                        $rk_diluluskan++;
                                                                    }
                                                            print'<td>'.$rk_diluluskan.'</td>';
                                                            
                                                            // menghitung jumlah Pendaftar
                                                            // $jml_Pendaftar = $rk_ditolak + $rk_pindah + $rk_berhenti + $rk_dikeluarkan + $rk_diluluskan; 
                                                            //print'<td>'.$jml_siswa.'</td>';

                                                            print'</tr>';

                                                        
                                                ?>

                                        </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                          