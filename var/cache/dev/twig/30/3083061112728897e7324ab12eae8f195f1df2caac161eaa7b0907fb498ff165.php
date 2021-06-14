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

/* user/Discover_Projects/DiscoverPLP.html.twig */
class __TwigTemplate_a2b347b213e9acfa6c1535d6b1806ea2d4e590a26bc5ead87bc911e720855553 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Projects/DiscoverPLP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Projects/DiscoverPLP.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover_Projects/DiscoverPLP.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Courses</a></li>
        <li ><a class=\"btn active\" href=\"\">Projects</a></li>
    </ul>
    <ul class=\"pagination pagination-lg second\" >
        <li class=\"page-item active\" aria-current=\"page\">
            <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \">Programming Languages</span>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Projects_Languages");
        echo "\">Languages</a></li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \"  href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Projects_Music");
        echo "\">Music</a></li>
    </ul>
</nav>

   <div class=\"container\">
    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/MLwebAPP.jpg"), "html", null, true);
        echo "\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">Machine Learning Web APP</h5>
                <p>Build interactive web applications with Train Logistic Regression, Random Forest, and Support Vector Classifiers using scikit-learnPlot
                    evaluation metrics for binary classification algorithms</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
               
                <p><b>Designer:</b> Si Racem Ben Rhayem</p>
                <p><b>Tools:</b> Python tensorFlow &amp; scikit-learn</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ProjectView", ["num" => 0, "ProjectName" => "Machine Learning Web APP", "Field" => "Programming languages"]), "html", null, true);
        echo "\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-5 tablet-top\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">Create PING-PONG Game</h5>
                <p>By the end of this project, you will be able to create The Classic Ping Pong game using Python and Turtle graphics. You’ll also be able to identify and use most of Turtle’s modules and functions that helps you develop and build your own game. Moreover, you’ll be able to edit and manipulate the objects created by Turtle however you like.
                </p> 
                       </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                
                <p><b>Designer:</b> Mehdi Ghorbel</p>
                <p><b>Tools:</b> Python &amp; Turtle graphics </p>
            </div>
            <!-- / project-info-box -->

            <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ProjectView", ["num" => 1, "ProjectName" => "Create PING-PONG Game", "Field" => "Programming languages"]), "html", null, true);
        echo "\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/ping pong.jpg"), "html", null, true);
        echo "\" alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/chatBot.png"), "html", null, true);
        echo "\"alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">Build Your first Chatbot </h5>
                <p>Plan a custom development strategy for a chatbot with a specific goal in mind

                    Develop rule-based transactional responses for the most common inputs

                    Build a fully functional, intelligently responding chatbot that is trained for a specific task or for entertainment.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                
                <p><b>Designer:</b> Hadil Helali</p>
                <p><b>Tools:</b>Natural Language Processing Technologies &amp; Tensoflow</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn-grad\">VIEW PROJECT</a>
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
        return "user/Discover_Projects/DiscoverPLP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  260 => 105,  247 => 95,  239 => 90,  212 => 66,  191 => 48,  181 => 41,  177 => 40,  167 => 33,  156 => 24,  146 => 23,  133 => 19,  127 => 16,  121 => 12,  111 => 11,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <li ><a class=\"btn from-right\" href=\"{{ path('Discover') }}\">Courses</a></li>
        <li ><a class=\"btn active\" href=\"\">Projects</a></li>
    </ul>
    <ul class=\"pagination pagination-lg second\" >
        <li class=\"page-item active\" aria-current=\"page\">
            <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \">Programming Languages</span>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{ path('Discover_Projects_Languages') }}\">Languages</a></li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \"  href=\"{{ path('Discover_Projects_Music') }}\">Music</a></li>
    </ul>
</nav>

   <div class=\"container\">
    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/MLwebAPP.jpg')}}\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">Machine Learning Web APP</h5>
                <p>Build interactive web applications with Train Logistic Regression, Random Forest, and Support Vector Classifiers using scikit-learnPlot
                    evaluation metrics for binary classification algorithms</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
               
                <p><b>Designer:</b> Si Racem Ben Rhayem</p>
                <p><b>Tools:</b> Python tensorFlow &amp; scikit-learn</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"{{ path('ProjectView' , {'num':0 , 'ProjectName':'Machine Learning Web APP' ,'Field':'Programming languages' }) }}\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-5 tablet-top\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">Create PING-PONG Game</h5>
                <p>By the end of this project, you will be able to create The Classic Ping Pong game using Python and Turtle graphics. You’ll also be able to identify and use most of Turtle’s modules and functions that helps you develop and build your own game. Moreover, you’ll be able to edit and manipulate the objects created by Turtle however you like.
                </p> 
                       </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                
                <p><b>Designer:</b> Mehdi Ghorbel</p>
                <p><b>Tools:</b> Python &amp; Turtle graphics </p>
            </div>
            <!-- / project-info-box -->

            <a href=\"{{ path('ProjectView' , {'num':1 , 'ProjectName':'Create PING-PONG Game','Field':'Programming languages'}) }}\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/ping pong.jpg')}}\" alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/chatBot.png')}}\"alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5 class=\"NextTitle\">Build Your first Chatbot </h5>
                <p>Plan a custom development strategy for a chatbot with a specific goal in mind

                    Develop rule-based transactional responses for the most common inputs

                    Build a fully functional, intelligently responding chatbot that is trained for a specific task or for entertainment.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                
                <p><b>Designer:</b> Hadil Helali</p>
                <p><b>Tools:</b>Natural Language Processing Technologies &amp; Tensoflow</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn-grad\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->
</div>

{% endblock  %}", "user/Discover_Projects/DiscoverPLP.html.twig", "D:\\newalkheeeer\\projet-web\\templates\\user\\Discover_Projects\\DiscoverPLP.html.twig");
    }
}
