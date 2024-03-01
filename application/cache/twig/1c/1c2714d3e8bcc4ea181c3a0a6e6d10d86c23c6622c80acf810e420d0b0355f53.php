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

/* tool/kits.twig */
class __TwigTemplate_384cfaf7cbe1eba83356d380793d721cb2e0a08044c2c2a9753abb8f49f87906 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'appHeader' => [$this, 'block_appHeader'],
            'appBody' => [$this, 'block_appBody'],
            'appFooter' => [$this, 'block_appFooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "overall/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("overall/layout.twig", "tool/kits.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = [])
    {
        // line 4
        echo "\t<!-- select2 -->
\t<link
\trel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/css/select2.min.css\">
\t<!-- DataTables -->
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
";
    }

    // line 12
    public function block_appBody($context, array $blocks = [])
    {
        // line 13
        echo "\t<div
\t\tclass=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h1>Kit's de Herramientas
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addKitsModal\" onclick=\"addKitsModel()\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\tAñadir nuevo</button>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Herramientas</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t</section>

\t\t<!-- Main content -->
\t\t<section class=\"content\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"messages\"></div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table id=\"kitsTable\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre del Kit</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Responsable</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre del Kit</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Responsable</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->

\t\t\t</div>
\t\t</section>
\t\t<!-- /.content -->
\t</div>
\t";
        // line 77
        $this->loadTemplate("tool/add_kits.twig", "tool/kits.twig", 77)->display($context);
        // line 78
        echo "\t";
        $this->loadTemplate("tool/edit_kits.twig", "tool/kits.twig", 78)->display($context);
    }

    // line 81
    public function block_appFooter($context, array $blocks = [])
    {
        // line 82
        echo "\t<!-- select2 -->
\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
\t<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
\t<!-- DataTables -->
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
\t<!-- Custom -->
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/kits.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "tool/kits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 91,  166 => 89,  162 => 88,  158 => 87,  154 => 86,  149 => 84,  145 => 83,  142 => 82,  139 => 81,  134 => 78,  132 => 77,  66 => 13,  63 => 12,  57 => 9,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'overall/layout.twig' %}

{% block appHeader %}
\t<!-- select2 -->
\t<link
\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/select2/css/select2.min.css\">
\t<!-- DataTables -->
\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
{% endblock %}

{% block appBody %}
\t<div
\t\tclass=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h1>Kit's de Herramientas
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addKitsModal\" onclick=\"addKitsModel()\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\tAñadir nuevo</button>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Herramientas</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.container-fluid -->
\t\t</section>

\t\t<!-- Main content -->
\t\t<section class=\"content\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"messages\"></div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<table id=\"kitsTable\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre del Kit</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Responsable</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Nombre del Kit</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Responsable</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.card-body -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /.card -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.col -->
\t\t\t\t</div>
\t\t\t\t<!-- /.row -->

\t\t\t</div>
\t\t</section>
\t\t<!-- /.content -->
\t</div>
\t{% include 'tool/add_kits.twig' %}
\t{% include 'tool/edit_kits.twig' %}
{% endblock %}

{% block appFooter %}
\t<!-- select2 -->
\t<script src=\"{{ base_url() }}assets/plugins/select2/js/select2.min.js\"></script>
\t<script src=\"{{ base_url() }}assets/plugins/select2/js/i18n/es.js\"></script>
\t<!-- DataTables -->
\t<script src=\"{{ base_url() }}assets/plugins/datatables/jquery.dataTables.js\"></script>
\t<script src=\"{{ base_url() }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
\t<script src=\"{{ base_url() }}assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
\t<script src=\"{{ base_url() }}assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
\t<!-- Custom -->
\t<script src=\"{{ base_url() }}custom/js/kits.js\"></script>
{% endblock %}
", "tool/kits.twig", "C:\\laragon\\www\\cronos\\application\\views\\tool\\kits.twig");
    }
}
