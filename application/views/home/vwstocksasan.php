
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
                    <h2>Stock Sasan</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="javascript:;" onclick="location.reload()"><strong>/Stock Sasan</strong></a>
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
                        <!-- <h5>Dadus Stock Sasan</h5> -->
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".modal-add-stock"><i class="fa fa-plus"></i> Add Stock</button>
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
                                        <th>Tipu</th>
                                        <th>Marka</th>
                                        <th>Stock</th>
                                        <th>Data</th>
                                        <th>Unidade</th>
                                        <th>Aksaun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1;
                                        foreach($stock as $s){
                                            $id=$s['id_sasan'];

                                            echo "<tr class=\"gradeX\">
                                                    <td>".$no."</td>
                                                    <td>".$id."</td>
                                                    <td>".$s['naran_sasan']."</td>
                                                    <td>".$s['kategoria']."</td>
                                                    <td>".$s['tipu_sasan']."</td>
                                                    <td>".$s['marka']."</td>
                                                    <td>".$s['stok']."</td>
                                                    <td>".$s['tgl']."</td>
                                                    <td>".$s['unidade']."</td>
                                                    <td>

                                                    <button class=\"btn btn-info\" type=\"button\" onclick=\"fn_editsasan('$id')\"><i class=\"fa fa-edit\"></i> Edit</button>

                                                    <button class=\"btn btn-danger\" type=\"button\" onclick=\"fn_deleteconfirm('$id')\"><i class=\"fa fa-trash\"></i> Delete</button>
                                                    </td>
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

        <!-- Large modal -->

        <div class="modal fade modal-add-stock" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aumenta Sasan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="myaddform" method="POST">
              <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kodigu:</label>
                            <input type="text" class="form-control" id="kodigu" name="kodigu"> 
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Naran Sasan:</label>
                            <input type="text" class="form-control" id="naran_sasan" name="naran_sasan">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kategoria:</label>
                            <input type="text" class="form-control" id="kategoria" name="kategoria">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tipu Sasan:</label>
                            <input type="text" class="form-control" id="tipu_sasan" name="tipu_sasan">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Marka:</label>
                        <input type="text" class="form-control" id="marka" name="marka">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Stock:</label>
                        <input type="text" class="form-control" id="stock" name="stock" value="0" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Unidade:</label>
                        <input type="text" class="form-control" id="unidade" name="unidade">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Data:</label>
                        <input type="date" class="form-control" id="data_" name="data_">
                      </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Rai Dadus</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade modal-edit-stock" id="exampleModalx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Sasan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form id="myeditform" method="POST">
              <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kodigu:</label>
                            <input type="text" class="form-control" id="kodiguedit" name="kodigu" readonly> 
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Naran Sasan:</label>
                            <input type="text" class="form-control" id="naran_sasanedit" name="naran_sasan">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Kategoria:</label>
                            <input type="text" class="form-control" id="kategoriaedit" name="kategoria">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tipu Sasan:</label>
                            <input type="text" class="form-control" id="tipu_sasanedit" name="tipu_sasan">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Marka:</label>
                        <input type="text" class="form-control" id="markaedit" name="marka">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Stock:</label>
                        <input type="text" class="form-control" id="stockedit" name="stock" readonly>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Unidade:</label>
                        <input type="text" class="form-control" id="unidadeedit" name="unidade">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Data:</label>
                        <input type="date" class="form-control" id="data_edit" name="data_">
                      </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Dadus</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal inmodal fade modal-delete-stock" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: red; color: white;">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <p class="modal-title">Delete Sasan</p>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="iddelete" id="iddelete">
                        <p>Ita sei hamoos dadus ho kodigu <strong id="iddel"></strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Kansela</button>
                        <button type="button" onclick="fn_deletedata()" class="btn btn-primary">Sim, Hamos</button>
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
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            $("form#myaddform").submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
                if($("#kodigu").val()==""){alert("Favor prense kodigu sasan!");$("#kodigu").focus(); return false; }

                if($("#naran_sasan").val()==""){alert("Favor prense naran sasan!"); $("#naran_sasan").focus(); return false; }
                if($("#kategoria").val()==""){alert("Favor prense kategoria sasan!"); $("#kategoria").focus(); return false; }
                if($("#tipu_sasan").val()==""){alert("Favor prense tipu sasan!"); $("#tipu_sasan").focus(); return false; }
                if($("#marka").val()==""){alert("Favor prense marka sasan!"); $("#marka").focus(); return false; }
                if($("#stock").val()==""){alert("Favor prense stok sasan!"); $("#stock").focus(); return false; }
                if($("#unidade").val()==""){alert("Favor prense unidade sasan!"); $("#unidade").focus(); return false; }
                if($("#data_").val()==""){alert("Favor prense data!"); $("#data_").focus(); return false; }

                $.ajax({

                    type  :"POST",
                    url   :"<?php echo base_url('home/fn_addstocksasan') ?>",
                    data  : formData,
                    cache : false,
                    processData:false,
                    contentType:false,
                    success:function(result){
                        $('.modal-add-stock').modal('hide');
                        alert(result);
                        location.reload();
                    }
                });
            });

            $("form#myeditform").submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({

                    type  :"POST",
                    url   :"<?php echo base_url('home/fn_editstocksasan') ?>",
                    data  : formData,
                    cache : false,
                    processData:false,
                    contentType:false,
                    success:function(result){
                        $('.modal-edit-stock').modal('hide');
                        alert(result);
                        location.reload();
                    }
                });
            });

            
        });

        function fn_editsasan(id_sasan){
            //alert(id_sasan); return false;
            $.ajax({
                type:"POST",
                url:"<?= base_url('home/fn_getstockbyid')?>",
                dataType:"json",
                data:{id_sasan:id_sasan},
                success:function(res){
                    $(".modal-edit-stock").modal("show");
                    $("#kodiguedit").val(res.id_sasan);
                    $("#naran_sasanedit").val(res.naran_sasan);
                    $("#kategoriaedit").val(res.kategoria);
                    $("#tipu_sasanedit").val(res.tipu_sasan);
                    $("#markaedit").val(res.marka);
                    $("#stockedit").val(res.stok);
                    $("#unidadeedit").val(res.unidade);
                    $("#data_edit").val(res.tgl);
                }
            });
        }

        function fn_deleteconfirm(id_sasan){
            $('.modal-delete-stock').modal('show'); 
            $('#iddelete').val(id_sasan);
            $('#iddel').html(id_sasan);
        }

        function fn_deletedata(){
            var id_sasan = $('#iddelete').val();
            $.ajax({
                type : "POST",
                url : "<?= base_url('home/fn_delete')?>",
                dataType: "text",
                data:{id_sasan:id_sasan},
                success:function(res){
                    alert(res);
                    location.reload();
                }
            });
        }

    </script>

</body>

</html>
