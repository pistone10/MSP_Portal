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
									<label>Server Name</label>
									<p class="form-control-static">SVR-LITC-EX1</p>
								</div>
								<div style="float:left;margin-right:60px" class="form-group">
									<label>Exchange OWA or Webmail URL</label>
									<p class="form-control-static">https://mail.leverageitc.com</p>
									<label>Outlook Anywhere Address</label>
									<p class="form-control-static">mail.leverageitc.com</p>
								</div>
								<div style="float:left;margin-right:60px" class="form-group">
									<label>Exchange WAN IP</label>
									<p class="form-control-static">50.245.191.195</p>
									<label>Exchange LAN IP</label>
									<p class="form-control-static">172.16.2.3</p>
								</div>
								<div style="float:left;margin-right:60px" class="form-group">
									<label>Anti-Spam</label>
									<p class="form-control-static">Reflexion</p>
									<label>SMTP Smart Host</label>
									<p class="form-control-static">172.16.2.3</p>
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
			<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label>Accepted Domains</label>
									<p class="form-control-static">leverageitc.com</p>
									<p class="form-control-static">cmitsacreno.com</p>
									<p class="form-control-static">cmitsolutions.com</p>
								</div>
							</form>
						</div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
							<form role="form">
								<div class="form-group">
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
                <!-- /.col-lg-6 -->
            </div>
			<!-- /.row -->
<?php
require ('footer.php');
?>