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

/* tool/edit_tools.twig */
class __TwigTemplate_102e170d9a8147916292256001bbdf30d5391ffbae2a5e0e8f7e1491bc486edd extends \Twig\Template
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editToolsModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-screwdriver\"></i> &nbsp;Editar herramienta</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "tool/edit_tool\" id=\"editForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Kits</label>
\t\t\t\t\t\t\t\t<select id=\"upd_kit_id\" name=\"kit_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un kit</option>
\t\t\t\t\t\t\t\t</select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Nombre de la Herramienta</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_tool_name\" name=\"tool_name\" placeholder=\"Pinzas\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Cantidad</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_stock\" name=\"stock\" placeholder=\"2\">
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"upd_brand\" name=\"brand\" placeholder=\"Truper\">
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
        return "tool/edit_tools.twig";
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editToolsModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-screwdriver\"></i> &nbsp;Editar herramienta</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"{{ base_url() }}tool/edit_tool\" id=\"editForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Kits</label>
\t\t\t\t\t\t\t\t<select id=\"upd_kit_id\" name=\"kit_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un kit</option>
\t\t\t\t\t\t\t\t</select>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Nombre de la Herramienta</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_tool_name\" name=\"tool_name\" placeholder=\"Pinzas\">
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Cantidad</label>
                <input type=\"text\" class=\"form-control\" id=\"upd_stock\" name=\"stock\" placeholder=\"2\">
              </div>
            </div>
          </div>

          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Marca</label>
              <input type=\"text\" class=\"form-control\" id=\"upd_brand\" name=\"brand\" placeholder=\"Truper\">
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
  <!-- ./add member -->", "tool/edit_tools.twig", "C:\\laragon\\www\\cronos\\application\\views\\tool\\edit_tools.twig");
    }
}
