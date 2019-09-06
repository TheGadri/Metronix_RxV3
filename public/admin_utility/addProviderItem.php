<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile"
                id="kt_page_portlet">
                <div class="kt-portlet__head kt-portlet__head--lg" style="">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Add New Item
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success btn-sm"><i
                                    class="flaticon-refresh"></i>
                                Refresh</button>
                            <button type="button"
                                class="btn btn-outline-success dropdown-toggle dropdown-toggle-split btn-sm"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, 38px, 0px);">
                                <a onclick="getstep('provider_items')" class="dropdown-item"
                                    href="javascript:;"><i class="flaticon-list-1"></i>Provider List</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <form class="kt-form" id="kt_form">
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Provider Item Information:
                                        </h3>
                                        <div class="form-group row">
                                        <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Item Name</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" value="Item Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Item Price</label>
                                            <div class="col-md-6">
                                                <input class="form-control" type="text" value="20">
                                            </div>
                                        </div>
                                        <div class="form-group form-group-last row">
                                        <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Item Category</label>
                                            <div class="col-md-6">
                                                <select name="service" id="service" class="form-control">
                                                    <option value="" selected="">Please Select Category</option>
                                                    <option value="Administrative Services">Administrative Services
                                                    </option>
                                                    <option value="Consultations">Consultations</option>
                                                    <option value="Consumables">Consumables</option>
                                                    <option value="Cosmetics / plastic Surgery">Cosmetics / plastic
                                                        Surgery</option>
                                                    <option value="Dental Services">Dental Services</option>
                                                    <option value="Diagnostic Investigations">Diagnostic Investigations
                                                    </option>
                                                    <option value="Drugs">Drugs</option>
                                                    <option value="Emergency care">Emergency care</option>
                                                    <option value="Hearing aids">Hearing aids</option>
                                                    <option value="Hospital Accommodation &amp;  Services">Hospital
                                                        Accommodation &amp; Services</option>
                                                    <option value="Imagiology">Imagiology</option>
                                                    <option value="Laboratory">Laboratory</option>
                                                    <option value="Maternity">Maternity</option>
                                                    <option value="Medical Procedures">Medical Procedures</option>
                                                    <option value="Mortuary Service">Mortuary Service</option>
                                                    <option value="Nutrition">Nutrition</option>
                                                    <option value="Occupational therapy">Occupational therapy</option>
                                                    <option value="Ophthalmic &amp; Optometry">Ophthalmic &amp;
                                                        Optometry</option>
                                                    <option value="Physiotherapy">Physiotherapy</option>
                                                    <option value="Psychiatry">Psychiatry</option>
                                                    <option value="Psychology">Psychology</option>
                                                    <option value="Specialist Consultations">Specialist Consultations
                                                    </option>
                                                    <option value="Speech therapy">Speech therapy</option>
                                                    <option value="Sundries">Sundries</option>
                                                    <option value="Surgical Procedures">Surgical Procedures</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Default Deduction:</h3>
                                        <div class="form-group form-group-last row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="">
                                                <div class="kt-checkbox-inline col-md-14">
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Hearing Aid
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-checkbox col-md-2">
                                                        <input type="checkbox">Psychology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Default Deduction Plans:</h3>
                                        <div class="form-group form-group-last row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <label class="col-md-2 col-form-label">Select Number of Plans</label>
                                            <div class="col-md-6">
                                                <div>
                                                    <select name="total_selected" class="form-control" onchange="">
                                                        <option value=""> Select </option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>
                                <div class="kt-section kt-section--last">
                                    <div class="kt-section__body">
                                        <h3 class="kt-section__title kt-section__title-sm">Search Options:</h3>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <div class="kt-checkbox-inline">
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">Out-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox" checked="">In-Patient
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Maternity
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Dental
                                                        <span></span>
                                                    </label>
                                                    <label class="col-md-2 kt-checkbox">
                                                        <input type="checkbox">Ophtalmology
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="row">
                                        <div class="col kt-align-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success">
                                                    <span class="kt-hidden-mobile">Save</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2"></div>
                            </div>
                    </form>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
    </div>
</div>