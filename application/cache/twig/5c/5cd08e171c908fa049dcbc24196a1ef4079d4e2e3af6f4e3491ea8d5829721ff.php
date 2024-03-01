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

/* inventory/televisiones/add_televisiones.twig */
class __TwigTemplate_6b9e70c98514c61e61d0c21422ab471460da59232f2c0220c7f2cb9f66599476 extends \Twig\Template
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addEquipmentModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-tv\"></i> &nbsp;Añadir nueva television</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/televisiones/add-equipment\" id=\"createForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Cliente</label>
\t\t\t\t\t\t\t\t<select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t</select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Numero de serie</label>
                <input type=\"text\" class=\"form-control\" id=\"serial_number\" name=\"serial_number\" placeholder=\"0000000\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Area/Encargado</label>
                <input type=\"text\" class=\"form-control\" id=\"area\" name=\"area\" placeholder=\"Oficina de...\">
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"brand\" name=\"brand\" placeholder=\"Hisense\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Estatus</label>
                <select class=\"form-control\" id=\"status\" name=\"status\">
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
                <input type=\"number\" class=\"form-control\" id=\"inch\" name=\"inch\" placeholder=\"32\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>SmartBox</label>
                <select class=\"form-control\" id=\"smartbox\" name=\"smartbox\">
                  <option value=\"\" selected hidden>SmartBox</option>
                    <option value=\"si\">Tiene SmartBox</option>
                    <option value=\"no\">No tiene SmartBox</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Observaciones</label>
            <textarea class=\"form-control\" rows=\"3\" id=\"observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
          <button type=\"submit\" class=\"btn btn-success\">Añadir nuevo equipo</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->";
    }

    public function getTemplateName()
    {
        return "inventory/televisiones/add_televisiones.twig";
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addEquipmentModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-tv\"></i> &nbsp;Añadir nueva television</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"{{ base_url() }}inventory/televisiones/add-equipment\" id=\"createForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Cliente</label>
\t\t\t\t\t\t\t\t<select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t</select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Numero de serie</label>
                <input type=\"text\" class=\"form-control\" id=\"serial_number\" name=\"serial_number\" placeholder=\"0000000\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Area/Encargado</label>
                <input type=\"text\" class=\"form-control\" id=\"area\" name=\"area\" placeholder=\"Oficina de...\">
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"brand\" name=\"brand\" placeholder=\"Hisense\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Estatus</label>
                <select class=\"form-control\" id=\"status\" name=\"status\">
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
                <input type=\"number\" class=\"form-control\" id=\"inch\" name=\"inch\" placeholder=\"32\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>SmartBox</label>
                <select class=\"form-control\" id=\"smartbox\" name=\"smartbox\">
                  <option value=\"\" selected hidden>SmartBox</option>
                    <option value=\"si\">Tiene SmartBox</option>
                    <option value=\"no\">No tiene SmartBox</option>
                </select>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label>Observaciones</label>
            <textarea class=\"form-control\" rows=\"3\" id=\"observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
          <button type=\"submit\" class=\"btn btn-success\">Añadir nuevo equipo</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->", "inventory/televisiones/add_televisiones.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/inventory/televisiones/add_televisiones.twig");
    }
}
