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
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e3888f9f499124d0531f369360c9c904c3216b5d274099d7dc59761498e2e8 = $this->env->getExtension("native_profiler");
        $__internal_d9e3888f9f499124d0531f369360c9c904c3216b5d274099d7dc59761498e2e8->enter($__internal_d9e3888f9f499124d0531f369360c9c904c3216b5d274099d7dc59761498e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e3888f9f499124d0531f369360c9c904c3216b5d274099d7dc59761498e2e8->leave($__internal_d9e3888f9f499124d0531f369360c9c904c3216b5d274099d7dc59761498e2e8_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_6f2a0b08e6c473e53f92a9d06c7724bacfe072da873da5343ee4e90b43f80da8 = $this->env->getExtension("native_profiler");
        $__internal_6f2a0b08e6c473e53f92a9d06c7724bacfe072da873da5343ee4e90b43f80da8->enter($__internal_6f2a0b08e6c473e53f92a9d06c7724bacfe072da873da5343ee4e90b43f80da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "    ";
        $this->loadTemplate("partials/_header.twig", "index.twig", 3)->display($context);
        
        $__internal_6f2a0b08e6c473e53f92a9d06c7724bacfe072da873da5343ee4e90b43f80da8->leave($__internal_6f2a0b08e6c473e53f92a9d06c7724bacfe072da873da5343ee4e90b43f80da8_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_79ff50cb8f73ed9fe596ff644c9be1d7945eeec1954ba8b8ce21dc5f07fb1c97 = $this->env->getExtension("native_profiler");
        $__internal_79ff50cb8f73ed9fe596ff644c9be1d7945eeec1954ba8b8ce21dc5f07fb1c97->enter($__internal_79ff50cb8f73ed9fe596ff644c9be1d7945eeec1954ba8b8ce21dc5f07fb1c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            
            <h2 class=\"text-center page-header\">
                My last news
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
        
        $__internal_79ff50cb8f73ed9fe596ff644c9be1d7945eeec1954ba8b8ce21dc5f07fb1c97->leave($__internal_79ff50cb8f73ed9fe596ff644c9be1d7945eeec1954ba8b8ce21dc5f07fb1c97_prof);

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
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/_master.twig' %}*/
/* {% block header %}*/
/*     {% include 'partials/_header.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             */
/*             <h2 class="text-center page-header">*/
/*                 My last news*/
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
