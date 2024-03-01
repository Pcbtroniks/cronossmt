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

/* tickets/report_tickets.twig */
class __TwigTemplate_d1820e0adf361177497a6affc75c3a1bb87e260720489735edfe40c7344813c2 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Reporte de Incidente</title>
    <style>
      table {
        background-color: white;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }

      table, th, td {
        border: 1px solid black;
      }

      th, td {
        padding: 10px;
      }

      tr:nth-child(even) {
        background-color: #ddd;
      }

      .report-header th {
        border: none;
      }
    </style>
  </head>

  <body>

  <table class=\"report-header\">
    <thead>
      <tr>
        <th><h1 class=\"text-center\">PCB<span style=\"color: #5AB131;\">TRONIKS</span></h1></th>
        <th><h1 align=\"center\">Reporte Mensual de Tickets</h1></th>
      </tr>
    </thead>
  </table>

  <table>
    <thead>
      <tr>
        <th colspan=\"4\">Información General</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th align=\"left\">Cliente</th>
        <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer_details"] ?? null), "customer", []), "html", null, true);
        echo "</td>
        <th align=\"left\">Mes del Reporte</th>
        <td>";
        // line 54
        echo twig_escape_filter($this->env, ($context["month"] ?? null), "html", null, true);
        echo "</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th colspan=\"6\">Estadísticas</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th align=\"left\">Pendientes</th>
        <td>";
        // line 69
        echo twig_escape_filter($this->env, ($context["pending"] ?? null), "html", null, true);
        echo "</td>
        <th align=\"left\">En Proceso</th>
        <td>";
        // line 71
        echo twig_escape_filter($this->env, ($context["in_process"] ?? null), "html", null, true);
        echo "</td>
        <th align=\"left\">Finalizados</th>
        <td>";
        // line 73
        echo twig_escape_filter($this->env, ($context["finished"] ?? null), "html", null, true);
        echo "</td>
      </tr>
    </tbody>

  </table>

  <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Usuario Final</th>
          <th>Incidente reportado</th>
          <th>Actualización</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tickets"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 91
            echo "          <tr>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "ticket_id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "end_user", []), "html", null, true);
            echo "</td>
            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "msj_customer", []), "html", null, true);
            echo "</td>
            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "updated_at", []), "html", null, true);
            echo "</td>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "status", []), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "      </tbody>
  </table>

  </body>

</html>";
    }

    public function getTemplateName()
    {
        return "tickets/report_tickets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 99,  159 => 96,  155 => 95,  151 => 94,  147 => 93,  143 => 92,  140 => 91,  136 => 90,  116 => 73,  111 => 71,  106 => 69,  88 => 54,  83 => 52,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\" />
    <title>Reporte de Incidente</title>
    <style>
      table {
        background-color: white;
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }

      table, th, td {
        border: 1px solid black;
      }

      th, td {
        padding: 10px;
      }

      tr:nth-child(even) {
        background-color: #ddd;
      }

      .report-header th {
        border: none;
      }
    </style>
  </head>

  <body>

  <table class=\"report-header\">
    <thead>
      <tr>
        <th><h1 class=\"text-center\">PCB<span style=\"color: #5AB131;\">TRONIKS</span></h1></th>
        <th><h1 align=\"center\">Reporte Mensual de Tickets</h1></th>
      </tr>
    </thead>
  </table>

  <table>
    <thead>
      <tr>
        <th colspan=\"4\">Información General</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th align=\"left\">Cliente</th>
        <td>{{customer_details.customer}}</td>
        <th align=\"left\">Mes del Reporte</th>
        <td>{{month}}</td>
      </tr>
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th colspan=\"6\">Estadísticas</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th align=\"left\">Pendientes</th>
        <td>{{pending}}</td>
        <th align=\"left\">En Proceso</th>
        <td>{{in_process}}</td>
        <th align=\"left\">Finalizados</th>
        <td>{{finished}}</td>
      </tr>
    </tbody>

  </table>

  <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Usuario Final</th>
          <th>Incidente reportado</th>
          <th>Actualización</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody>
        {% for ticket in tickets %}
          <tr>
            <td>{{ ticket.ticket_id }}</td>
            <td>{{ ticket.end_user }}</td>
            <td>{{ ticket.msj_customer }}</td>
            <td>{{ ticket.updated_at }}</td>
            <td>{{ ticket.status }}</td>
          </tr>
        {% endfor %}
      </tbody>
  </table>

  </body>

</html>", "tickets/report_tickets.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/tickets/report_tickets.twig");
    }
}
