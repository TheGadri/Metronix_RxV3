<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <i class="flaticon-user"></i> Membership Information
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
                    <a class="dropdown-item" onclick="getstep('#')" href="javascript:;"><i class="flaticon-edit-1"></i>
                        View Member Claims</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body" style="height:500px; overflow-y: auto;">
        <div class="row">
            <div class="col-md-2 text-center">
                <img src="http://localhost:80/rxv3/assets/media/users/100_2.jpg" alt="" class="img-thumbnail">
            </div>
            <div class="col-md-10">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label class="col-md-4 col-form-label font-weight-bold">HealthCare Company :</label>
                            <label class="col-md-8 col-form-label" id="hasMemberId"> International SOS (Angolo)
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="employeeNumber" class="col-md-4 col-form-label font-weight-bold">Member Number
                                :</label>
                            <label class="col-md-8 col-form-label" id="employerNumber">20060020
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="surname" class="col-md-4 col-form-label font-weight-bold">Card Status :</label>
                            <label class="col-md-8 col-form-label kt-font-success" id="surname">Active</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="firstname" class="col-md-4 col-form-label font-weight-bold">Expiry Date
                                :</label>
                            <label class="col-md-8 col-form-label" id="firstname">31/August/2019</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="othername" class="col-md-4 col-form-label font-weight-bold">Surname :</label>
                            <label class="col-md-8 col-form-label" id="othername">Doe
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="nationaliaty" class="col-md-4 col-form-label font-weight-bold">Firstname :
                            </label>
                            <label class="col-md-8 col-form-label" id="nationality">John
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="dateOfBirth" class="col-md-4 col-form-label font-weight-bold">Othername
                                :</label>
                            <label class="col-md-8 col-form-label" id="dateOfBirth">Mint
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="dateOfBirth" class="col-md-4 col-form-label font-weight-bold">Date of Birth
                                :</label>
                            <label class="col-md-8 col-form-label" id="dateOfBirth">30/05/2019
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="gender" class="col-md-4 col-form-label font-weight-bold">Gender :</label>
                            <label class="col-md-8 col-form-label" id="gender">Male
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="telephone" class="col-md-4 col-form-label font-weight-bold">Telephone : </label>
                            <label class="col-md-8 col-form-label" id="telephone">0546899009
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="gender" class="col-md-4 col-form-label font-weight-bold">Health Plan : </label>
                            <label class="col-md-8 col-form-label" id="email">Unite Helath
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="employer" class="col-4 col-form-label font-weight-bold">Employer :</label>
                            <label class="col-md-8 col-form-label" id="employer">Unitel
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="healthPlan" class="col-md-4 col-form-label font-weight-bold">Payment Method
                                :</label>
                            <label class="col-md-8 col-form-label" id="healthPlan">
                            </label>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
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
				</div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="joinDate" class="col-md-4 col-form-label font-weight-bold">Relationship : <span
                                    class="text-danger">*</span></label>
                            <label class="col-md-8 col-form-label" id="relationship">Self
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="status" class="col-md-4 col-form-label font-weight-bold">Email : </label>
                            <label class="col-md-8 col-form-label" id="status">oko@gmail.com
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Case Management Details
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <button type="button" class="btn btn-outline-brand btn-sm mr-2">
                Re-Open Case</button>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Actions</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                    <a class="dropdown-item" onclick="getstep('#')" href="javascript:;"><i class="flaticon-edit-1"></i>
                        View Member Claims</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body" style="max-height:500px; overflow-y: auto;">
        <div class="table-responsive">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                    style="">
                    <table class="table table-hover">
                        <thead class="kt-datatable__head table-warning">
                            <tr class="kt-datatable__row p-5" style="left: 0px;">
                                <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span></span>
                                </th>
                                <th data-field="dropdown" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span></span></th>
                                <th data-field="consultation_date" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Consultation Date</span></th>
                                <th data-field="facility_name" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Facility Name</span></th>
                                <th data-field="case_no" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Case
                                        No.</span></th>
                                <th data-field="auth_no" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Auth
                                        No.</span>
                                </th>
                                <th data-field="name" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Name</span>
                                </th>
                                <th data-field="member_no" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Member No.</span></th>
                                <th data-field="request_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Request Amt.</span>
                                </th>
                                <th data-field="auth_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Auth
                                        Amt.</span>
                                </th>
                                <th data-field="staus" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Staus</span></th>

                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body">
                            <tr onclick="getstep('detail_auth')" data-row="0" class="kt-datatable__row"
                                style="left: 0px;">
                                <td data-field="id" class="kt-datatable__cell no_v"><span>Doe</span>
                                </td>
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <span>31/12/2000</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v"><span>Enclave</span>
                                </td>
                                <td data-field="case_no" class="kt-datatable__cell no_v"><span>UBAH000</span></td>
                                <td data-field="auth_no" class="kt-datatable__cell no_v"><span>55003300k3</span>
                                </td>
                                <td data-field="name" class="kt-datatable__cell no_v"><span>Charles</span>
                                </td>
                                <td data-field="member_no" class="kt-datatable__cell no_v"><span>
                                        <span>55003300k3</span></span>
                                </td>
                                <td data-field="request_amt" class="kt-datatable__cell no_v"><span>
                                        0.00
                                    </span>
                                </td>
                                <td data-field="auth_amt" class="kt-datatable__cell no_v"><span>0.00</span>
                                </td>
                                <td data-field="status" class="kt-datatable__cell no_v"><span>
                                        <span class="kt-font-bold kt-font-success">Active</span></span>
                                </td>
                            </tr>
                            <tr onclick="getstep('detail_auth')" data-row="0" class="kt-datatable__row"
                                style="left: 0px;">
                                <td data-field="id" class="kt-datatable__cell no_v"><span>Doe</span>
                                </td>
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td data-field="consult_date" class="kt-datatable__cell no_v">
                                    <span>31/12/2000</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v"><span>Enclave</span>
                                </td>
                                <td data-field="case_no" class="kt-datatable__cell no_v"><span>UBAH000</span></td>
                                <td data-field="auth_no" class="kt-datatable__cell no_v"><span>55003300k3</span>
                                </td>
                                <td data-field="name" class="kt-datatable__cell no_v"><span>Charles</span>
                                </td>
                                <td data-field="member_no" class="kt-datatable__cell no_v"><span>
                                        <span>55003300k3</span></span>
                                </td>
                                <td data-field="request_amt" class="kt-datatable__cell no_v"><span>
                                        0.00
                                    </span>
                                </td>
                                <td data-field="auth_amt" class="kt-datatable__cell no_v"><span>0.00</span>
                                </td>
                                <td data-field="status" class="kt-datatable__cell no_v"><span>
                                        <span class="kt-font-bold text-error">In active</span></span>
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
    </div>
</div>