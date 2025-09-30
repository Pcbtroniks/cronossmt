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

/* quotations/invoice.twig */
class __TwigTemplate_6395a21aa32636ab240bb64bf488b8e7b5f370e1aedfb280ddd4470c76a90caf extends \Twig\Template
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
        echo "<style type=\"text/css\">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }

.text-center{
\ttext-align:center
}
.text-right{
\ttext-align:right
}
table th, td{
\tfont-size:13px
}
.detalle td{
\tborder:solid 1px #bdc3c7;
\tpadding:5px;
}
.items{
\tborder:solid 1px #bdc3c7;
\t 
}
.items td, th{
\tpadding:10px;
}
.items th{
\tbackground-color: #16a085;
\tcolor:white;
\t
}
.border-bottom{
\tborder-bottom: solic 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
-->
</style>
<page backtop=\"15mm\" backbottom=\"15mm\" backleft=\"15mm\" backright=\"15mm\" style=\"font-size: 12pt; font-family: arial\" >
\t<page_footer>
\t\t<table class=\"page_footer\">
\t\t\t<tr>

\t\t\t\t<td style=\"width: 50%; text-align: left\">
\t\t\t\t\tP&aacute;gina [[page_cu]]/[[page_nb]]
\t\t\t\t</td>
\t\t\t\t<td style=\"width: 50%; text-align: right\">
\t\t\t\t\t&copy; PCBTRONIKS 2021
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</page_footer>
    <table cellspacing=\"0\" style=\"width: 100%;\">
        <tr>

            <td  style=\"width: 33%; color: #444444;\">
                <img style=\"width: 75%;\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/img/pcb_tronikss_lg.png\" alt=\"Logo\"><br>
                
            </td>
\t\t\t<td style=\"width: 34%;\">
\t\t\t<strong>E-mail : </strong> comercial@pcbtroniks.com<br>
\t\t\t<strong>Teléfono : </strong> (33) 1305 9432<br>
\t\t\t<strong>Sitio web : </strong> www.pcbtroniks.com<br>
\t\t\t</td>
\t\t\t<td style=\"width: 33%;\">
\t\t\t\t<strong>PCBTRONIKS</strong> <br>
\t\t\t\tGuadalajara, Jalisco<br>
\t\t
\t\t\t</td>
\t\t\t
        </tr>
    </table>
    <br>
\t<hr style=\"display: block;height: 1px;border: 1.5px solid #16a085;    margin: 0.5em 0;    padding: 0;\">
\t<table cellspacing=\"0\" style=\"width: 100%;\">
        <tr>

            <td  style=\"width: 10%; \">               
            </td>
\t\t\t<td style=\"width: 80%;text-align:center;font-size:22px;color:#16a085;padding:10px; border-radius: 5px; \">
\t\t\t\tCOTIZACIÓN # ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "quotation_id", []), "html", null, true);
        echo "
\t\t\t</td>
\t\t\t
\t\t\t
        </tr>
    </table>
\t
\t<br>
\t
\t<br>
\t<table cellspacing=\"0\" style=\"width: 100%;\" class=\"detalle\">

\t\t
\t\t<tr>

            <td  style=\"width: 100%; \"> 
\t\t\t
\t\t\t\t<strong>Cliente: </strong> ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "customer", []), "html", null, true);
        echo "<br>
\t\t\t\t<strong>RFC: </strong> ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "rfc", []), "html", null, true);
        echo "<br>
\t\t\t\t<strong>E-mail: </strong> ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "email", []), "html", null, true);
        echo "<br>
\t\t\t\t<strong>Teléfono: </strong> ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "phone", []), "html", null, true);
        echo " <br>
                <strong>Fecha: </strong> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "created_at", []), "html", null, true);
        echo " <br>
                <strong>Fecha de Vencimiento: </strong> ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "expiration_at", []), "html", null, true);
        echo "
            </td>


\t\t\t
\t\t\t
\t\t\t
        </tr>
    </table>
\t
\t<br>
\t
\t<br>
\t<table cellspacing=\"0\" style=\"width: 100%\" class='items'>
        <tr>
\t\t\t<th style=\"text-align:center;width:10%\">Cantidad</th>
\t\t\t<th style=\"text-align:center;width:10%\">Unidad</th>
\t\t\t<th style=\"text-align:left;width:40%;\">Descripción</th>
\t\t\t
\t\t\t<th style=\"text-align:right;width:20%\">P. unitario</th>
\t\t\t<th style=\"text-align:right;width:20%\">Importe</th>
        </tr>

        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["concepts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["concept"]) {
            // line 127
            echo "
\t\t<tr>
\t\t\t<td class=\"border-bottom text-center\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["concept"], "quantity", []), "html", null, true);
            echo "</td>
\t\t\t<td class=\"border-bottom text-center\">";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["concept"], "quantity", []), "html", null, true);
            echo "</td>
\t\t\t<td class=\"border-bottom\">";
            // line 131
            echo $this->getAttribute($context["concept"], "description", []);
            echo "</td>
\t\t\t
\t\t\t<td class=\"border-bottom text-right\">";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["concept"], "unit_price", []), "html", null, true);
            echo "</td>
\t\t\t<td class='border-bottom text-right'>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["concept"], "amount", []), "html", null, true);
            echo "</td>

\t\t</tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concept'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
\t<tr >
\t\t<td colspan=4 class='text-right' style=\"font-size:18px;\">SUBTOTAL </td>
\t\t<td class='text-right' style=\"font-size:18px;\">";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "subtotal", []), "html", null, true);
        echo "</td>
\t</tr>

\t<tr >
\t\t<td colspan=4 class='text-right' style=\"font-size:18px;\">IVA </td>
\t\t<td class='text-right' style=\"font-size:18px;\">";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "iva", []), "html", null, true);
        echo "</td>
\t</tr>

\t<tr >
\t\t<td colspan=4 class='text-right' style=\"font-size:18px;color: #16a085\">TOTAL MXN </td>
\t\t<td class='text-right' style=\"font-size:18px;color:#16a085\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "total", []), "html", null, true);
        echo "</td>
\t</tr>
    </table>
\t
\t<br>
\t<p>
\t\tAutorizado por : ________________________<br>
\t</p>
\t
\t<br><br>
\t
\t<p class='text-center'>Si tiene alguna consulta relacionada con esta orden de compra, por favor contáctenos : <br>
        PCBTroniks, (33) 1305 9432, comercial@pcbtroniks.com
    </p>
\t<table>
\t\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<br>-Los precios están sujetos a cambios sin previo aviso.
\t\t\t\t\t<br>-Esta cotización ha sido elaborada según nuestra interpretación de sus requerimientos. Por lo tanto, el cliente deberá revisarla y notificarnos si el proyecto cotizado cumple con sus necesidades.
\t\t\t\t\t<br>-Esta propuesta contempla la ejecución del servicio en jornadas laborales normales.
\t\t\t\t\t<br>-Cualquier material adicional a esta propuesta deberá ser autorizado por el cliente y será cotizado por separado.
\t\t\t\t\t<br>-Esta cotización tiene una vigencia de 30 días a partir de la fecha de su elaboración.
\t\t\t\t\t<br>-En caso de que nos veamos favorecidos con su amable pedido, le solicitamos indicar si el equipo o servicio cotizado cumple con sus requerimientos.
\t\t\t\t\t<br>-Cualquier error de índole técnica o comercial en nuestra cotización estará sujeto a corrección.
\t\t\t\t\t<br>-Los tiempos de entrega indicados corresponden a la mejor estimación disponible al momento de emitir esta cotización.
\t\t\t\t\t-No se aceptarán cambios ni devoluciones una vez que la cotización haya sido autorizada.
\t\t\t\t</td>
\t\t\t</tr>
\t</table>
</page>";
    }

    public function getTemplateName()
    {
        return "quotations/invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 152,  230 => 147,  222 => 142,  217 => 139,  206 => 134,  202 => 133,  197 => 131,  193 => 130,  189 => 129,  185 => 127,  181 => 126,  155 => 103,  151 => 102,  147 => 101,  143 => 100,  139 => 99,  135 => 98,  115 => 81,  88 => 57,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }

.text-center{
\ttext-align:center
}
.text-right{
\ttext-align:right
}
table th, td{
\tfont-size:13px
}
.detalle td{
\tborder:solid 1px #bdc3c7;
\tpadding:5px;
}
.items{
\tborder:solid 1px #bdc3c7;
\t 
}
.items td, th{
\tpadding:10px;
}
.items th{
\tbackground-color: #16a085;
\tcolor:white;
\t
}
.border-bottom{
\tborder-bottom: solic 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
-->
</style>
<page backtop=\"15mm\" backbottom=\"15mm\" backleft=\"15mm\" backright=\"15mm\" style=\"font-size: 12pt; font-family: arial\" >
\t<page_footer>
\t\t<table class=\"page_footer\">
\t\t\t<tr>

\t\t\t\t<td style=\"width: 50%; text-align: left\">
\t\t\t\t\tP&aacute;gina [[page_cu]]/[[page_nb]]
\t\t\t\t</td>
\t\t\t\t<td style=\"width: 50%; text-align: right\">
\t\t\t\t\t&copy; PCBTRONIKS 2021
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</page_footer>
    <table cellspacing=\"0\" style=\"width: 100%;\">
        <tr>

            <td  style=\"width: 33%; color: #444444;\">
                <img style=\"width: 75%;\" src=\"{{base_url()}}custom/img/pcb_tronikss_lg.png\" alt=\"Logo\"><br>
                
            </td>
\t\t\t<td style=\"width: 34%;\">
\t\t\t<strong>E-mail : </strong> comercial@pcbtroniks.com<br>
\t\t\t<strong>Teléfono : </strong> (33) 1305 9432<br>
\t\t\t<strong>Sitio web : </strong> www.pcbtroniks.com<br>
\t\t\t</td>
\t\t\t<td style=\"width: 33%;\">
\t\t\t\t<strong>PCBTRONIKS</strong> <br>
\t\t\t\tGuadalajara, Jalisco<br>
\t\t
\t\t\t</td>
\t\t\t
        </tr>
    </table>
    <br>
\t<hr style=\"display: block;height: 1px;border: 1.5px solid #16a085;    margin: 0.5em 0;    padding: 0;\">
\t<table cellspacing=\"0\" style=\"width: 100%;\">
        <tr>

            <td  style=\"width: 10%; \">               
            </td>
\t\t\t<td style=\"width: 80%;text-align:center;font-size:22px;color:#16a085;padding:10px; border-radius: 5px; \">
\t\t\t\tCOTIZACIÓN # {{details.quotation_id}}
\t\t\t</td>
\t\t\t
\t\t\t
        </tr>
    </table>
\t
\t<br>
\t
\t<br>
\t<table cellspacing=\"0\" style=\"width: 100%;\" class=\"detalle\">

\t\t
\t\t<tr>

            <td  style=\"width: 100%; \"> 
\t\t\t
\t\t\t\t<strong>Cliente: </strong> {{details.customer}}<br>
\t\t\t\t<strong>RFC: </strong> {{details.rfc}}<br>
\t\t\t\t<strong>E-mail: </strong> {{details.email}}<br>
\t\t\t\t<strong>Teléfono: </strong> {{details.phone}} <br>
                <strong>Fecha: </strong> {{details.created_at}} <br>
                <strong>Fecha de Vencimiento: </strong> {{details.expiration_at}}
            </td>


\t\t\t
\t\t\t
\t\t\t
        </tr>
    </table>
\t
\t<br>
\t
\t<br>
\t<table cellspacing=\"0\" style=\"width: 100%\" class='items'>
        <tr>
\t\t\t<th style=\"text-align:center;width:10%\">Cantidad</th>
\t\t\t<th style=\"text-align:center;width:10%\">Unidad</th>
\t\t\t<th style=\"text-align:left;width:40%;\">Descripción</th>
\t\t\t
\t\t\t<th style=\"text-align:right;width:20%\">P. unitario</th>
\t\t\t<th style=\"text-align:right;width:20%\">Importe</th>
        </tr>

        {% for concept in concepts %}

\t\t<tr>
\t\t\t<td class=\"border-bottom text-center\">{{concept.quantity}}</td>
\t\t\t<td class=\"border-bottom text-center\">{{concept.quantity}}</td>
\t\t\t<td class=\"border-bottom\">{{concept.description|raw}}</td>
\t\t\t
\t\t\t<td class=\"border-bottom text-right\">{{concept.unit_price}}</td>
\t\t\t<td class='border-bottom text-right'>{{concept.amount}}</td>

\t\t</tr>

        {% endfor %}

\t<tr >
\t\t<td colspan=4 class='text-right' style=\"font-size:18px;\">SUBTOTAL </td>
\t\t<td class='text-right' style=\"font-size:18px;\">{{details.subtotal}}</td>
\t</tr>

\t<tr >
\t\t<td colspan=4 class='text-right' style=\"font-size:18px;\">IVA </td>
\t\t<td class='text-right' style=\"font-size:18px;\">{{details.iva}}</td>
\t</tr>

\t<tr >
\t\t<td colspan=4 class='text-right' style=\"font-size:18px;color: #16a085\">TOTAL MXN </td>
\t\t<td class='text-right' style=\"font-size:18px;color:#16a085\">{{details.total}}</td>
\t</tr>
    </table>
\t
\t<br>
\t<p>
\t\tAutorizado por : ________________________<br>
\t</p>
\t
\t<br><br>
\t
\t<p class='text-center'>Si tiene alguna consulta relacionada con esta orden de compra, por favor contáctenos : <br>
        PCBTroniks, (33) 1305 9432, comercial@pcbtroniks.com
    </p>
\t<table>
\t\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<br>-Los precios están sujetos a cambios sin previo aviso.
\t\t\t\t\t<br>-Esta cotización ha sido elaborada según nuestra interpretación de sus requerimientos. Por lo tanto, el cliente deberá revisarla y notificarnos si el proyecto cotizado cumple con sus necesidades.
\t\t\t\t\t<br>-Esta propuesta contempla la ejecución del servicio en jornadas laborales normales.
\t\t\t\t\t<br>-Cualquier material adicional a esta propuesta deberá ser autorizado por el cliente y será cotizado por separado.
\t\t\t\t\t<br>-Esta cotización tiene una vigencia de 30 días a partir de la fecha de su elaboración.
\t\t\t\t\t<br>-En caso de que nos veamos favorecidos con su amable pedido, le solicitamos indicar si el equipo o servicio cotizado cumple con sus requerimientos.
\t\t\t\t\t<br>-Cualquier error de índole técnica o comercial en nuestra cotización estará sujeto a corrección.
\t\t\t\t\t<br>-Los tiempos de entrega indicados corresponden a la mejor estimación disponible al momento de emitir esta cotización.
\t\t\t\t\t-No se aceptarán cambios ni devoluciones una vez que la cotización haya sido autorizada.
\t\t\t\t</td>
\t\t\t</tr>
\t</table>
</page>", "quotations/invoice.twig", "C:\\laragon\\www\\cronos\\application\\views\\quotations\\invoice.twig");
    }
}
