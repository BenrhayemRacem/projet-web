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

/* Courses/ProgLanguage/HTML/index7.html.twig */
class __TwigTemplate_1632c9a4b09c2054f626c8889f9757b66046cf81e6e0885b0e56247c7a3570d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/HTML/index7.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/HTML/index7.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/HTML/index7.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse");
        echo "\" class=\"list-group-item list-group-item-action \">HTML History</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML balises</a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML tableaux</a>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 3]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML input</a>
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 4]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML types input</a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 5]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML organisation</a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 6]);
        echo "\" class=\"list-group-item list-group-item-action \">HTML media</a>
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 7]);
        echo "\" class=\"list-group-item list-group-item-action active\">HTML quiz</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo "HTML QUIZ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "result"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "        <div class=\"alert alert-info\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
<div class=\"card\" style=\" margin: 20px ;\">
    <div class=\"card-body\">
    <form action =\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLQuiz");
        echo "\">
        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">Pour définir un titre DANS une page HTML, on utilise...</legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                    La balise title
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                    La balise head
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios3\" value=\"option3\" >
                    une des balise h1,h2,h3
                </label>
            </div>
        </fieldset>


        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">Laquelle de ces syntaxes est correcte pour écrire un commentaire en HTML ?</legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                    < !--Commentaire-->
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                    <--Commentaire-->
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                    < !--Commentaire--!>
                </label>
            </div>
        </fieldset>



        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">quel type d'input n'existe pas </legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                    url
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                    email
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                    phone
                </label>
            </div>
        </fieldset>




        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\"> quelle est la balise qui indique le debut d'un tableau </legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                    La balise td
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                    La balise table
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                    la balise head
                </label>
            </div>
        </fieldset>



        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">quels sont les types des balises ?</legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                    block et colonne
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                    inline et colonne
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                    block et inline
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
            <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HTMLCourse", ["num" => 6]);
        echo "\">< Previous</a></div>
            <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 155
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
        return "Courses/ProgLanguage/HTML/index7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 155,  352 => 154,  222 => 27,  217 => 24,  208 => 21,  205 => 20,  200 => 19,  190 => 18,  171 => 16,  152 => 15,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}HTML Course{% endblock %}
{% block width %}100%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('HTMLCourse') }}\" class=\"list-group-item list-group-item-action \">HTML History</a>
    <a href=\"{{ path('HTMLCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action \">HTML balises</a>
    <a href=\"{{ path('HTMLCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">HTML tableaux</a>
    <a href=\"{{ path('HTMLCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">HTML input</a>
    <a href=\"{{ path('HTMLCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">HTML types input</a>
    <a href=\"{{ path('HTMLCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">HTML organisation</a>
    <a href=\"{{ path('HTMLCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">HTML media</a>
    <a href=\"{{ path('HTMLCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action active\">HTML quiz</a>
{% endblock %}

{% block titleParagraphe %}HTML QUIZ{% endblock %}
{% block NextTitle %} {% endblock %}

{% block Course %}
    {% for message in app.flashes('result') %}
        <div class=\"alert alert-info\">
            {{ message }}
        </div>
    {% endfor %}

<div class=\"card\" style=\" margin: 20px ;\">
    <div class=\"card-body\">
    <form action =\"{{ path('HTMLQuiz') }}\">
        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">Pour définir un titre DANS une page HTML, on utilise...</legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                    La balise title
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                    La balise head
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios3\" value=\"option3\" >
                    une des balise h1,h2,h3
                </label>
            </div>
        </fieldset>


        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">Laquelle de ces syntaxes est correcte pour écrire un commentaire en HTML ?</legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                    < !--Commentaire-->
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                    <--Commentaire-->
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                    < !--Commentaire--!>
                </label>
            </div>
        </fieldset>



        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">quel type d'input n'existe pas </legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                    url
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                    email
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                    phone
                </label>
            </div>
        </fieldset>




        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\"> quelle est la balise qui indique le debut d'un tableau </legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                    La balise td
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                    La balise table
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                    la balise head
                </label>
            </div>
        </fieldset>



        <fieldset class=\"form-group\" style=\"text-align: left\">
            <legend class=\"mt-4\">quels sont les types des balises ?</legend>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                    block et colonne
                </label>
            </div>
            <div class=\"form-check\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                    inline et colonne
                </label>
            </div>
            <div class=\"form-check disabled\">
                <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                    block et inline
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
            <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('HTMLCourse',{num : 6 }) }}\">< Previous</a></div>
            <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
            <div class=\"col\">    </div>
        </div>
    </div>
</div>
{% endblock %}
", "Courses/ProgLanguage/HTML/index7.html.twig", "C:\\xampp\\htdocs\\projet-web\\templates\\Courses\\ProgLanguage\\HTML\\index7.html.twig");
    }
}
