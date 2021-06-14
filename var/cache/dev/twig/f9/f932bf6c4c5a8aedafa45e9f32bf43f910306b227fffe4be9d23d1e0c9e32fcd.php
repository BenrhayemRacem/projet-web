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

/* Projects/index4.html.twig */
class __TwigTemplate_3d6e92ebeffab546034dacdb8d9033aaa820033ae358553617eeb2be66e1a607 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index4.html.twig"));

        $this->parent = $this->loadTemplate("Projects/ProjectBase.html.twig", "Projects/index4.html.twig", 1);
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
        <img class=\"d-block img-fluid\" height=\"280px\" width=\"800px\"  src=\"https://songtown.com/wp-content/uploads/2017/04/69465831_s.jpg\" alt=\"First slide\">
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        Before you pick up an instrument, you need to ask yourself one question: “why am I writing this song?” As song that lacks purpose
        is a song that won’t connect with anybody — yourself included. Inspiration can come from anywhere.
        Here you will be guided from finding inspiration to performing your first song .</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_Designer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        // line 25
        echo "      <div class=\"header\">
          <h2 class=\"SmallHeading\">A Word from the instructor</h2>
      </div>
      <div class=\"body\">
          <ul class=\"comment-reply list-unstyled\">
              <li class=\"row clearfix\">
                  <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun1-2.fna.fbcdn.net/v/t1.6435-9/100958699_1196293527391782_5903049647722594304_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=bPZFQAbpNBQAX_tgReK&_nc_ht=scontent.ftun1-2.fna&oh=7d924f13322ada82c89ed230d30b0636&oe=60CB26F8\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                  <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                      <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                          comes out useful </p> <br>
                      <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Dali Naim </span>
                  </div>
              </li>
      </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_Contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        // line 43
        echo "    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">1.Start with a concept or idea that means something to you.</a></li>
        <li><a href=\"#Second\">2.Turning your concept or idea into a song title.</a></li>
        <li><a href=\"#Third\">3.Map out your idea</a></li>
        <li><a href=\"#Fourth\">4.Choose a feel or groove to begin writing to</a></li>
        <li><a href=\"#Fifth\">5.Begin to write your lyric</a></li>
    </ol>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_ProjectDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        // line 53
        echo "     <div id=\"Intro\">
         <h3 class=\"SubTitle\">Start with a concept or idea that means something to you.</h3>
         <p>
             If you don’t care about the idea, it’s unlikely that anyone else will either. It’s always best to write about
             something that makes you feel something.
         </p>
     </div>

     <div id=\"Second\">
         <h3 class=\"SubTitle\">Turning your concept or idea into a song title</h3>
         <p>
             If you are wanting to write about your first love, brainstorm aspects of that story that would be big enough
             to write a song about. Titles like this might work:

             First Kiss

             Young Love

             One Summer

             You are looking for a title that makes a listener want to hear the song. It also needs to be a title that represents
             the BIG idea or emotion that you are going to write about.
         </p>
     </div>

     <div id=\"Third\">
         <h3 class=\"SubTitle\">Map out your idea</h3>
         <p>
             Write a one-sentence summary of what you want to say in each piece of the song. In my #1 song “Must Be Doin’
             Somethin’ Right”, our map was:

             Verse 1 – Women are hard for men to understand

             Chorus – I must be doing something right because I’m getting good feedback from you

             Verse 2 – Show me how to love you better

             The most simple and direct you make your summary sentences, the easier it will be to write the song. A book
             like Song Building can really help with this aspect and get you writing better quickly.
         </p>
     </div>

     <div id=\"Fourth\">
         <h3 class=\"SubTitle\">Choose a feel or groove to begin writing to</h3>
         <p>
             Explore different feels until you find one that fits the message you are trying to convey with your song.
             A slow, minor feel will not usually work with a happy, fun idea or emotion. You want to find a melody and feel
             that fits perfectly with the lyric you are going to write. Remebr when you are learning how to write your first
             song, it’s a fun experiment. There is no right or wrong at this stage!
         </p>
     </div>

     <div id=\"Fifth\">
         <h3 class=\"SubTitle\">Begin to write your lyric</h3>
         <p>
             Make sure that each line contributes to the idea that you laid out in your map. If you come up with a great line
             that doesn’t fit what you are trying to say, jot it down to use in another song. You want to stay as close to your
             intended message as you can in each section. That will help ensure that your listener is going to get from your song
             exactly what you intend.
         </p>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_Galerie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        // line 117
        echo "     <div class=\"card\">
         <div class=\"header\">
             <h2 class=\"SmallHeading\">Galerie</h2>
         </div>
         <div class=\"body widget popular-post\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Album example</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://d2xkd1fof6iiv9.cloudfront.net/images/courses/1380/169_820.jpg\" alt=\"Awesome Image\">
                         </div>
                     </div>
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Illustration</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://cdn.my-mooc.com/media/cache/catalog_product_458x275/mooc/logo/29d3cc687093e7b9aae71cb5b837884463f225de.jpg\" alt=\"Awesome Image\">
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

    // line 144
    public function block_JoinProject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        // line 145
        echo "     <div><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddProject", ["num" => 4, "ProjectName" => (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 145, $this->source); })()), "Field" => (isset($context["Field"]) || array_key_exists("Field", $context) ? $context["Field"] : (function () { throw new RuntimeError('Variable "Field" does not exist.', 145, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn-grad\">Join the project</a></div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Projects/index4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 145,  356 => 144,  321 => 117,  311 => 116,  240 => 53,  230 => 52,  213 => 43,  203 => 42,  179 => 25,  169 => 24,  151 => 14,  141 => 13,  122 => 11,  109 => 8,  100 => 6,  95 => 5,  85 => 4,  66 => 2,  43 => 1,);
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
        <img class=\"d-block img-fluid\" height=\"280px\" width=\"800px\"  src=\"https://songtown.com/wp-content/uploads/2017/04/69465831_s.jpg\" alt=\"First slide\">
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        Before you pick up an instrument, you need to ask yourself one question: “why am I writing this song?” As song that lacks purpose
        is a song that won’t connect with anybody — yourself included. Inspiration can come from anywhere.
        Here you will be guided from finding inspiration to performing your first song .</p>
{% endblock %}

  {% block Designer %}
      <div class=\"header\">
          <h2 class=\"SmallHeading\">A Word from the instructor</h2>
      </div>
      <div class=\"body\">
          <ul class=\"comment-reply list-unstyled\">
              <li class=\"row clearfix\">
                  <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun1-2.fna.fbcdn.net/v/t1.6435-9/100958699_1196293527391782_5903049647722594304_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=bPZFQAbpNBQAX_tgReK&_nc_ht=scontent.ftun1-2.fna&oh=7d924f13322ada82c89ed230d30b0636&oe=60CB26F8\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                  <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                      <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                          comes out useful </p> <br>
                      <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Dali Naim </span>
                  </div>
              </li>
      </div>
  {% endblock %}


{% block Contents %}
    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">1.Start with a concept or idea that means something to you.</a></li>
        <li><a href=\"#Second\">2.Turning your concept or idea into a song title.</a></li>
        <li><a href=\"#Third\">3.Map out your idea</a></li>
        <li><a href=\"#Fourth\">4.Choose a feel or groove to begin writing to</a></li>
        <li><a href=\"#Fifth\">5.Begin to write your lyric</a></li>
    </ol>
{% endblock %}

 {% block ProjectDescription %}
     <div id=\"Intro\">
         <h3 class=\"SubTitle\">Start with a concept or idea that means something to you.</h3>
         <p>
             If you don’t care about the idea, it’s unlikely that anyone else will either. It’s always best to write about
             something that makes you feel something.
         </p>
     </div>

     <div id=\"Second\">
         <h3 class=\"SubTitle\">Turning your concept or idea into a song title</h3>
         <p>
             If you are wanting to write about your first love, brainstorm aspects of that story that would be big enough
             to write a song about. Titles like this might work:

             First Kiss

             Young Love

             One Summer

             You are looking for a title that makes a listener want to hear the song. It also needs to be a title that represents
             the BIG idea or emotion that you are going to write about.
         </p>
     </div>

     <div id=\"Third\">
         <h3 class=\"SubTitle\">Map out your idea</h3>
         <p>
             Write a one-sentence summary of what you want to say in each piece of the song. In my #1 song “Must Be Doin’
             Somethin’ Right”, our map was:

             Verse 1 – Women are hard for men to understand

             Chorus – I must be doing something right because I’m getting good feedback from you

             Verse 2 – Show me how to love you better

             The most simple and direct you make your summary sentences, the easier it will be to write the song. A book
             like Song Building can really help with this aspect and get you writing better quickly.
         </p>
     </div>

     <div id=\"Fourth\">
         <h3 class=\"SubTitle\">Choose a feel or groove to begin writing to</h3>
         <p>
             Explore different feels until you find one that fits the message you are trying to convey with your song.
             A slow, minor feel will not usually work with a happy, fun idea or emotion. You want to find a melody and feel
             that fits perfectly with the lyric you are going to write. Remebr when you are learning how to write your first
             song, it’s a fun experiment. There is no right or wrong at this stage!
         </p>
     </div>

     <div id=\"Fifth\">
         <h3 class=\"SubTitle\">Begin to write your lyric</h3>
         <p>
             Make sure that each line contributes to the idea that you laid out in your map. If you come up with a great line
             that doesn’t fit what you are trying to say, jot it down to use in another song. You want to stay as close to your
             intended message as you can in each section. That will help ensure that your listener is going to get from your song
             exactly what you intend.
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
                         <p class=\"m-b-0\">Album example</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://d2xkd1fof6iiv9.cloudfront.net/images/courses/1380/169_820.jpg\" alt=\"Awesome Image\">
                         </div>
                     </div>
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Illustration</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://cdn.my-mooc.com/media/cache/catalog_product_458x275/mooc/logo/29d3cc687093e7b9aae71cb5b837884463f225de.jpg\" alt=\"Awesome Image\">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 {% endblock %}

 {% block JoinProject %}
     <div><a href=\"{{path('AddProject',{'num': 4 ,'ProjectName' : ProjectName , 'Field': Field})}}\" class=\"btn-grad\">Join the project</a></div>
 {% endblock %}

", "Projects/index4.html.twig", "C:\\Users\\DELL\\OneDrive\\Bureau\\GL2-Sem2\\DeveloppementWeb\\projet-web\\templates\\Projects\\index4.html.twig");
    }
}
