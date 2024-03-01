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

/* inventory/printer/view_printer.twig */
class __TwigTemplate_7b6fe04a09d913bb5003bd654a9ec3e7bbdb514071d3c2c7c58fa7088ceaf08d extends \Twig\Template
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
        echo "  <!-- add member -->
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewEquipmentModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-print\"></i> &nbsp;Impresora</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/printer/edit-equipment\" id=\"viewForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Cliente</label>
                <select class=\"form-control\" id=\"view_customer_id\" disabled>
                  <option value=\"\" selected hidden>Seleccione un cliente</option>
                    <option value=\"1\">Hotel Isabel</option>
                    <option value=\"2\">FCH Providencia</option>
                    <option value=\"3\">FCH Expo</option>
                    <option value=\"4\">Hotel Flamingos</option>
                    <option value=\"5\">Real Maestranza Hotel</option>
                    <option value=\"6\">Polen Avenue</option>
                    <option value=\"7\">Hotel Arborea</option>
                    <option value=\"8\">Motel Aruba</option>
                    <option value=\"9\">Motel Las Garzas</option>
                    <option value=\"10\">Santomé</option>
                    <option value=\"11\">Sinec</option>
                    <option value=\"12\">Bonafont</option>
                    <option value=\"13\">Pcbtroniks</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Numero de serie</label>
                <input type=\"text\" class=\"form-control\" id=\"view_serial_number\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Area/Encargado</label>
                <input type=\"text\" class=\"form-control\" id=\"view_area\" disabled>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"view_brand\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Estatus</label>
                <select class=\"form-control\" id=\"view_status\" disabled>
                  <option value=\"\" selected hidden>Estatus</option>
                    <option value=\"active\">Active</option>
                    <option value=\"inactive\">Inactive</option>
                    <option value=\"repair\">Repair</option>
                    <option value=\"lost\">Lost</option>
                    <option value=\"scrap\">Scrap</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Tipo</label>
                <select class=\"form-control\" id=\"view_type\" disabled>
                  <option value=\"\" selected hidden>Seleccione</option>
                    <option value=\"3d\">3D</option>
                    <option value=\"laser\">Láser</option>
                    <option value=\"toner\">Toner</option>
                    <option value=\"plotter\">Plotter</option>
                    <option value=\"termica\">Termica</option>
                    <option value=\"inyeccion\">Inyeccion</option>
                </select>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Multifuncional</label>
                <select class=\"form-control\" id=\"view_multifuncional_type\" disabled>
                  <option value=\"\" selected hidden>Seleccione</option>
                    <option value=\"si\">Si</option>
                    <option value=\"no\">No</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Conexión</label>
                <select class=\"form-control\" id=\"view_connection_type\" disabled>
                  <option value=\"\" selected hidden>Seleccione</option>
                    <option value=\"conexión USB\">Conexión USB</option>
                    <option value=\"conexión LPT\">Conexión LPT</option>
                    <option value=\"conexión TCP/IP\">Conexión TCP/IP</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Observaciones</label>
            <textarea class=\"form-control\" rows=\"3\" id=\"view_observations\" disabled></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->";
    }

    public function getTemplateName()
    {
        return "inventory/printer/view_printer.twig";
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
        return new Source("  <!-- add member -->
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewEquipmentModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-print\"></i> &nbsp;Impresora</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"{{ base_url() }}inventory/printer/edit-equipment\" id=\"viewForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Cliente</label>
                <select class=\"form-control\" id=\"view_customer_id\" disabled>
                  <option value=\"\" selected hidden>Seleccione un cliente</option>
                    <option value=\"1\">Hotel Isabel</option>
                    <option value=\"2\">FCH Providencia</option>
                    <option value=\"3\">FCH Expo</option>
                    <option value=\"4\">Hotel Flamingos</option>
                    <option value=\"5\">Real Maestranza Hotel</option>
                    <option value=\"6\">Polen Avenue</option>
                    <option value=\"7\">Hotel Arborea</option>
                    <option value=\"8\">Motel Aruba</option>
                    <option value=\"9\">Motel Las Garzas</option>
                    <option value=\"10\">Santomé</option>
                    <option value=\"11\">Sinec</option>
                    <option value=\"12\">Bonafont</option>
                    <option value=\"13\">Pcbtroniks</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Numero de serie</label>
                <input type=\"text\" class=\"form-control\" id=\"view_serial_number\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Area/Encargado</label>
                <input type=\"text\" class=\"form-control\" id=\"view_area\" disabled>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"view_brand\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Estatus</label>
                <select class=\"form-control\" id=\"view_status\" disabled>
                  <option value=\"\" selected hidden>Estatus</option>
                    <option value=\"active\">Active</option>
                    <option value=\"inactive\">Inactive</option>
                    <option value=\"repair\">Repair</option>
                    <option value=\"lost\">Lost</option>
                    <option value=\"scrap\">Scrap</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Tipo</label>
                <select class=\"form-control\" id=\"view_type\" disabled>
                  <option value=\"\" selected hidden>Seleccione</option>
                    <option value=\"3d\">3D</option>
                    <option value=\"laser\">Láser</option>
                    <option value=\"toner\">Toner</option>
                    <option value=\"plotter\">Plotter</option>
                    <option value=\"termica\">Termica</option>
                    <option value=\"inyeccion\">Inyeccion</option>
                </select>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Multifuncional</label>
                <select class=\"form-control\" id=\"view_multifuncional_type\" disabled>
                  <option value=\"\" selected hidden>Seleccione</option>
                    <option value=\"si\">Si</option>
                    <option value=\"no\">No</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Conexión</label>
                <select class=\"form-control\" id=\"view_connection_type\" disabled>
                  <option value=\"\" selected hidden>Seleccione</option>
                    <option value=\"conexión USB\">Conexión USB</option>
                    <option value=\"conexión LPT\">Conexión LPT</option>
                    <option value=\"conexión TCP/IP\">Conexión TCP/IP</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Observaciones</label>
            <textarea class=\"form-control\" rows=\"3\" id=\"view_observations\" disabled></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->", "inventory/printer/view_printer.twig", "C:\\laragon\\www\\cronos\\application\\views\\inventory\\printer\\view_printer.twig");
    }
}
