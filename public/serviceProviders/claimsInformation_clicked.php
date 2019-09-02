<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <div class="kt-portlet__head-title">
                Claim for March.........
            </div>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button onclick="getstep('')" type="button" class="btn btn-outline-success btn-sm">
                    Service Provider</button>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="row align-items-center mb-4">
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
            <div class="col-md-2 kt-margin-b-20-tablet-and-mobile">
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
            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile offset-md-2">
                <div class="row">
                    <label for="filter_by" class="col-md-4 col-form-label text-right">Filter By</label>
                    <div class="col-md-8">
                        <select class="form-control" id="filter_by" name="filter_by">
                            <option disabled selected>Filter By</option>
                            <option value="all_claims">All Claims</option>
                            <option value="awarded">Awarded</option>
                            <option value="not_awarded">Not Awarded</option>
                            <option value="attendance">Attendance > 1</option>
                            <option value="referred">Referred</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-responsive" style="max-height:600px">
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
                                <th data-field="consultation_date" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Consultaion Date</span></th>
                                <th data-field="facility_name" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Facility Name</span></th>
                                <th data-field="visit_no" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Visit No.</span></th>
                                <th data-field="name" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Name</span>
                                </th>
                                <th data-field="member_no" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Member No.</span>
                                </th>
                                <th data-field="claimed_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Claimed Amt</span>
                                </th>
                                <th data-field="audit_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Audit Amt</span>
                                </th>
                                <th data-field="award_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Award Amt</span></th>
                                <th data-field="queried_amt" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Queried Amt</span>
                                </th>
                                <th data-field="audit_status" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Audit Status</span></th>
                                <th data-field="award_status" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Award Status</span></th>

                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body">
                            <tr>
                                <td data-field="id" class="kt-datatable__cell no_v"><span>1</span>
                                </td>
                                <td onclick="getstep('dropdown_serviceProvider_claimdetail')" data-field="dropdown" class="kt-datatable__cell no_v"><span>
                                        <a title="details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="fa fa-play"></i> </a>
                                    </span>
                                </td>
                                <td data-field="consultation_date" class="kt-datatable__cell no_v"><span>29 JUN
                                        2019</span>
                                </td>
                                <td data-field="facility_name" class="kt-datatable__cell no_v"><span>Alteria
                                        Monahosdadf</span>
                                </td>
                                <td data-field="visit_no" class="kt-datatable__cell no_v"><span>Alte23435f</span>
                                </td>
                                <td data-field="name" class="kt-datatable__cell no_v"><span>w345tw4sadsag</span>
                                </td>
                                <td data-field="member_no" class="kt-datatable__cell no_v"><span>w345tw4sadsag</span>
                                </td>
                                <td data-field="claimed_amt" class="kt-datatable__cell no_v">
                                    <span>30.00</span>
                                </td>
                                <td data-field="audit_amt" class="kt-datatable__cell no_v">
                                    <span>30.00</span>
                                </td>
                                <td data-field="award_amt" class="kt-datatable__cell no_v">
                                    <span>30.00</span>
                                </td>
                                <td data-field="queried_amt" class="kt-datatable__cell no_v">
                                    <span>30.00</span>
                                </td>
                                <td data-field="audit_status" class="kt-datatable__cell no_v">
                                    <span class="kt-font-success kt-font-bold">Success</span>
                                </td>
                                <td data-field="award_status" class="kt-datatable__cell no_v">
                                    <span class="text-error kt-font-bold">Denied</span>
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