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
class __TwigTemplate_af39af864c7c9f219524d0c6d55cb9f3172c151ce3f64cdf3028d2936550987c extends Template
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
        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyCourses");
        echo "\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyProjects");
        echo "\">MY PROJECTS</a>
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
            <img class=\"Project-img\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/writesong.jpg"), "html", null, true);
        echo "\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5  class=\"NextTitle\">Write Your First Song </h5>
                    <p>Before you pick up an instrument, you need to ask yourself one question: “why am I writing this song?” As song that lacks purpose is a song that won’t connect with anybody — yourself included. Inspiration can come from anywhere.
                    Here you will be guided from finding inspiration to performing your first song .</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">

                <p><b>Designer:</b> Dali naim</p>
                <p><b>Tools:</b>Guitar  </p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-5 tablet-top\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">HIP HOP Stye Beats</h5>
                <p>In this Project, we’ll discuss how beats are constructed and how to get into beat-making. We’ll break down the essential aspects of a standard beat, listening techniques, exercises to develop your abilities, and various resources to use as you learn.</p>

            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">

                <p><b>Designer:</b> Hamzaoui Med Amine</p>
                <p><b>Tools:</b> DAW: beat making software &amp; Mic</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/Beat-Making.jpg"), "html", null, true);
        echo "\" alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>

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
        return array(  243 => 97,  193 => 50,  179 => 39,  175 => 38,  167 => 33,  156 => 24,  146 => 23,  133 => 19,  127 => 16,  121 => 12,  111 => 11,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <a class=\"nav-link\" href=\"{{ path('MyCourses') }}\">MY COURSES</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"{{ path('MyProjects') }}\">MY PROJECTS</a>
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
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/writesong.jpg')}}\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5  class=\"NextTitle\">Write Your First Song </h5>
                    <p>Before you pick up an instrument, you need to ask yourself one question: “why am I writing this song?” As song that lacks purpose is a song that won’t connect with anybody — yourself included. Inspiration can come from anywhere.
                    Here you will be guided from finding inspiration to performing your first song .</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">

                <p><b>Designer:</b> Dali naim</p>
                <p><b>Tools:</b>Guitar  </p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-5 tablet-top\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">HIP HOP Stye Beats</h5>
                <p>In this Project, we’ll discuss how beats are constructed and how to get into beat-making. We’ll break down the essential aspects of a standard beat, listening techniques, exercises to develop your abilities, and various resources to use as you learn.</p>

            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">

                <p><b>Designer:</b> Hamzaoui Med Amine</p>
                <p><b>Tools:</b> DAW: beat making software &amp; Mic</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/Beat-Making.jpg')}}\" alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>

</div>

{% endblock  %}
", "user/Discover_Projects/DiscoverPM.html.twig", "D:\\projetnewnewnew\\templates\\user\\Discover_Projects\\DiscoverPM.html.twig");
    }
}
