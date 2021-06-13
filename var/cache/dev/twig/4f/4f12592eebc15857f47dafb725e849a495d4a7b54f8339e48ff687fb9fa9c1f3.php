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

/* Courses/ProgLanguage/JS/index11.html.twig */
class __TwigTemplate_3ca36110c7c6f5c352f8fe20f936fa92eec09f469a680cfc8fe20fce6608cc2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/JS/index11.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Courses/ProgLanguage/JS/index11.html.twig"));

        $this->parent = $this->loadTemplate("Courses/Course.html.twig", "Courses/ProgLanguage/JS/index11.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse");
        echo "\" class=\"list-group-item list-group-item-action \">JS History</a>
    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 1]);
        echo "\" class=\"list-group-item list-group-item-action \">introduction </a>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 2]);
        echo "\" class=\"list-group-item list-group-item-action \">Les identifiants</a>
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
        echo "\" class=\"list-group-item list-group-item-action active\">JS quiz</a>
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

        echo "JS QUIZ";
        
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

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_Course($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Course"));

        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [0 => "result"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "        <div class=\"alert alert-info\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSQuiz");
        echo "\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">Le tableau vide est évalue a </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            true
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            false
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">soit la chaine s correspond a \"Javascript\", s.charAt(2) donne</legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                            J
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                            a
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                            v
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">Parmi ces identifiants, lequel n'est pas valide </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                            javascript
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                            \$javascript
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                            *javascript
                        </label>
                    </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> Quel outil nous permet de tronquer un tableau  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                            la methode length
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                            l’attribut length
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                            l'element delete
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">var x ; la valeur de x sera</legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            false
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            0
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                            undefined
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
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("JSCourse", ["num" => 10]);
        echo "\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"";
        // line 153
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
        return "Courses/ProgLanguage/JS/index11.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 153,  362 => 152,  238 => 31,  233 => 28,  224 => 25,  221 => 24,  216 => 23,  206 => 22,  187 => 20,  168 => 19,  156 => 16,  152 => 15,  148 => 14,  144 => 13,  140 => 12,  136 => 11,  132 => 10,  128 => 9,  124 => 8,  120 => 7,  116 => 6,  111 => 5,  101 => 4,  82 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Courses/Course.html.twig' %}
{% block Title %}JS Course{% endblock %}
{% block width %}100%{% endblock %}
{% block Bar %}
    <a href=\"{{ path('JSCourse') }}\" class=\"list-group-item list-group-item-action \">JS History</a>
    <a href=\"{{ path('JSCourse',{num : 1 }) }}\" class=\"list-group-item list-group-item-action \">introduction </a>
    <a href=\"{{ path('JSCourse',{num : 2 }) }}\" class=\"list-group-item list-group-item-action \">Les identifiants</a>
    <a href=\"{{ path('JSCourse',{num : 3 }) }}\" class=\"list-group-item list-group-item-action \">Dates et Times</a>
    <a href=\"{{ path('JSCourse',{num : 4 }) }}\" class=\"list-group-item list-group-item-action \">Les chaines</a>
    <a href=\"{{ path('JSCourse',{num : 5 }) }}\" class=\"list-group-item list-group-item-action \">Les booleens</a>
    <a href=\"{{ path('JSCourse',{num : 6 }) }}\" class=\"list-group-item list-group-item-action \">Les variables</a>
    <a href=\"{{ path('JSCourse',{num : 7 }) }}\" class=\"list-group-item list-group-item-action \">les tableaux</a>
    <a href=\"{{ path('JSCourse',{num : 8 }) }}\" class=\"list-group-item list-group-item-action \">Les objets</a>
    <a href=\"{{ path('JSCourse',{num : 9 }) }}\" class=\"list-group-item list-group-item-action \">Les fonctions</a>
    <a href=\"{{ path('JSCourse',{num : 10 }) }}\" class=\"list-group-item list-group-item-action \">Le DOM</a>
    <a href=\"{{ path('JSCourse',{num : 11 }) }}\" class=\"list-group-item list-group-item-action active\">JS quiz</a>
{% endblock %}

{% block titleParagraphe %}JS QUIZ{% endblock %}
{% block NextTitle %} {% endblock %}

{% block Course %}
    {% for message in app.flashes('result') %}
        <div class=\"alert alert-info\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"card\" style=\" margin: 20px ;\">
        <div class=\"card-body\">
            <form action =\"{{ path('JSQuiz') }}\">
                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">Le tableau vide est évalue a </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios1\" value=\"option1\" >
                            true
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question1\" id=\"optionsRadios2\" value=\"option2\">
                            false
                        </label>
                    </div>
                </fieldset>


                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">soit la chaine s correspond a \"Javascript\", s.charAt(2) donne</legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios1\" value=\"option1\" >
                            J
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios2\" value=\"option2\">
                            a
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question2\" id=\"optionsRadios3\" value=\"option3\" >
                            v
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">Parmi ces identifiants, lequel n'est pas valide </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios1\" value=\"option1\" >
                            javascript
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios2\" value=\"option2\">
                            \$javascript
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question3\" id=\"optionsRadios3\" value=\"option3\" >
                            *javascript
                        </label>
                    </div>
                </fieldset>




                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\"> Quel outil nous permet de tronquer un tableau  </legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios1\" value=\"option1\" >
                            la methode length
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios2\" value=\"option2\">
                            l’attribut length
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question4\" id=\"optionsRadios3\" value=\"option3\" >
                            l'element delete
                        </label>
                    </div>
                </fieldset>



                <fieldset class=\"form-group\" style=\"text-align: left\">
                    <legend class=\"mt-4\">var x ; la valeur de x sera</legend>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios1\" value=\"option1\" >
                            false
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios2\" value=\"option2\">
                            0
                        </label>
                    </div>
                    <div class=\"form-check disabled\">
                        <label class=\"form-check-label\">
                            <input type=\"radio\" class=\"form-check-input\" name=\"question5\" id=\"optionsRadios3\" value=\"option3\" >
                            undefined
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
                <div class=\"col-5\"><a class=\"btn-grad\" href=\"{{ path('JSCourse',{num : 10 }) }}\">< Previous</a></div>
                <div class=\"col\"><a class=\"btn-grad\" href=\"{{ path('Discover')}}\">Home</a></div>
                <div class=\"col\">    </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Courses/ProgLanguage/JS/index11.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\Web Project\\WebProject\\templates\\Courses\\ProgLanguage\\JS\\index11.html.twig");
    }
}
