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

/* customer/create_customer.twig */
class __TwigTemplate_fdf3d476fc4fdab667993449c11ad4bfa97bbdc3571ab3cc98b7e788abcaf9bd extends \Twig\Template
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"createCustomerModal\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t&nbsp;Añadir nuevo cliente</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "customers/create-customer\" id=\"createForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"customer\">Cliente</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"customer\" name=\"customer\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>RFC</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"rfc\" name=\"rfc\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Razón Social</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"trade_name\" name=\"trade_name\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Correo electrónico</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Teléfono</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\">
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Añadir nuevo cliente</button>
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
        return "customer/create_customer.twig";
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"createCustomerModal\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t&nbsp;Añadir nuevo cliente</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"{{ base_url() }}customers/create-customer\" id=\"createForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"customer\">Cliente</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"customer\" name=\"customer\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>RFC</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"rfc\" name=\"rfc\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Razón Social</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"trade_name\" name=\"trade_name\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Correo electrónico</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Teléfono</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\">
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Añadir nuevo cliente</button>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./add member -->
", "customer/create_customer.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/customer/create_customer.twig");
    }
}
