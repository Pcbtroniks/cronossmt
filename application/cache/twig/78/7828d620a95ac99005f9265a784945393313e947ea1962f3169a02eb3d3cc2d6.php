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

/* customer/edit_customer.twig */
class __TwigTemplate_2ced5e02af4878d2266ca78e1d81014936ed6b21e1a30a198b98cdabce9c754e extends \Twig\Template
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editCustomerModal\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t&nbsp;Editar cliente</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "customers/edit-customer\" id=\"editForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_customer\">Cliente</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_customer\" name=\"customer\" placeholder=\"Cliente\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_status\">Estado</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"upd_status\" name=\"status\">
\t\t\t\t\t\t\t<option hidden>Seleccione un estado</option>
\t\t\t\t\t\t\t<option value=\"1\">Activo</option>
\t\t\t\t\t\t\t<option value=\"0\">Inactivo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>RFC</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_rfc\" name=\"rfc\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Razón Social</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_trade_name\" name=\"trade_name\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Correo electrónico</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_email\" name=\"email\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Teléfono</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_phone\" name=\"phone\">
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Editar</button>
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
        return "customer/edit_customer.twig";
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editCustomerModal\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t&nbsp;Editar cliente</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"{{ base_url() }}customers/edit-customer\" id=\"editForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_customer\">Cliente</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_customer\" name=\"customer\" placeholder=\"Cliente\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_status\">Estado</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"upd_status\" name=\"status\">
\t\t\t\t\t\t\t<option hidden>Seleccione un estado</option>
\t\t\t\t\t\t\t<option value=\"1\">Activo</option>
\t\t\t\t\t\t\t<option value=\"0\">Inactivo</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>RFC</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_rfc\" name=\"rfc\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Razón Social</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_trade_name\" name=\"trade_name\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Correo electrónico</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_email\" name=\"email\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Teléfono</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_phone\" name=\"phone\">
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Editar</button>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./add member -->
", "customer/edit_customer.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/customer/edit_customer.twig");
    }
}
