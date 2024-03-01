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

/* users/edit_user.twig */
class __TwigTemplate_dc441a3c30ad9ca163e2e1e962d9c9641c39466fe03d3f05da7acc94ba5ae239 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "\t<!-- add member -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editUserModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"fa fa-user\"></i> &nbsp;Editar perfil</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "users/edit_user\" id=\"editForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Correo electrónico</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control input-email\" name=\"upd_email\" placeholder=\"Correo electrónico\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"banned\">Estado</label>
\t\t\t\t\t  <select class=\"form-control input-banned\" name=\"upd_banned\">
\t\t\t\t\t    <option value=\"\" selected hidden>SELECCIONAR ROL</option>
\t\t\t\t\t    <option value=\"0\">Activo</option>
\t\t\t\t\t    <option value=\"1\">Inactivo</option>
\t\t\t\t\t  </select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label for=\"auth_level\">Rol</label>
\t\t\t\t\t  <select class=\"form-control input-auth-level\" name=\"upd_auth_level\">
\t\t\t\t\t    <option value=\"\" selected hidden>SELECCIONAR ROL</option>
\t\t\t\t\t    <option value=\"1\">Cliente</option>
\t\t\t\t\t    <option value=\"2\">Editor</option>
\t\t\t\t\t    <option value=\"3\">Técnico</option>
              <option value=\"9\">Administrador</option>
\t\t\t\t\t  </select>
\t\t\t\t\t</div>

\t\t\t\t\t<label>Permisos ACL</label>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t<div class=\"nav flex-column nav-tabs h-100\" id=\"vert-tabs-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"vert-tabs-upd-users-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-users\" role=\"tab\" aria-controls=\"vert-tabs-upd-users\" aria-selected=\"false\">Usuarios</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-customers-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-customers\" role=\"tab\" aria-controls=\"vert-tabs-upd-customers\" aria-selected=\"false\">Clientes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-inventory-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-inventory\" role=\"tab\" aria-controls=\"vert-tabs-upd-inventory\" aria-selected=\"false\">Inventario</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-reports-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-reports\" role=\"tab\" aria-controls=\"vert-tabs-upd-reports\" aria-selected=\"false\">Reportes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-kits-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-kits\" role=\"tab\" aria-controls=\"vert-tabs-upd-kits\" aria-selected=\"false\">Kits</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-tools-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-tools\" role=\"tab\" aria-controls=\"vert-tabs-upd-tools\" aria-selected=\"false\">Herramientas</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-software-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-software\" role=\"tab\" aria-controls=\"vert-tabs-upd-software\" aria-selected=\"false\">Software</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-7 col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"vert-tabs-tabContent\">

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"vert-tabs-upd-users\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-users-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Usuarios</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-1\" type=\"checkbox\" name=\"users_add\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-3\" type=\"checkbox\" name=\"users_edit\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-4\" type=\"checkbox\" name=\"users_disable\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-2\" type=\"checkbox\" name=\"users_view\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-5\" type=\"checkbox\" name=\"users_list_records\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-customers\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-customers-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Clientes</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-6\" type=\"checkbox\" name=\"customers_add\" value=\"6\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-8\" type=\"checkbox\" name=\"customers_edit\" value=\"8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-9\" type=\"checkbox\" name=\"customers_disable\" value=\"9\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-7\" type=\"checkbox\" name=\"customers_view\" value=\"7\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-10\" type=\"checkbox\" name=\"customers_list_records\" value=\"10\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-inventory\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-inventory-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-11\" type=\"checkbox\" name=\"inventory_add\" value=\"11\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-13\" type=\"checkbox\" name=\"inventory_edit\" value=\"13\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-12\" type=\"checkbox\" name=\"inventory_view\" value=\"12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-15\" type=\"checkbox\" name=\"inventory_list_records\" value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-reports\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-reports-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Reportes de Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-16\" type=\"checkbox\" name=\"reports_inventory_add\" value=\"16\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-17\" type=\"checkbox\" name=\"reports_inventory_view\" value=\"17\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-18\" type=\"checkbox\" name=\"reports_inventory_list_records\" value=\"18\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-kits\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-kits-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Kits</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-19\" type=\"checkbox\" name=\"kits_add\" value=\"19\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-21\" type=\"checkbox\" name=\"kits_edit\" value=\"21\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-20\" type=\"checkbox\" name=\"kits_view\" value=\"20\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-23\" type=\"checkbox\" name=\"kits_list_records\" value=\"23\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-tools\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-tools-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Herramientas</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-24\" type=\"checkbox\" name=\"tools_add\" value=\"24\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-26\" type=\"checkbox\" name=\"tools_edit\" value=\"26\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-25\" type=\"checkbox\" name=\"tools_view\" value=\"25\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-28\" type=\"checkbox\" name=\"tools_list_records\" value=\"28\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-software\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-software-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Software</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-29\" type=\"checkbox\" name=\"software_view_section\" value=\"29\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Visualizar sección</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t        <button type=\"submit\" class=\"btn btn-success\">Editar perfil</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./add member -->
";
    }

    public function getTemplateName()
    {
        return "users/edit_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("\t<!-- add member -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editUserModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"fa fa-user\"></i> &nbsp;Editar perfil</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"{{ base_url() }}users/edit_user\" id=\"editForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Correo electrónico</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control input-email\" name=\"upd_email\" placeholder=\"Correo electrónico\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"banned\">Estado</label>
\t\t\t\t\t  <select class=\"form-control input-banned\" name=\"upd_banned\">
\t\t\t\t\t    <option value=\"\" selected hidden>SELECCIONAR ROL</option>
\t\t\t\t\t    <option value=\"0\">Activo</option>
\t\t\t\t\t    <option value=\"1\">Inactivo</option>
\t\t\t\t\t  </select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t  <label for=\"auth_level\">Rol</label>
\t\t\t\t\t  <select class=\"form-control input-auth-level\" name=\"upd_auth_level\">
\t\t\t\t\t    <option value=\"\" selected hidden>SELECCIONAR ROL</option>
\t\t\t\t\t    <option value=\"1\">Cliente</option>
\t\t\t\t\t    <option value=\"2\">Editor</option>
\t\t\t\t\t    <option value=\"3\">Técnico</option>
              <option value=\"9\">Administrador</option>
\t\t\t\t\t  </select>
\t\t\t\t\t</div>

\t\t\t\t\t<label>Permisos ACL</label>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t<div class=\"nav flex-column nav-tabs h-100\" id=\"vert-tabs-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"vert-tabs-upd-users-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-users\" role=\"tab\" aria-controls=\"vert-tabs-upd-users\" aria-selected=\"false\">Usuarios</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-customers-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-customers\" role=\"tab\" aria-controls=\"vert-tabs-upd-customers\" aria-selected=\"false\">Clientes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-inventory-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-inventory\" role=\"tab\" aria-controls=\"vert-tabs-upd-inventory\" aria-selected=\"false\">Inventario</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-reports-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-reports\" role=\"tab\" aria-controls=\"vert-tabs-upd-reports\" aria-selected=\"false\">Reportes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-kits-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-kits\" role=\"tab\" aria-controls=\"vert-tabs-upd-kits\" aria-selected=\"false\">Kits</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-tools-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-tools\" role=\"tab\" aria-controls=\"vert-tabs-upd-tools\" aria-selected=\"false\">Herramientas</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-upd-software-tab\" data-toggle=\"pill\" href=\"#vert-tabs-upd-software\" role=\"tab\" aria-controls=\"vert-tabs-upd-software\" aria-selected=\"false\">Software</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-7 col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"vert-tabs-tabContent\">

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"vert-tabs-upd-users\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-users-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Usuarios</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-1\" type=\"checkbox\" name=\"users_add\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-3\" type=\"checkbox\" name=\"users_edit\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-4\" type=\"checkbox\" name=\"users_disable\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-2\" type=\"checkbox\" name=\"users_view\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-5\" type=\"checkbox\" name=\"users_list_records\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-customers\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-customers-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Clientes</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-6\" type=\"checkbox\" name=\"customers_add\" value=\"6\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-8\" type=\"checkbox\" name=\"customers_edit\" value=\"8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-9\" type=\"checkbox\" name=\"customers_disable\" value=\"9\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-7\" type=\"checkbox\" name=\"customers_view\" value=\"7\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-10\" type=\"checkbox\" name=\"customers_list_records\" value=\"10\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-inventory\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-inventory-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-11\" type=\"checkbox\" name=\"inventory_add\" value=\"11\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-13\" type=\"checkbox\" name=\"inventory_edit\" value=\"13\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-12\" type=\"checkbox\" name=\"inventory_view\" value=\"12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-15\" type=\"checkbox\" name=\"inventory_list_records\" value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-reports\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-reports-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Reportes de Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-16\" type=\"checkbox\" name=\"reports_inventory_add\" value=\"16\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-17\" type=\"checkbox\" name=\"reports_inventory_view\" value=\"17\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-18\" type=\"checkbox\" name=\"reports_inventory_list_records\" value=\"18\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-kits\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-kits-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Kits</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-19\" type=\"checkbox\" name=\"kits_add\" value=\"19\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-21\" type=\"checkbox\" name=\"kits_edit\" value=\"21\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-20\" type=\"checkbox\" name=\"kits_view\" value=\"20\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-23\" type=\"checkbox\" name=\"kits_list_records\" value=\"23\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-tools\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-tools-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Herramientas</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-24\" type=\"checkbox\" name=\"tools_add\" value=\"24\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-26\" type=\"checkbox\" name=\"tools_edit\" value=\"26\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-25\" type=\"checkbox\" name=\"tools_view\" value=\"25\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-28\" type=\"checkbox\" name=\"tools_list_records\" value=\"28\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-upd-software\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-upd-software-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Software</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input acl-29\" type=\"checkbox\" name=\"software_view_section\" value=\"29\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Visualizar sección</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t        <button type=\"submit\" class=\"btn btn-success\">Editar perfil</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./add member -->
", "users/edit_user.twig", "C:\\laragon\\www\\cronos\\application\\views\\users\\edit_user.twig");
    }
}
