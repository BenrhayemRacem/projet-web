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

/* Courses/ProgLanguage/JS/index2.html.twig */
class __TwigTemplate_b76ed1010a61f95c9c5af5fcdfaa39775f705d307bd510b25d16e0e38e0dfee0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/JS/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/JS/index2.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/JS/index2.html.twig", 1);
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

        echo "JS Course";
        
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

        echo "27%";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse");
        echo "\" class=\"list-group-item list-group-item-action \">JS History</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action \">introduction </a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action active\">Les identifiants</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">Dates et Times</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">Les chaines</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">Les booleens</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Les variables</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">les tableaux</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">Les objets</a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 9]);
        echo "\" class=\"list-group-item list-group-item-action \">Les fonctions</a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 10]);
        echo "\" class=\"list-group-item list-group-item-action \">Le DOM</a>
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 11]);
        echo "\" class=\"list-group-item list-group-item-action \">JS quiz</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo "Les identifiants";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_NextTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "NextTitle"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 22
        echo "                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p> JS est sensible à la casse <br>
                                    Les tags html et ces attributs doivent être représenté en
                                    minuscule coté JS</p>
                                </div>
                        </div>

                                <h2 class=\"NextTitle\"> Les commentaires </h2>
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <ul>
                                    <li>// : commente le texte jusqu’à la fin de la ligne </li>
                                    <li> /* text */ : Commente un bloc</li>
                                </ul>
                            </div>
                        </div>

                        <h2 class=\"NextTitle\">Identifiants:</h2>
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <ul>
                                    <li>   Doit commencer par une lettre, par (_) ou par le signe dollar (\$)
                                    </li>
                                    <li> le reste des lettres, chiffres, (_), ou \$</li>
                                    <li>ne doit pas etre un mot cle reserve </li>
                                </ul>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 1]);
        echo "\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 3]);
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
        return "Courses/ProgLanguage/JS/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 53,  251 => 52,  247 => 51,  216 => 22,  206 => 21,  188 => 20,  169 => 19,  156 => 16,  152 => 15,  148 => 14,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}JS Course{% endblock %}
{% block width %}27%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('JSCourse') }}\" class=\"list-group-item list-group-item-action \">JS History</a>
    <a href=\"{{ path('JSCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action \">introduction </a>
    <a href=\"{{ path('JSCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action active\">Les identifiants</a>
    <a href=\"{{ path('JSCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">Dates et Times</a>
    <a href=\"{{ path('JSCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">Les chaines</a>
    <a href=\"{{ path('JSCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">Les booleens</a>
    <a href=\"{{ path('JSCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les variables</a>
    <a href=\"{{ path('JSCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les tableaux</a>
    <a href=\"{{ path('JSCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">Les objets</a>
    <a href=\"{{ path('JSCourse',{num : 9 }) }}\" class=\"list-group-item list-group-item-action \">Les fonctions</a>
    <a href=\"{{ path('JSCourse',{num : 10 }) }}\" class=\"list-group-item list-group-item-action \">Le DOM</a>
    <a href=\"{{ path('JSCourse',{num : 11 }) }}\" class=\"list-group-item list-group-item-action \">JS quiz</a>

{% endblock %}
{% block titleParagraphe %}Les identifiants{% endblock %}
{% block NextTitle %}{% endblock %}
                    {% block Course %}
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <p> JS est sensible à la casse <br>
                                    Les tags html et ces attributs doivent être représenté en
                                    minuscule coté JS</p>
                                </div>
                        </div>

                                <h2 class=\"NextTitle\"> Les commentaires </h2>
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <ul>
                                    <li>// : commente le texte jusqu’à la fin de la ligne </li>
                                    <li> /* text */ : Commente un bloc</li>
                                </ul>
                            </div>
                        </div>

                        <h2 class=\"NextTitle\">Identifiants:</h2>
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <ul>
                                    <li>   Doit commencer par une lettre, par (_) ou par le signe dollar (\$)
                                    </li>
                                    <li> le reste des lettres, chiffres, (_), ou \$</li>
                                    <li>ne doit pas etre un mot cle reserve </li>
                                </ul>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('JSCourse',{num : 1 }) }}\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('JSCourse',{num : 3 }) }}\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    {% endblock %}", "Courses/ProgLanguage/JS/index2.html.twig", "D:\\projetjdiiiid\\templates\\Courses\\ProgLanguage\\JS\\index2.html.twig");
    }
}
