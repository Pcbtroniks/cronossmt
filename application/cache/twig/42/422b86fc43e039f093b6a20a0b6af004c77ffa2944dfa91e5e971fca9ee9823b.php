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

/* inventory/printer/printer.twig */
class __TwigTemplate_9d13190d6c6f611391455a28ea3aa121c56c32bee0b1bc4d688d43303f8e6dbb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "inventory/printer/printer.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = [])
    {
        // line 4
        echo "  <!-- select2 -->
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/css/select2.min.css\">
\t<!-- DataTables -->
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
";
    }

    // line 11
    public function block_appBody($context, array $blocks = [])
    {
        // line 12
        echo "\t<div
\t\tclass=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h1>Impresoras";
        // line 19
        if (acl_permits("inventory.add")) {
            echo "&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addEquipmentModal\" onclick=\"addEquipmentModel()\"><i class=\"fa fa-plus\"></i>Añadir nuevo</button>";
        }
        // line 21
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Impresoras</li>
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
\t\t\t\t\t\t\t\t<table id=\"equipmentTable\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Numero de serie</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Area/Encargado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Marca</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Numero de serie</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Area/Encargado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Marca</th>
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
        // line 78
        $this->loadTemplate("inventory/printer/add_printer.twig", "inventory/printer/printer.twig", 78)->display($context);
        // line 79
        echo "\t";
        $this->loadTemplate("inventory/printer/edit_printer.twig", "inventory/printer/printer.twig", 79)->display($context);
        // line 80
        echo "\t";
        $this->loadTemplate("inventory/printer/view_printer.twig", "inventory/printer/printer.twig", 80)->display($context);
    }

    // line 83
    public function block_appFooter($context, array $blocks = [])
    {
        // line 84
        echo "\t<!-- select2 -->
\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
\t<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
\t<!-- DataTables -->
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
\t<!-- Custom -->
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/printer.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "inventory/printer/printer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 93,  175 => 91,  171 => 90,  167 => 89,  163 => 88,  158 => 86,  154 => 85,  151 => 84,  148 => 83,  143 => 80,  140 => 79,  138 => 78,  79 => 21,  74 => 19,  65 => 12,  62 => 11,  56 => 8,  52 => 7,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
  <!-- select2 -->
  <link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/select2/css/select2.min.css\">
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
\t\t\t\t\t\t<h1>Impresoras{% if (acl_permits('inventory.add')) %}&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addEquipmentModal\" onclick=\"addEquipmentModel()\"><i class=\"fa fa-plus\"></i>Añadir nuevo</button>{% endif %}
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Impresoras</li>
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
\t\t\t\t\t\t\t\t<table id=\"equipmentTable\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Numero de serie</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Area/Encargado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Marca</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Numero de serie</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Area/Encargado</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Marca</th>
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
\t{% include 'inventory/printer/add_printer.twig' %}
\t{% include 'inventory/printer/edit_printer.twig' %}
\t{% include 'inventory/printer/view_printer.twig' %}
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
\t<script src=\"{{ base_url() }}custom/js/printer.js\"></script>
{% endblock %}
", "inventory/printer/printer.twig", "C:\\laragon\\www\\cronos\\application\\views\\inventory\\printer\\printer.twig");
    }
}
