<?php
require ('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Active Directory Domain</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							AD Domain
						</div>
						<!-- /.header -->
						<div class="panel-body">
						
						</div>
						<!--/.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
                <!-- /.col-lg-6 -->
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Domain Controllers
						</div>
						<!-- /.header -->
						<div class="panel-body">
						
						</div>
						<!--/.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
                <!-- /.col-lg-6 -->
			</div>
			<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li class="active"><a href="#home" data-toggle="tab">Security Groups</a>
								</li>
								<li><a href="#profile" data-toggle="tab">Distribution Groups</a>
								</li>
							</ul>
								
							<!-- Tab panes -->
                            <div class="tab-content">
								<div class="tab-pane fade in active" id="home">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>SEC_SHARE_ACOUNTING</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>SEC_SHARE_ENGINEERING</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>SEC_SHARE_ARCHIVE</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>SEC_SHARE_INSTALATION_FILES</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>SEC_SHARE_COMMON</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
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
													<th>Name</th>
													<th>Description</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX">
													<td>DIS_ACOUNTING</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>DIS_ENGINEERING</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>DIS_ARCHIVE</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>DIS_INSTALATION_FILES</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
												</tr>
												<tr class="odd gradeX">
													<td>DIS_COMMON</td>
													<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
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