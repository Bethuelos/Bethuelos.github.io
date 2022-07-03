<?php include 'head.php'; ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Datatable</h3>
                <p class="text-subtitle text-muted"><a href="https://github.com/fiduswriter/Simple-DataTables/wiki"></a>.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

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
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Admin
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Login</th>
                                        <th>Passe</th>
                                        <th>Notifications</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierAdmin"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="departement" role="tabpanel" aria-labelledby="profile-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Departement
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom Depart</th>
                                        <th>Nom Respo</th>
                                        <th>Email</th>
                                        <th>Login</th>
                                        <th>Passe</th>
                                        <th>Notifcation</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger2"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger2" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierDepartement"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="enseignant" role="tabpanel" aria-labelledby="contact-tab">
                
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Enseignant
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Login</th>
                                        <th>Passe</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger3"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger3" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierEnseignant"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="delegue" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Délégué
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Departement</th>
                                        <th>Niveau</th>
                                        <th>Option</th>
                                        <th>Login</th>
                                        <th>Passe</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger4"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger4" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierDelegue"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="programme" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Programme
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Niveau</th>
                                        <th>Option</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger5"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger5" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierProgramme"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="ue" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Unité d'enseignement
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Intitule</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger6"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger6" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierUE"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="matier" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Matière
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Intitule</th>
                                        <th>HeureCM</th>
                                        <th>HeureTP</th>
                                        <th>HeureTD</th>
                                        <th>HeureTI</th>
                                        <th>Credit</th>
                                        <th>Etat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger7"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger7" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierMat"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="chapitre" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Chapitre
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Numero</th>
                                        <th>Titre</th>
                                        <th>Etat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger8"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger8" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierChapitre"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="paragraphe" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Paragraphe
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Texte</th>
                                        <th>Etat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger9"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger9" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierParagraphe"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="notion" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Notion
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Intitule</th>
                                        <th>Etat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger10"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger10" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierNotion"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade" id="cahier" role="tabpanel" aria-labelledby="contact-tab">
                <section class="section">
                    <div class="card">
                        <div class="card-header alert alert-info">
                            Cahier de Texte
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Matière</th>
                                        <th>Enseignant</th>
                                        <th>Date</th>
                                        <th>Heure debut</th>
                                        <th>Heure Fin</th>
                                        <th>Validation</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>076 4820 8838</td>
                                        <td>
                                            Offenburg
                                        </td>
                                        <td>
                                            <div class="row">
                                                <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger11"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                                    <div class="modal fade text-left" id="danger11" tabindex="-1" role="dialog"
                                                        aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                <h5 class="modal-title white" id="myModalLabel120">SUPRESSION </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i data-feather="x"></i>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Voulez vous vraiment supprimer ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">NON</span>
                                                                </button>
                                                                <button type="submit" class="btn btn-danger ml-1">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">OUI</span>
                                                                </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php endif; ?>
                                                <form action="form-layout.php" method="GET" class="col-md-4">
                                                    <button class="badge bg-success btn" name="form" value="ModifierCT"><i data-feather="edit" width="20" data-toggle="tooltip" data-placement="top" title="Modifier l'enregistrement du cahier de texte"></i> </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

   <!--  <section class="section">
        <div class="card">
        
    
        <?php if ($_GET['form'] == 'Delegue'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'Programme'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'UE'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'Mat'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'Chapitre'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'Paragraphe'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'Notion'): ?>

            
        <?php endif; ?>

        <?php if ($_GET['form'] == 'CT'): ?>

            
        <?php endif; ?>
        </div>

    </section> -->
    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('.example9').DataTable();
        } );
    </script> -->
<?php include 'foot.php'; ?>


<?php if ($_GET['form'] == 'Admin'): ?>

<?php endif; ?>