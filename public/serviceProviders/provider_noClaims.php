<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                List of Service Providers Without Claims
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Refresh</button>
                <!-- <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                    <a class="dropdown-item" href="javascript:;"><i class="flaticon-list-1"></i> List of Corporate</a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal"
                        data-target="#attachNewHealthPlan"><i class="flaticon-list-1"></i> Attach New Plan
                        Groups</a>
                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#attachNewPayment"><i
                            class="flaticon-list-1"></i> Attach New Payment
                        Option</a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="row mb-3">
            <div class="col-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Text">
                    <div class="input-group-append">
                        <button class="btn btn-success btn-icon" type="button"><i
                                class="flaticon-search-magnifier-interface-symbol"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <select name="" id="" class="form-control">
                    <option value="" selected disabled>Sub Group Name</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="listOfServiceProvider">
                <thead class="table-warning">
                    <tr>
                        <th>#</th>
                        <th>Service Providers</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr onclick="getstep('serviceProviderDetails')">
                        <td>1</td>
                        <td>Covered (Per Member)</td>
                        <td><button class="btn btn-icon btn-clean"><i class="flaticon-exclamation-1"></i></button></td>
                    </tr>
                </tbody>
            </table>
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