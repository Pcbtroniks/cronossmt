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

/* inventory/computo/view_computo.twig */
class __TwigTemplate_157e6f9ef22c8f04e6e6fd45cd15ec5f86a6f4df383880d47bb97d14844b968a extends \Twig\Template
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewEquipmentModal\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t&nbsp;Equipo</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
 
\t\t\t\t<form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/computo/edit-equipment\" id=\"viewForm\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Cliente</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"view_customer_id\" disabled>
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Hotel Isabel</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">FCH Providencia</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">FCH Expo</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">Hotel Flamingos</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">Real Maestranza Hotel</option>
\t\t\t\t\t\t\t\t\t<option value=\"6\">Polen Avenue</option>
\t\t\t\t\t\t\t\t\t<option value=\"7\">Hotel Arborea</option>
\t\t\t\t\t\t\t\t\t<option value=\"8\">Motel Aruba</option>
\t\t\t\t\t\t\t\t\t<option value=\"9\">Motel Las Garzas</option>
\t\t\t\t\t\t\t\t\t<option value=\"10\">Santomé</option>
\t\t\t\t\t\t\t\t\t<option value=\"11\">Sinec</option>
\t\t\t\t\t\t\t\t\t<option value=\"12\">Bonafont</option>
\t\t\t\t\t\t\t\t\t<option value=\"13\">Pcbtroniks</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Numero de serie</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_serial_number\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Area/Encargado</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_area\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Marca</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_brand\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Estatus</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"view_status\" disabled>
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
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_storage\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Procesador</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_processor\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_operating_system\">Sistema Operativo</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"view_operating_system\" disabled>
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
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_memory_ram\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Memoria soportada</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_memory_ram_max\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Numero de slots</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_number_slot\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"view_observations\" disabled></textarea>
\t\t\t\t\t</div>

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
<!-- ./add member -->
";
    }

    public function getTemplateName()
    {
        return "inventory/computo/view_computo.twig";
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
<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewEquipmentModal\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">
\t\t\t\t\t<i class=\"fas fa-desktop\"></i>
\t\t\t\t\t&nbsp;Equipo</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
 
\t\t\t\t<form method=\"post\" action=\"{{ base_url() }}inventory/computo/edit-equipment\" id=\"viewForm\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Cliente</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"view_customer_id\" disabled>
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">Hotel Isabel</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">FCH Providencia</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">FCH Expo</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">Hotel Flamingos</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">Real Maestranza Hotel</option>
\t\t\t\t\t\t\t\t\t<option value=\"6\">Polen Avenue</option>
\t\t\t\t\t\t\t\t\t<option value=\"7\">Hotel Arborea</option>
\t\t\t\t\t\t\t\t\t<option value=\"8\">Motel Aruba</option>
\t\t\t\t\t\t\t\t\t<option value=\"9\">Motel Las Garzas</option>
\t\t\t\t\t\t\t\t\t<option value=\"10\">Santomé</option>
\t\t\t\t\t\t\t\t\t<option value=\"11\">Sinec</option>
\t\t\t\t\t\t\t\t\t<option value=\"12\">Bonafont</option>
\t\t\t\t\t\t\t\t\t<option value=\"13\">Pcbtroniks</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Numero de serie</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_serial_number\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Area/Encargado</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_area\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Marca</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_brand\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Estatus</label>
\t\t\t\t\t\t\t\t<select class=\"form-control\" id=\"view_status\" disabled>
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
\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_storage\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label>Procesador</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"view_processor\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"upd_operating_system\">Sistema Operativo</label>
\t\t\t\t\t\t<select class=\"form-control\" id=\"view_operating_system\" disabled>
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
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_memory_ram\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Memoria soportada</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_memory_ram_max\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<label>Numero de slots</label>
\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"view_number_slot\" disabled>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t<textarea class=\"form-control\" rows=\"3\" id=\"view_observations\" disabled></textarea>
\t\t\t\t\t</div>

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
<!-- ./add member -->
", "inventory/computo/view_computo.twig", "C:\\laragon\\www\\cronos\\application\\views\\inventory\\computo\\view_computo.twig");
    }
}
