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

/* Projects/index2.html.twig */
class __TwigTemplate_5318ad0ccb57a0cb9f65f4f9b9b7d95e111823d13257fbc52caa3ea72e0a7125 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Projects/index2.html.twig"));

        $this->parent = $this->loadTemplate("Projects/ProjectBase.html.twig", "Projects/index2.html.twig", 1);
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
        <iframe width=\"800px\" height=\"280px\" src=\"https://www.youtube.com/embed/ezyeeNi4g2I\" title=\"YouTube video player\" frameborder=\"0\"
                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                allowfullscreen></iframe>
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        You decided to write a book. Maybe you have the perfect idea (so you think, but we’ll get to that), have always wanted to write
        one, and just aren’t sure where the heck to get started!
        The process of writing and publishing a book successfully is so much more than just writing and pushing a button to publish on
        Amazon.</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_Designer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Designer"));

        // line 28
        echo "      <div class=\"header\">
          <h2 class=\"SmallHeading\">A Word from the instructor</h2>
      </div>
      <div class=\"body\">
          <ul class=\"comment-reply list-unstyled\">
              <li class=\"row clearfix\">
                  <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun1-2.fna.fbcdn.net/v/t1.6435-9/125539133_3951746444902522_3667121230094157793_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=174925&_nc_ohc=oVf_2eTqNZgAX9eD4GV&tn=6sKTpi3IV4RrRNNJ&_nc_ht=scontent.ftun1-2.fna&oh=c42723b734c6cc53df7a59abc5eb517e&oe=60CC803C\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                  <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                      <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                          comes out useful </p> <br>
                      <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Hadil Helali </span>
                  </div>
              </li>
      </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_Contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contents"));

        // line 46
        echo "    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">1. Find your “big idea”</a></li>
        <li><a href=\"#Second\">2. Research your genre</a></li>
        <li><a href=\"#Third\">3. Create an outline</a></li>
        <li><a href=\"#Fourth\">4. Start off strong</a></li>
    </ol>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_ProjectDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ProjectDescription"));

        // line 55
        echo "     <div id=\"Intro\">
         <h3 class=\"SubTitle\">Find your “big idea”</h3>
         <p>
             The one thing you absolutely need to write a book is, of course, an idea. If you don't have that,
             you'll never get past the first page of your draft.

             You may already know what you want to write about, or you may be at a total loss. Either way, you
             can settle on a “big book idea” by asking yourself a few simple questions:

             What do I want to write about?
             What do I feel is important to write about?
             Who will want to read about this story/subject?
             Will I be able to carry out this idea effectively?
             Your answers to these questions will help you narrow it down to your best options. For example, if
             you have several different ideas for a book, but only one that you're truly passionate about and feel
             you can pull off, then voilà — there's your premise!

             On the other hand, if you lack ideas, these questions should steer you in a firmer direction. Think
             about the kinds of books you love to read, as well as books that have made a significant impact on you.
             In all likelihood, you'll want to write a book in a similar vein.
         </p>
     </div>

     <div id=\"Second\">
         <h3 class=\"SubTitle\">Research your genre</h3>
         <p>
             Once you've found your big idea, the next step is to research your genre. Again, if you're writing the sort
             of book you like to read, you already have a leg up! Reading books in your genre is by far the best way to
             learn how to write in that genre yourself.

             But if not, you'll want to select a couple of representative titles and analyze them. How long are they and
             how many chapters do they have? What does the story structure look like? What are the major themes? Perhaps
             most importantly, do you think you can produce a book with similar elements?
         </p>
         <h4>Find out what people are reading</h4>
         <p>
             You should also conduct market research on Amazon to determine the most popular books in your genre. If you
             want your book to succeed, you'll have to contend with these bestsellers. Go to the Amazon Best Sellers page
             and find your genre in the lefthand sidebar:
         </p>
         <img  style=\"margin-bottom: 20px\" width=700px src=\"https://blog-cdn.reedsy.com/uploads/2019/11/amazon-best-sellers-genre.jpg\" alt=\"Import\">
         <p>
             Then read those books' blurbs to figure out what really sells. What do they all have in common, and why might
             readers find them appealing? Does your book hold up to these standards?

             Finally, think about how your book can offer something NEW. For example, if you're writing a psychological
             thriller, will there be a particularly sneaky unreliable narrator, or maybe a series of twists that the reader
             never sees coming? If you're writing a nonfiction book, do you have a unique take on the subject, or a particularly
             deep well of knowledge? And so on.
         </p>
     </div>

     <div id=\"Third\">
         <h3 class=\"SubTitle\">Create an outline</h3>
         <img style=\"margin: 5px\" width=700px src=\"https://blog-cdn.reedsy.com/uploads/2017/07/climax.jpg\" alt=\"Import\">
         <p>
             If you want to write a great book, you need to outline it first. This is especially important if it's your first
             book, since you need a solid blueprint to rely on when you get stuck! (Because believe us, you will get stuck.)

             So how do you go about creating that outline for your book? We actually have a whole other post on the subject,
             but here are the essentials:

             Pick a format that works for you. There are so many different types of outlines: the free-flowing mind map, the
             rigorous chapter-and-scene outline, the character-based outline, and so on. If one approach doesn't work for you,
             try another! Any kind of plan is better than none.
             Have a beginning, middle, and end. Way too many authors go into writing a book with a strong notion of how their
             story should start... yet their middle is murky and their ending, nonexistent. Take this time to flesh them out
             and connect them to one another. Remember: the best books have endings that feel “earned,” so you should try to
             be building toward it from the start!
             Consider your conflict points. Conflict is at the heart of any good book — it draws in the reader, conjures tension
             and emotion, and ultimately reflects the themes and/or message you want to convey. You don't have to know exactly
             where your conflict will manifest, but you should have a pretty good grasp of how it works throughout your book.
             Get to know your characters. If you haven't done much character development yet, your outline is the perfect opportunity
             to do so. How will your characters interact in the story, and how will these interactions demonstrate who they are and
             what matters to them?
         </p>
     </div>

     <div id=\"Fourth\">
         <h3 class=\"SubTitle\">Start off strong</h3>
         <p>
             Let's get into the actual writing and make a dent in your first draft. One of the most important parts of writing a book
             is starting the story! It's no exaggeration to say your first few pages can make or break your book — if these pages aren't
             good enough, many readers will lose interest, possibly never returning to your book again.
         </p>
     </div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_Galerie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Galerie"));

        // line 144
        echo "     <div class=\"card\">
         <div class=\"header\">
             <h2 class=\"SmallHeading\">Galerie</h2>
         </div>
         <div class=\"body widget popular-post\">
             <div class=\"row\">
                 <div class=\"col-lg-12\">
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Focus on substance</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://blog-cdn.reedsy.com/uploads/2019/11/substance-iceberg.jpg\" alt=\"Awesome Image\">
                         </div>
                     </div>
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Illustration</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://blog-cdn.reedsy.com/directories/admin/featured_image/253/medium_7625fa5076cdcb66486012ac5445340b.jpg\" alt=\"Awesome Image\">
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

    // line 171
    public function block_JoinProject($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JoinProject"));

        // line 172
        echo "     <div><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddProject", ["num" => 2, "ProjectName" => (isset($context["ProjectName"]) || array_key_exists("ProjectName", $context) ? $context["ProjectName"] : (function () { throw new RuntimeError('Variable "ProjectName" does not exist.', 172, $this->source); })()), "Field" => (isset($context["Field"]) || array_key_exists("Field", $context) ? $context["Field"] : (function () { throw new RuntimeError('Variable "Field" does not exist.', 172, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn-grad\">Join the project</a></div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Projects/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 172,  383 => 171,  348 => 144,  338 => 143,  242 => 55,  232 => 54,  216 => 46,  206 => 45,  182 => 28,  172 => 27,  151 => 14,  141 => 13,  122 => 11,  109 => 8,  100 => 6,  95 => 5,  85 => 4,  66 => 2,  43 => 1,);
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
        <iframe width=\"800px\" height=\"280px\" src=\"https://www.youtube.com/embed/ezyeeNi4g2I\" title=\"YouTube video player\" frameborder=\"0\"
                allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\"
                allowfullscreen></iframe>
    </div>
    <h2 class=\"SmallHeading\">Quick discription</h2>
    <p style=\"border: white solid 1px ; border-radius: 15px ; padding: 10px; \">
        You decided to write a book. Maybe you have the perfect idea (so you think, but we’ll get to that), have always wanted to write
        one, and just aren’t sure where the heck to get started!
        The process of writing and publishing a book successfully is so much more than just writing and pushing a button to publish on
        Amazon.</p>
{% endblock %}

  {% block Designer %}
      <div class=\"header\">
          <h2 class=\"SmallHeading\">A Word from the instructor</h2>
      </div>
      <div class=\"body\">
          <ul class=\"comment-reply list-unstyled\">
              <li class=\"row clearfix\">
                  <div class=\"icon-box col-md-4\"><img class=\"img-fluid img-thumbnail\"  id=\"DesignerPic\" src=\"https://scontent.ftun1-2.fna.fbcdn.net/v/t1.6435-9/125539133_3951746444902522_3667121230094157793_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=174925&_nc_ohc=oVf_2eTqNZgAX9eD4GV&tn=6sKTpi3IV4RrRNNJ&_nc_ht=scontent.ftun1-2.fna&oh=c42723b734c6cc53df7a59abc5eb517e&oe=60CC803C\" alt=\"Designer Pic\" style=\"border-radius: 50%\" width=\"150px\" height=\"150px\"></div>
                  <div class=\"text-box col-md-7\" style=\"margin: 10px 0 0 30px ; font-weight: normal; color: #1a1a1a\">
                      <p> I hope that you find this project as useful and as interesting . This project requires a lot of hard work and I hope it
                          comes out useful </p> <br>
                      <span id=\"DesignerWord\"> <i class=\"fas fa-splotch\"></i> - Hadil Helali </span>
                  </div>
              </li>
      </div>
  {% endblock %}


{% block Contents %}
    <ol class=\"list-unstyled m-b-0\" id=\"Content\" >
        <li><a href=\"#Intro\">1. Find your “big idea”</a></li>
        <li><a href=\"#Second\">2. Research your genre</a></li>
        <li><a href=\"#Third\">3. Create an outline</a></li>
        <li><a href=\"#Fourth\">4. Start off strong</a></li>
    </ol>
{% endblock %}

 {% block ProjectDescription %}
     <div id=\"Intro\">
         <h3 class=\"SubTitle\">Find your “big idea”</h3>
         <p>
             The one thing you absolutely need to write a book is, of course, an idea. If you don't have that,
             you'll never get past the first page of your draft.

             You may already know what you want to write about, or you may be at a total loss. Either way, you
             can settle on a “big book idea” by asking yourself a few simple questions:

             What do I want to write about?
             What do I feel is important to write about?
             Who will want to read about this story/subject?
             Will I be able to carry out this idea effectively?
             Your answers to these questions will help you narrow it down to your best options. For example, if
             you have several different ideas for a book, but only one that you're truly passionate about and feel
             you can pull off, then voilà — there's your premise!

             On the other hand, if you lack ideas, these questions should steer you in a firmer direction. Think
             about the kinds of books you love to read, as well as books that have made a significant impact on you.
             In all likelihood, you'll want to write a book in a similar vein.
         </p>
     </div>

     <div id=\"Second\">
         <h3 class=\"SubTitle\">Research your genre</h3>
         <p>
             Once you've found your big idea, the next step is to research your genre. Again, if you're writing the sort
             of book you like to read, you already have a leg up! Reading books in your genre is by far the best way to
             learn how to write in that genre yourself.

             But if not, you'll want to select a couple of representative titles and analyze them. How long are they and
             how many chapters do they have? What does the story structure look like? What are the major themes? Perhaps
             most importantly, do you think you can produce a book with similar elements?
         </p>
         <h4>Find out what people are reading</h4>
         <p>
             You should also conduct market research on Amazon to determine the most popular books in your genre. If you
             want your book to succeed, you'll have to contend with these bestsellers. Go to the Amazon Best Sellers page
             and find your genre in the lefthand sidebar:
         </p>
         <img  style=\"margin-bottom: 20px\" width=700px src=\"https://blog-cdn.reedsy.com/uploads/2019/11/amazon-best-sellers-genre.jpg\" alt=\"Import\">
         <p>
             Then read those books' blurbs to figure out what really sells. What do they all have in common, and why might
             readers find them appealing? Does your book hold up to these standards?

             Finally, think about how your book can offer something NEW. For example, if you're writing a psychological
             thriller, will there be a particularly sneaky unreliable narrator, or maybe a series of twists that the reader
             never sees coming? If you're writing a nonfiction book, do you have a unique take on the subject, or a particularly
             deep well of knowledge? And so on.
         </p>
     </div>

     <div id=\"Third\">
         <h3 class=\"SubTitle\">Create an outline</h3>
         <img style=\"margin: 5px\" width=700px src=\"https://blog-cdn.reedsy.com/uploads/2017/07/climax.jpg\" alt=\"Import\">
         <p>
             If you want to write a great book, you need to outline it first. This is especially important if it's your first
             book, since you need a solid blueprint to rely on when you get stuck! (Because believe us, you will get stuck.)

             So how do you go about creating that outline for your book? We actually have a whole other post on the subject,
             but here are the essentials:

             Pick a format that works for you. There are so many different types of outlines: the free-flowing mind map, the
             rigorous chapter-and-scene outline, the character-based outline, and so on. If one approach doesn't work for you,
             try another! Any kind of plan is better than none.
             Have a beginning, middle, and end. Way too many authors go into writing a book with a strong notion of how their
             story should start... yet their middle is murky and their ending, nonexistent. Take this time to flesh them out
             and connect them to one another. Remember: the best books have endings that feel “earned,” so you should try to
             be building toward it from the start!
             Consider your conflict points. Conflict is at the heart of any good book — it draws in the reader, conjures tension
             and emotion, and ultimately reflects the themes and/or message you want to convey. You don't have to know exactly
             where your conflict will manifest, but you should have a pretty good grasp of how it works throughout your book.
             Get to know your characters. If you haven't done much character development yet, your outline is the perfect opportunity
             to do so. How will your characters interact in the story, and how will these interactions demonstrate who they are and
             what matters to them?
         </p>
     </div>

     <div id=\"Fourth\">
         <h3 class=\"SubTitle\">Start off strong</h3>
         <p>
             Let's get into the actual writing and make a dent in your first draft. One of the most important parts of writing a book
             is starting the story! It's no exaggeration to say your first few pages can make or break your book — if these pages aren't
             good enough, many readers will lose interest, possibly never returning to your book again.
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
                         <p class=\"m-b-0\">Focus on substance</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://blog-cdn.reedsy.com/uploads/2019/11/substance-iceberg.jpg\" alt=\"Awesome Image\">
                         </div>
                     </div>
                     <div class=\"single_post\">
                         <p class=\"m-b-0\">Illustration</p>

                         <div class=\"img-post\">
                             <img class=\"Galerie\" style=\"height: 180px\" src=\"https://blog-cdn.reedsy.com/directories/admin/featured_image/253/medium_7625fa5076cdcb66486012ac5445340b.jpg\" alt=\"Awesome Image\">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 {% endblock %}

 {% block JoinProject %}
     <div><a href=\"{{path('AddProject',{'num': 2 ,'ProjectName' : ProjectName , 'Field': Field})}}\" class=\"btn-grad\">Join the project</a></div>
 {% endblock %}", "Projects/index2.html.twig", "D:\\XAMPP\\htdocs\\projetWeb\\templates\\Projects\\index2.html.twig");
    }
}
