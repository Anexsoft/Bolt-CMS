<?php

/* entradas/listing.twig */
class __TwigTemplate_0ab26b805d01566c1578686f02559c01f83110b556ca9f3a1744565c6f4dac34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "entradas/listing.twig", 1);
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
        $__internal_07d38daa5a09e8cb89329f451197909e636c2333f59631c8d6f4d72f3fe7efe9 = $this->env->getExtension("native_profiler");
        $__internal_07d38daa5a09e8cb89329f451197909e636c2333f59631c8d6f4d72f3fe7efe9->enter($__internal_07d38daa5a09e8cb89329f451197909e636c2333f59631c8d6f4d72f3fe7efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "entradas/listing.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d38daa5a09e8cb89329f451197909e636c2333f59631c8d6f4d72f3fe7efe9->leave($__internal_07d38daa5a09e8cb89329f451197909e636c2333f59631c8d6f4d72f3fe7efe9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2106ddda7445f07fa9c4755049cb97ef661dfe13c4632f15fad0e1af78ec1d30 = $this->env->getExtension("native_profiler");
        $__internal_2106ddda7445f07fa9c4755049cb97ef661dfe13c4632f15fad0e1af78ec1d30->enter($__internal_2106ddda7445f07fa9c4755049cb97ef661dfe13c4632f15fad0e1af78ec1d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["records"]) ? $context["records"] : null));
        echo "

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12\">
            
            <h2 class=\"text-center page-header\">
                Mis publicaciones
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
        
        $__internal_2106ddda7445f07fa9c4755049cb97ef661dfe13c4632f15fad0e1af78ec1d30->leave($__internal_2106ddda7445f07fa9c4755049cb97ef661dfe13c4632f15fad0e1af78ec1d30_prof);

    }

    public function getTemplateName()
    {
        return "entradas/listing.twig";
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
/* {{ dump(records) }}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             */
/*             <h2 class="text-center page-header">*/
/*                 Mis publicaciones*/
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
/*             */
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
