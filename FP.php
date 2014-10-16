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
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#home" data-toggle="tab">File Share Mapped Drives</a>
								</li>
								<li><a href="#profile" data-toggle="tab">Network Printers</a>
								</li>
							</ul>
								
							<!-- Tab panes -->
                            <div class="tab-content">
								<div class="tab-pane fade in active" id="home">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
												<tr>
													<th>Drive Letter</th>
													<th>Share Name</th>
													<th>Security Group</th>
													<th>Notes</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>N</td>
													<td>Accounting</td>
													<td>SEC_SHARE_ACCOUNTING</td>
													<td>Accounting and HR Data</td>
												</tr>
												<tr class="odd gradeX">
													<td>M</td>
													<td>Engineering</td>
													<td>SEC_SHARE_ENGINEERING</td>
													<td>Engineering Data</td>
												</tr>
												<tr class="odd gradeX">
													<td>I</td>
													<td>InstallationFiles</td>
													<td>SEC_SHARE_FILES</td>
													<td>Installation Files</td>
												</tr>
												<tr class="odd gradeX">
													<td>X</td>
													<td>Archive</td>
													<td>SEC_SHARE_ARCHIVE</td>
													<td>Archive Files</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
								<div class="tab-pane fade" id="profile">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example1">
											<thead>
												<tr>
													<th>Printer Make/Model</th>
													<th>Printer AD Name</th>
													<th>Printer IP Address</th>
													<th>Physical Location and Notes</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>HP Color LaserJet 4700dn</td>
													<td>HP LaserJet 4700 Color, HP LaserJet 4700 BW</td>
													<td>172.16.2.202</td>
													<td>Accounting Office</td>
												</tr>
												<tr class="odd gradeX">
													<td>HP LaserJet 4200</td>
													<td>HP LaserJet 4200</td>
													<td>172.16.2.205</td>
													<td>Engineering</td>
												</tr>
												<tr class="odd gradeX">
													<td>Dell 2150cdn</td>
													<td>Dell 2150cdn</td>
													<td>172.16.1.205</td>
													<td>Reno Bullpen</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
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