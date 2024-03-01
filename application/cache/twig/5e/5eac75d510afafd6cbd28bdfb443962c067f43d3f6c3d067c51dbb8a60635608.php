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

/* users/change_password.twig */
class __TwigTemplate_b5dbc2ee75177f1fe915382f8f1249606db6bd3d6a9ef0284b72daf789dc3d99 extends \Twig\Template
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
        echo "\t<!-- change password -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"updPasswordModal\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"fa fa-user\"></i> &nbsp;Cambiar contraseña de usuario</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "users/update-password\" id=\"updPasswordForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\">Usuario</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"show_email\" disabled=\"\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_password\">Nueva contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"upd_password\" name=\"upd_password\" placeholder=\"Contraseña\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"passconf\">Confirmar la contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"upd_passconf\" name=\"upd_passconf\" placeholder=\"Confirmar la contraseña\">
\t\t\t\t\t</div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-success\" data-toggle=\"confirmation\" data-placement=\"right\"
\t\t\t\t\t        data-btn-ok-label=\"Si\" data-btn-ok-class=\"btn-success\"
\t\t\t\t\t        data-btn-ok-icon-class=\"material-icons\" data-btn-ok-icon-content=\"check\"
\t\t\t\t\t        data-btn-cancel-label=\"No\" data-btn-cancel-class=\"btn-danger\"
\t\t\t\t\t        data-btn-cancel-icon-class=\"material-icons\" data-btn-cancel-icon-content=\"close\"
\t\t\t\t\t        data-title=\"¿Estás absolutamente seguro?\" data-content=\"Comprueba que estés acualizando la contraseña al usuario correcto.\">
\t\t\t\t\t  Guardar cambios
\t\t\t\t\t</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./change password -->";
    }

    public function getTemplateName()
    {
        return "users/change_password.twig";
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
        return new Source("\t<!-- change password -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"updPasswordModal\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"fa fa-user\"></i> &nbsp;Cambiar contraseña de usuario</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"{{ base_url }}users/update-password\" id=\"updPasswordForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"\">Usuario</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"show_email\" disabled=\"\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_password\">Nueva contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"upd_password\" name=\"upd_password\" placeholder=\"Contraseña\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"passconf\">Confirmar la contraseña</label>
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"upd_passconf\" name=\"upd_passconf\" placeholder=\"Confirmar la contraseña\">
\t\t\t\t\t</div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-success\" data-toggle=\"confirmation\" data-placement=\"right\"
\t\t\t\t\t        data-btn-ok-label=\"Si\" data-btn-ok-class=\"btn-success\"
\t\t\t\t\t        data-btn-ok-icon-class=\"material-icons\" data-btn-ok-icon-content=\"check\"
\t\t\t\t\t        data-btn-cancel-label=\"No\" data-btn-cancel-class=\"btn-danger\"
\t\t\t\t\t        data-btn-cancel-icon-class=\"material-icons\" data-btn-cancel-icon-content=\"close\"
\t\t\t\t\t        data-title=\"¿Estás absolutamente seguro?\" data-content=\"Comprueba que estés acualizando la contraseña al usuario correcto.\">
\t\t\t\t\t  Guardar cambios
\t\t\t\t\t</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./change password -->", "users/change_password.twig", "C:\\laragon\\www\\cronos\\application\\views\\users\\change_password.twig");
    }
}
