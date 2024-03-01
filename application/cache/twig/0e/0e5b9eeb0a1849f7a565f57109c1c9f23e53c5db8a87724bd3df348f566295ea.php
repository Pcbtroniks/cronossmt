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

/* customer/customers.twig */
class __TwigTemplate_ea6106bdd4b895a7255a67532f11b7e331021bf1dd1a733e3e96c0cb0ee7086e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "customer/customers.twig", 1);
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
";
    }

    // line 12
    public function block_appBody($context, array $blocks = [])
    {
        // line 13
        echo "  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Clientes";
        // line 19
        if (acl_permits("customers.add")) {
            echo "&nbsp;
            <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#createCustomerModal\" onclick=\"createCustomerModel()\"><i class=\"fa fa-plus\"></i> Añadir nuevo cliente</button>";
        }
        // line 21
        echo "            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>

              <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card\">
            <div class=\"card-body\">
              <table id=\"customersTable\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Creación</th>
                  <th>Modificación</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Creación</th>
                  <th>Modificación</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      </div>
    </section>
    <!-- /.content -->
  </div>
  ";
        // line 77
        $this->loadTemplate("customer/create_customer.twig", "customer/customers.twig", 77)->display($context);
        // line 78
        echo "  ";
        $this->loadTemplate("customer/edit_customer.twig", "customer/customers.twig", 78)->display($context);
    }

    // line 81
    public function block_appFooter($context, array $blocks = [])
    {
        // line 82
        echo "<!-- select2 -->
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
<!-- DataTables -->
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- Custom -->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/customer.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "customer/customers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 91,  171 => 89,  167 => 88,  163 => 87,  159 => 86,  154 => 84,  150 => 83,  147 => 82,  144 => 81,  139 => 78,  137 => 77,  79 => 21,  74 => 19,  66 => 13,  63 => 12,  57 => 9,  53 => 8,  48 => 6,  44 => 4,  41 => 3,  31 => 1,);
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
{% endblock %}

{% block appBody %}
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Clientes{% if (acl_permits('customers.add')) %}&nbsp;
            <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#createCustomerModal\" onclick=\"createCustomerModel()\"><i class=\"fa fa-plus\"></i> Añadir nuevo cliente</button>{% endif %}
            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>

              <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"card\">
            <div class=\"card-body\">
              <table id=\"customersTable\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Creación</th>
                  <th>Modificación</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th>Creación</th>
                  <th>Modificación</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      </div>
    </section>
    <!-- /.content -->
  </div>
  {% include 'customer/create_customer.twig' %}
  {% include 'customer/edit_customer.twig' %}
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
<!-- Custom -->
<script src=\"{{ base_url() }}custom/js/customer.js\"></script>
{% endblock %}
", "customer/customers.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/customer/customers.twig");
    }
}
