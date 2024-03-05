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

/* inventory/televisiones/view_televisiones.twig */
class __TwigTemplate_7daf3a016fc6095f9aeb243f008393fcc81c68f1afe3d78b2c9e339d5912c835 extends \Twig\Template
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
          <h4 class=\"modal-title\"><i class=\"fas fa-tv\"></i> &nbsp;Editar television</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/televisiones/edit-equipment\" id=\"viewForm\">

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
                <label>Pulgadas</label>
                <input type=\"number\" class=\"form-control\" id=\"view_inch\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>SmartBox</label>
                <select class=\"form-control\" id=\"view_smartbox\" disabled>
                  <option value=\"\" selected hidden>SmartBox</option>
                    <option value=\"si\">Tiene SmartBox</option>
                    <option value=\"no\">No tiene SmartBox</option>
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
        return "inventory/televisiones/view_televisiones.twig";
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
          <h4 class=\"modal-title\"><i class=\"fas fa-tv\"></i> &nbsp;Editar television</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"{{ base_url() }}inventory/televisiones/edit-equipment\" id=\"viewForm\">

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
                <label>Pulgadas</label>
                <input type=\"number\" class=\"form-control\" id=\"view_inch\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>SmartBox</label>
                <select class=\"form-control\" id=\"view_smartbox\" disabled>
                  <option value=\"\" selected hidden>SmartBox</option>
                    <option value=\"si\">Tiene SmartBox</option>
                    <option value=\"no\">No tiene SmartBox</option>
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
  <!-- ./add member -->", "inventory/televisiones/view_televisiones.twig", "C:\\laragon\\www\\cronos\\application\\views\\inventory\\televisiones\\view_televisiones.twig");
    }
}
