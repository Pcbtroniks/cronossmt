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

/* software/software.twig */
class __TwigTemplate_63f03578ded4a97d8fefb7decd1e8586d98135c3e0340eed347ab3068053b2ce extends \Twig\Template
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
        $this->parent = $this->loadTemplate("overall/layout.twig", "software/software.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_appHeader($context, array $blocks = [])
    {
        // line 4
        echo "<!-- DataTables -->
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
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
            <h1>
              Descarga de Software
            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Software</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>


          <div class=\"card card-primary card-outline\">
          <div class=\"card-body\">
            <ul class=\"nav nav-tabs\" id=\"custom-content-below-home-tab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"custom-content-below-home-tab\" data-toggle=\"pill\" href=\"#custom-content-below-home\" role=\"tab\" aria-controls=\"custom-content-below-home\" aria-selected=\"true\">Diseño</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"custom-content-below-profile-tab\" data-toggle=\"pill\" href=\"#custom-content-below-profile\" role=\"tab\" aria-controls=\"custom-content-below-profile\" aria-selected=\"false\">Oficina</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"custom-content-below-messages-tab\" data-toggle=\"pill\" href=\"#custom-content-below-messages\" role=\"tab\" aria-controls=\"custom-content-below-messages\" aria-selected=\"false\">Escencial</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"custom-content-below-settings-tab\" data-toggle=\"pill\" href=\"#custom-content-below-settings\" role=\"tab\" aria-controls=\"custom-content-below-settings\" aria-selected=\"false\">Activadores - ISO</a>
              </li>
            </ul>
            <div class=\"tab-content\" id=\"custom-content-below-tabContent\">
              <div class=\"tab-pane fade active show\" id=\"custom-content-below-home\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-home-tab\">
                <br>

                 <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1RAvBtj8k6J873MN_lkcOxvOPlQJt6WtV/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Illustrator CC 2020
                </a>

                <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1uC2G4Yffp3Zqg7R2_2mY3MLi-zfsAXP4/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Photoshop CC 2020
                </a>

                <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1xQrNmyyU_snZFPjttXNn5c77kV-IxBkx/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Corel Draw 2019
                </a>

              </div>
              <div class=\"tab-pane fade\" id=\"custom-content-below-profile\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-profile-tab\">
                 <br>

                 <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1dNcGi2lFIDChVqq_I2msTJx1TCAVp1mn/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Office 2016 - 32 Bits
                </a>

                <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1Xb4PWRpc3GsFfY0KbBJSgdbEAvKQSiDd/view?usp=sharing\" target=\"_blank\">
                 <i class=\"fab fa-windows\"></i> Office 2016 - 64 Bits
               </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Visio V2019
                </a>

              </div>
              <div class=\"tab-pane fade\" id=\"custom-content-below-messages\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-messages-tab\">
                 <br>

                 <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> TeamViewer V2019
                </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Nitro PDF V2019
                </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> CCleaner V2019
                </a>

              </div>
              <div class=\"tab-pane fade\" id=\"custom-content-below-settings\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-settings-tab\">
                 <br>

                 <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Windows 10
                </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Office 16-19
                </a>

              </div>
            </div>
              <p><b>Contraseña:</b> <code>Syspcbadmin.1300</code></p>
            </div>
          </div>
          <!-- /.card -->
        </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
";
    }

    // line 126
    public function block_appFooter($context, array $blocks = [])
    {
        // line 127
        echo "<!-- DataTables -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<!-- Custom -->
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "custom/js/kits.js\"></script>
<!-- Galeria de software -->
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/ekko-lightbox/ekko-lightbox.min.js\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/plugins/filterizr/jquery.filterizr.min.js\"></script>
<!-- Page specific script -->
<script>
  \$(function () {
    \$(document).on('click', '[data-toggle=\"lightbox\"]', function(event) {
      event.preventDefault();
      \$(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    \$('.filter-container').filterizr({gutterPixels: 3});
    \$('.btn[data-filter]').on('click', function() {
      \$('.btn[data-filter]').removeClass('active');
      \$(this).addClass('active');
    });
  })
</script>
";
    }

    public function getTemplateName()
    {
        return "software/software.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 134,  195 => 133,  190 => 131,  185 => 129,  181 => 128,  178 => 127,  175 => 126,  56 => 9,  53 => 8,  47 => 5,  44 => 4,  41 => 3,  31 => 1,);
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
<link rel=\"stylesheet\" href=\"{{ base_url() }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css\">
{% endblock %}

{% block appBody %}
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1>
              Descarga de Software
            </h1>
          </div>
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\">Inicio</li>
              <li class=\"breadcrumb-item active\">Software</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"container-fluid\">
        <div class=\"messages\"></div>


          <div class=\"card card-primary card-outline\">
          <div class=\"card-body\">
            <ul class=\"nav nav-tabs\" id=\"custom-content-below-home-tab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"custom-content-below-home-tab\" data-toggle=\"pill\" href=\"#custom-content-below-home\" role=\"tab\" aria-controls=\"custom-content-below-home\" aria-selected=\"true\">Diseño</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"custom-content-below-profile-tab\" data-toggle=\"pill\" href=\"#custom-content-below-profile\" role=\"tab\" aria-controls=\"custom-content-below-profile\" aria-selected=\"false\">Oficina</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"custom-content-below-messages-tab\" data-toggle=\"pill\" href=\"#custom-content-below-messages\" role=\"tab\" aria-controls=\"custom-content-below-messages\" aria-selected=\"false\">Escencial</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"custom-content-below-settings-tab\" data-toggle=\"pill\" href=\"#custom-content-below-settings\" role=\"tab\" aria-controls=\"custom-content-below-settings\" aria-selected=\"false\">Activadores - ISO</a>
              </li>
            </ul>
            <div class=\"tab-content\" id=\"custom-content-below-tabContent\">
              <div class=\"tab-pane fade active show\" id=\"custom-content-below-home\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-home-tab\">
                <br>

                 <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1RAvBtj8k6J873MN_lkcOxvOPlQJt6WtV/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Illustrator CC 2020
                </a>

                <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1uC2G4Yffp3Zqg7R2_2mY3MLi-zfsAXP4/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Photoshop CC 2020
                </a>

                <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1xQrNmyyU_snZFPjttXNn5c77kV-IxBkx/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Corel Draw 2019
                </a>

              </div>
              <div class=\"tab-pane fade\" id=\"custom-content-below-profile\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-profile-tab\">
                 <br>

                 <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1dNcGi2lFIDChVqq_I2msTJx1TCAVp1mn/view?usp=sharing\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Office 2016 - 32 Bits
                </a>

                <a class=\"btn btn-app\" href=\"https://drive.google.com/file/d/1Xb4PWRpc3GsFfY0KbBJSgdbEAvKQSiDd/view?usp=sharing\" target=\"_blank\">
                 <i class=\"fab fa-windows\"></i> Office 2016 - 64 Bits
               </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Visio V2019
                </a>

              </div>
              <div class=\"tab-pane fade\" id=\"custom-content-below-messages\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-messages-tab\">
                 <br>

                 <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> TeamViewer V2019
                </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Nitro PDF V2019
                </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> CCleaner V2019
                </a>

              </div>
              <div class=\"tab-pane fade\" id=\"custom-content-below-settings\" role=\"tabpanel\" aria-labelledby=\"custom-content-below-settings-tab\">
                 <br>

                 <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Windows 10
                </a>

                <a class=\"btn btn-app\" href=\"youtube.com\" target=\"_blank\">
                  <i class=\"fab fa-windows\"></i> Office 16-19
                </a>

              </div>
            </div>
              <p><b>Contraseña:</b> <code>Syspcbadmin.1300</code></p>
            </div>
          </div>
          <!-- /.card -->
        </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
{% endblock %}

{% block appFooter %}
<!-- DataTables -->
<script src=\"{{ base_url() }}assets/plugins/datatables/jquery.dataTables.js\"></script>
<script src=\"{{ base_url() }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js\"></script>
<!-- Custom -->
<script src=\"{{ base_url() }}custom/js/kits.js\"></script>
<!-- Galeria de software -->
<script src=\"{{base_url() }}assets/plugins/ekko-lightbox/ekko-lightbox.min.js\"></script>
<script src=\"{{base_url() }}assets/plugins/filterizr/jquery.filterizr.min.js\"></script>
<!-- Page specific script -->
<script>
  \$(function () {
    \$(document).on('click', '[data-toggle=\"lightbox\"]', function(event) {
      event.preventDefault();
      \$(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    \$('.filter-container').filterizr({gutterPixels: 3});
    \$('.btn[data-filter]').on('click', function() {
      \$('.btn[data-filter]').removeClass('active');
      \$(this).addClass('active');
    });
  })
</script>
{% endblock %}
", "software/software.twig", "C:\\laragon\\www\\cronos\\application\\views\\software\\software.twig");
    }
}
