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

/* users/add_user.twig */
class __TwigTemplate_c2e21556d7a9fa05abb919bf12cfc9cdf07554973d661315dc059eb9fb63544f extends \Twig\Template
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
        echo "<!-- add member -->
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addUserModal\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t&nbsp;Añadir nuevo usuario</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "users/create_user\" id=\"createForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Correo electrónico</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Correo electrónico\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"password\">Contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"passconf\">Confirmar la contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passconf\" name=\"passconf\" placeholder=\"Confirmar la contraseña\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"auth_level\">Rol</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"auth_level\" name=\"auth_level\">
\t\t\t\t\t\t\t<option value=\"\" selected hidden>SELECCIONAR ROL</option>
\t\t\t\t\t\t\t<option value=\"1\">Cliente</option>
\t\t\t\t\t\t\t<option value=\"2\">Editor</option>
\t\t\t\t\t\t\t<option value=\"3\">Técnico</option>
\t\t\t\t\t\t\t<option value=\"9\">Administrador</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>


\t\t\t\t\t<label>Permisos ACL</label>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t<div class=\"nav flex-column nav-tabs h-100\" id=\"vert-tabs-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"vert-tabs-users-tab\" data-toggle=\"pill\" href=\"#vert-tabs-users\" role=\"tab\" aria-controls=\"vert-tabs-users\" aria-selected=\"false\">Usuarios</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-customers-tab\" data-toggle=\"pill\" href=\"#vert-tabs-customers\" role=\"tab\" aria-controls=\"vert-tabs-customers\" aria-selected=\"false\">Clientes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-inventory-tab\" data-toggle=\"pill\" href=\"#vert-tabs-inventory\" role=\"tab\" aria-controls=\"vert-tabs-inventory\" aria-selected=\"false\">Inventario</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-reports-tab\" data-toggle=\"pill\" href=\"#vert-tabs-reports\" role=\"tab\" aria-controls=\"vert-tabs-reports\" aria-selected=\"false\">Reportes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-kits-tab\" data-toggle=\"pill\" href=\"#vert-tabs-kits\" role=\"tab\" aria-controls=\"vert-tabs-kits\" aria-selected=\"false\">Kits</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-tools-tab\" data-toggle=\"pill\" href=\"#vert-tabs-tools\" role=\"tab\" aria-controls=\"vert-tabs-tools\" aria-selected=\"false\">Herramientas</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-software-tab\" data-toggle=\"pill\" href=\"#vert-tabs-software\" role=\"tab\" aria-controls=\"vert-tabs-software\" aria-selected=\"false\">Software</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-7 col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"vert-tabs-tabContent\">

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"vert-tabs-users\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-users-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Usuarios</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_add\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_edit\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_disable\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_view\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_list_records\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-customers\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-customers-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Clientes</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_add\" value=\"6\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_edit\" value=\"8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_disable\" value=\"9\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_view\" value=\"7\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_list_records\" value=\"10\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-inventory\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-inventory-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_add\" value=\"11\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_edit\" value=\"13\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_view\" value=\"12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_list_records\" value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-reports\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-reports-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Reportes de Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"reports_inventory_add\" value=\"16\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"reports_inventory_view\" value=\"17\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"reports_inventory_list_records\" value=\"18\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-kits\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-kits-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Kits</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_add\" value=\"19\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_edit\" value=\"21\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_view\" value=\"20\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_list_records\" value=\"23\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-tools\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-tools-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Herramientas</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_add\" value=\"24\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_edit\" value=\"26\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_view\" value=\"25\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_list_records\" value=\"28\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-software\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-software-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Software</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"software_view_section\" value=\"29\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Visualizar sección</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Añadir nuevo usuario</button>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./add member -->
";
    }

    public function getTemplateName()
    {
        return "users/add_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- add member -->
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addUserModal\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t&nbsp;Añadir nuevo usuario</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"{{ base_url() }}users/create_user\" id=\"createForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\">Correo electrónico</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Correo electrónico\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"password\">Contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Contraseña\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"passconf\">Confirmar la contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"passconf\" name=\"passconf\" placeholder=\"Confirmar la contraseña\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"auth_level\">Rol</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"auth_level\" name=\"auth_level\">
\t\t\t\t\t\t\t<option value=\"\" selected hidden>SELECCIONAR ROL</option>
\t\t\t\t\t\t\t<option value=\"1\">Cliente</option>
\t\t\t\t\t\t\t<option value=\"2\">Editor</option>
\t\t\t\t\t\t\t<option value=\"3\">Técnico</option>
\t\t\t\t\t\t\t<option value=\"9\">Administrador</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>


\t\t\t\t\t<label>Permisos ACL</label>
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t<div class=\"nav flex-column nav-tabs h-100\" id=\"vert-tabs-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"vert-tabs-users-tab\" data-toggle=\"pill\" href=\"#vert-tabs-users\" role=\"tab\" aria-controls=\"vert-tabs-users\" aria-selected=\"false\">Usuarios</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-customers-tab\" data-toggle=\"pill\" href=\"#vert-tabs-customers\" role=\"tab\" aria-controls=\"vert-tabs-customers\" aria-selected=\"false\">Clientes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-inventory-tab\" data-toggle=\"pill\" href=\"#vert-tabs-inventory\" role=\"tab\" aria-controls=\"vert-tabs-inventory\" aria-selected=\"false\">Inventario</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-reports-tab\" data-toggle=\"pill\" href=\"#vert-tabs-reports\" role=\"tab\" aria-controls=\"vert-tabs-reports\" aria-selected=\"false\">Reportes</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-kits-tab\" data-toggle=\"pill\" href=\"#vert-tabs-kits\" role=\"tab\" aria-controls=\"vert-tabs-kits\" aria-selected=\"false\">Kits</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-tools-tab\" data-toggle=\"pill\" href=\"#vert-tabs-tools\" role=\"tab\" aria-controls=\"vert-tabs-tools\" aria-selected=\"false\">Herramientas</a>
\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"vert-tabs-software-tab\" data-toggle=\"pill\" href=\"#vert-tabs-software\" role=\"tab\" aria-controls=\"vert-tabs-software\" aria-selected=\"false\">Software</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-7 col-sm-9\">
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"vert-tabs-tabContent\">

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"vert-tabs-users\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-users-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Usuarios</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_add\" value=\"1\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_edit\" value=\"3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_disable\" value=\"4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_view\" value=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"users_list_records\" value=\"5\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-customers\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-customers-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Clientes</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_add\" value=\"6\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_edit\" value=\"8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_disable\" value=\"9\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Deshabilitar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_view\" value=\"7\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"customers_list_records\" value=\"10\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-inventory\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-inventory-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_add\" value=\"11\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_edit\" value=\"13\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_view\" value=\"12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"inventory_list_records\" value=\"15\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-reports\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-reports-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Reportes de Inventario</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"reports_inventory_add\" value=\"16\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"reports_inventory_view\" value=\"17\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"reports_inventory_list_records\" value=\"18\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-kits\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-kits-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Kits</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_add\" value=\"19\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_edit\" value=\"21\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_view\" value=\"20\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"kits_list_records\" value=\"23\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-tools\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-tools-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Herramientas</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_add\" value=\"24\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Añadir</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_edit\" value=\"26\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Editar</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_view\" value=\"25\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Mostrar registro</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"tools_list_records\" value=\"28\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Listar registros</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"vert-tabs-software\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-software-tab\">
\t\t\t\t\t\t\t\t\t<p>Establezca los permisos para la sección <b>Software</b>.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"software_view_section\" value=\"29\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">Visualizar sección</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Añadir nuevo usuario</button>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./add member -->
", "users/add_user.twig", "C:\\laragon\\www\\cronos\\application\\views\\users\\add_user.twig");
    }
}
