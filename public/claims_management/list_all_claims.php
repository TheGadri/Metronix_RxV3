<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <div class="kt-portlet__head-title">
                All Claims
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
        <div class="kt-portlet__body kt-portlet__body--fit">
            <!--begin: Datatable -->
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                style="">
                <table class="table table-hover">
                    <thead class="kt-datatable__head table-warning">
                        <tr class="kt-datatable__row" style="left: 0px;">
                            <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span></span></th>
                            <th data-field="drop_down" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span></span></th>
                            <th data-field="consultation_date" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Consultation
                                    Date</span></th>
                            <th data-field="facility_name" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Facility Name</span></th>
                            <th data-field="member_name" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Member Name</span></th>
                            <th data-field="has_id" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>HAS Member ID</span></th>
                            <th data-field="member_plan" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Membber Plan</span></th>
                            <th data-field="visit_no." class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Visit No.</span></th>
                            <th data-field="claimed_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Claimed Amt</span></th>
                            <th data-field="awarded_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Awarded Amt</span></th>
                            <th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Status</span></th>
                            <th data-field="acttion" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Action</span></th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body">
                        <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                            <th scope="row" data-field="id" class="kt-datatable__cell no_v"><span>1</span>
                            </th>
                            <td data-field="drop_down" class="kt-datatable__cell no_v">
                                <span>
                                    <a onclick="getstep('claim_management_detail')" title="Edit details" href="javascript:;"  class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                        <i class="flaticon2-arrow"></i> </a>
                                </span>
                            </td>
                            <td data-field="consultation_date" class="kt-datatable__cell no_v">
                                <span>31/12/2000</span>
                            </td>
                            <td data-field="facility_name" class="kt-datatable__cell no_v">
                                <span>CSE TALAUNTE LAUNDE</span>
                            </td>
                            <td data-field="member_name" class="kt-datatable__cell no_v">
                                <span>20182 minousat 00sdfaew</span>
                            </td>
                            <td data-field="has_id" class="kt-datatable__cell no_v">
                                <span>20182</span>
                            </td>
                            <td data-field="member_plan" class="kt-datatable__cell no_v">
                                <span>Unitel Healthcare Management</span>
                            </td>
                            <td data-field="visit_no" class="kt-datatable__cell no_v">
                                <span>UnitelHealthcareManagement</span>
                            </td>
                            <td data-field="claimed_amt" class="kt-datatable__cell no_v">
                                <span>30.000</span>
                            </td>
                            <td data-field="awarded_amt" class="kt-datatable__cell no_v">
                                <span>33.000</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v">
                                <span class="kt-font-bold kt-font-success">Success</span>
                            </td>
                            <td data-field="action" class="kt-datatable__cell no_v">
                                <span class="">
                                    <a title="Delete" class="btn">
                                        <i class="flaticon2-trash text-error"></i></a>
                                </span>
                            </td>
                        </tr>
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
                                <span>CSE TALAUNTE LAUNDE</span>
                            </td>
                            <td data-field="member_name" class="kt-datatable__cell no_v">
                                <span>20182 minousat 00sdfaew</span>
                            </td>
                            <td data-field="has_id" class="kt-datatable__cell no_v">
                                <span>20182</span>
                            </td>
                            <td data-field="member_plan" class="kt-datatable__cell no_v">
                                <span>Unitel Healthcare Management</span>
                            </td>
                            <td data-field="visit_no" class="kt-datatable__cell no_v">
                                <span>UnitelHealthcareManagement</span>
                            </td>
                            <td data-field="claimed_amt" class="kt-datatable__cell no_v">
                                <span>30.000</span>
                            </td>
                            <td data-field="awarded_amt" class="kt-datatable__cell no_v">
                                <span>33.000</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v">
                                <span class="kt-font-bold text-error">Denied</span>
                            </td>
                            <td data-field="action" class="kt-datatable__cell no_v">
                                <span class="">
                                    <a title="Delete" class="btn">
                                        <i class="flaticon2-trash text-error"></i></a>
                                </span>
                            </td>
                        </tr>
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
                                <span>CSE TALAUNTE LAUNDE</span>
                            </td>
                            <td data-field="member_name" class="kt-datatable__cell no_v">
                                <span>20182 minousat 00sdfaew</span>
                            </td>
                            <td data-field="has_id" class="kt-datatable__cell no_v">
                                <span>20182</span>
                            </td>
                            <td data-field="member_plan" class="kt-datatable__cell no_v">
                                <span>Unitel Healthcare Management</span>
                            </td>
                            <td data-field="visit_no" class="kt-datatable__cell no_v">
                                <span>UnitelHealthcareManagement</span>
                            </td>
                            <td data-field="claimed_amt" class="kt-datatable__cell no_v">
                                <span>30.000</span>
                            </td>
                            <td data-field="awarded_amt" class="kt-datatable__cell no_v">
                                <span>33.000</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v">
                                <span class="kt-font-bold kt-font-success">Success</span>
                            </td>
                            <td data-field="action" class="kt-datatable__cell no_v">
                                <span class="">
                                    <a title="Delete" class="btn">
                                        <i class="flaticon2-trash text-error"></i></a>
                                </span>
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
                            </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                role="button" title="Select page size">
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