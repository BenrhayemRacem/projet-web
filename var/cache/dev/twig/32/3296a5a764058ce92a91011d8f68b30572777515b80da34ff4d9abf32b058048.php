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

/* user/Discover_Courses/Discover.html.twig */
class __TwigTemplate_decc66aaf6349e981967fe66d2adbfface457d84e5072b7482da2bcd135e1c9e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Courses/Discover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Discover_Courses/Discover.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Discover_Courses/Discover.html.twig", 1);
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 11
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

    // line 22
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 23
        echo "
    <nav aria-label=\"...\" class=\"Categories\">

        <h1 class=\"title\">
            <span>So which course  </span>
            <span> do you want to take ?</span>
        </h1>

        <ul class=\"pagination pagination-lg first\" >
            <li ><a class=\"btn active\" href=\"\">Courses</a></li>
            <li ><a class=\"btn from-right\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_LP");
        echo "\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \">Programming Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Languages");
        echo "\">Languages</a></li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \"  href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover_Courses_Music");
        echo "\">Music</a></li>
        </ul>
    </nav>


<section id=\"Courses\">
    <div class=\"container\" >
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Courses"]) || array_key_exists("Courses", $context) ? $context["Courses"] : (function () { throw new RuntimeError('Variable "Courses" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Course"]) {
            // line 48
            echo "            <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
                <div class=\"card-body\">
                    <div class=\"row gradient-underline\"><h5 class=\"card-title\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</h5></div>
                    <h6 class=\"card-subtitle mb-2 text-muted description\"> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Course"], "summary", [], "any", false, false, false, 51), "html", null, true);
            echo "</h6>
                    <p class=\"card-text\"> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Course"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo " </p>
                    <div class=\"row buttons\">
                        <div class=\"col\" ><a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 54) . "Course"));
            echo "\" class=\"btn-grad \">START NOW!</a></div>
                        ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 55) == "HTML")) {
                // line 56
                echo "                            <div class=\"col\" ><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 56) . "Course"), ["num" => 7]);
                echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 57
$context["Course"], "name", [], "any", false, false, false, 57) == "CSS")) {
                // line 58
                echo "                            <div class=\"col\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 58) . "Course"), ["num" => 10]);
                echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 59
$context["Course"], "name", [], "any", false, false, false, 59) == "JAVASCRIPT")) {
                // line 60
                echo "                            <div class=\"col\" ><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 60) . "Course"), ["num" => 11]);
                echo "\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                        ";
            } else {
                // line 62
                echo "                            <div class=\"col\" ><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((twig_get_attribute($this->env, $this->source, $context["Course"], "name", [], "any", false, false, false, 62) . "Course"));
                echo "\" class=\"btn-grad modified\">GO TO QUIZZ </a></div>
                        ";
            }
            // line 64
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/Discover_Courses/Discover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 68,  234 => 64,  228 => 62,  222 => 60,  220 => 59,  215 => 58,  213 => 57,  208 => 56,  206 => 55,  202 => 54,  197 => 52,  193 => 51,  189 => 50,  185 => 48,  181 => 47,  171 => 40,  167 => 39,  158 => 33,  146 => 23,  136 => 22,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig'%}

{% block Title %}Discover with us{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/Discover.css') }}\">
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
            <span>So which course  </span>
            <span> do you want to take ?</span>
        </h1>

        <ul class=\"pagination pagination-lg first\" >
            <li ><a class=\"btn active\" href=\"\">Courses</a></li>
            <li ><a class=\"btn from-right\" href=\"{{ path('Discover_LP') }}\">Projects</a></li>
        </ul>
        <ul class=\"pagination pagination-lg second\" >
            <li class=\"page-item active\" aria-current=\"page\">
                <span class=\"page-link\" style=\"background-color: rgb(134, 206, 211)  ;  border-color: rgb(134, 206, 211) \">Programming Languages</span>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \" href=\"{{ path('Discover_Courses_Languages') }}\">Languages</a></li>
            <li class=\"page-item\"><a class=\"page-link\" style=\"color: rgb(134, 206, 211) \"  href=\"{{ path('Discover_Courses_Music') }}\">Music</a></li>
        </ul>
    </nav>


<section id=\"Courses\">
    <div class=\"container\" >
        {% for Course in Courses %}
            <div class=\"card\" style=\"width: 40rem; height :35rem; display: inline-table ; align-content: center\">
                <div class=\"card-body\">
                    <div class=\"row gradient-underline\"><h5 class=\"card-title\">{{ Course.name }}</h5></div>
                    <h6 class=\"card-subtitle mb-2 text-muted description\"> {{ Course.summary }}</h6>
                    <p class=\"card-text\"> {{ Course.description }} </p>
                    <div class=\"row buttons\">
                        <div class=\"col\" ><a href=\"{{ path(Course.name ~'Course') }}\" class=\"btn-grad \">START NOW!</a></div>
                        {% if Course.name == 'HTML' %}
                            <div class=\"col\" ><a href=\"{{ path(Course.name ~'Course',{num : 7 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                        {% elseif Course.name == 'CSS' %}
                            <div class=\"col\"><a href=\"{{ path(Course.name ~'Course',{num : 10 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                        {% elseif Course.name == 'JAVASCRIPT' %}
                            <div class=\"col\" ><a href=\"{{ path(Course.name ~'Course',{num : 11 }) }}\" class=\"btn-grad \">GO TO QUIZZ </a></div>
                        {% else %}
                            <div class=\"col\" ><a href=\"{{ path(Course.name ~'Course') }}\" class=\"btn-grad modified\">GO TO QUIZZ </a></div>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}

", "user/Discover_Courses/Discover.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\Web Project\\WebProject\\templates\\user\\Discover_Courses\\Discover.html.twig");
    }
}
