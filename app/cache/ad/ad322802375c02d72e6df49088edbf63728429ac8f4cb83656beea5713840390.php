<?php

/* index.twig */
class __TwigTemplate_79155e0d38676a325ddbacde1dd4b84cc32d0698b15230e276951aad349bdc37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "index.twig", 1);
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
        $__internal_bfe13fb07ec9f7bdb3e0fc014651ee719558881dbd158423924b97f0297317cc = $this->env->getExtension("native_profiler");
        $__internal_bfe13fb07ec9f7bdb3e0fc014651ee719558881dbd158423924b97f0297317cc->enter($__internal_bfe13fb07ec9f7bdb3e0fc014651ee719558881dbd158423924b97f0297317cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe13fb07ec9f7bdb3e0fc014651ee719558881dbd158423924b97f0297317cc->leave($__internal_bfe13fb07ec9f7bdb3e0fc014651ee719558881dbd158423924b97f0297317cc_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_0f022bd07522cb584be2627ce093a98a21fa945a4a6f09808b318ee46d2a9e78 = $this->env->getExtension("native_profiler");
        $__internal_0f022bd07522cb584be2627ce093a98a21fa945a4a6f09808b318ee46d2a9e78->enter($__internal_0f022bd07522cb584be2627ce093a98a21fa945a4a6f09808b318ee46d2a9e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            
            <h2 class=\"text-center page-header\">
                Últimas noticias
            </h2>
            
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
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class=\"post-meta\">Posted by <a href=\"#\">Start Bootstrap</a> on September 18, 2014</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class=\"post-subtitle\">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by <a href=\"#\">Start Bootstrap</a> on August 24, 2014</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Failure is not an option
                    </h2>
                    <h3 class=\"post-subtitle\">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by <a href=\"#\">Start Bootstrap</a> on July 8, 2014</p>
            </div>
            <hr>
            <!-- Pager -->
            <ul class=\"pager\">
                <li class=\"next\">
                    <a href=\"#\">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

";
        
        $__internal_0f022bd07522cb584be2627ce093a98a21fa945a4a6f09808b318ee46d2a9e78->leave($__internal_0f022bd07522cb584be2627ce093a98a21fa945a4a6f09808b318ee46d2a9e78_prof);

    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             */
/*             <h2 class="text-center page-header">*/
/*                 Últimas noticias*/
/*             </h2>*/
/*             */
/*             <div class="post-preview">*/
/*                 <a href="post.html">*/
/*                     <h2 class="post-title">*/
/*                         Man must explore, and this is exploration at its greatest*/
/*                     </h2>*/
/*                     <h3 class="post-subtitle">*/
/*                         Problems look mighty small from 150 miles up*/
/*                     </h3>*/
/*                 </a>*/
/*                 <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="post-preview">*/
/*                 <a href="post.html">*/
/*                     <h2 class="post-title">*/
/*                         I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.*/
/*                     </h2>*/
/*                 </a>*/
/*                 <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="post-preview">*/
/*                 <a href="post.html">*/
/*                     <h2 class="post-title">*/
/*                         Science has not yet mastered prophecy*/
/*                     </h2>*/
/*                     <h3 class="post-subtitle">*/
/*                         We predict too much for the next year and yet far too little for the next ten.*/
/*                     </h3>*/
/*                 </a>*/
/*                 <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="post-preview">*/
/*                 <a href="post.html">*/
/*                     <h2 class="post-title">*/
/*                         Failure is not an option*/
/*                     </h2>*/
/*                     <h3 class="post-subtitle">*/
/*                         Many say exploration is part of our destiny, but it’s actually our duty to future generations.*/
/*                     </h3>*/
/*                 </a>*/
/*                 <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>*/
/*             </div>*/
/*             <hr>*/
/*             <!-- Pager -->*/
/*             <ul class="pager">*/
/*                 <li class="next">*/
/*                     <a href="#">Older Posts &rarr;</a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock main %}*/
