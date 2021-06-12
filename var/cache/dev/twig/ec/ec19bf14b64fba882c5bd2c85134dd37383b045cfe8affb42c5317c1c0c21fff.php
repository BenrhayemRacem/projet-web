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

/* Courses/ProgLanguage/CSS/index10.html.twig */
class __TwigTemplate_9aeb05cf3fed5268e745b04c191f08deac2353569beb9c6065a7570dd0a9f92e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/CSS/index10.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/CSS/index10.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/CSS/index10.html.twig", 1);
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
        echo "\" class=\"list-group-item list-group-item-action \">CSS coleur et bordeur</a>
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
        echo "\" class=\"list-group-item list-group-item-action active\"> CSS quiz </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_titleParagraphe($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleParagraphe"));

        echo "CSS QUIZ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
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

    // line 21
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", [0 => "result"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <div class=\"alert alert-info\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSQuiz");
        echo "\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">Quelle methode ne permet pas d'introduire un code en langage CSS </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            Directement dans les balises via l’attribut style
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            Dans un fichier CSS avec la balise  link
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios3\" value=\"option3\" >
                            Dans un fichier CSS avec la balise script
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">A >B correspond a </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                            une balise contenue dans une autre
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                            une balise enfant direct de l’autre
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                            une première balise B qui suit A
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">une première balise B qui suit A est represente par </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                            A[B]
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                            A B
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                            A+B
                        </label>
                    </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> le selecteur du l'identifiant numero du paragraphe p est  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                            p#numero
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                            p.numero
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                            p:numero
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">lien affecte au survol est </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            A:active
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            A:hover
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                            A:visited
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
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CSSCourse", ["num" => 9]);
        echo "\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 158
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
        return "Courses/ProgLanguage/CSS/index10.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 158,  364 => 157,  234 => 30,  229 => 27,  220 => 24,  217 => 23,  212 => 22,  202 => 21,  183 => 19,  164 => 18,  152 => 15,  148 => 14,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}CSS Course{% endblock %}
{% block width %}100%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('CSSCourse') }}\" class=\"list-group-item list-group-item-action \">CSS syntaxe</a>
    <a href=\"{{ path('CSSCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action \">les methodes d'invocation</a>
    <a href=\"{{ path('CSSCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">CSS texte</a>
    <a href=\"{{ path('CSSCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">CSS coleur et bordeur</a>
    <a href=\"{{ path('CSSCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">les selecteurs principaux</a>
    <a href=\"{{ path('CSSCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">les selecteurs speciaux</a>
    <a href=\"{{ path('CSSCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">les classes</a>
    <a href=\"{{ path('CSSCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">CSS div et span</a>
    <a href=\"{{ path('CSSCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">les pseudo classes</a>
    <a href=\"{{ path('CSSCourse',{num : 9 }) }}\" class=\"list-group-item list-group-item-action \"> les tableaux</a>
    <a href=\"{{ path('CSSCourse',{num : 10 }) }}\" class=\"list-group-item list-group-item-action active\"> CSS quiz </a>
{% endblock %}

{% block titleParagraphe %}CSS QUIZ{% endblock %}
{% block NextTitle %} {% endblock %}

{% block Course %}
    {% for message in app.flashes('result') %}
        <div class=\"alert alert-info\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"{{ path('CSSQuiz') }}\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">Quelle methode ne permet pas d'introduire un code en langage CSS </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            Directement dans les balises via l’attribut style
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            Dans un fichier CSS avec la balise  link
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios3\" value=\"option3\" >
                            Dans un fichier CSS avec la balise script
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">A >B correspond a </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                            une balise contenue dans une autre
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                            une balise enfant direct de l’autre
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                            une première balise B qui suit A
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">une première balise B qui suit A est represente par </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                            A[B]
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                            A B
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                            A+B
                        </label>
                    </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> le selecteur du l'identifiant numero du paragraphe p est  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                            p#numero
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                            p.numero
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                            p:numero
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">lien affecte au survol est </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            A:active
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            A:hover
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                            A:visited
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
                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('CSSCourse',{num : 9 }) }}\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                <div class=\"col\">    </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Courses/ProgLanguage/CSS/index10.html.twig", "D:\\projetjdiiiid\\templates\\Courses\\ProgLanguage\\CSS\\index10.html.twig");
    }
}
