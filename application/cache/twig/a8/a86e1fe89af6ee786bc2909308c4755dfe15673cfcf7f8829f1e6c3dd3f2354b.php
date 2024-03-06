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
\t\t\t\t\t\t\tService Report
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item\">Maintenance</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Service Report</li>
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

\t\t\t\t\t\t\t<h3>Register Service Report</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form id=\"addConceptForm\" autocomplete=\"off\">


\t\t\t\t\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idConcept\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"customer_address\">Customer Address</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-address-card\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"customer_address\" id=\"customer_address\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"type_of_service\">Type of Service Call</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"type_of_service\" id=\"type_of_service\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"invoice_to_quote\">Invoice to quote</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"invoice_to_quote\" id=\"invoice_to_quote\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"customer_po\">Customer PO</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"customer_po\" id=\"customer_po\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"mc_type\">M/C Type</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mc_type\" id=\"mc_type\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"model\">Model</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"model\" id=\"model\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"serial\">Serial Number</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-hashtag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"serial\" id=\"serial\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"mfg_year\">Mfg year</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mfg_year\" id=\"model\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline\"><b>Status: &nbsp;</b></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"status\" id=\"status_open\" value=\"open\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"status_open\">Open</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"status\" id=\"status_closed\" value=\"closed\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"status_closed\">Closed</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline\"><b>Overtime Accepted: &nbsp;</b></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"overtime_accepted\" id=\"overtime_yes\" value=\"yes\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"overtime_yes\">Yes</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"overtime_accepted\" id=\"overtime_no\" value=\"no\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"overtime_no\">No</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline\"><b>Parts Used: &nbsp;</b></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parts_used\" id=\"parts_used_yes\" value=\"yes\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"parts_used_yes\">Yes</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parts_used\" id=\"parts_used_no\" value=\"no\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"parts_used_no\">No</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"service_details\">Service Details</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"service_details\" class=\"form-control\" id=\"service_details\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"operation\">Operation</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"operation\" id=\"operation\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Date</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"operation\">Start time</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"operation\" id=\"operation\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">End time</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Total</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"operation\">Type</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"operation\" id=\"operation\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Technician</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-none btn-group float-right\" role=\"group\" aria-label=\"Basic example\">

\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-submit-concept\" value=\"Añadir\"/>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-concept-cancel\">Cancelar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-5 float-right\" id=\"guardarRequisicion\" form=\"customerForm\">Save</button>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /.card -->
\t\t\t</div>


\t\t</div>
\t</section>
\t<!-- /.content -->
</div>";
    }

    // line 334
    public function block_appFooter($context, array $blocks = [])
    {
        // line 335
        echo "<!-- select2 -->
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- moment -->
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/moment.min.js\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/locale/es.js\"></script>
<!-- date-range-picker -->
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SweetAlert2 -->
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/sweetalert2/sweetalert2.min.js\"></script>
<!-- Quotations -->
<script src=\"";
        // line 351
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
        return array (  448 => 351,  443 => 349,  438 => 347,  433 => 345,  429 => 344,  424 => 342,  420 => 341,  416 => 340,  412 => 339,  407 => 337,  403 => 336,  400 => 335,  397 => 334,  84 => 25,  81 => 24,  68 => 14,  63 => 12,  58 => 10,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
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
\t\t\t\t\t\t\tService Report
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<ol class=\"breadcrumb float-sm-right\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">Inicio</li>
                            <li class=\"breadcrumb-item\">Maintenance</li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\">Service Report</li>
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

\t\t\t\t\t\t\t<h3>Register Service Report</h3>

\t\t\t\t\t\t\t<hr class=\"mb-4\">

\t\t\t\t\t\t\t<form id=\"addConceptForm\" autocomplete=\"off\">


\t\t\t\t\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idConcept\">

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"customer_address\">Customer Address</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-address-card\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"customer_address\" id=\"customer_address\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"type_of_service\">Type of Service Call</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"type_of_service\" id=\"type_of_service\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"invoice_to_quote\">Invoice to quote</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"invoice_to_quote\" id=\"invoice_to_quote\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"customer_po\">Customer PO</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"customer_po\" id=\"customer_po\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"mc_type\">M/C Type</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mc_type\" id=\"mc_type\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"model\">Model</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"model\" id=\"model\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"serial\">Serial Number</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-hashtag\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"serial\" id=\"serial\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"mfg_year\">Mfg year</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"mfg_year\" id=\"model\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline\"><b>Status: &nbsp;</b></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"status\" id=\"status_open\" value=\"open\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"status_open\">Open</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"status\" id=\"status_closed\" value=\"closed\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"status_closed\">Closed</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline\"><b>Overtime Accepted: &nbsp;</b></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"overtime_accepted\" id=\"overtime_yes\" value=\"yes\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"overtime_yes\">Yes</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"overtime_accepted\" id=\"overtime_no\" value=\"no\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"overtime_no\">No</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<p class=\"d-inline\"><b>Parts Used: &nbsp;</b></p>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parts_used\" id=\"parts_used_yes\" value=\"yes\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"parts_used_yes\">Yes</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parts_used\" id=\"parts_used_no\" value=\"no\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"parts_used_no\">No</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label for=\"service_details\">Service Details</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"service_details\" class=\"form-control\" id=\"service_details\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"operation\">Operation</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"operation\" id=\"operation\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Date</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"operation\">Start time</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"operation\" id=\"operation\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">End time</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-4\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Total</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-row\">

                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"operation\">Type</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-wrench\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"operation\" id=\"operation\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    <div class=\"form-group col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label for=\"date\">Technician</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"date\" id=\"date\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"d-none btn-group float-right\" role=\"group\" aria-label=\"Basic example\">

\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary btn-submit-concept\" value=\"Añadir\"/>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-concept-cancel\">Cancelar</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-5 float-right\" id=\"guardarRequisicion\" form=\"customerForm\">Save</button>

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
