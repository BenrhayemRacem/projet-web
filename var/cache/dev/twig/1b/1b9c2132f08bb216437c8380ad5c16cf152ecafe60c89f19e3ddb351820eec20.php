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

/* user/Profile.html.twig */
class __TwigTemplate_c693b9d1ea25a25eb579b1f951676d480e6a0415ea01878e3d0e0e62a74364ef extends Template
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
            'greetings' => [$this, 'block_greetings'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/Profile.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/Profile.html.twig", 1);
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

        echo "My Profile";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/User/ProfileUser.css"), "html", null, true);
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
        echo "     <li class=\"nav-item\" id = \"header\">
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
     <li class=\"nav-item\" id = \"header\">
         <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MyProjects");
        echo "\">MY PROJECTS</a>
     </li>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 23
        echo "
    <div id = \"Profile\" class=\"container\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "            <div class=\"alert alert-success\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        <div class=\"main-body\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card Profile\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"https://icons-for-free.com/iconfiles/png/512/agenda+app+contacts+online+profile+user+icon-1320183042135412367.png\" alt=\"Admin\" width=\"200\"/>
                                <!-- <img src=\"https://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\"> -->
                                <div class=\"mt-3\">
                                    <h4>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "FirstName", [], "any", false, false, false, 39), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "LastName", [], "any", false, false, false, 39), "html", null, true);
        echo "</h4>
                                    ";
        // line 40
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "address", [], "any", false, false, false, 40))) {
            // line 41
            echo "                                        <p class=\"text-muted font-size-sm\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "address", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 43
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row headings gradient-underline\"> <h5 style=\"text-align: center ; margin: 20px\">User's Info</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Full Name</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <p>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "FirstName", [], "any", false, false, false, 57), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "LastName", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Email</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <p>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">

                                    <h6 class=\"mb-0\">Address</h6>
                                </div>

                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 75
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "address", [], "any", false, false, false, 75))) {
            // line 76
            echo "                                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "address", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>
                                    ";
        } else {
            // line 78
            echo "                                    <p>Not set yet</p>
                                    ";
        }
        // line 80
        echo "                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">My Bio</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 87
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "Bio", [], "any", false, false, false, 87))) {
            // line 88
            echo "                                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "Bio", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
                                    ";
        } else {
            // line 90
            echo "                                        <p>Not set yet</p>
                                    ";
        }
        // line 92
        echo "                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px; width: 50%; font-size: 15px\">
                                <a class=\"btn-grad\" id=\"EditInfo\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Edit_Profile");
        echo "\">Edit Info</a>
                            </div>

                            <div  class=\"row headings gradient-underline \"> <h5>Change Password</h5></div>
                            <div class=\"row mb-3\">
                                <p>
                                    Would you like to change your password ?
                                </p>

                            </div>

                            <div class=\"row\" style=\" width: 50%; font-size: 15px\">
                                <a class=\"btn-grad\" id=\"ChangePassword\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Edit_Passwd");
        echo "\" style=\"margin-top: 0;\">Change password</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_greetings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        echo " <div class=\"col Greeting \"> Welcome,";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "FirstName", [], "any", false, false, false, 119), "html", null, true);
        echo " </div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 119,  297 => 108,  282 => 96,  276 => 92,  272 => 90,  266 => 88,  264 => 87,  255 => 80,  251 => 78,  245 => 76,  243 => 75,  230 => 65,  217 => 57,  201 => 43,  195 => 41,  193 => 40,  187 => 39,  176 => 30,  167 => 27,  164 => 26,  160 => 25,  156 => 23,  146 => 22,  133 => 18,  127 => 15,  121 => 12,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig' %}

{% block Title %}My Profile{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/ProfileUser.css') }}\">
{% endblock %}

 {% block Activated %}
     <li class=\"nav-item\" id = \"header\">
         <a class=\"nav-link\" href=\"{{ path('Discover') }}\">DISCOVER</a>
     </li>
     <li class=\"nav-item\" id = \"header\">
         <a class=\"nav-link\" href=\"{{ path('MyCourses') }}\">MY COURSES</a>
     </li>
     <li class=\"nav-item\" id = \"header\">
         <a class=\"nav-link\" href=\"{{ path('MyProjects') }}\">MY PROJECTS</a>
     </li>
 {% endblock %}

{% block Body %}

    <div id = \"Profile\" class=\"container\">
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"main-body\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card Profile\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"https://icons-for-free.com/iconfiles/png/512/agenda+app+contacts+online+profile+user+icon-1320183042135412367.png\" alt=\"Admin\" width=\"200\"/>
                                <!-- <img src=\"https://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\"> -->
                                <div class=\"mt-3\">
                                    <h4>{{ user.FirstName }}  {{ user.LastName }}</h4>
                                    {% if user.address is not null %}
                                        <p class=\"text-muted font-size-sm\">{{ user.address }}</p>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row headings gradient-underline\"> <h5 style=\"text-align: center ; margin: 20px\">User's Info</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Full Name</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <p>{{ user.FirstName }}  {{ user.LastName }}</p>
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Email</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <p>{{ user.email }}</p>
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">

                                    <h6 class=\"mb-0\">Address</h6>
                                </div>

                                <div class=\"col-sm-9 text-secondary\">
                                    {% if user.address is not null %}
                                    <p>{{ user.address }}</p>
                                    {% else %}
                                    <p>Not set yet</p>
                                    {% endif %}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">My Bio</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {% if user.Bio is not null %}
                                        <p>{{ user.Bio }}</p>
                                    {% else %}
                                        <p>Not set yet</p>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px; width: 50%; font-size: 15px\">
                                <a class=\"btn-grad\" id=\"EditInfo\" href=\"{{ path('Edit_Profile') }}\">Edit Info</a>
                            </div>

                            <div  class=\"row headings gradient-underline \"> <h5>Change Password</h5></div>
                            <div class=\"row mb-3\">
                                <p>
                                    Would you like to change your password ?
                                </p>

                            </div>

                            <div class=\"row\" style=\" width: 50%; font-size: 15px\">
                                <a class=\"btn-grad\" id=\"ChangePassword\" href=\"{{ path('Edit_Passwd') }}\" style=\"margin-top: 0;\">Change password</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block greetings %} <div class=\"col Greeting \"> Welcome,{{ user.FirstName }} </div> {% endblock %}
", "user/Profile.html.twig", "D:\\XAMPP\\htdocs\\projetWeb\\templates\\user\\Profile.html.twig");
    }
}
