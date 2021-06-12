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

/* Courses/writing/francais/index8.html.twig */
class __TwigTemplate_c312132a42bff15f816f0469f5099c1ed921e05920632c67f62bbc7e742ce530 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/francais/index8.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/francais/index8.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/writing/francais/index8.html.twig", 1);
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

        echo "francais quizz";
        
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

        echo "100%";
        
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
        echo "\" class=\"list-group-item list-group-item-action \">la famille</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">les temps</a>
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
        echo "\" class=\"list-group-item list-group-item-action active\">francais quiz</a>

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

        echo "francais QUIZ";
        
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

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "result"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "        <div class=\"alert alert-info\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisQuiz");
        echo "\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">le mois de fevrier contient 31 jours </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            vrai
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            faux
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> 6+1 = ?<div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                            cinq
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                            six
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                            sept
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> les parents sont<div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                            mere et pere
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                            soeur et fils
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                            soeur et mere
                        </label>
                    </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> la deuxieme personne du pluriel est<div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                            tu
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                            vous
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                            ils
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">l'article un est  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            article defini
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            article indefini
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                            article partitif
                        </label>
                    </div>
                </fieldset>

                <div class=\"container justify-items-end row\">
                    <div class=\"col\"></div>
                    <div class=\"col\" style=\"justify-content: center\"><button type=\"submit\" class=\"btn-grad\" >Submit</button></div>
                    <div class=\"col\"></div>
                </div>
            </form>

            <div class=\"container justify-items-end row\">
                <div class=\"col-5\"><a class=\"btn-grad\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("francaisCourse", ["num" => 7]);
        echo "\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">Home</a></div>
                <div class=\"col\">    </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Courses/writing/francais/index8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 148,  348 => 147,  227 => 29,  222 => 26,  213 => 23,  210 => 22,  205 => 21,  195 => 20,  176 => 18,  157 => 17,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}francais quizz{% endblock %}
{% block width %}100%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('francaisCourse') }}\" class=\"list-group-item list-group-item-action  \">les nombres</a>
    <a href=\"{{ path('francaisCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">les jours</a>
    <a href=\"{{ path('francaisCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">les mois</a>
    <a href=\"{{ path('francaisCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">les saisons</a>
    <a href=\"{{ path('francaisCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">la famille</a>
    <a href=\"{{ path('francaisCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les temps</a>
    <a href=\"{{ path('francaisCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les Pronoms personnels</a>
    <a href=\"{{ path('francaisCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les articles</a>
    <a href=\"{{ path('francaisCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action active\">francais quiz</a>

{% endblock %}

{% block titleParagraphe %}francais QUIZ{% endblock %}
{% block NextTitle %} {% endblock %}

{% block Course %}
    {% for message in app.flashes('result') %}
        <div class=\"alert alert-info\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"{{ path('francaisQuiz') }}\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">le mois de fevrier contient 31 jours </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            vrai
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            faux
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> 6+1 = ?<div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                            cinq
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                            six
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                            sept
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> les parents sont<div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                            mere et pere
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                            soeur et fils
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                            soeur et mere
                        </label>
                    </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> la deuxieme personne du pluriel est<div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                            tu
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                            vous
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                            ils
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">l'article un est  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            article defini
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            article indefini
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                            article partitif
                        </label>
                    </div>
                </fieldset>

                <div class=\"container justify-items-end row\">
                    <div class=\"col\"></div>
                    <div class=\"col\" style=\"justify-content: center\"><button type=\"submit\" class=\"btn-grad\" >Submit</button></div>
                    <div class=\"col\"></div>
                </div>
            </form>

            <div class=\"container justify-items-end row\">
                <div class=\"col-5\"><a class=\"btn-grad\" href=\"{{ path('francaisCourse',{num : 7 }) }}\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                <div class=\"col\">    </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Courses/writing/francais/index8.html.twig", "D:\\projetjdiiiid\\templates\\Courses\\writing\\francais\\index8.html.twig");
    }
}
