<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                List of Rejected Authorization
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
                    <a class="dropdown-item" href="javascript:;"><i class="flaticon-refresh"></i> Sync Authorization</a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left input-group">
                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                                <div class="input-group-append">
                                    <button class="btn btn-success btn-icon btn-icon-md" type="button"><i
                                            class="la la-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 kt-margin-b-20-tablet-and-mobile">
                            <div class="">
                                <div class="col-md-5">
                                    <select class="form-control" id="search_by" name="search_by">
                                        <option disabled selected>Search By</option>
                                        <option value="surname">Surname</option>
                                        <option value="firstname">Firstname</option>
                                        <option value="gender">Gender</option>
                                        <option value="hasId">HAS Member Id</option>
                                        <option value="relationshipType">Relationship Type</option>
                                        <option value="healthPlan">Health Plan</option>
                                        <option value="status">Status</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Search Form -->
        <div class="table-responsive">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                    style="">
                    <table class="table table-hover">
                        <thead class="kt-datatable__head table-warning">
                            <tr class="kt-datatable__row p-5" style="left: 0px;">
                                <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort"><span></span>
                                </th>
                                <th data-field="dropdown" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span></span></th>
                                <th data-field="consult_date" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Consult. Date</span></th>
                                <th data-field="facility_name" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Facility Name</span></th>
                                <th data-field="case_no" class="kt-datatable__cell kt-datatable__cell--sort"><span>Case
                                        No.</span></th>
                                <th data-field="auth_no" class="kt-datatable__cell kt-datatable__cell--sort"><span>Auth
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
                                <th data-field="auth_amt" class="kt-datatable__cell kt-datatable__cell--sort"><span>Auth
                                        Amt.</span>
                                </th>
                                <th data-field="staus" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Staus</span></th>

                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body">
                            <tr onclick="getstep('rejected_detail_auth')" data-row="0" class="kt-datatable__row"
                                style="left: 0px;">
                                <td data-field="id" class="kt-datatable__cell no_v"><span>Doe</span>
                                </td>
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td data-field="consult_date" class="kt-datatable__cell no_v"><span>31/12/2000</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v"><span>Enclave</span></td>
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
                            <tr onclick="getstep('rejected_detail_auth')" data-row="0" class="kt-datatable__row"
                                style="left: 0px;">
                                <td data-field="id" class="kt-datatable__cell no_v"><span>Doe</span>
                                </td>
                                <td data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td data-field="consult_date" class="kt-datatable__cell no_v"><span>31/12/2000</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v"><span>Enclave</span></td>
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
                            <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select
                                    class="selectpicker kt-datatable__pager-size" title="Select page size"
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