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

/* inventory/computo/edit_computo.twig */
class __TwigTemplate_a5a5d8d58c4ae8d7a3720b1a8f7cc84f0e90ca46c5c339c6099b5bb2c2a26593 extends \Twig\Template
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editEquipmentModal\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t&nbsp;Editar equipo</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
 
\t\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/computo/edit-equipment\" id=\"editForm\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Cliente</label>
\t\t\t\t\t\t\t\t<select id=\"upd_customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Numero de serie</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_serial_number\" name=\"serial_number\" placeholder=\"0000000\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Area/Encargado</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_area\" name=\"area\" placeholder=\"Oficina de...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Marca</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_brand\" name=\"brand\" placeholder=\"Dell\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Estatus</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"upd_status\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Estatus</option>
\t\t\t\t\t\t\t\t\t<option value=\"active\">Active</option>
\t\t\t\t\t\t\t\t\t<option value=\"inactive\">Inactive</option>
\t\t\t\t\t\t\t\t\t<option value=\"repair\">Repair</option>
\t\t\t\t\t\t\t\t\t<option value=\"lost\">Lost</option>
\t\t\t\t\t\t\t\t\t<option value=\"scrap\">Scrap</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Almacenamiento</label>
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_storage\" name=\"storage\" placeholder=\"500\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Procesador</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_processor\" name=\"processor\" placeholder=\"Intel Core\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_operating_system\">Sistema Operativo</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"upd_operating_system\" name=\"operating_system\">
\t\t\t\t\t\t\t<option value=\"\" selected hidden>SELECCIONAR SO</option>
\t\t\t\t\t\t\t<option value=\"windows 10\">Windows 10</option>
\t\t\t\t\t\t\t<option value=\"windows 8\">Windows 8</option>
\t\t\t\t\t\t\t<option value=\"windows 7\">Windows 7</option>
\t\t\t\t\t\t\t<option value=\"windows XP\">Windows XP</option>
\t\t\t\t\t\t\t<option value=\"macOS X 10.15\">MacOS X 10.15</option>
\t\t\t\t\t\t\t<option value=\"macOS X 10.14\">MacOS X 10.14</option>
\t\t\t\t\t\t\t<option value=\"macOS X 10.13\">MacOS X 10.13</option>
\t\t\t\t\t\t\t<option value=\"linux\">Linux</option>
\t\t\t\t\t\t\t<option value=\"chrome OS\">Chrome OS</option>
\t\t\t\t\t\t\t<option value=\"otro\">Otro</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Memoria RAM</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_memory_ram\" name=\"memory_ram\" placeholder=\"4\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Memoria soportada</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_memory_ram_max\" name=\"memory_ram_max\" placeholder=\"16\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Numero de slots</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_number_slot\" name=\"number_slot\" placeholder=\"4\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"upd_observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
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
        return "inventory/computo/edit_computo.twig";
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editEquipmentModal\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t&nbsp;Editar equipo</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
 
\t\t\t\t<form method=\"post\" action=\"{{ base_url() }}inventory/computo/edit-equipment\" id=\"editForm\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Cliente</label>
\t\t\t\t\t\t\t\t<select id=\"upd_customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Numero de serie</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_serial_number\" name=\"serial_number\" placeholder=\"0000000\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Area/Encargado</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_area\" name=\"area\" placeholder=\"Oficina de...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Marca</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_brand\" name=\"brand\" placeholder=\"Dell\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Estatus</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"upd_status\" name=\"status\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Estatus</option>
\t\t\t\t\t\t\t\t\t<option value=\"active\">Active</option>
\t\t\t\t\t\t\t\t\t<option value=\"inactive\">Inactive</option>
\t\t\t\t\t\t\t\t\t<option value=\"repair\">Repair</option>
\t\t\t\t\t\t\t\t\t<option value=\"lost\">Lost</option>
\t\t\t\t\t\t\t\t\t<option value=\"scrap\">Scrap</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Almacenamiento</label>
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_storage\" name=\"storage\" placeholder=\"500\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Procesador</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"upd_processor\" name=\"processor\" placeholder=\"Intel Core\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_operating_system\">Sistema Operativo</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"upd_operating_system\" name=\"operating_system\">
\t\t\t\t\t\t\t<option value=\"\" selected hidden>SELECCIONAR SO</option>
\t\t\t\t\t\t\t<option value=\"windows 10\">Windows 10</option>
\t\t\t\t\t\t\t<option value=\"windows 8\">Windows 8</option>
\t\t\t\t\t\t\t<option value=\"windows 7\">Windows 7</option>
\t\t\t\t\t\t\t<option value=\"windows XP\">Windows XP</option>
\t\t\t\t\t\t\t<option value=\"macOS X 10.15\">MacOS X 10.15</option>
\t\t\t\t\t\t\t<option value=\"macOS X 10.14\">MacOS X 10.14</option>
\t\t\t\t\t\t\t<option value=\"macOS X 10.13\">MacOS X 10.13</option>
\t\t\t\t\t\t\t<option value=\"linux\">Linux</option>
\t\t\t\t\t\t\t<option value=\"chrome OS\">Chrome OS</option>
\t\t\t\t\t\t\t<option value=\"otro\">Otro</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Memoria RAM</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_memory_ram\" name=\"memory_ram\" placeholder=\"4\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Memoria soportada</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_memory_ram_max\" name=\"memory_ram_max\" placeholder=\"16\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Numero de slots</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"upd_number_slot\" name=\"number_slot\" placeholder=\"4\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"upd_observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
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
", "inventory/computo/edit_computo.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/inventory/computo/edit_computo.twig");
    }
}
