<?php

/* partials/_header.twig */
class __TwigTemplate_17ceef0eac365195fcc962747bc582fb2e84479c4f40aa6e2ab28fb4ac677028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4941f41ceac3c04d6bf7ccf67e3d3a5e00f518d6c77358787e674df0b3e8c9ce = $this->env->getExtension("native_profiler");
        $__internal_4941f41ceac3c04d6bf7ccf67e3d3a5e00f518d6c77358787e674df0b3e8c9ce->enter($__internal_4941f41ceac3c04d6bf7ccf67e3d3a5e00f518d6c77358787e674df0b3e8c9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/_header.twig"));

        // line 1
        echo "<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "assets/img/home-bg.jpg')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>Anexsoft News</h1>
                    <hr class=\"small\">
                    <span class=\"subheading\">Todo lo que necesitas saber sobre tecnología</span>
                </div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_4941f41ceac3c04d6bf7ccf67e3d3a5e00f518d6c77358787e674df0b3e8c9ce->leave($__internal_4941f41ceac3c04d6bf7ccf67e3d3a5e00f518d6c77358787e674df0b3e8c9ce_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <!-- Page Header -->*/
/* <!-- Set your background image for this header on the line below. -->*/
/* <header class="intro-header" style="background-image: url('{{ paths.theme }}assets/img/home-bg.jpg')">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                 <div class="site-heading">*/
/*                     <h1>Anexsoft News</h1>*/
/*                     <hr class="small">*/
/*                     <span class="subheading">Todo lo que necesitas saber sobre tecnología</span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
