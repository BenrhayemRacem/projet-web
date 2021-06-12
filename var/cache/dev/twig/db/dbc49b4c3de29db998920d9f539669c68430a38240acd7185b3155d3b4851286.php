<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/Discover_Projects/DiscoverPM.html.twig */
class __TwigTemplate_d7b052a4a00040f5fecd03eb002587a25d6fd6f3b833212269be9027e6a27260 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'StyleSheet' => [$this, 'block_StyleSheet'],
            'Activated' => [$this, 'block_Activated'],
            'Body' => [$this, 'block_Body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "User.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Projects/DiscoverPM.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Projects/DiscoverPM.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover_Projects/DiscoverPM.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "Discover with us";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("StyleSheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/User/Discover.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/Projects/projects.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 12
        echo "    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 24
        echo "
<nav aria-label=\"...\" class=\"Categories\">

    <h1 class=\"title\">
        <span>So Do You Want To</span>
        <span> discover some projects ?</span>
    </h1>

    <ul class=\"pagination pagination-lg first\" >
        <li ><a class=\"btn from-right\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Music");
        echo "\">Courses</a></li>
        <li ><a class=\"btn active\" href=\"\">Projects</a></li>
    </ul>

    <ul class=\"pagination pagination-lg second\" >
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_LP");
        echo "\">Programming Languages</a></li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Projects_Languages");
        echo "\" >Languages</a></li>
        <li class=\"page-item active\" aria-current=\"page\">
            <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \"> Music</span>
        </li>
    </ul>
</nav>


   <div class=\"container\">
    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img src=\"https://via.placeholder.com/400x300/FFB6C1/000000\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>FOIL LOGO</h5>
                <p>Suspendisse convallis, magna in blandit dapibus, diam dui ultrices sem, ut egestas neque magna vel erat.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                <p><b>Client:</b> FOIL COM</p>
                <p><b>Date:</b> 10.02.2020</p>
                <p><b>Designer:</b> Brian Hawkins</p>
                <p><b>Tools:</b> Photoshop, Illustrator &amp; Sketch</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-5 tablet-top\">
            <div class=\"project-info-box mt-0\">
                <h5>STATIONERY</h5>
                <p>Suspendisse convallis, magna in blandit dapibus, diam dui ultrices sem, ut egestas neque magna vel erat.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                <p><b>Client:</b> LOGO COMPANY</p>
                <p><b>Date:</b> 13.02.2020</p>
                <p><b>Designer:</b> John Doe</p>
                <p><b>Tools:</b> Photoshop &amp; Illustrator</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img src=\"https://via.placeholder.com/400x300/87CEFA/000000\" alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img src=\"https://via.placeholder.com/400x300/B0C4DE/000000\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>IDEA BULB</h5>
                <p>Suspendisse convallis, magna in blandit dapibus, diam dui ultrices sem, ut egestas neque magna vel erat.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                <p><b>Client:</b> IDEA COMPANY</p>
                <p><b>Date:</b> 07.02.2020</p>
                <p><b>Designer:</b> Jessica Smith</p>
                <p><b>Tools:</b> Photoshop, Illustrator &amp; Sketch</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/Discover_Projects/DiscoverPM.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  169 => 38,  161 => 33,  150 => 24,  140 => 23,  121 => 12,  111 => 11,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig'%}

{% block Title %}Discover with us{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/Discover.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/Projects/projects.css') }}\">
{% endblock %}

{% block Activated %}
    <li class=\"nav-item actived\">
        <a href=\"#\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
    </li>
{% endblock %}

{% block Body %}

<nav aria-label=\"...\" class=\"Categories\">

    <h1 class=\"title\">
        <span>So Do You Want To</span>
        <span> discover some projects ?</span>
    </h1>

    <ul class=\"pagination pagination-lg first\" >
        <li ><a class=\"btn from-right\" href=\"{{ path('Discover_Courses_Music') }}\">Courses</a></li>
        <li ><a class=\"btn active\" href=\"\">Projects</a></li>
    </ul>

    <ul class=\"pagination pagination-lg second\" >
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{ path('Discover_LP') }}\">Programming Languages</a></li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{ path('Discover_Projects_Languages') }}\" >Languages</a></li>
        <li class=\"page-item active\" aria-current=\"page\">
            <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \"> Music</span>
        </li>
    </ul>
</nav>


   <div class=\"container\">
    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img src=\"https://via.placeholder.com/400x300/FFB6C1/000000\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>FOIL LOGO</h5>
                <p>Suspendisse convallis, magna in blandit dapibus, diam dui ultrices sem, ut egestas neque magna vel erat.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                <p><b>Client:</b> FOIL COM</p>
                <p><b>Date:</b> 10.02.2020</p>
                <p><b>Designer:</b> Brian Hawkins</p>
                <p><b>Tools:</b> Photoshop, Illustrator &amp; Sketch</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-5 tablet-top\">
            <div class=\"project-info-box mt-0\">
                <h5>STATIONERY</h5>
                <p>Suspendisse convallis, magna in blandit dapibus, diam dui ultrices sem, ut egestas neque magna vel erat.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                <p><b>Client:</b> LOGO COMPANY</p>
                <p><b>Date:</b> 13.02.2020</p>
                <p><b>Designer:</b> John Doe</p>
                <p><b>Tools:</b> Photoshop &amp; Illustrator</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img src=\"https://via.placeholder.com/400x300/87CEFA/000000\" alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img src=\"https://via.placeholder.com/400x300/B0C4DE/000000\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>IDEA BULB</h5>
                <p>Suspendisse convallis, magna in blandit dapibus, diam dui ultrices sem, ut egestas neque magna vel erat.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                <p><b>Client:</b> IDEA COMPANY</p>
                <p><b>Date:</b> 07.02.2020</p>
                <p><b>Designer:</b> Jessica Smith</p>
                <p><b>Tools:</b> Photoshop, Illustrator &amp; Sketch</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->
</div>

{% endblock  %}
", "user/Discover_Projects/DiscoverPM.html.twig", "C:\\xampp\\htdocs\\projet-web\\templates\\user\\Discover_Projects\\DiscoverPM.html.twig");
    }
}
