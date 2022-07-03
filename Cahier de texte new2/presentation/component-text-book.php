<?php include 'head.php'; ?>
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last mb-2">
                <h3>Cahier de Texte</h3>
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
    <section class="section">
        <form action="component-text-book.php" method="POST">
            <div class="row mb-2">
                <?php if($_SESSION['Statut'] === 'Enseignant' || $_SESSION['Statut'] === 'Admin'): ?>
                <div class="col-md-1 mt-4 offset-1">
                    <button type="submit" class="btn btn-info mr-1 mb-1">Recherche</button>
                </div>
                <div class="col-md-2 mb-4">
                    <h6><center>Departement</center></h6>
                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                    <div class="form-group">
                        <select class="choices form-select" name="departement">
                            <option value="square" <?php echo (isset($_POST['departement']) && $_POST['departement'] === 'square') ? 'selected' : ''; ?>>Square</option>
                            <option value="rectangle" <?php echo (isset($_POST['departement']) && $_POST['departement'] === 'rectangle') ? 'selected' : ''; ?> >Rectangle</option>
                            <option value="rombo" <?php echo (isset($_POST['departement']) && $_POST['departement'] === 'rombo') ? 'selected' : ''; ?>>Rombo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 mb-4">
                    <h6><center>Niveau</center></h6>
                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                    <div class="form-group">
                        <select class="choices form-select" name="niveau">
                            <option value="square">Square</option>
                            <option value="rectangle">Rectangle</option>
                            <option value="rombo">Rombo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 mb-4">
                    <h6><center>Option</center></h6>
                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                    <div class="form-group">
                        <select class="choices form-select" name="option">
                            <option value="square">Square</option>
                            <option value="rectangle">Rectangle</option>
                            <option value="rombo">Rombo</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 mb-4">
                    <h6><center>Année</center></h6>
                    <!-- <p>Use <code>.choices</code> class for basic choices control.</p> -->
                    <div class="form-group">
                        <select class="choices form-select">
                            <option value="square">Square</option>
                            <option value="rectangle">Rectangle</option>
                            <option value="rombo">Rombo</option>
                        </select>
                    </div>
                </div>
                <?php endif; ?>
                
            </div>
        </form>
        

        <div class="card">
            <div class="card-header alert alert-info">
                Cahier de Texte
            </div>
            <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
            <div class="row">
                <div class="col-md-1 offset-5">
                    <button type="submit" class="btn btn-info mr-1 mb-1" data-toggle="tooltip" data-placement="top" title="Remplire le cahier de texte">Ajouter</button>
                </div>
                <div class="col-md-1">
                    <button class="badge bg-info btn" name="form" value="ModifierCT" data-toggle="tooltip" data-placement="top" title="Générer le cahier de texte"><i data-feather="printer" width="20"></i> </button>
                </div>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Heure debut</th>
                            <th>Heure Fin</th>
                            <th>Texte ou Lecons</th>
                            <th>Enseignant</th>
                            <th>Validation</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>vehicula</td>
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
                                        <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger12"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                        <div class="modal fade text-left" id="danger12" tabindex="-1" role="dialog"
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
                                    <form action="#"  class="col-md-4">
                                        <button class="badge bg-info btn" name="form" value="ModifierCT"><i data-feather="printer" width="20" data-toggle="tooltip" data-placement="top" title="Générer l'enregistrement du cahier de texte"></i> </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>vehicula</td>
                            <td>076 4820 8838</td>
                            <td>076 4820 8838</td>
                            <td>076 4820 8838</td>
                            <td>076 4820 8838</td>
                            <td>
                                <center><i class="text-red" data-feather="check"></i></center>
                            </td>
                            <td>
                                <div class="row">
                                    <?php if($_SESSION['Statut'] === 'Delegue' || $_SESSION['Statut'] === 'Admin'): ?>
                                    <form action="form-layout.php" method="GET" class="col-md-4">
                                        <span class="badge bg-danger btn" data-toggle="modal" data-target="#danger13"><i data-toggle="tooltip" data-placement="top" title="Supprimer l'enregistrement du cahier de texte" data-feather="trash" width="20"></i> </span>
                                        <div class="modal fade text-left" id="danger13" tabindex="-1" role="dialog"
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
                                        <button class="badge bg-success btn" name="form" value="ModifierCT"><i data-feather="edit" width="20"  data-toggle="tooltip" data-placement="top" title="Générer l'enregistrement du cahier de texte"></i> </button>
                                    </form>
                                    <form action="#"  class="col-md-4">
                                        <button class="badge bg-info btn" name="form" value="ModifierCT"><i data-feather="printer" width="20" data-toggle="tooltip" data-placement="top" title="Générer l'enregistrement du cahier de texte"></i> </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <!-- <script>
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
 --><?php include 'foot.php'; ?>