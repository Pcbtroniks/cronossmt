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

/* tickets/download_report.twig */
class __TwigTemplate_37da3604ee2e9c31fb8623bcc73f37a692d4766efbae71f31193acec039a54f8 extends \Twig\Template
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
        echo "<!-- Download report -->
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"downloadReportModal\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t&nbsp;Descargar reporte</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "tickets/download-report\" id=\"downloadReportForm\">

          <div class=\"form-group\">
            <label>Cliente</label>
            <select id=\"customer_id2\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible input-customer_id\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
              <option value=\"\" selected hidden>Seleccione un cliente</option>
            </select>
            <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
          </div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Fecha de Actualización</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control updated_at_datepicker\" name=\"updated_at\">
\t\t\t\t\t\t<small class=\"form-text text-muted\">Fecha de última actualización (YYYY-MM)</small>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary btn-lg btn-block\">Descargar</button>

\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./Download report -->
";
    }

    public function getTemplateName()
    {
        return "tickets/download_report.twig";
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
        return new Source("<!-- Download report -->
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"downloadReportModal\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fas fa-download\"></i>
\t\t\t\t\t&nbsp;Descargar reporte</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">

\t\t\t\t<form method=\"post\" action=\"{{ base_url() }}tickets/download-report\" id=\"downloadReportForm\">

          <div class=\"form-group\">
            <label>Cliente</label>
            <select id=\"customer_id2\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible input-customer_id\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
              <option value=\"\" selected hidden>Seleccione un cliente</option>
            </select>
            <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
          </div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Fecha de Actualización</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control updated_at_datepicker\" name=\"updated_at\">
\t\t\t\t\t\t<small class=\"form-text text-muted\">Fecha de última actualización (YYYY-MM)</small>
\t\t\t\t\t</div>

\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-primary btn-lg btn-block\">Descargar</button>

\t\t\t\t</div>
\t\t\t\t<!-- ./ modal-body -->

\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t\t\t\t</div>

\t\t\t</form>

\t\t</div>
\t\t<!-- /.modal-content -->
\t</div>
\t<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- ./Download report -->
", "tickets/download_report.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/tickets/download_report.twig");
    }
}
