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

/* tool/view_tool.twig */
class __TwigTemplate_b9d5de2c6e4aaf14f2e6eefdd0d411e8bbf4fbd10342ffe657d563703eece82e extends \Twig\Template
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
        echo "  <!-- view tool -->
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewToolModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-screwdriver\"></i> &nbsp;Herramienta</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form id=\"viewForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Kits</label>
                <input type=\"text\" class=\"form-control\" id=\"view_kit_name\" disabled>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Nombre de la Herramienta</label>
                <input type=\"text\" class=\"form-control\" id=\"view_tool_name\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Cantidad</label>
                <input type=\"text\" class=\"form-control\" id=\"view_stock\" disabled>
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
                <input type=\"text\" class=\"form-control\" id=\"view_status\" disabled>
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
  <!-- ./view tool -->";
    }

    public function getTemplateName()
    {
        return "tool/view_tool.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("  <!-- view tool -->
  <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewToolModal\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\"><i class=\"fas fa-screwdriver\"></i> &nbsp;Herramienta</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">
      
        <form id=\"viewForm\">

          <div class=\"row\">
            <div class=\"col-sm-12\">
              <div class=\"form-group\">
                <label>Kits</label>
                <input type=\"text\" class=\"form-control\" id=\"view_kit_name\" disabled>
              </div>
            </div>
          </div>
          
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Nombre de la Herramienta</label>
                <input type=\"text\" class=\"form-control\" id=\"view_tool_name\" disabled>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label>Cantidad</label>
                <input type=\"text\" class=\"form-control\" id=\"view_stock\" disabled>
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
                <input type=\"text\" class=\"form-control\" id=\"view_status\" disabled>
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
  <!-- ./view tool -->", "tool/view_tool.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/tool/view_tool.twig");
    }
}
