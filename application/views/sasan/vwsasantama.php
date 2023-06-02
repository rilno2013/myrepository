
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
                    <h2>Sasan Tama</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="javascript:;" onclick="location.reload()"><strong>/Sasan Tama</strong></a>
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
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target=".modal-add-stock"><i class="fa fa-plus"></i>Sasan Tama</button>
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
                                        <th>Qty</th>
                                        <th>Data</th>
                                        <th>Deskrisaun</th>
                                        <th>Fo Husi</th>
                                        <th>Simu Husi</th>
                                        <th>Aksaun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no=1;
                                        foreach($sasantama as $s){
                                            $id=$s['id'];
                                            $qty=$s['kuantidade'];
                                            $id_sasan=$s['id_sasan'];
                                            echo "<tr class=\"gradeX\">
                                                    <td>".$no."</td>
                                                    <td>".$id_sasan."</td>
                                                    <td>".$s['naran_sasan']."</td>
                                                    <td>".$s['kategoria']."</td>
                                                    <td>".$s['tipu_sasan']."</td>
                                                    <td>".$s['marka']."</td>
                                                    <td>".$qty."</td>
                                                    <td>".$s['data_tama']."</td>
                                                    <td>".$s['deskrisaun']."</td>
                                                    <td>".$s['fo_husi']."</td>
                                                    <td>".$s['simu_husi']."</td>
                                                    <td>

                                                    <button class=\"btn btn-info\" type=\"button\" onclick=\"fn_editsasan('$id')\"><i class=\"fa fa-edit\"></i> Edit</button>

                                                    <button class=\"btn btn-danger\" type=\"button\" onclick=\"fn_deleteconfirm('$id','$qty','$id_sasan')\"><i class=\"fa fa-trash\"></i> Delete</button>
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
                            <select type="text" class="form-control" id="kodigu" name="kodigu">
                                <option disabled selected>Favor hili ID Sasan/kodigu sasan</option>
                                <?php
                                    foreach($sasan as $st){
                                        echo "<option value='".$st['id_sasan']."'>".$st['naran_sasan']."-".$st['marka']."-".$st['tipu_sasan']."</option>";
                                    }
                                ?>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Quantidade:</label>
                            <input type="text" class="form-control" id="qty" name="qty">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Deskrisaun:</label>
                            <textarea type="text" class="form-control" id="deskrisaun" name="deskrisaun" rows="3" placeholder="Favor fo deskrisaun detailu"></textarea>
                        </div>
                        
                    </div>

                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Data Tama:</label>
                                <input type="date" class="form-control" id="data_tama" name="data_tama" value="<?php echo date('Y-m-d')?>">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Autor[Input Dadus]:</label>
                                <input type="text" class="form-control" id="autor" name="autor">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Fo Husi:</label>
                                <input type="text" class="form-control" id="fo_husi" name="fo_husi">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Simu Husi:</label>
                                <input type="text" class="form-control" id="simu_husi" name="simu_husi">
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
                            <input type="hidden" id="idedit" name="idedit">
                            <select type="text" class="form-control" id="kodiguedit" name="kodigu">
                                <option disabled selected>Favor hili ID Sasan/kodigu sasan</option>
                                <?php
                                    foreach($sasan as $st){
                                        echo "<option value='".$st['id_sasan']."'>".$st['naran_sasan']."-".$st['marka']."-".$st['tipu_sasan']."</option>";
                                    }
                                ?>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Quantidade:</label>
                            <input type="text" class="form-control" id="qtyedit" name="qty">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Deskrisaun:</label>
                            <textarea type="text" class="form-control" id="deskrisaunedit" name="deskrisaun" rows="3" placeholder="Favor fo deskrisaun detailu"></textarea>
                        </div>
                        
                    </div>

                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Data Tama:</label>
                                <input type="date" class="form-control" id="data_tamaedit" name="data_tama" value="<?php echo date('Y-m-d')?>">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Autor[Input Dadus]:</label>
                                <input type="text" class="form-control" id="autoredit" name="autor">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Fo Husi:</label>
                                <input type="text" class="form-control" id="fo_husiedit" name="fo_husi">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Simu Husi:</label>
                                <input type="text" class="form-control" id="simu_husiedit" name="simu_husi">
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
                        <input type="hidden" name="iddelete" id="iddelete">
                        <input type="hidden" name="qtydel" id="qtydel">
                        <input type="hidden" name="iddelsasan" id="iddelsasan">
                        <p>Ita sei hamoos dadus ho kodigu <span id="idkodigu"></span> ho nia kuantidade <span id="idqty"></span>?</p>
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
                if($("#deskrisaun").val()==""){alert("Favor prense deskrisaun sasan!"); $("#deskrisaun").focus(); return false; }
                if($("#data_tama").val()==""){alert("Favor prense data tama!"); $("#data_tama").focus(); return false; }
                if($("#qty").val()==""){alert("Favor prense quantidade sasan!"); $("#qty").focus(); return false; }
                if($("#autor").val()==""){alert("Favor prense autor input dadus!"); $("#autor").focus(); return false; }
                if($("#fo_husi").val()==""){alert("Favor prense naran oferesedor sasan!"); $("#fo_husi").focus(); return false; }
                if($("#simu_husi").val()==""){alert("Favor prense naran simu sasan!"); $("#simu_husi").focus(); return false; }

                $.ajax({

                    type  :"POST",
                    url   :"<?php echo base_url('sasan/fn_addsasan') ?>",
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
                    url   :"<?php echo base_url('sasan/fn_editsasan') ?>",
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

        function fn_editsasan(id){
            $.ajax({
                type:"POST",
                url:"<?= base_url('sasan/fn_getsasanbyid')?>",
                dataType:"json",
                data:{id:id},
                success:function(res){
                    $(".modal-edit-stock").modal("show");
                    $("#idedit").val(id);
                    $("#kodiguedit").val(res.id_sasan);
                    $("#deskrisaunedit").val(res.deskrisaun);
                    $("#qtyedit").val(res.kuantidade);
                    $("#data_tamaedit").val(res.data_tama);
                    $("#autoredit").val(res.autor);
                    $("#fo_husiedit").val(res.fo_husi);
                    $("#simu_husiedit").val(res.simu_husi);
                }
            });
        }

        function fn_deleteconfirm(id,qty,id_sasan){
            $('.modal-delete-stock').modal('show'); 
            $('#iddelete').val(id);
            $('#qtydel').val(qty);
            $('#idqty').html(qty);
            $('#iddelsasan').val(id_sasan);
            $('#idkodigu').html(id_sasan);
        }

        function fn_deletedata(){
            var id = $('#iddelete').val();
            var qty= $('#qtydel').val();
            var id_sasan= $('#iddelsasan').val();
            $.ajax({
                type : "POST",
                url : "<?= base_url('sasan/fn_delete')?>",
                dataType: "text",
                data:{id:id,qty:qty,id_sasan:id_sasan},
                success:function(res){
                    alert(res);
                    location.reload();
                }
            });
        }

    </script>

</body>

</html>
