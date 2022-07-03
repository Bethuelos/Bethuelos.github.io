            </div>


            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; Voler</p>
                    </div>
                    <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    

    <!-- <script src="assets/js/vendors.js"></script> -->

    <script src="assets/js/popper.min.js"></script>
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->

    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/jquery-3.5.1.js"></script> -->
    
    <!-- Include Choices JavaScript -->
    <script src="assets/vendors/choices.js/choices.min.js"></script>

    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>

    <script src="assets/js/bootstrap-growl.min.js"></script>

    <!-- <script src="assets/js/notification.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*--------------------------------------
                 Notifications & Dialogs
             ---------------------------------------*/
            /*
             * Notifications
             */
            function notify(from, align, icon, type, animIn, animOut){
                $.growl({
                    icon: icon,
                    title: ' Bootstrap Growl ',
                    message: 'Turning standard Bootstrap alerts into awesome notifications',
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 30,
                        y: 30
                    },
                    spacing: 10,
                    z_index: 999999,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    icon_type: 'class',
                    template: '<div data-growl="container" class="alert" role="alert">' +
                    '<button type="button" class="close" data-growl="dismiss">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<span data-growl="icon"></span>' +
                    '<span data-growl="title"></span>' +
                    '<span data-growl="message"></span>' +
                    '<a href="#" data-growl="url"></a>' +
                    '</div>'
                });
            };

            $('.notifications .btn').on('click',function(e){
                e.preventDefault();
                var nFrom = $(this).attr('data-from');
                var nAlign = $(this).attr('data-align');
                var nIcons = $(this).attr('data-icon');
                var nType = $(this).attr('data-type');
                var nAnimIn = $(this).attr('data-animation-in');
                var nAnimOut = $(this).attr('data-animation-out');

                notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
            });

        });
    </script>

    <script type="text/javascript">
        let dataTable1 = new simpleDatatables.DataTable('#table1');
        let dataTable2 = new simpleDatatables.DataTable('#table2');
        let dataTable3 = new simpleDatatables.DataTable('#table3');
        let dataTable4 = new simpleDatatables.DataTable('#table4');
        let dataTable5 = new simpleDatatables.DataTable('#table5');
        let dataTable6 = new simpleDatatables.DataTable('#table6');
        let dataTable7 = new simpleDatatables.DataTable('#table7');
        let dataTable8 = new simpleDatatables.DataTable('#table8');
        let dataTable9 = new simpleDatatables.DataTable('#table9');
        let dataTable10 = new simpleDatatables.DataTable('#table10');
        let dataTable11 = new simpleDatatables.DataTable('#table11');
        let dataTable12 = new simpleDatatables.DataTable('#table12');
        let dataTable13 = new simpleDatatables.DataTable('#table13');
        // let dataTable = new simpleDatatables.DataTable('.example10');
    </script>

    <!-- select option -->
    <script type="text/javascript">
        var fruit = $("[name=niveau] option").detach()
        $("[name=departement]").change(function() {
          var val = $(this).val()
          $("[name=niveau] option").detach()
          fruit.filter("." + val).clone().appendTo("[name=niveau]")
        }).change()
    </script>


    <!-- tooltip -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $('#primary-popover-content').html();
                }
            });
        });
    </script>

</body>
</html>

