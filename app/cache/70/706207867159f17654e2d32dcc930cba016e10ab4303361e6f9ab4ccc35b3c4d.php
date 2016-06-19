<?php

/* listing.twig */
class __TwigTemplate_14b6dc7017fa4d24f0dce76f53eeec60850eeed466522ffc5038ee48890f3976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "listing.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3feb5402946892f0247bb22e71801a2ca0c510d155284d29f0873060ee0540 = $this->env->getExtension("native_profiler");
        $__internal_fa3feb5402946892f0247bb22e71801a2ca0c510d155284d29f0873060ee0540->enter($__internal_fa3feb5402946892f0247bb22e71801a2ca0c510d155284d29f0873060ee0540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "listing.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3feb5402946892f0247bb22e71801a2ca0c510d155284d29f0873060ee0540->leave($__internal_fa3feb5402946892f0247bb22e71801a2ca0c510d155284d29f0873060ee0540_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0b368fd3cb571ad991c6337b76e9c1c6b31a72bbff8e6bff1cb59d421127c777 = $this->env->getExtension("native_profiler");
        $__internal_0b368fd3cb571ad991c6337b76e9c1c6b31a72bbff8e6bff1cb59d421127c777->enter($__internal_0b368fd3cb571ad991c6337b76e9c1c6b31a72bbff8e6bff1cb59d421127c777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["records"]) ? $context["records"] : null));
        echo "

    <div class=\"post-preview\">
        <a href=\"post.html\">
            <h2 class=\"post-title\">
                Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class=\"post-subtitle\">
                Problems look mighty small from 150 miles up
            </h3>
        </a>
        <p class=\"post-meta\">Posted by <a href=\"#\">Start Bootstrap</a> on September 24, 2014</p>
    </div>

";
        
        $__internal_0b368fd3cb571ad991c6337b76e9c1c6b31a72bbff8e6bff1cb59d421127c777->leave($__internal_0b368fd3cb571ad991c6337b76e9c1c6b31a72bbff8e6bff1cb59d421127c777_prof);

    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* */
/* {% block main %}*/
/* */
/*     {{ dump(records) }}*/
/* */
/*     <div class="post-preview">*/
/*         <a href="post.html">*/
/*             <h2 class="post-title">*/
/*                 Man must explore, and this is exploration at its greatest*/
/*             </h2>*/
/*             <h3 class="post-subtitle">*/
/*                 Problems look mighty small from 150 miles up*/
/*             </h3>*/
/*         </a>*/
/*         <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>*/
/*     </div>*/
/* */
/* {% endblock main %}*/
