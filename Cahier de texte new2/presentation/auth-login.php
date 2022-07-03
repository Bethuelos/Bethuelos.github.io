<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cahier de Texte</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />

    <script src="assets/js/jquery-3.5.1.js"></script>

    <!-- <link rel="stylesheet" href="assets/css/style.min.css">  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/notification.css">
</head>

<body>
    <div id="auth">
        <!-- <img src="assets/images/background/iut.jpg" width=""> -->
        
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/favicon.svg" height="48" class='mb-4'>
                                <h3>Sign In</h3>
                                <p>Please sign in to continue to Voler.</p>
                            </div>
                            <form action="../traitement/traitement.php" method="POST">
                                <input type="text" name="connexion" value="connexion" hidden="">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Statut</label>
                                    <div class="form-group">
                                        <select class="choices form-select" name="statut">
                                            <option value="Admin">Admin</option>
                                            <option value="Chef Departement">Chef Departement</option>
                                            <option value="Enseignant">Enseignant</option>
                                            <option value="Delegue">Délégué</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="username" name="login">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="auth-forgot-password.html" class='float-right'>
                                            <small>Forgot password?</small>
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="mdp">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>

                                <input type="text" name="alert" value="oui" hidden="">

                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-left">
                                        <input type="checkbox" id="checkbox1" class='form-check-input' >
                                        <label for="checkbox1">Remember me</label>
                                    </div>
                                    <div class="float-right">
                                        <a href="auth-register.html">Don't have an account?</a>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <!-- <button class="btn btn-primary float-right" type="submit">Submit</button> -->
                                    <button class="btn btn-primary float-right waves-effect" type="submit" data-type="success" data-from="top" data-align="right">Submit</button>
                                </div>
                            </form>
                            <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-sm-12">
            <div class="sub-title">Notification Alert</div>
            <p>Notification color : <code> data-type="inverse"</code> Notification position : <code> data-align="left" </code></p>
            <ul class="">
                <li>
                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="left" data-icon="fa fa-check">Top Left</button>
                </li>
                <li>
                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-comments">Top Right</button>
                </li>
                <li>
                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="top" data-align="center" data-icon="fa fa-comments">Top Center</button>
                </li>
                <li>
                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="left">Bottom Left</button>
                </li>
                <li>
                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="right">Bottom Right</button>
                </li>
                <li>
                    <button class="btn btn-primary waves-effect" data-type="inverse" data-from="bottom" data-align="center">Bottom Center</button>
                </li>
            </ul>
            <div class="sub-title">Notification Position</div>
            <p>Change data-type : <code> data-type="primary"</code> to change notification color</p>
            <ul class="notifications">
                <li>
                    <button class="btn btn-inverse waves-effect" data-type="inverse" data-from="top" data-align="right" data-icon="fa fa-check">Inverse</button>
                </li>
                <li>
                    <button class="btn btn-primary waves-effect" data-type="primary" data-from="top" data-align="right" data-icon="fa fa-comments">Primary</button>
                </li>
                <li>
                    <button class="btn btn-info waves-effect" data-type="info" data-from="top" data-align="right" data-icon="fa fa-comments">Info</button>
                </li>
                <li>
                    <button class="btn btn-success waves-effect" data-type="success" data-from="top" data-align="right">success</button>
                </li>
                <li>
                    <button class="btn btn-warning waves-effect" data-type="warning" data-from="top" data-align="right">Warning</button>
                </li>
                <li>
                    <button class="btn btn-danger waves-effect" data-type="danger" data-from="top" data-align="right">Danger</button>
                </li>
            </ul>
        </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
    <script src="assets/vendors/choices.js/choices.min.js"></script>

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
</body>

</html>
