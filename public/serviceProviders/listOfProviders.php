<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                List of Service Providers
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Refresh</button>
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
                        <tr class="kt-datatable__row p-5" style="left: 0px;">
                            <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                    style="width: 100px;">#</span></th>
                            <th data-field="service_providers" class="kt-datatable__cell kt-datatable__cell--sort"><span
                                    style="width: 100px;">Service Providers</span></th>
                            <th data-field="action" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span style="width: 100px;">Action</span></th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body">
                        <tr onclick="getstep('serviceProviderDetails')" data-row="0" class="kt-datatable__row"
                            style="left: 0px;">
                            <th data-field="id" class="kt-datatable__cell no_v"><span>1</span>
                            </th>
                            <td data-field="service_providers" class="kt-datatable__cell no_v"><span>Afrisuade</span>
                            </td>
                            <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                        <i class="la la-exclamation-circle"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr onclick="getstep('serviceProviderDetails')" data-row="1" class="kt-datatable__row"
                            style="left: 0px;">
                            <th data-field="id" class="kt-datatable__cell no_v"><span>2</span>
                            </th>
                            <td data-field="service_providers" class="kt-datatable__cell no_v"><span>Alfus Alvado</span>
                            </td>
                            <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                        <i class="la la-exclamation-circle"></i> </a>
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
<script>
    $("#listOfServiceProvider").DataTable({
        "searching": false,
        "dom": '<<t>lip>',
        "pagingType": "full_numbers"
    });
</script>