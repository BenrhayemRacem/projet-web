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

/* user/EditProfilePassword.html.twig */
class __TwigTemplate_26a23f172947c2ad331bf098f5b1ffd512ad36af6531d33ab32135b9bde4f814 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/EditProfilePassword.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/EditProfilePassword.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/EditProfilePassword.html.twig", 1);
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

        echo "Edit Profile";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/User/EditProfileUser.css"), "html", null, true);
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

    // line 23
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        // line 24
        echo "    <div id = \"Editing\" class=\"container\">
        <div class=\"main-body\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card Profile\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                <img src=\"https://icons-for-free.com/iconfiles/png/512/agenda+app+contacts+online+profile+user+icon-1320183042135412367.png\" alt=\"Admin\" width=\"200\"/>
                                <!-- <img src=\"https://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\"> -->
                                <div class=\"mt-3\">
                                    <h4>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "FirstName", [], "any", false, false, false, 34), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "LastName", [], "any", false, false, false, 34), "html", null, true);
        echo "</h4>
                                    ";
        // line 35
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "address", [], "any", false, false, false, 35))) {
            // line 36
            echo "                                        <p class=\"text-muted font-size-sm\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "address", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                                    ";
        }
        // line 38
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div  class=\"row headings gradient-underline \"> <h5>Change Password</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Current Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">New Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" name=\"PlainPassword\" class=\"form-control\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "plainPassword", [], "any", false, false, false, 62), "html", null, true);
        echo "\" placeholder=\"••••••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Confirm Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••••••\">
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px; width: 50%; font-size: 15px \">
                                <a class=\"btn-grad\" id=\"SavePassword\" href=\"#\">Save password changes</a>
                            </div>

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

    // line 89
    public function block_greetings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        echo " <div class=\"col Greeting \"> Welcome,";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "FirstName", [], "any", false, false, false, 89), "html", null, true);
        echo " </div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/EditProfilePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 89,  208 => 62,  182 => 38,  176 => 36,  174 => 35,  168 => 34,  156 => 24,  146 => 23,  133 => 18,  127 => 15,  121 => 12,  118 => 11,  108 => 10,  96 => 7,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'User.html.twig'%}

{% block Title %}Edit Profile{% endblock %}

{% block StyleSheet %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/EditProfileUser.css') }}\">
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
    <div id = \"Editing\" class=\"container\">
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
                            <div  class=\"row headings gradient-underline \"> <h5>Change Password</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Current Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">New Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" name=\"PlainPassword\" class=\"form-control\" value=\"{{user.plainPassword}}\" placeholder=\"••••••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Confirm Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••••••\">
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px; width: 50%; font-size: 15px \">
                                <a class=\"btn-grad\" id=\"SavePassword\" href=\"#\">Save password changes</a>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block greetings %} <div class=\"col Greeting \"> Welcome,{{ user.FirstName }} </div> {% endblock %}

", "user/EditProfilePassword.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\projet-web\\templates\\user\\EditProfilePassword.html.twig");
    }
}
