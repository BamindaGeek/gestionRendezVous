<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="<?php echo $myConstante::$img;?>faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name" style="text-transform: capitalize">{{userConnected.Pseudo}}</p>
                    <p class="designation">Administrateur</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Menu Principal</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dashboard-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Tableau de bord</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dashboard-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.html">Dashboard 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboards/dashboard-2.html">Dashboard 2</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#agence-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Agences</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="agence-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>agence">Listes des agences</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#livreur-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Livreurs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="livreur-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>livreurs">Listes des livreurs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#commande-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Commandes</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="commande-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>commande">Listes des commandes</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#demandeur-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="menu-icon typcn typcn-archive"></i>
                <span class="menu-title">Demandeurs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="demandeur-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>demandeur">Liste des demandeur</a>
                    </li>
                    <!-- <li class="nav-item">
                         <a class="nav-link" href="../layout/rtl-layout.html">RTL</a>
                     </li>-->
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#recepteur-layouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="menu-icon typcn typcn-archive"></i>
                <span class="menu-title">Récepteurs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="recepteur-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>recepteur">Liste des récepteur</a>
                    </li>
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="../layout/rtl-layout.html">RTL</a>
                    </li>-->
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#adresse-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
                <i class="menu-icon typcn typcn-arrow-maximise"></i>
                <span class="menu-title">Adresses</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="adresse-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>adresse_recepteur">Récepteurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>adresse_demandeur">Demandeurs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Administrations</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
                <i class="menu-icon typcn typcn-arrow-maximise"></i>
                <span class="menu-title">Utilisateurs</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>users">Liste des utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../apps/email.html">Liste des administrateurs</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#package-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
                <i class="menu-icon typcn typcn-arrow-maximise"></i>
                <span class="menu-title">Packages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="package-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>package">Liste des Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>module    ">Liste des modules</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#abonnement-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Abonnements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="abonnement-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>abonnement">Listes des abonnements</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#categorie-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
                <i class="menu-icon typcn typcn-arrow-maximise"></i>
                <span class="menu-title">Catégories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="categorie-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>categorie">Liste des Catégories</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Localisation-dropdown" aria-expanded="false" aria-controls="apps-dropdown">
                <i class="menu-icon typcn typcn-arrow-maximise"></i>
                <span class="menu-title">Localisation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Localisation-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>commune">Liste des communes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>quartier">Liste des quartiers</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#locomotion-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Locomotions</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="locomotion-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>locomotion">Listes des Locomotions</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#role-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Droits / Rôles</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="role-dropdown">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $myConstante::$url;?>role">Listes des Droits / Rôles</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
    <footer class="footer" style="border-top: none;">
        <div class="container-fluid clearfix">

        </div>
    </footer>
</nav>
<!-- partial -->