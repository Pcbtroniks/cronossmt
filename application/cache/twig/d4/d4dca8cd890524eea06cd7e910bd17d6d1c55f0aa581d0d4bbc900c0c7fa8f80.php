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

/* inventory/televisiones/televisiones.twig */
class __TwigTemplate_46c8804ab3e2e40ac29ca0eadc29b7b1aecd54ce846314280eb4efd77fd72eb7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "inventory/televisiones/televisiones.twig", 1);
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
\t\t\t\t\t\t<h1>Televisiones";
        // line 19
        if (acl_permits("inventory.add")) {
            echo "&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addEquipmentModal\" onclick=\"addEquipmentModel()\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
              Añadir nuevo</button>";
        }
        // line 23
        echo "\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Televisiones</li>
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
        // line 80
        $this->loadTemplate("inventory/televisiones/add_televisiones.twig", "inventory/televisiones/televisiones.twig", 80)->display($context);
        // line 81
        echo "\t";
        $this->loadTemplate("inventory/televisiones/edit_televisiones.twig", "inventory/televisiones/televisiones.twig", 81)->display($context);
        // line 82
        echo "\t";
        $this->loadTemplate("inventory/televisiones/view_televisiones.twig", "inventory/televisiones/televisiones.twig", 82)->display($context);
    }

    // line 85
    public function block_appFooter($context, array $blocks = [])
    {
        // line 86
        echo "\t<!-- select2 -->
\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
\t<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
\t<!-- DataTables -->
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
\t<!-- Custom -->
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/televisiones.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "inventory/televisiones/televisiones.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 95,  177 => 93,  173 => 92,  169 => 91,  165 => 90,  160 => 88,  156 => 87,  153 => 86,  150 => 85,  145 => 82,  142 => 81,  140 => 80,  81 => 23,  74 => 19,  65 => 12,  62 => 11,  56 => 8,  52 => 7,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
\t\t\t\t\t\t<h1>Televisiones{% if (acl_permits('inventory.add')) %}&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addEquipmentModal\" onclick=\"addEquipmentModel()\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
              Añadir nuevo</button>{% endif %}
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Televisiones</li>
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
\t{% include 'inventory/televisiones/add_televisiones.twig' %}
\t{% include 'inventory/televisiones/edit_televisiones.twig' %}
\t{% include 'inventory/televisiones/view_televisiones.twig' %}
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
\t<script src=\"{{ base_url() }}custom/js/televisiones.js\"></script>
{% endblock %}
", "inventory/televisiones/televisiones.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/inventory/televisiones/televisiones.twig");
    }
}
