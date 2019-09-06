<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon-list-1"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                Edit Security Roles
            </h3>
        </div>
        <!-- <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Refresh</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                    <a onclick="getstep('bulk_members_deactivate')" class="dropdown-item" href="javascript:;"><i
                            class="flaticon2-group"></i> Bulk Member Deactivation</a>
                </div>
            </div>
        </div> -->
    </div>
    <div class="kt-portlet__body">
        <div class="form-group row">
            <label class="col-md-1 col-form-label">Role Name</label>
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Role name" name="role_name" id="role_name">
            </div>
            <label class="col-md-1 col-form-label text-right">Limit</label>
            <div class="col-md-3">
                <input type="number" class="form-control" placeholder="2000" name="role_name" id="role_name">
            </div>
            <div class="col-md-4">
               <button class="btn btn-success">Update Role</button>
            </div>
        </div>
        <div class="kt-portlet__body kt-portlet__body--fit">
            <!--begin: Datatable -->
            <div class="table-responsive" style="max-height:600px; overflow-y:auto">
                <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                    style="">
                    <table class="table table-hover">
                        <thead class="kt-datatable__head table-warning">
                            <tr class="kt-datatable__row p-5" style="left: 0px;">
                                <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort"><span>#</span>
                                </th>
                                <th data-field="name" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Name</span></th>
                                <th data-field="permission" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Authorization Limit</span></th>
                                <th data-field="permission" class="kt-datatable__cell kt-datatable__cell--sort">
                                    <span>Action</span></th>
                            </tr>
                        </thead>
                        <tbody class="kt-datatable__body">
                            <tr onclick="" data-row="0" class="kt-datatable__row" style="left: 0px;">
                                <td data-field="surname" class="kt-datatable__cell no_v"><span>1</span>
                                </td>
                                <td data-field="firstname" class="kt-datatable__cell no_v"><span>ADJUDICATOR</span>
                                </td>
                                <td data-field="date_of_birth" class="kt-datatable__cell no_v">
                                    <span>5000</span>
                                </td>
                                <td data-field="date_of_birth" class="kt-datatable__cell no_v">
                                    <a href="javascript:;" class="btn btn-clean btn-sm btn-icon btn-icon-md"><i class="la la-exclamation-circle"></i></a>
                                </td>
                            </tr>
                            <tr onclick="" data-row="0" class="kt-datatable__row" style="left: 0px;">
                                <td data-field="surname" class="kt-datatable__cell no_v"><span>1</span>
                                </td>
                                <td data-field="firstname" class="kt-datatable__cell no_v"><span>ADMINISTRATIVE OFFICER</span>
                                </td>
                                <td data-field="date_of_birth" class="kt-datatable__cell no_v">
                                    <span>5000</span>
                                </td>
                                <td data-field="date_of_birth" class="kt-datatable__cell no_v">
                                    <a href="javascript:;" class="btn btn-clean btn-sm btn-icon btn-icon-md"><i class="la la-exclamation-circle"></i></a>
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
            </div>
            <!--end: Datatable -->
        </div>
    </div>
</div>