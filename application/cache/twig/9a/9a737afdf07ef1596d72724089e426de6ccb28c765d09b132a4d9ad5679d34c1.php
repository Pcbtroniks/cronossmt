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

/* inventory/printer/edit_printer.twig */
class __TwigTemplate_dd8e56dbece2cd4d6982449960fcfa4a2771a273671cb8dd4376aedb4070c476 extends \Twig\Template
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editEquipmentModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-print\"></i> &nbsp;Editar impresora</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/printer/edit-equipment\" id=\"editForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Cliente</label>
\t\t\t\t\t\t\t\t<select id=\"upd_customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t</select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Numero de serie</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_serial_number\" name=\"serial_number\" placeholder=\"0000000\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Area/Encargado</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_area\" name=\"area\" placeholder=\"Oficina de...\">
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"upd_brand\" name=\"brand\" placeholder=\"HP\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Estatus</label>
                <select class=\"form-control\" id=\"upd_status\" name=\"status\">
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
                <select class=\"form-control\" id=\"upd_type\" name=\"type\">
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
                <select class=\"form-control\" id=\"upd_multifuncional_type\" name=\"multifuncional_type\">
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
                <select class=\"form-control\" id=\"upd_connection_type\" name=\"connection_type\">
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
            <textarea class=\"form-control\" rows=\"3\" id=\"upd_observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
          <button type=\"submit\" class=\"btn btn-success\">Editar</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->";
    }

    public function getTemplateName()
    {
        return "inventory/printer/edit_printer.twig";
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editEquipmentModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-print\"></i> &nbsp;Editar impresora</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"{{ base_url() }}inventory/printer/edit-equipment\" id=\"editForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Cliente</label>
\t\t\t\t\t\t\t\t<select id=\"upd_customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un cliente</option>
\t\t\t\t\t\t\t\t</select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Numero de serie</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_serial_number\" name=\"serial_number\" placeholder=\"0000000\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Area/Encargado</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_area\" name=\"area\" placeholder=\"Oficina de...\">
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"upd_brand\" name=\"brand\" placeholder=\"HP\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Estatus</label>
                <select class=\"form-control\" id=\"upd_status\" name=\"status\">
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
                <select class=\"form-control\" id=\"upd_type\" name=\"type\">
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
                <select class=\"form-control\" id=\"upd_multifuncional_type\" name=\"multifuncional_type\">
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
                <select class=\"form-control\" id=\"upd_connection_type\" name=\"connection_type\">
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
            <textarea class=\"form-control\" rows=\"3\" id=\"upd_observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
          <button type=\"submit\" class=\"btn btn-success\">Editar</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->", "inventory/printer/edit_printer.twig", "C:\\laragon\\www\\cronos\\application\\views\\inventory\\printer\\edit_printer.twig");
    }
}
