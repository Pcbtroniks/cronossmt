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

/* dashboard/dashboard.twig */
class __TwigTemplate_cd393d277b02192691b748b6069d553eba49172051adbecaaaba5f9e1ed0c9f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'appHeader' => [$this, 'block_appHeader'],
            'appBody' => [$this, 'block_appBody'],
            'appFooter' => [$this, 'block_appFooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "overall/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("overall/layout.twig", "dashboard/dashboard.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = [])
    {
        // line 4
        echo "<!-- DataTables -->
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
";
    }

    // line 8
    public function block_appBody($context, array $blocks = [])
    {
        // line 9
        echo "  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Dashboard</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item active\">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>

       <!-- Alerta de bienvenida -->
        <div class=\"alert alert-info\">
          <h5><i class=\"icon fas fa-check\"></i> Bienvenido!</h5>
          <i>";
        // line 34
        echo twig_escape_filter($this->env, ($context["user_email"] ?? null), "html", null, true);
        echo "</i> has ingresado al inventario. Tienes permisos de: <i>";
        echo twig_escape_filter($this->env, ($context["user_role"] ?? null), "html", null, true);
        echo "</i>.
        </div>
        <!-- Alerta de bienvenida -->

        <!-- Resumen de tickets -->
          <div class=\"row\">
          <div class=\"col-lg-4 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>";
        // line 44
        (((array_key_exists("pending", $context) &&  !(null === ($context["pending"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["pending"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Tickets pendientes</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-document-text\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-4 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-warning\">
              <div class=\"inner\">
                <h3>";
        // line 58
        (((array_key_exists("in_process", $context) &&  !(null === ($context["in_process"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["in_process"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Tickets en proceso</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-document-text\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-4 container-fluid\">
            <!-- small box -->
            <div class=\"small-box bg-success\">
              <div class=\"inner\">
                <h3>";
        // line 72
        (((array_key_exists("finished", $context) &&  !(null === ($context["finished"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["finished"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Tickets finalizados</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-document-text\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Resumen de tickets -->

        <!-- Resumen de sistema -->
          <div class=\"row\">
          <div class=\"col-lg-6 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-indigo\">
              <div class=\"inner\">
                <h3>";
        // line 91
        (((array_key_exists("all_products", $context) &&  !(null === ($context["all_products"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["all_products"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Equipos existentes</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-stats-bars\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-6 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-indigo\">
              <div class=\"inner\">
                <h3>";
        // line 105
        (((array_key_exists("customers", $context) &&  !(null === ($context["customers"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["customers"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Clientes</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-person-stalker\"></i>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Resumen de sistema -->

        <!-- Resumen de EQUIPOS -->
          <div class=\"row\">
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>";
        // line 126
        (((array_key_exists("computo", $context) &&  !(null === ($context["computo"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["computo"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Computo</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-laptop\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>";
        // line 141
        (((array_key_exists("printer", $context) &&  !(null === ($context["printer"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["printer"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Impresoras</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-printer\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>";
        // line 156
        (((array_key_exists("television", $context) &&  !(null === ($context["television"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["television"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Televisiones</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-monitor\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>";
        // line 171
        (((array_key_exists("projector", $context) &&  !(null === ($context["projector"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["projector"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Proyectores</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-easel\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>";
        // line 186
        (((array_key_exists("nobreak", $context) &&  !(null === ($context["nobreak"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["nobreak"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>No break's</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-outlet\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>";
        // line 201
        (((array_key_exists("other", $context) &&  !(null === ($context["other"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["other"] ?? null), "html", null, true))) : (print (0)));
        echo "</h3>

                <p>Otros</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-cube\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Resumen de sistema -->

        <!-- Manual rapido -->
        <div class=\"card card-primary card-outline\">
          <div class=\"card-body\">
            <h4>Guia rapida</h4>
            <div class=\"row\">
              <div class=\"col-5 col-sm-3\">
                <div class=\"nav flex-column nav-tabs h-100\" id=\"vert-tabs-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                  <a class=\"nav-link\" id=\"vert-tabs-home-tab\" data-toggle=\"pill\" href=\"#vert-tabs-home\" role=\"tab\" aria-controls=\"vert-tabs-home\" aria-selected=\"false\">Kits</a>
                  <a class=\"nav-link\" id=\"vert-tabs-profile-tab\" data-toggle=\"pill\" href=\"#vert-tabs-profile\" role=\"tab\" aria-controls=\"vert-tabs-profile\" aria-selected=\"false\">Adicion de equipos</a>
                  <a class=\"nav-link active\" id=\"vert-tabs-clients-tab\" data-toggle=\"pill\" href=\"#vert-tabs-clients\" role=\"tab\" aria-controls=\"vert-tabs-profile\" aria-selected=\"false\">Contraseñas</a>
                </div>
              </div>
              <div class=\"col-7 col-sm-9\">
                <div class=\"tab-content\" id=\"vert-tabs-tabContent\">
                  <div class=\"tab-pane text-left fade\" id=\"vert-tabs-home\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-home-tab\">
                    <p>Son un conjunto de herramientas que nos permite saber quien es el responsable de dicho material y como
                    es que se agrupan.</p>
                  </div>
                  <div class=\"tab-pane fade\" id=\"vert-tabs-profile\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-profile-tab\">
                    <p>Si necesita añadir un equipo que no pertenece a las categorías existentes, dirigase al apartado de <i>Inventario</i> / <a href=\"";
        // line 233
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "inventory/otherproducts\"><i>Otros</i></a>.</p>
                    <p>No es necesario definir una categoria; en el espacio de observaciones es donde podremos especificar el tipo de equipo y caracteristicas que deseemos saber acerca de un equipo que no pertenece a una categoria en concreto.</p>
                  </div>
                  <div class=\"tab-pane fade active show\" id=\"vert-tabs-clients\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-clients-tab\">
                    <p>Para crear una contreseña es necesario seguir la nomenclatura establecida para cada cliente con el fin de tener un control de accesos con mayor estabilidad y eficiencia. para ello nuestra nomenclatura de contraseñas de acuerdo al cliente esta basada en cinco faciles partes de aprender:
                    <span style=\"color: red;\">Sys</span><span style=\"color: black;\">pcb</span><span style=\"color: black;\">admin</span><span style=\"color: red;\">.</span><span style=\"color: green;\">Numero del cliente + 00</span>
                    </p>
                    <p>Dependiendo el cliente o sitio la contraseña cambiara de acuerdo a la nomenclatura pero siempre manteniendo los caracteres basicos inciales <b>Syspcbadmin</b> que describen el departamento, la empresa y el grado de contraseña (administrador) seguido de un punto (.) y el numero de cliente en la base de datos, el cual puedes encontrar en la lista de clientes; ejemplo con el cliente numero 1:
                    <span style=\"color: red;\">Syspcbadmin</span><span style=\"color: red;\">.</span><span style=\"color: green;\">100</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- Manual rapido -->
      </div>
    </section>
    <!-- /.content -->
  </div>

  <div class=\"modal fade\" id=\"modal-avisos\">
        <div class=\"modal-dialog modal-lg\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Nuevo aviso</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <img class=\"d-block w-100\" src=\"custom/img/avisos/aviso.jpeg\">
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>

  ";
        // line 276
        $this->loadTemplate("categories/create_category.twig", "dashboard/dashboard.twig", 276)->display($context);
    }

    // line 279
    public function block_appFooter($context, array $blocks = [])
    {
        // line 280
        echo "
<!-- DataTables -->
<script src=\"";
        // line 282
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<!-- Custom -->
<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/category.js\"></script>

<!-- Emite avisos -->
";
    }

    public function getTemplateName()
    {
        return "dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 285,  381 => 283,  377 => 282,  373 => 280,  370 => 279,  366 => 276,  320 => 233,  285 => 201,  267 => 186,  249 => 171,  231 => 156,  213 => 141,  195 => 126,  171 => 105,  154 => 91,  132 => 72,  115 => 58,  98 => 44,  83 => 34,  56 => 9,  53 => 8,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'overall/layout.twig' %}

{% block appHeader %}
<!-- DataTables -->
<link rel=\"stylesheet\" href=\"{{ base_url }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
{% endblock %}

{% block appBody %}
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>Dashboard</h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item active\">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>

       <!-- Alerta de bienvenida -->
        <div class=\"alert alert-info\">
          <h5><i class=\"icon fas fa-check\"></i> Bienvenido!</h5>
          <i>{{user_email}}</i> has ingresado al inventario. Tienes permisos de: <i>{{user_role}}</i>.
        </div>
        <!-- Alerta de bienvenida -->

        <!-- Resumen de tickets -->
          <div class=\"row\">
          <div class=\"col-lg-4 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-danger\">
              <div class=\"inner\">
                <h3>{{ pending ?? 0 }}</h3>

                <p>Tickets pendientes</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-document-text\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-4 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-warning\">
              <div class=\"inner\">
                <h3>{{ in_process ?? 0 }}</h3>

                <p>Tickets en proceso</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-document-text\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-4 container-fluid\">
            <!-- small box -->
            <div class=\"small-box bg-success\">
              <div class=\"inner\">
                <h3>{{ finished ?? 0 }}</h3>

                <p>Tickets finalizados</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-document-text\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Resumen de tickets -->

        <!-- Resumen de sistema -->
          <div class=\"row\">
          <div class=\"col-lg-6 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-indigo\">
              <div class=\"inner\">
                <h3>{{all_products ?? 0}}</h3>

                <p>Equipos existentes</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-stats-bars\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class=\"col-lg-6 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-indigo\">
              <div class=\"inner\">
                <h3>{{ customers ?? 0 }}</h3>

                <p>Clientes</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-person-stalker\"></i>
              </div>
            </div>
          </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Resumen de sistema -->

        <!-- Resumen de EQUIPOS -->
          <div class=\"row\">
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>{{computo ?? 0}}</h3>

                <p>Computo</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-laptop\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>{{printer ?? 0}}</h3>

                <p>Impresoras</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-printer\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>{{television ?? 0}}</h3>

                <p>Televisiones</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-monitor\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>{{projector ?? 0}}</h3>

                <p>Proyectores</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-easel\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>{{nobreak ?? 0}}</h3>

                <p>No break's</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-outlet\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- col -->
          <div class=\"col-lg-2 col-6\">
            <!-- small box -->
            <div class=\"small-box bg-info\">
              <div class=\"inner\">
                <h3>{{other ?? 0}}</h3>

                <p>Otros</p>
              </div>
              <div class=\"icon\">
                <i class=\"ion ion-cube\"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- Resumen de sistema -->

        <!-- Manual rapido -->
        <div class=\"card card-primary card-outline\">
          <div class=\"card-body\">
            <h4>Guia rapida</h4>
            <div class=\"row\">
              <div class=\"col-5 col-sm-3\">
                <div class=\"nav flex-column nav-tabs h-100\" id=\"vert-tabs-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                  <a class=\"nav-link\" id=\"vert-tabs-home-tab\" data-toggle=\"pill\" href=\"#vert-tabs-home\" role=\"tab\" aria-controls=\"vert-tabs-home\" aria-selected=\"false\">Kits</a>
                  <a class=\"nav-link\" id=\"vert-tabs-profile-tab\" data-toggle=\"pill\" href=\"#vert-tabs-profile\" role=\"tab\" aria-controls=\"vert-tabs-profile\" aria-selected=\"false\">Adicion de equipos</a>
                  <a class=\"nav-link active\" id=\"vert-tabs-clients-tab\" data-toggle=\"pill\" href=\"#vert-tabs-clients\" role=\"tab\" aria-controls=\"vert-tabs-profile\" aria-selected=\"false\">Contraseñas</a>
                </div>
              </div>
              <div class=\"col-7 col-sm-9\">
                <div class=\"tab-content\" id=\"vert-tabs-tabContent\">
                  <div class=\"tab-pane text-left fade\" id=\"vert-tabs-home\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-home-tab\">
                    <p>Son un conjunto de herramientas que nos permite saber quien es el responsable de dicho material y como
                    es que se agrupan.</p>
                  </div>
                  <div class=\"tab-pane fade\" id=\"vert-tabs-profile\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-profile-tab\">
                    <p>Si necesita añadir un equipo que no pertenece a las categorías existentes, dirigase al apartado de <i>Inventario</i> / <a href=\"{{ base_url() }}inventory/otherproducts\"><i>Otros</i></a>.</p>
                    <p>No es necesario definir una categoria; en el espacio de observaciones es donde podremos especificar el tipo de equipo y caracteristicas que deseemos saber acerca de un equipo que no pertenece a una categoria en concreto.</p>
                  </div>
                  <div class=\"tab-pane fade active show\" id=\"vert-tabs-clients\" role=\"tabpanel\" aria-labelledby=\"vert-tabs-clients-tab\">
                    <p>Para crear una contreseña es necesario seguir la nomenclatura establecida para cada cliente con el fin de tener un control de accesos con mayor estabilidad y eficiencia. para ello nuestra nomenclatura de contraseñas de acuerdo al cliente esta basada en cinco faciles partes de aprender:
                    <span style=\"color: red;\">Sys</span><span style=\"color: black;\">pcb</span><span style=\"color: black;\">admin</span><span style=\"color: red;\">.</span><span style=\"color: green;\">Numero del cliente + 00</span>
                    </p>
                    <p>Dependiendo el cliente o sitio la contraseña cambiara de acuerdo a la nomenclatura pero siempre manteniendo los caracteres basicos inciales <b>Syspcbadmin</b> que describen el departamento, la empresa y el grado de contraseña (administrador) seguido de un punto (.) y el numero de cliente en la base de datos, el cual puedes encontrar en la lista de clientes; ejemplo con el cliente numero 1:
                    <span style=\"color: red;\">Syspcbadmin</span><span style=\"color: red;\">.</span><span style=\"color: green;\">100</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- Manual rapido -->
      </div>
    </section>
    <!-- /.content -->
  </div>

  <div class=\"modal fade\" id=\"modal-avisos\">
        <div class=\"modal-dialog modal-lg\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Nuevo aviso</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <img class=\"d-block w-100\" src=\"custom/img/avisos/aviso.jpeg\">
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>

  {% include 'categories/create_category.twig' %}
{% endblock %}

{% block appFooter %}

<!-- DataTables -->
<script src=\"{{ base_url }}assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"{{ base_url }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<!-- Custom -->
<script src=\"{{ base_url() }}custom/js/category.js\"></script>

<!-- Emite avisos -->
{# <script>
\$( document ).ready(function() {
    \$('#modal-avisos').modal({show:true});
});
</script> #}
{% endblock %}
", "dashboard/dashboard.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/dashboard/dashboard.twig");
    }
}
