<div class="kt-portlet">
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-8">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <div class="kt-portlet__head-title">
                                Select Your Criteria
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <tbody>
                                <tr>
                                    <td style="font-size:13px;">
                                        CLIENT NAMES
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <select class="form-control" name="client_id[]" id="client_id" multiple="true">
                                            <option value="75633">Angola LNG</option>
                                            <option value="62395">BP Angola (Block 18) B.V.</option>
                                            <option value="80258">Chevron</option>
                                            <option value="100284">Cobalt</option>
                                            <option value="102938">ENI</option>
                                            <option value="75632">Esso</option>
                                            <option value="104037">Schlumberger Technical Service INC</option>
                                            <option value="80259">TEST CLIENT</option>
                                            <option value="110319">UNITEL.S.A</option>
                                        </select>
                                    </td>
                                </tr> 
                                <tr>
                                    <td style="font-size:13px;">
                                        MEMBER STATUS
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" name="claim_type" id="member_status">
                                            <option value="not">Active</option>
                                            <option value="done">In-Active</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <div class="kt-portlet__head-title">
                                Report Type
                            </div>
                        </div>
                    </div>
                    <div style="max-height:400px; overflow-y:auto;">
                        <div class="table-responsive">
                            <div class="kt-portlet__body ">
                                <div class="col-9">
                                    <div class="kt-radio-list">
                                        <label class="kt-radio">
                                            <input type="radio" name="radio1" checked="true">Members Details Report
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="radio1">Detailed Utilisation Report
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot kt-align-right col-md-12">
                <button class="btn btn-success btn-sm">Print Report</button>
                <button class="btn btn-warning btn-sm">Excel Report</button>
            </div>
        </div>
    </div>
</div>