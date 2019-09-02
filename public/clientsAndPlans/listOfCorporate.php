<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                List of Corporate Groups
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
                    <a class="dropdown-item" href="javascript:;"><i class="flaticon-list-1"></i> All Client Groups</a>
                    <a class="dropdown-item" href="javascript:;"><i class="flaticon-list-1"></i> Expired Client
                        Groups</a>
                    <a data-toggle="modal" data-target="#add_new_client" class="dropdown-item" href="javascript:;"><i
                            class="flaticon-add-circular-button"></i> Add New
                        Client</a>
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
        <div class="table-responsive">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin: Datatable -->
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                    style="">
                    <table class="table table-hover">
                        <thead class="kt-datatable__head table-warning">
                            <tr class="kt-datatable__row p-5" style="left: 0px;">
                                <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">#</span></th>
                                <th data-field="company" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Company</span></th>
                                <th data-field="company_id" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Company ID</span></th>
                                <th data-field="parent_group" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Parent Group</span></th>
                                <th data-field="policy_status" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Policy Status</span></th>
                                <th data-field="currency_rate" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Currency Exchange Rate</span>
                                </th>
                                <th data-field="last_update" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Last Update</span>
                                </th>
                                <th data-field="actions" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                        style="width: 100px;">Actions</span></th>

                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body">
                            <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
                                <td onclick="getstep('companyDetails')" data-field="id" class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="company"
                                    class="kt-datatable__cell no_v"><span>JAMz</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="company_id"
                                    class="kt-datatable__cell no_v"><span>31/12/2000</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="parent_group"
                                    class="kt-datatable__cell no_v"><span>Male</span></td>
                                <td onclick="getstep('companyDetails')" data-field="policy_status"
                                    class="kt-datatable__cell no_v"><span><span class="kt-font-bold kt-font-success"
                                            </span>Active </span> </td> <td onclick="getstep('companyDetails')"
                                            data-field="currency_rate"
                                            class="kt-datatable__cell no_v"><span>55003300k3</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="last_update"
                                    class="kt-datatable__cell no_v"><span>Child</span>
                                </td>
                                <td data-field="actions" data-toggle="modal" data-target="#edit_client_details"
                                    class="kt-datatable__cell no_v"><span>
                                        <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="flaticon-edit-1"></i> </a>
                                    </span>
                                </td>
                            </tr>
                            <tr data-row="1" class="kt-datatable__row" style="left: 0px;">
                                <td onclick="getstep('companyDetails')" data-field="id" class="kt-datatable__cell no_v">
                                    <span>1</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="company"
                                    class="kt-datatable__cell no_v"><span>JAMz</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="company_id"
                                    class="kt-datatable__cell no_v"><span>31/12/2000</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="parent_group"
                                    class="kt-datatable__cell no_v"><span>Male</span></td>
                                <td onclick="getstep('companyDetails')" data-field="policy_status"
                                    class="kt-datatable__cell no_v"><span><span
                                            class="kt-font-bold text-error">In-Active</span></span></td>
                                <td onclick="getstep('companyDetails')" data-field="currency_rate"
                                    class="kt-datatable__cell no_v"><span>55003300k3</span>
                                </td>
                                <td onclick="getstep('companyDetails')" data-field="last_update"
                                    class="kt-datatable__cell no_v"><span>Child</span>
                                </td>
                                <td data-field="actions" data-toggle="modal" data-target="#edit_client_details"
                                    class="kt-datatable__cell no_v"><span>
                                        <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                                class="flaticon-edit-1"></i> </a>
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

<!-- edit client detials -->
<div class="modal fade" id="edit_client_details">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Client Details</h5>
            </div>
            <div class="modal-body">
                <form name="form">
                    <div class="form-body">
                        <div class="row">
                            <label class="col-md-4 control-label"> Parent Group </label>
                            <div class="col-md-8">
                                <select name="parent_grp" id="parent_grp" class="form-control">
                                    <option value=""></option>
                                    <option selected="" value="13"> 1528 </option>
                                    <option value="12"> 3.482 </option>
                                    <option value="11"> 3482 </option>
                                    <option value="1"> CORPORATE </option>
                                    <option value="9"> FAMILY </option>
                                    <option value="10"> SME </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label class="col-md-4 control-label">Sub Group Name</label>
                            <div class="col-md-8"><input required="" type="text" class="form-control"
                                    name="sub_group_name" id="sub_group_name" value="TEST CLIENT">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <label class="col-md-4 control-label">Prefix Code</label>
                            <div class="col-md-8"><input value="TT" required="" type="text" class="form-control"
                                    name="prefix_code" id="prefix_code"></div>
                        </div>
                        <div class="row mt-2">
                            <label class="col-md-4 control-label"> Policy Start Date </label>
                            <div class="col-md-8"><input required="" type="text" class="form-control pick_date"
                                    name="startdate" id="" value="2019-01-01"></div>
                        </div>

                        <div class="row mt-2">
                            <label class="col-md-4 control-label"> Policy Expiry Date </label>
                            <div class="col-md-8"><input required="" type="text" class="form-control pick_date"
                                    name="dateofbirth" id="" value="2019-12-31"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8 offset-md-4">
                                <label class="kt-checkbox" cheched="">
                                    <input type="checkbox">
                                    Archived Company
                                    <span></span>
                                </label>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success float-right">Save</button>
                <button data-dismiss="modal" class="btn btn-danger float-right">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end edit client details -->

<!-- Add new client -->
<div class="modal fade" id="add_new_client">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Add New Client</h5>
            </div>
            <div class="modal-body">
                <form name="form">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 control-label"> Parent Group </label>
                                    <div class="col-md-8">
                                        <select name="parent_grp" id="parent_grp" class="form-control">
                                            <option value=""></option>
                                            <option selected="" value="13"> 1528 </option>
                                            <option value="12"> 3.482 </option>
                                            <option value="11"> 3482 </option>
                                            <option value="1"> CORPORATE </option>
                                            <option value="9"> FAMILY </option>
                                            <option value="10"> SME </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="" class="col-md-4 col-form-label">Client Group Name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 col-form-label control-label">Prefix Code</label>
                                    <div class="col-md-8"><input value="" type="text" class="form-control"
                                            name="prefix_code" id="prefix_code"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 col-form-label control-label">Contact Person</label>
                                    <div class="col-md-8"><input type="tel" class="form-control" name="prefix_code"
                                            id="prefix_code"></div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-8"><input type="email" class="form-control" name="email"
                                            id="email">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 control-label"> Policy Start Date </label>
                                    <div class="col-md-8"><input readonly type="text" class="form-control pick_date"  name="startdate" id="startdate"></div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label class="col-md-4 control-label"> Policy End Date </label>
                                    <div class="col-md-8"><input  readonly type="text" class="form-control pick_date"
                                            name="end_date" id="end_date"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success float-right">Save</button>
                <button data-dismiss="modal" class="btn btn-danger float-right">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Add new client -->

<script type="text/javascript">
    // $('#corporateGroups').DataTable({
    //     "pagingType": "full_numbers",
    //     "searching": false,
    //     "info": false,
    //     "dom": '<"top"i>rt<"bottom"flp><"clear">'
    // });
    $(".pick_date").datepicker({
        format: "dd MM yyyy",
        autoclose: true,
        orientation: "bottom auto"
    });
</script>