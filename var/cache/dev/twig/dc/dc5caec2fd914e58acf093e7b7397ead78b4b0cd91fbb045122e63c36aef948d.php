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

/* Projects/index0.html.twig */
class __TwigTemplate_0982084c57eb7134dbe513d95cc209c406353bae95ba1470391433262d969ebb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Title' => [$this, 'block_Title'],
            'ProjectTitle' => [$this, 'block_ProjectTitle'],
            'ProjectField' => [$this, 'block_ProjectField'],
            'Description' => [$this, 'block_Description'],
            'Designer' => [$this, 'block_Designer'],
            'Contents' => [$this, 'block_Contents'],
            'ProjectDescription' => [$this, 'block_ProjectDescription'],
            'Galerie' => [$this, 'block_Galerie'],
            'JoinProject' => [$this, 'block_JoinProject'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Projects/ProjectBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index0.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index0.html.twig"));

        $this->parent = $this->loadTemplate("Projects/ProjectBase.html.twig", "Projects/index0.html.twig", 1);
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

        echo twig_escape_filter($this->env, (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 2, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_ProjectTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectTitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectTitle"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", [], "any", false, false, false, 5), "flashbag", [], "any", false, false, false, 5), "get", [0 => "success"], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert alert-success\"> ";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <h1 id=\"Project-title\">";
        echo twig_escape_filter($this->env, (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_ProjectField($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectField"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectField"));

        echo twig_escape_filter($this->env, (isset($context["Field"]) || array_key_exists("Field", $context) ? $context["Field"] : (function () { throw new RuntimeError('Variable "Field" does not exist.', 11, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_Description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Description"));

        // line 14
        echo "    <div class=\"img-post\">
    <img class=\"d-block img-fluid\" height=\"280px\" width=\"800px\"  src=\"https://i.morioh.com/bf98427722.png\" alt=\"First slide\">
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        Build interactive web applications with Train Logistic Regression, Random Forest, and Support Vector Classifiers
        using scikit-learnPlot evaluation metrics for binary classification algorithms</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_Designer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        // line 24
        echo "      <div class=\"header\">
     <h2 class=\"SmallHeading\">A Word from the instructor</h2>
     </div>
     <div class=\"body\">
         <ul class=\"comment-reply list-unstyled\">
             <li class=\"row clearfix\">
                 <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun1-2.fna.fbcdn.net/v/t1.6435-9/143719846_3628620507259134_8873427743438782874_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=8OW-Ighb9icAX_UgAd4&tn=6sKTpi3IV4RrRNNJ&_nc_ht=scontent.ftun1-2.fna&oh=61cf6021e6f354b9e3439da24dad98c5&oe=60CC49BE\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                 <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                     <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                     comes out useful </p> <br>
                     <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Si Racem Ben Rhayem </span>
                 </div>
             </li>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_Contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        // line 42
        echo "    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">1 Introduction</a></li>
        <li><a href=\"#Second\">2 Building Machine Learning Web App with Stream and Python</a></li>
        <li><a href=\"#Third\">3 Deploying Machine Learning Web App on Heroku</a></li>
        <li><a href=\"#Fourth\">4 Conclusion</a></li>
    </ol>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_ProjectDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        // line 51
        echo "     <div id=\"Intro\">
         <h3 class=\"SubTitle\">Introduction</h3>
         <p>
             Nowadays it is not very uncommon to see enthusiasts create ML models that can do really cool things.
             However, they still struggle to build a machine learning web application so that it can be interacted
             with by other people over the internet. In this tutorial, we will give you a step by step guide on how
             to build a Machine Learning Web App with Streamlit and Python. We will then deploy this Web App on the
             Heroku platform so that it can be accessed by anyone on the internet.
         </p>
     </div>

     <div id=\"Second\">
         <h3 class=\"SubTitle\">Building Machine Learning Web App with Stream and Python</h3>
         <h4>Import Libraries</h4>
         <p>
             First of all, we will be importing the necessary libraries. For the purpose of the web application,
             streamlit is imported as st. As we are going to perform face detection through the OpenCV library,
             we have to import the cv2 library. Along with this, the numpy library is imported for performing
             mathematical operations and also the os library for other relevant operations.
         </p>
         <img  src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-1.png\" alt=\"Import\">

         <h4>Load Pretrained Face Detection Model</h4>
         <p>
             Here in this practical implementation, we will use pre-trained haarcascade models for detecting
             faces, eyes, and smiles in an image. The models are loaded through the OpenCV library.
         </p>
         <img style=\"margin: 5px\" width=700px src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-2.png\" alt=\"Import\">

         <h4>Custom Function for loading CSS file</h4>
         <p>
             The following function is built for fetching the CSS file, through this file we can make desired CSS
             changes to the appearance of the web page.<br>
             <br>
             To read the contents of the file markdown function of Streamit is used. This can sometimes cause an
             error and for this reason, we have passed the unsafe_allow_html parameter as True.
         </p>
         <img style=\"margin: 5px\" width=700px src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-3.png\" alt=\"Import\">

     </div>

     <div id=\"Third\">
         <h3 class=\"SubTitle\">Deploying Machine Learning Web App on Heroku</h3>
         <p>
             In this second half, we will look at the steps that must be followed for deploying an application to Heroku.
             One must follow the steps given below for successfully deploying the application.
         </p>
         <h4>Downloading and Installing the Heroku CLI</h4>
         <p>
             Heroku has a user interface for uploading the files and deploying the project but the preferred method is
             through Heroku CLI (Command Line Interface). We can download the Heroku CLI from this here.<br>
             <br>
             Once downloaded, the installation of the Heroku CLI should be done. To verify if the installation has been
             done or not, you can open the command prompt and type the following command.<br>
             -> heroku –version
             The output should be as shown below.<br>
         </p>
         <img style=\"margin: 5px\" width=700px src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-15.png\" alt=\"Import\">
     </div>

     <div id=\"Fourth\">
         <h3 class=\"SubTitle\">Conclution</h3>
         <p>
             I hope, you found this article very useful where we showed you how to build a Machine Learning Web App
             with Streamlit and Python. We also gave a detailed explanation of how to deploy the Streamlit application
             on Heroku so that it can be accessed over the internet.
         </p>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_Galerie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        // line 122
        echo "     <div class=\"card\">
         <div class=\"header\">
             <h2 class=\"SmallHeading\">Galerie</h2>
         </div>
         <div class=\"body widget popular-post\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Project Overview and Demo</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" src=\"https://d15cw65ipctsrr.cloudfront.net/11/74bc959e494e7b826ce5dfc5784e66/Annotation-2020-05-13-204346.png\" alt=\"Awesome Image\">
                         </div>
                     </div>
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Project Overview and Demo</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" src=\"https://d15cw65ipctsrr.cloudfront.net/e5/52042da1f946039be497a0e754f9c8/img-b8c50964-de66-4b4a-a8cc-806f52180f94-a2a3268a-11bb-4511-9268-a4b4ae74e212-PpJrpYOr-20200513153425.png\" alt=\"Awesome Image\">
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

    // line 149
    public function block_JoinProject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        // line 150
        echo "     <div><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddProject", ["num" => 0, "ProjectName" => (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 150, $this->source); })()), "Field" => (isset($context["Field"]) || array_key_exists("Field", $context) ? $context["Field"] : (function () { throw new RuntimeError('Variable "Field" does not exist.', 150, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn-grad\">Join the project</a></div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Projects/index0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 150,  361 => 149,  326 => 122,  316 => 121,  238 => 51,  228 => 50,  212 => 42,  202 => 41,  178 => 24,  168 => 23,  151 => 14,  141 => 13,  122 => 11,  109 => 8,  100 => 6,  95 => 5,  85 => 4,  66 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Projects/ProjectBase.html.twig'%}
{% block Title %}{{ ProjectName }}{% endblock %}

{% block ProjectTitle %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\"> {{ flashMessage }}</div>
    {% endfor %}
    <h1 id=\"Project-title\">{{ ProjectName }}</h1>
{% endblock %}

{% block ProjectField %}{{ Field }}{% endblock %}

{% block Description %}
    <div class=\"img-post\">
    <img class=\"d-block img-fluid\" height=\"280px\" width=\"800px\"  src=\"https://i.morioh.com/bf98427722.png\" alt=\"First slide\">
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        Build interactive web applications with Train Logistic Regression, Random Forest, and Support Vector Classifiers
        using scikit-learnPlot evaluation metrics for binary classification algorithms</p>
{% endblock %}

  {% block Designer %}
      <div class=\"header\">
     <h2 class=\"SmallHeading\">A Word from the instructor</h2>
     </div>
     <div class=\"body\">
         <ul class=\"comment-reply list-unstyled\">
             <li class=\"row clearfix\">
                 <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun1-2.fna.fbcdn.net/v/t1.6435-9/143719846_3628620507259134_8873427743438782874_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=8OW-Ighb9icAX_UgAd4&tn=6sKTpi3IV4RrRNNJ&_nc_ht=scontent.ftun1-2.fna&oh=61cf6021e6f354b9e3439da24dad98c5&oe=60CC49BE\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                 <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                     <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                     comes out useful </p> <br>
                     <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Si Racem Ben Rhayem </span>
                 </div>
             </li>
     </div>
 {% endblock %}


{% block Contents %}
    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">1 Introduction</a></li>
        <li><a href=\"#Second\">2 Building Machine Learning Web App with Stream and Python</a></li>
        <li><a href=\"#Third\">3 Deploying Machine Learning Web App on Heroku</a></li>
        <li><a href=\"#Fourth\">4 Conclusion</a></li>
    </ol>
{% endblock %}

 {% block ProjectDescription %}
     <div id=\"Intro\">
         <h3 class=\"SubTitle\">Introduction</h3>
         <p>
             Nowadays it is not very uncommon to see enthusiasts create ML models that can do really cool things.
             However, they still struggle to build a machine learning web application so that it can be interacted
             with by other people over the internet. In this tutorial, we will give you a step by step guide on how
             to build a Machine Learning Web App with Streamlit and Python. We will then deploy this Web App on the
             Heroku platform so that it can be accessed by anyone on the internet.
         </p>
     </div>

     <div id=\"Second\">
         <h3 class=\"SubTitle\">Building Machine Learning Web App with Stream and Python</h3>
         <h4>Import Libraries</h4>
         <p>
             First of all, we will be importing the necessary libraries. For the purpose of the web application,
             streamlit is imported as st. As we are going to perform face detection through the OpenCV library,
             we have to import the cv2 library. Along with this, the numpy library is imported for performing
             mathematical operations and also the os library for other relevant operations.
         </p>
         <img  src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-1.png\" alt=\"Import\">

         <h4>Load Pretrained Face Detection Model</h4>
         <p>
             Here in this practical implementation, we will use pre-trained haarcascade models for detecting
             faces, eyes, and smiles in an image. The models are loaded through the OpenCV library.
         </p>
         <img style=\"margin: 5px\" width=700px src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-2.png\" alt=\"Import\">

         <h4>Custom Function for loading CSS file</h4>
         <p>
             The following function is built for fetching the CSS file, through this file we can make desired CSS
             changes to the appearance of the web page.<br>
             <br>
             To read the contents of the file markdown function of Streamit is used. This can sometimes cause an
             error and for this reason, we have passed the unsafe_allow_html parameter as True.
         </p>
         <img style=\"margin: 5px\" width=700px src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-3.png\" alt=\"Import\">

     </div>

     <div id=\"Third\">
         <h3 class=\"SubTitle\">Deploying Machine Learning Web App on Heroku</h3>
         <p>
             In this second half, we will look at the steps that must be followed for deploying an application to Heroku.
             One must follow the steps given below for successfully deploying the application.
         </p>
         <h4>Downloading and Installing the Heroku CLI</h4>
         <p>
             Heroku has a user interface for uploading the files and deploying the project but the preferred method is
             through Heroku CLI (Command Line Interface). We can download the Heroku CLI from this here.<br>
             <br>
             Once downloaded, the installation of the Heroku CLI should be done. To verify if the installation has been
             done or not, you can open the command prompt and type the following command.<br>
             -> heroku –version
             The output should be as shown below.<br>
         </p>
         <img style=\"margin: 5px\" width=700px src=\"https://machinelearningknowledge.ai/wp-content/uploads/2020/12/Fig-15.png\" alt=\"Import\">
     </div>

     <div id=\"Fourth\">
         <h3 class=\"SubTitle\">Conclution</h3>
         <p>
             I hope, you found this article very useful where we showed you how to build a Machine Learning Web App
             with Streamlit and Python. We also gave a detailed explanation of how to deploy the Streamlit application
             on Heroku so that it can be accessed over the internet.
         </p>
     </div>
 {% endblock %}

 {% block Galerie %}
     <div class=\"card\">
         <div class=\"header\">
             <h2 class=\"SmallHeading\">Galerie</h2>
         </div>
         <div class=\"body widget popular-post\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Project Overview and Demo</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" src=\"https://d15cw65ipctsrr.cloudfront.net/11/74bc959e494e7b826ce5dfc5784e66/Annotation-2020-05-13-204346.png\" alt=\"Awesome Image\">
                         </div>
                     </div>
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Project Overview and Demo</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" src=\"https://d15cw65ipctsrr.cloudfront.net/e5/52042da1f946039be497a0e754f9c8/img-b8c50964-de66-4b4a-a8cc-806f52180f94-a2a3268a-11bb-4511-9268-a4b4ae74e212-PpJrpYOr-20200513153425.png\" alt=\"Awesome Image\">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 {% endblock %}

 {% block JoinProject %}
     <div><a href=\"{{path('AddProject',{'num': 0 ,'ProjectName' : ProjectName , 'Field': Field})}}\" class=\"btn-grad\">Join the project</a></div>
 {% endblock %}

", "Projects/index0.html.twig", "C:\\Users\\zayne\\projet-web\\templates\\Projects\\index0.html.twig");
    }
}
