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

/* ProgLanguage/HTML/index0.html.twig */
class __TwigTemplate_b1ca37cacc7ba5e247a266968b3fb8ab9b3afce30c07206c746de046422fce11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProgLanguage/HTML/index0.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProgLanguage/HTML/index0.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "ProgLanguage/HTML/index0.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 4
        echo "    ";
        $this->displayParentBlock("StyleSheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/Courses/Course.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 9
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

    // line 20
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 21
        echo "    <div class=\"container\">
        <div class=\"progress\" style=\"margin: auto\">
            <div class=\"progress-bar bg-info progress-bar-striped progress-bar-animated \" role=\"progressbar\" style=\" width: 10%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>
    <div class=\"container \">
        <div class=\"row  justify-content-between\">
            <div class=\"col-3 List \" style=\" margin: 20px ;\">
                <div class=\"list-group\">
                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse");
        echo "\" class=\"list-group-item list-group-item-action active \">HTML History</a>
                    <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action\">HTML balises</a>
                    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML tableaux</a>

                    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML input</a>
                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML types input</a>
                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML organisation</a>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML media</a>
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML quiz</a>
                </div>
            </div>

            <div class=\"col-8  \">
                <div class=\"jumbotron\" >
                    <div class=\"row gradient-underline\"><h5 class=\"titleParagraphe\">HTML History</h5></div>
                    <h2 class=\"NextTitle\">Evolution</h2>
                    <div class=\"card\" style=\"margin-top: 20px \">
                        <div class=\"card-body\">
                    <p> 1991:HTML1</p>
                    <p> A partir de 1995, tout s’accélère,création de:
                    <ul>
                        <li> Javascript</li>
                        <li> HTML 2.0</li>
                        <li> Internet explorer, 1ère version </li>
                    </ul>
                    <ul>
                        <li> 1996:CSS1</li>
                        <li> 1997:HTML4</li>
                        <li> 1998:CSS2</li>
                        <li> 2000:XHTML1</li>
                        <li> 2008:HTML5</li>
                    </ul>
                            <div class=\"container justify-items-end row\">
                                <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                                <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 1]);
        echo "\">Next ></a></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ProgLanguage/HTML/index0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 64,  194 => 63,  166 => 38,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  145 => 32,  141 => 31,  137 => 30,  126 => 21,  116 => 20,  97 => 9,  87 => 8,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig' %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/Courses/Course.css') }}\">
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
    <div class=\"container\">
        <div class=\"progress\" style=\"margin: auto\">
            <div class=\"progress-bar bg-info progress-bar-striped progress-bar-animated \" role=\"progressbar\" style=\" width: 10%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
        </div>
    </div>
    <div class=\"container \">
        <div class=\"row  justify-content-between\">
            <div class=\"col-3 List \" style=\" margin: 20px ;\">
                <div class=\"list-group\">
                    <a href=\"{{ path('HTMLCourse') }}\" class=\"list-group-item list-group-item-action active \">HTML History</a>
                    <a href=\"{{ path('HTMLCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">HTML balises</a>
                    <a href=\"{{ path('HTMLCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">HTML tableaux</a>

                    <a href=\"{{ path('HTMLCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">HTML input</a>
                    <a href=\"{{ path('HTMLCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">HTML types input</a>
                    <a href=\"{{ path('HTMLCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">HTML organisation</a>
                    <a href=\"{{ path('HTMLCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">HTML media</a>
                    <a href=\"{{ path('HTMLCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">HTML quiz</a>
                </div>
            </div>

            <div class=\"col-8  \">
                <div class=\"jumbotron\" >
                    <div class=\"row gradient-underline\"><h5 class=\"titleParagraphe\">HTML History</h5></div>
                    <h2 class=\"NextTitle\">Evolution</h2>
                    <div class=\"card\" style=\"margin-top: 20px \">
                        <div class=\"card-body\">
                    <p> 1991:HTML1</p>
                    <p> A partir de 1995, tout s’accélère,création de:
                    <ul>
                        <li> Javascript</li>
                        <li> HTML 2.0</li>
                        <li> Internet explorer, 1ère version </li>
                    </ul>
                    <ul>
                        <li> 1996:CSS1</li>
                        <li> 1997:HTML4</li>
                        <li> 1998:CSS2</li>
                        <li> 2000:XHTML1</li>
                        <li> 2008:HTML5</li>
                    </ul>
                            <div class=\"container justify-items-end row\">
                                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover') }}\">Home</a></div>
                                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('HTMLCourse', {num : 1 }) }}\">Next ></a></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}


", "ProgLanguage/HTML/index0.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\Web Project\\WebProject\\templates\\ProgLanguage\\HTML\\index0.html.twig");
    }
}
