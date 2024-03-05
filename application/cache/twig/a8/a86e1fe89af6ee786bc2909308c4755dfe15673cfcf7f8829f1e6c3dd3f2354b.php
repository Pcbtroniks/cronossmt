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

/* smt/add_maintenance.twig */
class __TwigTemplate_7900971ad042d57e47db6f3520a4e6b72628623baa52dd2778382372a517f8d2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "smt/add_maintenance.twig", 1);
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
\t\t\t\t\t\t\tInforme de servicio
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item\">Mantenimiento</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Informe de servicio</li>
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

\t\t\t\t\t\t<div class=\"addConcept mb-4\" >

\t\t\t\t\t\t\t<h3>Registrar informe de servicio</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form id=\"addConceptForm\" autocomplete=\"off\">


\t\t\t\t\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idConcept\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"employ_number\">No. de empleado</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-solid fa-hashtag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" class=\"form-control\" name=\"employ_number\" id=\"employ_number\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"current_date\">Fecha</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"current_date\" id=\"current_date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"current_date\">Horas</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"current_date\" id=\"current_date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"immediate_boss\">Autorizo</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-tie\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"immediate_boss\" id=\"immediate_boss\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea1\">Actividad</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-none btn-group float-right\" role=\"group\" aria-label=\"Basic example\">

\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-submit-concept\" value=\"Añadir\"/>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-concept-cancel\">Cancelar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-5 float-right\" id=\"guardarRequisicion\" form=\"customerForm\">Guardar</button>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card -->
\t\t\t</div>


\t\t</div>
\t</section>
\t<!-- /.content -->
</div>";
    }

    // line 164
    public function block_appFooter($context, array $blocks = [])
    {
        // line 165
        echo "<!-- select2 -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- moment -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/moment.min.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/locale/es.js\"></script>
<!-- date-range-picker -->
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SweetAlert2 -->
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/sweetalert2/sweetalert2.min.js\"></script>
<!-- Quotations -->
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/quotations.js\"></script>
<!-- UUID -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/uuid/8.1.0/uuidv4.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "smt/add_maintenance.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 181,  273 => 179,  268 => 177,  263 => 175,  259 => 174,  254 => 172,  250 => 171,  246 => 170,  242 => 169,  237 => 167,  233 => 166,  230 => 165,  227 => 164,  84 => 25,  81 => 24,  68 => 14,  63 => 12,  58 => 10,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
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
\t\t\t\t\t\t\tInforme de servicio
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item\">Mantenimiento</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Informe de servicio</li>
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

\t\t\t\t\t\t<div class=\"addConcept mb-4\" >

\t\t\t\t\t\t\t<h3>Registrar informe de servicio</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form id=\"addConceptForm\" autocomplete=\"off\">


\t\t\t\t\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idConcept\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"name\">Nombre</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"employ_number\">No. de empleado</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-solid fa-hashtag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" class=\"form-control\" name=\"employ_number\" id=\"employ_number\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"current_date\">Fecha</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"current_date\" id=\"current_date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"current_date\">Horas</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"current_date\" id=\"current_date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"immediate_boss\">Autorizo</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user-tie\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"immediate_boss\" id=\"immediate_boss\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"exampleFormControlTextarea1\">Actividad</label>
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-none btn-group float-right\" role=\"group\" aria-label=\"Basic example\">

\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-submit-concept\" value=\"Añadir\"/>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-concept-cancel\">Cancelar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-5 float-right\" id=\"guardarRequisicion\" form=\"customerForm\">Guardar</button>

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
{% endblock %}", "smt/add_maintenance.twig", "C:\\laragon\\www\\cronos\\application\\views\\smt\\add_maintenance.twig");
    }
}
