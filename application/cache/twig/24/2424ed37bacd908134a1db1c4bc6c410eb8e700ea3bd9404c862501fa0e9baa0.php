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

/* tool/add_kits.twig */
class __TwigTemplate_5a81f345290c155ef1c6b7a6fd28633ec485f2fcd7b90bdfe4cf290da5e38774 extends \Twig\Template
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addKitsModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-tv\"></i> &nbsp;Añadir nuevo Kit</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "kits/add_kit\" id=\"createForm\">
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Nombre del Kit</label>
                <input type=\"text\" class=\"form-control\" id=\"kit_name\" name=\"kit_name\" placeholder=\"Kit Redes 1\">
              </div>
            </div>

            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Responsable</label>
\t\t\t\t\t\t\t\t<select id=\"user_id\" name=\"user_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un usuario</option>
\t\t\t\t\t\t\t\t</select>

              </div>
            </div>
          </div>

          <div class=\"row\">
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

          <div class=\"form-group\">
            <label>Observaciones</label>
            <textarea class=\"form-control\" rows=\"3\" id=\"observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
          <button type=\"submit\" class=\"btn btn-success\">Añadir nuevo kit</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->";
    }

    public function getTemplateName()
    {
        return "tool/add_kits.twig";
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
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addKitsModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-tv\"></i> &nbsp;Añadir nuevo Kit</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form method=\"post\" action=\"{{ base_url() }}kits/add_kit\" id=\"createForm\">
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Nombre del Kit</label>
                <input type=\"text\" class=\"form-control\" id=\"kit_name\" name=\"kit_name\" placeholder=\"Kit Redes 1\">
              </div>
            </div>

            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Responsable</label>
\t\t\t\t\t\t\t\t<select id=\"user_id\" name=\"user_id\" class=\"form-control select2 select2-hidden-accessible\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
\t\t\t\t\t\t\t\t\t<option value=\"\" selected hidden>Seleccione un usuario</option>
\t\t\t\t\t\t\t\t</select>

              </div>
            </div>
          </div>

          <div class=\"row\">
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

          <div class=\"form-group\">
            <label>Observaciones</label>
            <textarea class=\"form-control\" rows=\"3\" id=\"observations\" name=\"observations\" placeholder=\"Notas\"></textarea>
          </div>

        </div><!-- ./ modal-body -->


        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
          <button type=\"submit\" class=\"btn btn-success\">Añadir nuevo kit</button>
        </div>

        </form>
       

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- ./add member -->", "tool/add_kits.twig", "C:\\laragon\\www\\cronos\\application\\views\\tool\\add_kits.twig");
    }
}
