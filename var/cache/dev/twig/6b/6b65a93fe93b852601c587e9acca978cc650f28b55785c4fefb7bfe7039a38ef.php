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

/* Courses/writing/anglais/index8.html.twig */
class __TwigTemplate_8a0792e98bb2e75f63bdf7cab6d2d7b481a7721de511b419f3b3bacb5d623e1d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/anglais/index8.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/writing/anglais/index8.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/writing/anglais/index8.html.twig", 1);
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

        echo "English quizz";

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse");
        echo "\" class=\"list-group-item list-group-item-action  \">the numbers</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action\">the days</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">the months</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">the seasons </a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">the family</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">verbal tenses</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">Personal pronouns</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action \">the articles</a>
    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 8]);
        echo "\" class=\"list-group-item list-group-item-action active \">english quiz</a>

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

        echo "anglais QUIZ";

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
            throw new RuntimeError('Variable "app" does not exist.', 21, $this->source);
        })()), "flashes", [0 => "result"], "method", false, false, false, 21));
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisQuiz");
        echo "\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> the day following Tuesday is  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            Wednesday
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            Monday
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option3\">
                            Friday
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> 2+1= ?<div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                                one
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                                three
                            </label>
                        </div>
                        <div class=\"form-check disabled\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                                four
                            </label>
                        </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> the children are<div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                                mother and father
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                                son and daughter
                            </label>
                        </div>
                        <div class=\"form-check disabled\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                                father and son
                            </label>
                        </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> 'SHE' is <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                                plural pronom
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                                singuler pronom
                            </label>
                        </div>

                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">December is the last month   </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            true
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            false
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
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anglaisCourse", ["num" => 7]);
        echo "\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 144
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
        return "Courses/writing/anglais/index8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  348 => 144,  344 => 143,  227 => 29,  222 => 26,  213 => 23,  210 => 22,  205 => 21,  195 => 20,  176 => 18,  157 => 17,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}English quizz{% endblock %}
{% block width %}100%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('anglaisCourse') }}\" class=\"list-group-item list-group-item-action  \">the numbers</a>
    <a href=\"{{ path('anglaisCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action\">the days</a>
    <a href=\"{{ path('anglaisCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">the months</a>
    <a href=\"{{ path('anglaisCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">the seasons </a>
    <a href=\"{{ path('anglaisCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">the family</a>
    <a href=\"{{ path('anglaisCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">verbal tenses</a>
    <a href=\"{{ path('anglaisCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Personal pronouns</a>
    <a href=\"{{ path('anglaisCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">the articles</a>
    <a href=\"{{ path('anglaisCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action active \">english quiz</a>

{% endblock %}

{% block titleParagraphe %}anglais QUIZ{% endblock %}
{% block NextTitle %} {% endblock %}

{% block Course %}
    {% for message in app.flashes('result') %}
        <div class=\"alert alert-info\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"{{ path('anglaisQuiz') }}\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> the day following Tuesday is  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            Wednesday
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            Monday
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option3\">
                            Friday
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> 2+1= ?<div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                                one
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                                three
                            </label>
                        </div>
                        <div class=\"form-check disabled\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                                four
                            </label>
                        </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> the children are<div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                                mother and father
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                                son and daughter
                            </label>
                        </div>
                        <div class=\"form-check disabled\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                                father and son
                            </label>
                        </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> 'SHE' is <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                                plural pronom
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <label class=\"form-check-label\">
                                <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                                singuler pronom
                            </label>
                        </div>

                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">December is the last month   </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            true
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            false
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
                <div class=\"col-5\"><a class=\"btn-grad\" href=\"{{ path('anglaisCourse',{num : 7 }) }}\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                <div class=\"col\">    </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Courses/writing/anglais/index8.html.twig", "D:\\projetnewnewnew\\templates\\Courses\\writing\\anglais\\index8.html.twig");
    }
}
