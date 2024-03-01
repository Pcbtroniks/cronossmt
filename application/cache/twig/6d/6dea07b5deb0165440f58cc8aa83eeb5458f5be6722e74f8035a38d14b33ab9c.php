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

/* categories/create_category.twig */
class __TwigTemplate_fa308211531f4613747c1f8e4198b07ee1a72b187ab5cb71a4e6e0ce6a09f972 extends \Twig\Template
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
        echo "\t<!-- add member -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"createCategoryModal\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"fa fa-user\"></i> &nbsp;Añadir nueva categoría</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "categories/create_category\" id=\"createForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"category\">Categoría</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" placeholder=\"Categoría\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"attributes\">Atributos</label>
            <textarea type=\"text\" class=\"form-control\" name=\"attributes\" id=\"attributes\" rows=\"4\" placeholder=\"Atributos en formato JSON\"></textarea>
\t\t\t\t\t</div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t        <button type=\"submit\" class=\"btn btn-success\">Añadir nueva categoría</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./add member -->";
    }

    public function getTemplateName()
    {
        return "categories/create_category.twig";
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
        return new Source("\t<!-- add member -->
\t<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"createCategoryModal\">
\t  <div class=\"modal-dialog\" role=\"document\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h4 class=\"modal-title\"><i class=\"fa fa-user\"></i> &nbsp;Añadir nueva categoría</h4>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t      </div>
\t      <div class=\"modal-body\">

\t      <form method=\"post\" action=\"{{ base_url() }}categories/create_category\" id=\"createForm\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"category\">Categoría</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"category\" name=\"category\" placeholder=\"Categoría\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"attributes\">Atributos</label>
            <textarea type=\"text\" class=\"form-control\" name=\"attributes\" id=\"attributes\" rows=\"4\" placeholder=\"Atributos en formato JSON\"></textarea>
\t\t\t\t\t</div>

\t      </div><!-- ./ modal-body -->

\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
\t        <button type=\"submit\" class=\"btn btn-success\">Añadir nueva categoría</button>
\t      </div>

\t      </form>

\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->
\t<!-- ./add member -->", "categories/create_category.twig", "C:\\laragon\\www\\cronos\\application\\views\\categories\\create_category.twig");
    }
}
