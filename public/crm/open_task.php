<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <div class="kt-portlet__head-title">
                Open Task
            </div>
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
                    <a data-toggle="modal" data-target="#add_task_note" class="dropdown-item" href="javascript:;"><i
                            class="flaticon2-plus"></i> Add Task / Note / Activity </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <!--begin: Search Form -->
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
                                        <option value="status">Status</option>
                                        <option value="priority">Priority</option>
                                        <option value="subject">Subject</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Search Form -->
        <div class="kt-portlet__body kt-portlet__body--fit">
            <!--begin: Datatable -->
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data"
                style="">
                <table class="table table-hover">
                    <thead class="kt-datatable__head table-warning">
                        <tr class="kt-datatable__row p-5" style="left: 0px;">
                            <th data-field="id" class="kt-datatable__cell kt-datatable__cell--sort"><span></span></th>
                            <th data-field="datetime" class="kt-datatable__cell kt-datatable__cell--sort"><span>Date
                                    Time</span></th>
                            <th data-field="subject" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Subject</span></th>
                            <th data-field="description" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Detail / Description</span></th>
                            <th data-field="status" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Status</span></th>
                            <th data-field="priority" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Priority</span></th>
                            <th data-field="task_type" class="kt-datatable__cell kt-datatable__cell--sort"><span>Task
                                    Type</span></th>
                            <th data-field="assign_to" class="kt-datatable__cell kt-datatable__cell--sort"><span>Assign
                                    To</span></th>
                            <th data-field="code" class="kt-datatable__cell kt-datatable__cell--sort"><span>#</span>
                            </th>
                            <th data-field="action" class="kt-datatable__cell kt-datatable__cell--sort">
                                <span>Action</span></th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body">
                        <tr data-toggle="modal" data-target="#task_details" data-row="0" class="kt-datatable__row"
                            style="left: 0px;">
                            <td data-field="id" class="kt-datatable__cell no_v"><span>1</span>
                            </td>
                            <td data-field="datetime" class="kt-datatable__cell no_v"><span>31/12/2000</span>
                            </td>
                            <td data-field="subject" class="kt-datatable__cell no_v"><span>PLAFOND MUNDOPTICA</span>
                            </td>
                            <td data-field="description" class="kt-datatable__cell no_v"><span>Lorem ipsum dolor sit
                                    amet consectetur</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v"><span
                                    class="badge badge-success">Open</span></td>
                            <td data-field="priority" class="kt-datatable__cell no_v"><span
                                    class="badge badge-warning">Low</span></td>
                            <td data-field="task_type" class="kt-datatable__cell no_v"><span>Question</span></td>
                            <td data-field="assign_to" class="kt-datatable__cell no_v"><span>John Doe</span></td>
                            <td data-field="code" class="kt-datatable__cell no_v"><span>10</span></td>
                            <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                            class="la la-exclamation-circle"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-toggle="modal" data-target="#note_details" data-row="0" class="kt-datatable__row"
                            style="left: 0px;">
                            <td data-field="id" class="kt-datatable__cell no_v"><span>1</span>
                            </td>
                            <td data-field="datetime" class="kt-datatable__cell no_v"><span>31/12/2000</span>
                            </td>
                            <td data-field="subject" class="kt-datatable__cell no_v"><span>PLAFOND MUNDOPTICA</span>
                            </td>
                            <td data-field="description" class="kt-datatable__cell no_v"><span>Lorem ipsum dolor sit
                                    amet consectetur</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v"><span
                                    class="badge badge-brand">Resolved</span></td>
                            <td data-field="priority" class="kt-datatable__cell no_v"><span
                                    class="badge badge-brand">Medium</span></td>
                            <td data-field="task_type" class="kt-datatable__cell no_v"><span>Question</span></td>
                            <td data-field="assign_to" class="kt-datatable__cell no_v"><span>John Doe</span></td>
                            <td data-field="code" class="kt-datatable__cell no_v"><span>10</span></td>
                            <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                            class="la la-exclamation-circle"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-toggle="modal" data-target="#note_details" data-row="0" class="kt-datatable__row"
                            style="left: 0px;">
                            <td data-field="id" class="kt-datatable__cell no_v"><span>1</span>
                            </td>
                            <td data-field="datetime" class="kt-datatable__cell no_v"><span>31/12/2000</span>
                            </td>
                            <td data-field="subject" class="kt-datatable__cell no_v"><span>PLAFOND MUNDOPTICA</span>
                            </td>
                            <td data-field="description" class="kt-datatable__cell no_v"><span>Lorem ipsum dolor sit
                                    amet consectetur</span>
                            </td>
                            <td data-field="status" class="kt-datatable__cell no_v"><span
                                    class="badge badge-warning">Pending</span></td>
                            <td data-field="priority" class="kt-datatable__cell no_v"><span
                                    class="badge badge-success">High</span></td>
                            <td data-field="task_type" class="kt-datatable__cell no_v"><span>Question</span></td>
                            <td data-field="assign_to" class="kt-datatable__cell no_v"><span>John Doe</span></td>
                            <td data-field="code" class="kt-datatable__cell no_v"><span>10</span></td>
                            <td data-field="actions" class="kt-datatable__cell no_v"><span>
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i
                                            class="la la-exclamation-circle"></i> </a>
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
                                class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px"
                                data-selected="10" tabindex="-98">
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

<!-- Modals -->
<!-- Note Details -->
<div class="modal fade" id="task_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ticket Detail for #10</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Date Created</label>
                    <label for="" class="col-md-8 col-form-label">12th Jul,19 10:53am</label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Last Updated</label>
                    <label for="" class="col-md-8 col-form-label">12th Jul,19 10:53am</label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Subject</label>
                    <label for="" class="col-md-8 col-form-label">Plafond Mundoptica</label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Detail / Description</label>
                    <label for="" class="col-md-8 col-form-label">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Hic, ad, sequi rem, quae quos ipsam repudiandae veniam dolor</label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Status</label>
                    <label for="" class="col-md-8 col-form-label"><span class="badge badge-success">Open</span></label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Priority</label>
                    <label for="" class="col-md-8 col-form-label"><span class="badge badge-brand">Meduim</span></label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Ticket Type</label>
                    <label for="" class="col-md-8 col-form-label"><span>Question</span></label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Assign To</label>
                    <label for="" class="col-md-8 col-form-label"><span>Question</span></label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Linked To</label>
                    <label for="" class="col-md-8 col-form-label"><span class="badge badge-warning text-white">19859
                            STEFAN GABRIEL DA COSTA (19859)</span></label>
                </div>
                <div class="row">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Add Note / Reply</label>
                    <div class="col-md-8">
                        <textarea id="my-textarea" class="form-control" name="" rows="3"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-2 col-form-label kt-font-bold">Update Status</label>
                    <div class="col-md-8">
                        <select id="my-select" class="custom-select" name="">
                            <option>Text</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="modal-footer kt-align-right">
                <button type="button" class="btn btn-success">Save Info</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add task Note Log -->
<div class="modal fade" id="add_task_note" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-success nav-tabs-line-2x" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#task" role="tab">
                            <i class="la la-plus"></i> Task / Assign
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#note" role="tab">
                            <i class="la la-plus"></i> Note
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#log" role="tab">
                            <i class="la la-plus"></i>Log Activity
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="task" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <input name="subject" id="subject" type="text" class="form-control"
                                    placeholder="Subject of Text">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Type</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Select Status</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Select Priority</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Assign To</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Link To</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter to search">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <textarea id="my-textarea" class="form-control" name="" rows="3"
                                    placeholder="Description of Task"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Company Name</th>
                                                <th>Company Code</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor</td>
                                                <td>L9900233</td>
                                                <td>32113</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="kt-separator kt-separator--dashed"></div>
                        <div class="row mt-3">
                            <div class="col kt-align-right">
                                <button type="button" class="btn btn-success">Create Task</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="note" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <textarea id="my-textarea" class="form-control" name="" rows="3"
                                    placeholder="Type Note"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Link To</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter to search">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Member No.</th>
                                                <th>Member Name</th>
                                                <th>Member Plan</th>
                                                <th>Employer / Client</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor</td>
                                                <td>L9900233</td>
                                                <td>32113</td>
                                                <td>L9900233</td>
                                                <td>32113</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="kt-separator kt-separator--dashed"></div>
                        <div class="row mt-3">
                            <div class="col kt-align-right">
                                <button type="button" class="btn btn-success">Create Note</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="log" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <textarea id="my-textarea" class="form-control" name="" rows="3"
                                    placeholder="Type Note"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option value="">Log Out Going Call</option>
                                    <option value="">Log In coming Call</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option value="">Line Busy</option>
                                    <option value="">No answer</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <select id="my-select" class="form-control" name="">
                                    <option disabled selected>Link To</option>
                                    <option value="">Question</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Enter to search">
                            </div>
                        </div>
                        <div class="kt-separator kt-separator--dashed"></div>
                        <div class="row mt-3">
                            <div class="col kt-align-right">
                                <button type="button" class="btn btn-success">Save Activity</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer kt-align-right">
                <button type="button" class="btn btn-success">Save Info</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!-- end MOdals -->