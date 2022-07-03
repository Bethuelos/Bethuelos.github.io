<?php include 'head.php'; ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Formulaires</h3>
                <!-- <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <!-- Basic Horizontal form layout section start -->
    <?php if ($_GET['form'] == 'oui'): ?>
    <div class="col-md-12">
        <!-- <h5 class="card-title">Horizontal Navs</h5> -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin"
                    aria-selected="true"><h4 class="text-primary">Admin</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#departement" role="tab" aria-controls="departement"
                    aria-selected="false"><h4 class="text-primary">Departement</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#enseignant" role="tab" aria-controls="enseignant"
                    aria-selected="false"><h4 class="text-primary">Enseignant</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#delegue" role="tab" aria-controls="delegue"
                    aria-selected="false"><h4 class="text-primary">Délégué</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#programme" role="tab" aria-controls="programme"
                    aria-selected="false"><h4 class="text-primary">Programme</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ue" role="tab" aria-controls="ue"
                    aria-selected="false"><h4 class="text-primary">UE</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#matier" role="tab" aria-controls="matier"
                    aria-selected="false"><h4 class="text-primary">Matier</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#chapitre" role="tab" aria-controls="chapitre"
                    aria-selected="false"><h4 class="text-primary">Chapitre</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#paragraphe" role="tab" aria-controls="paragraphe"
                    aria-selected="false"><h4 class="text-primary">Paragraphe</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#notion" role="tab" aria-controls="notion"
                    aria-selected="false"><h4 class="text-primary">Notion</h4></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cahier" role="tab" aria-controls="cahier"
                    aria-selected="false"><h4 class="text-primary">Cahier</h4></a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="admin" role="tabpanel" aria-labelledby="home-tab">
                <section class="section ">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Administrateur
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="#" class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label>Nom</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Login</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                                    <div class="form-control-icon">
                                                        <i data-feather="phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mot de passe</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                                    <div class="form-control-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end mt-5">
                                            <div class="modal-primary mr-1 mb-1 d-inline-block">
                                                <!-- Button trigger for primary themes modal -->
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="departement" role="tabpanel" aria-labelledby="profile-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Departement
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="../traitement/traitement.php" method="POST" class="form form-horizontal">

                                    <div class="form-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label>Nom Depart</label>
                                        </div>
                                        <input type="text" name="departement" value="departement" hidden="">
                                        <input type="text" name="insertion" value="insertion" hidden="">
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="first-name" class="form-control" name="name_department" placeholder="Nom du Departement">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label>Nom Respo</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom du Responsable">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Login</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                                    <div class="form-control-icon">
                                                        <i data-feather="phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mot de passe</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                                    <div class="form-control-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end mt-5">
                                            <!-- <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary3">
                                                soumettre
                                            </button> -->

                                            <!--primary theme Modal -->
                                            <!-- <div class="modal fade text-left" id="primary3" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel160" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                        <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Voulez vous vraiment inserer ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">NON</span>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">OUI</span>
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                            <button type="submit" class="btn btn-info mr-1 mb-1">INSERTION</button>
                                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="enseignant" role="tabpanel" aria-labelledby="contact-tab">
                
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Enseignant
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                     <div class="form-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label>Nom</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Login</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                                    <div class="form-control-icon">
                                                        <i data-feather="phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mot de passe</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                                    <div class="form-control-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end mt-5">
                                            <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary5">
                                                soumettre
                                            </button>

                                            <!--primary theme Modal -->
                                            <div class="modal fade text-left" id="primary5" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel160" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                        <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Voulez vous vraiment inserer ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">NON</span>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">OUI</span>
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="delegue" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Délégué
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                     <div class="form-body">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label>Nom</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom">
                                                    <div class="form-control-icon">
                                                        <i data-feather="user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Departement</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <div class="form-control">
                                                        <select class="choices form-select" name="departement">
                                                            <option value="square">Square</option>
                                                            <option value="rectangle">Rectangle</option>
                                                            <option value="rombo">Rombo</option>
                                                            <option value="romboid">Romboid</option>
                                                            <option value="trapeze">Trapeze</option>
                                                            <option value="traible">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Niveau</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <div class="form-control">
                                                        <select class="choices form-select" name="niveau">
                                                            <option value="square">Square</option>
                                                            <option value="rectangle">Rectangle</option>
                                                            <option value="rombo">Rombo</option>
                                                            <option value="romboid">Romboid</option>
                                                            <option value="trapeze">Trapeze</option>
                                                            <option value="traible">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Option</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <div class="form-control">
                                                        <select class="choices form-select" name="option">
                                                            <option value="square">Square</option>
                                                            <option value="rectangle">Rectangle</option>
                                                            <option value="rombo">Rombo</option>
                                                            <option value="romboid">Romboid</option>
                                                            <option value="trapeze">Trapeze</option>
                                                            <option value="traible">Triangle</option>
                                                            <option value="polygon">Polygon</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-control-icon">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Login</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                                    <div class="form-control-icon">
                                                        <i data-feather="phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mot de passe</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                                    <div class="form-control-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end mt-5">
                                            <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary7">
                                                soumettre
                                            </button>

                                            <!--primary theme Modal -->
                                            <div class="modal fade text-left" id="primary7" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel160" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary">
                                                        <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        Voulez vous vraiment inserer ?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">NON</span>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">OUI</span>
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                        </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="programme" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Programme
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <!-- <div class="col-md-4">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom du Programme">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
         -->                                    <div class="col-md-4">
                                                <label>Departement</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="departement">
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Niveau</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="niveau">
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Option</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="option" >
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="date" id="first-name" class="form-control" name="name" placeholder="Nom du Programme">
                                                        <div class="form-control-icon">
                                                            <i data-feather="calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary9">
                                                soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary9" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="ue" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Unité D'ensignement
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Code</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="code" placeholder="Code de L'unité D'ensignement">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Intitulé</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de L'unité D'ensignement">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary11">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary11" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="matier" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Matière
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Code</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="code" placeholder="Code de Matière">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Intitulé</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Matière D'ensignement">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Heure CM</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="first-name" class="form-control" name="heure_cm" placeholder="Heure de Cours Magistraux">
                                                        <div class="form-control-icon">
                                                            <i data-feather="clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Heure TP</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="first-name" class="form-control" name="heure_tp" placeholder="Heure de TP">
                                                        <div class="form-control-icon">
                                                            <i data-feather="clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Heure TD</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="first-name" class="form-control" name="heure_td" placeholder="Heure de TD">
                                                        <div class="form-control-icon">
                                                            <i data-feather="clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Heure TI</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="first-name" class="form-control" name="heure_ti" placeholder="Heure de TI">
                                                        <div class="form-control-icon">
                                                            <i data-feather="clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Crédit</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="email-id" class="form-control" name="credit" placeholder="Crédit">
                                                        <div class="form-control-icon">
                                                            <i data-feather="clock"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary13">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary13" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="chapitre" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Chapitre
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Numéro</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="first-name" class="form-control" name="numero" placeholder="Numéro de Chapitre">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Intitulé</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Matière</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="matiere">
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary15">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary15" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="paragraphe" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Paragraphe
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                   <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Numéro</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="number" id="first-name" class="form-control" name="numero" placeholder="Numéro de Chapitre">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Chapitre</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="chapitre">
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-5">
                                                <label>Texte</label>
                                            </div>
                                            <div class="col-md-8 mt-2">
                                                <div class="form-group ">
                                                    <div class="position-relative">
                                                        <!-- <input type="text" id="first-name" class="form-control" name="texte" placeholder="Texte de Paragraphe"> -->
                                                        <textarea class="form-control" placeholder="Entrer du texte"> </textarea>
                                                        <!-- <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <!-- <div class="card">
                                                    <div class="card-body">
                                                        <p>Entrer un texte </p>
                                                        <div id="full">

                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary17">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary17" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="notion" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Ajout Notion
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                   <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Chapitre</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="chapitre">
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Intitulé</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary19">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary19" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="cahier" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        
                        
                        <div class="card-header alert alert-info">
                            Ajout Cahier
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                   <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Delegue</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Enseignant</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Matière</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <div class="form-control">
                                                            <select class="choices form-select" name="matiere">
                                                                <option value="square">Square</option>
                                                                <option value="rectangle">Rectangle</option>
                                                                <option value="rombo">Rombo</option>
                                                                <option value="romboid">Romboid</option>
                                                                <option value="trapeze">Trapeze</option>
                                                                <option value="traible">Triangle</option>
                                                                <option value="polygon">Polygon</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-control-icon">
                                                            <i data-feather="mail"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date du Cours</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="date" id="first-name" class="form-control" name="date" placeholder="Date du Cours">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Heure de debut</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="time" id="first-name" class="form-control" name="date" placeholder="Heure de debut">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Heure de fin</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="time" id="first-name" class="form-control" name="date" placeholder="Heure de fin">
                                                        <div class="form-control-icon">
                                                            <i data-feather="user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-2">
                                                <label>Valider</label>
                                            </div>
                                            <div class="col-md-8 mt-2">
                                                <div class="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Oui 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Non
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="col-sm-12 d-flex justify-content-end mt-5">
                                                <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary21">
                                                    soumettre
                                                </button>

                                                <!--primary theme Modal -->
                                                <div class="modal fade text-left" id="primary21" tabindex="-1" role="dialog"
                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                            <h5 class="modal-title white" id="myModalLabel160">INSERTION</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Voulez vous vraiment inserer ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">NON</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">OUI</span>
                                                            </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <section id="basic-horizontal-layouts">
        <div class="match-height mt-5">

        <?php if ($_GET['form'] == 'ModifierAdmin'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Administrateur
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                <div class="col-md-4">
                                    <label>Nom</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom">
                                            <div class="form-control-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Login</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                            <div class="form-control-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Mot de passe</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end mt-5">
                                    <!-- Button trigger for primary themes modal -->
                                    <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary2">
                                        soumettre
                                    </button>

                                    <!--primary theme Modal -->
                                    <div class="modal fade text-left" id="primary2" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                Voulez vous vraiment modifier ?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">NON</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">OUI</span>
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierDepartement'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Departement
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">

                            <div class="form-body">
                                <div class="row">
                                <div class="col-md-4">
                                    <label>Nom Depart</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="first-name" class="form-control" name="name_department" placeholder="Nom du Departement">
                                            <div class="form-control-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label>Nom Respo</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom du Responsable">
                                            <div class="form-control-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Login</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                            <div class="form-control-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Mot de passe</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end mt-5">
                                    <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary4">
                                        soumettre
                                    </button>

                                    <!--primary theme Modal -->
                                    <div class="modal fade text-left" id="primary4" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                Voulez vous vraiment modifier ?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">NON</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">OUI</span>
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierEnseignant'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Enseignant
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                             <div class="form-body">
                                <div class="row">
                                <div class="col-md-4">
                                    <label>Nom</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom">
                                            <div class="form-control-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Login</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                            <div class="form-control-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Mot de passe</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end mt-5">
                                    <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary6">
                                        soumettre
                                    </button>

                                    <!--primary theme Modal -->
                                    <div class="modal fade text-left" id="primary6" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                Voulez vous vraiment modifier ?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">NON</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">OUI</span>
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierDelegue'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Délégué
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                             <div class="form-body">
                                <div class="row">
                                <div class="col-md-4">
                                    <label>Nom</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="first-name" class="form-control" name="name" placeholder="Nom">
                                            <div class="form-control-icon">
                                                <i data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="email" id="email-id" class="form-control" name="email" placeholder="Email">
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Departement</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <div class="form-control">
                                                <select class="choices form-select" name="departement">
                                                    <option value="square">Square</option>
                                                    <option value="rectangle">Rectangle</option>
                                                    <option value="rombo">Rombo</option>
                                                    <option value="romboid">Romboid</option>
                                                    <option value="trapeze">Trapeze</option>
                                                    <option value="traible">Triangle</option>
                                                    <option value="polygon">Polygon</option>
                                                </select>
                                            </div>
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Niveau</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <div class="form-control">
                                                <select class="choices form-select" name="niveau">
                                                    <option value="square">Square</option>
                                                    <option value="rectangle">Rectangle</option>
                                                    <option value="rombo">Rombo</option>
                                                    <option value="romboid">Romboid</option>
                                                    <option value="trapeze">Trapeze</option>
                                                    <option value="traible">Triangle</option>
                                                    <option value="polygon">Polygon</option>
                                                </select>
                                            </div>
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Option</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <div class="form-control">
                                                <select class="choices form-select" name="option">
                                                    <option value="square">Square</option>
                                                    <option value="rectangle">Rectangle</option>
                                                    <option value="rombo">Rombo</option>
                                                    <option value="romboid">Romboid</option>
                                                    <option value="trapeze">Trapeze</option>
                                                    <option value="traible">Triangle</option>
                                                    <option value="polygon">Polygon</option>
                                                </select>
                                            </div>
                                            <div class="form-control-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Login</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="text" id="contact-info" class="form-control" name="login" placeholder="Login">
                                            <div class="form-control-icon">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Mot de passe</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-icon-left">
                                        <div class="position-relative">
                                            <input type="password" id="password" class="form-control" name="pwd" placeholder="Mot de passe">
                                            <div class="form-control-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end mt-5">
                                    <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary8">
                                        soumettre
                                    </button>

                                    <!--primary theme Modal -->
                                    <div class="modal fade text-left" id="primary8" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                Voulez vous vraiment modifier ?
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">NON</span>
                                                </button>
                                                <button type="submit" class="btn btn-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">OUI</span>
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierProgramme'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Programme
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Departement</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="departement">
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Niveau</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="niveau">
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Option</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="option" >
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="date" id="first-name" class="form-control" name="name" placeholder="Nom du Programme">
                                                <div class="form-control-icon">
                                                    <i data-feather="calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary10">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary10" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MOFIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment mofifier ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierUE'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Unité D'ensignement
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="code" placeholder="Code de L'unité D'ensignement">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Intitulé</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de L'unité D'ensignement">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary12">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary12" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment modifier ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierMat'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Matière
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="code" placeholder="Code de Matière">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Intitulé</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Matière D'ensignement">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Heure CM</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="first-name" class="form-control" name="heure_cm" placeholder="Heure de Cours Magistraux">
                                                <div class="form-control-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Heure TP</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="first-name" class="form-control" name="heure_tp" placeholder="Heure de TP">
                                                <div class="form-control-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Heure TD</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="first-name" class="form-control" name="heure_td" placeholder="Heure de TD">
                                                <div class="form-control-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Heure TI</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="first-name" class="form-control" name="heure_ti" placeholder="Heure de TI">
                                                <div class="form-control-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Crédit</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="email-id" class="form-control" name="credit" placeholder="Crédit">
                                                <div class="form-control-icon">
                                                    <i data-feather="clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary14">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary14" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment modifier ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierChapitre'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Chapitre
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Numéro</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="first-name" class="form-control" name="numero" placeholder="Numéro de Chapitre">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Intitulé</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Matière</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="matiere">
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary16">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary16" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment modifier ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierParagraphe'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Paragraphe
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                           <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Numéro</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="number" id="first-name" class="form-control" name="numero" placeholder="Numéro de Chapitre">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Chapitre</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="chapitre">
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-5">
                                        <label>Texte</label>
                                    </div>
                                    <div class="col-md-8 mt-2">
                                        <div class="form-group ">
                                            <div class="position-relative">
                                                <!-- <input type="text" id="first-name" class="form-control" name="texte" placeholder="Texte de Paragraphe"> -->
                                                <textarea class="form-control" placeholder="Entrer du texte"> </textarea>
                                                <!-- <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div> -->
                                            </div>
                                        </div>
                                        <!-- <div class="card">
                                            <div class="card-body">
                                                <p>Entrer un texte </p>
                                                <div id="full">

                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary18">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary18" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment modification ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_GET['form'] == 'ModifierNotion'): ?>
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                        Modifier Notion
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                           <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Chapitre</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="chapitre">
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Intitulé</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary20">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary20" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment modifier ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <?php if ($_GET['form'] == 'ModifierCT'): ?>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header alert alert-info">
                    <h4 class="card-title">Modifier Cahier</h4>
                    </div>
                    <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                           <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Delegue</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Enseignant</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" id="first-name" class="form-control" name="intitule" placeholder="Intitulé de Chapitre">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Matière</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <div class="form-control">
                                                    <select class="choices form-select" name="matiere">
                                                        <option value="square">Square</option>
                                                        <option value="rectangle">Rectangle</option>
                                                        <option value="rombo">Rombo</option>
                                                        <option value="romboid">Romboid</option>
                                                        <option value="trapeze">Trapeze</option>
                                                        <option value="traible">Triangle</option>
                                                        <option value="polygon">Polygon</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Date du Cours</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="date" id="first-name" class="form-control" name="date" placeholder="Date du Cours">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Heure de debut</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="time" id="first-name" class="form-control" name="date" placeholder="Heure de debut">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Heure de fin</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="time" id="first-name" class="form-control" name="date" placeholder="Heure de fin">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mt-2">
                                        <label>Valider</label>
                                    </div>
                                    <div class="col-md-8 mt-2">
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Oui 
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Non
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-sm-12 d-flex justify-content-end mt-5">
                                        <button type="button" class="btn btn-info mr-1 mb-1" data-toggle="modal" data-target="#primary22">
                                            soumettre
                                        </button>

                                        <!--primary theme Modal -->
                                        <div class="modal fade text-left" id="primary22" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel160" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary">
                                                    <h5 class="modal-title white" id="myModalLabel160">MODIFICATION</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    Voulez vous vraiment modifier ?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">NON</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">OUI</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary mr-1 mb-1">soumettre</button> -->
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reinitialiser</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        </div>
    </section>



                        

<?php include 'foot.php'; ?>
