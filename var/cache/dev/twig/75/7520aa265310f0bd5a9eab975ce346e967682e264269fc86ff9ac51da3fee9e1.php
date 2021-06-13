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

/* user/Discover_Projects/DiscoverPL.html.twig */
class __TwigTemplate_55a282343ec3dc6700cbf0498c64848877bf5459e9f233b4e9a3ba26a9c27b08 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Projects/DiscoverPL.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Projects/DiscoverPL.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover_Projects/DiscoverPL.html.twig", 1);
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

    // line 12
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 13
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

    // line 24
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 25
        echo "
<nav aria-label=\"...\" class=\"Categories\">

    <h1 class=\"title\">
        <span>So Do You Want To</span>
        <span> discover some projects ?</span>
    </h1>

    <ul class=\"pagination pagination-lg first\" >
        <li ><a class=\"btn from-right\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Languages");
        echo "\">Courses</a></li>
        <li ><a class=\"btn active\" href=\"\">Projects</a></li>
    </ul>

    <ul class=\"pagination pagination-lg second\" >
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_LP");
        echo "\">Programming Languages</a></li>
        <li class=\"page-item active\" aria-current=\"page\">
            <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \" >Languages</span>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Projects_Music");
        echo "\">Music</a></li>
    </ul>
</nav>


    
<div class=\"container\">
    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/writebook.png"), "html", null, true);
        echo "\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>Write Your First Bestselling  Book </h5>
                <p>You decided to write a book. Maybe you have the perfect idea (so you think, but we’ll get to that), have always wanted to write one, and just aren’t sure where the heck to get started!

                        The process of writing and publishing a book successfully is so much more than just writing and pushing a button to publish on Amazon.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
               
                <p><b>Designer:</b> Hadil Hellali</p>
                <p><b>Tools:</b> Inspiration, Motivation &amp; a Pen</p>
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
                <h5>Write your first Poetry</h5>
                <p>There are no officially sanctioned rules of poetry. However, as with all creative writing, having some degree of structure can help you reign in your ideas and work productively. Here are some guidelines for those looking to take their poetry writing to the next level. Or, if you literally haven’t written a single poem since high school, you can think of this as a beginner's guide that will teach you the basics and have you writing poetry in no time.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                
                <p><b>Designer:</b> Sir Ghorbel Mehdi</p>
                <p><b>Tools:</b> Pen &amp; Paper</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/poetry.jpg"), "html", null, true);
        echo "\"  alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Projects/essay.jpg"), "html", null, true);
        echo "\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>Essay Writng Guide </h5>
                <p>Feel passionately about something and want to share it? Write an essay! Disagree with a popular opinion and wish to convince others to join you? Write an essay! Need to write something because the college you dream of attending is making you? Write an essay! 

                        “Essay” is a loose term for writing that asserts the author’s opinion on a topic, whether academic, editorial, or even humorous. There are a thousand different approaches to essay writing and a million different topics to choose from, but what we’ve found is that good essay writing tends to follow the same framework. 

                </p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
               
                <p><b>Designer:</b> Dali Naim</p>
                <p><b>Tools:</b> Pen &amp; Paper</p>
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
        return "user/Discover_Projects/DiscoverPL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 109,  239 => 99,  189 => 52,  177 => 43,  170 => 39,  162 => 34,  151 => 25,  141 => 24,  122 => 13,  112 => 12,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
        <li ><a class=\"btn from-right\" href=\"{{ path('Discover_Courses_Languages') }}\">Courses</a></li>
        <li ><a class=\"btn active\" href=\"\">Projects</a></li>
    </ul>

    <ul class=\"pagination pagination-lg second\" >
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{path('Discover_LP')}}\">Programming Languages</a></li>
        <li class=\"page-item active\" aria-current=\"page\">
            <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \" >Languages</span>
        </li>
        <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{ path('Discover_Projects_Music') }}\">Music</a></li>
    </ul>
</nav>


    
<div class=\"container\">
    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/writebook.png')}}\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>Write Your First Bestselling  Book </h5>
                <p>You decided to write a book. Maybe you have the perfect idea (so you think, but we’ll get to that), have always wanted to write one, and just aren’t sure where the heck to get started!

                        The process of writing and publishing a book successfully is so much more than just writing and pushing a button to publish on Amazon.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
               
                <p><b>Designer:</b> Hadil Hellali</p>
                <p><b>Tools:</b> Inspiration, Motivation &amp; a Pen</p>
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
                <h5>Write your first Poetry</h5>
                <p>There are no officially sanctioned rules of poetry. However, as with all creative writing, having some degree of structure can help you reign in your ideas and work productively. Here are some guidelines for those looking to take their poetry writing to the next level. Or, if you literally haven’t written a single poem since high school, you can think of this as a beginner's guide that will teach you the basics and have you writing poetry in no time.</p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
                
                <p><b>Designer:</b> Sir Ghorbel Mehdi</p>
                <p><b>Tools:</b> Pen &amp; Paper</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->

        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/poetry.jpg')}}\"  alt=\"project-image\" class=\"rounded\">
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->

    <div class=\"spacer-line-fw border-secondary opc-25 mt-30 mb-30\">&nbsp;</div>

    <div class=\"row list-project\">
        <div class=\"col-md-7\">
            <img class=\"Project-img\" src=\"{{ asset('images/Projects/essay.jpg')}}\" alt=\"project-image\" class=\"rounded tablet-top\">
        </div>
        <!-- / column -->
        <div class=\"col-md-5\">
            <div class=\"project-info-box mt-0\">
                <h5>Essay Writng Guide </h5>
                <p>Feel passionately about something and want to share it? Write an essay! Disagree with a popular opinion and wish to convince others to join you? Write an essay! Need to write something because the college you dream of attending is making you? Write an essay! 

                        “Essay” is a loose term for writing that asserts the author’s opinion on a topic, whether academic, editorial, or even humorous. There are a thousand different approaches to essay writing and a million different topics to choose from, but what we’ve found is that good essay writing tends to follow the same framework. 

                </p>
            </div>
            <!-- / project-info-box -->

            <div class=\"project-info-box mb-10\">
               
                <p><b>Designer:</b> Dali Naim</p>
                <p><b>Tools:</b> Pen &amp; Paper</p>
            </div>
            <!-- / project-info-box -->

            <a href=\"#\" class=\"btn btn-primary d-block\">VIEW PROJECT</a>
        </div>
        <!-- / column -->
    </div>
    <!-- / row list-project -->
</div>
   

{% endblock  %}", "user/Discover_Projects/DiscoverPL.html.twig", "C:\\xampp\\htdocs\\projet-web\\templates\\user\\Discover_Projects\\DiscoverPL.html.twig");
    }
}