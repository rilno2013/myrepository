<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Print Relatorio</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<table width="100%">
		<tr>
			<td style="text-align: center; vertical-align: middle;"><img src="assets/img/dadirah.png" width="75" height="75"></td>
	    </tr>
	    <tr>
	    	<td style="text-align: center; vertical-align: middle;">
	    		<h1>CREDIT UNION – DALAN DIAK RAI HAMUTUK</h1><br>
	    		<h3>Relatorio [<?php echo $this->session->userdata('period')?>]</h3>
	    	</td>
	    </tr>
	</table>
    <hr>
	<div id="body">

        <div class="table-responsive">
            <table width="100%" style="font-size: 10px;" class="table table-striped table-bordered table-hover" >
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
                    </tr>
                </thead>
                <tbody>
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
                                </tr>";

                                $no++;
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
	</div>
</div>

</body>
</html>
