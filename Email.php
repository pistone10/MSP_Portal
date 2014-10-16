<?php
require ('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">File Shares and Printers</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
							<form role="form">
								<div style="float:left;margin-right:60px" class="form-group">
									<label>Type</label>
									<p class="form-control-static">Exchange 2013</p>
									<label>Accepted Domains</label>
									<p class="form-control-static">leverageitc.com</p>
									<p class="form-control-static">cmitsacreno.com</p>
									<p class="form-control-static">cmitsolutions.com</p>
								</div>
								<div class="form-group">
									<label>Server Name</label>
									<p class="form-control-static">SVR-LITC-EX1</p>
									<label>Exchange OWA or Webmail URL</label>
									<p class="form-control-static">https://mail.leverageitc.com</p>
								</div>
								<div style="float:left;margin-right:60px" class="form-group">
									<label>Exchange LAN IP</label>
									<p class="form-control-static">172.16.2.3</p>
									<label>Exchange WAN IP</label>
									<p class="form-control-static">50.245.191.195</p>
								</div>
								<div class="form-group">
									<label>Anti-Spam</label>
									<p class="form-control-static">Reflexion</p>
									<label>Domain DNS MX Record Settings</label>
									<p class="form-control-static">asp.reflexion.net</p>
									<p class="form-control-static">mx-100.reflexion.net</p>
									<p class="form-control-static">mx-110.reflexion.net</p>
								</div>
							</form>
						</div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php
require ('footer.php');
?>