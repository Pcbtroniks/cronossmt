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

/* tickets/edit_ticket.twig */
class __TwigTemplate_d6ba3dcbbdbd6b141ca0f6779fbc1caa12220df6172c073f49abff0778ba130a extends \Twig\Template
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
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editTicketModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"nav-icon fas fa-ticket-alt\"></i> &nbsp;Editar ticket</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "tickets/edit\" id=\"editTicketForm\">

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

          <div class=\"form-group\">
            <label>Estado</label>
            <select class=\"form-control input-status\" name=\"status\">
              <option hidden>SELECCIONE UN ESTADO</option>
              <option value=\"PENDIENTE\">PENDIENTE</option>
              <option value=\"EN PROCESO\">EN PROCESO</option>
              <option value=\"FINALIZADO\">FINALIZADO</option>
              <option value=\"CANCELADO\">CANCELADO</option>
            </select>
          </div>

          <div class=\"form-row\">
            <div class=\"form-group col\">
              <label>Categoría</label>
              <select name=\"category_id\" class=\"form-control input-category_id\">
                <option selected hidden>-- SELECCIONAR --</option>

                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
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
        // line 49
        echo "
              </select>
            </div><!--./Categoría -->

            <div class=\"form-group col\">
              <label>Subcategoría</label>
              <select name=\"subcategory_id\" class=\"form-control input-subcategory_id\">
                <option selected hidden>-- SELECCIONAR --</option>

                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 59
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
        // line 61
        echo "
              </select>
            </div><!--./Subcategoría -->
          </div>

          <div class=\"row\">
            <div class=\"col-12\">
              <h4 class=\"mb-4\">
                Registro de Actividad&nbsp;
                  <a href=\"#responder\">
                    <button class=\"btn btn-primary btn-xs\" type=\"button\">Responder</button>
                  </a>
              </h4>
              <div class=\"post\">
                <div class=\"user-block\">
                  <img class=\"img-circle img-bordered-sm\" src=\"";
        // line 76
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

          <div class=\"form-group\">
            <label><a name=\"responder\">Mensaje del técnico</a></label>
            <textarea type=\"text\" class=\"form-control input-msj_technician\" name=\"msj_technician\" rows=\"4\" placeholder=\"\"></textarea>
            <small class=\"form-text text-muted\">Diagnóstico y/o solución del técnico</small>
          </div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-success\">Actualizar ticket</button>
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
        return "tickets/edit_ticket.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 76,  121 => 61,  110 => 59,  106 => 58,  95 => 49,  84 => 47,  80 => 46,  42 => 11,  30 => 1,);
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
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"editTicketModal\">
\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"nav-icon fas fa-ticket-alt\"></i> &nbsp;Editar ticket</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"{{ base_url() }}tickets/edit\" id=\"editTicketForm\">

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

          <div class=\"form-group\">
            <label>Estado</label>
            <select class=\"form-control input-status\" name=\"status\">
              <option hidden>SELECCIONE UN ESTADO</option>
              <option value=\"PENDIENTE\">PENDIENTE</option>
              <option value=\"EN PROCESO\">EN PROCESO</option>
              <option value=\"FINALIZADO\">FINALIZADO</option>
              <option value=\"CANCELADO\">CANCELADO</option>
            </select>
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

          <div class=\"row\">
            <div class=\"col-12\">
              <h4 class=\"mb-4\">
                Registro de Actividad&nbsp;
                  <a href=\"#responder\">
                    <button class=\"btn btn-primary btn-xs\" type=\"button\">Responder</button>
                  </a>
              </h4>
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

          <div class=\"form-group\">
            <label><a name=\"responder\">Mensaje del técnico</a></label>
            <textarea type=\"text\" class=\"form-control input-msj_technician\" name=\"msj_technician\" rows=\"4\" placeholder=\"\"></textarea>
            <small class=\"form-text text-muted\">Diagnóstico y/o solución del técnico</small>
          </div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-success\">Actualizar ticket</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./edit ticket -->
", "tickets/edit_ticket.twig", "C:\\laragon\\www\\cronos\\application\\views\\tickets\\edit_ticket.twig");
    }
}
