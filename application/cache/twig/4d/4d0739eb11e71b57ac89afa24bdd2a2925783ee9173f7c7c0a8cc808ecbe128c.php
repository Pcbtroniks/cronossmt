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

/* tickets/tickets.twig */
class __TwigTemplate_0034b7b98d9e6e1c7954377e1e7467ca061187267b0cb1b7775c6180572f860d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "tickets/tickets.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = [])
    {
        // line 4
        echo "<!-- select2 -->
<link
rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/css/select2.min.css\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
<!-- daterange picker -->
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/daterangepicker/daterangepicker.css\">
";
    }

    // line 14
    public function block_appBody($context, array $blocks = [])
    {
        // line 15
        echo "  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>
              Tickets&nbsp;
              <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addTicketModal\" onclick=\"addTicketModel()\"><i class=\"fa fa-plus\"></i> Añadir nuevo</button>
              <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#downloadReportModal\" onclick=\"downloadReportModel()\"><i class=\"fas fa-download\"></i> Descargar reporte</button>
              <a href=\"https://www.ilovepdf.com/es/unir_pdf\" target=\"_BLANK\"><button class=\"btn btn-secondary btn-sm\"><i class=\"fas fa-paperclip\"></i> Unir PDF's</button></a>
            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Tickets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>


          <div class=\"card card-primary card-outline\">
            <div class=\"card-body\">

              <table id=\"ticketsTable\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Solicita</th>
                  <th>Creación</th>
                  <th>Actualización</th>
                  <th>Técnico</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Solicita</th>
                  <th>Creación</th>
                  <th>Actualización</th>
                  <th>Técnico</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>

            </div>
          </div>
          <!-- /.card -->
        </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
  ";
        // line 84
        $this->loadTemplate("tickets/add_ticket.twig", "tickets/tickets.twig", 84)->display($context);
        // line 85
        echo "  ";
        $this->loadTemplate("tickets/edit_ticket.twig", "tickets/tickets.twig", 85)->display($context);
        // line 86
        echo "  ";
        $this->loadTemplate("tickets/view_ticket.twig", "tickets/tickets.twig", 86)->display($context);
        // line 87
        echo "  ";
        $this->loadTemplate("tickets/download_report.twig", "tickets/tickets.twig", 87)->display($context);
    }

    // line 90
    public function block_appFooter($context, array $blocks = [])
    {
        // line 91
        echo "<!-- select2 -->
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- moment -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/moment.min.js\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/locale/es.js\"></script>
<!-- date-range-picker -->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- Tickets -->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/tickets.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "tickets/tickets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 105,  196 => 103,  191 => 101,  187 => 100,  182 => 98,  178 => 97,  174 => 96,  170 => 95,  165 => 93,  161 => 92,  158 => 91,  155 => 90,  150 => 87,  147 => 86,  144 => 85,  142 => 84,  71 => 15,  68 => 14,  62 => 11,  57 => 9,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
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
<link
rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/select2/css/select2.min.css\">
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
<!-- daterange picker -->
<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/daterangepicker/daterangepicker.css\">
{% endblock %}

{% block appBody %}
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>
              Tickets&nbsp;
              <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addTicketModal\" onclick=\"addTicketModel()\"><i class=\"fa fa-plus\"></i> Añadir nuevo</button>
              <button class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#downloadReportModal\" onclick=\"downloadReportModel()\"><i class=\"fas fa-download\"></i> Descargar reporte</button>
              <a href=\"https://www.ilovepdf.com/es/unir_pdf\" target=\"_BLANK\"><button class=\"btn btn-secondary btn-sm\"><i class=\"fas fa-paperclip\"></i> Unir PDF's</button></a>
            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Tickets</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>


          <div class=\"card card-primary card-outline\">
            <div class=\"card-body\">

              <table id=\"ticketsTable\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Solicita</th>
                  <th>Creación</th>
                  <th>Actualización</th>
                  <th>Técnico</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Solicita</th>
                  <th>Creación</th>
                  <th>Actualización</th>
                  <th>Técnico</th>
                  <th>Estado</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>

            </div>
          </div>
          <!-- /.card -->
        </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
  {% include 'tickets/add_ticket.twig' %}
  {% include 'tickets/edit_ticket.twig' %}
  {% include 'tickets/view_ticket.twig' %}
  {% include 'tickets/download_report.twig' %}
{% endblock %}

{% block appFooter %}
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
<!-- Tickets -->
<script src=\"{{ base_url() }}custom/js/tickets.js\"></script>
{% endblock %}
", "tickets/tickets.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/tickets/tickets.twig");
    }
}
