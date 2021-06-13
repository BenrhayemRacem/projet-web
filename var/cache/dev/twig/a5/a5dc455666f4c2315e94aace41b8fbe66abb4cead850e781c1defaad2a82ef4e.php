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

/* Courses/writing/francais/index4.html.twig */
class __TwigTemplate_0838c0d84569e3dfea0674d7959bb66ff0b3b2dc41a09a665ae50dcdb34333a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/francais/index4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/francais/index4.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/writing/francais/index4.html.twig", 1);
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

        echo "HTML Course";

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

        echo "50%";

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse");
        echo "\" class=\"list-group-item list-group-item-action  \">les nombres</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action\">les jours</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action active\">la famille</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">les temps verbaux</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action \">francais quiz</a>

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

        echo "la famille";

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

        echo "<h2 class=\"NextTitle\">Les membres de la famille</h2>   ";

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
                                <ul>
                                    <li> les grands-parents: grand-pere et grand-mere </li>
                                    <li> les parents: pere et mere</li>
                                    <li> les enfants: frere et soeur </li>

                                </ul>
                                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/francais/ma%20famille.jpg"), "html", null, true);
        echo "\" class=\"img-thumbnail\" width=\"500px\"/>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 3]);
        echo "\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 5]);
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
        return "Courses/writing/francais/index4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  229 => 33,  225 => 32,  221 => 31,  215 => 28,  205 => 20,  195 => 19,  176 => 17,  157 => 16,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}HTML Course{% endblock %}
{% block width %}50%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('francaisCourse') }}\" class=\"list-group-item list-group-item-action  \">les nombres</a>
    <a href=\"{{ path('francaisCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">les jours</a>
    <a href=\"{{ path('francaisCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"{{ path('francaisCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"{{ path('francaisCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action active\">la famille</a>
    <a href=\"{{ path('francaisCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les temps verbaux</a>
    <a href=\"{{ path('francaisCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"{{ path('francaisCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"{{ path('francaisCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">francais quiz</a>

{% endblock %}
{% block titleParagraphe %}la famille{% endblock %}
{% block NextTitle %}<h2 class=\"NextTitle\">Les membres de la famille</h2>   {% endblock %}

                    {% block Course %}
                        <div class=\"card\" style=\"margin-top: 20px \">
                            <div class=\"card-body\">
                                <ul>
                                    <li> les grands-parents: grand-pere et grand-mere </li>
                                    <li> les parents: pere et mere</li>
                                    <li> les enfants: frere et soeur </li>

                                </ul>
                                <img src=\"{{ asset('images/francais/ma%20famille.jpg')}}\" class=\"img-thumbnail\" width=\"500px\"/>

                                <div class=\"container justify-items-end row\">
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('francaisCourse',{num : 3 }) }}\">< Previous</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                                    <div class=\"col\"><a class=\"btn-grad\" href=\"{{path('francaisCourse',{num : 5 }) }}\">Next ></a></div>
                                </div>

                            </div>
                        </div>
                    {% endblock %}


", "Courses/writing/francais/index4.html.twig", "D:\\projetnewnewnew\\templates\\Courses\\writing\\francais\\index4.html.twig");
    }
}
