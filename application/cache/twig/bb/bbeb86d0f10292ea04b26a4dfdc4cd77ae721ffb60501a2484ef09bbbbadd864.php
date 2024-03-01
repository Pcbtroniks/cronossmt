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

/* users/users.twig */
class __TwigTemplate_a1ea1d66b569d2c2e3a6e36023fd53217574253409cd1e6465f4a70578f5ec67 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "users/users.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = [])
    {
        // line 4
        echo "<!-- DataTables -->
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css\">
";
    }

    // line 9
    public function block_appBody($context, array $blocks = [])
    {
        // line 10
        echo "  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>
            Usuarios";
        // line 17
        if (acl_permits("users.add")) {
            echo "&nbsp;
            <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addUserModal\" onclick=\"addUserModel()\"><i class=\"fa fa-plus\"></i> Añadir nuevo</button>";
        }
        // line 19
        echo "            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"messages\"></div>
            <table id=\"usersTable\" class=\"table table-bordered table-striped\">
              <thead>
                <tr>
                  <th>Correo electrónico</th>
                  <th>Rol</th>
                  <th>Estado</th>
                  <th>Último acceso</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Correo electrónico</th>
                  <th>Rol</th>
                  <th>Estado</th>
                  <th>Último acceso</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  ";
        // line 64
        $this->loadTemplate("users/add_user.twig", "users/users.twig", 64)->display($context);
        // line 65
        echo "  ";
        $this->loadTemplate("users/edit_user.twig", "users/users.twig", 65)->display($context);
        // line 66
        echo "  ";
        $this->loadTemplate("users/change_password.twig", "users/users.twig", 66)->display($context);
    }

    // line 69
    public function block_appFooter($context, array $blocks = [])
    {
        // line 70
        echo "<!-- DataTables -->
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- Custom -->
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/user.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "users/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 76,  149 => 74,  145 => 73,  141 => 72,  137 => 71,  134 => 70,  131 => 69,  126 => 66,  123 => 65,  121 => 64,  74 => 19,  69 => 17,  60 => 10,  57 => 9,  51 => 6,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
            <h1>
            Usuarios{% if (acl_permits('users.add')) %}&nbsp;
            <button class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#addUserModal\" onclick=\"addUserModel()\"><i class=\"fa fa-plus\"></i> Añadir nuevo</button>{% endif %}
            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"card\">
          <div class=\"card-body\">
            <div class=\"messages\"></div>
            <table id=\"usersTable\" class=\"table table-bordered table-striped\">
              <thead>
                <tr>
                  <th>Correo electrónico</th>
                  <th>Rol</th>
                  <th>Estado</th>
                  <th>Último acceso</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Correo electrónico</th>
                  <th>Rol</th>
                  <th>Estado</th>
                  <th>Último acceso</th>
                  <th>Acciones</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  {% include 'users/add_user.twig' %}
  {% include 'users/edit_user.twig' %}
  {% include 'users/change_password.twig' %}
{% endblock %}

{% block appFooter %}
<!-- DataTables -->
<script src=\"{{ base_url() }}assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-responsive/js/dataTables.responsive.min.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js\"></script>
<!-- Custom -->
<script src=\"{{ base_url() }}custom/js/user.js\"></script>
{% endblock %}
", "users/users.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/users/users.twig");
    }
}
