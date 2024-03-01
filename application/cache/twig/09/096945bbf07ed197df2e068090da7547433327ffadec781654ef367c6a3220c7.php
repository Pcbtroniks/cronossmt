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

/* quotations/quotations.twig */
class __TwigTemplate_a5975ea69fbf99fe02006828e46e75ff5faee949eab3aeb6419b2158375f61b8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "quotations/quotations.twig", 1);
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
\t<link
\trel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
";
    }

    // line 13
    public function block_appBody($context, array $blocks = [])
    {
        // line 14
        echo "\t<div
\t\tclass=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tCotizaciones&nbsp;
\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "quotations/add\" class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\tAñadir cotización</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Cotizaciones</li>
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


\t\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t<table id=\"quotationsTable\" class=\"table table-bordered table-hover mt-6\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<!-- # | Cliente | Asesor | Creación | Expiración | Total | Acciones -->
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t<th>Vendedor</th>
\t\t\t\t\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t<th>Vendedor</th>
\t\t\t\t\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card -->
\t\t\t</div>


\t\t</div>
\t</section>
\t<!-- /.content -->
</div>";
    }

    // line 83
    public function block_appFooter($context, array $blocks = [])
    {
        // line 84
        echo "<!-- select2 -->
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<script>
let quotationsTable = \$(\"#quotationsTable\").DataTable({
  ajax: BASE_URL + \"quotations/list\",
  responsive: true,
  autoWidth: false,
  \"order\": [[ 1, \"desc\" ]],
  language: {
    url: BASE_URL + \"custom/plug-ins/datatables/1.10.25/spanish_mx.json\",
  },
});
</script>
";
    }

    public function getTemplateName()
    {
        return "quotations/quotations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 91,  166 => 90,  162 => 89,  158 => 88,  153 => 86,  149 => 85,  146 => 84,  143 => 83,  78 => 23,  67 => 14,  64 => 13,  58 => 10,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
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
\t<link
\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
{% endblock %}

{% block appBody %}
\t<div
\t\tclass=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tCotizaciones&nbsp;
\t\t\t\t\t\t\t<a href=\"{{ base_url() }}quotations/add\" class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\tAñadir cotización</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Cotizaciones</li>
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


\t\t\t\t<div class=\"card card-primary card-outline\">
\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t<table id=\"quotationsTable\" class=\"table table-bordered table-hover mt-6\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<!-- # | Cliente | Asesor | Creación | Expiración | Total | Acciones -->
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t<th>Vendedor</th>
\t\t\t\t\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t\t\t\t<th>Cliente</th>
\t\t\t\t\t\t\t\t\t<th>Vendedor</th>
\t\t\t\t\t\t\t\t\t<th>Subtotal</th>
\t\t\t\t\t\t\t\t\t<th>Total</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card -->
\t\t\t</div>


\t\t</div>
\t</section>
\t<!-- /.content -->
</div>{% endblock %}{% block appFooter %}
<!-- select2 -->
<script src=\"{{ base_url() }}assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"{{ base_url() }}assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<script>
let quotationsTable = \$(\"#quotationsTable\").DataTable({
  ajax: BASE_URL + \"quotations/list\",
  responsive: true,
  autoWidth: false,
  \"order\": [[ 1, \"desc\" ]],
  language: {
    url: BASE_URL + \"custom/plug-ins/datatables/1.10.25/spanish_mx.json\",
  },
});
</script>
{% endblock %}", "quotations/quotations.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/quotations/quotations.twig");
    }
}
