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

/* Courses/ProgLanguage/CSS/index3.html.twig */
class __TwigTemplate_f6775aaabf3d6682d7eda746e9070562c5550d6c286c9b51ba3ed109007a86ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'width' => [$this, 'block_width'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/CSS/index3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/CSS/index3.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/CSS/index3.html.twig", 1);
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
    public function block_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "width"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "width"));

        echo "40%";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_Bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Bar"));

        // line 5
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse");
        echo "\" class=\"list-group-item list-group-item-action \">CSS syntaxe</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action \">les methodes d'invocation</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">CSS texte</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action active\">CSS coleur et bordeur</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">les selecteurs principaux</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">les selecteurs speciaux</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">les classes</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">CSS div et span</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">les pseudo classes</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 9]);
        echo "\" class=\"list-group-item list-group-item-action \"> les tableaux</a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 10]);
        echo "\" class=\"list-group-item list-group-item-action \"> CSS quiz </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo "CSS attribues";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_NextTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        echo " <h2 class=\"NextTitle\">Les attributs des coleurs</h2>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 20
        echo "                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p>
                                    Color : définit la couleur du texte par exemple en hexadécimal
                                    background-color : définit la couleur de l'arrière-plan
                                    background-image : définit l'image de l'arrière-plan URL de l'image
                                </p>
                            </div>
                        </div>

                        <h2 class=\"NextTitle\">Les attributs des coleurs</h2>
                                <div class=\"card\" style=\"margin-top: 20px \">
                                    <div class=\"card-body\">

                                <p>
                                    Border peut utiliser jusqu’à 3 valeurs pour modifier l’apparence
                                    de la bordure :
                                </p>
                                <ul>
                                    <li> La largeur : en pixels (comme 2px)</li>
                                    <li> La couleur : nom de couleur (black, red,…), soit une valeur
                                        hexadécimale (#FF0000), soit une valeur RGB
                                        (rgb(198, 212, 37)).</li>
                                    <li>Le type de bordure : (none | solid| dotted|double…..)
                                    </li>
                                </ul>
                                <p>
                                    Exemple :
                                    h1 { border: 3px blue dashed; }
                                </p>
                                <p> on peut specifier les quatres cotes</p>
                                <li> border-top : bordure du haut ;</li>
                                <li> border-bottom : bordure du bas ;</li>
                                <li>border-left : bordure de gauche ;</li>
                                <li> border-right : bordure de droite.</li>
                                <p>
                                    Exemple :
                                    p { border-left: 2px solid black;
                                    border-right: 2px solid black; }
                                </p>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 2]);
        echo "\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 4]);
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
        return "Courses/ProgLanguage/CSS/index3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 64,  260 => 63,  256 => 62,  212 => 20,  202 => 19,  183 => 18,  164 => 17,  152 => 15,  148 => 14,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}CSS Course{% endblock %}
{% block width %}40%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('CSSCourse') }}\" class=\"list-group-item list-group-item-action \">CSS syntaxe</a>
    <a href=\"{{ path('CSSCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action \">les methodes d'invocation</a>
    <a href=\"{{ path('CSSCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">CSS texte</a>
    <a href=\"{{ path('CSSCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action active\">CSS coleur et bordeur</a>
    <a href=\"{{ path('CSSCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">les selecteurs principaux</a>
    <a href=\"{{ path('CSSCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les selecteurs speciaux</a>
    <a href=\"{{ path('CSSCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">les classes</a>
    <a href=\"{{ path('CSSCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">CSS div et span</a>
    <a href=\"{{ path('CSSCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">les pseudo classes</a>
    <a href=\"{{ path('CSSCourse',{num : 9 }) }}\" class=\"list-group-item list-group-item-action \"> les tableaux</a>
    <a href=\"{{ path('CSSCourse',{num : 10 }) }}\" class=\"list-group-item list-group-item-action \"> CSS quiz </a>
{% endblock %}
{% block titleParagraphe %}CSS attribues{% endblock %}
{% block NextTitle %} <h2 class=\"NextTitle\">Les attributs des coleurs</h2>{% endblock %}
                    {% block Course %}
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p>
                                    Color : définit la couleur du texte par exemple en hexadécimal
                                    background-color : définit la couleur de l'arrière-plan
                                    background-image : définit l'image de l'arrière-plan URL de l'image
                                </p>
                            </div>
                        </div>

                        <h2 class=\"NextTitle\">Les attributs des coleurs</h2>
                                <div class=\"card\" style=\"margin-top: 20px \">
                                    <div class=\"card-body\">

                                <p>
                                    Border peut utiliser jusqu’à 3 valeurs pour modifier l’apparence
                                    de la bordure :
                                </p>
                                <ul>
                                    <li> La largeur : en pixels (comme 2px)</li>
                                    <li> La couleur : nom de couleur (black, red,…), soit une valeur
                                        hexadécimale (#FF0000), soit une valeur RGB
                                        (rgb(198, 212, 37)).</li>
                                    <li>Le type de bordure : (none | solid| dotted|double…..)
                                    </li>
                                </ul>
                                <p>
                                    Exemple :
                                    h1 { border: 3px blue dashed; }
                                </p>
                                <p> on peut specifier les quatres cotes</p>
                                <li> border-top : bordure du haut ;</li>
                                <li> border-bottom : bordure du bas ;</li>
                                <li>border-left : bordure de gauche ;</li>
                                <li> border-right : bordure de droite.</li>
                                <p>
                                    Exemple :
                                    p { border-left: 2px solid black;
                                    border-right: 2px solid black; }
                                </p>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('CSSCourse',{num : 2 }) }}\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('CSSCourse',{num : 4 }) }}\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    {% endblock %}
", "Courses/ProgLanguage/CSS/index3.html.twig", "C:\\xampp\\htdocs\\projet-web\\templates\\Courses\\ProgLanguage\\CSS\\index3.html.twig");
    }
}
