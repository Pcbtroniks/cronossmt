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

/* tickets/view_ticket.twig */
class __TwigTemplate_d86df773ba4c02dfb1f70ee8eddc331d9c70f41efcb62e1f4efbc95a11a46bc6 extends \Twig\Template
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
        echo "\t<!-- edit ticket -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewTicketModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"nav-icon fas fa-ticket-alt\"></i> &nbsp;Ticket</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form id=\"viewTicketForm\">

          <div class=\"form-group\">
            <label>Cliente</label>
            <input type=\"text\" class=\"form-control input-customer\" readonly>
            <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
          </div>

          <div class=\"form-row\">

            <div class=\"form-group col\">
              <label>Solicitud de</label>
              <input type=\"text\" class=\"form-control input-request_of\" readonly>
              <small class=\"form-text text-muted\">Quien solicita la asistencia</small>
            </div>

            <div class=\"form-group col\">
              <label>Usuario final</label>
              <input type=\"text\" class=\"form-control input-end_user\" readonly>
              <small class=\"form-text text-muted\">Quien recibirá la asistencia</small>
            </div>

          </div>

          <div class=\"form-row\">

            <div class=\"form-group col\">
              <label>Fecha de inicio</label>
              <input type=\"text\" class=\"form-control input-created_at\" readonly>
              <small class=\"form-text text-muted\">Levantamiento del ticket</small>
            </div>

            <div class=\"form-group col\">
              <label>Fecha de finalización</label>
              <input type=\"text\" class=\"form-control input-updated_at\" readonly>
              <small class=\"form-text text-muted\">Conclusión del ticket</small>
            </div>

          </div>

          <div class=\"form-group\">
            <label>Estado</label>
            <input type=\"text\" class=\"form-control input-status\" readonly>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group col\">
              <label>Categoría</label>
              <select name=\"category_id\" class=\"form-control input-category_id\" disabled>
                <option selected hidden>-- SELECCIONAR --</option>

                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 63
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category_id", []));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category", []));
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
              </select>
            </div><!--./Categoría -->

            <div class=\"form-group col\">
              <label>Subcategoría</label>
              <select name=\"subcategory_id\" class=\"form-control input-subcategory_id\" disabled>
                <option selected hidden>-- SELECCIONAR --</option>

                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 75
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subcategory_id", []));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "subcategory", []));
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
              </select>
            </div><!--./Subcategoría -->
          </div>

          <div class=\"row\">
            <div class=\"col-12\">
              <h4 class=\"mb-4\">Registro de Actividad</h4>
              <div class=\"post\">
                <div class=\"user-block\">
                  <img class=\"img-circle img-bordered-sm\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/img/user_avatar.png\" alt=\"user image\">
                  <span class=\"username activity-customer\"></span>
                  <span class=\"description activity-created_at\"></span>
                </div>
                <!-- /.user-block -->
                <p class=\"activity-msj_customer\"></p>
              </div>

              <div class=\"activityMessages\">
                
              </div>

            </div>
          </div><!--./ Activity -->

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./edit ticket -->
";
    }

    public function getTemplateName()
    {
        return "tickets/view_ticket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 87,  134 => 77,  123 => 75,  119 => 74,  108 => 65,  97 => 63,  93 => 62,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("\t<!-- edit ticket -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"viewTicketModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"nav-icon fas fa-ticket-alt\"></i> &nbsp;Ticket</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form id=\"viewTicketForm\">

          <div class=\"form-group\">
            <label>Cliente</label>
            <input type=\"text\" class=\"form-control input-customer\" readonly>
            <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
          </div>

          <div class=\"form-row\">

            <div class=\"form-group col\">
              <label>Solicitud de</label>
              <input type=\"text\" class=\"form-control input-request_of\" readonly>
              <small class=\"form-text text-muted\">Quien solicita la asistencia</small>
            </div>

            <div class=\"form-group col\">
              <label>Usuario final</label>
              <input type=\"text\" class=\"form-control input-end_user\" readonly>
              <small class=\"form-text text-muted\">Quien recibirá la asistencia</small>
            </div>

          </div>

          <div class=\"form-row\">

            <div class=\"form-group col\">
              <label>Fecha de inicio</label>
              <input type=\"text\" class=\"form-control input-created_at\" readonly>
              <small class=\"form-text text-muted\">Levantamiento del ticket</small>
            </div>

            <div class=\"form-group col\">
              <label>Fecha de finalización</label>
              <input type=\"text\" class=\"form-control input-updated_at\" readonly>
              <small class=\"form-text text-muted\">Conclusión del ticket</small>
            </div>

          </div>

          <div class=\"form-group\">
            <label>Estado</label>
            <input type=\"text\" class=\"form-control input-status\" readonly>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group col\">
              <label>Categoría</label>
              <select name=\"category_id\" class=\"form-control input-category_id\" disabled>
                <option selected hidden>-- SELECCIONAR --</option>

                {% for category in categories %}
                  <option value=\"{{ category.category_id|e }}\">{{ category.category|e }}</option>
                {% endfor %}

              </select>
            </div><!--./Categoría -->

            <div class=\"form-group col\">
              <label>Subcategoría</label>
              <select name=\"subcategory_id\" class=\"form-control input-subcategory_id\" disabled>
                <option selected hidden>-- SELECCIONAR --</option>

                {% for subcategory in subcategories %}
                  <option value=\"{{ subcategory.subcategory_id|e }}\">{{ subcategory.subcategory|e }}</option>
                {% endfor %}

              </select>
            </div><!--./Subcategoría -->
          </div>

          <div class=\"row\">
            <div class=\"col-12\">
              <h4 class=\"mb-4\">Registro de Actividad</h4>
              <div class=\"post\">
                <div class=\"user-block\">
                  <img class=\"img-circle img-bordered-sm\" src=\"{{ base_url() }}custom/img/user_avatar.png\" alt=\"user image\">
                  <span class=\"username activity-customer\"></span>
                  <span class=\"description activity-created_at\"></span>
                </div>
                <!-- /.user-block -->
                <p class=\"activity-msj_customer\"></p>
              </div>

              <div class=\"activityMessages\">
                
              </div>

            </div>
          </div><!--./ Activity -->

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./edit ticket -->
", "tickets/view_ticket.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/tickets/view_ticket.twig");
    }
}
