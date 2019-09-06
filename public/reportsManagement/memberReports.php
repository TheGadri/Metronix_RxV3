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
                                        SELECT DURATION
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="row justify-content-center">
                                            <span class="col-5">
                                                <div class="input-group">
                                                    <input class="form-control date" readonly="" type="text"
                                                        id="form_start_datetime" name="startDate"
                                                        placeholder="Start Date">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar glyphicon-th"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </span>
                                            <span class="col-5">
                                                <div class="input-group">
                                                    <input class="form-control date" readonly="" type="text"
                                                        id="form_end_datetime" name="endDate" placeholder="End Date">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="la la-calendar glyphicon-th"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </span>

                                        </div>
                                        <div class="row mt-3 justify-content-center">
                                            <span class="col-5 "><select class="form-control" name="captured_date"
                                                    id="captured_date">
                                                    <option value="date_of_consultation" selected="">Date of
                                                        Consultation
                                                    </option>
                                                    <option value="date_added">Date Captured</option>
                                                    <option value="date_audited">Date Audited</option>
                                                </select></span>
                                            <span class="col-5">
                                                <select class="form-control" name="users_name" id="users_name">
                                                    <option value="all" selected="">All Users</option>
                                                    <option value="aguinaldo.alberto">aguinaldo.alberto</option>
                                                    <option value="mario.antonio">mario.antonio</option>
                                                    <option value="alexandre.azevedo">alexandre.azevedo</option>
                                                    <option value="benjamin.calipe">benjamin.calipe</option>
                                                    <option value="david.caluvala">david.caluvala</option>
                                                    <option value="marcia.cardoso">marcia.cardoso</option>
                                                    <option value="edimar.cardoso">edimar.cardoso</option>
                                                    <option value="humberto.cassenda">humberto.cassenda</option>
                                                    <option value="miguel.castro">miguel.castro</option>
                                                    <option value="sandra.costa">sandra.costa</option>
                                                    <option value="carlos.domingos">carlos.domingos</option>
                                                    <option value="hipolito.elisio">hipolito.elisio</option>
                                                    <option value="dennis .falcao">dennis .falcao</option>
                                                    <option value="alice.faria">alice.faria</option>
                                                    <option value="domingos.fernandes">domingos.fernandes</option>
                                                    <option value="helena.ferrao">helena.ferrao</option>
                                                    <option value="ana.ferraz">ana.ferraz</option>
                                                    <option value="madalena.ferreira">madalena.ferreira</option>
                                                    <option value="victoria.figueiredo.2">victoria.figueiredo.2</option>
                                                    <option value="victoria.figueiredo">victoria.figueiredo</option>
                                                    <option value="domingos.gouveia">domingos.gouveia</option>
                                                    <option value="vladimiro.jacinto">vladimiro.jacinto</option>
                                                    <option value="mario.jaime">mario.jaime</option>
                                                    <option value="marcial.junjuvili">marcial.junjuvili</option>
                                                    <option value="paulino.liahuka">paulino.liahuka</option>
                                                    <option value="tatiana .lopes">tatiana .lopes</option>
                                                    <option value="sadila.machado">sadila.machado</option>
                                                    <option value="sergio.manuel">sergio.manuel</option>
                                                    <option value="administrator">administrator</option>
                                                    <option value="pedro.matadi">pedro.matadi</option>
                                                    <option value="ekaterina.maximova">ekaterina.maximova</option>
                                                    <option value="marco.melo">marco.melo</option>
                                                    <option value="antonio.mendonca">antonio.mendonca</option>
                                                    <option value="preciosa.mussole">preciosa.mussole</option>
                                                    <option value="jocelanea.neto">jocelanea.neto</option>
                                                    <option value="jean-baptiste.paturle">jean-baptiste.paturle</option>
                                                    <option value="pedro.paulo">pedro.paulo</option>
                                                    <option value="walter.paulo">walter.paulo</option>
                                                    <option value="marisa.pedro">marisa.pedro</option>
                                                    <option value="jean-benoit.perche">jean-benoit.perche</option>
                                                    <option value="jose.santos">jose.santos</option>
                                                    <option value="florinda.sepisso">florinda.sepisso</option>
                                                    <option value="evaldo.soares">evaldo.soares</option>
                                                    <option value="roelof.van staden">roelof.van staden</option>
                                                    <option value="victoria.ventura">victoria.ventura</option>
                                                    <option value="joao.viegas">joao.viegas</option>
                                                    <option value="paula.vite">paula.vite</option>
                                                </select>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:13px;">
                                        CLIENT NAMES
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border-bottom:none">
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
                                    <td style="font-size:13px">
                                        PROVIDER NAMES
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" name="provider_id[]" id="provider_id"
                                            multiple="true">
                                            <option value="125460">AFRISAUDE</option>
                                            <option value="94373">AFRUS Alvalade Luanda</option>
                                            <option value="98142">Angola LNG - Out of Network Provider</option>
                                            <option value="73398">Atelier Mutamba Luanda</option>
                                            <option value="73396">Biodente Maculusso Luanda</option>
                                            <option value="125465">BOM SENSO FISIOTERAPIA </option>
                                            <option value="95442">BP - Out Of Network Hospital</option>
                                            <option value="100593">Caridade Nova Vida Luanda</option>
                                            <option value="123801">CDDAC Cabinda</option>
                                            <option value="106749">CDI Maculusso Luanda</option>
                                            <option value="94186">CEMEDIC Cruzeiro Luanda</option>
                                            <option value="122411">Centro Ana Carolina Quifica Luanda</option>
                                            <option value="125440">Centro Fisioterapia FIKCIT Maianga Luanda</option>
                                            <option value="95804">Chevron - Out of Network</option>
                                            <option value="123957">Cligest 1</option>
                                            <option value="123972">cligest 10</option>
                                            <option value="123973">cligest 11</option>
                                            <option value="123958">Cligest 2</option>
                                            <option value="123959">Cligest 3</option>
                                            <option value="123960">Cligest 4</option>
                                            <option value="123961">cligest 5</option>
                                            <option value="123966">cligest 6</option>
                                            <option value="123967">cligest 7</option>
                                            <option value="123968">cligest 8</option>
                                            <option value="123969">cligest 9</option>
                                            <option value="123555">Cligest Cabinda</option>
                                            <option value="125441">Cligest Camana Luanda</option>
                                            <option value="94179">Cligest Maculusso Luanda</option>
                                            <option value="123744">Cligest Panguila Luanda</option>
                                            <option value="122955">Cligest Viana</option>
                                            <option value="122365">Cligest Viana Luanda</option>
                                            <option value="122151">Cligest Zango Luanda</option>
                                            <option value="125461">Clínica AVELEDI Zango Luanda</option>
                                            <option value="125463">CLINICA CASTELO Morro Bento Luanda</option>
                                            <option value="94184">Clínica Climed Luanda</option>
                                            <option value="94180">Clínica Danfran Lubango</option>
                                            <option value="94178">Clínica do Porto Lobito</option>
                                            <option value="120238">Clinica Espirito Santo Vila Alice Luanda</option>
                                            <option value="73393">Clínica Horton Maianga Luanda</option>
                                            <option value="94175">Clínica International CSE/SOS llha - ONLY BP &amp;
                                                Esso</option>
                                            <option value="75628">Clinica Multiperfil Morro Bento Luanda</option>
                                            <option value="109320">Clinica Multiperfil Morro Bento Luanda</option>
                                            <option value="125464">Clinica Privada do Alvalade Rua Emilio Mbindi nº 20
                                                -Luanda</option>
                                            <option value="121449">Clínica Raiar da Vida Bie</option>
                                            <option value="75629">CSE ACACIAMED Sao Filipe Benguela</option>
                                            <option value="125455">CSE Alto Chicapa Luanda</option>
                                            <option value="110456">CSE Bengo</option>
                                            <option value="125442">CSE BNA Maianga Luanda</option>
                                            <option value="73392">CSE Cacuaco Luanda</option>
                                            <option value="125469">CSE CUNENE </option>
                                            <option value="110452">CSE Ethos Maianga Luanda</option>
                                            <option value="124167">CSE Fisioterapia Talatona Luanda</option>
                                            <option value="108278">CSE Huambo</option>
                                            <option value="119665">CSE Huambo</option>
                                            <option value="110458">CSE Huila</option>
                                            <option value="75596">CSE Ilha Luanda</option>
                                            <option value="124651">CSE Ilha Luanda</option>
                                            <option value="110461">CSE Kuando Kubango</option>
                                            <option value="110459">CSE Kunene</option>
                                            <option value="110462">CSE Kwanza Norte</option>
                                            <option value="105027">CSE Lobito</option>
                                            <option value="119698">CSE LOBITO</option>
                                            <option value="110460">CSE Lubango</option>
                                            <option value="121825">CSE Lubmed 4 Abril Cabinda</option>
                                            <option value="94177">CSE Lubmed Cabinda</option>
                                            <option value="110463">CSE Lunda Norte Dundo</option>
                                            <option value="110464">CSE Lunda Norte Lucapa</option>
                                            <option value="110465">CSE Lunda Sul Saurimo</option>
                                            <option value="110466">CSE Malange</option>
                                            <option value="110467">CSE Mbanza Congo</option>
                                            <option value="94182">CSE Medis Soyo</option>
                                            <option value="110468">CSE Moxico</option>
                                            <option value="110469">CSE Namibe</option>
                                            <option value="105607">CSE Porto Amboim</option>
                                            <option value="121930">CSE Raiar da Vida Bie</option>
                                            <option value="110453">CSE RNA Alvalade Luanda</option>
                                            <option value="122311">CSE Saurimo</option>
                                            <option value="110470">CSE Servimed Uije </option>
                                            <option value="124373">CSE SOYO</option>
                                            <option value="123334">CSE Soyo</option>
                                            <option value="110471">CSE Sumbe</option>
                                            <option value="106963">CSE Talatona Luanda</option>
                                            <option value="119694">CSE Zango</option>
                                            <option value="109364">CSE Zango Luanda</option>
                                            <option value="125438">CSE- Alto Chicapa CATOCA</option>
                                            <option value="119768">Espirito Santo Luanda</option>
                                            <option value="95438">ESSO - Out of Network Clinic</option>
                                            <option value="95440">ESSO - Out of Network Hospital</option>
                                            <option value="95441">ESSO - Out Of Network Pharmacy</option>
                                            <option value="125467">FARMÁCIA CABINDAFARMA, 1º DE MAIO, CABINDA</option>
                                            <option value="119566">Farmácia Central (Luanda)</option>
                                            <option value="125466">FARMACIA CENTRAL DO PORTO</option>
                                            <option value="125443">Farmácia Central Futungo Luanda</option>
                                            <option value="125452">Farmácia Central Gamek Luanda</option>
                                            <option value="125444">Farmacia Central Golf II Luanda</option>
                                            <option value="121469">Farmacia Central Samba Luanda</option>
                                            <option value="125454">Farmacia Central Samba Luanda</option>
                                            <option value="94193">Farmácia Central Serpa Pinto Luanda</option>
                                            <option value="125445">Farmácia Central Viana Luanda</option>
                                            <option value="73402">Farmácia Higiene</option>
                                            <option value="125468">FARMÁCIA MECOFARMA BAIXA LUANDA</option>
                                            <option value="125446">Farmácia Mecofarma Central Lubango</option>
                                            <option value="125447">Farmácia Mecofarma Cine Atlântico Luanda</option>
                                            <option value="125448">Farmácia Mecofarma Ginga Lubango</option>
                                            <option value="125449">Farmácia Mecofarma Kinaxixi Luanda</option>
                                            <option value="73400">Farmácia Mecofarma Maculusso Luanda</option>
                                            <option value="106634">Farmácia Mecofarma Maianga Luanda</option>
                                            <option value="103682">Farmácia Mecofarma Talatona Brisas Luanda</option>
                                            <option value="103676">Farmácia Mecofarma Talatona Conhas Luanda</option>
                                            <option value="103675">Farmácia Mecofarma Viana Park Luanda</option>
                                            <option value="122441">Farmácia Mecofarma Viana Vila Luanda</option>
                                            <option value="94369">Girassol Maianga Luanda</option>
                                            <option value="125457">GMLAB INGOMBOTA LUANDA</option>
                                            <option value="121600">INTERNATIONAL SOS ILHA</option>
                                            <option value="119580">International SOS Ilha Luanda</option>
                                            <option value="94336">International SOS JHB</option>
                                            <option value="125450">International SOS Maianga Luanda</option>
                                            <option value="119664">International SOS TALATONA</option>
                                            <option value="119503">International SOS Talatona Luanda</option>
                                            <option value="94183">Kwanda Base Soyo</option>
                                            <option value="73391">LMC Ingombota Luanda</option>
                                            <option value="">LMC Ingombota Luanda</option>
                                            <option value="125439">LMC Talatona Luanda</option>
                                            <option value="108082">Luanda Medical Center</option>
                                            <option value="108317">Luanda Medical Center</option>
                                            <option value="125462">Malo Clinic Bairro Azul Luanda</option>
                                            <option value="73394">Medigroup Mutamba Luanda</option>
                                            <option value="73397">Miradente Cruzeiro Luanda</option>
                                            <option value="125453">Miradente Cruzeiro Luanda</option>
                                            <option value="125451">Miradente Talatona Luanda</option>
                                            <option value="73399">Mundóptica Kinaxixi Luanda</option>
                                            <option value="125456">PALANQUINHAS MACULUSSO LUANDA</option>
                                            <option value="102851">Peandra Maculusso Luanda</option>
                                            <option value="105600">Peandra Talatona Luanda</option>
                                            <option value="94185">PROIN Ingombota Luanda</option>
                                            <option value="125378">Psicologa Africana Luanda</option>
                                            <option value="125459">SPHERA BLUOSHN</option>
                                            <option value="120147">Unitel - Out of Network</option>
                                            <option value="125458">Z TEST Provider</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:13px;">
                                        CLAIM TYPE
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" name="claim_type" id="claim_type">
                                            <option value="not">Not Audited</option>
                                            <option value="done">Audited</option>
                                            <option selected="" value="both">All Types (Audited &amp; Non Audited)
                                            </option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="font-size:13px;">
                                        REPORT FORMAT
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" name="report_format" id="report_format">
                                            <option value="nested">Nested Format</option>
                                            <option selected="" value="normal">Normal Format</option>
                                        </select>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(".date").datepicker({
                    format: "dd MM yyyy",
                    autoclose: true,
                    orientation: "bottom auto"
                });
            </script>

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
                                            <input type="radio" name="radio1">Claims Details Report
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" name="radio1">Detailed Report-Items
                                            <span></span>
                                        </label>
                                        <label class="kt-radio">
                                            <input type="radio" checked="checked" name="radio1">Summary Report
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
            </div>
        </div>
    </div>
</div>