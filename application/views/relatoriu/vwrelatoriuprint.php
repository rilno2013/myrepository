
<!DOCTYPE html>
<html>

<?php $this->load->view('vwheader')?>

<body>

  <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <div class="row">
                            <div class="col-lg-12">
                                <table>
                                    <tr>
                                        <td width="200px">
                                            <div class="form-group">
                                                <select type="text" id="tinan" name="tinan" class="form-control">
                                                    <option disabled selected>Hili tinan</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td width="200px">
                                            <div class="form-group">
                                                <select type="text" id="fulan" name="fulan" class="form-control">
                                                    <option disabled selected>Hili Fulan</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td width="20px">
                                            <div class="form-group">
                                                <button type="button" class="btn-primary" onclick="fn_filter()" name="filter">Filter</button>
                                            </div>
                                        </td>
                                        <td width="200px">
                                            <div class="form-group">
                                                <button type="button" class="btn-secondary" onclick="fn_pdf()" name="print">print</button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kodigu</th>
                                        <th>Naran Sasan</th>
                                        <th>Kategoria</th>
                                        <th>Marka</th>
                                        <th>Tipu</th>
                                        <th>Unidade</th>
                                        <th>Sasan Tama</th>
                                        <th>Sasan Sai</th>
                                        <th>Saldo</th>
                                        <th>Periodu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        

                                        //print_r($sasan);
                                        // $no=1;
                                        // foreach($sasan as $s){
                                        //     $t_tama=$s['sasan_tama'];
                                        //     $t_sai=$s['sasan_sai'];
                                        //     $saldo=$t_tama-$t_sai;
                                        //     echo "<tr class=\"gradeX\">
                                        //             <td>".$no."</td>
                                        //             <td>".$s['kodigu']."</td>
                                        //             <td>".$s['naran']."</td>
                                        //             <td>".$s['kategoria']."</td>
                                        //             <td>".$s['tipu']."</td>
                                        //             <td>".$s['marka']."</td>
                                        //             <td>".$s['unidade']."</td>
                                        //             <td>".$t_tama."</td>
                                        //             <td>".$t_sai."</td>
                                        //             <td>".$saldo."</td>
                                        //             <td>".$this->session->userdata('period')."</td>
                                        //         </tr>";

                                        //         $no++;
                                        // }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

</body>

</html>
