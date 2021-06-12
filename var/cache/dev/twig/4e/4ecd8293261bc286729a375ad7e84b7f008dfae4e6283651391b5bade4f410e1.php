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

/* user/EditProfile.html.twig */
class __TwigTemplate_d57ea99af0766724d0a7e1b05612e05ed1d7378dc4c60df51b01888282689378 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/EditProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/EditProfile.html.twig"));

        $this->parent = $this->loadTemplate("User.html.twig", "user/EditProfile.html.twig", 1);
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
         <a class=\"nav-link\" href=\"#\">MY COURSES</a>
     </li>
     <li class=\"nav-item\" id = \"header\">
         <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
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
                                    <h4>Hadil Helali</h4>
                                    <p class=\"text-muted font-size-sm\">Mahdia, Tunisia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row headings gradient-underline\"> <h5 style=\"text-align: center ; margin: 20p\">User's Info</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Full Name</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"text\" class=\"form-control\" value=\"Helali Hadil\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Email</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"text\" class=\"form-control\" value=\"helalihadil4@gmail.com\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Address</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"text\" class=\"form-control\" value=\"Mahdia, Tunisia\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">My Bio</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                        <textarea class=\"form-control\" rows=\"5\" placeholder=\"My Bio\"></textarea>
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px; width: 50%; font-size: 15px\">
                                <a class=\"btn-grad\" id=\"SaveChanges\" href=\"#\">Save changes</a>
                            </div>

                            <div  class=\"row headings gradient-underline \"> <h5>Change Password</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Current Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">New Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Confirm Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••\">
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/EditProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 24,  139 => 23,  120 => 12,  117 => 11,  107 => 10,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
         <a class=\"nav-link\" href=\"#\">MY COURSES</a>
     </li>
     <li class=\"nav-item\" id = \"header\">
         <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
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
                                    <h4>Hadil Helali</h4>
                                    <p class=\"text-muted font-size-sm\">Mahdia, Tunisia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row headings gradient-underline\"> <h5 style=\"text-align: center ; margin: 20p\">User's Info</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Full Name</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"text\" class=\"form-control\" value=\"Helali Hadil\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Email</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"text\" class=\"form-control\" value=\"helalihadil4@gmail.com\">
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Address</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"text\" class=\"form-control\" value=\"Mahdia, Tunisia\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">My Bio</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                        <textarea class=\"form-control\" rows=\"5\" placeholder=\"My Bio\"></textarea>
                                </div>
                            </div>

                            <div class=\"row\" style=\"margin-top: 20px; width: 50%; font-size: 15px\">
                                <a class=\"btn-grad\" id=\"SaveChanges\" href=\"#\">Save changes</a>
                            </div>

                            <div  class=\"row headings gradient-underline \"> <h5>Change Password</h5></div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Current Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">New Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••\">
                                </div>
                            </div>

                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Confirm Password</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"password\" class=\"form-control\" placeholder=\"••••••\">
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
{% endblock %}


", "user/EditProfile.html.twig", "C:\\Users\\zayne\\projetWEB\\templates\\user\\EditProfile.html.twig");
    }
}
