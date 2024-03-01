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

/* servicedesk/servicedesk.twig */
class __TwigTemplate_0ef28f885a061b2f1f5213be3689960231c9699c4a331704d143401fff8a59d2 extends \Twig\Template
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
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>CRONOS | PCBTRONIKS</title>
\t\t<!-- Tell the browser to be responsive to screen width -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- Font Awesome -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/fontawesome-free/css/all.min.css\">
    <!-- select2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/css/select2.min.css\">
    <!-- Google ReCaptcha -->
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t<!-- favicon -->
\t\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/img/favicon.png\"/>
\t\t<!-- JQuery Confirm -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-confirm/jquery-confirm.min.css\">
\t\t<!-- custom -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/css/custom.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-dark navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "servicedesk\" class=\"brand-link\">
\t\t\t\t\t<img src=\"";
        // line 52
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/img/pcbtroniks_logo_cronos.png\" alt=\"pcbtroniks Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .9\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\" style=\"color:#c0c5ce;\">CRONOS |</span>
\t\t\t\t\t<span style=\"color: #5AB131; font-size: 16px;\">PCBTRONIKS</span>
\t\t\t\t</a>
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <div class=\"container-fluid\">
            <div class=\"row mb-2\">
              <div class=\"col-sm-6\">
                <h1>Informar de un problema&nbsp;</h1>
              </div>
              <div class=\"col-sm-6\">
                <ol class=\"breadcrumb float-sm-right\">
                  <li class=\"breadcrumb-item\">Inicio</li>
                  <li class=\"breadcrumb-item active\">Mesa de ayuda</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"container-fluid\">

            <div class=\"messages\">
            </div>
          
            <form method=\"post\" action=\"";
        // line 84
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "mesa-ayuda/add\" id=\"addTicketForm\">
              
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <label>Cliente</label>
                    <select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible input-customer_id\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
                      <option value=\"\" selected hidden>Seleccione un cliente</option>
                    </select>
                    <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
                  </div>
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <label>Quien solicita la asistencia</label>
                    <input type=\"text\" class=\"form-control input-request_of\" id=\"request_of\" name=\"request_of\" placeholder=\"Nombre de Pila\">
                  </div>
                </div>

                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <label>Quien recibirá la asistencia</label>
                    <input type=\"text\" class=\"form-control input-end_user\" id=\"end_user\" name=\"end_user\" placeholder=\"Nombre de Pila\">
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label>Mensaje del cliente</label>
                <textarea type=\"text\" class=\"form-control input-msj_customer\" name=\"msj_customer\" rows=\"4\" placeholder=\"\"></textarea>
                <small class=\"form-text text-muted\">Incidente que reporta el solicitante</small>
              </div>

              <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-callback=\"recaptchaCallback\" data-sitekey=\"6LeWm90ZAAAAAJ3ccT0AmQg7Ngtw720k40fi1Vh9\">
                </div>
              </div>

            </form>

            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-success btn-lg disabled\" id=\"buttonAdd\" onclick=\"detener()\">Enviar ticket</button>
            </div>

          </div>
        </section>
        <!-- /.content -->
      </div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"";
        // line 139
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "helpdesk\" class=\"disabled\">Click aqui para ponerse en contacto con un administrador</a>.</strong>
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t0.9.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery/jquery.min.js\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button);
\t\t</script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- JQuey Confirm -->
\t\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
\t\t<!-- custom -->
\t\t<script>
\t\t\tconst BASE_URL = '";
        // line 168
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "';
\t\t</script>
    <!-- select2 -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/select2.min.js\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/select2/js/i18n/es.js\"></script>
    <!-- moment -->
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/moment.min.js\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/moment/locale/es.js\"></script>
    <!-- Tickets -->
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/servicedesk.js\"></script>
\t\t<!-- Summernote -->
\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/summernote/summernote-bs4.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/adminlte.js\"></script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "servicedesk/servicedesk.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 183,  278 => 181,  273 => 179,  268 => 177,  263 => 175,  259 => 174,  254 => 172,  250 => 171,  244 => 168,  238 => 165,  233 => 163,  224 => 157,  219 => 155,  200 => 139,  142 => 84,  107 => 52,  103 => 51,  76 => 27,  71 => 25,  66 => 23,  59 => 19,  54 => 17,  47 => 13,  42 => 11,  30 => 1,);
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
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>CRONOS | PCBTRONIKS</title>
\t\t<!-- Tell the browser to be responsive to screen width -->
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<!-- Font Awesome -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/fontawesome-free/css/all.min.css\">
    <!-- select2 -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/select2/css/select2.min.css\">
    <!-- Google ReCaptcha -->
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>
\t\t<!-- Theme style -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/css/adminlte.min.css\">
\t\t<!-- overlayScrollbars -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t<!-- favicon -->
\t\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ base_url() }}custom/img/favicon.png\"/>
\t\t<!-- JQuery Confirm -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/jquery-confirm/jquery-confirm.min.css\">
\t\t<!-- custom -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}custom/css/custom.css\">
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t<div
\t\t\tclass=\"wrapper\">

\t\t\t<!-- Navbar -->
\t\t\t<nav
\t\t\t\tclass=\"main-header navbar navbar-expand navbar-dark navbar-light\">
\t\t\t\t<!-- Left navbar links -->
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- /.navbar -->

\t\t\t<!-- Main Sidebar Container -->
\t\t\t<aside
\t\t\t\tclass=\"main-sidebar sidebar-dark-primary elevation-4\">
\t\t\t\t<!-- Brand Logo -->
\t\t\t\t<a href=\"{{ base_url() }}servicedesk\" class=\"brand-link\">
\t\t\t\t\t<img src=\"{{ base_url() }}assets/img/pcbtroniks_logo_cronos.png\" alt=\"pcbtroniks Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .9\">
\t\t\t\t\t<span class=\"brand-text font-weight-light\" style=\"color:#c0c5ce;\">CRONOS |</span>
\t\t\t\t\t<span style=\"color: #5AB131; font-size: 16px;\">PCBTRONIKS</span>
\t\t\t\t</a>
\t\t\t</aside>

\t\t\t<!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <div class=\"container-fluid\">
            <div class=\"row mb-2\">
              <div class=\"col-sm-6\">
                <h1>Informar de un problema&nbsp;</h1>
              </div>
              <div class=\"col-sm-6\">
                <ol class=\"breadcrumb float-sm-right\">
                  <li class=\"breadcrumb-item\">Inicio</li>
                  <li class=\"breadcrumb-item active\">Mesa de ayuda</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"container-fluid\">

            <div class=\"messages\">
            </div>
          
            <form method=\"post\" action=\"{{ base_url() }}mesa-ayuda/add\" id=\"addTicketForm\">
              
              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <label>Cliente</label>
                    <select id=\"customer_id\" name=\"customer_id\" class=\"form-control select2 select2-hidden-accessible input-customer_id\" style=\"width: 100%;\" tabindex=\"-1\" aria-hidden=\"true\" min=\"1\">
                      <option value=\"\" selected hidden>Seleccione un cliente</option>
                    </select>
                    <small class=\"form-text text-muted\">Nombre comercial del cliente</small>
                  </div>
                </div>
              </div>

              <div class=\"row\">
                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <label>Quien solicita la asistencia</label>
                    <input type=\"text\" class=\"form-control input-request_of\" id=\"request_of\" name=\"request_of\" placeholder=\"Nombre de Pila\">
                  </div>
                </div>

                <div class=\"col-sm-6\">
                  <div class=\"form-group\">
                    <label>Quien recibirá la asistencia</label>
                    <input type=\"text\" class=\"form-control input-end_user\" id=\"end_user\" name=\"end_user\" placeholder=\"Nombre de Pila\">
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label>Mensaje del cliente</label>
                <textarea type=\"text\" class=\"form-control input-msj_customer\" name=\"msj_customer\" rows=\"4\" placeholder=\"\"></textarea>
                <small class=\"form-text text-muted\">Incidente que reporta el solicitante</small>
              </div>

              <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-callback=\"recaptchaCallback\" data-sitekey=\"6LeWm90ZAAAAAJ3ccT0AmQg7Ngtw720k40fi1Vh9\">
                </div>
              </div>

            </form>

            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-success btn-lg disabled\" id=\"buttonAdd\" onclick=\"detener()\">Enviar ticket</button>
            </div>

          </div>
        </section>
        <!-- /.content -->
      </div>
\t\t\t<!-- /.content-wrapper -->

\t\t\t<footer class=\"main-footer\">
\t\t\t\t<strong>
\t\t\t\t\t<a href=\"{{ base_url() }}helpdesk\" class=\"disabled\">Click aqui para ponerse en contacto con un administrador</a>.</strong>
\t\t\t\t<div class=\"float-right d-none d-sm-inline-block\">
\t\t\t\t\t<b>Version</b>
\t\t\t\t\t0.9.0
\t\t\t\t</div>
\t\t\t</footer>

\t\t\t<!-- Control Sidebar -->
\t\t\t<aside
\t\t\t\tclass=\"control-sidebar control-sidebar-dark\"><!-- Control sidebar content goes here -->
\t\t\t</aside>
\t\t\t<!-- /.control-sidebar -->
\t\t</div>
\t\t<!-- ./wrapper -->

\t\t<!-- jQuery -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery/jquery.min.js\"></script>
\t\t<!-- jQuery UI 1.11.4 -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery-ui/jquery-ui.min.js\"></script>
\t\t<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
\t\t<script>
\t\t\t\$.widget.bridge('uibutton', \$.ui.button);
\t\t</script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"{{ base_url() }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- JQuey Confirm -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
\t\t<!-- custom -->
\t\t<script>
\t\t\tconst BASE_URL = '{{ base_url() }}';
\t\t</script>
    <!-- select2 -->
    <script src=\"{{ base_url() }}assets/plugins/select2/js/select2.min.js\"></script>
    <script src=\"{{ base_url() }}assets/plugins/select2/js/i18n/es.js\"></script>
    <!-- moment -->
    <script src=\"{{ base_url() }}assets/plugins/moment/moment.min.js\"></script>
    <script src=\"{{ base_url() }}assets/plugins/moment/locale/es.js\"></script>
    <!-- Tickets -->
    <script src=\"{{ base_url() }}custom/js/servicedesk.js\"></script>
\t\t<!-- Summernote -->
\t\t<script src=\"{{ base_url() }}assets/plugins/summernote/summernote-bs4.min.js\"></script>
\t\t<!-- overlayScrollbars -->
\t\t<script src=\"{{ base_url() }}assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"{{ base_url() }}assets/js/adminlte.js\"></script>
\t</body>
</html>
", "servicedesk/servicedesk.twig", "/home3/pcbtroni/cronos.pcbtroniks.com/application/views/servicedesk/servicedesk.twig");
    }
}
