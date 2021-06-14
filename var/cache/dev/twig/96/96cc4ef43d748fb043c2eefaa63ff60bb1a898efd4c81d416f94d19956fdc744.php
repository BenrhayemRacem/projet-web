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

/* user/Project.html.twig */
class __TwigTemplate_b0c0740b3767149ccb1866883a093bcd4ac22a55dddd9a348552a29377c8ffed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Project.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Project.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Project.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    // line 3
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "My Projects";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 5
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 6
        echo "    ";
        $this->displayParentBlock("StyleSheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/User/MyProjectsStyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 10
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 11
        echo "    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Discover");
        echo "\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyCourses");
        echo "\">MY COURSES</a>
    </li>
    <li class=\"nav-item actived\" id = \"header\">
        <a href=\"#\" >MY PROJECTS</a>
    </li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    // line 23
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 24
        echo "    <section id=\"Courses\">
        <div class=\"container\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () {
            throw new RuntimeError('Variable "app" does not exist.', 26, $this->source);
        })()), "session", [], "any", false, false, false, 26), "flashbag", [], "any", false, false, false, 26), "get", [0 => "success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "                <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        <div class=\"TitleContainer\"><h2 class=\"TitlePage\"> <span></span>MY<span>PROJECTS</span></h2></div>

            <table class=\"table table-hover\" style=\"margin: 30px 0 0 0; text-align:center;\">
                <thead>
                <tr class=\"table-info\">
                    <th scope=\"col\" style=\"color: #0F9CAC\"><h4 style=\"margin: 20px 20px 0 20px \">#</h4></th>
                    <th scope=\"col\" style=\"color: #0F9CAC\"><h4 style=\"margin: 20px 20px 0 20px \">Project Name</h4></th>
                    <th scope=\"col\" style=\"color: #0F9CAC\">    </th>
                    <th scope=\"col\" style=\"color: #0F9CAC\">    </th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Projects"]) || array_key_exists("Projects", $context) ? $context["Projects"] : (function () {
            throw new RuntimeError('Variable "Projects" does not exist.', 41, $this->source);
        })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Project"]) {
            // line 42
            echo "                    <tr>
                        <th scope=\"row\"><h4 style=\"margin: 40px 20px 0 20px \">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            echo "</h4></th>
                        <td><h4 style=\"margin: 40px 20px 0 20px \">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Project"], "Name", [], "any", false, false, false, 44), "html", null, true);
            echo "</h4></td>
                        <td><div class=\"container\">
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Project"], "Path", [], "any", false, false, false, 46), "html", null, true);
            echo "\" class=\"btn-grad Modified\" style=\"padding: 10px 0 ;\">
                                    Go to Project</a></div></td>
                        <td><div class=\"container\">
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RemoteMyProjects", ["id" => twig_get_attribute($this->env, $this->source, $context["Project"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"btn-grad Modified\" style=\"padding: 10px 0 ;\">
                                    Leave Project</a></div></td>
                    </tr>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "                             </tbody>
                        </table>
                      </div>
                    <div class=\"container alert alert-warning\" style=\"width: 85%\">
                        You still didn't join any project
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
            </table>
        </div>

    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);
    }

    public function getTemplateName()
    {
        return "user/Project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(  248 => 60,  236 => 53,  219 => 49,  213 => 46,  208 => 44,  204 => 43,  201 => 42,  183 => 41,  169 => 29,  160 => 27,  156 => 26,  152 => 24,  142 => 23,  126 => 15,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig'%}

{% block Title %}My Projects{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/MyProjectsStyle.css') }}\">
{% endblock %}

{% block Activated %}
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"{{ path('Discover') }}\">DISCOVER</a>
    </li>
    <li class=\"nav-item\" id = \"header\">
        <a class=\"nav-link\" href=\"{{ path('MyCourses') }}\">MY COURSES</a>
    </li>
    <li class=\"nav-item actived\" id = \"header\">
        <a href=\"#\" >MY PROJECTS</a>
    </li>
{% endblock %}


{% block Body %}
    <section id=\"Courses\">
        <div class=\"container\">
            {% for flashMessage in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success\"> {{ flashMessage }}</div>
            {% endfor %}
        <div class=\"TitleContainer\"><h2 class=\"TitlePage\"> <span></span>MY<span>PROJECTS</span></h2></div>

            <table class=\"table table-hover\" style=\"margin: 30px 0 0 0; text-align:center;\">
                <thead>
                <tr class=\"table-info\">
                    <th scope=\"col\" style=\"color: #0F9CAC\"><h4 style=\"margin: 20px 20px 0 20px \">#</h4></th>
                    <th scope=\"col\" style=\"color: #0F9CAC\"><h4 style=\"margin: 20px 20px 0 20px \">Project Name</h4></th>
                    <th scope=\"col\" style=\"color: #0F9CAC\">    </th>
                    <th scope=\"col\" style=\"color: #0F9CAC\">    </th>
                </tr>
                </thead>
                <tbody>
                {% for Project in Projects %}
                    <tr>
                        <th scope=\"row\"><h4 style=\"margin: 40px 20px 0 20px \">{{ loop.index }}</h4></th>
                        <td><h4 style=\"margin: 40px 20px 0 20px \">{{ Project.Name }}</h4></td>
                        <td><div class=\"container\">
                                <a href=\"{{Project.Path}}\" class=\"btn-grad Modified\" style=\"padding: 10px 0 ;\">
                                    Go to Project</a></div></td>
                        <td><div class=\"container\">
                                <a href=\"{{ path('RemoteMyProjects',{'id':Project.id}) }}\" class=\"btn-grad Modified\" style=\"padding: 10px 0 ;\">
                                    Leave Project</a></div></td>
                    </tr>
                {% else %}
                             </tbody>
                        </table>
                      </div>
                    <div class=\"container alert alert-warning\" style=\"width: 85%\">
                        You still didn't join any project
                    </div>
                {% endfor%}
                </tbody>
            </table>
        </div>

    </section>

{% endblock %}
", "user/Project.html.twig", "D:\\newalkheeeer\\projet-web\\templates\\user\\Project.html.twig");
    }
}
