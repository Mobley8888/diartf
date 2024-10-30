<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>JojoApp</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">JojoApp</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Rechercher par nom ..." aria-label="Rechercher par nom ..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Notification</a></li>
                        <li><a class="dropdown-item" href="#"> Profil</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Acceuil</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                DEMANDES
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <!--
                                    <a class="nav-link" href="#">Soumettre une demande</a>
                                    <a class="nav-link" href="#">Liste de mes demandes</a>
                                    <a class="nav-link" href="#">Attrubuer une demande</a>
                                    <a class="nav-link" href="#">Traiter une demande</a>
                                -->
                                <a class="nav-link" href="#">SOUMETTRE</a>
                                    <a class="nav-link" href="#">LISTE </a>
                                    <a class="nav-link" href="#">ATTRUBUER</a>
                                    <a class="nav-link" href="#">TRAITER</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               UTULISATEURS UI
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    UTULISATEURS
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="register.html">Creer compte </a>
                                            <a class="nav-link" href="register.html">liste des utilisateurs</a>
                                            <a class="nav-link" href="password.html">utilisateurs connectés</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error system
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">INTERVENTIONS</div>
                            <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    creer une intervetion
                                </a>
                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Liste des interventions
                                </a>
                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Cloturer intervention
                                </a>
                                <a class="nav-link" href="tables.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Archives & historiques
                                </a>
                            </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Version:</div>
                        JojoApp Version Stable 1.0
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">DEMANDE EN ATTENTE</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">EN SAVOIR PLUS</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">DEMANDE EN COURS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">EN SAVOIR PLUS</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">DEMANDE CLOTURER</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">EN SAVOIR PLUS</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">DEMANDE EN INSTANCE</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">EN SAVOIR PLUS</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                LISTE DES DEMANDES EN ATTENTES
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Date & Heure</th>
                                            <th>STRUCTURE</th>
                                            <th>SERVICE</th>
                                            <th>NOM ET PRENOM DU DEMANDEUR</th>
                                            <th>OBJET</th>
                                            <th>MOTIF DE LA DEMANDE</th>
                                            
                                        </tr>
                                    </thead>
                                    <!---
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>STRUCTURE</th>
                                            <th>SERVICE</th>
                                            <th>NOM ET PRENOM DU DEMANDEUR</th>
                                            <th>OBJET</th>
                                            <th>MOTIF DE LA DEMANDE</th>
                                        </tr>
                                    -->
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>DF</td>
                                            <td>Service d'ordonancement</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>DAJIC</td>
                                            <td>CONTENTIEUX ET POURSUITE</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>DISE</td>
                                            <td>Service des Etudes et statistique</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>DRHL</td>
                                            <td>SRH</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>DCB</td>
                                            <td>SDCB</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>AC</td>
                                            <td>Service dépences & Reccete</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        <tr>
                                            <td>02-10-2024</td>
                                            <td>DG</td>
                                            <td>Service Audit Interne & Controle de  Gestion</td>
                                            <td>MOBELEZY EDEN MAITREYA</td>
                                            <td>Bésoin de service</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus autem aut error. Perspiciatis nostrum corrupti obcaecati labore consectetur numquam, iure quis fugiat mollitia. Nesciunt blanditiis fuga nobis repellendus id.</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; artf 2024 <br>Conception et developpément par : 
                                <strong>Stagiare EDEN MAITREYA MOBELEZY </strong>
                         </div>
                            <div>
                                <a href="#">Politique d'utulisations</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
