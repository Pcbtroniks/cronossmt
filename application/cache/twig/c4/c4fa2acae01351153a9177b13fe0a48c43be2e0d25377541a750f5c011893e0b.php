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

/* tickets/add_ticket.twig */
class __TwigTemplate_638b59defe58c14de4b9e367337eb51484f673a0407794f4c540f4c41de6995d extends \Twig\Template
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
        echo "\t<!-- add ticket -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addTicketModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"nav-icon fas fa-ticket-alt\"></i> &nbsp;Añadir ticket</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "tickets/add\" id=\"addTicketForm\">

          ";
        // line 13
        if (is_role("admin")) {
            // line 14
            echo "            <div class=\"form-group\">
              <label>Técnico</label>
              <select name=\"user_id\" class=\"form-control input-user_id\">
                <option value=''>Yo mismo(a)</option>

                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["technicians"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["technician"]) {
                // line 20
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["technician"], "user_id", []));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["technician"], "full_name", []));
                echo "
                  </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technician'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
              </select>
            </div><!--./Técnico -->
          ";
        }
        // line 27
        echo "
          <div class=\"form-group\">
            <label>Cliente</label>
            <select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible input-customer_id\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
              <option value=\"\" selected hidden>Seleccione un cliente</option>
            </select>
            <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
          </div>

          <div class=\"form-row\">

            <div class=\"form-group col\">
              <label>Solicitud de</label>
              <input type=\"text\" class=\"form-control input-request_of\" name=\"request_of\">
              <small class=\"form-text text-muted\">Quien solicita la asistencia</small>
            </div>

            <div class=\"form-group col\">
              <label>Usuario final</label>
              <input type=\"text\" class=\"form-control input-end_user\" name=\"end_user\">
              <small class=\"form-text text-muted\">Quien recibirá la asistencia</small>
            </div>

          </div>

          <div class=\"form-row\">
            <div class=\"form-group col\">
              <label>Categoría</label>
              <select name=\"category_id\" class=\"form-control input-category_id\">
                <option selected hidden>-- SELECCIONAR --</option>

                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 59
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
        // line 61
        echo "
              </select>
            </div><!--./Categoría -->

            <div class=\"form-group col\">
              <label>Subcategoría</label>
              <select name=\"subcategory_id\" class=\"form-control input-subcategory_id\">
                <option selected hidden>-- SELECCIONAR --</option>

                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 71
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
        // line 73
        echo "
              </select>
            </div><!--./Subcategoría -->
          </div>

          <div class=\"form-group\">
          \t<label>Mensaje del cliente</label>
          \t<textarea type=\"text\" class=\"form-control input-msj_customer\" name=\"msj_customer\" rows=\"4\" placeholder=\"\"></textarea>
            <small class=\"form-text text-muted\">Incidente que reporta el solicitante</small>
          </div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-success btn-send-ticket\">Añadir ticket</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./add ticket -->
";
    }

    public function getTemplateName()
    {
        return "tickets/add_ticket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 73,  141 => 71,  137 => 70,  126 => 61,  115 => 59,  111 => 58,  78 => 27,  72 => 23,  60 => 20,  56 => 19,  49 => 14,  47 => 13,  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("\t<!-- add ticket -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"addTicketModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"nav-icon fas fa-ticket-alt\"></i> &nbsp;Añadir ticket</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"{{ base_url() }}tickets/add\" id=\"addTicketForm\">

          {% if (is_role('admin')) %}
            <div class=\"form-group\">
              <label>Técnico</label>
              <select name=\"user_id\" class=\"form-control input-user_id\">
                <option value=''>Yo mismo(a)</option>

                {% for technician in technicians %}
                  <option value=\"{{ technician.user_id|e }}\">{{ technician.full_name|e }}
                  </option>
                {% endfor %}

              </select>
            </div><!--./Técnico -->
          {% endif %}

          <div class=\"form-group\">
            <label>Cliente</label>
            <select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible input-customer_id\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
              <option value=\"\" selected hidden>Seleccione un cliente</option>
            </select>
            <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
          </div>

          <div class=\"form-row\">

            <div class=\"form-group col\">
              <label>Solicitud de</label>
              <input type=\"text\" class=\"form-control input-request_of\" name=\"request_of\">
              <small class=\"form-text text-muted\">Quien solicita la asistencia</small>
            </div>

            <div class=\"form-group col\">
              <label>Usuario final</label>
              <input type=\"text\" class=\"form-control input-end_user\" name=\"end_user\">
              <small class=\"form-text text-muted\">Quien recibirá la asistencia</small>
            </div>

          </div>

          <div class=\"form-row\">
            <div class=\"form-group col\">
              <label>Categoría</label>
              <select name=\"category_id\" class=\"form-control input-category_id\">
                <option selected hidden>-- SELECCIONAR --</option>

                {% for category in categories %}
                  <option value=\"{{ category.category_id|e }}\">{{ category.category|e }}</option>
                {% endfor %}

              </select>
            </div><!--./Categoría -->

            <div class=\"form-group col\">
              <label>Subcategoría</label>
              <select name=\"subcategory_id\" class=\"form-control input-subcategory_id\">
                <option selected hidden>-- SELECCIONAR --</option>

                {% for subcategory in subcategories %}
                  <option value=\"{{ subcategory.subcategory_id|e }}\">{{ subcategory.subcategory|e }}</option>
                {% endfor %}

              </select>
            </div><!--./Subcategoría -->
          </div>

          <div class=\"form-group\">
          \t<label>Mensaje del cliente</label>
          \t<textarea type=\"text\" class=\"form-control input-msj_customer\" name=\"msj_customer\" rows=\"4\" placeholder=\"\"></textarea>
            <small class=\"form-text text-muted\">Incidente que reporta el solicitante</small>
          </div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-success btn-send-ticket\">Añadir ticket</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./add ticket -->
", "tickets/add_ticket.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/tickets/add_ticket.twig");
    }
}
