                    
                    </div>
                    <!--end container-->
                    
                    </section>
                    <!-- END CONTENT -->
                    
                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!-- START RIGHT SIDEBAR NAV-->
                    <aside id="right-sidebar-nav">
                        <ul id="chat-out" class="side-nav rightside-navigation">
                            <li class="li-hover">
                                <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                                <div id="right-search" class="row">
                                    <form class="col s12">
                                        <div class="input-field">
                                            <i class="mdi-action-search prefix"></i>
                                            <input id="icon_prefix" type="text" class="validate">
                                            <label for="icon_prefix">Search</label>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="li-hover">
                                <ul class="chat-collapsible" data-collapsible="expandable">
                                    <li>
                                        <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                                        <div class="collapsible-body recent-activity">
                                            <div class="recent-activity-list chat-out-list row">
                                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                                </div>
                                                <div class="col s9 recent-activity-list-text">
                                                    <a href="#">just now</a>
                                                    <p>Jim Doe Purchased new equipments for zonal office.</p>
                                                </div>
                                            </div>
                                            <div class="recent-activity-list chat-out-list row">
                                                <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                                </div>
                                                <div class="col s9 recent-activity-list-text">
                                                    <a href="#">Yesterday</a>
                                                    <p>Your Next flight for USA will be on 15th August 2015.</p>
                                                </div>
                                            </div>
                                            <div class="recent-activity-list chat-out-list row">
                                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                                </div>
                                                <div class="col s9 recent-activity-list-text">
                                                    <a href="#">5 Days Ago</a>
                                                    <p>Natalya Parker Send you a voice mail for next conference.</p>
                                                </div>
                                            </div>
                                            <div class="recent-activity-list chat-out-list row">
                                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                                </div>
                                                <div class="col s9 recent-activity-list-text">
                                                    <a href="#">Last Week</a>
                                                    <p>Jessy Jay open a new store at S.G Road.</p>
                                                </div>
                                            </div>
                                            <div class="recent-activity-list chat-out-list row">
                                                <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                                </div>
                                                <div class="col s9 recent-activity-list-text">
                                                    <a href="#">5 Days Ago</a>
                                                    <p>Natalya Parker Send you a voice mail for next conference.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                    <!-- LEFT RIGHT SIDEBAR NAV-->
                    
                    </div>
                    <!-- END WRAPPER -->
                
                </div>
                <!-- END MAIN -->
    
            <!-- ================================================
            Scripts
            ================================================ -->
            
            <!-- jQuery Library -->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery-1.11.2.min.js')?>"></script>
            <!--materialize js-->
            <script type="text/javascript" src="<?= base_url('assets/js/materialize.min.js')?>"></script>
            <!--scrollbar-->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
            <!--numeral js-->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/numeral/numeral.min.js')?>"></script>
            <!-- easy autocomplete -->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/easy-autocomplete/jquery.easy-autocomplete.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/js/app/anggotaSearch.js?v=1.0.0')?>"></script>

            <script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery-input-mask/jquery.mask.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/js/app/maskConfig.js')?>"></script>
            <!-- dataTables js plugins-->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/dtables/jquery.dataTables.min.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/dtables/dataTables.material.min.js')?>"></script>
            <!-- dataTables js plugins-->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/printThis.js')?>"></script>
            <!-- chartist -->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/chartist-js/chartist.min.js')?>"></script>

            <!-- sparkline -->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
            <script type="text/javascript" src="<?= base_url('assets/js/plugins/sparkline/sparkline-script.js')?>"></script>
            
            
            <!--plugins.js - Some Specific JS codes for Plugin Settings-->
            <script type="text/javascript" src="<?= base_url('assets/js/plugins.min.js')?>"></script>
            <!--custom-script.js - Add your own theme custom JS-->
            <script type="text/javascript" src="<?= base_url('assets/js/custom-script.js')?>"></script>
            <!-- Toast Notification -->
            <script type="text/javascript">
               
                setInterval(function () {
                    $('.user-welcome').fadeOut('slow');
                },2500);
                setInterval(function () {
                    $('#card-alert').fadeOut('slow');
                },2500);

                function printContent(el) {
                    var restorepage = document.body.innerHTML;
                    var printcontent = document.getElementById(el).innerHTML;
                    document.body.innerHTML = printcontent;
                    window.print();
                    document.body.innerHTML = restorepage;
                }
            </script>
            <script type="text/javascript">
                $(document).ready(function() {

                    var baseURL = window.location.origin+'/order-app';
                    
                    $('#pelanggan-table').DataTable( {
                        "order": [[ 1, "asc" ]],
                        "pageLength": 10,
                        language: {
                            url: baseURL+'/assets/js/plugins/dtables/indonesia.json'
                        },
                        columnDefs: [
                            {
                                targets: [ 0, 1, 2 ],
                                className: 'mdl-data-table__cell--non-numeric'
                            }
                        ]
                    } );

                    $('#barang-table').DataTable({
                        "order": [[ 5, "asc" ]],
                        "pageLength": 10,
                        language: {
                            url: baseURL+'/assets/js/plugins/dtables/indonesia.json'
                        },
                        columnDefs: [
                            {
                                targets: [ 0, 1, 2 ],
                                className: 'mdl-data-table__cell--non-numeric'
                            }
                        ]
                    });

                    $('#pesanan-table').DataTable({
                        "order": [[ 5, "desc" ]],
                        "pageLength": 10,
                        language: {
                            url: baseURL+'/assets/js/plugins/dtables/indonesia.json'
                        },
                        columnDefs: [
                            {
                                targets: [ 0, 1, 2 ],
                                className: 'mdl-data-table__cell--non-numeric'
                            }
                        ]
                    });
                } );
            </script>
        </body>
    
    </html>
