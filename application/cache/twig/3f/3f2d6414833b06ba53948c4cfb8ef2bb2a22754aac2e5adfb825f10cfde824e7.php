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

/* smt/smt_incidence.twig */
class __TwigTemplate_15e87b084b0a3cb4dd3cfddf7735494aa978b52bbb96f0de575bcbea80c76d1c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "smt/smt_incidence.twig", 1);
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
\t<!-- daterange picker -->
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/daterangepicker/daterangepicker.css\">
    <!-- SweetAlert2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css\">
\t<style>

\t.form-control.is-invalid, .was-validated .form-control:invalid ~ .select2 .select2-selection {
\t\tborder: 1px solid red;
\t}

\t</style>
";
    }

    // line 24
    public function block_appBody($context, array $blocks = [])
    {
        // line 25
        echo "\t<div
\t\tclass=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tIncidencias
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item\">Incidencias</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Nueva incidencia</li>
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

\t\t\t\t\t\t<div class=\"customerDiv mb-4\">

\t\t\t\t\t\t\t<h3>Cotización</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form class=\"needs-validation\" id=\"customerForm\" novalidate>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"\">Cliente</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2\"  style=\"width: 100%;\" required>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
        \t\t\t\t\t\t\t\t\tEl cliente es un campo requerido.
      \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"validityDays\">Días de validez</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" class=\"form-control validity-days\" name=\"validityDays\" id=\"validity_days\" required>

\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
        \t\t\t\t\t\t\t\t\tLos días de validez son requeridos.
      \t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"addConcept mb-4\" style=\"display:none;\">

\t\t\t\t\t\t\t<h3>Nuevo Concepto</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form id=\"addConceptForm\" autocomplete=\"off\">


\t\t\t\t\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idConcept\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Descripción</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-keyboard\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"description\" id=\"description\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Cantidad</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cubes\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" class=\"form-control\" name=\"quantity\" id=\"quantity\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Utilidad (%)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-percent\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"0\" class=\"form-control\" name=\"utility\" id=\"utility\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Precio Unitario (Sin IVA)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"unitPrice\" id=\"unit_price\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger rounded-0\" onclick=\"subtractVAT()\"><i class=\"fas fa-calculator\"></i> Restar IVA</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Precio Unitario (cliente)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"unitPriceCustomer\" readonly>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Importe (cliente)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"totalPriceCustomer\" readonly>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"btn-group float-right\" role=\"group\" aria-label=\"Basic example\">

\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-submit-concept\" value=\"Añadir\"/>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-concept-cancel\">Cancelar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tConceptos&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" id=\"btnShowAdd\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\tAñadir concepto
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t<table id=\"quotationTable\" class=\"table table-bordered table-hover mt-6\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t\t\t\t<th>Utilidad</th>
\t\t\t\t\t\t\t\t\t<th>Precio Unitario (cliente)</th>
                                    <th>Importe (cliente)</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t\t\t\t<th>Utilidad</th>
\t\t\t\t\t\t\t\t\t<th>Precio Unitario (cliente)</th>
                                    <th>Importe (cliente)</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-5 float-right\" id=\"guardarRequisicion\" form=\"customerForm\">Guardar cotización</button>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card -->
\t\t\t</div>


\t\t</div>
\t</section>
\t<!-- /.content -->
</div>";
    }

    // line 241
    public function block_appFooter($context, array $blocks = [])
    {
        // line 242
        echo "<!-- select2 -->
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- moment -->
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/moment.min.js\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/locale/es.js\"></script>
<!-- date-range-picker -->
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SweetAlert2 -->
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/sweetalert2/sweetalert2.min.js\"></script>
<!-- Quotations -->
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/quotations.js\"></script>
<!-- UUID -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uuid/8.1.0/uuidv4.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "smt/smt_incidence.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 258,  350 => 256,  345 => 254,  340 => 252,  336 => 251,  331 => 249,  327 => 248,  323 => 247,  319 => 246,  314 => 244,  310 => 243,  307 => 242,  304 => 241,  84 => 25,  81 => 24,  68 => 14,  63 => 12,  58 => 10,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
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
\t<!-- daterange picker -->
\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/daterangepicker/daterangepicker.css\">
    <!-- SweetAlert2 -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css\">
\t<style>

\t.form-control.is-invalid, .was-validated .form-control:invalid ~ .select2 .select2-selection {
\t\tborder: 1px solid red;
\t}

\t</style>
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
\t\t\t\t\t\t\tIncidencias
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item\">Incidencias</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Nueva incidencia</li>
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

\t\t\t\t\t\t<div class=\"customerDiv mb-4\">

\t\t\t\t\t\t\t<h3>Cotización</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form class=\"needs-validation\" id=\"customerForm\" novalidate>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"\">Cliente</label>
\t\t\t\t\t\t\t\t\t\t<select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2\"  style=\"width: 100%;\" required>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
        \t\t\t\t\t\t\t\t\tEl cliente es un campo requerido.
      \t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"validityDays\">Días de validez</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" class=\"form-control validity-days\" name=\"validityDays\" id=\"validity_days\" required>

\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
        \t\t\t\t\t\t\t\t\tLos días de validez son requeridos.
      \t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"addConcept mb-4\" style=\"display:none;\">

\t\t\t\t\t\t\t<h3>Nuevo Concepto</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form id=\"addConceptForm\" autocomplete=\"off\">


\t\t\t\t\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idConcept\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Descripción</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-keyboard\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"description\" id=\"description\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Cantidad</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cubes\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" class=\"form-control\" name=\"quantity\" id=\"quantity\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Utilidad (%)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-percent\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"0\" class=\"form-control\" name=\"utility\" id=\"utility\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Precio Unitario (Sin IVA)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" step=\"0.01\" class=\"form-control\" name=\"unitPrice\" id=\"unit_price\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger rounded-0\" onclick=\"subtractVAT()\"><i class=\"fas fa-calculator\"></i> Restar IVA</button>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Precio Unitario (cliente)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"unitPriceCustomer\" readonly>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label>Importe (cliente)</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" step=\"0.01\" class=\"form-control\" id=\"totalPriceCustomer\" readonly>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"btn-group float-right\" role=\"group\" aria-label=\"Basic example\">

\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-submit-concept\" value=\"Añadir\"/>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-concept-cancel\">Cancelar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tConceptos&nbsp;
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" id=\"btnShowAdd\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\tAñadir concepto
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h3>

\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t<table id=\"quotationTable\" class=\"table table-bordered table-hover mt-6\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t\t\t\t<th>Utilidad</th>
\t\t\t\t\t\t\t\t\t<th>Precio Unitario (cliente)</th>
                                    <th>Importe (cliente)</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Descripción</th>
\t\t\t\t\t\t\t\t\t<th>Cantidad</th>
\t\t\t\t\t\t\t\t\t<th>Utilidad</th>
\t\t\t\t\t\t\t\t\t<th>Precio Unitario (cliente)</th>
                                    <th>Importe (cliente)</th>
\t\t\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-5 float-right\" id=\"guardarRequisicion\" form=\"customerForm\">Guardar cotización</button>

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
<!-- moment -->
<script src=\"{{ base_url() }}assets/plugins/moment/moment.min.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/moment/locale/es.js\"></script>
<!-- date-range-picker -->
<script src=\"{{ base_url() }}assets/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SweetAlert2 -->
<script src=\"{{ base_url() }}assets/plugins/sweetalert2/sweetalert2.min.js\"></script>
<!-- Quotations -->
<script src=\"{{ base_url() }}custom/js/quotations.js\"></script>
<!-- UUID -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uuid/8.1.0/uuidv4.min.js\"></script>
{% endblock %}", "smt/smt_incidence.twig", "C:\\laragon\\www\\cronos\\application\\views\\smt\\smt_incidence.twig");
    }
}
