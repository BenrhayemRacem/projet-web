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

/* Courses/ProgLanguage/CSS/index0.html.twig */
class __TwigTemplate_dbf76bd8b2f6776c702cbce73442399fe5011a80d59f0dd54c8f2d824b791e01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'Bar' => [$this, 'block_Bar'],
            'titleParagraphe' => [$this, 'block_titleParagraphe'],
            'NextTitle' => [$this, 'block_NextTitle'],
            'Course' => [$this, 'block_Course'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Courses/Course.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/CSS/index0.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/CSS/index0.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/CSS/index0.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    // line 2
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "CSS Course";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 3
    public function block_Bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        // line 4
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse");
        echo "\" class=\"list-group-item list-group-item-action active\">CSS syntaxe</a>
    <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action\">les methodes d'invocation</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">CSS texte</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">CSS coleur et bordeur</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">les selecteurs principaux</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">les selecteurs speciaux</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">les classes</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">CSS div et span</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">les pseudo classes</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 9]);
        echo "\" class=\"list-group-item list-group-item-action \"> les tableaux</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 10]);
        echo "\" class=\"list-group-item list-group-item-action \"> CSS quiz </a>
";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 16
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo " CSS Syntaxe ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 17
    public function block_NextTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        echo " ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 18
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 19
        echo "                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p> h2 {color: red; text-align: center ;} </p>
                                <p> Les sélecteurs sont des caractères
                                    alphanumériques qui identifient la règle.

                                <ul>
                                    <li> Sélecteur HTML</li>
                                    <li> la classe </li>
                                    <li> l'ID </li>
                                </ul>

                                <p>
                                    text-align: identificateur de propriete <br>
                                    center: valeur <br>
                                    ; : facultatif a la fin
                                </p>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\">    </div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 1]);
        echo "\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    ";

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);


        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    public function getTemplateName()
    {
        return "Courses/ProgLanguage/CSS/index0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  218 => 40,  214 => 39,  192 => 19,  182 => 18,  163 => 17,  144 => 16,  132 => 14,  128 => 13,  124 => 12,  120 => 11,  116 => 10,  112 => 9,  108 => 8,  104 => 7,  100 => 6,  96 => 5,  91 => 4,  81 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}CSS Course{% endblock %}
{% block Bar %}
    <a href=\"{{ path('CSSCourse') }}\" class=\"list-group-item list-group-item-action active\">CSS syntaxe</a>
    <a href=\"{{ path('CSSCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">les methodes d'invocation</a>
    <a href=\"{{ path('CSSCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">CSS texte</a>
    <a href=\"{{ path('CSSCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">CSS coleur et bordeur</a>
    <a href=\"{{ path('CSSCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">les selecteurs principaux</a>
    <a href=\"{{ path('CSSCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les selecteurs speciaux</a>
    <a href=\"{{ path('CSSCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">les classes</a>
    <a href=\"{{ path('CSSCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">CSS div et span</a>
    <a href=\"{{ path('CSSCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">les pseudo classes</a>
    <a href=\"{{ path('CSSCourse',{num : 9 }) }}\" class=\"list-group-item list-group-item-action \"> les tableaux</a>
    <a href=\"{{ path('CSSCourse',{num : 10 }) }}\" class=\"list-group-item list-group-item-action \"> CSS quiz </a>
{% endblock %}
{% block titleParagraphe %} CSS Syntaxe {% endblock %}
{% block NextTitle %} {% endblock %}
                    {% block Course %}
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p> h2 {color: red; text-align: center ;} </p>
                                <p> Les sélecteurs sont des caractères
                                    alphanumériques qui identifient la règle.

                                <ul>
                                    <li> Sélecteur HTML</li>
                                    <li> la classe </li>
                                    <li> l'ID </li>
                                </ul>

                                <p>
                                    text-align: identificateur de propriete <br>
                                    center: valeur <br>
                                    ; : facultatif a la fin
                                </p>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\">    </div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover') }}\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('CSSCourse', {num : 1 }) }}\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    {% endblock %}

", "Courses/ProgLanguage/CSS/index0.html.twig", "D:\\projetnewnewnew\\templates\\Courses\\ProgLanguage\\CSS\\index0.html.twig");
    }
}
