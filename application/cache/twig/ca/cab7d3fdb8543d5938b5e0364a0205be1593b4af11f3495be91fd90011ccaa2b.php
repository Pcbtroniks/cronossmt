<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* overall/layout.twig */
class __TwigTemplate_1c1c9ff60f79245c3432d430ec9748decb87f9f403bd4fff0a1a87003bb63160 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'appHeader' => [$this, 'block_appHeader'],
            'appBody' => [$this, 'block_appBody'],
            'appFooter' => [$this, 'block_appFooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>CRONOS | PCBTRONIKS</title>
\t\t<!-- Tell the browser to be responsive to screen width -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"> ";
        // line 14
        $this->displayBlock('appHeader', $context, $blocks);
        // line 15
        echo "\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- summernote -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/summernote/summernote-bs4.css\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t<!-- favicon -->
\t\t<link
\t\trel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/img/favicon.png\"/>
\t\t<!-- JQuery Confirm -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-confirm/jquery-confirm.min.css\">
\t\t<!-- custom -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/css/custom.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-dark navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Right navbar links -->
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "logout\" class=\"nav-link\">Cerrar sesión</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"";
        // line 65
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\" class=\"brand-link\">
\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/pcbtroniks_logo_cronos.png\" alt=\"pcbtroniks Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .9\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\" style=\"color:#c0c5ce;\">CRONOS |</span>
\t\t\t\t\t<span style=\"color: #5AB131; font-size: 16px;\">PCBTRONIKS</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">

\t\t\t\t\t<!-- Sidebar Menu -->
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

\t\t\t\t\t\t\t<li class=\"nav-header\">NAVEGACION PRINCIPAL</li>

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tInicio
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
        // line 90
        if ((acl_permits("users.list_records") && acl_permits("users.edit"))) {
            // line 91
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 92
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "users\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fas fa-users\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Usuarios</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 98
        echo "
\t\t\t\t\t\t\t";
        // line 99
        if (acl_permits("customers.list_records")) {
            // line 100
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 101
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "customers\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-address-book\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tClientes
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 109
        echo "
\t\t\t\t\t\t\t";
        // line 110
        if (acl_permits("inventory.list_records")) {
            // line 111
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tInventario
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 121
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "inventory/computo\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Computo</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 127
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "inventory/printer\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Impresoras</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 133
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "inventory/televisiones\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Televisiones</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 139
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "inventory/projector\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Proyectores</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 145
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "inventory/nobreak\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>No break</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 151
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "inventory/otherproducts\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Otros</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 159
        echo "
\t\t\t\t\t\t\t";
        // line 160
        if ((is_role("admin") || is_role("technician"))) {
            // line 161
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 162
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "quotations\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-file-alt\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Cotizaciones</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 168
        echo "

\t\t\t\t\t\t\t";
        // line 170
        if ((is_role("admin") || is_role("technician"))) {
            // line 171
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 172
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "tickets\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tTickets
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 180
        echo "
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
        // line 183
        if ((is_role("admin") || is_role("technician"))) {
            // line 184
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-header\">MISCELANEOS</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 187
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "documentacion\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-file-alt\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tDocumentación
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 195
        echo "
\t\t\t\t\t\t\t";
        // line 196
        if (acl_permits("software.view_section")) {
            // line 197
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 198
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "software\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-file-archive\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tSoftware
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 206
        echo "
\t\t\t\t\t\t\t";
        // line 207
        if (is_role("admin")) {
            // line 208
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://vault.bitwarden.com/#/\" target=\"_blank\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tBóveda de contraseñas
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 217
        echo "
\t\t\t\t\t\t\t";
        // line 218
        if (acl_permits("reports_inventory.list_records")) {
            // line 219
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 220
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "report\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-chart-pie\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Reporte</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 226
        echo "
\t\t\t\t\t\t\t";
        // line 227
        if (acl_permits("tools.list_records")) {
            // line 228
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tools\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tHerramientas
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 238
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "tool\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Material</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 244
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "kits\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kit's</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 252
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t";
        // line 260
        $this->displayBlock('appBody', $context, $blocks);
        // line 261
        echo "\t\t\t<!-- /.content-wrapper -->

\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"";
        // line 265
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "helpdesk\" class=\"disabled\">Click aqui para ponerse en contacto con un administrador</a>.</strong>
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t0.9.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery/jquery.min.js\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button);
\t\t</script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- JQuey Confirm -->
\t\t<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
\t\t<!-- custom -->
\t\t<script>
\t\t\tconst BASE_URL = '";
        // line 294
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "';
\t\t</script>
\t\t";
        // line 296
        $this->displayBlock('appFooter', $context, $blocks);
        // line 297
        echo "\t\t<!-- Summernote -->
\t\t<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/summernote/summernote-bs4.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/adminlte.js\"></script>
\t</body>
</html>
";
    }

    // line 14
    public function block_appHeader($context, array $blocks = [])
    {
    }

    // line 260
    public function block_appBody($context, array $blocks = [])
    {
    }

    // line 296
    public function block_appFooter($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "overall/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 296,  510 => 260,  505 => 14,  497 => 302,  492 => 300,  487 => 298,  484 => 297,  482 => 296,  477 => 294,  471 => 291,  466 => 289,  457 => 283,  452 => 281,  433 => 265,  427 => 261,  425 => 260,  415 => 252,  404 => 244,  395 => 238,  383 => 228,  381 => 227,  378 => 226,  369 => 220,  366 => 219,  364 => 218,  361 => 217,  350 => 208,  348 => 207,  345 => 206,  334 => 198,  331 => 197,  329 => 196,  326 => 195,  315 => 187,  310 => 184,  308 => 183,  303 => 180,  292 => 172,  289 => 171,  287 => 170,  283 => 168,  274 => 162,  271 => 161,  269 => 160,  266 => 159,  255 => 151,  246 => 145,  237 => 139,  228 => 133,  219 => 127,  210 => 121,  198 => 111,  196 => 110,  193 => 109,  182 => 101,  179 => 100,  177 => 99,  174 => 98,  165 => 92,  162 => 91,  160 => 90,  149 => 82,  130 => 66,  126 => 65,  113 => 55,  89 => 34,  84 => 32,  78 => 29,  69 => 23,  63 => 20,  57 => 17,  53 => 15,  51 => 14,  46 => 12,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>CRONOS | PCBTRONIKS</title>
\t\t<!-- Tell the browser to be responsive to screen width -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"> {% block appHeader %}{% endblock %}
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- summernote -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/summernote/summernote-bs4.css\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t<!-- favicon -->
\t\t<link
\t\trel=\"shortcut icon\" type=\"image/png\" href=\"{{ base_url() }}custom/img/favicon.png\"/>
\t\t<!-- JQuery Confirm -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/jquery-confirm/jquery-confirm.min.css\">
\t\t<!-- custom -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}custom/css/custom.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-dark navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Right navbar links -->
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item d-none d-sm-inline-block\">
\t\t\t\t\t\t<a href=\"{{ base_url() }}logout\" class=\"nav-link\">Cerrar sesión</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"{{ base_url() }}\" class=\"brand-link\">
\t\t\t\t\t<img src=\"{{ base_url() }}assets/img/pcbtroniks_logo_cronos.png\" alt=\"pcbtroniks Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .9\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\" style=\"color:#c0c5ce;\">CRONOS |</span>
\t\t\t\t\t<span style=\"color: #5AB131; font-size: 16px;\">PCBTRONIKS</span>
\t\t\t\t</a>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\">

\t\t\t\t\t<!-- Sidebar Menu -->
\t\t\t\t\t<nav class=\"mt-2\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">

\t\t\t\t\t\t\t<li class=\"nav-header\">NAVEGACION PRINCIPAL</li>

\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tachometer-alt\"></i>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tInicio
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t{% if ( (acl_permits('users.list_records')) and (acl_permits('users.edit')) ) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}users\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fas fa-users\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Usuarios</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (acl_permits('customers.list_records')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}customers\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-address-book\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tClientes
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (acl_permits('inventory.list_records')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-table\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tInventario
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}inventory/computo\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Computo</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}inventory/printer\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Impresoras</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}inventory/televisiones\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Televisiones</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}inventory/projector\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Proyectores</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}inventory/nobreak\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>No break</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}inventory/otherproducts\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Otros</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (is_role('admin') or is_role('technician')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}quotations\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon far fa-file-alt\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Cotizaciones</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t{% if (is_role('admin') or is_role('technician')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}tickets\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-ticket-alt\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tTickets
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t{% if (is_role('admin') or is_role('technician')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-header\">MISCELANEOS</li>

\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}documentacion\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-file-alt\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tDocumentación
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (acl_permits('software.view_section')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}software\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-file-archive\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tSoftware
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (is_role('admin')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"https://vault.bitwarden.com/#/\" target=\"_blank\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tBóveda de contraseñas
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (acl_permits('reports_inventory.list_records')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}report\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-chart-pie\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Reporte</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% if (acl_permits('tools.list_records')) %}
\t\t\t\t\t\t\t\t<li class=\"nav-item has-treeview\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"nav-icon fas fa-tools\"></i>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tHerramientas
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-angle-left right\"></i>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-treeview\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}tool\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Material</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ base_url() }}kits\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-circle nav-icon\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kit's</p>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- /.sidebar-menu -->
\t\t\t\t</div>
\t\t\t\t<!-- /.sidebar -->
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
\t\t\t{% block appBody %}{% endblock %}
\t\t\t<!-- /.content-wrapper -->

\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"{{ base_url() }}helpdesk\" class=\"disabled\">Click aqui para ponerse en contacto con un administrador</a>.</strong>
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t0.9.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- jQuery -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery/jquery.min.js\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button);
\t\t</script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"{{ base_url() }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- JQuey Confirm -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
\t\t<!-- custom -->
\t\t<script>
\t\t\tconst BASE_URL = '{{ base_url() }}';
\t\t</script>
\t\t{% block appFooter %}{% endblock %}
\t\t<!-- Summernote -->
\t\t<script src=\"{{ base_url() }}assets/plugins/summernote/summernote-bs4.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"{{ base_url() }}assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"{{ base_url() }}assets/js/adminlte.js\"></script>
\t</body>
</html>
", "overall/layout.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/overall/layout.twig");
    }
}
