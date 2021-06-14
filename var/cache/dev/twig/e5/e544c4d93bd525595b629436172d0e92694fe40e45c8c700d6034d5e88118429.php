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

/* User.html.twig */
class __TwigTemplate_904b90361680fae26150c2e3aff3f8aeedd291358477d07a929a822e25e899c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'StyleSheet' => [$this, 'block_StyleSheet'],
            'Title' => [$this, 'block_Title'],
            'Activated' => [$this, 'block_Activated'],
            'greetings' => [$this, 'block_greetings'],
            'Body' => [$this, 'block_Body'],
            'Scripts' => [$this, 'block_Scripts'],
            'Footer' => [$this, 'block_Footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head style=\"border-left-width: 0 ; border-left-style: solid;\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Logohead.png"), "html", null, true);
        echo "\">
    <script defer src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/brands.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/solid.js"), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 13
        $this->displayBlock('StyleSheet', $context, $blocks);
        // line 19
        echo "    <title> ";
        $this->displayBlock('Title', $context, $blocks);
        echo "</title>
</head>


<body>

<!-- The Nav bar -->
<!--Header -->
    <header>
        <nav class=\"navbar navbar-expand-md navbar-light bg-light scrolled sticky \">

            <button class=\"navbar-toggler collapsed border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavbar\"  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                <div class=\"close-icon py-1\">✖</div>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
                <ul id=\"navMenu\" class=\"navbar-nav ml-auto\">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    ";
        // line 42
        $this->displayBlock('Activated', $context, $blocks);
        // line 53
        echo "                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li> <div class=\"row dropdown User\">
                        ";
        // line 58
        $this->displayBlock('greetings', $context, $blocks);
        // line 59
        echo "                                <div class=\" col wrapperUser dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"UserIcon\"> <i class=\"fas fa-user\"></i></div>
                                </div>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\" style=\"width : 60% ; left : 5% ;\">
                                <li><a class=\"dropdown-item\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
        echo "\">My Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Edit_Profile_Info");
        echo "\">Edit Profile Info</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Edit_Profile_Password");
        echo "\">Edit Profile Password</a></li>
                                <li><a class=\"dropdown-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<!--/Header -->

";
        // line 77
        $this->displayBlock('Body', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('Scripts', $context, $blocks);
        // line 86
        echo "

</body>


";
        // line 91
        $this->displayBlock('Footer', $context, $blocks);
        // line 147
        echo "</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_StyleSheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "StyleSheet"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/Style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/home/learningPath.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/User/User.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_Title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Title"));

        echo "LTC- Learn To Create";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_Activated($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Activated"));

        // line 43
        echo "                    <li class=\"nav-item actived\">
                        <a href=\"#\">DISCOVER</a>
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

    // line 58
    public function block_greetings($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "greetings"));

        echo " <div class=\"col Greeting \"> Welcome , Hadil </div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_Body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_Scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Scripts"));

        // line 81
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--<script src=\"/node_modules/jquery/dist/cdn/jquery-2.1.3.min.js\"></script>-->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Scripts/UserScripts/UserScripts.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_Footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Footer"));

        // line 92
        echo "    <footer>
        <div id=\"footer\" class=\"container-fluid\">
            <div class=\"col-12\">
                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/Logohead.png"), "html", null, true);
        echo "\" alt=\"\">
                <div>
                    Learn in-demand skills in half the time
                </div>
            </div>

            <div class=\"row offset-1\">
                <div class=\"col\">
                    <div class=\"row\"><h3>Learn</h3></div>
                    <div class=\"row\"><a href=\"#\"> Courses</a></div>
                    <div class=\"row\"><a href=\"#\"> Forum</a></div>
                    <div class=\"row\"><a href=\"#\"> Classes </a></div>
                    <div class=\"row\"><a href=\"#\"> Tests </a></div>
                </div>
                <div class=\"col\">
                    <div class=\"row\"><h3>Legal</h3></div>
                    <div class=\"row\"><a href=\"#\"> Privacy Policy </a></div>
                    <div class=\"row\"><a href=\"#\"> Terms of service </a></div>

                </div>
                <div class=\"col\">
                    <div class=\"row\"><h3>More</h3></div>
                    <div class=\"row\"><a href=\"#\"> Our team</a></div>
                    <div class=\"row\"><a href=\"#\"> for bootcamps</a> </div>
                    <div class=\"row\"><a href=\"#\"> FAQ </a></div>
                    <div class=\"row\"><a href=\"#\"> Contact Us </a></div>
                </div>
            </div>
            <div class=\"row contactUsIcons justify-content-between\">
                <div class=\"col-4\">
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/envelope-fill.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/facebook.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/linkedin.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Commun/icons/instagram.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </a>

                </div>
                <div class=\"col-4\">
                    Copyright ©2021 Educative, Inc. All rights reserved

                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "User.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 135,  389 => 132,  383 => 129,  377 => 126,  343 => 95,  338 => 92,  328 => 91,  316 => 84,  312 => 83,  306 => 81,  296 => 80,  278 => 77,  259 => 58,  240 => 43,  230 => 42,  211 => 19,  199 => 17,  195 => 16,  191 => 15,  186 => 14,  176 => 13,  164 => 147,  162 => 91,  155 => 86,  153 => 80,  150 => 79,  148 => 77,  134 => 66,  130 => 65,  126 => 64,  122 => 63,  116 => 59,  114 => 58,  107 => 53,  105 => 42,  78 => 19,  76 => 13,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head style=\"border-left-width: 0 ; border-left-style: solid;\">
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"{{ asset('images/Commun/Logohead.png') }}\">
    <script defer src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/brands.js') }}\"></script>
    <script defer src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/solid.js') }}\"></script>
    <script defer src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/fontawesome.js') }}\"></script>

    {% block StyleSheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/Style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/home/learningPath.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('CSS/User/User.css') }}\">
    {% endblock %}
    <title> {% block Title %}LTC- Learn To Create{% endblock %}</title>
</head>


<body>

<!-- The Nav bar -->
<!--Header -->
    <header>
        <nav class=\"navbar navbar-expand-md navbar-light bg-light scrolled sticky \">

            <button class=\"navbar-toggler collapsed border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsibleNavbar\"  aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                <div class=\"close-icon py-1\">✖</div>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
                <ul id=\"navMenu\" class=\"navbar-nav ml-auto\">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    {% block Activated %}
                    <li class=\"nav-item actived\">
                        <a href=\"#\">DISCOVER</a>
                    </li>
                    <li class=\"nav-item\" id = \"header\">
                        <a class=\"nav-link\" href=\"#\">MY COURSES</a>
                    </li>
                    <li class=\"nav-item\" id = \"header\">
                        <a class=\"nav-link\" href=\"#\">MY PROJECTS</a>
                    </li>
                    {% endblock %}
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li> <div class=\"row dropdown User\">
                        {% block greetings %} <div class=\"col Greeting \"> Welcome , Hadil </div> {% endblock %}
                                <div class=\" col wrapperUser dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"UserIcon\"> <i class=\"fas fa-user\"></i></div>
                                </div>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\" style=\"width : 60% ; left : 5% ;\">
                                <li><a class=\"dropdown-item\" href=\"{{ path('Profile') }}\">My Profile</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('Edit_Profile_Info') }}\">Edit Profile Info</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('Edit_Profile_Password') }}\">Edit Profile Password</a></li>
                                <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Log out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<!--/Header -->

{% block Body %}
{% endblock %}

{% block Scripts %}
    <script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js')}}\"></script>
    <!--<script src=\"/node_modules/jquery/dist/cdn/jquery-2.1.3.min.js\"></script>-->
    <script src=\"{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('Scripts/UserScripts/UserScripts.js')}}\"></script>
{% endblock %}


</body>


{% block Footer %}
    <footer>
        <div id=\"footer\" class=\"container-fluid\">
            <div class=\"col-12\">
                <img src=\"{{ asset('images/Commun/Logohead.png')}}\" alt=\"\">
                <div>
                    Learn in-demand skills in half the time
                </div>
            </div>

            <div class=\"row offset-1\">
                <div class=\"col\">
                    <div class=\"row\"><h3>Learn</h3></div>
                    <div class=\"row\"><a href=\"#\"> Courses</a></div>
                    <div class=\"row\"><a href=\"#\"> Forum</a></div>
                    <div class=\"row\"><a href=\"#\"> Classes </a></div>
                    <div class=\"row\"><a href=\"#\"> Tests </a></div>
                </div>
                <div class=\"col\">
                    <div class=\"row\"><h3>Legal</h3></div>
                    <div class=\"row\"><a href=\"#\"> Privacy Policy </a></div>
                    <div class=\"row\"><a href=\"#\"> Terms of service </a></div>

                </div>
                <div class=\"col\">
                    <div class=\"row\"><h3>More</h3></div>
                    <div class=\"row\"><a href=\"#\"> Our team</a></div>
                    <div class=\"row\"><a href=\"#\"> for bootcamps</a> </div>
                    <div class=\"row\"><a href=\"#\"> FAQ </a></div>
                    <div class=\"row\"><a href=\"#\"> Contact Us </a></div>
                </div>
            </div>
            <div class=\"row contactUsIcons justify-content-between\">
                <div class=\"col-4\">
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/envelope-fill.svg')}}\" alt=\"\">
                    </a>
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/facebook.svg')}}\" alt=\"\">
                    </a>
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/linkedin.svg')}}\" alt=\"\">
                    </a>
                    <a href=\"\">
                        <img  width=\"32\" height = \"32\" src=\"{{ asset('images/Commun/icons/instagram.svg')}}\" alt=\"\">
                    </a>

                </div>
                <div class=\"col-4\">
                    Copyright ©2021 Educative, Inc. All rights reserved

                </div>
            </div>
        </div>
    </footer>
{% endblock %}
</html>

", "User.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\projet-web\\templates\\User.html.twig");
    }
}
