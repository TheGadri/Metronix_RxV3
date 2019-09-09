<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
		<div class="kt-portlet__head-group mr-3">
				<a data-toggle="collapse" href="#collapseDetail" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-default btn-pill btn-icon-md"
					><i class="la la-angle-down"></i></a>
			</div>
			<h3 class="kt-portlet__head-title">
				VIEW MEMBER: MN234MNNs
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="btn-group">
				<button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
					Refresh</button>
				<button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
					style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
					<a class="dropdown-item" onclick="getstep('editMember')" href="javascript:;"><i
							class="flaticon-edit-1"></i> Edit Member Info</a>
					<a class="dropdown-item" href="#"><i class="flaticon-network"></i> Sync Member Info</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" data-toggle="modal" data-target="#generateClaim" href="javascript:;"><i
							class="kt-nav__link-icon flaticon2-file"></i> Generate Claim</a>
					<a data-toggle="modal" data-target="#comment_attachment" class="dropdown-item" href="#"><i
							class="kt-nav__link-icon flaticon2-menu-2"></i> Comments And
						Attachment</a>
					<a data-toggle="modal" data-target="#member_activities" class="dropdown-item" href="#"><i
							class="kt-nav__link-icon flaticon2-menu-2"></i> Member
						Activities</a>
					<a data-toggle="modal" data-target="#email_correspondence" class="dropdown-item" href="#"><i
							class="kt-nav__link-icon flaticon2-menu-2"></i> Email
						Correspondence</a>
					<a data-toggle="modal" data-target="#task_activities" class="dropdown-item" href="#"><i
							class="kt-nav__link-icon flaticon2-menu-2"></i> Task
						Activities</a>
					<a data-toggle="modal" data-target="#log_activities" class="dropdown-item" href="#"><i
							class="kt-nav__link-icon flaticon2-menu-2"></i> Log
						Activities</a>
				</div>
			</div>
		</div>
	</div>
	<div class="collapse" id="collapseDetail" >
		<div class="row mt-5 mb-3">
			<div class="col-md-2 text-center">
				<img src="http://localhost:80/rxv3/assets/media/users/100_2.jpg" alt="" class="img-thumbnail">
			</div>
			<div class="col-md-10">
				<div class="row">
					<div class="col">
						<h6 class="font-weight-light text-blue"><i class="flaticon-user"></i> Membership Information
						</h6>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label class="col-md-4 col-form-label font-weight-bold">Has Member ID : </label>
							<label class="col-md-8 col-form-label" id="hasMemberId"> Has Member ID
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="employeeNumber" class="col-md-4 col-form-label font-weight-bold">Employee Number
								<span class="text-danger">*</span> :</label>
							<label class="col-md-8 col-form-label" id="employerNumber">Employee Number
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="surname" class="col-md-4 col-form-label font-weight-bold">Surname <span
									class="text-danger">*</span>
								:</label>
							<label class="col-md-8 col-form-label" id="surname">Surname</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="firstname" class="col-md-4 col-form-label font-weight-bold">Firstname <span
									class="text-danger">*</span> :</label>
							<label class="col-md-8 col-form-label" id="firstname">Firstname</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="othername" class="col-md-4 col-form-label font-weight-bold">Othername :</label>
							<label class="col-md-8 col-form-label" id="othername">Othername
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="nationaliaty" class="col-md-4 col-form-label font-weight-bold">Nationality :
							</label>
							<label class="col-md-8 col-form-label" id="nationality">Nationality
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="dateOfBirth" class="col-md-4 col-form-label font-weight-bold">Date of Birth :
								<span class="text-danger">*</span></label>
							<label class="col-md-8 col-form-label" id="dateOfBirth">Date of Birth
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="gender" class="col-md-4 col-form-label font-weight-bold">Gender : <span
									class="text-danger">*</span></label>
							<label class="col-md-8 col-form-label" id="gender">Gender
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="telephone" class="col-md-4 col-form-label font-weight-bold">Telephone : </label>
							<label class="col-md-8 col-form-label" id="telephone">Telephone
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="gender" class="col-md-4 col-form-label font-weight-bold">Email : </label>
							<label class="col-md-8 col-form-label" id="email">Email
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="employer" class="col-4 col-form-label font-weight-bold">Employer : <span
									class="text-danger">*</span></label>
							<label class="col-md-8 col-form-label" id="employer">Email
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="healthPlan" class="col-md-4 col-form-label font-weight-bold">Health Plan : <span
									class="text-danger">*</span></label>
							<label class="col-md-8 col-form-label" id="healthPlan">Health Plan
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="joinDate" class="col-md-4 col-form-label font-weight-bold">Join Date : </label>
							<label class="col-md-8 col-form-label" id="joinDate">Join Date
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="cancellationDate" class="col-md-4 col-form-label font-weight-bold">Cancellation
								Date : </label>
							<label class="col-md-8 col-form-label" id="cancellationDate">Cancellation
								Date
							</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="joinDate" class="col-md-4 col-form-label font-weight-bold">Relationship : <span
									class="text-danger">*</span></label>
							<label class="col-md-8 col-form-label" id="relationship">Relationship
							</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-2 row">
							<label for="status" class="col-md-4 col-form-label font-weight-bold">Status : </label>
							<label class="col-md-8 col-form-label" id="status">Status
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- MEMBER DETAILS -->
<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				MEMBER DETAILS
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-outline-success btn-sm" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					Menu Action
					<i class="flaticon2-down-arrow"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
					style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 39px, 0px);">
					<ul class="kt-nav">
						<li class="kt-nav__item">
							<a data-toggle="modal" data-target="#email_correspondence" href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-menu-2"></i>
								<span class="kt-nav__link-text">Email Correspondence</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a data-toggle="modal" data-target="#task_activities" href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-menu-2"></i>
								<span class="kt-nav__link-text">Task Activities</span>
							</a>
						</li>
						<li class="kt-nav__item">
							<a data-toggle="modal" data-target="#log_activities" href="#" class="kt-nav__link">
								<i class="kt-nav__link-icon flaticon2-menu-2"></i>
								<span class="kt-nav__link-text">Log Activity</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#memberBenefits">Member Benefits And Exclusions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#memberUtilisation">Member of Utilisation</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#principal">Principal/Dependant</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#authorization">Authorisation</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#memberClaim">Member Claims</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#caseManagement">Case Management</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#bankDetail">Bank Details</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane" id="memberBenefits" role="tabpanel">
				<div class="kt-portlet__body kt-portlet__body--fit">
					<!--begin: Datatable -->
					<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">
						<table class="table table-hover">
							<thead class="kt-datatable__head table-warning">
								<tr class="kt-datatable__row" style="left: 0px;">
									<th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>#</span></th>
									<th data-field="benefit_add_new_member"
										class="kt-datatable__cell kt-datatable__cell--sort"><span>Benefit Add New
											Member</span></th>
									<th data-field="annual_limit" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Annual Limits and Exclusions Add New Member</span>
									</th>
								</tr>
							</thead>
							<tbody class="kt-datatable__body">
								<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
									<th scope="row" data-field="id" class="kt-datatable__cell"><span>1</span>
									</th>
									<td data-field="benefit_add_new_member" class="kt-datatable__cell"><span>John
											Kle</span>
									</td>
									<td data-field="annual_limit" class="kt-datatable__cell"><span>Ghs 300</span>
									</td>
								</tr>
								<tr data-row="1" class="kt-datatable__row" style="left: 0px;">
									<th scope="row" data-field="id" class="kt-datatable__cell"><span>2</span>
									</th>
									<td data-field="benefit_add_new_member" class="kt-datatable__cell"><span>John
											Kle</span>
									</td>
									<td data-field="annual_limit" class="kt-datatable__cell"><span>Ghs 300</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="kt-datatable__pager kt-datatable--paging-loaded">
							<ul class="kt-datatable__pager-nav">
								<li><a title="First"
										class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
										data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
								<li><a title="Previous"
										class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
										data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
								<li style=""></li>
								<li style="display: none;"><input type="text" class="kt-pager-input form-control"
										title="Page number"></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active"
										data-page="1" title="1">1</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2"
										title="2">2</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3"
										title="3">3</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4"
										title="4">4</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5"
										title="5">5</a></li>
								<li></li>
								<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next"
										data-page="2"><i class="flaticon2-next"></i></a></li>
								<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last"
										data-page="10"><i class="flaticon2-fast-next"></i></a></li>
							</ul>
							<div class="kt-datatable__pager-info">
								<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
									<select class="selectpicker kt-datatable__pager-size" title="Select page size"
										data-width="60px" data-selected="10" tabindex="-98">
										<option class="bs-title-option" value=""></option>
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select><button type="button" class="btn dropdown-toggle btn-light"
										data-toggle="dropdown" role="button" title="Select page size">
										<div class="filter-option">
											<div class="filter-option-inner">
												<div class="filter-option-inner-inner">10</div>
											</div>
										</div>
									</button>
									<div class="dropdown-menu " role="combobox">
										<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
											<ul class="dropdown-menu inner show"></ul>
										</div>
									</div>
								</div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
							</div>
						</div>
					</div>
					<!--end: Datatable -->
				</div>
			</div>
			<div class="tab-pane active" id="memberUtilisation" role="tabpanel">
				<div class="kt-section">
					<div class="kt-section__content">
						<div class="row">
							<div class="col-md-7">
								<div class="kt-portlet">
									<div class="kt-portlet__body">
										<table class="table">
											<colgroup>
												<col>
												<col span="2" class="table-danger">
												<col span="2" class="table-success">
												<col span="2" class="table-primary">
											</colgroup>
											<thead class="">
												<tr>
													<th></th>
													<th colspan="2">Member Bookings</th>
													<th colspan="2">Member Utilisation</th>
													<th colspan="2">Member Balance</th>
												</tr>
												<tr>
													<th></th>
													<th>USD</th>
													<th>AOA</th>
													<th>USD</th>
													<th>AOA</th>
													<th>USD</th>
													<th>AOA</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">In-Patient</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Out-Patient</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Maternity</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Drug</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Optical</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Dental</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Hearing</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Psychology</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
												<tr>
													<th scope="row">Physiotherapy</th>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
													<td>Jhon</td>
													<td>Stone</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<form action="">
									<div class="kt-portlet">
										<div class="kt-portlet__body">
											<div class="mt-2 row">
												<label for="inPatientUtilisation"
													class="col-md-4 col-form-label">In-Patient
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control"
														name="inPatientUtilisation" id="inPatientUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="outPatientUtilisation"
													class="col-md-4 col-form-label">Out-Patient
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control"
														name="outPatientUtilisation" id="outatientUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="laboratoryUtilisation"
													class="col-md-4 col-form-label">Laboratory
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control"
														name="laboratoryUtilisation" id="laboratoryUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="drugUtilisation" class="col-md-4 col-form-label">Drug
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control" name="drugUtilisation"
														id="drugUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="radiologyUtilisation"
													class="col-md-4 col-form-label">Radiology
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control"
														name="radiologyUtilisation" id="radiologyUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="opticalUtilisation" class="col-md-4 col-form-label">Optical
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control" name="opticalUtilisation"
														id="opticalUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="dentalUtilisation" class="col-md-4 col-form-label">Dental
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control" name="dentalUtilisation"
														id="dentalUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="entUtilisation" class="col-md-4 col-form-label">ENT
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control" name="entUtilisation"
														id="entUtilisation">
												</div>
											</div>
											<div class="mt-2 row">
												<label for="maternityUtilisation"
													class="col-md-4 col-form-label">Maternity
													Utilisation</label>
												<div class="col-md-8">
													<input type="number" class="form-control"
														name="maternityUtilisation" id="maternityUtilisation">
												</div>
											</div>
										</div>
										<div class="kt-portlet__foot p-2">
											<div class="row justify-content-center mt-2">
												<div class="col kt-align-right">
													<button class="btn btn-success"> Update Utilisation</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="principal" role="tabpanel">
				<div class="kt-container kt-container--fluid">
					<div class="row">
						<div class="col mb-4">
							<div class="btn-group float-right">
								<button type="button" class="btn btn-outline-success dropdown-toggle btn-sm"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Action
								</button>
								<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
									style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
									<a onclick="get_content('add_dependent')" class="dropdown-item"
										href="javascript:;"><i class="flaticon-user"></i> Add New Dependent</a>
									<a onclick="get_content('view_dependent')" class="dropdown-item"
										href="javascript:;"><i class="kt-nav__link-icon flaticon2-menu-2"></i> View
										Dependent</a>
									<a data-toggle="modal" data-target="#link_dependent" class="dropdown-item"
										href="javascript:;"><i class="kt-nav__link-icon flaticon2-menu-2"></i> Link
										Dependent</a>
									<a data-toggle="modal" data-target="#swap_principal" class="dropdown-item"
										href="javascript:;"><i class="kt-nav__link-icon flaticon2-menu-2"></i> Swap
										Principals</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="default">
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-3">
								<!--Begin::Portlet-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head kt-portlet__head--noborder px-2">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-icon" data-toggle="dropdown">
												<i class="flaticon-more-1 kt-font-brand"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="kt-nav">
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-line-chart"></i>
															<span class="kt-nav__link-text">Edit Member Info</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="kt-portlet__body">
										<!--begin::Widget -->
										<div class="kt-widget kt-widget--user-profile-2">
											<div class="row justify-content-center">
												<div class="col-6">
													<div class="kt-widget__head">
														<div class="kt-widget__media">
															<img class="kt-widget__img kt-hidden-"
																src="http://localhost:80/rxv3/assets/media/users/100_2.jpg"
																alt="image">
															<div
																class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
																ChS
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="kt-widget__body">
												<div class="kt-widget__section">
													<div class="row">
														<div class="col text-center">
															<h5 class="kt-widget__username">James Doe</h5>
														</div>
													</div>
												</div>

												<div class="kt-widget__item">
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Relationship Type:</span>
														<a href="#" class="kt-widget__data">Self</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Health Plan:</span>
														<a href="#" class="kt-widget__data">Full Member Bronze</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Status:</span>
														<span class="kt-widget__data">Active</span>
													</div>
												</div>
											</div>
											<div class="kt-widget__footer">
												<button type="button"
													class="btn btn-label-success btn-lg btn-upper">View
													Member Details</button>
											</div>
										</div>

										<!--end::Widget -->
									</div>
								</div>
								<!--End::Portlet-->
							</div>
							<div class="col-xl-3">
								<!--Begin::Portlet-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head kt-portlet__head--noborder px-2">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-icon" data-toggle="dropdown">
												<i class="flaticon-more-1 kt-font-brand"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="kt-nav">
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-line-chart"></i>
															<span class="kt-nav__link-text">Edit Member Info</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="kt-portlet__body">
										<!--begin::Widget -->
										<div class="kt-widget kt-widget--user-profile-2">
											<div class="row justify-content-center">
												<div class="col-6">
													<div class="kt-widget__head">
														<div class="kt-widget__media">
															<img class="kt-widget__img kt-hidden-"
																src="http://localhost:80/rxv3/assets/media/users/100_2.jpg"
																alt="image">
															<div
																class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
																ChS
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="kt-widget__body">
												<div class="kt-widget__section">
													<div class="row">
														<div class="col text-center">
															<h5 class="kt-widget__username">James Doe</h5>
														</div>
													</div>
												</div>

												<div class="kt-widget__item">
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Relationship Type:</span>
														<a href="#" class="kt-widget__data">Self</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Health Plan:</span>
														<a href="#" class="kt-widget__data">Full Member Bronze</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Status:</span>
														<span class="kt-widget__data">Active</span>
													</div>
												</div>
											</div>
											<div class="kt-widget__footer">
												<button type="button"
													class="btn btn-label-success btn-lg btn-upper">View
													Member Details</button>
											</div>
										</div>

										<!--end::Widget -->
									</div>
								</div>
								<!--End::Portlet-->
							</div>
							<div class="col-xl-3">
								<!--Begin::Portlet-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head kt-portlet__head--noborder px-2">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-icon" data-toggle="dropdown">
												<i class="flaticon-more-1 kt-font-brand"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="kt-nav">
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-line-chart"></i>
															<span class="kt-nav__link-text">Edit Member Info</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="kt-portlet__body">
										<!--begin::Widget -->
										<div class="kt-widget kt-widget--user-profile-2">
											<div class="row justify-content-center">
												<div class="col-6">
													<div class="kt-widget__head">
														<div class="kt-widget__media">
															<img class="kt-widget__img kt-hidden-"
																src="http://localhost:80/rxv3/assets/media/users/100_2.jpg"
																alt="image">
															<div
																class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
																ChS
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="kt-widget__body">
												<div class="kt-widget__section">
													<div class="row">
														<div class="col text-center">
															<h5 class="kt-widget__username">James Doe</h5>
														</div>
													</div>
												</div>

												<div class="kt-widget__item">
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Relationship Type:</span>
														<a href="#" class="kt-widget__data">Self</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Health Plan:</span>
														<a href="#" class="kt-widget__data">Full Member Bronze</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Status:</span>
														<span class="kt-widget__data">Active</span>
													</div>
												</div>
											</div>
											<div class="kt-widget__footer">
												<button type="button"
													class="btn btn-label-success btn-lg btn-upper">View
													Member Details</button>
											</div>
										</div>

										<!--end::Widget -->
									</div>
								</div>
								<!--End::Portlet-->
							</div>
							<div class="col-xl-3">
								<!--Begin::Portlet-->
								<div class="kt-portlet kt-portlet--height-fluid">
									<div class="kt-portlet__head kt-portlet__head--noborder px-2">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
											</h3>
										</div>
										<div class="kt-portlet__head-toolbar">
											<a href="#" class="btn btn-icon" data-toggle="dropdown">
												<i class="flaticon-more-1 kt-font-brand"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<ul class="kt-nav">
													<li class="kt-nav__item">
														<a href="#" class="kt-nav__link">
															<i class="kt-nav__link-icon flaticon2-line-chart"></i>
															<span class="kt-nav__link-text">Edit Member Info</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="kt-portlet__body">
										<!--begin::Widget -->
										<div class="kt-widget kt-widget--user-profile-2">
											<div class="row justify-content-center">
												<div class="col-6">
													<div class="kt-widget__head">
														<div class="kt-widget__media">
															<img class="kt-widget__img kt-hidden-"
																src="http://localhost:80/rxv3/assets/media/users/100_2.jpg"
																alt="image">
															<div
																class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
																ChS
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="kt-widget__body">
												<div class="kt-widget__section">
													<div class="row">
														<div class="col text-center">
															<h5 class="kt-widget__username">James Doe</h5>
														</div>
													</div>
												</div>

												<div class="kt-widget__item">
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Relationship Type:</span>
														<a href="#" class="kt-widget__data">Self</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Health Plan:</span>
														<a href="#" class="kt-widget__data">Full Member Bronze</a>
													</div>
													<div class="kt-widget__contact">
														<span class="kt-widget__label">Status:</span>
														<span class="kt-widget__data">Active</span>
													</div>
												</div>
											</div>
											<div class="kt-widget__footer">
												<button type="button"
													class="btn btn-label-success btn-lg btn-upper">View
													Member Details</button>
											</div>
										</div>

										<!--end::Widget -->
									</div>
								</div>
								<!--End::Portlet-->
							</div>
						</div>
					</div>
				</div>
				<div id="add_dependent" class="d-none">
					<form action="" method="">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title" id="adding_user">
										Add New Dependent
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body" style="height:500px; overflow-y: auto;">
								<div class="row">
									<div class="col-md-2 text-center">
										<img src="http://localhost:80/rxv3/assets/media/users/100_2.jpg" alt=""
											class="img-thumbnail">
										<div class="row justify-content-center mt-3">
											<button type="button" class="btn btn-success btn-elevate btn-sm">
												Upload Image
											</button>
										</div>
									</div>
									<div class="col-md-10">
										<div class="row mt-3">
											<div class="col-md-6">
												<div class="row">
													<label for="hasMemberID" class="col-4 col-form-label">Has Member
														ID</label>
													<div class="col-8">
														<input class="form-control" type="text" id="hasMemberID"
															name="hasMemberID" disabled>
													</div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="employeeNumber" class="col-4 col-form-label">Employee
														Number <span class="text-danger">*</span></label>
													<div class="col-8">
														<input class="form-control" type="text" name="employeeNumber"
															id="employeeNumber">
													</div>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="surname" class="col-4 col-form-label">Surname <span
															class="text-danger">*</span></label>
													<div class="col-8">
														<input class="form-control" type="text" id="surname"
															name="surname">
													</div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="firstname" class="col-4 col-form-label">Firstname <span
															class="text-danger">*</span></label>
													<div class="col-8">
														<input class="form-control" type="text" name="firstname"
															id="firstname">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="othername"
														class="col-4 col-form-label">Othername</label>
													<div class="col-8">
														<input class="form-control" type="text" name="othername"
															id="othername">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="dateOfBirth" class="col-4 col-form-label">Date of Birth
														<span class="text-danger">*</span></label>
													<div class="col-8">
														<div class="input-group">
															<input class="form-control date" readonly type="text"
																id="form_datetime" name="dateOfBirth"
																placeholder="Select Date">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar glyphicon-th"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="gender" class="col-4 col-form-label">Gender <span
															class="text-danger">*</span></label>
													<div class="col-8">
														<select class="form-control" name="gender" id="gender">
															<option value="">Male</option>
															<option value="">Female</option>
															<option value="">Unspecified</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="nationaliaty"
														class="col-4 col-form-label">Nationality</label>
													<div class="col-8">
														<input class="form-control" type="text" id="nationaliaty"
															name="nationaliaty">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="telephone"
														class="col-4 col-form-label">Telephone</label>
													<div class="col-8">
														<input class="form-control" type="number" id="telephone"
															name="telephone">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="email" class="col-4 col-form-label">Email</label>
													<div class="col-8">
														<input type="email" class="form-control" id="email"
															name="email">
													</div>

												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="employer" class="col-4 col-form-label">Employer <span
															class="text-danger">*</span></label>
													<div class="col-8">
														<select class="form-control" name="employer" id="employer">
															<option value="" selected disabled>Select Employer</option>
															<option value="">Male</option>
															<option value="">Female</option>
															<option value="">Unspecified</option>
														</select>
													</div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="healthPlan" class="col-4 col-form-label">Health Plan
														<span class="text-danger">*</span></label>
													<div class="col-8">
														<input type="text" class="form-control" id="healthPlan"
															name="healthPlan">
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="joinDate" class="col-4 col-form-label">Join Date</label>
													<div class="col-8">
														<div class="input-group">
															<input class="form-control date" readonly type="text"
																id="form_datetime" name="joinDate" id="joinDate"
																placeholder="Select Date">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar glyphicon-th"></i>
																</span>
															</div>
														</div>
													</div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="cancellationDate"
														class="col-4 col-form-label">Cancellation Date</label>
													<div class="col-8">
														<div class="input-group">
															<input class="form-control date" readonly type="text"
																id="form_datetime" name="cancellationDate"
																id="cancellationDate" placeholder="Select Date">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar glyphicon-th"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mt-2 row">
													<label for="relationship" class="col-4 col-form-label">Relationship
														<span class="text-danger">*</span></label>
													<div class="col-8">
														<select name="relationship" id="relationship"
															class="form-control">
															<option value="">Self</option>
														</select>
													</div>

												</div>
											</div>
											<div class="col-md-6">
												<div class="mt-2  row">
													<label for="status" class="col-4 col-form-label">Status</label>
													<div class="col-8">
														<select name="status" id="status" class="form-control">
															<option value="">Active</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="row">
									<div class="col kt-align-right">
										<button type="submit" class="btn btn-success">Save Member Info</button>
										<button type="reset" class="btn btn-warning">Reset</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="tab-pane" id="authorization" role="tabpanel">
				<div class="kt-portlet__body kt-portlet__body--fit">
					<!--begin: Datatable -->
					<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
						id="local_data" style="">
						<table class="table table-hover">
							<thead class="kt-datatable__head table-warning">
								<tr class="kt-datatable__row" style="left: 0px;">
									<th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort">
										<span></span></th>
									<th data-field="drop_down" class="kt-datatable__cell kt-datatable__cell--sort">
										<span></span></th>
									<th data-field="consultation_date"
										class="kt-datatable__cell kt-datatable__cell--sort"><span>Consultation
											Date</span></th>
									<th data-field="facility_name" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Facility Name</span></th>
									<th data-field="case_number" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Case Number</span></th>
									<th data-field="auth_no" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Auth No.</span></th>
									<th data-field="name" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Name</span></th>
									<th data-field="member_no." class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Member No.</span></th>
									<th data-field="requested_amount"
										class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Requested Amount</span></th>
									<th data-field="auth_amount" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Auth Amount</span></th>
									<th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort">
										<span>Status</span></th>
								</tr>
							</thead>
							<tbody class="kt-datatable__body">
								<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
									<th scope="row" data-field="id" class="kt-datatable__cell no_v"><span>1</span>
									</th>
									<td data-field="drop_down" class="kt-datatable__cell no_v">
										<span>
											<a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
												<i class="flaticon2-arrow"></i> </a>
										</span>
									</td>
									<td data-field="consultation_date" class="kt-datatable__cell no_v">
										<span>31/12/2000</span>
									</td>
									<td data-field="facility_name" class="kt-datatable__cell no_v">
										<span>31/12/2000</span>
									</td>
									<td data-field="case_number" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="auth_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="name" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="member_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="requested_amount" class="kt-datatable__cell no_v">
										<span>31/12/2000</span>
									</td>
									<td data-field="auth_amount" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="status" class="kt-datatable__cell no_v"><span><span
												class="kt-font-bold text-error">In-active</span></span>
									</td>
								</tr>
								<tr data-row="1" class="kt-datatable__row" style="left: 0px;">
									<th scope="row" data-field="id" class="kt-datatable__cell no_v"><span>1</span>
									</th>
									<td data-field="drop_down" class="kt-datatable__cell no_v">
										<span>
											<a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
												<i class="flaticon2-arrow"></i> </a>
										</span>
									</td>
									<td data-field="consultation_date" class="kt-datatable__cell no_v">
										<span>31/12/2000</span>
									</td>
									<td data-field="facility_name" class="kt-datatable__cell no_v">
										<span>31/12/2000</span>
									</td>
									<td data-field="case_number" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="auth_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="name" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="member_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="requested_amount" class="kt-datatable__cell no_v">
										<span>31/12/2000</span>
									</td>
									<td data-field="auth_amount" class="kt-datatable__cell no_v"><span>31/12/2000</span>
									</td>
									<td data-field="status" class="kt-datatable__cell no_v"><span><span
												class="kt-font-bold kt-font-success">Active</span></span>
									</td>
								</tr>

							</tbody>
						</table>
						<div class="kt-datatable__pager kt-datatable--paging-loaded">
							<ul class="kt-datatable__pager-nav">
								<li><a title="First"
										class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
										data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
								<li><a title="Previous"
										class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
										data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
								<li style=""></li>
								<li style="display: none;"><input type="text" class="kt-pager-input form-control"
										title="Page number"></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active"
										data-page="1" title="1">1</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2"
										title="2">2</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3"
										title="3">3</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4"
										title="4">4</a></li>
								<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5"
										title="5">5</a></li>
								<li></li>
								<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next"
										data-page="2"><i class="flaticon2-next"></i></a></li>
								<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last"
										data-page="10"><i class="flaticon2-fast-next"></i></a></li>
							</ul>
							<div class="kt-datatable__pager-info">
								<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
									<select class="selectpicker kt-datatable__pager-size" title="Select page size"
										data-width="60px" data-selected="10" tabindex="-98">
										<option class="bs-title-option" value=""></option>
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select><button type="button" class="btn dropdown-toggle btn-light"
										data-toggle="dropdown" role="button" title="Select page size">
										<div class="filter-option">
											<div class="filter-option-inner">
												<div class="filter-option-inner-inner">10</div>
											</div>
										</div>
									</button>
									<div class="dropdown-menu " role="combobox">
										<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
											<ul class="dropdown-menu inner show"></ul>
										</div>
									</div>
								</div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
							</div>
						</div>
					</div>
					<!--end: Datatable -->
				</div>
			</div>
			<div class="tab-pane" id="memberClaim" role="tabpanel">
				<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
					style="">
					<table class="table table-hover">
						<thead>
							<tr>
								<th colspan="3">Out Patient Utilisation : </th>
								<th colspan="3"><span>USD: 00000 </span>|<span> GHC: 000</span> </th>
								<th colspan="3">In Patient Utilisation : </th>
								<th colspan="3"><span>USD: 00000 </span>|<span> GHC: 000</span> </th>
							</tr>
						</thead>
						<thead class="kt-datatable__head table-warning">
							<tr class="kt-datatable__row" style="left: 0px;">
								<th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort">
									<span></span></th>
								<th data-field="drop_down" class="kt-datatable__cell kt-datatable__cell--sort">
									<span></span></th>
								<th data-field="date_consultation" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Date of Consultation</span></th>
								<th data-field="date_captured" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Date Captured</span></th>
								<th data-field="service_provider" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Service Provider</span></th>
								<th data-field="visit_type" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>visit Type</span></th>
								<th data-field="visit_no" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Visit Type</span></th>
								<th data-field="claimed" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Claimed</span></th>
								<th data-field="approved" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Approved</span></th>
								<th data-field="awarded" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Awarded</span></th>
								<th data-field="difference" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Difference</span></th>
								<th data-field="audit_status" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Audit Status</span></th>
								<th data-field="award_status" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Award Status</span></th>
							</tr>
						</thead>
						<tbody class="kt-datatable__body">
							<tr onclick="getstep('member_detail_dropdown')" data-row="0" class="kt-datatable__row"
								style="left: 0px;">
								<th scope="row" data-field="id" class="kt-datatable__cell no_v"><span>1</span>
								</th>
								<td data-field="drop_down" class="kt-datatable__cell no_v">
									<span>
										<a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
											<i class="flaticon2-arrow"></i> </a>
									</span>
								</td>
								<td data-field="date_consultation" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="date_captured" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="service_provider" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="visit_type" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="visit_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="claimed" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="approved" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="awarded" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="difference" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="audit_status" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="award_status" class="kt-datatable__cell no_v"><span><span
											class="kt-font-bold text-error">In-active</span></span>
								</td>
							</tr>
							<tr data-row="1" class="kt-datatable__row" style="left: 0px;">
								<th scope="row" data-field="id" class="kt-datatable__cell no_v"><span>1</span>
								</th>
								<td data-field="drop_down" class="kt-datatable__cell no_v">
									<span>
										<a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
											<i class="flaticon2-arrow"></i> </a>
									</span>
								</td>
								<td data-field="date_consultation" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="date_captured" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="service_provider" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="visit_type" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="visit_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="claimed" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="approved" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="awarded" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="difference" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="audit_status" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="award_status" class="kt-datatable__cell no_v"><span><span
											class="kt-font-bold kt-font-success">Active</span></span>
								</td>
							</tr>

						</tbody>
					</table>
					<div class="kt-datatable__pager kt-datatable--paging-loaded">
						<ul class="kt-datatable__pager-nav">
							<li><a title="First"
									class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
									data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
							<li><a title="Previous"
									class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
									data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
							<li style=""></li>
							<li style="display: none;"><input type="text" class="kt-pager-input form-control"
									title="Page number"></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active"
									data-page="1" title="1">1</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2"
									title="2">2</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3"
									title="3">3</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4"
									title="4">4</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5"
									title="5">5</a></li>
							<li></li>
							<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next"
									data-page="2"><i class="flaticon2-next"></i></a></li>
							<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last"
									data-page="10"><i class="flaticon2-fast-next"></i></a></li>
						</ul>
						<div class="kt-datatable__pager-info">
							<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
								<select class="selectpicker kt-datatable__pager-size" title="Select page size"
									data-width="60px" data-selected="10" tabindex="-98">
									<option class="bs-title-option" value=""></option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="30">30</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select><button type="button" class="btn dropdown-toggle btn-light"
									data-toggle="dropdown" role="button" title="Select page size">
									<div class="filter-option">
										<div class="filter-option-inner">
											<div class="filter-option-inner-inner">10</div>
										</div>
									</div>
								</button>
								<div class="dropdown-menu " role="combobox">
									<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
										<ul class="dropdown-menu inner show"></ul>
									</div>
								</div>
							</div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="caseManagement" role="tabpanel">
				<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
					style="">
					<table class="table table-hover">
						<thead class="kt-datatable__head table-warning">
							<tr class="kt-datatable__row" style="left: 0px;">
								<th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort">
									<span></span></th>
								<th data-field="consultation_date" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Consultation Date</span></th>
								<th data-field="facility_name" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Facility Name</span></th>
								<th data-field="case_no" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Case No.</span></th>
								<th data-field="visit_no" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>visit No.</span></th>
								<th data-field="total_requested" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Total Requested</span></th>
								<th data-field="total_auth" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Total Authorized</span></th>
								<th data-field="action" class="kt-datatable__cell kt-datatable__cell--sort">
									<span>Action</span></th>
							</tr>
						</thead>
						<tbody class="kt-datatable__body">
							<tr data-row="0" class="kt-datatable__row" style="left: 0px;">
								<th scope="row" data-field="id" class="kt-datatable__cell no_v"><span>1</span>
								</th>
								<td data-field="date_consultation" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="date_captured" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>

								<td data-field="visit_no" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="claimed" class="kt-datatable__cell no_v"><span>31/12/2000</span>
								</td>
								<td data-field="approved" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="approved" class="kt-datatable__cell no_v">
									<span>31/12/2000</span>
								</td>
								<td data-field="action" class="kt-datatable__cell">
									<div class="btn-group">
										<button type="button" class="btn btn-outline-success btn-sm"><i
												class="flaticon-refresh"></i>
											Refresh</button>
										<button type="button"
											class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
										</button>
										<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
											style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
											<a class="dropdown-item" onclick="getstep('editMember')"
												href="javascript:;"><i class="flaticon-edit-1"></i> Edit Member Info</a>
											<a class="dropdown-item" href="#"><i class="flaticon-network"></i> Sync
												Member Info</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" data-toggle="modal" data-target="#generateClaim"
												href="javascript:;"><i class="kt-nav__link-icon flaticon2-file"></i>
												Generate Claim</a>
											<a data-toggle="modal" data-target="#comment_attachment"
												class="dropdown-item" href="#"><i
													class="kt-nav__link-icon flaticon2-menu-2"></i> Comments And
												Attachment</a>
											<a data-toggle="modal" data-target="#member_activities"
												class="dropdown-item" href="#"><i
													class="kt-nav__link-icon flaticon2-menu-2"></i> Member
												Activities</a>
											<a data-toggle="modal" data-target="#email_correspondence"
												class="dropdown-item" href="#"><i
													class="kt-nav__link-icon flaticon2-menu-2"></i> Email
												Correspondence</a>
											<a data-toggle="modal" data-target="#task_activities" class="dropdown-item"
												href="#"><i class="kt-nav__link-icon flaticon2-menu-2"></i> Task
												Activities</a>
											<a data-toggle="modal" data-target="#log_activities" class="dropdown-item"
												href="#"><i class="kt-nav__link-icon flaticon2-menu-2"></i> Log
												Activities</a>
										</div>
									</div>
								</td>

							</tr>
						</tbody>
					</table>
					<div class="kt-datatable__pager kt-datatable--paging-loaded">
						<ul class="kt-datatable__pager-nav">
							<li><a title="First"
									class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled"
									data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li>
							<li><a title="Previous"
									class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled"
									data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li>
							<li style=""></li>
							<li style="display: none;"><input type="text" class="kt-pager-input form-control"
									title="Page number"></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active"
									data-page="1" title="1">1</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2"
									title="2">2</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3"
									title="3">3</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4"
									title="4">4</a></li>
							<li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5"
									title="5">5</a></li>
							<li></li>
							<li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next"
									data-page="2"><i class="flaticon2-next"></i></a></li>
							<li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last"
									data-page="10"><i class="flaticon2-fast-next"></i></a></li>
						</ul>
						<div class="kt-datatable__pager-info">
							<div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
								<select class="selectpicker kt-datatable__pager-size" title="Select page size"
									data-width="60px" data-selected="10" tabindex="-98">
									<option class="bs-title-option" value=""></option>
									<option value="10">10</option>
									<option value="20">20</option>
									<option value="30">30</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select><button type="button" class="btn dropdown-toggle btn-light"
									data-toggle="dropdown" role="button" title="Select page size">
									<div class="filter-option">
										<div class="filter-option-inner">
											<div class="filter-option-inner-inner">10</div>
										</div>
									</div>
								</button>
								<div class="dropdown-menu " role="combobox">
									<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
										<ul class="dropdown-menu inner show"></ul>
									</div>
								</div>
							</div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 100</span>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="bankDetail" role="tabpanel">
				No DATA YET
			</div>
		</div>
	</div>
</div>


<!-- MODALS SECTION -->

<!-- begin: Modal VIew Generate CLaim -->
<div class="row">
	<div class="col">
		<div class="modal fade" id="generateClaim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">ACTIVE DRAFT & AUTHORIZATIONS</h5>
						<div class="btn-group btn-group" role="group">
							<button onclick="getstep('generateClaim')" type="button" class="btn btn-success">Generate
								New Claim/Auth</button>
							<button type="button" class="close" data-dismiss="modal"></button>
						</div>
					</div>
					<div class="modal-body">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Draft</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="table-responsive">
									<table class="table">
										<thead class="table-warning">
											<tr>
												<th>#</th>
												<th>Date Captured</th>
												<th>Date of Consult.</th>
												<th>Service Provider</th>
												<th>Item</th>
												<th>Currency</th>
												<th>Qty</th>
												<th>Unit Price</th>
												<th>Total</th>
												<th>Type</th>
												<th>Status</th>
												<th>Diagnosis</th>
												<th>Added By</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="checkbox"></td>
												<td>Date Captured</td>
												<td>Date of Consult.</td>
												<td>Service Provider</td>
												<td>Item</td>
												<td>Currency</td>
												<td>Qty</td>
												<td>Unit Price</td>
												<td>Total</td>
												<td>Type</td>
												<td>Status</td>
												<td>Diagnosis</td>
												<td>Added By</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<!-- <div class="row"> -->
								<div class="kt-align-right">
									<button onclick="getstep('generateClaim')" class="btn btn-success">Go to Claims
										Page</button>
								</div>
								<!-- </div> -->
							</div>
						</div>
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">Authorized</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="table-responsive">
									<table class="table">
										<thead class="table-warning">
											<tr>
												<th>#</th>
												<th>Date Captured</th>
												<th>Date of Consult.</th>
												<th>Service Provider</th>
												<th>Item</th>
												<th>Currency</th>
												<th>Qty</th>
												<th>Unit Price</th>
												<th>Total</th>
												<th>Type</th>
												<th>Status</th>
												<th>Diagnosis</th>
												<th>Added By</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input type="checkbox"></td>
												<td>Date Captured</td>
												<td>Date of Consult.</td>
												<td>Service Provider</td>
												<td>Item</td>
												<td>Currency</td>
												<td>Qty</td>
												<td>Unit Price</td>
												<td>Total</td>
												<td>Type</td>
												<td>Status</td>
												<td>Diagnosis</td>
												<td>Added By</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end: Modal VIew Generate CLaim -->

<!-- begin modal link dependent  -->
<div class="row">
	<div class="col">
		<div class="modal fade" id="link_dependent" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
			style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">List of Members</h5>
					</div>
					<div class="modal-body">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h5 class="kt-portlet__head-title"> Principal End Date: 2019/10/05</h5>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead class="table-warning">
											<tr>
												<th>Surname</th>
												<th>Firstname</th>
												<th>Date Of Birth</th>
												<th>Gender</th>
												<th>HAS Member Id</th>
												<th>Health Plan</th>
												<th>End Data</th>
												<th>Status</th>
												<th>Use Principal End Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td onclick="showAlert()" class="no_v"><a
														class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="kt-align-right">
							<button data-dismiss="modal" class="btn btn-danger">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end modal  link depedpent-->

<!-- begin: swap Principal -->
<div class="row">
	<div class="col">
		<div class="modal fade" id="swap_principal" tabindex="-3" role="dialog" aria-labelledby="exampleModalLabel"
			style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">List of Members</h5>
					</div>
					<div class="modal-body">
						<div class="kt-portlet">
							<div class="kt-portlet__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead class="table-warning">
											<tr>
												<th>Surname</th>
												<th>Firstname</th>
												<th>Date Of Birth</th>
												<th>Gender</th>
												<th>HAS Member Id</th>
												<th>Health Plan</th>
												<th>End Data</th>
												<th>Status</th>
												<th>Use Principal End Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
											<tr>
												<td class="no_v">Doe</td>
												<td class="no_v">John</td>
												<td class="no_v">32/12/1990</td>
												<td class="no_v">Male</td>
												<td class="no_v">89KlOO99</td>
												<td class="no_v">God's Plan</td>
												<td class="no_v">12/20/2019</td>
												<td class="no_v"><span class="text-success">Active</span></td>
												<td class="no_v"><label class="kt-checkbox">
														<input type="checkbox">End Date
														<span></span>
													</label></td>
												<td class="no_v"><a class="btn btn-sm btn-warning btn-icon btn-icon-md">
														<i class="la la-link"></i>
													</a></td>

											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<div class="kt-align-right">
							<button data-dismiss="modal" class="btn btn-danger">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end swap Principal -->

<!--comment and attachment  -->
<div class="modal fade" id="comment_attachment" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Notes and Attachment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<table class="table">
											<tbody>
												<tr>
													<th scope="row">Date Created</th>
													<td>26th/Aug/2019 12:09AM</td>
												</tr>
												<tr>
													<th scope="row">Comments or Notes</th>
													<td>some comments</td>
												</tr>
												<tr>
													<th scope="row">File Attachment</th>
													<td>file link</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<table class="table">
											<tbody>
												<tr>
													<th scope="row">Date Created</th>
													<td>26th/Aug/2019 12:09AM</td>
												</tr>
												<tr>
													<th scope="row">Comments or Notes</th>
													<td>some comments</td>
												</tr>
												<tr>
													<th scope="row">File Attachment</th>
													<td>file link</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<table class="table">
											<tbody>
												<tr>
													<th scope="row">Date Created</th>
													<td>26th/Aug/2019 12:09AM</td>
												</tr>
												<tr>
													<th scope="row">Comments or Notes</th>
													<td>some comments</td>
												</tr>
												<tr>
													<th scope="row">File Attachment</th>
													<td>file link</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						<div class="row">
							<div class="col-4">
								<div class="input-group">
									<select id="my-select" class="form-control" name="">
										<option value="non-medical">Non Medical Note</option>
										<option value="medical">Medical Note</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col">
								<textarea class="form-control" id="comments" rows="3" spellcheck="false"
									placeholder="Enter Comments or Notes"></textarea>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col">
								<div class="kt-dropzone dropzone dz-clickable" action="inc/api/dropzone/upload.php"
									id="m-dropzone-one">
									<div class="kt-dropzone__msg dz-message needsclick">
										<h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="row">
							<div class="col kt-align-right">
								<button type="submit" class="btn btn-success">Save Info</button>
								<button data-dismiss="modal" class="btn btn-danger">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end comment and attachment -->

<!--member activities  -->
<div class="modal fade" id="member_activities" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Member activites</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end member activities -->

<!--email responds  -->
<div class="modal fade" id="email_correspondence" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Email Correspondence</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end email responds -->

<!--Task Activities  -->
<div class="modal fade" id="task_activities" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Task Activities</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end Task Activities -->

<!-- Log Activities  -->
<div class="modal fade" id="log_activities" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
	style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Log Activities</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						No data
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- end Log Activities -->


<script type="text/javascript">
	$(".date").datepicker({
		format: "dd MM yyyy",
		autoclose: true,
		orientation: "bottom auto"
	});

	function showAlert() {
		Swal.fire({
			title: 'Link Principal to this User',
			type: 'warning',
			text: 'Are you sure you want to link'
		})
	}

	$("div#m-dropzone-one").dropzone({
		url: "/file/post"
	});
</script>