<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                New Service Provider Details
            </h3>
        </div>
        <!-- <div class="kt-portlet__head-toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-success btn-sm"><i class="flaticon-refresh"></i>
                    Menu</button>
                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
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
                </div>
            </div>
        </div> -->
    </div>
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="providerId" class="col-4 col-form-label">Provider ID</label>
                            <div class="col-8">
                                <input class="form-control" type="text" id="providerId" name="providerId">
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="outNetwork" class="col-4 col-form-label">Out of Network</label>
                            <div class="col-8">
                                <select id="outNetwork" class="form-control" name="outNetwork">
                                    <option selected disabled>Select</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="facilityName" class="col-4 col-form-label">Facility Name</label>
                            <div class="col-8">
                                <input class="form-control" type="text" id="facilityName" name="facilityName">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="facilityType" class="col-4 col-form-label">Facility Type</label>
                            <div class="col-8">
                                <select id="facilityType" class="form-control" name="facilityType">
                                    <option selected disabled>Select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="facilityTelephone" class="col-4 col-form-label">Facility Contact No.</label>
                            <div class="col-8">
                                <input class="form-control" type="tel" name="facilityTelephone" id="facilityTelephone">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="mailing" class="col-4 col-form-label">Mailing Address</label>
                            <div class="col-8">
                                <input class="form-control" type="email" name="mailing" id="mailing">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="apCode" class="col-4 col-form-label">AP Code</label>
                            <div class="col-8">
                                <input class="form-control" type="email" name="apCode" id="apCode">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="zone" class="col-4 col-form-label">Zone</label>
                            <div class="col-8">
                                <input class="form-control" type="text" id="zone" name="zone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="physicalAddress" class="col-4 col-form-label">Physical Address</label>
                            <div class="col-8">
                                <input class="form-control" type="number" id="physicalAddress" name="physicalAddress">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="facilityStatus" class="col-4 col-form-label">Facility Status</label>
                            <div class="col-8">
                                <select id="facilityType" class="form-control" name="facilityType">
                                    <option selected disabled>Active</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="region" class="col-4 col-form-label">Region</label>
                            <div class="col-8">
                                <select class="form-control" name="region" id="region">
                                    <option value="" selected disabled>Select</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="contactPerson" class="col-4 col-form-label">Contact Person</label>
                            <div class="col-8">
                                <input type="text" class="form-control" id="contactPerson" name="contactPerson">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-2 row">
                            <label for="contactPersonPhone" class="col-4 col-form-label">Contact Person Tel No.</label>
                            <div class="col-8">
                                <input type="text" class="form-control" id="contactPersonPhone"
                                    name="contactPersonPhone">
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
                <button type="submit" class="btn btn-success">Save Provider Info</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </div>
</div>