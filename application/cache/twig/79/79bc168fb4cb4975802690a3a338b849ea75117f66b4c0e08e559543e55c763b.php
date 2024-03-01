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

/* login/login.twig */
class __TwigTemplate_f66e7d4e920bf769c862d685446bc4a08edb622320a313215bde421b0bbde875 extends \Twig\Template
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
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- icheck bootstrap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/adminlte.min.css\">
\t\t<!-- CSS custom -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/css/login.css\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t<!-- favicon -->
\t\t<link
\t\trel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/img/favicon.png\"/>
\t\t<!-- JQuery Confirm -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-confirm/jquery-confirm.min.css\">
\t</head>
\t<body class=\"hold-transition login-page\">

\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<img src=\"./custom/img/pcb_troniks_lg.png\" class=\"img-responsive mobil-vertical\" style=\"padding: 30px 100px 0px 100px\">
\t\t\t</div>

\t\t\t<!-- /.login-logo -->
\t\t\t<div class=\"card card-wb\">
\t\t\t\t<div class=\"card-body login-card-body\">
\t\t\t\t\t<p class=\"login-box-msg\">Ingrese a su cuenta</p>

\t\t\t\t\t";
        // line 47
        echo form_open("ajax_attempt_login", "class=\"std-form\"");
        echo "
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"login_string\" placeholder=\"Correo electrónico\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-envelope\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"login_pass\" placeholder=\"Contraseña\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-lock\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"max_allowed_attempts\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["max_allowed_attempts"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<input type=\"hidden\" id=\"mins_on_hold\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["seconds_on_hold"] ?? null), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Iniciar sesión</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 69
        echo form_close();
        echo "

\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t<a href=\"forgot-password.html\">¿Ólvido su contraseña?</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<!-- /.login-card-body -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /.login-box -->

\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery/jquery.min.js\"></script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- JQuey Confirm -->
\t\t<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/adminlte.min.js\"></script>
\t\t<!-- GLOBAL URL -->
\t\t<script>
\t\t\tconst BASE_URL = '";
        // line 90
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "';
\t\t</script>
\t\t<!-- Login -->
\t\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/login.js\"></script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 93,  163 => 90,  157 => 87,  152 => 85,  147 => 83,  142 => 81,  127 => 69,  121 => 66,  117 => 65,  96 => 47,  79 => 33,  74 => 31,  65 => 25,  59 => 22,  53 => 19,  44 => 13,  30 => 1,);
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
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/fontawesome-free/css/all.min.css\">
\t\t<!-- Ionicons -->
\t\t<link
\t\trel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
\t\t<!-- icheck bootstrap -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css\">
\t\t<!-- Theme style -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}assets/css/adminlte.min.css\">
\t\t<!-- CSS custom -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ base_url() }}custom/css/login.css\">
\t\t<!-- Google Font: Source Sans Pro -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
\t\t<!-- favicon -->
\t\t<link
\t\trel=\"shortcut icon\" type=\"image/png\" href=\"{{ base_url() }}custom/img/favicon.png\"/>
\t\t<!-- JQuery Confirm -->
\t\t<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/jquery-confirm/jquery-confirm.min.css\">
\t</head>
\t<body class=\"hold-transition login-page\">

\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<img src=\"./custom/img/pcb_troniks_lg.png\" class=\"img-responsive mobil-vertical\" style=\"padding: 30px 100px 0px 100px\">
\t\t\t</div>

\t\t\t<!-- /.login-logo -->
\t\t\t<div class=\"card card-wb\">
\t\t\t\t<div class=\"card-body login-card-body\">
\t\t\t\t\t<p class=\"login-box-msg\">Ingrese a su cuenta</p>

\t\t\t\t\t{{ form_open('ajax_attempt_login', 'class=\"std-form\"') }}
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"login_string\" placeholder=\"Correo electrónico\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-envelope\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"login_pass\" placeholder=\"Contraseña\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<div class=\"input-group-text\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-lock\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"hidden\" id=\"max_allowed_attempts\" value=\"{{ max_allowed_attempts }}\"/>
\t\t\t\t\t\t<input type=\"hidden\" id=\"mins_on_hold\" value=\"{{ seconds_on_hold }}\"/>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">Iniciar sesión</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_close() }}

\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t<a href=\"forgot-password.html\">¿Ólvido su contraseña?</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<!-- /.login-card-body -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /.login-box -->

\t\t<!-- jQuery -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery/jquery.min.js\"></script>
\t\t<!-- Bootstrap 4 -->
\t\t<script src=\"{{ base_url() }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- JQuey Confirm -->
\t\t<script src=\"{{ base_url() }}assets/plugins/jquery-confirm/jquery-confirm.min.js\"></script>
\t\t<!-- AdminLTE App -->
\t\t<script src=\"{{ base_url() }}assets/js/adminlte.min.js\"></script>
\t\t<!-- GLOBAL URL -->
\t\t<script>
\t\t\tconst BASE_URL = '{{ base_url() }}';
\t\t</script>
\t\t<!-- Login -->
\t\t<script src=\"{{ base_url() }}custom/js/login.js\"></script>
\t</body>
</html>
", "login/login.twig", "C:\\laragon\\www\\cronos\\application\\views\\login\\login.twig");
    }
}
