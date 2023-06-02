
<!DOCTYPE html>
<html>

<?php $this->load->view('vwheader')?>

<body>

    <div id="wrapper">

    <?php $this->load->view('vwsidebar')?>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <?php $this->load->view('vwnavbar')?>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Relatoriu Sasan</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="javascript:;" onclick="location.reload()"><strong>/sasan</strong></a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
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
                                                <a href="<?php echo base_url('relatoriu/fn_printpdf');?>" target="_blank" class="btn-secondary">print</a>
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
                                <tbody id="mydata">
                                    <?php
                                        $no=1;
                                        foreach($sasan as $s){
                                            $t_tama=$s['sasan_tama'];
                                            $t_sai=$s['sasan_sai'];
                                            $saldo=$t_tama-$t_sai;
                                            echo "<tr class=\"gradeX\">
                                                    <td>".$no."</td>
                                                    <td>".$s['kodigu']."</td>
                                                    <td>".$s['naran']."</td>
                                                    <td>".$s['kategoria']."</td>
                                                    <td>".$s['tipu']."</td>
                                                    <td>".$s['marka']."</td>
                                                    <td>".$s['unidade']."</td>
                                                    <td>".$t_tama."</td>
                                                    <td>".$t_sai."</td>
                                                    <td>".$saldo."</td>
                                                    <td>".$this->session->userdata('period')."</td>
                                                </tr>";

                                                $no++;
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="<?= base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url()?>assets/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url()?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?= base_url()?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?= base_url()?>assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= base_url()?>assets/js/inspinia.js"></script>
    <script src="<?= base_url()?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: []

            });   
        });

        function fn_filter(){
            var tinan = $('#tinan').val();
            var fulan = $('#fulan').val();
            if(tinan==null){tinan=0;}
            if(fulan==null){fulan=0;}
            $.ajax({
                type : "POST",
                url : "<?= base_url('relatoriu/fn_getfilter')?>",
                dataType: "text",
                data:{tinan:tinan,fulan:fulan},
                success:function(res){
                    $("#mydata").html(res);
                }
            });
        }

    </script>

</body>

</html>
